<?php
/**
 * Title: Header Default
 * Slug: grocefycart/header-default
 * Categories: grocefycart
 */

?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
<main class="wp-block-group"
	style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
	<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"5px","bottom":"5px"},"blockGap":"0"}},"backgroundColor":"primary","layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group has-primary-background-color has-background"
		style="padding-top:5px;padding-right:var(--wp--preset--spacing--40);padding-bottom:5px;padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"light","fontSize":"normal"} -->
			<p class="has-light-color has-text-color has-link-color has-normal-font-size"
				style="font-style:normal;font-weight:600">
				<?php esc_html_e( '2345 Beach,Rd Metrocity USA, HWY 1235 | +1 (000) 012-3456', 'grocefycart' ); ?>
			</p>
			<!-- /wp:paragraph -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"light","fontSize":"normal"} -->
				<p class="has-light-color has-text-color has-link-color has-normal-font-size">
					<?php esc_html_e( 'Track your order |', 'grocefycart' ); ?>
				</p>
				<!-- /wp:paragraph -->

				<!-- wp:social-links {"iconColor":"light","iconColorValue":"#F9F9F9","size":"has-small-icon-size","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"left":"15px"}}}} -->
				<ul class="wp-block-social-links has-small-icon-size has-icon-color is-style-logos-only">
					<!-- wp:social-link {"url":"#","service":"facebook"} /-->

					<!-- wp:social-link {"url":"#","service":"instagram"} /-->

					<!-- wp:social-link {"url":"#","service":"x"} /-->

					<!-- wp:social-link {"url":"#","service":"whatsapp"} /-->
				</ul>
				<!-- /wp:social-links -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"30px","bottom":"30px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"bottom":{"color":"#022e1c1a","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group"
		style="border-bottom-color:#022e1c1a;border-bottom-width:1px;margin-top:0;margin-bottom:0;padding-top:30px;padding-right:var(--wp--preset--spacing--40);padding-bottom:30px;padding-left:var(--wp--preset--spacing--40)">
		<!-- wp:group {"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group">
			<!-- wp:site-logo {"width":250,"shouldSyncIcon":true,"style":{"color":{"duotone":"var:preset|duotone|primary-black"}}} /-->

			<!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search","buttonText":"Search","buttonUseIcon":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"italic","fontWeight":"400"},"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}},"border":{"radius":"100px","width":"1px"}},"backgroundColor":"secondary","textColor":"heading","fontSize":"normal","borderColor":"border-color"} /-->
			<?php
			if ( class_exists( 'WooCommerce' ) ) {
				?>
				<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
				<div class="wp-block-group">
					<!-- wp:woocommerce/customer-account {"displayStyle":"icon_only","iconStyle":"line","iconClass":"wc-block-customer-account__account-icon","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

					<!-- wp:woocommerce/mini-cart {"miniCartIcon":"bag-alt","priceColor":{"slug":"foreground","color":"#808080","name":"Foreground","class":"has-foreground-price-color"},"iconColor":{"slug":"primary","color":"#1D8D60","name":"Primary","class":"has-primary-icon-color"},"productCountColor":{"slug":"secondary","color":"#F8C519","name":"Secondary","class":"has-secondary-product-count-color"}} /-->
				</div>
				<!-- /wp:group -->
			<?php } ?>
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"className":"is-style-grocefycart-boxshadow","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"10px","bottom":"10px","left":"0","right":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group is-style-grocefycart-boxshadow"
		style="margin-top:0;margin-bottom:0;padding-top:10px;padding-right:0;padding-bottom:10px;padding-left:0">
		<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group"
			style="padding-right:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
<<<<<<< HEAD
				<!-- wp:buttons -->
				<div class="wp-block-buttons">
					<!-- wp:button {"textColor":"light","className":"is-style-button-hover-secondary-bgcolor","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"border":{"radius":"10px"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"spacing":{"padding":{"left":"16px","right":"16px","top":"10px","bottom":"10px"}}}} -->
					<div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor"
						style="font-size:16px;font-style:normal;font-weight:500;line-height:1.5"><a
							class="wp-block-button__link has-light-color has-text-color has-link-color wp-element-button"
							style="border-radius:10px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px"><?php esc_html_e( 'Select Category', 'grocefycart' ); ?></a>
					</div>
					<!-- /wp:button -->
				</div>
				<!-- /wp:buttons -->

				<!-- wp:navigation {"textColor":"heading","style":{"spacing":{"blockGap":"24px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus"} -->
=======
				<?php if ( class_exists( 'WooCommerce' ) ) { ?>
					<!-- wp:group {"className":"grocefycart-categories-dropdown","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"16px","right":"16px"}},"border":{"radius":"10px"}},"backgroundColor":"primary","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
					<div class="wp-block-group grocefycart-categories-dropdown has-primary-background-color has-background"
						style="border-radius:10px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px">
						<!-- wp:categories {"taxonomy":"product_cat","displayAsDropdown":true,"showLabel":false} /--></div>
					<!-- /wp:group -->
				<?php } ?>
				<!-- wp:navigation {"textColor":"heading","style":{"spacing":{"blockGap":"24px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus"} -->
				<!-- wp:home-link {"label":"Home"} /-->
>>>>>>> core-blocks
				<!-- wp:page-list /-->
				<!-- /wp:navigation -->
			</div>
			<!-- /wp:group -->

			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"textColor":"light","className":"is-style-button-hover-secondary-bgcolor","style":{"typography":{"fontSize":"16px","fontStyle":"normal","fontWeight":"500","lineHeight":"1.5"},"border":{"radius":"10px"},"elements":{"link":{"color":{"text":"var:preset|color|light"}}},"spacing":{"padding":{"left":"16px","right":"16px","top":"10px","bottom":"10px"}}}} -->
				<div class="wp-block-button has-custom-font-size is-style-button-hover-secondary-bgcolor"
					style="font-size:16px;font-style:normal;font-weight:500;line-height:1.5"><a
						class="wp-block-button__link has-light-color has-text-color has-link-color wp-element-button"
						style="border-radius:10px;padding-top:10px;padding-right:16px;padding-bottom:10px;padding-left:16px"><?php esc_html_e( 'Weekly Discount', 'grocefycart' ); ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</main>
<!-- /wp:group -->