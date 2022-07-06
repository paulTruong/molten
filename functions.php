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

    // Add styles inline.
    wp_add_inline_style('molten-style', molten_get_font_face_styles());

    // Enqueue theme stylesheet.
    wp_enqueue_style('molten-style');
}
add_action('wp_enqueue_scripts', 'molten_styles');

function molten_editor_styles()
{
    // Add styles inline.
    wp_add_inline_style('wp-block-library', molten_get_font_face_styles());
}
add_action('admin_init', 'molten_editor_styles');

function molten_get_font_face_styles()
{
    return "
    @font-face{
        font-family: 'Playfair Display';
        font-weight: 200 900;
        font-style: normal;
        font-stretch: normal;
        font-display: swap;
        src: url('" . get_theme_file_uri('assets/fonts/PlayfairDisplay-VariableFont_wght.ttf') . "') format('truetype');
    }

    @font-face{
        font-family: 'Playfair Display';
        font-weight: 200 900;
        font-style: italic;
        font-stretch: normal;
        font-display: swap;
        src: url('" . get_theme_file_uri('assets/fonts/PlayfairDisplay-Italic-VariableFont_wght.ttf') . "') format('truetype');
    }
	@font-face{
		font-family: 'Source Sans Pro';
		font-style: normal;
		font-display: swap;
		src: url('" . get_theme_file_uri('assets/fonts/SourceSansPro-Regular.ttf') . "') format('truetype');
	}
    @font-face{
		font-family: 'Source Sans Pro';
		font-style: italic;
		font-display: swap;
		src: url('" . get_theme_file_uri('assets/fonts/SourceSansPro-Italic.ttf') . "') format('truetype');
	}
    @font-face{
		font-family: 'Source Sans Pro';
		font-style: normal;
        font-weight: 700;
		font-display: swap;
		src: url('" . get_theme_file_uri('assets/fonts/SourceSansPro-Bold.ttf') . "') format('truetype');
	}
	";
}

function molten_preload_webfonts()
{
?>
    <link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/fonts/SourceSansPro-Regular.ttf')); ?>" as="font" crossorigin>
<?php
}
add_action('wp_head', 'molten_preload_webfonts');

// Register block patterns
require get_template_directory() . '/inc/block-patterns.php';
