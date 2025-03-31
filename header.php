<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo bloginfo('name'); ?></title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <header class="header" id="top">
    <?php if ( !is_home() && !is_front_page() ) : ?>
            <h1 class="logo"><a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri('img/logo.png')); ?>" alt="ロゴ"></a></h1>
    <?php endif; ?>
    <nav class="navi">
    <ul class="navi-ul">
        <li class="navi-list menu-only"><a href="#top">TOP</a></li>
        <li class="navi-list">
            <a href="<?php echo (is_front_page()) ? '#about' : home_url('/#about'); ?>">ABOUT</a>
        </li>
        <li class="navi-list">
            <a href="<?php echo (is_front_page()) ? '#works' : home_url('/#works'); ?>">WORKS</a>
        </li>
        <li class="navi-list">
            <a href="<?php echo (is_front_page()) ? '#service' : home_url('/#service'); ?>">SERVICE</a>
        </li>
        <li class="navi-list">
            <a href="<?php echo (is_front_page()) ? '#contact' : home_url('/#contact'); ?>">CONTACT</a>
        </li>
    </ul>
</nav>
<div class="site-title">
    <?php if (is_front_page()) : ?>
        <!-- フロントページ用 -->
        <h1 class="site-name"><!-- 空要素（タイプライター用） --></h1>
        <p class="typed">web designer</p>
        
    <?php elseif (!is_single() && !is_page_template('page-contact.php') && !is_page()) : ?>
        <!-- 通常ページ用 -->
        <h1 class="site-name"><?php echo bloginfo('name'); ?></h1>
        
    <?php endif; ?>
</div>

        <div class="toggle_btn">
            <span></span>
            <span></span>
        </div>

        <div id="mask"></div>
    </header>