<!DOCTYPE html>
<html lang="zh-CN" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>使用条款 - GameCss</title>
    <meta name="description" content="GameCss的使用条款。了解使用我们网站和服务的规则和条件。">
    <meta name="keywords" content="使用条款,GameCss,用户协议,服务条款">
    <link rel="canonical" href="https://gamecss.com/terms-of-service" />
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

/* Terms of service specific styles */
.terms-container {
    background-color: var(--background-color);
    border-radius: 12px;
    box-shadow: var(--card-shadow);
    padding: 32px;
    margin-bottom: 40px;
}

.terms-title {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 24px;
    padding-bottom: 16px;
    border-bottom: 1px solid var(--border-color);
}

.terms-section {
    margin-bottom: 32px;
}

.terms-section h2 {
    font-size: 22px;
    font-weight: 600;
    margin-bottom: 16px;
    color: var(--primary-color);
}

.terms-section p {
    margin-bottom: 16px;
    font-size: 16px;
    line-height: 1.6;
}

.terms-section ul {
    margin-bottom: 16px;
    padding-left: 24px;
}

.terms-section li {
    margin-bottom: 8px;
    font-size: 16px;
    line-height: 1.6;
}

.terms-section strong {
    font-weight: 600;
}

.terms-last-updated {
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
    
    .terms-container {
        padding: 24px;
    }
    
    .terms-title {
        font-size: 24px;
    }
    
    .terms-section h2 {
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
    .terms-container {
        padding: 16px;
    }
    
    .terms-title {
        font-size: 22px;
        margin-bottom: 20px;
    }
    
    .terms-section h2 {
        font-size: 18px;
    }
    
    .terms-section p, .terms-section li {
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
                <span class="current" data-i18n="terms">使用条款</span>
            </div>
            <a href="/" class="back-button"><i class="fas fa-arrow-left"></i> <span data-i18n="fhsy">返回首页</span></a>
            
            <div class="terms-container">
                <h1 class="terms-title" data-i18n="terms_of_service">使用条款</h1>
                
                <div class="terms-section">
                    <p data-i18n="terms_intro">欢迎访问GameCss（"我们"、"我们的"或"本网站"）。这些使用条款（"条款"）规定了您访问和使用GameCss.com网站及其服务的条件。请仔细阅读这些条款。</p>
                    <p data-i18n="terms_agree">访问或使用我们的网站即表示您同意受这些条款的约束。如果您不同意这些条款的任何部分，您可能不得访问网站或使用我们的任何服务。</p>
                </div>
                
                <div class="terms-section">
                    <h2 data-i18n="account_registration">账户注册</h2>
                    <p data-i18n="account_description">当您在我们的网站上创建账户时，您必须提供准确、完整和最新的信息。您有责任保护您的账户密码的安全性，并对在您的账户下发生的所有活动负责。</p>
                    <p data-i18n="account_violation">如果您发现您的账户有任何安全漏洞或未经授权的使用，请立即通知我们。我们保留在我们自行决定认为适当的情况下拒绝服务、终止账户或取消订单的权利。</p>
                </div>
                
                <div class="terms-section">
                    <h2 data-i18n="user_content">用户内容</h2>
                    <p data-i18n="user_content_description">我们的网站可能允许您发布、链接、存储、共享和以其他方式提供某些信息、文本、图形、视频或其他材料（"内容"）。您对您在网站上或通过网站提供的所有内容负全部责任。</p>
                    <p data-i18n="user_content_restrictions">您不得传输、存储、共享、显示或以其他方式上传任何以下内容：</p>
                    <ul>
                        <li data-i18n="content_illegal">违反任何适用法律、法规或规章的内容；</li>
                        <li data-i18n="content_harmful">威胁、滥用、骚扰、诽谤、欺骗、欺诈、侵犯隐私、侵犯肖像权或其他法律权利的内容；</li>
                        <li data-i18n="content_spam">未经请求的或未经授权的广告、促销材料、垃圾邮件、垃圾信息或任何其他形式的招揽；</li>
                        <li data-i18n="content_impersonation">冒充任何人或实体或以其他方式歪曲您与任何人或实体的关系；</li>
                        <li data-i18n="content_ip">侵犯专利、商标、商业秘密、版权或其他知识产权的内容；</li>
                        <li data-i18n="content_virus">包含病毒、恶意代码或旨在限制或破坏任何计算机软件或硬件功能的任何其他类似软件或程序的内容。</li>
                    </ul>
                </div>
                
                <div class="terms-section">
                    <h2 data-i18n="intellectual_property">知识产权</h2>
                    <p data-i18n="ip_description">本网站及其原始内容、功能和特性归GameCss或其许可方所有，并受国际版权、商标、专利、商业秘密和其他知识产权或专有权利法律的保护。</p>
                    <p data-i18n="ip_games">网站上提供的游戏内容由原始创作者或许可方拥有，并根据其各自的许可条款提供。在使用这些游戏之前，请查看相关的许可协议。</p>
                </div>
                
                <div class="terms-section">
                    <h2 data-i18n="acceptable_use">可接受的使用</h2>
                    <p data-i18n="acceptable_use_description">您同意不出于以下目的使用我们的网站：</p>
                    <ul>
                        <li data-i18n="use_unlawful">以任何非法或违反任何地方、州、国家或国际法律、规则或法规的方式使用；</li>
                        <li data-i18n="use_harm">对未成年人造成伤害或试图伤害未成年人的方式使用；</li>
                        <li data-i18n="use_impersonate">冒充或尝试冒充GameCss、GameCss员工、另一个用户或任何其他人或实体；</li>
                        <li data-i18n="use_interfere">以干扰或破坏网站、服务器或网站连接的网络的安全性的方式使用；</li>
                        <li data-i18n="use_privacy">干扰任何其他用户的隐私、享用我们网站的能力，或任何其他可能使用户面临损害的方式使用；</li>
                        <li data-i18n="use_data">收集或存储我们网站其他用户的个人数据；</li>
                        <li data-i18n="use_reproduce">复制、修改、准备衍生作品、分发、许可、出售、转售、转让、公开展示、公开表演、传播、广播或以其他方式利用我们网站或网站内容，除非我们明确允许；</li>
                        <li data-i18n="use_reverse">进行反向工程、反编译、反汇编或以其他方式尝试发现我们网站或我们服务相关的任何源代码；</li>
                        <li data-i18n="use_automatic">使用机器人、蜘蛛、爬虫或其他自动方式访问我们的网站获取内容或服务。</li>
                    </ul>
                </div>
                
                <div class="terms-section">
                    <h2 data-i18n="disclaimer">免责声明</h2>
                    <p data-i18n="disclaimer_description">您对网站的使用风险完全由您自己承担。该网站及其内容按"原样"和"可用"提供，不提供任何形式的担保，无论是明示的还是暗示的。GameCss不对网站的运营或可用性做出任何保证或陈述。</p>
                    <p data-i18n="disclaimer_accuracy">在法律允许的最大范围内，GameCss不保证信息、内容、材料、产品或网站上提供的其他服务的完整性、安全性、可靠性、准确性或可用性，或与之相关的服务器不含病毒或其他有害组件。</p>
                </div>
                
                <div class="terms-section">
                    <h2 data-i18n="limitation_liability">责任限制</h2>
                    <p data-i18n="limitation_description">在法律允许的最大范围内，GameCss、其关联公司、高管、董事、员工、代理人不对因访问或使用网站或无法访问或使用网站而引起的任何直接、间接、附带、特殊、后果性或惩罚性损害负责，包括但不限于损失数据、利润或商业，无论是基于保证、合同、侵权（包括疏忽）或任何其他法律理论，无论我们是否被告知此类损害的可能性。</p>
                </div>
                
                <div class="terms-section">
                    <h2 data-i18n="termination">终止</h2>
                    <p data-i18n="termination_description">我们可以在任何时候因任何原因终止或暂停对我们网站的访问，恕不另行通知，包括但不限于您违反这些条款。终止后，您使用网站的权利将立即停止。</p>
                </div>
                
                <div class="terms-section">
                    <h2 data-i18n="governing_law">管辖法律</h2>
                    <p data-i18n="governing_law_description">这些条款应受中国法律管辖并根据中国法律解释，不考虑其冲突法规定。</p>
                </div>
                
                <div class="terms-section">
                    <h2 data-i18n="changes_to_terms">条款变更</h2>
                    <p data-i18n="changes_to_terms_description">我们保留在任何时候修改或更换这些条款的权利。修改后的条款将在网站上发布时生效。继续使用网站即表示您同意受修改后的条款约束。</p>
                </div>
                
                <div class="terms-section">
                    <h2 data-i18n="contact_us">联系我们</h2>
                    <p data-i18n="contact_us_description">如果您对这些使用条款有任何疑问，请通过以下方式联系我们：</p>
                    <ul>
                        <li data-i18n="contact_us_email"><strong>电子邮件：</strong> 9723331@gmail.com</li>
                    </ul>
                </div>
                
                <p class="terms-last-updated" data-i18n="last_updated">最后更新日期：2025年3月10日</p>
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
            
            // 菜单切换功能
            const menuToggle = document.getElementById('menuToggle');
            const mainMenu = document.getElementById('mainMenu');
            
            menuToggle.addEventListener('click', function() {
                mainMenu.classList.toggle('active');
            });
            
            // 点击页面其他区域关闭菜单
            document.addEventListener('click', function(event) {
                const isMenuToggleClick = menuToggle.contains(event.target);
                const isMenuClick = mainMenu.contains(event.target);
                
                if (!isMenuToggleClick && !isMenuClick && mainMenu.classList.contains('active')) {
                    mainMenu.classList.remove('active');
                }
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