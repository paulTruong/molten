<?php

function molten_register_block_patterns()
{
    $block_pattern_categories = [
        'hero' => ['label' => __('Hero', 'molten')],
        'menu' => ['label' => __('Menu', 'molten')],
    ];

    foreach ($block_pattern_categories as $name => $properties) {
        if (!WP_Block_Pattern_Categories_Registry::get_instance()->is_registered($name)) {
            register_block_pattern_category($name, $properties);
        }
    }

    $block_patterns = [
        'hero-offset-text-and-image',
        'menu-three-column'
    ];

    foreach ($block_patterns as $block_pattern) {
        $pattern_file = get_theme_file_path('inc/patterns/' . $block_pattern . '.php');

        register_block_pattern(
            'molten' . $block_pattern,
            require $pattern_file
        );
    }
}
add_action('init', 'molten_register_block_patterns', 10);
