<?php
/**
  * Title: Header
  * Slug: prespa-wellness/header
  * Categories: prespa-wellness
*/
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/pw-patterns/header.jpg","dimRatio":40,"customOverlayColor":"#d6afa3","isUserOverlayColor":true,"minHeight":800,"minHeightUnit":"px","isDark":false,"sizeSlug":"large","metadata":{"categories":["prespa-wellness"],"patternName":"prespa-wellness/header","name":"Header"},"align":"full"} -->
<div class="wp-block-cover alignfull is-light" style="min-height:800px"><img class="wp-block-cover__image-background size-large" alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/pw-patterns/header.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim-40 has-background-dim" style="background-color:#d6afa3"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"placeholder":"Add slide title...","style":{"color":{"text":"#040404"},"typography":{"textAlign":"center"}},"fontSize":"x-large"} -->
<h2 class="wp-block-heading has-text-align-center has-text-color has-x-large-font-size" style="color:#040404"><?php esc_html_e( 'Escape the noise, find your calm.', 'prespa-wellness' ); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"has-dark-gray-color has-text-color has-link-color","style":{"elements":{"link":{"color":{"text":"var:preset|color|dark-gray"}}},"spacing":{"padding":{"top":"1rem","bottom":"1rem"}},"typography":{"textAlign":"center"}},"textColor":"dark-gray"} -->
<p class="has-text-align-center has-dark-gray-color has-text-color has-link-color" style="padding-top:1rem;padding-bottom:1rem"><?php esc_html_e( 'Rejuvenate your body, mind, and spirit.', 'prespa-wellness' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textColor":"white","className":"p-btn-animation-slide-in","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"color":{"background":"#cba395"},"spacing":{"padding":{"left":"var:preset|spacing|large","right":"var:preset|spacing|large"}}}} -->
<div class="wp-block-button p-btn-animation-slide-in"><a class="wp-block-button__link has-white-color has-text-color has-background has-link-color wp-element-button" href="#" style="background-color:#cba395;padding-right:var(--wp--preset--spacing--large);padding-left:var(--wp--preset--spacing--large)"><?php esc_html_e( 'Book Now', 'prespa-wellness' ); ?> <strong>→</strong></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->
 