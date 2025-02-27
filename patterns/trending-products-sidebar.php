<?php
/**
 * Title: Trending and Top Selling Products
 * Slug: grocefycart/trending-products-sidebar
 * Categories: grocefycart-template
 */
$grocefycart_sidebar_url = trailingslashit( get_template_directory_uri() );
$grocefycart_sidebar_img = array(
	$grocefycart_sidebar_url . 'assets/images/ads.jpg',
)
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group"
	style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)">
<?php
if ( class_exists( 'WooCommerce' ) ) {
	?>
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"25px","left":"25px"}}}} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"spacing":{"padding":{"right":"34px","left":"34px","top":"20px","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
			<div class="wp-block-group has-border-color"
				style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:20px;padding-right:34px;padding-bottom:20px;padding-left:34px">
				<!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":5,"pages":"1","offset":0,"postType":"product","order":"desc","orderBy":"popularity","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"list","columns":5,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/best-sellers","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
				<div class="wp-block-woocommerce-product-collection">
					<!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"bottom":"10px"},"margin":{"bottom":"30px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"medium"} -->
					<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color has-link-color has-medium-font-size"
						style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-bottom:30px;padding-bottom:10px;font-style:normal;font-weight:500">
						<?php esc_html_e( 'Top Selling', 'grocefycart' ); ?></h5>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
						<!-- wp:woocommerce/product-template -->
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group"
							style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-top:0;padding-bottom:15px">
							<!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"65px","height":"65px"} /-->

							<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
							<div class="wp-block-group">
								<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0rem","top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"small-plus","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

								<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"luminous-vivid-orange","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|luminous-vivid-orange"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

								<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"primary","fontSize":"small","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
						<!-- /wp:woocommerce/product-template -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:woocommerce/product-collection -->
			</div>
			<!-- /wp:group -->

			<!-- wp:image {"id":452,"width":"auto","height":"420px","aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"10px"}}} -->
			<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img
					src="<?php echo esc_url( $grocefycart_sidebar_img[0] ); ?>"
					alt="" class="wp-image-452"
					style="border-radius:10px;aspect-ratio:2/3;object-fit:cover;width:auto;height:420px" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
			<div class="wp-block-group">
				<!-- wp:woocommerce/product-collection {"queryId":1,"query":{"perPage":6,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/featured","hideControls":["inherit","featured","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"layout":{"type":"constrained","contentSize":"100%"}} -->
				<div class="wp-block-woocommerce-product-collection">
					<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"16px"},"margin":{"top":"0","bottom":"45px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
					<div class="wp-block-group"
						style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-top:0;margin-bottom:45px;padding-bottom:16px">
						<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"style":"none","width":"0px"}}},"textColor":"heading","fontSize":"big"} -->
						<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-big-font-size"
							style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0"><?php esc_html_e( 'Trending Products', 'grocefycart' ); ?>
						</h4>
						<!-- /wp:heading -->

						<!-- wp:buttons {"style":{"border":{"width":"1px","color":"#4C4C4C","radius":"100px"}},"backgroundColor":"transparent"} -->
						<div class="wp-block-buttons has-border-color has-transparent-background-color has-background"
							style="border-color:#4C4C4C;border-width:1px;border-radius:100px">
							<!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"100px","width":"0px","style":"none"},"spacing":{"padding":{"left":"18px","right":"18px","top":"8px","bottom":"8px"}}},"fontSize":"normal"} -->
							<div class="wp-block-button has-custom-font-size has-normal-font-size"><a
									class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button"
									href="#"
									style="border-style:none;border-width:0px;border-radius:100px;padding-top:8px;padding-right:18px;padding-bottom:8px;padding-left:18px"><?php esc_html_e( 'See All', 'grocefycart' ); ?></a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->

					<!-- wp:woocommerce/product-template -->
					<!-- wp:group {"className":"is-style-grocefycart-boxshadow-hover","style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","layout":{"type":"constrained","contentSize":""}} -->
					<div class="wp-block-group is-style-grocefycart-boxshadow-hover has-border-color has-heading-color has-text-color has-link-color"
						style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0;margin-bottom:0;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
						<!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"width":"","height":"150px","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}}} /-->

						<!-- wp:woocommerce/product-stock-indicator {"isDescendentOfQueryLoop":true,"backgroundColor":"secondary","textColor":"heading","fontSize":"x-small","style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"textTransform":"capitalize","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"5px","bottom":"5px","left":"12px","right":"12px"}}}} /-->

						<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"14px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

						<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"normal","style":{"elements":{"link":{"color":{"text":"#fd8f14"}}},"color":{"text":"#fd8f14"},"spacing":{"margin":{"top":"15px"}}}} /-->

						<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"24px","bottom":"0"},"padding":{"top":"24px"},"blockGap":"15px"},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group alignwide"
							style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;margin-top:24px;margin-bottom:0;padding-top:24px">
							<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"fontSize":"14px","lineHeight":"1.2"}}} /-->

							<!-- wp:woocommerce/product-button {"textAlign":"left","isDescendentOfQueryLoop":true,"textColor":"primary","fontSize":"small","style":{"color":{"background":"#1d8d601a"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"400"},"border":{"radius":"100px"}}} /-->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:group -->
					<!-- /wp:woocommerce/product-template -->
				</div>
				<!-- /wp:woocommerce/product-collection -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<?php
} else {
	$grocefycart_product_url = trailingslashit( get_template_directory_uri() );
	$grocefycart_product_img = array(
		$grocefycart_product_url . 'assets/images/product-penne.jpg',
		$grocefycart_product_url . 'assets/images/product-farfalle.jpg',
		$grocefycart_product_url . 'assets/images/product-berry-1.jpg',
		$grocefycart_product_url . 'assets/images/product-tagliate.jpg',
		$grocefycart_product_url . 'assets/images/product-pomegranate.jpg',
		$grocefycart_product_url . 'assets/images/product-papaya.jpg',
		$grocefycart_product_url . 'assets/images/product-berry.jpg',
		$grocefycart_product_url . 'assets/images/star.png',
	)
	?>
	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"35px","left":"25px"}}}} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%">
			<!-- wp:group {"style":{"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"spacing":{"padding":{"right":"34px","left":"34px","top":"20px","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
			<div class="wp-block-group has-border-color"
				style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:20px;padding-right:34px;padding-bottom:20px;padding-left:34px">
				<!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"bottom":"10px"},"margin":{"bottom":"30px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"medium"} -->
				<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color has-link-color has-medium-font-size"
					style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-bottom:30px;padding-bottom:10px;font-style:normal;font-weight:500">
					<?php esc_html_e( 'Top Selling', 'grocefycart' ); ?></h5>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"blockGap":"15px"}},"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
					<div class="wp-block-columns is-not-stacked-on-mobile">
						<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
						<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
							<!-- wp:image {"id":59,"width":"auto","height":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_product_img[0] ); ?>"
									alt="penne" class="wp-image-59"
									style="aspect-ratio:1;object-fit:cover;width:auto;height:64px" /></figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->

						<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0px"}}} -->
						<div class="wp-block-column is-vertically-aligned-center">
							<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading","fontSize":"small-plus"} -->
							<h4 class="wp-block-heading has-heading-color has-text-color has-link-color has-small-plus-font-size"
								style="margin-top:0;margin-bottom:0;line-height:1.2"><?php esc_html_e( 'Penne Rigate', 'grocefycart' ); ?></h4>
							<!-- /wp:heading -->

							<!-- wp:image {"id":1423,"width":"60px","height":"12px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
							<figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0">
								<img src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>"
									alt="" class="wp-image-1423" style="object-fit:cover;width:60px;height:12px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"textColor":"primary","fontSize":"small-plus"} -->
							<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-small-plus-font-size"
								style="margin-top:5px;margin-bottom:0px;font-style:normal;font-weight:600"><?php esc_html_e( '$29.99', 'grocefycart' ); ?></h2>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->

					<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
					<div class="wp-block-columns is-not-stacked-on-mobile">
						<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
						<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
							<!-- wp:image {"id":68,"width":"auto","height":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_product_img[1] ); ?>"
									alt="" class="wp-image-68"
									style="aspect-ratio:1;object-fit:cover;width:auto;height:64px" /></figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->

						<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0px"}}} -->
						<div class="wp-block-column is-vertically-aligned-center">
							<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading","fontSize":"small-plus"} -->
							<h4 class="wp-block-heading has-heading-color has-text-color has-link-color has-small-plus-font-size"
								style="margin-top:0;margin-bottom:0;line-height:1.2"><?php esc_html_e( 'Farfalle', 'grocefycart' ); ?></h4>
							<!-- /wp:heading -->

							<!-- wp:image {"id":1423,"width":"60px","height":"12px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
							<figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0">
								<img src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>"
									alt="" class="wp-image-1423" style="object-fit:cover;width:60px;height:12px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"textColor":"primary","fontSize":"small-plus"} -->
							<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-small-plus-font-size"
								style="margin-top:5px;margin-bottom:0px;font-style:normal;font-weight:600"><?php esc_html_e( '$29.99', 'grocefycart' ); ?></h2>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->

					<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
					<div class="wp-block-columns is-not-stacked-on-mobile">
						<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
						<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
							<!-- wp:image {"id":66,"width":"auto","height":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_product_img[2] ); ?>"
									alt="" class="wp-image-66"
									style="aspect-ratio:1;object-fit:cover;width:auto;height:64px" /></figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->

						<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0px"}}} -->
						<div class="wp-block-column is-vertically-aligned-center">
							<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading","fontSize":"small-plus"} -->
							<h4 class="wp-block-heading has-heading-color has-text-color has-link-color has-small-plus-font-size"
								style="margin-top:0;margin-bottom:0;line-height:1.2"><?php esc_html_e( 'Strawberry', 'grocefycart' ); ?></h4>
							<!-- /wp:heading -->

							<!-- wp:image {"id":1423,"width":"60px","height":"12px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
							<figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0">
								<img src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>"
									alt="" class="wp-image-1423" style="object-fit:cover;width:60px;height:12px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"textColor":"primary","fontSize":"small-plus"} -->
							<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-small-plus-font-size"
								style="margin-top:5px;margin-bottom:0px;font-style:normal;font-weight:600"><?php esc_html_e( '$39.99', 'grocefycart' ); ?></h2>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->

					<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
					<div class="wp-block-columns is-not-stacked-on-mobile">
						<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
						<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
							<!-- wp:image {"id":59,"width":"auto","height":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_product_img[3] ); ?>"
									alt="penne" class="wp-image-59"
									style="aspect-ratio:1;object-fit:cover;width:auto;height:64px" /></figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->

						<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0px"}}} -->
						<div class="wp-block-column is-vertically-aligned-center">
							<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading","fontSize":"small-plus"} -->
							<h4 class="wp-block-heading has-heading-color has-text-color has-link-color has-small-plus-font-size"
								style="margin-top:0;margin-bottom:0;line-height:1.2"><?php esc_html_e( 'Capellini Tagliati', 'grocefycart' ); ?></h4>
							<!-- /wp:heading -->

							<!-- wp:image {"id":1423,"width":"60px","height":"12px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
							<figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0">
								<img src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>"
									alt="" class="wp-image-1423" style="object-fit:cover;width:60px;height:12px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"textColor":"primary","fontSize":"small-plus"} -->
							<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-small-plus-font-size"
								style="margin-top:5px;margin-bottom:0px;font-style:normal;font-weight:600"><?php esc_html_e( '$29.99', 'grocefycart' ); ?></h2>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->

					<!-- wp:columns {"isStackedOnMobile":false,"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"}}}} -->
					<div class="wp-block-columns is-not-stacked-on-mobile">
						<!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
						<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
							<!-- wp:image {"id":76,"width":"auto","height":"64px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_product_img[4] ); ?>"
									alt="" class="wp-image-76"
									style="aspect-ratio:1;object-fit:cover;width:auto;height:64px" /></figure>
							<!-- /wp:image -->
						</div>
						<!-- /wp:column -->

						<!-- wp:column {"verticalAlignment":"center","width":"","style":{"spacing":{"blockGap":"0px"}}} -->
						<div class="wp-block-column is-vertically-aligned-center">
							<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"lineHeight":"1.2"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"heading","fontSize":"small-plus"} -->
							<h4 class="wp-block-heading has-heading-color has-text-color has-link-color has-small-plus-font-size"
								style="margin-top:0;margin-bottom:0;line-height:1.2"><?php esc_html_e( 'Pomegranate', 'grocefycart' ); ?></h4>
							<!-- /wp:heading -->

							<!-- wp:image {"id":1423,"width":"60px","height":"12px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
							<figure class="wp-block-image size-full is-resized" style="margin-top:0;margin-bottom:0">
								<img src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>"
									alt="" class="wp-image-1423" style="object-fit:cover;width:60px;height:12px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"spacing":{"margin":{"top":"5px","bottom":"0px"}}},"textColor":"primary","fontSize":"small-plus"} -->
							<h2 class="wp-block-heading has-primary-color has-text-color has-link-color has-small-plus-font-size"
								style="margin-top:5px;margin-bottom:0px;font-style:normal;font-weight:600"><?php esc_html_e( '$49.99', 'grocefycart' ); ?></h2>
							<!-- /wp:heading -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->

			<!-- wp:image {"id":452,"width":"auto","height":"420px","aspectRatio":"2/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center","style":{"border":{"radius":"10px"}}} -->
			<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img
					src="<?php echo esc_url( $grocefycart_sidebar_img[0] ); ?>"
					alt="" class="wp-image-452"
					style="border-radius:10px;aspect-ratio:2/3;object-fit:cover;width:auto;height:420px" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%">
			<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
			<div class="wp-block-group">
				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"16px"},"margin":{"top":"0","bottom":"45px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
				<div class="wp-block-group"
					style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-top:0;margin-bottom:45px;padding-bottom:16px">
					<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"style":"none","width":"0px"}}},"textColor":"heading","fontSize":"big"} -->
					<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-big-font-size"
						style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0"><?php esc_html_e( 'Trending Products', 'grocefycart' ); ?></h4>
					<!-- /wp:heading -->

					<!-- wp:buttons {"style":{"border":{"width":"1px","color":"#4C4C4C","radius":"100px"}},"backgroundColor":"transparent"} -->
					<div class="wp-block-buttons has-border-color has-transparent-background-color has-background"
						style="border-color:#4C4C4C;border-width:1px;border-radius:100px">
						<!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"100px","width":"0px","style":"none"},"spacing":{"padding":{"left":"18px","right":"18px","top":"8px","bottom":"8px"}}},"fontSize":"normal"} -->
						<div class="wp-block-button has-custom-font-size has-normal-font-size"><a
								class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button"
								href="#"
								style="border-style:none;border-width:0px;border-radius:100px;padding-top:8px;padding-right:18px;padding-bottom:8px;padding-left:18px"><?php esc_html_e( 'See All', 'grocefycart' ); ?></a></div>
						<!-- /wp:button -->
					</div>
					<!-- /wp:buttons -->
				</div>
				<!-- /wp:group -->

				<!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column {"width":"33.34%"} -->
					<div class="wp-block-column" style="flex-basis:33.34%">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
						<div class="wp-block-group has-border-color"
							style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
							<!-- wp:image {"id":59,"width":"auto","height":"150px","aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_product_img[0] ); ?>"
									alt="penne" class="wp-image-59"
									style="aspect-ratio:4/3;object-fit:cover;width:auto;height:150px" /></figure>
							<!-- /wp:image -->

							<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"normal"} -->
							<h6 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
								style="font-style:normal;font-weight:600"><?php esc_html_e( 'Penne Rigate', 'grocefycart' ); ?></h6>
							<!-- /wp:heading -->

							<!-- wp:image {"id":1423,"width":"60px","height":"12px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}}} -->
							<figure class="wp-block-image size-full is-resized" style="margin-top:0px;margin-bottom:0">
								<img src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>"
									alt="" class="wp-image-1423" style="object-fit:cover;width:60px;height:12px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
							<div class="wp-block-group"
								style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:24px">
								<!-- wp:heading {"fontSize":"small-plus"} -->
								<h2 class="wp-block-heading has-small-plus-font-size"><s><mark
											style="background-color:rgba(0, 0, 0, 0)"
											class="has-inline-color has-foreground-color"><?php esc_html_e( '$49.99', 'grocefycart' ); ?> </mark></s><mark
										style="background-color:rgba(0, 0, 0, 0)"
										class="has-inline-color has-primary-color"><?php esc_html_e( '$39.99', 'grocefycart' ); ?></mark></h2>
								<!-- /wp:heading -->

								<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
								<div class="wp-block-buttons">
									<!-- wp:button {"textColor":"primary","style":{"color":{"background":"#1d8d601a"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"14px","right":"14px","top":"12px","bottom":"12px"}},"border":{"radius":"100px"}},"fontSize":"x-small"} -->
									<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a
											class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button"
											style="border-radius:100px;background-color:#1d8d601a;padding-top:12px;padding-right:14px;padding-bottom:12px;padding-left:14px"><?php esc_html_e( 'Add To Cart', 'grocefycart' ); ?></a></div>
									<!-- /wp:button -->
								</div>
								<!-- /wp:buttons -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"33.34%"} -->
					<div class="wp-block-column" style="flex-basis:33.34%">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
						<div class="wp-block-group has-border-color"
							style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
							<!-- wp:image {"id":68,"width":"auto","height":"150px","aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_product_img[1] ); ?>"
									alt="" class="wp-image-68"
									style="aspect-ratio:4/3;object-fit:cover;width:auto;height:150px" /></figure>
							<!-- /wp:image -->

							<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"normal"} -->
							<h6 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
								style="font-style:normal;font-weight:600"><?php esc_html_e( 'Farfalle Pasta', 'grocefycart' ); ?></h6>
							<!-- /wp:heading -->

							<!-- wp:image {"id":1423,"width":"60px","height":"12px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}}} -->
							<figure class="wp-block-image size-full is-resized" style="margin-top:0px;margin-bottom:0">
								<img src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>"
									alt="" class="wp-image-1423" style="object-fit:cover;width:60px;height:12px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
							<div class="wp-block-group"
								style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:24px">
								<!-- wp:heading {"fontSize":"small-plus"} -->
								<h2 class="wp-block-heading has-small-plus-font-size"><s><mark
											style="background-color:rgba(0, 0, 0, 0)"
											class="has-inline-color has-foreground-color"><?php esc_html_e( '$39.99 ', 'grocefycart' ); ?></mark></s><mark
										style="background-color:rgba(0, 0, 0, 0)"
										class="has-inline-color has-primary-color"><?php esc_html_e( '$29.99', 'grocefycart' ); ?></mark></h2>
								<!-- /wp:heading -->

								<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
								<div class="wp-block-buttons">
									<!-- wp:button {"textColor":"primary","style":{"color":{"background":"#1d8d601a"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"14px","right":"14px","top":"12px","bottom":"12px"}},"border":{"radius":"100px"}},"fontSize":"x-small"} -->
									<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a
											class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button"
											style="border-radius:100px;background-color:#1d8d601a;padding-top:12px;padding-right:14px;padding-bottom:12px;padding-left:14px"><?php esc_html_e( 'Add To Cart', 'grocefycart' ); ?></a></div>
									<!-- /wp:button -->
								</div>
								<!-- /wp:buttons -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"33.33%"} -->
					<div class="wp-block-column" style="flex-basis:33.33%">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
						<div class="wp-block-group has-border-color"
							style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
							<!-- wp:image {"id":70,"width":"auto","height":"150px","aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_product_img[3] ); ?>"
									alt="" class="wp-image-70"
									style="aspect-ratio:4/3;object-fit:cover;width:auto;height:150px" /></figure>
							<!-- /wp:image -->

							<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"normal"} -->
							<h6 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
								style="font-style:normal;font-weight:600"><?php esc_html_e( 'Capellini Tagliati', 'grocefycart' ); ?></h6>
							<!-- /wp:heading -->

							<!-- wp:image {"id":1423,"width":"60px","height":"12px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}}} -->
							<figure class="wp-block-image size-full is-resized" style="margin-top:0px;margin-bottom:0">
								<img src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>"
									alt="" class="wp-image-1423" style="object-fit:cover;width:60px;height:12px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
							<div class="wp-block-group"
								style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:24px">
								<!-- wp:heading {"fontSize":"small-plus"} -->
								<h2 class="wp-block-heading has-small-plus-font-size"><s><mark
											style="background-color:rgba(0, 0, 0, 0)"
											class="has-inline-color has-foreground-color"><?php esc_html_e( '$39.99 ', 'grocefycart' ); ?></mark></s><mark
										style="background-color:rgba(0, 0, 0, 0)"
										class="has-inline-color has-primary-color"><?php esc_html_e( '$29.99', 'grocefycart' ); ?></mark></h2>
								<!-- /wp:heading -->

								<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
								<div class="wp-block-buttons">
									<!-- wp:button {"textColor":"primary","style":{"color":{"background":"#1d8d601a"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"14px","right":"14px","top":"12px","bottom":"12px"}},"border":{"radius":"100px"}},"fontSize":"x-small"} -->
									<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a
											class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button"
											style="border-radius:100px;background-color:#1d8d601a;padding-top:12px;padding-right:14px;padding-bottom:12px;padding-left:14px"><?php esc_html_e( 'Add To Cart', 'grocefycart' ); ?></a></div>
									<!-- /wp:button -->
								</div>
								<!-- /wp:buttons -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->

				<!-- wp:columns -->
				<div class="wp-block-columns"><!-- wp:column {"width":"33.34%"} -->
					<div class="wp-block-column" style="flex-basis:33.34%">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
						<div class="wp-block-group has-border-color"
							style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
							<!-- wp:image {"id":74,"width":"auto","height":"150px","aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_product_img[5] ); ?>"
									alt="" class="wp-image-74"
									style="aspect-ratio:4/3;object-fit:cover;width:auto;height:150px" /></figure>
							<!-- /wp:image -->

							<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"normal"} -->
							<h6 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
								style="font-style:normal;font-weight:600"><?php esc_html_e( 'Fresh Papaya', 'grocefycart' ); ?></h6>
							<!-- /wp:heading -->

							<!-- wp:image {"id":1423,"width":"60px","height":"12px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}}} -->
							<figure class="wp-block-image size-full is-resized" style="margin-top:0px;margin-bottom:0">
								<img src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>"
									alt="" class="wp-image-1423" style="object-fit:cover;width:60px;height:12px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
							<div class="wp-block-group"
								style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:24px">
								<!-- wp:heading {"fontSize":"small-plus"} -->
								<h2 class="wp-block-heading has-small-plus-font-size"><s><mark
											style="background-color:rgba(0, 0, 0, 0)"
											class="has-inline-color has-foreground-color"><?php esc_html_e( '$39.99 ', 'grocefycart' ); ?></mark></s><mark
										style="background-color:rgba(0, 0, 0, 0)"
										class="has-inline-color has-primary-color"><?php esc_html_e( '$29.99', 'grocefycart' ); ?></mark></h2>
								<!-- /wp:heading -->

								<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
								<div class="wp-block-buttons">
									<!-- wp:button {"textColor":"primary","style":{"color":{"background":"#1d8d601a"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"14px","right":"14px","top":"12px","bottom":"12px"}},"border":{"radius":"100px"}},"fontSize":"x-small"} -->
									<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a
											class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button"
											style="border-radius:100px;background-color:#1d8d601a;padding-top:12px;padding-right:14px;padding-bottom:12px;padding-left:14px"><?php esc_html_e( 'Add To Cart', 'grocefycart' ); ?></a></div>
									<!-- /wp:button -->
								</div>
								<!-- /wp:buttons -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"33.34%"} -->
					<div class="wp-block-column" style="flex-basis:33.34%">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
						<div class="wp-block-group has-border-color"
							style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
							<!-- wp:image {"id":76,"width":"auto","height":"150px","aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_product_img[4] ); ?>"
									alt="" class="wp-image-76"
									style="aspect-ratio:4/3;object-fit:cover;width:auto;height:150px" /></figure>
							<!-- /wp:image -->

							<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"normal"} -->
							<h6 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
								style="font-style:normal;font-weight:600"><?php esc_html_e( 'Fresh Pomegranate', 'grocefycart' ); ?></h6>
							<!-- /wp:heading -->

							<!-- wp:image {"id":1423,"width":"60px","height":"12px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}}} -->
							<figure class="wp-block-image size-full is-resized" style="margin-top:0px;margin-bottom:0">
								<img src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>"
									alt="" class="wp-image-1423" style="object-fit:cover;width:60px;height:12px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
							<div class="wp-block-group"
								style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:24px">
								<!-- wp:heading {"fontSize":"small-plus"} -->
								<h2 class="wp-block-heading has-small-plus-font-size"><s><mark
											style="background-color:rgba(0, 0, 0, 0)"
											class="has-inline-color has-foreground-color"><?php esc_html_e( '$29.99 ', 'grocefycart' ); ?></mark></s><mark
										style="background-color:rgba(0, 0, 0, 0)"
										class="has-inline-color has-primary-color"><?php esc_html_e( '$19.99 ', 'grocefycart' ); ?></mark></h2>
								<!-- /wp:heading -->

								<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
								<div class="wp-block-buttons">
									<!-- wp:button {"textColor":"primary","style":{"color":{"background":"#1d8d601a"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"14px","right":"14px","top":"12px","bottom":"12px"}},"border":{"radius":"100px"}},"fontSize":"x-small"} -->
									<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a
											class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button"
											style="border-radius:100px;background-color:#1d8d601a;padding-top:12px;padding-right:14px;padding-bottom:12px;padding-left:14px"><?php esc_html_e( 'Add To Cart', 'grocefycart' ); ?></a></div>
									<!-- /wp:button -->
								</div>
								<!-- /wp:buttons -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"33.33%"} -->
					<div class="wp-block-column" style="flex-basis:33.33%">
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
						<div class="wp-block-group has-border-color"
							style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
							<!-- wp:image {"id":65,"width":"auto","height":"150px","aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
							<figure class="wp-block-image aligncenter size-full is-resized"><img
									src="<?php echo esc_url( $grocefycart_product_img[6] ); ?>"
									alt="" class="wp-image-65"
									style="aspect-ratio:4/3;object-fit:cover;width:auto;height:150px" /></figure>
							<!-- /wp:image -->

							<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"normal"} -->
							<h6 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
								style="font-style:normal;font-weight:600"><?php esc_html_e( 'Fresh Strawberry', 'grocefycart' ); ?></h6>
							<!-- /wp:heading -->

							<!-- wp:image {"id":1423,"width":"60px","height":"12px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}}} -->
							<figure class="wp-block-image size-full is-resized" style="margin-top:0px;margin-bottom:0">
								<img src="<?php echo esc_url( $grocefycart_product_img[7] ); ?>"
									alt="" class="wp-image-1423" style="object-fit:cover;width:60px;height:12px" />
							</figure>
							<!-- /wp:image -->

							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
							<div class="wp-block-group"
								style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:24px">
								<!-- wp:heading {"fontSize":"small-plus"} -->
								<h2 class="wp-block-heading has-small-plus-font-size"><s><mark
											style="background-color:rgba(0, 0, 0, 0)"
											class="has-inline-color has-foreground-color"><?php esc_html_e( '$39.99 ', 'grocefycart' ); ?></mark></s><mark
										style="background-color:rgba(0, 0, 0, 0)"
										class="has-inline-color has-primary-color"><?php esc_html_e( '$29.99', 'grocefycart' ); ?></mark></h2>
								<!-- /wp:heading -->

								<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
								<div class="wp-block-buttons">
									<!-- wp:button {"textColor":"primary","style":{"color":{"background":"#1d8d601a"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"padding":{"left":"14px","right":"14px","top":"12px","bottom":"12px"}},"border":{"radius":"100px"}},"fontSize":"x-small"} -->
									<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a
											class="wp-block-button__link has-primary-color has-text-color has-background has-link-color wp-element-button"
											style="border-radius:100px;background-color:#1d8d601a;padding-top:12px;padding-right:14px;padding-bottom:12px;padding-left:14px"><?php esc_html_e( 'Add To Cart', 'grocefycart' ); ?></a></div>
									<!-- /wp:button -->
								</div>
								<!-- /wp:buttons -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
	<?php } ?>
</div>
<!-- /wp:group -->