<?php

/**
 * Title: Two cards, side by side
 * Slug: molten/cta-cards-side-by-side
 * Categories: molten-cta
 */
?>

<!-- wp:columns {"align":"wide"} -->
<div class="wp-block-columns alignwide">
    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) . '/assets/images/cocktail-min.jpg' ?>","id":19,"dimRatio":50,"minHeight":570,"minHeightUnit":"px","isDark":false} -->
        <div class="wp-block-cover is-light" style="min-height:570px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-19" alt="" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/cocktail-min.jpg' ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:heading {"textAlign":"center","textColor":"background"} -->
                <h2 class="has-text-align-center has-background-color has-text-color">Our philosophy</h2>
                <!-- /wp:heading -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column -->
    <div class="wp-block-column">
        <!-- wp:cover {"url":"<?php echo esc_url(get_template_directory_uri()) . '/assets/images/whiskey-min.jpg' ?>","id":18,"dimRatio":50,"focalPoint":{"x":"0.50","y":"0.63"},"minHeight":570,"minHeightUnit":"px","isDark":false} -->
        <div class="wp-block-cover is-light" style="min-height:570px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-18" alt="" src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/whiskey-min.jpg' ?>" style="object-position:50% 63%" data-object-fit="cover" data-object-position="50% 63%" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:heading {"textAlign":"center","textColor":"background"} -->
                <h2 class="has-text-align-center has-background-color has-text-color">Our drinks</h2>
                <!-- /wp:heading -->
            </div>
        </div>
        <!-- /wp:cover -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->
