<?php
    function qx_list($qx_list,$web_lang) {//' . $i['image'] . '
        foreach ($qx_list as $i) {
            echo '<a href="https://gamecss.com/'. $web_lang .'/game/' . str_replace(' ', '-', strtolower($i['title_en'])) . '" target="_blank" class="game-card">
                    <img src="' . $i['image'] . '" alt="' . $i['title'] . '-' . $i['title_en'] . ' game screenshot" class="game-thumb">
                    <div class="game-info">
                        <div class="game-title" data-i18n="title">' . $i['title'] . '</div>
                    </div>
                </a>';
            
            
    
        }
    }
?>
<?php echo '<!DOCTYPE html><html lang="'. $web_lang .'"><head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <title>'.$filename.' - GameCss</title>
    <meta data-i18n="db_description" name="description" content="在GameCss发现并玩最好的免费'.$filename.'。探索我们精选的'.$filename.'。">
    <meta data-i18n="db_keywords" name="keywords" content="'.$filename.',单人游戏,免费游戏,HTML5游戏,手机游戏,休闲游戏">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+SC:wght@400;500;700&amp;display=swap" rel="stylesheet">';
?>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BLRY5JSQ4J"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-BLRY5JSQ4J');
</script>
  
  


    <style>
        :root {
            /* 微信官方配色 */
            --wechat-green: #07C160;
            --wechat-bg: #EDEDED;
            --wechat-card-bg: #FFFFFF;
            --wechat-text-primary: #000000;
            --wechat-text-secondary: #888888;
            --wechat-border: #F0F0F0;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            -webkit-tap-highlight-color: transparent;
        }
        
        body {
            font-family: 'Noto Sans SC', -apple-system, BlinkMacSystemFont, sans-serif;
            background-color: var(--wechat-bg);
            color: var(--wechat-text-primary);
            line-height: 1.5;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        
        .page-container {
            max-width: 600px;
            margin: 0 auto;
            padding: 12px 15px;
        }
        
        .section-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 12px;
            padding: 0 2px;
        }
        
        .section-title {
            font-size: 16px;
            font-weight: 500;
        }
        
        .section-more {
            font-size: 13px;
            color: var(--wechat-text-secondary);
        }
        
        .games-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
        }
        
        .game-card {
            display: block;
            text-decoration: none;
            background-color: var(--wechat-card-bg);
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.05);
            position: relative;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        
        .game-card:active {
            transform: scale(0.98);
            box-shadow: 0 0 1px rgba(0, 0, 0, 0.1);
        }
        
        .game-thumb {
            width: 100%;
            aspect-ratio: 1/1;
            object-fit: cover;
            display: block;
            background-color: #F8F8F8;
        }
        
        .game-info {
            padding: 6px 8px;
        }
        
        .game-title {
            font-size: 13px;
            font-weight: 400;
            color: var(--wechat-text-primary);
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            height: 38px;
            word-break: break-all;
        }
        
        .game-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 4px;
            font-size: 11px;
            color: var(--wechat-text-secondary);
        }
        
        .game-tag {
            background-color: #F0F9F4;
            color: var(--wechat-green);
            padding: 0 4px;
            border-radius: 4px;
            font-size: 10px;
        }
        
        @media (max-width: 360px) {
            .games-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
    </style>
</head>
<body>
    <div class="page-container">
        <!-- 热门游戏 -->
        <div class="popular-games">
            
            <div class="games-grid">
                <?php qx_list($qx_list,$web_lang); ?>
                

            </div>
        </div>
    </div>
</body></html>