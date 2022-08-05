<?php

/**
 * Title: A full width cover with heading, text and button on the left
 * Slug: molten/hero-cover-with-text-cta
 * Categories: molten-hero
 */
?>
<!-- wp:cover {"url":"' . esc_url( get_template_directory_uri() ) . '/assets/images/chopping-tomatoes.jpg","id":27,"dimRatio":60,"overlayColor":"foreground","minHeight":600,"contentPosition":"center center","align":"full", "style":{"spacing":{"margin":{"bottom":"var(--wp--custom--spacing--gap--vertical, 32px)"}}}} -->
<div class="wp-block-cover alignfull" style="min-height:600px;margin-bottom:var(--wp--custom--spacing--gap--vertical, 32px)"><span aria-hidden="true" class="wp-block-cover__background has-foreground-background-color has-background-dim-60 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-27" alt="" src="' . esc_url( get_template_directory_uri() ) . '/assets/images/chopping-tomatoes.jpg" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"align":"wide","layout":{"inherit":true}} -->
        <div class="wp-block-group alignwide">
            <!-- wp:columns {"align":"wide"} -->
            <div class="wp-block-columns alignwide">
                <!-- wp:column {"width":"60%"} -->
                <div class="wp-block-column" style="flex-basis:60%">
                    <!-- wp:group {"align":"wide","layout":{"inherit":false}} -->
                    <div class="wp-block-group alignwide">
                        <!-- wp:heading {"textAlign":"left"} -->
                        <h2 class="has-text-align-left">Fresh ingredients, cooked simply</h2>
                        <!-- /wp:heading -->

                        <!-- wp:paragraph {"align":"left"} -->
                        <p class="has-text-align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea.</p>
                        <!-- /wp:paragraph -->

                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button -->
                            <div class="wp-block-button"><a class="wp-block-button__link">Book a table</a></div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:column -->

                <!-- wp:column {"width":"40%"} -->
                <div class="wp-block-column" style="flex-basis:40%"></div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->
