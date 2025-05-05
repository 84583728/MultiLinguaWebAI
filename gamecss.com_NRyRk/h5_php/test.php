<?php
/***
name:小千哥
wechat:5833487
email:9723331@gmail.com
****/
header('Content-Type: text/html; charset=UTF-8');
class NbHtml {
    public function index($web_lang,$route_param,$filename,$no_langp,$no_lang_len,$yuyan) {
        require_once __DIR__ . '/../lang.php';
        $la = new lang();
        
        ob_start();// 开始输出缓冲
        $qx_list = [
            ['id' => 'lie1', 'text' => '你好'],
            ['id' => 'lie2', 'text' => '不错'],
            ['id' => 'lie3', 'text' => '喜欢']
        ];
        extract(['web_lang'=>$web_lang,'qx_list' => $qx_list]);// 使变量在模板中可用
        include str_replace("h5_php","h5_html", __FILE__);//获取html路径，并渲染到缓存
        $html = ob_get_clean();// 获取生成的HTML
        
        echo $la->Lang_Html($html,$web_lang,$route_param);
    }
}