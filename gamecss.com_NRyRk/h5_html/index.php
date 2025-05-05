<?php

/**
 * 生成游戏卡片HTML
 */
function qx_list($qx_list,$web_lang) {
    foreach ($qx_list as $i) {
        echo '<article class="game-card">
            <a href="/'. $web_lang .'/game/' . str_replace(' ', '-', strtolower($i['title_en'])) . '" title="' . $i['title'] . ' - ' . $i['title_en'] . '" class="game-card-link"></a>
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
            </div>
        </article>';
    }
}

function qx_type($web_lang) {
    $json_data = '{
      "single-player": "单人游戏",
      "two-player": "双人游戏",
      "3d-games": "3D游戏",
      "action-games": "动作游戏",
      "adventure-games": "冒险游戏",
      "airplane-simulator": "飞机模拟游戏",
      "arcade-games": "街机游戏",
      "archery-games": "弓箭射击游戏",
      "barbie-dress-up": "芭比装扮游戏",
      "basketball-games": "篮球投篮游戏",
      "board-games": "桌游棋盘游戏",
      "bus-simulator": "巴士模拟游戏",
      "car-games": "汽车驾驶游戏",
      "cat-pet-games": "猫咪宠物游戏",
      "chess-games": "国际象棋对战",
      "coloring-games": "儿童涂色游戏",
      "customization-games": "角色定制游戏",
      "tower-defense": "塔防游戏",
      "doctor-hospital": "医生医院游戏",
      "dress-up-fashion": "时尚装扮游戏",
      "drift-racing": "漂移赛车游戏",
      "driving-simulator": "驾驶模拟游戏",
      "educational-games": "儿童教育游戏",
      "farming-simulator": "农场经营游戏",
      "fighting-games": "格斗对战游戏",
      "fps-games": "第一人称射击游戏",
      "fishing-games": "钓鱼模拟游戏",
      "cooking-games": "烹饪食物游戏",
      "soccer-games": "足球体育游戏",
      "gun-shooting": "枪战射击游戏",
      "io-games": "IO网页游戏",
      "jigsaw-puzzle": "拼图解谜游戏",
      "mahjong-games": "麻将棋牌游戏",
      "makeup-beauty": "美妆化妆游戏",
      "multiplayer-online": "多人在线游戏",
      "other-games": "热门小游戏",
      "pizza-cooking": "披萨烹饪游戏",
      "police-crime": "警匪犯罪游戏",
      "brain-puzzle": "脑力益智游戏",
      "racing-games": "赛车竞速游戏",
      "robot-games": "机器人战争游戏",
      "shooting-games": "射击闯关游戏",
      "snake-games": "经典贪吃蛇",
      "sniper-games": "狙击手射击游戏",
      "solitaire-card": "纸牌接龙游戏",
      "space-games": "太空探险游戏",
      "sports-games": "体育竞技游戏",
      "stickman-games": "火柴人动作游戏",
      "strategy-games": "策略思维游戏",
      "tank-battle": "坦克战争游戏",
      "taxi-simulator": "出租车驾驶游戏",
      "truck-simulator": "卡车模拟游戏",
      "word-games": "单词填字游戏",
      "zombie-games": "僵尸生存游戏"
    }';
    // 将JSON字符串解码为PHP关联数组
    $games = json_decode($json_data, true);

    // 输出各个游戏类别链接
    foreach ($games as $key => $value) {
        echo '<li class="sidebar-item"><a href="/'. $web_lang .'/category/'.$key.'" class="sidebar-link" data-category="'.$key.'"><span data-i18n="sidebar_'.$key.'">'.$value.'</span></a></li>';
    }
}
?>
<?php echo '
<!DOCTYPE html>
<html lang="'. $web_lang .'" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">GameCss - 免费在线游戏平台</title>
    <meta data-i18n="db_description" name="description" content="在GameCss发现并玩最好的免费在线游戏。每天更新动作、赛车、益智等多种类型的游戏。">
    <meta data-i18n="db_keywords" name="keywords" content="在线游戏,免费游戏,flash游戏,HTML5游戏,手机游戏,街机游戏,休闲游戏">
    <meta data-i18n="db_author" name="author" content="GameCss">
    <link rel="canonical" href="https://gamecss.com/" />
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
            --sidebar-width: 240px;
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

        /* Button styles */
        .btn {
            background-color: var(--button-bg);
            color: var(--button-text);
            border: none;
            border-radius: 4px;
            padding: 8px 16px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .btn:hover {
            opacity: 0.9;
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

        /* Sidebar styles */
        .sidebar {
            position: fixed;
            top: var(--header-height);
            left: 0;
            width: var(--sidebar-width);
            height: calc(100vh - var(--header-height));
            background-color: var(--background-color);
            border-right: 1px solid var(--border-color);
            z-index: 900;
            overflow-y: auto;
            transition: transform 0.3s ease;
            scroll-behavior: smooth;
            scrollbar-width: thin;
            scrollbar-color: var(--text-muted) transparent;
        }

        .sidebar::-webkit-scrollbar {
            width: 4px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: transparent;
        }

        .sidebar::-webkit-scrollbar-thumb {
            background-color: var(--text-muted);
            border-radius: 4px;
        }

        .sidebar-categories {
            padding: 12px 0;
        }

        .sidebar-heading {
            padding: 12px 16px 8px;
            font-size: 13px;
            font-weight: 400;
            color: var(--text-muted);
        }

        .sidebar-list {
            list-style: none;
        }

        .sidebar-item {
            margin-bottom: 1px;
        }

        .sidebar-link {
            display: flex;
            align-items: center;
            padding: 10px 16px;
            color: var(--text-color);
            text-decoration: none;
            font-size: 14px;
            transition: background-color 0.2s;
            border-radius: 0;
        }

        .sidebar-link:hover {
            background-color: var(--hover-bg);
        }

        .sidebar-link.active {
            background-color: var(--active-bg);
            color: var(--primary-color);
            font-weight: 500;
        }

        /* Main content styles */
        .main-content {
            margin-top: var(--header-height);
            margin-left: var(--sidebar-width);
            flex: 1;
            padding: 24px;
            transition: margin-left 0.3s ease;
        }

        /* Section styles */
        .section, .category-section {
            margin-bottom: 40px;
            padding-top: 20px;
        }

        .category-title {
            font-size: 20px;
            font-weight: 600;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: center;
            position: relative;
        }

        .category-title:after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 1.5px;
        }

        /* Game grid styles */
        .game-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
            gap: 16px;
            margin-bottom: 20px;
        }

        /* Game card styles */
        .game-card {
            background-color: var(--background-color);
            border-radius: 8px;
            box-shadow: var(--card-shadow);
            overflow: hidden;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
            height: 100%;
        }

        .game-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.05);
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
            aspect-ratio: 16/10;
            object-fit: cover;
        }

        .game-info {
            padding: 12px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .game-title {
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 4px;
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
            font-size: 13px;
            color: #FF9500;
            margin-right: 4px;
        }

        .rating-star {
            width: 12px;
            height: 12px;
            fill: #FF9500;
            margin-right: 4px;
        }

        .rating-count {
            font-size: 12px;
            color: var(--text-muted);
        }

        .game-description {
            font-size: 12px;
            color: var(--text-muted);
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            margin-top: auto;
        }

        /* Footer styles */
        .footer {
            background-color: var(--background-color);
            border-top: 1px solid var(--border-color);
            padding: 40px 0 24px;
            margin-top: 48px;
            margin-left: var(--sidebar-width);
            transition: margin-left 0.3s ease;
        }

        .footer-content {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-section {
            display: flex;
            flex-direction: column;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 16px;
            color: var(--text-color);
        }

        .footer-description {
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 16px;
            line-height: 1.6;
        }

        .footer-heading {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 12px;
            color: var(--text-color);
            position: relative;
            padding-bottom: 8px;
        }

        .footer-heading:after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary-color);
        }

        .footer-text {
            font-size: 14px;
            color: var(--text-muted);
            margin-bottom: 8px;
            line-height: 1.5;
        }

        .footer-bottom {
            padding-top: 20px;
            border-top: 1px solid var(--border-color);
            text-align: center;
        }

        .copyright {
            font-size: 13px;
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

        /* Menu toggle button - hidden by default */
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--text-color);
            font-size: 20px;
            cursor: pointer;
            margin-right: 16px;
        }

        /* Responsive styles */
        @media (max-width: 992px) {
            .sidebar {
                transform: translateX(-100%);
            }

            .sidebar.active {
                transform: translateX(0);
            }

            .main-content {
                margin-left: 0;
            }
            
            .footer {
                margin-left: 0;
            }

            .menu {
                display: none;
            }
            
            .menu-toggle {
                display: block;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
            }
        }

        @media (max-width: 768px) {
            .main-content {
                padding: 16px;
            }
            
            .header {
                padding: 0 16px;
            }
            
            .game-grid {
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                gap: 12px;
            }
            
            .category-title {
                font-size: 18px;
            }
            
            .game-info {
                padding: 10px;
            }
            
            .game-title {
                font-size: 14px;
            }
        }

        @media (max-width: 480px) {
            .game-grid {
                grid-template-columns: repeat(auto-fill, minmax(130px, 1fr));
                gap: 10px;
            }
            
            .game-info {
                padding: 8px;
            }
            
            .rating-container {
                margin-bottom: 6px;
            }
            
            .game-description {
                font-size: 11px;
                -webkit-line-clamp: 1;
            }
            
            .category-section {
                margin-bottom: 30px;
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
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "name": "GameCss",
      "url": "https://gamecss.com/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://gamecss.com/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      },
      "description": "在GameCss发现并玩最好的免费在线游戏。每天更新动作、赛车、益智等多种类型的游戏。"
    }
    </script>
</head>
<body>
    <!-- 头部导航 -->
    <header class="header">
        <div class="container">
            <div class="left">
                <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu">
                    <i class="fas fa-bars"></i>
                </button>
                <a href="/" class="logo">
                    <img src="https://tpc.googlesyndication.com/simgad/16047674695100310335" alt="GameCss Logo" class="logo-icon" width="24" height="24">
                    GameCss
                </a>
                
                <nav class="menu">
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

    <!-- 侧边栏 -->
    <nav class="sidebar">
        <div class="sidebar-categories">
            <h2 class="sidebar-heading" data-i18n="sidebar-heading">游戏分类</h2>
            <ul class="sidebar-list">
                <?php qx_type($web_lang); ?>
            </ul>
        </div>
    </nav>

    <!-- 主内容 -->
    <main class="main-content">
        <section id="trending" class="category-section">
            <h1 class="category-title"><span data-i18n="category-title_zlx">热门游戏</span></h1>
            <div class="game-grid"><?php qx_list($qx_list1,$web_lang); ?></div>
        </section>
    </main>

    <!-- 页脚 -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section about">
                    <div class="logo footer-logo">
                        <img src="https://tpc.googlesyndication.com/simgad/16047674695100310335" alt="GameCss Logo" class="logo-icon" width="24" height="24">
                        GameCss
                    </div>
                    <p class="footer-description" data-i18n="footer-description">GameCss这里不仅有热血沸腾的游戏体验，还有志同道合的玩家相伴，GameCss提供最新的游戏！</p>
                </div>
                
                <div class="footer-section links">
                    <h3 class="footer-heading" data-i18n="footer-wzjs">网站介绍</h3>
                    <p class="footer-text" data-i18n="footer-wzjs-txt">GameCss是一个专注于提供高质量HTML5游戏的平台，我们致力于为玩家提供流畅、有趣的游戏体验。</p>
                </div>
                
                <div class="footer-section categories">
                    <h3 class="footer-heading" data-i18n="footer-yxfl">游戏分类</h3>
                    <p class="footer-text" data-i18n="footer-yxfl-txt">动作游戏 · 益智游戏 · 策略游戏 · 休闲游戏 · 冒险游戏 · 射击游戏 · 体育游戏</p>
                </div>
                
                <div class="footer-section contact">
                    <h3 class="footer-heading" data-i18n="footer-lxfs">联系方式</h3>
                    <p class="footer-text">Email：9723331@gmail.com</p>
                    <p class="footer-text">TG group：<a href="https://t.me/+s-oO8cikly81NDA0">https://t.me/+s-oO8cikly81NDA0</a></p>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p class="copyright">© 2025 GameCss. <span data-i18n="footer-dibu">保留所有权利。本网站游戏版权归原作者所有。</span></p>
            </div>
        </div>
    </footer>




    <!-- JavaScript代码 -->
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
            
            
            
            
            
            
            
            
            
            
            
            
            // 获取所有元素
            const sidebar = document.querySelector('.sidebar');
            const menuToggle = document.getElementById('menuToggle');
            const sidebarLinks = document.querySelectorAll('.sidebar-link');
            const categoryItems = document.querySelectorAll('.category-section');
            
            // 菜单切换功能
            menuToggle.addEventListener('click', function() {
                sidebar.classList.toggle('active');
            });
            
            // 移动端点击主内容区域关闭侧边栏
            const mainContent = document.querySelector('.main-content');
            mainContent.addEventListener('click', function() {
                if (window.innerWidth <= 992 && sidebar.classList.contains('active')) {
                    sidebar.classList.remove('active');
                }
            });
            
            // 响应窗口大小变化
            window.addEventListener('resize', function() {
                if (window.innerWidth > 992) {
                    sidebar.classList.remove('active');
                }
            });
            
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

            // 监听滚动事件，更新侧边栏活动状态
            window.addEventListener('scroll', function() {
                // 获取当前滚动位置
                const scrollPosition = window.scrollY;
                
                // 检查每个分类部分的位置
                let currentSection = '';
                
                categoryItems.forEach(section => {
                    // 获取部分顶部位置（减去一点偏移让切换更自然）
                    const sectionTop = section.offsetTop - 100;
                    const sectionHeight = section.offsetHeight;
                    
                    // 检查当前滚动位置是否在当前部分内
                    if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                        currentSection = section.getAttribute('data-category');
                    }
                });
                
                // 如果找到当前部分，更新侧边栏高亮
                if (currentSection) {
                    // 移除所有侧边栏链接的活动状态
                    sidebarLinks.forEach(link => {
                        link.classList.remove('active');
                    });
                    
                    // 添加当前部分对应的侧边栏链接的活动状态
                    const activeLink = document.querySelector(`.sidebar-link[data-category="${currentSection}"]`);
                    if (activeLink) {
                        activeLink.classList.add('active');
                    }
                }
            });
            
            // 侧边栏链接点击事件
            sidebarLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    // 获取目标分类的ID
                    const targetId = this.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);
                    
                    if (targetSection) {
                        // 平滑滚动到目标位置
                        e.preventDefault();
                        
                        // 计算滚动位置（考虑头部高度）
                        const offsetTop = targetSection.offsetTop - 70;
                        
                        window.scrollTo({
                            top: offsetTop,
                            behavior: 'smooth'
                        });
                        
                        // 移动端关闭侧边栏
                        if (window.innerWidth <= 992) {
                            sidebar.classList.remove('active');
                        }
                    }
                });
            });
            
            // 页面加载时触发一次滚动事件，确保正确高亮显示当前分类
            window.dispatchEvent(new Event('scroll'));
        });
    </script>
</body>
</html>