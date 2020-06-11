<?php

// アイキャッチ設定
add_theme_support('post-thumbnails');

// html5許可
add_theme_support('html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption'));

// oembed消去
remove_action('wp_head', 'rest_output_link_wp_head');
remove_action('wp_head', 'wp_oembed_add_discovery_links');
remove_action('wp_head', 'wp_oembed_add_host_js');

// wp-json消去
remove_action('template_redirect', 'rest_output_link_header', 11);

// 絵文字消去
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// 外部投稿ツール消去
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');

// meta generator消去
remove_action('wp_head', 'wp_generator');

// 短縮URL消去
remove_action('wp_head', 'wp_shortlink_wp_head');

// 次の記事消去
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

// img属性消去
add_filter('image_send_to_editor', 'remove_image_attribute', 10);
add_filter('post_thumbnail_html', 'remove_image_attribute', 10);
function remove_image_attribute($html)
{
    $html = preg_replace('/(width|height)="\d*"\s/', '', $html);
    $html = preg_replace('/class=[\'"]([^\'"]+)[\'"]/i', '', $html);
    $html = preg_replace('/title=[\'"]([^\'"]+)[\'"]/i', '', $html);
    $html = preg_replace('/<a href=".+">/', '', $html);
    $html = preg_replace('/<\/a>/', '', $html);
    return $html;
}

// adminbarカスタマイズ
function remove_adminbar_item($wp_admin_bar)
{
    if (!is_admin()) {
        $wp_admin_bar->remove_node('wp-logo');
        $wp_admin_bar->remove_node('new-content');
        $wp_admin_bar->remove_node('comments');
        $wp_admin_bar->remove_node('appearance');
        $wp_admin_bar->remove_node('updates');
        $wp_admin_bar->remove_node('search');
        $wp_admin_bar->remove_node('customize');
    }
}
add_action('admin_bar_menu', 'remove_adminbar_item', 999);

// タイトルタグ追加
add_theme_support('title-tag');

// タイトルタグセパレーター変更
function title_separator($sep)
{
    $sep = '｜';
    return $sep;
}
add_filter('document_title_separator', 'title_separator');

// 標準のjquery消去
function my_delete_local_jquery()
{
    wp_deregister_script('jquery');
}
add_action('wp_enqueue_scripts', 'my_delete_local_jquery');

// ウィジェット登録
function arphabet_widgets_init()
{
    register_sidebar(array(
        'name' => 'サイドバー',
        'id' => 'side-bar',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="side-ttl">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'arphabet_widgets_init');

// メニュー登録
function register_my_menu()
{
    register_nav_menu('header-menu', __('ヘッダーメニュー'));
}
add_action('init', 'register_my_menu');

// エディタースタイル追加
function wpdocs_theme_add_editor_styles()
{
    add_editor_style('editor-style.css');
}
add_action('admin_init', 'wpdocs_theme_add_editor_styles');

// 自動更新
add_filter('allow_major_auto_core_updates', '__return_false');
add_filter('allow_minor_auto_core_updates', '__return_true');
add_filter('auto_update_theme', '__return_false');
add_filter('auto_update_plugin', '__return_false');
