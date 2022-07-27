<?php
return [
    'title' => __('Image with large heading under' , 'molten'),
    'categories' => array( 'molten-hero' ),
    'content' => '<!-- wp:image {"align":"wide","id":29,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image alignwide size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/dessert.jpg" alt="" class="wp-image-29"/></figure>
    <!-- /wp:image -->

    <!-- wp:heading {"textAlign":"center","align":"wide","fontSize":"huge"} -->
    <h2 class="alignwide has-text-align-center has-huge-font-size">Care &amp; Perfection</h2>
    <!-- /wp:heading -->'
];
