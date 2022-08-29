<?php

/**
 * Title: Two menu items with a name, description and price arranged into two columns.
 * Slug: molten/menu-two-column
 * Categories: molten-menu
 */
?>
<!-- wp:columns {"style":{"spacing":{"blockGap":"6vw","margin":{"bottom":"4vw"}}}} -->
<div class="wp-block-columns" style="margin-bottom:4vw">
    <!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
    <div class="wp-block-column">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom","justifyContent":"space-between"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="has-large-font-size"><strong>Eggs Benedict</strong></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"right"} -->
            <p class="has-text-align-right">$35.00</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p>Sourdough Toast, Spinach, Poached Eggs, Hollandaise Sauce, Sliced Avocado.<br>Choose: Smoked Bacon/Smoked Salmon +1/ Leg Ham</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"style":{"spacing":{"blockGap":"8px"}}} -->
    <div class="wp-block-column">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"bottom","justifyContent":"space-between"}} -->
        <div class="wp-block-group">
            <!-- wp:heading {"level":3,"fontSize":"large"} -->
            <h3 class="has-large-font-size"><strong>Big breakfast</strong></h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"align":"right"} -->
            <p class="has-text-align-right">$35.00</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:paragraph -->
        <p>Sourdough Toast, Smoked Bacon, Free Range Eggs, Avocado, Grilled Halloumi, Hash Brown, Wilted Greens, Garlic Thyme Mushroom, Warmed Tomato</p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
</div>
<!-- /wp:columns -->
