<?php
    function qx_list($qx_list,$web_lang) {//' . $i['image'] . '
        foreach ($qx_list as $i) {
            echo '<div class="game-card">
                    <a href="https://gamecss.com/'. $web_lang .'/game/' . str_replace(' ', '-', strtolower($i['title_en'])) . '" target="_blank" class="game-card-link"></a>
                    <div class="card-content">
                        <img src="' . $i['image'] . '" alt="' . $i['title'] . '-' . $i['title_en'] . ' game screenshot" class="game-image">
                        <div class="game-info">
                            <h3 class="game-title" data-i18n="title">' . $i['title'] . '</h3>
                            <div class="rating-container">
                                <span class="rating-score">4.2</span>
                                <svg class="rating-star" viewBox="0 0 24 24" focusable="false"><path d="M12 17.27L18.18 21l-1.64-7.03L22 9.24l-7.19-.61L12 2 9.19 8.63 2 9.24l5.46 4.73L5.82 21 12 17.27z"></path></svg>
                                <span class="rating-count">(' . mt_rand(10000, 99999) . ')</span>
                            </div>
                            <p class="game-description" data-i18n="description">' . $i['description'] . '</p>
                        </div>
                    </div>
                </div>';
            
            
    
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
    :root {
        --text-color: #333333;
        --background-color: #ffffff;
        --border-color: #e0e0e0;
        --hover-bg: rgba(0, 0, 0, 0.05);
        --background-light: #f5f5f5;
        --text-muted: #6e7a8a;
        --card-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
        --primary-color: #07C160;
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
        padding: 15px;
        width: 100%;
        height: 100%;
        overflow: auto;
    }

    .container {
        width: 100%;
        max-width: 100%;
        margin: 0 auto;
    }

    .header {
        background-color: var(--background-color);
        border-bottom: 1px solid var(--border-color);
        padding: 15px;
        margin-bottom: 15px;
        border-radius: 8px;
    }
    
    .header h2 {
        font-size: 18px;
        font-weight: 600;
        color: var(--text-color);
    }

    /* Game recommendations styles */
    .bottom-content {
        background-color: var(--background-color);
        border-radius: 8px;
        padding: 15px;
    }
    
    .sidebar-title {
        font-size: 16px;
        font-weight: 500;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        color: var(--text-color);
    }
    
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
    
    .game-grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(180px, 1fr));
        gap: 15px;
    }
    
    .game-card {
        position: relative;
        display: flex;
        flex-direction: column;
        background-color: var(--background-color);
        border-radius: 8px;
        overflow: hidden;
        margin-bottom: 15px;
        box-shadow: var(--card-shadow);
        cursor: pointer;
        transition: transform 0.2s;
        border: 1px solid var(--border-color);
    }
    
    .game-card:hover {
        transform: translateY(-2px);
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
        position: relative;
        z-index: 0;
    }
    
    .game-title {
        font-size: 15px;
        font-weight: 500;
        margin-bottom: 4px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: var(--text-color);
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

    /* Responsive adjustments */
    @media (max-width: 576px) {
        .game-grid {
            grid-template-columns: repeat(auto-fill, minmax(140px, 1fr));
        }
    }
  </style>
</head>
<body>
    <div class="container">
        <!-- Game recommendations section -->
        <div class="bottom-content">
            <h3 class="sidebar-title">
                <span class="icon">🎲</span>
                <span>Recommended Games</span>
            </h3>
            
            <div class="game-grid">
                <?php qx_list($qx_list,$web_lang); ?>
                

            </div>
        </div>
    </div>
</body>
</html>