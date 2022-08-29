<?php

/**
 * Title: Three columns, content in the right column and an image in the other two
 * Slug: molten/cta-three-column-text-on-right
 * Categories: molten-cta
 */
?>
<!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--gap--vertical, 32px)","bottom":"var(--wp--custom--spacing--gap--vertical, 32px)"},"blockGap":"4vw"}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--custom--spacing--gap--vertical, 32px);margin-bottom:var(--wp--custom--spacing--gap--vertical, 32px)">
    <!-- wp:column -->
    <div class="wp-block-column mobile-order-2">
        <!-- wp:image {"id":209,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/orange-cocktail-min.jpg' ?>" alt="" class="wp-image-209" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column mobile-order-1">
        <!-- wp:image {"id":210,"sizeSlug":"large","linkDestination":"none"} -->
        <figure class="wp-block-image size-large"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/fig-cocktail-min.jpg' ?>" alt="" class="wp-image-210" /></figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column mobile-order-0">
        <!-- wp:heading -->
        <h2>Our drinks</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button"><a class="wp-block-button__link">View our drinks menu</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->
