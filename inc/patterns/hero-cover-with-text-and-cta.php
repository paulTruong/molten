<?php
return [
    'title' => __('Full width cover' , 'molten'),
    'categories' => array( 'molten-hero' ),
    'content' => '
    <!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/chopping-tomatoes.jpg","id":27,"dimRatio":50,"overlayColor":"foreground","minHeight":100,"minHeightUnit":"vh","contentPosition":"center left","align":"full"} -->
    <div class="wp-block-cover alignfull has-custom-content-position is-position-center-left" style="min-height:100vh"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim"></span><img class="wp-block-cover__image-background wp-image-27" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/chopping-tomatoes.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"inherit":true}} -->
    <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"padding":{"left":"64px"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
    <div class="wp-block-group" style="padding-left:64px"><!-- wp:heading {"textAlign":"left"} -->
    <h2 class="has-text-align-left">Fresh ingredients, cooked simply</h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"left"} -->
    <p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea </p>
    <!-- /wp:paragraph -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
    <div class="wp-block-buttons"><!-- wp:button -->
    <div class="wp-block-button"><a class="wp-block-button__link">Book a table</a></div>
    <!-- /wp:button --></div>
    <!-- /wp:buttons --></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div></div>
    <!-- /wp:cover -->'
];
