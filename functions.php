<?php

function my_enqueue_assets() {
    // リセットCSS（すべてのページに適用）
    wp_enqueue_style('destyle', get_template_directory_uri() . '/destyle.css');

    // トップページ用のCSS
    if (is_front_page()) {
        wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css');
    }

    // 投稿ページ（single.php）用のCSS
    if (is_single()) {
        wp_enqueue_style('custom-style-sub', get_template_directory_uri() . '/style_sub.css');
    }

    // お問い合わせページ（page-contact.php）用のCSS
    if (is_page('contact')) {
        wp_enqueue_style('contact-style', get_template_directory_uri() . '/style_contact.css');
    }

    // SlickのCSS（CDN）
    wp_enqueue_style('slick-css', get_template_directory_uri() . '/slick.css');
    wp_enqueue_style('slick-theme-css', get_template_directory_uri() . '/slick-theme.css');    

    // jQueryの読み込み（WordPress標準のもの）
    wp_enqueue_script('jquery');

    // SlickのJS（CDN）
    wp_enqueue_script('slick-js', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array('jquery'), null, true);

    // メインのJavaScript
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array('jquery', 'slick-js'), false, true);
    
    // フロントページかどうかの情報をJavaScriptに渡す
    wp_localize_script('main-js', 'myThemeVars', array(
        'isFrontPage' => is_front_page()
    ));
}
add_action('wp_enqueue_scripts', 'my_enqueue_assets');

// アイキャッチ画像を有効化
add_theme_support('post-thumbnails');

if( function_exists('get_field') ) {
    // ACFが有効であれば問題なし
}

