<?php
add_filter('upload_mimes', function ($mimes = array()) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    $mimes['zip'] = 'application/zip';
    return $mimes;
});

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('post-image', 700, 525, array('center', 'top'));
    add_theme_support('html5', array(
        'search-form',
        'gallery',
        'caption',
        'style',
        'script',
        'comment-list',
        'comment-form'
    ));
    register_nav_menus(array(
        'primary' => __('Haupt Navigation'),
        'footer' => __('Footer Navigation'),
        'third-menu' => __('Drittes Menu')
    ));
    add_theme_support('custom-logo', array(
        'height' => 60,
        'width' => 100,
        'flex-height' => false,
        'flex-width' => true
    ));
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
    add_theme_support('editor-styles');
    add_editor_style('assets/style-editor.css');
    add_theme_support('responsive-embeds');
    add_theme_support('disable-custom-colors');
    add_theme_support('disable-custom-gradients');
    add_theme_support('editor-color-palette', array(
        array(
            'name' => __('Font-Color', 'vulg'),
            'slug' => 'color-1',
            'color' => '#383838'
        ),
        array(
            'name' => __('Background Color', 'vulg'),
            'slug' => 'color-2',
            'color' => '#fff'
        ),
        array(
            'name' => __('Primary Color', 'vulg'),
            'slug' => 'color-3',
            'color' => '#7229B2'
        ),
        array(
            'name' => __('Secondary Color', 'vulg'),
            'slug' => 'color-4',
            'color' => '#3D93E1'
        ),
    ));
    add_theme_support('disable-custom-font-sizes');
    add_theme_support('editor-font-sizes', array(
        array(
            'name' => __('Normal', 'vulg'),
            'slug' => 'normal',
            'size' => 17
        ),
        array(
            'name' => __('Groß', 'vulg'),
            'slug' => 'large',
            'size' => 24
        ),
    ));
    remove_theme_support('core-block-patterns');
});
add_action('wp_enqueue_scripts', function () {
    $theme_version = wp_get_theme()->get('Version');
    wp_enqueue_style('google-font', 'https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap');
    wp_enqueue_style('vulcan-css', get_template_directory_uri() . '/style.css');
    wp_enqueue_script('vulcan-scripts', get_template_directory_uri() . '/assets/scripts.js', array('jquery'), $theme_version, true);
});
add_action('widgets_init', function () {
    register_sidebar(array(
        'name' => __('Sidebar für Beitrags-Detailseiten'),
        'id' => 'sidebar_posts',
        'description' => __('Diese Widgets werden nur auf den Beitrags-Detailseiten angezeigt (single.php)', 'vulg'),
        'before_widget' => '<div class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="widget-title"><span>',
        'after_title' => '</span></h4>'
    ));
    unregister_widget('WP_Widget_Media_Audio');
    unregister_widget('WP_Widget_Media_Video');
});