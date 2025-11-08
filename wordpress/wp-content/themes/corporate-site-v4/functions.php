<?php
/**
 * WealthPark Corporate Site v4 - Functions
 */

// セキュリティ: 直接アクセスを防止
if (!defined('ABSPATH')) {
    exit;
}

/**
 * 画像URL自動切り替え（ローカル環境→本番サーバー参照）
 */
if (strpos($_SERVER['HTTP_HOST'], 'localhost') !== false) {
    add_filter('upload_dir', function($uploads) {
        $uploads['baseurl'] = 'https://wealth-park.com/wp-content/uploads';
        $uploads['url'] = 'https://wealth-park.com/wp-content/uploads' . $uploads['subdir'];
        return $uploads;
    }, 10, 1);
}

/**
 * テーマサポート
 */
function corporate_v4_theme_support() {
    // タイトルタグのサポート
    add_theme_support('title-tag');

    // アイキャッチ画像のサポート
    add_theme_support('post-thumbnails');

    // HTML5サポート
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style'
    ));
}
add_action('after_setup_theme', 'corporate_v4_theme_support');

/**
 * スクリプトとスタイルの読み込み
 */
function corporate_v4_enqueue_scripts() {
    // Tailwind CSS (CDN版)
    wp_enqueue_style(
        'tailwindcss',
        'https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css',
        array(),
        '3.4.1'
    );

    // Three.js (Vanta.js用)
    wp_enqueue_script(
        'threejs',
        'https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js',
        array(),
        'r134',
        true
    );

    // Vanta.js Fog Effect
    wp_enqueue_script(
        'vanta-fog',
        'https://cdn.jsdelivr.net/npm/vanta@0.5.24/dist/vanta.fog.min.js',
        array('threejs'),
        '0.5.24',
        true
    );

    // ヘッダースタイル
    wp_enqueue_style(
        'corporate-v4-header',
        get_template_directory_uri() . '/assets/css/header.css',
        array(),
        '1.0.6'
    );

    // フッタースタイル
    wp_enqueue_style(
        'corporate-v4-footer',
        get_template_directory_uri() . '/assets/css/footer.css',
        array(),
        '1.0.6'
    );

    // カスタムスタイル
    wp_enqueue_style(
        'corporate-v4-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        array('corporate-v4-header', 'corporate-v4-footer'),
        '1.0.6'
    );

    // カスタムスクリプト
    wp_enqueue_script(
        'corporate-v4-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array('vanta-fog'),
        '1.0.6',
        true
    );
}
add_action('wp_enqueue_scripts', 'corporate_v4_enqueue_scripts');

/**
 * メニューの登録
 */
function corporate_v4_register_menus() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'corporate-site-v4'),
        'footer' => __('Footer Menu', 'corporate-site-v4')
    ));
}
add_action('init', 'corporate_v4_register_menus');

/**
 * REST API: ニュース取得用エンドポイント
 */
function corporate_v4_get_news_posts() {
    $args = array(
        'post_type' => 'post',
        'category_name' => 'news',
        'posts_per_page' => 5,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $posts = get_posts($args);
    $formatted_posts = array();

    foreach ($posts as $post) {
        $formatted_posts[] = array(
            'id' => $post->ID,
            'title' => get_the_title($post->ID),
            'excerpt' => get_the_excerpt($post->ID),
            'date' => get_the_date('Y-m-d', $post->ID),
            'link' => get_permalink($post->ID),
            'thumbnail' => get_the_post_thumbnail_url($post->ID, 'medium')
        );
    }

    return $formatted_posts;
}

/**
 * REST API: ブログ取得用エンドポイント
 */
function corporate_v4_get_blog_posts() {
    $args = array(
        'post_type' => 'post',
        'category_name' => 'blog',
        'posts_per_page' => 6,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $posts = get_posts($args);
    $formatted_posts = array();

    foreach ($posts as $post) {
        $formatted_posts[] = array(
            'id' => $post->ID,
            'title' => get_the_title($post->ID),
            'excerpt' => get_the_excerpt($post->ID),
            'date' => get_the_date('Y-m-d', $post->ID),
            'link' => get_permalink($post->ID),
            'thumbnail' => get_the_post_thumbnail_url($post->ID, 'medium')
        );
    }

    return $formatted_posts;
}

/**
 * 管理バー（黒い帯）を非表示
 */
add_filter('show_admin_bar', '__return_false');
