<?php
return [
    'title' => __('Three columns, content in the left column and an image in the other two', 'molten'),
    'categories' => array('molten-cta'),
    'content' => '
    <!-- wp:columns {"align":"wide","style":{"spacing":{"margin":{"top":"var(--wp--custom--spacing--top-spacing, 8rem)","bottom":"64px"},"blockGap":"72px"}}} -->
<div class="wp-block-columns alignwide" style="margin-top:var(--wp--custom--spacing--top-spacing, 8rem);margin-bottom:64px"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:heading -->
<h2>Good food</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">View our food menu</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":214,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="http://molten-theme.local/wp-content/uploads/2022/07/joseph-gonzalez-zcUgjyqEwe8-unsplash-edited.jpg" alt="" class="wp-image-214"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":213,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="http://molten-theme.local/wp-content/uploads/2022/07/chad-montano-GFCYhoRe48-unsplash-edited-scaled.jpg" alt="" class="wp-image-213"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->'
];
