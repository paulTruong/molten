<?php

function molten_styles()
{
    // Register theme stylesheet.
    $theme_version = wp_get_theme()->get('Version');

    $version_string = is_string($theme_version) ? $theme_version : false;
    wp_register_style(
        'molten-style',
        get_template_directory_uri() . '/style.css',
        [],
        $version_string
    );

    // Enqueue theme stylesheet.
    wp_enqueue_style('molten-style');
}
add_action('wp_enqueue_scripts', 'molten_styles');

function molten_preload_webfonts()
{
?>
    <link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/fonts/source-sans-pro-regular.woff2')); ?>" as="font" crossorigin>
<?php
}
add_action('wp_head', 'molten_preload_webfonts');

// Register block patterns
require get_template_directory() . '/inc/block-patterns.php';
