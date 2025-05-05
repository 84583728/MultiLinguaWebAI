<?php
/***
name:小千哥
wechat:5833487
email:9723331@gmail.com
****/
header('Content-Type: text/html; charset=UTF-8');
class NbHtml {
    private $config;// 配置参数
    private $sitemaps = [];// 存储所有生成的 sitemap 文件的信息
    public function __construct($config = []) {
        $defaultConfig = [
            'domain' => 'https://域名', // 请替换为你的实际域名
            'langDir' => 'lang', // 语言文件夹路径
            'sitemapDir' => 'sitemap', // sitemap 输出目录
            'changeFreq' => 'hourly', // 更新频率
            'priority' => '1.0', // 优先级
        ];
        $this->config = array_merge($defaultConfig, $config);// 合并配置
        if (!file_exists($this->config['sitemapDir'])) {// 确保 sitemap 输出目录存在
            mkdir($this->config['sitemapDir'], 0755, true);
        }
    }
    public function generate() {
        $this->scanLangDirectory();
        $this->generateSitemapIndex();
        return count($this->sitemaps);
    }
    private function scanLangDirectory() {//扫描语言目录，生成 sitemap 结构
        $languages = glob($this->config['langDir'] . '/*', GLOB_ONLYDIR);// 获取所有语言目录
        foreach ($languages as $langPath) {
            $lang = basename($langPath);
            $rootJsonFiles = glob("$langPath/*.json");// 处理根级 JSON 文件（例如：lang/en/index.json, lang/en/terms.json）
            if (!empty($rootJsonFiles)) {
                $sitemapFile = "$lang.xml";
                $sitemapPath = $this->config['sitemapDir'] . '/' . $sitemapFile;
                $this->generateSitemapFile($rootJsonFiles, $sitemapPath, $lang, '');
                $this->sitemaps[] = ['loc' => $this->config['domain'] . '/' . $sitemapFile,'lastmod' => date('c')];
            }
            $this->processSubdirectories($langPath, $lang, '');// 递归处理子目录
        }
    }

    /**
     * 递归处理子目录，为每个目录生成对应的 sitemap
     * 
     * @param string $basePath 基础路径
     * @param string $lang 语言代码
     * @param string $currentPath 当前相对路径
     */
    private function processSubdirectories($basePath, $lang, $currentPath) {
        $directories = glob("$basePath/*", GLOB_ONLYDIR);
        foreach ($directories as $dirPath) {
            $dirName = basename($dirPath);
            $newPath = $currentPath ? "$currentPath/$dirName" : $dirName;
            $jsonFiles = glob("$dirPath/*.json");// 获取当前目录中的 JSON 文件
            if (!empty($jsonFiles)) {
                $xmlPath = $currentPath ? "$lang/$currentPath" : $lang;// 为当前目录创建 sitemap
                $sitemapFile = "$xmlPath/$dirName.xml";
                $sitemapPath = $this->config['sitemapDir'] . '/' . $sitemapFile;
                $outputDir = dirname($sitemapPath);// 确保输出目录存在
                if (!file_exists($outputDir)) {
                    mkdir($outputDir, 0755, true);
                }
                $this->generateSitemapFile($jsonFiles, $sitemapPath, $lang, $newPath);// 生成 sitemap 文件
                $this->sitemaps[] = [
                    'loc' => $this->config['domain'] . '/' . $sitemapFile,
                    'lastmod' => date('c')
                ];// 添加到 sitemap 索引
            }
            $this->processSubdirectories($dirPath, $lang, $newPath);// 递归处理子目录
        }
    }

    /**
     * 生成单个 sitemap XML 文件
     * 
     * @param array $jsonFiles JSON 文件列表
     * @param string $outputPath 输出路径
     * @param string $lang 语言代码
     * @param string $basePath 基础路径
     * @return string 生成的文件路径
     */
    private function generateSitemapFile($jsonFiles, $outputPath, $lang, $basePath) {
        $dom = new DOMDocument('1.0', 'UTF-8');// 创建 XML 文档
        $dom->formatOutput = true;
        $urlset = $dom->createElement('urlset');// 创建根元素
        $urlset->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $dom->appendChild($urlset);
        foreach ($jsonFiles as $jsonFile) {// 为每个 JSON 文件添加 URL 条目
            $filename = pathinfo($jsonFile, PATHINFO_FILENAME);
            // 计算 URL 路径
            $urlPath = $basePath ? $this->config['domain'] . '/' . $lang . '/' . $basePath . '/' . $filename: $this->config['domain'] . '/' . $lang . '/' . $filename;
            $url = $dom->createElement('url');// 创建 URL 元素
            $url->appendChild($dom->createElement('loc', $urlPath));// 添加位置
            $url->appendChild($dom->createElement('lastmod', date('c')));// 添加最后修改时间
            $url->appendChild($dom->createElement('changefreq', $this->config['changeFreq']));// 添加更新频率
            $url->appendChild($dom->createElement('priority', $this->config['priority']));// 添加优先级
            $urlset->appendChild($url);// 将 URL 添加到 urlset
        }
        $outputDir = dirname($outputPath);// 确保输出目录存在
        if (!file_exists($outputDir)) {
            mkdir($outputDir, 0755, true);
        }
        $dom->save($outputPath);// 保存 XML 文件
        return $outputPath;
    }
    private function generateSitemapIndex() {
        $dom = new DOMDocument('1.0', 'UTF-8');
        $dom->formatOutput = true;
        $sitemapindex = $dom->createElement('sitemapindex');// 创建根元素
        $sitemapindex->setAttribute('xmlns', 'http://www.sitemaps.org/schemas/sitemap/0.9');
        $sitemapindex->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
        $sitemapindex->setAttribute('xsi:schemaLocation', 'http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/siteindex.xsd');
        $dom->appendChild($sitemapindex);
        foreach ($this->sitemaps as $sitemap) {// 添加每个 sitemap 条目
            $sitemapElement = $dom->createElement('sitemap');
            $loc = $dom->createElement('loc', $sitemap['loc']);
            $sitemapElement->appendChild($loc);// 添加位置
            $lastmod = $dom->createElement('lastmod', $sitemap['lastmod']);
            $sitemapElement->appendChild($lastmod);// 添加最后修改时间
            $sitemapindex->appendChild($sitemapElement);// 将 sitemap 添加到索引
        }
        $outputPath = $this->config['sitemapDir'] . '/sitemap.xml';
        $dom->save($outputPath);// 保存 XML 文件
        return $outputPath;
    }
}
?>