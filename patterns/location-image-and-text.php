<?php

/**
 * Title: Image on the left and restaurant information on the right
 * Slug: molten/location-image-and-text
 * Categories: molten-location
 */
?>
<!-- wp:media-text {"mediaId":126,"mediaLink":"<?php echo esc_url(get_template_directory_uri()) . '/assets/images/coffee-shop-patio.jpg' ?>","mediaType":"image","mediaSizeSlug":"full","verticalAlignment":"center","imageFill":true,"focalPoint":{"x":"0.76","y":"0.68"}, "style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--gap--vertical, 32px)"}}}} -->
<div class="wp-block-media-text alignwide is-stacked-on-mobile is-vertically-aligned-center is-image-fill" style="margin-top:var(--wp--custom--spacing--gap--vertical, 32px)">
    <figure class="wp-block-media-text__media" style="background-image:url(<?php echo esc_url(get_template_directory_uri()) . '/assets/images/coffee-shop-patio.jpg' ?>);background-position:76% 68%"><img src="<?php echo esc_url(get_template_directory_uri()) . '/assets/images/coffee-shop-patio.jpg' ?>" alt="" class="wp-image-126 size-full" /></figure>
    <div class="wp-block-media-text__content">
        <!-- wp:heading {"style":{"spacing":{"margin":{"top":"0px","bottom":"32px"}}}} -->
        <h2 style="margin-top:0px;margin-bottom:32px">Where to find us</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>123 Test Street, Braddon ACT 2612</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":3} -->
        <h3>Opening Hours</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p><strong>Lunch<br></strong><em>Monday – Sunday</em><br>11:30am to 2:30pm<br><br><strong>Dinner</strong><br><em>Monday – Sunday</em><br>5:30pm to 9:30pm</p>
        <!-- /wp:paragraph -->

        <!-- wp:heading {"level":3} -->
        <h3>Contact</h3>
        <!-- /wp:heading -->

        <!-- wp:paragraph -->
        <p>Phone: (02) 6262 6888<br>Email: restaurant@email.com</p>
        <!-- /wp:paragraph -->
    </div>
</div>
<!-- /wp:media-text -->
