<?php
/***
name:小千哥
wechat:5833487
email:9723331@gmail.com
****/
header('Content-Type: text/html; charset=UTF-8');
class lang {
    public function txt_update($filePath, $content = '', $dirMode = 0755) {
        $directory = dirname($filePath);// 获取文件所在的目录路径
        if (!is_dir($directory) && !mkdir($directory, $dirMode, true)) {
            return false; // 如果目录创建失败，返回false
        }
        return file_put_contents($filePath, $content) !== false;
    }
    public function fanyi_api($text, $a='zh', $b='en') {
        $headers = [
            'authority: translate-pa.googleapis.com',
            'accept: */*',
            'accept-encoding: gzip, deflate, br, zstd',
            'content-type: application/json+protobuf',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/131.0.0.0 Safari/537.36',
            'x-goog-api-key: AIzaSyATBXajvzQLTDHEQbcpq0Ihe0vWDHmO520'
        ];
        try {
            $ch = curl_init("https://translate-pa.googleapis.com/v1/translateHtml");
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode([[$text, $a, $b], "te_lib"]));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
            $response = curl_exec($ch);
            curl_close($ch);
            $result = json_decode($response, true);
            return $result;
        } catch (Exception $e) {
            return '';
        }
    }
    public function get_cf_ip() {
        // 可能包含访问者IP的服务器变量
        $possible_keys = array(
            'HTTP_CLIENT_IP',              // 客户端IP
            'HTTP_X_FORWARDED_FOR',        // 常见代理IP头
            'HTTP_X_FORWARDED',            // 常见代理IP头
            'HTTP_X_CLUSTER_CLIENT_IP',    // 集群或负载均衡
            'HTTP_FORWARDED_FOR',          // 较老的代理格式
            'HTTP_FORWARDED',              // 较老的代理格式
            'HTTP_CF_CONNECTING_IP',       // Cloudflare专用
            'REMOTE_ADDR',                 // 直接连接时的IP
        );
    
        foreach ($possible_keys as $key) {
            if (!empty($_SERVER[$key])) {
                $ip = $_SERVER[$key];
                
                // 如果是多个IP用逗号分隔的情况，取第一个IP
                if (strpos($ip, ',') !== false) {
                    $ip_array = explode(',', $ip);
                    $ip = trim($ip_array[0]);
                }
                
                // 验证IP是否有效
                if (filter_var($ip, FILTER_VALIDATE_IP)) {
                    return $ip;
                }
            }
        }
    
        // 如果以上所有方法都失败，返回本地IP
        return '127.0.0.1';
    }
    /**
     * 处理HTML内容
     */
    public function Lang_Html($html,$to_lang,$route_param) {
        if ($to_lang === 'zh' || $to_lang === 'zh-cn') {//如果是中文不翻译
			return $html;
		}
        $dom = new DOMDocument();// 创建DOM文档对象
        libxml_use_internal_errors(true);// 启用错误抑制，防止HTML解析错误导致脚本中断
        $dom->loadHTML($html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();// 清除之前可能产生的XML解析错误
        
        // 在DOM加载后，翻译处理前添加此代码
        $keyCount = [];//需要翻译文本，出现次数
        $i18nTexts = [];
        $key_error = [];
        $txt_txt = [];
        $xpath = new DOMXPath($dom);// 创建XPath查询对象
        $elements = $xpath->query('//*[@data-i18n]');// 查找所有带有data-i18n属性的元素
        for ($i = 0; $i < $elements->length; $i++) {// 归纳data-i18n属性，并重新赋值
            $element = $elements->item($i);
            $i18nKey = $element->getAttribute('data-i18n');
            if (!isset($keyCount[$i18nKey])) {
                $keyCount[$i18nKey] = 0;
                $element->setAttribute('data-i18n', $i18nKey . '_' . $keyCount[$i18nKey]. '_' .substr(md5($element->textContent), 8, 16));
            } else {
                $keyCount[$i18nKey]++;
                $element->setAttribute('data-i18n', $i18nKey . '_' . $keyCount[$i18nKey]. '_' .substr(md5($element->textContent), 8, 16));
            }
        }
        
        
        
        
        $txt_lang_Path = __DIR__ . '/lang/' . $route_param . '.json';
        if (file_exists($txt_lang_Path)) {// 检查翻译文件是否存在
            $fileContent = file_get_contents($txt_lang_Path);// 如果文件存在，读取语言包文件
            $txt_txt = json_decode($fileContent, true) ?: [];// 解码JSON内容为数组，如果解码失败则使用空数组
        }
        
        // 收集所有需要翻译的文本和对应的键
        for ($i = 0; $i < $elements->length; $i++) {
            $element = $elements->item($i);
            $i18nKey = $element->getAttribute('data-i18n');
            $originalText = $element->textContent;
            
            // 如果是带有placeholder的input元素
            if ($element->nodeName === 'input' && $element->hasAttribute('placeholder')) {
                $originalText = $element->getAttribute('placeholder');
            }else if ($element->nodeName === 'meta' && $element->hasAttribute('content')) {
                $originalText = $element->getAttribute('content');
            }
            
            if (isset($txt_txt[$i18nKey]) == false){// 如果翻译数据中不存在该键，记录原始文本并标记为缺失键
                $i18nTexts[$i18nKey] = $originalText;
                $key_error[] = $i18nKey;
            }
        }
        
        if (!empty($key_error)) {//如果有数据就说明本地缺失翻译，不是空 则
			$fanyi = $this->fanyi_api(array_values($i18nTexts),'zh', $to_lang);//array_values可以只保留键值，去除键名
			if (isset($fanyi[0]) && is_array($fanyi[0])) {//有返回 数据则
			    $txt_txt['qx_user_ip'] = $this->get_cf_ip();//记录用户ip
				for ($i = 0; $i < count($key_error); $i++) {
					if (isset($fanyi[0][$i])) {
						$txt_txt[$key_error[$i]] = $fanyi[0][$i];
					}
				}
				$this->txt_update($txt_lang_Path, json_encode($txt_txt, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));//保存到文件
			}
        }

        
        
        
        
        
        
        
        
        
        
        
        
        
        for ($i = 0; $i < $elements->length; $i++) {// 使用翻译数据替换文本
            $element = $elements->item($i);
            $i18nKey = $element->getAttribute('data-i18n');
            if (isset($txt_txt[$i18nKey])) {
                if ($element->nodeName === 'input' && $element->hasAttribute('placeholder')) {
                    $element->setAttribute('placeholder', $txt_txt[$i18nKey]);
                }else if ($element->nodeName === 'meta' && $element->hasAttribute('content')) {
                    $element->setAttribute('content', $txt_txt[$i18nKey]);
                } else {
                    $element->textContent = $txt_txt[$i18nKey];
                }
            }
        }
        $htmlElement = $dom->getElementsByTagName('html')->item(0)->setAttribute('lang',$to_lang);//自动更新多语言标记
        
        return html_entity_decode($dom->saveHTML(), ENT_QUOTES | ENT_HTML5, 'UTF-8');// 输出修改后的HTML
    }
}
?>