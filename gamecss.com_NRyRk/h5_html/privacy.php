<!DOCTYPE html>
<html lang="zh-CN" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>隐私政策 - GameCss</title>
    <meta name="description" content="GameCss的隐私政策。了解我们如何收集、使用和保护您的个人信息。">
    <meta name="keywords" content="隐私政策,GameCss,用户隐私,数据保护">
    <link rel="canonical" href="https://gamecss.com/privacy-policy" />
    <meta name="robots" content="index, follow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
       <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BLRY5JSQ4J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-BLRY5JSQ4J');
</script>
    <style>
        /* Variables for theme colors and dimensions */
:root {
    --text-color: #191919;
    --background-color: #FFFFFF;
    --border-color: #F0F0F0;
    --button-bg: #07C160;
    --button-text: #FFFFFF;
    --hover-bg: #F5F5F5;
    --active-bg: #F0F9F4;
    --background-light: #F7F7F7;
    --text-muted: #999999;
    --primary-color: #07C160;
    --secondary-color: #ff6b6b;
    --card-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
    --header-height: 68px;
}

/* Dark theme color variables */
[data-theme="dark"] {
    --text-color: #e2e2e2;
    --background-color: #252a37;
    --border-color: #323442;
    --hover-bg: rgba(255, 255, 255, 0.05);
    --active-bg: rgba(7, 193, 96, 0.15);
    --background-light: #1a1c23;
    --text-muted: #a0aec0;
    --card-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
}

/* Base styles */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Noto Sans SC', -apple-system, BlinkMacSystemFont, sans-serif;
    color: var(--text-color);
    line-height: 1.5;
    background-color: var(--background-light);
    min-height: 100vh;
    display: flex;
    flex-direction: column;
    transition: background-color 0.3s ease;
}

.container {
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 16px;
}

/* Header styles */
.header {
    background-color: var(--background-color);
    border-bottom: 1px solid var(--border-color);
    height: var(--header-height);
    display: flex;
    align-items: center;
    padding: 0 24px;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 1000;
}

.header .container {
    display: flex;
    width: 100%;
    justify-content: space-between;
    align-items: center;
    padding: 0;
}

.left {
    display: flex;
    align-items: center;
}

.logo {
    display: flex;
    align-items: center;
    font-size: 18px;
    font-weight: 600;
    margin-right: 32px;
    color: var(--text-color);
    text-decoration: none;
}

.logo-icon {
    width: 24px;
    height: 24px;
    margin-right: 8px;
}

.menu {
    display: flex;
}

.menu-item {
    text-decoration: none;
    color: var(--text-color);
    padding: 8px 16px;
    font-size: 15px;
    font-weight: 500;
    border-radius: 4px;
    margin-right: 4px;
    transition: background-color 0.2s, color 0.2s;
}

.menu-item.active {
    background-color: var(--active-bg);
    color: var(--primary-color);
}

.menu-item:hover:not(.active) {
    background-color: var(--hover-bg);
}

.right {
    display: flex;
    align-items: center;
}

/* Dropdown styles */
.dropdown {
    margin-right: 16px;
    position: relative;
}

.dropdown select {
    appearance: none;
    background-color: transparent;
    border: 1px solid var(--border-color);
    border-radius: 4px;
    padding: 7px 32px 7px 12px;
    font-size: 14px;
    cursor: pointer;
    font-family: inherit;
    color: var(--text-color);
    transition: border-color 0.2s;
}

.dropdown select:hover, .dropdown select:focus {
    border-color: var(--text-muted);
}

.dropdown:after {
    content: '';
    position: absolute;
    right: 12px;
    top: 50%;
    transform: translateY(-50%);
    width: 0;
    height: 0;
    border-left: 5px solid transparent;
    border-right: 5px solid transparent;
    border-top: 5px solid var(--text-muted);
    pointer-events: none;
}

.dropdown select option {
    background-color: var(--background-color);
    color: var(--text-color);
}

/* Main content styles */
.main-content {
    margin-top: var(--header-height);
    flex: 1;
    padding: 24px;
    transition: margin-left 0.3s ease;
}

/* Breadcrumbs */
.breadcrumbs {
    display: flex;
    margin-bottom: 20px;
    font-size: 14px;
}

.breadcrumbs a {
    color: var(--text-muted);
    text-decoration: none;
    transition: color 0.2s;
}

.breadcrumbs a:hover {
    color: var(--primary-color);
}

.breadcrumbs span {
    margin: 0 8px;
    color: var(--text-muted);
}

.breadcrumbs .current {
    color: var(--text-color);
    font-weight: 500;
}

/* Back to home button */
.back-button {
    display: inline-flex;
    align-items: center;
    margin-bottom: 20px;
    color: var(--primary-color);
    text-decoration: none;
    font-weight: 500;
    font-size: 15px;
    transition: opacity 0.2s;
}

.back-button:hover {
    opacity: 0.8;
}

.back-button i {
    margin-right: 6px;
}

/* Privacy policy specific styles */
.policy-container {
    background-color: var(--background-color);
    border-radius: 12px;
    box-shadow: var(--card-shadow);
    padding: 32px;
    margin-bottom: 40px;
}

.policy-title {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 24px;
    padding-bottom: 16px;
    border-bottom: 1px solid var(--border-color);
}

.policy-section {
    margin-bottom: 32px;
}

.policy-section h2 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 16px;
    color: var(--primary-color);
}

.policy-section p {
    margin-bottom: 16px;
    font-size: 16px;
    line-height: 1.6;
}

.policy-section ul {
    margin-bottom: 16px;
    padding-left: 24px;
}

.policy-section li {
    margin-bottom: 8px;
    font-size: 16px;
    line-height: 1.6;
}

.policy-section strong {
    font-weight: 600;
}

.policy-last-updated {
    font-size: 14px;
    color: var(--text-muted);
    font-style: italic;
    margin-top: 32px;
    padding-top: 16px;
    border-top: 1px solid var(--border-color);
}

/* Footer styles */
.footer {
    background-color: var(--background-color);
    border-top: 1px solid var(--border-color);
    padding: 30px 0 20px;
    margin-top: 48px;
}

.footer-content {
    text-align: center;
}

.copyright {
    font-size: 14px;
    color: var(--text-muted);
}

/* Theme toggle button */
.theme-toggle {
    background: none;
    border: none;
    color: var(--text-color);
    font-size: 18px;
    cursor: pointer;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-left: 12px;
    transition: background-color 0.2s, color 0.2s;
}

.theme-toggle:hover {
    background-color: var(--hover-bg);
}

[data-theme="dark"] .theme-toggle .fa-moon {
    display: none;
}

[data-theme="dark"] .theme-toggle .fa-sun {
    display: inline-block;
}

.theme-toggle .fa-sun {
    display: none;
}

.theme-toggle .fa-moon {
    display: inline-block;
}

/* Responsive styles */
@media (max-width: 768px) {
    .main-content {
        padding: 16px;
    }
    
    .header {
        padding: 0 16px;
    }
    
    .policy-container {
        padding: 24px;
    }
    
    .policy-title {
        font-size: 24px;
    }
    
    .policy-section h2 {
        font-size: 20px;
    }
    
    .menu {
        display: none;
        position: absolute;
        top: var(--header-height);
        left: 0;
        width: 100%;
        flex-direction: column;
        background-color: var(--background-color);
        border-bottom: 1px solid var(--border-color);
        padding: 8px 0;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        z-index: 900;
    }
    
    .menu.active {
        display: flex;
    }
    
    .menu-item {
        padding: 12px 24px;
        margin: 0;
        border-radius: 0;
        width: 100%;
    }
}

@media (max-width: 480px) {
    .policy-container {
        padding: 16px;
    }
    
    .policy-title {
        font-size: 22px;
        margin-bottom: 20px;
    }
    
    .policy-section h2 {
        font-size: 18px;
    }
    
    .policy-section p, .policy-section li {
        font-size: 15px;
    }
    
    .dropdown select {
        padding: 7px 28px 7px 8px;
        width: 120px;
    }
    
    .theme-toggle {
        margin-left: 8px;
    }
}

        .lang-selector {
            position: relative;
            margin-right: 16px;
        }

        .selected-lang {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: transparent;
            border: 1px solid var(--border-color);
            border-radius: 4px;
            padding: 7px 12px;
            font-size: 14px;
            cursor: pointer;
            font-family: inherit;
            color: var(--text-color);
            transition: all 0.2s;
            min-width: 120px;
            white-space: nowrap;
            overflow: hidden;
        }
        
        .selected-lang:hover {
            border-color: var(--text-muted);
        }
        
        .selected-lang i {
            margin-left: 8px;
            font-size: 12px;
            transition: transform 0.2s;
            flex-shrink: 0;
        }
        
        .selected-lang.active i {
            transform: rotate(180deg);
        }
        
        .dropdown-menu {
            position: absolute;
            top: 100%;
            right: 0;
            width: 100%;
            height: 500px;
            overflow-y: scroll;
            background-color: var(--background-color);
            border: 1px solid var(--border-color);
            border-radius: 4px;
            margin-top: 4px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            opacity: 0;
            visibility: hidden;
            transform: translateY(-10px);
            transition: opacity 0.2s, visibility 0.2s, transform 0.2s;
            z-index: 1000;
        }
        
        .dropdown-menu.active {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }
        
        
        .dropdown-item {
            display: block;
            padding: 8px 12px;
            color: var(--text-color);
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.2s;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        
        .dropdown-item:hover {
            background-color: var(--hover-bg);
        }
        
        .dropdown-item.active {
            color: var(--primary-color);
            font-weight: 500;
        }
    </style>
</head>
<body>
    <!-- 头部导航 -->
<header class="header">
        <div class="container">
            <div class="left">
                <a href="/" class="logo">
                    <img src="https://tpc.googlesyndication.com/simgad/16047674695100310335" alt="GameCss Logo" class="logo-icon" width="24" height="24">
                    GameCss
                </a>
                <nav class="menu" id="mainMenu">
                    <?php echo '<a href="/'.$web_lang.'" class="menu-item" data-i18n="home">家</a>
                    <a href="/'.$web_lang.'/privacy" class="menu-item" data-i18n="PrivacyPolicy">隐私政策</a>
                    <a href="/'.$web_lang.'/terms" class="menu-item" data-i18n="terms">使用条款</a>';
                    ?>
                </nav>
            </div>
            <div class="right">
                
                <div class="lang-selector" style="position: relative;">
                    <div class="selected-lang">
                        <span id="currentLang">English</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="dropdown-menu">
                        <?php 
                            foreach ($yuyan as $i) {
                                echo '<a href="'.$i['lang'].'" class="dropdown-item">'.$i['name'].'</a>';
                            }
                        ?>
                    </div>
                </div>
                <button id="themeToggle" class="theme-toggle" aria-label="切换主题">
                    <i class="fas fa-moon"></i>
                    <i class="fas fa-sun"></i>
                </button>
            </div>
        </div>
    </header>
    <main class="main-content">
        <div class="container">
            <div class="breadcrumbs">
                <a href="/" data-i18n="home">首页</a>
                <span>/</span>
                <span class="current" data-i18n="privacy">隐私政策</span>
            </div>
            <a href="/" class="back-button"><i class="fas fa-arrow-left"></i> <span data-i18n="fhsy">返回首页</span></a>
            
            <div class="policy-container">
                <h1 class="policy-title" data-i18n="privacy_policy">隐私政策</h1>
                
                <div class="policy-section">
                    <p data-i18n="privacy_intro">GameCss（"我们"或"我们的"）致力于保护您的隐私。本隐私政策解释了当您访问我们的网站 GameCss.com（"网站"）时，我们如何收集、使用和披露您的信息，以及您对这些信息的选择权。</p>
                    <p data-i18n="privacy_using">使用我们的网站即表示您同意本隐私政策中描述的做法。如果您不同意本政策的任何部分，请不要使用我们的网站。</p>
                </div>
                
                <div class="policy-section">
                    <h2 data-i18n="info_collect">我们收集的信息</h2>
                    <p data-i18n="we_collect">我们可能收集以下类型的信息：</p>
                    <ul>
                        <li data-i18n="info_auto"><strong>自动收集的信息：</strong> 当您访问我们的网站时，我们可能会自动收集某些信息，包括您的IP地址、浏览器类型、参考网页、访问时间、访问的页面以及其他统计数据。</li>
                        <li data-i18n="info_cookies"><strong>Cookies和类似技术：</strong> 我们使用cookies和类似技术来跟踪网站活动并保存某些信息。Cookies是浏览器放置在您设备上的小文件。您可以指示您的浏览器拒绝所有cookies或在发送cookie时提示您。但是，如果您不接受cookies，您可能无法使用我们网站的某些功能。</li>
                        <li data-i18n="info_analytics"><strong>分析服务：</strong> 我们可能使用第三方服务提供商，如Google Analytics，帮助分析我们网站的使用情况。这些服务提供商可能使用cookies和其他技术来收集有关您使用我们网站的信息。</li>
                    </ul>
                </div>
                
                <div class="policy-section">
                    <h2 data-i18n="how_use">我们如何使用您的信息</h2>
                    <p data-i18n="use_info">我们可能将收集的信息用于以下目的：</p>
                    <ul>
                        <li data-i18n="use_operate"><strong>运营和维护我们的网站：</strong> 包括提供我们的服务、分析网站性能以及改善用户体验。</li>
                        <li data-i18n="use_personalize"><strong>个性化您的体验：</strong> 根据您的偏好和过去的行为自定义内容和游戏推荐。</li>
                        <li data-i18n="use_analyze"><strong>分析网站使用情况：</strong> 了解用户如何与我们的网站互动，以改进我们的服务和内容。</li>
                        <li data-i18n="use_communicate"><strong>与您沟通：</strong> 回应您的咨询、提供客户支持或向您发送有关我们服务的更新和变更通知。</li>
                        <li data-i18n="use_security"><strong>安全和保护：</strong> 检测、预防和解决与安全、欺诈或技术问题有关的活动。</li>
                    </ul>
                </div>
                
                <div class="policy-section">
                    <h2 data-i18n="share_info">信息共享和披露</h2>
                    <p data-i18n="share_third">我们不会出售或出租您的个人信息。但在以下情况下，我们可能会共享您的信息：</p>
                    <ul>
                        <li data-i18n="share_providers"><strong>服务提供商：</strong> 我们可能会与帮助我们运营网站和提供服务的第三方服务提供商共享信息。</li>
                        <li data-i18n="share_legal"><strong>法律要求：</strong> 如果法律要求或为了响应法律程序、政府请求或保护我们的权利，我们可能会披露您的信息。</li>
                        <li data-i18n="share_business"><strong>业务转让：</strong> 如果我们参与合并、收购或资产出售，您的信息可能会作为此类交易的一部分被转让。</li>
                        <li data-i18n="share_consent"><strong>经您同意：</strong> 在其他情况下取得您的同意后，我们可能会共享您的信息。</li>
                    </ul>
                </div>
                
                <div class="policy-section">
                    <h2 data-i18n="your_choices">您的选择和权利</h2>
                    <p data-i18n="choices_description">根据您所在的地区，您可能拥有以下权利：</p>
                    <ul>
                        <li data-i18n="choice_access"><strong>访问和更新：</strong> 您可以请求访问我们持有的关于您的个人信息，并要求更正不准确的信息。</li>
                        <li data-i18n="choice_delete"><strong>删除：</strong> 在某些情况下，您可以要求删除您的个人信息。</li>
                        <li data-i18n="choice_restrict"><strong>限制处理：</strong> 在某些情况下，您可以要求限制对您个人信息的处理。</li>
                        <li data-i18n="choice_object"><strong>反对：</strong> 您可以反对我们处理您的个人信息。</li>
                        <li data-i18n="choice_portable"><strong>数据可携带性：</strong> 您可以要求以结构化、常用和机器可读的格式接收您的个人信息。</li>
                        <li data-i18n="choice_withdraw"><strong>撤回同意：</strong> 如果我们基于您的同意处理个人信息，您有权随时撤回该同意。</li>
                    </ul>
                    <p data-i18n="choice_contact">要行使这些权利，请通过下方提供的联系方式与我们联系。</p>
                </div>
                
                <div class="policy-section">
                    <h2 data-i18n="data_security">数据安全</h2>
                    <p data-i18n="security_description">我们采取合理的安全措施来保护您的个人信息免受未经授权的访问、使用或披露。然而，没有任何互联网传输或电子存储方法是100%安全的。因此，尽管我们努力使用商业上可接受的方法保护您的个人信息，但我们不能保证其绝对安全。</p>
                </div>
                
                <div class="policy-section">
                    <h2 data-i18n="children">儿童隐私</h2>
                    <p data-i18n="children_description">我们的网站不针对13岁以下的儿童。我们不会故意收集13岁以下儿童的个人身份信息。如果您是父母或监护人，并且您知道您的孩子向我们提供了个人信息，请联系我们。如果我们发现我们收集了13岁以下儿童的个人信息而没有得到可验证的父母同意，我们将采取措施从我们的服务器中删除该信息。</p>
                </div>
                
                <div class="policy-section">
                    <h2 data-i18n="third_party">第三方链接</h2>
                    <p data-i18n="third_party_description">我们的网站可能包含指向第三方网站的链接。这些网站有自己的隐私政策，我们对其内容或做法不负责任。我们鼓励您在提供任何个人信息之前查看这些网站的隐私政策。</p>
                </div>
                
                <div class="policy-section">
                    <h2 data-i18n="changes">对本隐私政策的更改</h2>
                    <p data-i18n="changes_description">我们可能会不时更新本隐私政策。我们会在网站上发布更新后的政策，并更新政策顶部的"最后更新"日期。我们鼓励您定期查看本政策，以了解我们如何保护您的信息。</p>
                </div>
                
                <div class="policy-section">
                    <h2 data-i18n="contact">联系我们</h2>
                    <p data-i18n="contact_description">如果您对本隐私政策有任何疑问或建议，请通过以下方式联系我们：</p>
                    <ul>
                        <li data-i18n="contact_email"><strong>电子邮件：</strong> 9723331@gmail.com</li>
                    </ul>
                </div>
                
                <p class="policy-last-updated" data-i18n="last_updated">最后更新日期：2025年3月17日</p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <p class="copyright">© 2025 GameCss. <span data-i18n="dibu_quanli">保留所有权利。本网站游戏版权归原作者所有。</span></p>
            </div>
        </div>
    </footer>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // 语言切换功能
            const selectedLang = document.querySelector('.selected-lang');
            const dropdownMenu = document.querySelector('.dropdown-menu');
            const currentLangText = document.getElementById('currentLang');
            const langItems = document.querySelectorAll('.dropdown-item');
            
            // 切换下拉菜单的显示/隐藏
            selectedLang.addEventListener('click', function(e) {
                e.preventDefault();
                dropdownMenu.classList.toggle('active');
                selectedLang.classList.toggle('active');
            });
            
            // 点击页面其他地方关闭下拉菜单
            document.addEventListener('click', function(e) {
               if (!selectedLang.contains(e.target) && !dropdownMenu.contains(e.target)) {
                    dropdownMenu.classList.remove('active');
                    selectedLang.classList.remove('active');
                }
            });
            
            
            // 动态调整语言选择器宽度
            function adjustLanguageSelectorWidth() {
                // 计算下拉菜单中最宽项的宽度
                let maxWidth = 0;
                const tempSpan = document.createElement('span');
                tempSpan.style.visibility = 'hidden';
                tempSpan.style.position = 'absolute';
                tempSpan.style.whiteSpace = 'nowrap';
                tempSpan.style.font = window.getComputedStyle(langItems[0]).font;
                document.body.appendChild(tempSpan);
                
                langItems.forEach(item => {
                    tempSpan.textContent = item.textContent;
                    const width = tempSpan.offsetWidth;
                    if (width > maxWidth) {
                        maxWidth = width;
                    }
                });
                
                document.body.removeChild(tempSpan);
                
                // 设置选中项的宽度
                const selectedLangTextWidth = maxWidth;
                const iconWidth = 20; // 估计值，包括图标和边距
                const paddingWidth = 24; // 左右padding总和
                
                // 设置下拉菜单和选中项的宽度
                dropdownMenu.style.width = `${maxWidth + paddingWidth + 5}px`;
                selectedLang.style.width = `${maxWidth + paddingWidth + iconWidth}px`;
            }
            
            // 页面加载和窗口大小改变时调整宽度
            adjustLanguageSelectorWidth();
            window.addEventListener('resize', adjustLanguageSelectorWidth);
            
            // 主题切换功能
            const themeToggle = document.getElementById('themeToggle');
            const htmlElement = document.documentElement;
            
            // 检查本地存储中是否有保存的主题偏好
            const savedTheme = localStorage.getItem('theme');
            if (savedTheme) {
                htmlElement.setAttribute('data-theme', savedTheme);
            }
            
            // 切换主题
            themeToggle.addEventListener('click', function() {
                const currentTheme = htmlElement.getAttribute('data-theme') || 'light';
                const newTheme = currentTheme === 'light' ? 'dark' : 'light';
                
                htmlElement.setAttribute('data-theme', newTheme);
                localStorage.setItem('theme', newTheme);
            });
            

            
            // 响应窗口大小变化
            window.addEventListener('resize', function() {
                if (window.innerWidth > 768 && mainMenu.classList.contains('active')) {
                    mainMenu.classList.remove('active');
                }
            });
        });
    </script></body>
</html>