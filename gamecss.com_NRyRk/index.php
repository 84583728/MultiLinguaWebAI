<?php
/***
name:小千哥
wechat:5833487
email:9723331@gmail.com
****/
    header('Content-Type: text/html; charset=UTF-8');
    function getFilenames($directory) {
        if (!is_dir($directory)) {// 检查目录是否存在
            return [];
        }
        $filenames = [];
        if ($handle = opendir($directory)) {// 打开目录
            while (($file = readdir($handle)) !== false) {// 读取目录中的文件
                if ($file != "." && $file != "..") {// 排除 . 和 .. 目录
                    if (is_file($directory . '/' . $file)) {// 确保只获取文件，不包括子目录
                        $filenames[] = (string)$file; // 确保是文本型
                    }
                }
            }
            closedir($handle);// 关闭目录句柄
        }
        return json_encode($filenames);
    }
    function get_url_lang($input,$yuyan) {
        $yuyan_txt = implode(',', array_keys($yuyan));
        if (preg_match('/>>>>\/(.*?)\//', $input, $matches)) {
            $lang = $matches[1]; // 提取匹配到的语言代码
            if (strpos($yuyan_txt, $lang) !== false) {
                return $lang; // 如果语言代码有效，则返回该语言代码
            }
            return '';
        }
        return '';// 如果在输入中未找到语言代码，返回
    }
    function get_url_code($url,$yuyan) {
        $yuyan_txt = implode(',', array_keys($yuyan));
        if ($url === null || $url === "/" || $url === "") {
            return "";
        }
        $parts = explode("/", $url);// 分割URL
        $a = $parts[1];
        if ($a === "") {
            return "";//这种情况是a.com//abcd导致的
        }
        if (strpos($yuyan_txt, $a) !== false && isset($parts[2])) {// 如果第二部分是语言代码且存在第三部分，返回第三部分  0为锚点2为3
            return $parts[2];
        }
        return $a;// 否则返回第二部分
    }
    function get_no_langp($url,$web_lang) {
        if ($url === null || $url === "/" || $url === "") {
            return "";
        }
        if (!empty($web_lang)) {//语言不为空 则
            $url = ltrim($url, '/');
            $url = ltrim($url, $web_lang);
        }
        return $url;// 否则返回第二部分
    }
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
    $current_url = rtrim(strtolower($protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']), '/');// 获取当前完整URL
    $route_param = parse_url($current_url, PHP_URL_PATH);
    $filename = '';// 提取文件名
    if(!empty($route_param)){
        $path_parts = pathinfo(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
        $actual_filename = isset($path_parts['filename']) ? $path_parts['filename'] : '';
        if (!empty($actual_filename)) {
            $filename = $actual_filename;
        }else{
            $parts = explode('/', ltrim(parse_url($route_param, PHP_URL_PATH), '/'));
            $filename = preg_replace('/\.[^.]+$/', '', end($parts));// 移除可能的扩展名（如.html, .php等）
        }
    }
    $yuyan = [
        "af" => "Afrikaans",
        "az" => "Azərbaycanca",
        "id" => "Bahasa Indonesia",
        "ms" => "Bahasa Melayu",
        "ca" => "Català",
        "cs" => "Čeština",
        "cy" => "Cymraeg",
        "da" => "Dansk",
        "de" => "Deutsch",
        "et" => "Eesti keel",
        "en-gb" => "English (UK)",
        "en" => "English (US)",
        "es" => "Español",
        "es-419" => "Español",
        "eu" => "Euskara",
        "fil" => "Filipino",
        "fr" => "Français",
        "fr-ca" => "Français",
        "ga" => "Gaeilge",
        "gl" => "Galego",
        "hr" => "Hrvatski",
        "it" => "Italiano",
        "zu" => "IsiZulu",
        "is" => "Íslenska",
        "sw" => "Kiswahili",
        "lv" => "Latviešu",
        "lt" => "Lietuvių",
        "hu" => "Magyar",
        "no" => "Norsk (Bokmål)",
        "nl" => "Nederlands",
        "pl" => "Polski",
        "pt-br" => "Português",
        "pt-pt" => "Português",
        "ro" => "Română",
        "sk" => "Slovenčina",
        "sl" => "Slovenščina",
        "fi" => "Suomi",
        "sv" => "Svenska",
        "vi" => "Tiếng Việt",
        "tr" => "Türkçe",
        "el" => "Ελληνικά",
        "bg" => "Български",
        "mn" => "Монгол",
        "ru" => "Русский",
        "sr" => "Српски",
        "uk" => "Українська",
        "hy" => "Հայերեն",
        "iw" => "עברית",
        "ur" => "اردو",
        "ar" => "العربية",
        "fa" => "فارسی",
        "ne" => "नेपाली",
        "mr" => "मराठी",
        "hi" => "हिन्दी",
        "bn" => "বাংলা",
        "gu" => "ગુજરાતી",
        "ta" => "தமிழ்",
        "te" => "తెలుగు",
        "kn" => "ಕನ್ನಡ",
        "ml" => "മലയാളം",
        "si" => "සිංහල",
        "th" => "ภาษาไทย",
        "lo" => "ພາສາລາວ",
        "my" => "မြန်မာဘာသ",
        "ka" => "ქართული",
        "am" => "አማርኛ (Amharic)",
        "chr" => "ᏣᎳᎩ (Cherokee)",
        "km" => "ភាសាខ្មែរ",
        "zh-hk" => "中文 (香港)",
        "zh-tw" => "中文 (繁體)",
        "zh-cn" => "中文 (简体)",
        "ja" => "日本語",
        "ko" => "한국어"
    ];
    $web_lang = get_url_lang('>>>>'. $route_param.'/',$yuyan);
    $url_code = get_url_code($route_param.'/',$yuyan);
    $no_langp = get_no_langp($route_param,$web_lang);
    $no_lang_len = substr_count($no_langp, "/");//计算出现几次
   /**echo "当前语言: " . $web_lang . "<br>";
    echo "当前网址: " . $current_url . "<br>";
    echo "路由参数: " . $route_param . "<br>";
    echo "文件尾名: " . $filename . "<br>";
    echo "执行代码：" . $url_code . "<br>";
    echo "无语言路由：" . $no_langp . "<br>";
    echo "无语言路斜杠数：".$no_lang_len;
    */
    if (empty($web_lang)) {//语言为空 则  默认英语
        $web_lang = 'en';
        if ($route_param === null || $route_param === "/" || $route_param === "") {
            $route_param = '/en/'.$route_param;
        }else{
            $route_param = '/en/'.ltrim($route_param, '/');
        }
    }
    if (empty($url_code)) {//路径段，为空 则  首页
        //echo 'aaaaaaaaaaa';
        $route_param = '/'.$web_lang.'/index';
        $url_code = 'index';
        //echo "路由参数: " . $route_param . "<br>";
        //echo "执行代码：" . $url_code . "<br>";
        $no_langp = get_no_langp($route_param,$web_lang);
        $no_lang_len = substr_count($no_langp, "/");
    }
    
    
    
    
    
    
    
    
    
    if (strpos(getFilenames(__DIR__ . '/h5_php/'),$url_code) !== false) {//页面存在 则
        require_once __DIR__ . '/h5_php/'. $url_code .'.php';
        $NHtml = new NbHtml();
        $NHtml->index($web_lang,$route_param,$filename,$no_langp,$no_lang_len,$yuyan,$current_url); // 将文件名传递给渲染HTML方法
    }else{
       // echo $route_param;
        switch ($route_param) {
            case '/en/robots.txt':
                /**echo "User-agent: *\n";
                echo "Allow: /en\n";        // 允许英文版首页
                echo "Allow: /en/\n";       // 允许带斜杠的英文版首页
                echo "Allow: /ja\n";        // 允许日文版首页
                echo "Allow: /ja/\n";       // 允许带斜杠的日文版首页
                echo "Disallow: /\n";       // 禁止其他所有页面
                
                echo "\nSitemap: https://". $_SERVER['HTTP_HOST'] ."/sitemap.xml";
                
                */
                echo "User-agent: *\nDisallow:\n\nSitemap: https://". $_SERVER['HTTP_HOST'] ."/sitemap.xml";
                break;
                
                
            case '/en/sitemap.xml':
                //echo '111';
                require_once __DIR__ . '/sitemap/sitemap_updata.php';
                if (basename($_SERVER['PHP_SELF']) == basename(__FILE__)) {
                    header('Content-Type: application/xml; charset=UTF-8');
                    $generator = new NbHtml(['domain' => 'https://'.$_SERVER['HTTP_HOST'].'/sitemap']);
                    $generator->generate();
                    echo file_get_contents(__DIR__ . '/sitemap/sitemap.xml');;
                }
                break;
            default:
                require_once __DIR__ . '/error.php';
                $error = new h5_error();
                $error->index(); //路径不存在_跳转404页面
        }
    }
    
    
    
    
    
    
    
    
    
    