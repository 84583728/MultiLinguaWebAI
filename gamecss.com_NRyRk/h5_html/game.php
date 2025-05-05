<?php echo '
    <html lang="'. $web_lang .'" data-theme="light"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title data-i18n="title">'. $qx_text["title"].'  '.$qx_text["filename"] .' - GameCss</title>
    <meta data-i18n="db_description" name="description" content="'.$qx_text['description'].'">
    <meta data-i18n="db_keywords" name="keywords" content="'. $qx_text["title"].','.$qx_text["filename"] .',game,gamecss">
    <meta data-i18n="db_author" name="author" content="'. $qx_text["title"].'">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;500;700&amp;display=swap" rel="stylesheet">
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
        :root {
            --text-color: #191919;
            --background-color: #FFFFFF;
            --border-color: #F0F0F0;
            --button-bg: #07C160; /* 微信绿色 */
            --button-text: #FFFFFF;
            --background-light: #F7F7F7;
            --text-muted: #999999;
            --primary-color: #07C160;
            --card-shadow: 0 1px 3px rgba(0, 0, 0, 0.05);
            --hover-bg: #F5F5F5;
        }
        
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
            transition: background-color 0.3s ease, color 0.3s ease;
        }
        
        .container {
            width: 100%;
            max-width: 89%;
            margin: 0 auto;
            padding: 0 16px;
        }
        
        /* 头部导航样式 */
        .header {
            background-color: var(--background-color);
            border-bottom: 1px solid var(--border-color);
            height: 60px;
            display: flex;
            align-items: center;
            padding: 0 16px;
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
        }
        
        .menu-item.active {
            color: var(--primary-color);
        }
        
        .dropdown {
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
            border-top: 5px solid #666;
            pointer-events: none;
        }
        
        /* 游戏详情页主要结构 */
        .game-detail-layout {
            display: flex;
            width: 100%;
            margin-top: 20px;
        }
        
        .sidebar {
            width: 250px;
            background-color: var(--background-color);
        }
        
        .left-sidebar {
            border-right: 1px solid var(--border-color);
        }
        
        .right-sidebar {
            border-left: 1px solid var(--border-color);
        }
        
        .main-content {
            flex: 1;
            padding: 0 20px;
            min-width: 0;
        }
        
        .bottom-content {
            clear: both;
            margin-top: 20px;
            padding: 15px;
            background-color: var(--background-color);
            border-top: 1px solid var(--border-color);
        }
        
        /* 侧边栏游戏卡片样式 */
        
        
        .sidebar-title .icon {
            width: 20px;
            height: 20px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            background-color: var(--primary-color);
            color: white;
            margin-right: 8px;
            font-size: 12px;
        }
        
        .game-card {
            display: flex;
            flex-direction: column;
            background-color: var(--background-color);
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 15px;
            box-shadow: var(--card-shadow);
            cursor: pointer;
        }
        
        .game-card:hover {
            transform: translateY(-2px);
            transition: transform 0.2s;
        }
        
        .card-img {
            width: 100%;
            height: 100px;
            object-fit: cover;
        }
        
        .card-info {
            padding: 8px;
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
        
        .card-title {
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 4px;
        }
        
        .card-meta {
            display: flex;
            align-items: center;
            font-size: 12px;
            color: var(--text-muted);
        }
        
        .card-rating {
            color: #ffc107;
            margin-right: 8px;
            display: flex;
            align-items: center;
        }
        
        .card-rating i {
            margin-right: 2px;
            font-size: 10px;
        }
        
        /* 主游戏内容区域 */
        .game-iframe-container {
            width: 100%;
            background-color: #000;
            position: relative;
            padding-top: 56.25%; /* 16:9 比例 */
            border-radius: 8px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        .game-iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .start-btn {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: var(--button-bg);
            color: white;
            border: none;
            border-radius: 24px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
        }
        
        .start-btn i {
            margin-right: 8px;
        }

        .game-image {
            width: 100%;
            aspect-ratio: 16/10;
            object-fit: cover;
        }
        
        .game-title {
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 4px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }
        
        .game-meta {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            margin-bottom: 15px;
            font-size: 13px;
            color: var(--text-muted);
        }
        
        .game-meta-item {
            margin-right: 15px;
            display: flex;
            align-items: center;
        }
        
        .game-meta-item i {
            margin-right: 5px;
        }
        
        .game-tags {
            display: flex;
            flex-wrap: wrap;
            margin-bottom: 15px;
        }
        
        .game-tag {
            display: inline-block;
            padding: 3px 12px;
            /* background-color: #f0f0f0; */
            color: var(--primary-color);
            border-radius: 12px;
            font-size: 12px;
            margin-right: 8px;
            margin-bottom: 8px;
        }
        
        .game-description {
            /* background-color: var(--background-color); */
            /* padding: 15px; */
            border-radius: 8px;
            /* margin-top: 15px; */
            /* box-shadow: var(--card-shadow); */
        }
        
        .desc-title {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            color: var(--primary-color);
        }
        
        .desc-title i {
            margin-right: 8px;
        }
        
        .desc-content {
            font-size: 14px;
            line-height: 1.6;
        }
        
        .desc-content ul {
            padding-left: 20px;
            margin-top: 10px;
        }
        
        .desc-content li {
            margin-bottom: 5px;
        }

        .sidebar-title {
            font-size: 16px;
            font-weight: 500;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }
        
        /* 页脚样式 */
.footer {
    background-color: var(--background-color);
    border-top: 1px solid var(--border-color);
    padding: 40px 0 24px;
    margin-top: 48px;
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

.logo-icon {
    width: 24px;
    height: 24px;
    margin-right: 8px;
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

/* 响应式调整 */
@media (max-width: 992px) {
    .footer-content {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .footer-content {
        grid-template-columns: 1fr;
    }
    
    .footer {
        padding: 30px 0 20px;
    }
}

        .social-links {
            display: flex;
            gap: 12px;
        }

        .social-link {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background-color: #f5f5f5;
            color: var(--text-color);
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .social-link:hover {
            background-color: var(--primary-color);
            color: white;
        }

        .social-link i {
            font-size: 16px;
        }

        .footer-heading {
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 16px;
            color: var(--text-color);
        }

        .footer-list {
            list-style: none;
        }

        .footer-list li {
            margin-bottom: 10px;
        }

        .footer-list a {
            color: var(--text-muted);
            text-decoration: none;
            font-size: 13px;
            transition: color 0.2s;
        }

        .footer-list a:hover {
            color: var(--primary-color);
        }

        .newsletter-form {
            display: flex;
            margin-top: 12px;
        }

        .newsletter-form input {
            flex: 1;
            padding: 8px 12px;
            border: 1px solid var(--border-color);
            border-radius: 4px 0 0 4px;
            font-size: 13px;
            font-family: inherit;
            color: var(--text-color);
            background-color: var(--background-color);
        }

        .newsletter-form .btn {
            border-radius: 0 4px 4px 0;
            padding: 8px 16px;
            background-color: var(--button-bg);
            color: var(--button-text);
            border: none;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .newsletter-form .btn:hover {
            opacity: 0.9;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-top: 24px;
            border-top: 1px solid var(--border-color);
            font-size: 12px;
            color: var(--text-muted);
        }

        .footer-bottom-links {
            display: flex;
            gap: 16px;
        }

        .footer-bottom-links a {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.2s;
        }

        .footer-bottom-links a:hover {
            color: var(--primary-color);
        }
        
        /* 响应式设计 */
        @media (max-width: 1600px) {
            .game-iframe-container {
                height: 80vh;
            }
            .sidebar {
                display: none !important;
            }
        }
        @media (max-width: 992px) {
            .game-iframe-container {
                height: 80vh;
            }
            
            .menu {
                display: none !important;
            }
            .container {
                max-width: 100%;
                height: 500px;
                padding: 0;
                margin: 0;
            }
            .game-detail-layout {
                flex-direction: column;
            }
            
            .sidebar {
                display: none !important;
                width: 100%;
                margin-bottom: 20px;
                border: none;
                display: grid;
                grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
                gap: 10px;
            }
            
            .sidebar-title {
                grid-column: 1 / -1;
            }
            
            .footer {
                display: none !important;
            }
            
            .footer-content {
                grid-template-columns: repeat(2, 1fr);
                gap: 24px;
            }
        }
        
        @media (max-width: 768px) {
            .game-meta {
                flex-direction: column;
                align-items: flex-start;
            }
            
            .game-meta-item {
                margin-bottom: 5px;
            }

            .footer {
                display: none !important;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
                gap: 32px;
            }
            
            .footer-bottom {
                flex-direction: column;
                gap: 16px;
                text-align: center;
            }
            
            .footer-bottom-links {
                justify-content: center;
            }
        }
        
        @media (max-width: 576px) {
            .social-links {
                justify-content: center;
            }
            
            .theme-toggle {
                margin-left: 8px;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
            
            .newsletter-form input {
                border-radius: 4px;
                margin-bottom: 8px;
            }
            
            .newsletter-form .btn {
                border-radius: 4px;
                width: 100%;
            }
        }
        
        /* 主题切换按钮 */
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
        
        
        
        
        
        
        
        
        
        
        
    
    
        
        .dropdown select {
            transition: border-color 0.2s;
        }
        
        .dropdown select:hover, .dropdown select:focus {
            border-color: var(--text-muted);
        }
        
        .dropdown:after {
            border-top: 5px solid var(--text-muted);
        }
        
        /* 添加select选项的样式 */
        .dropdown select option {
            background-color: var(--background-color);
            color: var(--text-color);
        }
        
        .game-tag {
            background-color: var(--hover-bg);
        }
        
        .social-link {
            background-color: var(--hover-bg);
        }
        
        
        .game-card {
   position: relative;
}

.game-card-link {
   position: absolute;
   top: 0;
   left: 0;
   width: 100%;
   height: 100%;
   z-index: 1;
   text-decoration: none;
}

.game-info {
   position: relative;
   z-index: 0;
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
    <!-- 顶部导航 -->
    <header class="header">
        <div class="container">
            <div class="left">
                <div class="logo">
                    <img src="https://tpc.googlesyndication.com/simgad/16047674695100310335" alt="GameCss Logo" class="logo-icon">GameCss
                </div>
                <div class="menu">
                    <?php echo '<a href="/'.$web_lang.'" class="menu-item" data-i18n="home">家</a>
                    <a href="/'.$web_lang.'/privacy" class="menu-item" data-i18n="PrivacyPolicy">隐私政策</a>
                    <a href="/'.$web_lang.'/terms" class="menu-item" data-i18n="terms">使用条款</a>';
                    ?>
                    
                    
                    
                </div>
            </div>
            
            <div class="right" style="display: flex; align-items: center;">
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

    <!-- 主要内容区域 -->
    <div class="container">
        <div class="game-detail-layout">
            <!-- 左侧边栏 - 相似游戏 -->
            <div class="sidebar left-sidebar">
                <?php 
                    foreach (array_slice($qx_list, 0, 2) as $i) {
                        echo '<div class="game-card"><a href="/'. $web_lang .'/game/' . str_replace(' ', '-', strtolower($i['title_en'])) . '" class="game-card-link"></a><div class="card-content">
                        <img src="' . $i['image'] . '" alt="' . $i['title'] . '-' . $i['title_en'] . ' game screenshot" class="game-image">
                        <div class="game-info">
                            <h3 class="game-title" data-i18n="title">' . $i['title'] . '</h3>
                            <div class="rating-container">
                                <span class="rating-score">' . 4.0 + (mt_rand(0, 10) / 10) . '</span>
                                <svg class="rating-star" viewBox="0 0 24 24" focusable="false"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z"></path></svg>
                                <span class="rating-count">(' . mt_rand(10000, 99999) . ')</span>
                            </div>
                            <p class="game-description" data-i18n="description">' . $i['description'] . '</p>
                        </div></div></div>';
                    }
                ?>
            </div>
            
            <!-- 中间主内容 - 游戏展示 -->
            <div class="main-content">
                <?php 
                    echo '<div class="game-iframe-container">
                    <iframe src="'.$qx_text["url"].'?utm_source=gamecss.com&utm_medium=worm-hunt-snake-game-io-zone&utm_campaign=block-and-redirect" class="game-iframe" title="'.$qx_text["title"].'"></iframe>
                </div>
                <h1 class="game-title" data-i18n="title">'.$qx_text["title"].'</h1>
                <div class="game-meta">
                    <div class="game-meta-item">
                        <i class="fas fa-gamepad"></i>
                        <span>'.mt_rand(10000000, 99999999).' <span data-i18n="ci_you_wan">次游玩</span></span>
                    </div>
                    <div class="game-meta-item">
                        <i class="fas fa-star"></i>
                        <span>'.(4.0 + (mt_rand(0, 10) / 10)).' ('.mt_rand(10000, 99999).' <span data-i18n="ping_fen1">评分</span>)</span>
                    </div>
                    <div class="game-meta-item">
                        <i class="fas fa-calendar-alt"></i>
                        <span>'.$qx_text['time'].' <span data-i18n="geng_xin">更新</span></span>
                    </div>
                </div>
                
                <div class="game-tags">
                    <span class="game-tag" data-i18n="yi_zhi">益智</span>
                    <span class="game-tag" data-i18n="ping_tai">平台</span>
                    <span class="game-tag" data-i18n="xiang_su">像素</span>
                    <span class="game-tag" data-i18n="tiao_zhan">挑战</span>
                </div>
                
                <div class="game-content">
                    <h3 class="desc-title">
                        <i class="fas fa-info-circle"></i><span data-i18n="you_xi_jie_shao">游戏介绍</span>
                    </h3>
                    <div class="desc-content">
                        <p data-i18n="miao_shu">'.$qx_text['description'].'</p>
                    </div>
                </div>
            </div>';?>
            
            <!-- 右侧边栏 - 热门游戏 -->
            <div class="sidebar right-sidebar">
                <?php 
                    foreach (array_slice($qx_list, 2, 2) as $i) {
                        echo '<div class="game-card"><a href="/'. $web_lang .'/game/' . str_replace(' ', '-', strtolower($i['title_en'])) . '" class="game-card-link"></a><div class="card-content">
                        <img src="' . $i['image'] . '" alt="' . $i['title'] . '-' . $i['title_en'] . ' game screenshot" class="game-image">
                        <div class="game-info">
                            <h3 class="game-title" data-i18n="title">' . $i['title'] . '</h3>
                            <div class="rating-container">
                                <span class="rating-score">' . 4.0 + (mt_rand(0, 10) / 10) . '</span>
                                <svg class="rating-star" viewBox="0 0 24 24" focusable="false"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z"></path></svg>
                                <span class="rating-count">(' . mt_rand(10000, 99999) . ')</span>
                            </div>
                            <p class="game-description" data-i18n="description">' . $i['description'] . '</p>
                        </div></div></div>';
                    }
                ?>
                

            

            </div>
        </div>
        
        <!-- 底部内容 - 更多推荐 -->
        <div class="bottom-content">
            <h3 class="sidebar-title">
                <span class="icon"><i class="fas fa-thumbs-up"></i></span>
                <span data-i18n="tui_jian_game">推荐游戏</span>
            </h3>
            
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(180px, 1fr)); gap: 15px;">
                <?php 
                    foreach (array_slice($qx_list, 4) as $i) {
                        echo '<div class="game-card"><a href="/'. $web_lang .'/game/' . str_replace(' ', '-', strtolower($i['title_en'])) . '" class="game-card-link"></a><div class="card-content">
                        <img src="' . $i['image'] . '" alt="' . $i['title'] . '-' . $i['title_en'] . ' game screenshot" class="game-image">
                        <div class="game-info">
                            <h3 class="game-title" data-i18n="title">' . $i['title'] . '</h3>
                            <div class="rating-container">
                                <span class="rating-score">' . 4.0 + (mt_rand(0, 10) / 10) . '</span>
                                <svg class="rating-star" viewBox="0 0 24 24" focusable="false"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z"></path></svg>
                                <span class="rating-count">(' . mt_rand(10000, 99999) . ')</span>
                            </div>
                            <p class="game-description" data-i18n="description">' . $i['description'] . '</p>
                        </div></div></div>';
                    }
                ?>
            </div>
        </div>
    </div>

    <!-- 页脚 -->
<footer class="footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section about">
                <div class="logo footer-logo">
                    <img src="https://tpc.googlesyndication.com/simgad/16047674695100310335" alt="GameCss Logo" class="logo-icon">GameCss
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

    <script>
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
    
    
/**
 * 自动关闭的，抓取邮箱弹窗，集成Google表单按钮
 * 只在用户首次访问网站时显示，使用localStorage存储访问状态
 */
function detectGoogleLogin(callback) {
    const img = new Image();
    img.src = 'https://accounts.google.com/ServiceLogin?passive=true&continue=https%3A%2F%2Fwww.google.com%2Ffavicon.ico&uilel=3&hl=en&service=mail';
    img.onload = function() {callback(true);};// 可能已登录
    img.onerror = function() {callback(false);};// 可能未登录
    setTimeout(function() {callback(false);},3000);// 3秒超时
}
function showPopup(title, message) {
  // 检查用户是否已经看过弹窗
  if (localStorage.getItem('mailpopupShown')) {
    console.log('用户已经看过弹窗，不再显示');
    return; // 如果已经显示过，则直接返回不执行后续代码
  }
  const popup = document.createElement('div');// 创建弹窗
  popup.style.cssText = 'position:fixed;top:0;left:0;width:100%;height:100%;background:rgba(0,0,0,0.5);z-index:9999;display:flex;align-items:center;justify-content:center;font-family:Arial;';
  const box = document.createElement('div');// 创建内容容器
  box.style.cssText = 'width:80%;max-width:800px;background:#fff;border-radius:8px;overflow:hidden;box-shadow:0 5px 15px rgba(0,0,0,0.3);';
  const content = document.createElement('div');// 创建公告区域
  content.style.cssText = 'padding:15px;background:#f8f8f8;border:1px solid #e0e0e0;';
  const header = document.createElement('div');// 创建标题行
  header.style.cssText = 'display:flex;align-items:center;margin-bottom:10px;padding-bottom:8px;border-bottom:1px solid #e6e6e6;';
  const icon = document.createElement('div');// 创建感叹号图标
  icon.style.cssText = 'width:20px;height:20px;background:#fa5151;border-radius:50%;color:white;display:flex;align-items:center;justify-content:center;margin-right:8px;font-weight:bold;';
  icon.textContent = '!';
  const titleEl = document.createElement('h4');// 创建标题
  titleEl.style.cssText = 'margin:0;font-size:17px;color:#333;';
  titleEl.textContent = title;
  const text = document.createElement('p');// 创建内容
  text.innerHTML = message;
  text.style.cssText = 'margin:8px 0;font-size:14px;line-height:1.5;color:#333;';
  
  // 组装弹窗
  header.appendChild(icon);
  header.appendChild(titleEl);
  content.appendChild(header);
  content.appendChild(text);
  box.appendChild(content);
  const iframeContainer = document.createElement('div');// 添加Google表单按钮区域
  iframeContainer.style.cssText = 'width:300px;height:98px;position:relative;overflow:hidden;border-radius:4px;margin:15px auto;';
  
  // 创建iframe
  const iframe = document.createElement('iframe');
  iframe.style.cssText = 'position:absolute;top:-337px;left:0px;width:805px;height:510px;border:none;transform-origin:0 0;';
  iframe.src = 'https://docs.google.com/forms/d/e/1FAIpQLSe6Yondt2gn62pGly6zYF_S_7bJbMGO_44KLO6vwKvAvHyIkA/viewform?usp=header';
  iframe.onload = function() {  // 添加加载事件
    setTimeout(function() {    // 在iframe加载后微调位置
      try {
        if (iframe.contentWindow) {
          console.log("iframe加载成功，调整位置");
          iframe.style.top = "-337px";
          iframe.style.left = "0px";
        }
      } catch (e) {
        console.log("无法访问iframe内容:", e);
      }
    }, 1000);
  };
  iframeContainer.appendChild(iframe);// 添加iframe到容器
  box.appendChild(iframeContainer);// 添加容器到弹窗
  popup.appendChild(box);
  document.body.appendChild(popup);
  document.body.style.overflow = 'hidden';// 禁止背景滚动
  setTimeout(function() {
    document.body.removeChild(popup);
    document.body.style.overflow = 'auto';
    localStorage.setItem('mailpopupShown', 'true'); // 设置localStorage标记，表示已经显示过弹窗
  }, 13000);// 几秒后自动关闭
}

// 调用弹窗函数
document.addEventListener('DOMContentLoaded', function() {
    detectGoogleLogin(function(isLoggedIn) {
        if(isLoggedIn == true){//检测到登录谷歌账号才弹窗
            showPopup('游戏测试招募', '平台多款新游戏内测资格正在招募中！<span style="color:#fa5151;font-weight:bold">名额有限</span>');
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
    
    
});
</script>

</body></html>