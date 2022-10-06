<?php
/**
 * Hero Banner block pattern
 */
return array(
	'title'       => __( 'Hero Banner', 'twentytwentytwo' ),
	'description' => __( 'Hero Banner with image and heading and button' ),
	'content'     => '<!-- wp:group {"layout":{"type":"constrained"},"align":"wide"} -->
						<div class="wp-block-group alignwide"><!-- wp:cover {"url":"http://localhost/fse/wp-content/uploads/2022/10/42297486_10210315249718162_8354695840173916160_n.jpg","id":43,"dimRatio":50,"contentPosition":"center center","isDark":false,"align":"wide"} -->
						<div class="wp-block-cover alignwide is-light"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span><img class="wp-block-cover__image-background wp-image-43" alt="" src="http://localhost/fse/wp-content/uploads/2022/10/42297486_10210315249718162_8354695840173916160_n.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"textColor":"white","fontSize":"x-large"} -->
						<h1 class="has-text-align-center has-white-color has-text-color has-x-large-font-size">This is Hero Banner</h1>
						<!-- /wp:heading -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
						<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-fill"} -->
						<div class="wp-block-button is-style-fill"><a class="wp-block-button__link wp-element-button">View More</a></div>
						<!-- /wp:button --></div>
						<!-- /wp:buttons --></div></div>
						<!-- /wp:cover --></div>
						<!-- /wp:group -->',
);
