<?php
return [
    'title' => __('Hero with text with an offset image below' , 'molten'),
    'categories' => array( 'hero' ),
    'content' => '<!-- wp:heading {"textAlign":"left","align":"wide","fontSize":"huge"} -->
    <h2 class="alignwide has-text-align-left has-huge-font-size">Atmospheric Ambience</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"align":"wide"} -->
    <div class="wp-block-columns alignwide"><!-- wp:column {"width":"20%"} -->
    <div class="wp-block-column" style="flex-basis:20%"></div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"80%","layout":{"inherit":false}} -->
    <div class="wp-block-column" style="flex-basis:80%"><!-- wp:image {"align":"right","id":19,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image alignright size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/people-sitting-at-bar.jpg" alt="' . __('People sitting around a rustic wooden bench in a low light atmospheric bar, there are coloured vases on the bench', 'molten') . '" class="wp-image-19"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->'
];
