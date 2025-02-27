<?php
/**
 * Title: Latest Blogs
 * Slug: grocefycart/blogs
 * Categories:grocefycart
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"light","layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group has-light-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"22px"},"margin":{"top":"0","bottom":"0px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
	<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-top:0;margin-bottom:0px;padding-bottom:22px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"style":"none","width":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big"} -->
		<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-big-font-size" style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0;font-style:normal;font-weight:600"><?php esc_html_e( 'Latest News & Blogs', 'grocefycart' ); ?></h4>
		<!-- /wp:heading -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"45px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group" style="margin-top:45px"><!-- wp:query {"queryId":24,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":null,"parents":[],"format":[]}} -->
		<div class="wp-block-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
			<!-- wp:group {"className":"is-style-grocefycart-boxshadow","style":{"spacing":{"padding":{"top":"20px","bottom":"20px","left":"20px","right":"20px"}},"border":{"radius":"10px"}},"backgroundColor":"background","layout":{"type":"constrained","contentSize":"100%"}} -->
			<div class="wp-block-group is-style-grocefycart-boxshadow has-background-background-color has-background" style="border-radius:10px;padding-top:20px;padding-right:20px;padding-bottom:20px;padding-left:20px"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"240px","align":"center"} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
				<div class="wp-block-group"><!-- wp:post-terms {"term":"category","className":"is-style-categories-background-faded-round","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"x-small"} /-->

					<!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big"} /-->

					<!-- wp:post-excerpt {"excerptLength":18,"fontSize":"small-plus"} /-->

					<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|meta-color"}}},"typography":{"textTransform":"capitalize"},"spacing":{"blockGap":"15px","margin":{"top":"15px"}}},"textColor":"meta-color","fontSize":"small-plus","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group has-meta-color-color has-text-color has-link-color has-small-plus-font-size" style="margin-top:15px;text-transform:capitalize"><!-- wp:post-date /-->

						<!-- wp:post-author-name /-->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
			<!-- /wp:post-template -->
		</div>
		<!-- /wp:query -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->