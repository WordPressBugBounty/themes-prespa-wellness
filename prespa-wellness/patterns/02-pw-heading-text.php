<?php
/**
  * Title: Heading with text
  * Slug: prespa-wellness/heading-with-text
  * Categories: prespa-wellness
*/
?>

<!-- wp:group {"className":"p-animation-text-moveUp","style":{"spacing":{"padding":{"top":"var:preset|spacing|medium","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained","wideSize":"","contentSize":"640px"}} -->
<div class="wp-block-group p-animation-text-moveUp" style="padding-top:var(--wp--preset--spacing--medium);padding-bottom:var(--wp--preset--spacing--x-large)"><!-- wp:image {"width":"75px","sizeSlug":"full","linkDestination":"none","align":"center","className":"is-style-default"} -->
<figure class="wp-block-image aligncenter size-full is-resized is-style-default"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/img/pw-patterns/icons/wellness-logo.svg" alt="" style="width:75px"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":2,"style":{"spacing":{"padding":{"top":"0","bottom":"var:preset|spacing|small"}}},"fontSize":"medium-large"} -->
<h2 class="wp-block-heading has-text-align-center has-medium-large-font-size" style="padding-top:0;padding-bottom:var(--wp--preset--spacing--small)"><strong><?php esc_html_e( 'Timeless healing for the modern soul.', 'prespa-wellness' );?></strong></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"padding":{"right":"var:preset|spacing|medium","left":"var:preset|spacing|medium"}}}} -->
<p class="has-text-align-center" style="padding-right:var(--wp--preset--spacing--medium);padding-left:var(--wp--preset--spacing--medium)"><?php esc_html_e( 'Step out of the noise. Inside, the lights are low, the tea is warm, and someone is waiting to take care of you. Three rituals — yoga, massage, spa — to keep your balance.', 'prespa-wellness' );?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->