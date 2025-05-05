<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>多语言示例html</title>
</head>
<body>
    <select id="languageSelect">
        <option value="zh">中文简体</option>
        <option value="en">English</option>
        <option value="ja">日本语</option>
    </select>
    <h1 data-i18n="abcdlang">多语言示例html</h1>
    <p data-i18n="xiang_tong">你好_相同多语言标记示例1</p>
    <h2>不翻译文本</h2>
    <input type="email" data-i18n="yxxx" placeholder="提示信息翻译案例" required>
    <div><p data-i18n="lh">嵌套多层翻译示例</p></div>
    <p data-i18n="xiang_tong">相同多语言标记示例2</p>
    
    <ul><!--多层列表-->
        <?php 
            foreach ($qx_list as $i) {
                echo '<li data-i18n="lie">' . $i['text'] . '</li>';
            }
        ?>
    </ul>
    <p data-i18n="xiang_tong">相同多语言标记示例3</p>
    
    
    
    <button id="popupBtn">点击测试js翻译示例</button>
    <span data-i18n="tanchuang" style="display:none;">这是一个多语言，隐藏文本，供js使用</span>
    <script>
        document.getElementById('popupBtn').addEventListener('click', function() {
            const popupElement = document.querySelector('[data-i18n^="tanchuang"]');//js的多语言是读取网页上的隐藏文本实现
            alert(popupElement.textContent);
        });
        
        // 语言切换功能
        const languageSelect = document.getElementById('languageSelect');
        languageSelect.addEventListener('change', function() {
            const currentUrl = new URL(window.location.href);
            const currentPath = currentUrl.pathname;
            const supportedLanguages = 'af,az,id,ms,ca,cs,cy,da,de,et,en-gb,en,es,es-419,eu,fil,fr,fr-ca,ga,gl,hr,it,zu,is,sw,lv,lt,hu,no,nl,pl,pt-br,pt-pt,ro,sk,sl,fi,sv,vi,tr,el,bg,mn,ru,sr,uk,hy,iw,ur,ar,fa,ne,mr,hi,bn,gu,ta,te,kn,ml,si,th,lo,my,ka,am,chr,km,zh-hk,zh-tw,zh-cn,zh,ja,ko'.split(',');
            const lowerCaseLanguages = supportedLanguages.map(lang => lang.toLowerCase());
            const pathParts = currentPath.split('/').filter(part => part);
            const nonLanguageParts = [];
            for (const part of pathParts) {
                if (!lowerCaseLanguages.includes(part.toLowerCase())) {
                    nonLanguageParts.push(part);
                }
            }
            let newPath = '/' + this.value;
            if (nonLanguageParts.length > 0) {
                newPath += '/' + nonLanguageParts.join('/');
            }
            if (newPath.length > 1 && newPath.endsWith('/')) {
                newPath = newPath.slice(0, -1);
            }
            const newUrl = currentUrl.origin + newPath;
            window.location.href = newUrl;// 重定向到新URL
        });
    </script>
</body>
</html>