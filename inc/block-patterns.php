<?php

function molten_register_block_patterns()
{
    $block_pattern_categories = [
        'molten-hero'        => ['label' => __('Molten Hero', 'molten')],
        'molten-location'    => ['label' => __('Molten Location', 'molten')],
        'molten-menu'        => ['label' => __('Molten Menu', 'molten')],
        'molten-cta'         => ['label' => __('Molten Call To Actions', 'molten')],
        'molten-coming-soon' => ['label' => __('Molten Coming Soon', 'molten')],
    ];

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }

    $block_patterns = [
        'coming-soon-centered-content-with-image',
        'coming-soon-full-height-cover',
        'coming-soon-three-column-images',
        'cta-centered-heading-text-and-button',
        'cta-cover-with-text-and-button',
        'cta-image-text-and-button',
        'cta-three-column-text-on-left',
        'cta-three-column-text-on-right',
        'hero-cover-with-text-and-cta',
        'hero-image-and-heading',
        'hero-media-text',
        'hero-offset-text-and-image',
        'location-image-and-text',
        'location-with-hours-and-button',
        'menu-banquet',
        'menu-item-left-price-right',
        'menu-three-column',
        'menu-two-column',
    ];

    foreach ($block_patterns as $block_pattern) {
        $pattern_file = get_theme_file_path('inc/patterns/' . $block_pattern . '.php');

        register_block_pattern(
            'molten/' . $block_pattern,
            require $pattern_file
        );
    }
}
add_action('init', 'molten_register_block_patterns', 10);
