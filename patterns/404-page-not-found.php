<?php
/**
 * Title: 404 Page Not Found
 * Slug: grocefycart/404-page-not-found
 * Categories: grocefycart
 */
	$grocefycart_404_url = trailingslashit( get_template_directory_uri() )
	$grocefycart_404_img = array(
		$grocefycart_404_url . 'assets/images/error.png',
	)
	?>
<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"60px","bottom":"60px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group"
	style="margin-top:0;margin-bottom:0;padding-top:60px;padding-right:var(--wp--preset--spacing--40);padding-bottom:60px;padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:image {"id":2211,"sizeSlug":"full","linkDestination":"none","align":"center","style":{"color":{"duotone":"var:preset|duotone|primary-secondary"}}} -->
	<figure class="wp-block-image aligncenter size-full"><img
			src="<?php echo esc_url( $grocefycart_404_img[0] ); ?>" alt=""
			class="wp-image-2211" /></figure>
	<!-- /wp:image -->

	<!-- wp:heading {"textAlign":"center","level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
	<h1 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color"><?php esc_html_e( 'Page Not Found', 'grocefycart' ); ?></h1>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}}},"textColor":"meta-color"} -->
	<p class="has-text-align-center has-meta-color-color has-text-color has-link-color">
	<?php
	esc_html_e(
		'Oops! Looks like the page you
		are looking for does not exist. Verify the URL and try again',
		'grocefycart'
	)
	?>
	</p>
	<!-- /wp:paragraph -->
</div>
<!-- /wp:group -->