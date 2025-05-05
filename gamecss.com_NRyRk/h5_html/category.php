<?php
    function qx_list($qx_list,$web_lang) {
        foreach ($qx_list as $i) {
            echo '<article class="game-card"><a href="/'. $web_lang .'/game/' . str_replace(' ', '-', strtolower($i['title_en'])) . '" title="' . $i['title'] . ' - ' . $i['title_en'] . '" class="game-card-link"></a>
                <div class="card-content">
                    <img src="' . $i['image'] . '" alt="' . $i['title'] . '-' . $i['title_en'] . ' game screenshot" class="game-image" loading="lazy">
                    <div class="game-info">
                        <h3 class="game-title" data-i18n="title">' . $i['title'] . '</h3>
                        <div class="rating-container">
                            <span class="rating-score">' . (4.0 + (mt_rand(0, 10) / 10)) . '</span>
                            <svg class="rating-star" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z"></path></svg>
                            <span class="rating-count">(' . mt_rand(10000, 99999) . ')</span>
                        </div>
                        <p class="game-description" data-i18n="description">' . $i['description'] . '</p>
                    </div>
                </div></article>';
            
            
    
        }
    }
?>
<?php echo '
<!DOCTYPE html>
<html lang="'. $web_lang .'" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">'.$filename.' - GameCss</title>
    <meta data-i18n="db_description" name="description" content="在GameCss发现并玩最好的免费'.$filename.'。探索我们精选的'.$filename.'。">
    <meta data-i18n="db_keywords" name="keywords" content="'.$filename.',单人游戏,免费游戏,HTML5游戏,手机游戏,休闲游戏">
    <link rel="canonical" href="https://gamecss.com/category/single-player" />
    <meta name="robots" content="index, follow">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">';
?>
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

/* Menu toggle button styles removed */

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

/* Section styles */
.category-section {
    margin-bottom: 40px;
    padding-top: 20px;
}

.category-header {
    margin-bottom: 24px;
}

.category-title {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 12px;
}

.category-description {
    font-size: 16px;
    color: var(--text-muted);
    max-width: 800px;
    line-height: 1.6;
}

/* Game grid styles */
.game-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
    gap: 20px;
    margin-bottom: 20px;
}

/* Game card styles */
.game-card {
    background-color: var(--background-color);
    border-radius: 12px;
    box-shadow: var(--card-shadow);
    overflow: hidden;
    transition: transform 0.2s, box-shadow 0.2s;
    position: relative;
    height: 100%;
}

.game-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
}

.game-card-link {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 1;
}

.card-content {
    display: flex;
    flex-direction: column;
    height: 100%;
}

.game-image {
    width: 100%;
    aspect-ratio: 16/9;
    object-fit: cover;
}

.game-info {
    padding: 12px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
}

.game-title {
    font-size: 16px;
    font-weight: 600;
    margin-bottom: 6px;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: nowrap;
}

.rating-container {
    display: flex;
    align-items: center;
    margin-bottom: 8px;
}

.rating-score {
    font-weight: 500;
    font-size: 14px;
    color: #FF9500;
    margin-right: 4px;
}

.rating-star {
    width: 14px;
    height: 14px;
    fill: #FF9500;
    margin-right: 4px;
}

.rating-count {
    font-size: 13px;
    color: var(--text-muted);
}

.game-description {
    font-size: 13px;
    color: var(--text-color);
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
    margin-top: auto;
    line-height: 1.5;
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

/* Responsive styles */
@media (max-width: 768px) {
    .main-content {
        padding: 16px;
    }
    
    .header {
        padding: 0 16px;
    }
    
    .game-grid {
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 14px;
    }
    
    .category-title {
        font-size: 24px;
    }
    
    .category-description {
        font-size: 15px;
    }
    
    .game-info {
        padding: 12px;
    }
    
    .game-title {
        font-size: 16px;
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
    
    /* menu-toggle display: block removed */
}

@media (max-width: 480px) {
    .game-grid {
        grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        gap: 10px;
    }
    
    .game-info {
        padding: 10px;
    }
    
    .rating-container {
        margin-bottom: 8px;
    }
    
    .game-description {
        font-size: 13px;
        -webkit-line-clamp: 2;
    }
    
    .category-description {
        font-size: 14px;
    }
    
    .dropdown select {
        padding: 7px 28px 7px 8px;
        width: 120px;
    }
    
    .theme-toggle {
        margin-left: 8px;
    }
    
    .category-title {
        font-size: 20px;
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
                <span class="current" data-i18n="fl_name1"><?php echo $filename; ?></span>
            </div>
            <a href="/" class="back-button"><i class="fas fa-arrow-left"></i> <span data-i18n="fhsy">返回首页</span></a>
            <div class="category-header">
                <h1 class="category-title" data-i18n="fl_name1"><?php echo $filename; ?></h1>
                <p class="category-description" data-i18n="yxjs_description">探索我们精选的单人游戏集合。这些游戏专为单人体验设计，从休闲到挑战性游戏应有尽有。找到适合你的完美游戏，开始你的冒险吧！</p>
            </div>
            <div class="game-grid"><?php qx_list($qx_list,$web_lang); ?></div>
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
    </script>
</body>
</html>