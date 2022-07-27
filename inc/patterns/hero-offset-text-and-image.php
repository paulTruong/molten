<?php
return [
    'title' => __('Hero with text with an offset image below' , 'molten'),
    'categories' => array( 'molten-hero' ),
    'content' => '<!-- wp:heading {"textAlign":"left","align":"wide","style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--top-spacing, 8rem)"}}},"fontSize":"huge"} -->
    <h2 class="alignwide has-text-align-left has-huge-font-size" style="margin-top:var(--wp--custom--spacing--top-spacing, 8rem)";>Fresh, locally sourced produce <br>in a relaxed atmosphere</h2>
    <!-- /wp:heading -->

    <!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--top-spacing, 8rem)"}}},"align":"wide"} -->
    <div class="wp-block-columns alignwide" style="margin-top:var(--wp--custom--spacing--top-spacing, 8rem);"><!-- wp:column {"verticalAlignment":"bottom","width":"30%"} -->
    <div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:30%"><!-- wp:paragraph -->
    <p>Wattle serves Australian cuisine with a belief that good food made from fresh, locally sourced ingredients in a relaxing atmosphere makes for the best dining experience.</p>
    <!-- /wp:paragraph --></div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"top","width":"70%","layout":{"inherit":false}} -->
    <div class="wp-block-column is-vertically-aligned-top" style="flex-basis:70%"><!-- wp:image {"id":233,"width":960,"height":720,"sizeSlug":"full","linkDestination":"none"} -->
    <figure class="wp-block-image size-full is-resized"><img src="http://molten-theme.local/wp-content/uploads/2022/07/kayleigh-harrington-yhn4okt6ci0-unsplash-edited-1.jpg" alt="" class="wp-image-233" width="960" height="720"/></figure>
    <!-- /wp:image --></div>
    <!-- /wp:column --></div>
    <!-- /wp:columns -->'
];
