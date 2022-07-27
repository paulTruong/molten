<?php
return [
    'title' => __('Centered heading, text and button', 'molten'),
    'categories' => array('molten-cta'),
    'content' => '
    <!-- wp:group {"style":{"spacing":{"margin":{"top":"48px","bottom":"48px"}}}} -->
<div class="wp-block-group" style="margin-top:48px;margin-bottom:48px"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"margin":{"bottom":"40px"}}}} -->
<h2 class="has-text-align-center" style="margin-bottom:40px">Make a reservation</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">For bookings more than 8 people or for private events, please email:  <br>restaurant@email.com</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">We look forward to welcoming you at Molten.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"40px"}}}} -->
<div class="wp-block-buttons" style="margin-top:40px"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link">Make reservation</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->'
];
