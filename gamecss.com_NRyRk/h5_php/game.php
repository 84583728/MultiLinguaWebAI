<?php
/***
name:小千哥
wechat:5833487
email:9723331@gmail.com
****/
header('Content-Type: text/html; charset=UTF-8');
class NbHtml {
    public function findFile($titleEn) {
        $indexFile = __DIR__ . '/../assets/index.json';
        if (!file_exists($indexFile)) {
            return "错误: 索引文件 '$indexFile' 不存在";
        }
        $index = json_decode(file_get_contents($indexFile), true);
        if ($index === null) {
            return "错误: 索引文件解析失败";
        }
        if (isset($index[$titleEn])) {
            return $index[$titleEn];
        } else {
            return "未找到: '$titleEn' 不存在于索引中";
        }
    }
    public function index($web_lang,$route_param,$filename,$no_langp,$no_lang_len,$yuyan,$current_url) {
        if($no_lang_len !== 2){
            require_once __DIR__ . '/../error.php';
            $error = new h5_error();
            $error->index(); //路径不存在_跳转404页面
            return '';
        }
        $yuyan_web = [];
        for ($i = 0; $i <  count($yuyan); $i++) {
            $key = array_keys($yuyan)[$i];
            $yuyan_web[] = ['lang' => '/' . $key . $no_langp, 'name' => $yuyan[$key]];
        }
        
        
        
        $game_lu = __DIR__ . '/../assets/'. $this->findFile($filename) .'.json';
        $assets = json_decode(file_get_contents($game_lu), true);
        $foundItem = [];
        foreach ($assets as $item) {
            if (isset($item['title_en']) && $item['title_en'] === $filename) {
                $foundItem = $item;
                break;
            }
        }
        $foundItem['filename'] = $filename;
        
        
        require_once __DIR__ . '/../lang.php';
        $la = new lang();
        ob_start();// 开始输出缓冲
        extract(['web_lang'=>$web_lang,'qx_list' => $assets,'qx_text' => $foundItem,'yuyan' => $yuyan_web,'current_url'=>$current_url]);//保存数据给html使用
        include str_replace("h5_php","h5_html", __FILE__);//获取html路径，并渲染到缓存
        $html = ob_get_clean();// 获取生成的HTML
        echo $la->Lang_Html($html,$web_lang,$route_param);
    }
}