<?php
/**
 * Title: Trending and Top Selling Products
 * Slug: grocefycart/trending-products-sidebar
 * Categories: grocefycart-template
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"25px","left":"25px"}}}} -->
	<div class="wp-block-columns"><!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"spacing":{"padding":{"right":"34px","left":"34px","top":"20px","bottom":"20px"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
			<div class="wp-block-group has-border-color" style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:20px;padding-right:34px;padding-bottom:20px;padding-left:34px"><!-- wp:woocommerce/product-collection {"queryId":0,"query":{"perPage":5,"pages":"1","offset":0,"postType":"product","order":"desc","orderBy":"popularity","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"list","columns":5,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/best-sellers","hideControls":["inherit","order","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
				<div class="wp-block-woocommerce-product-collection"><!-- wp:heading {"textAlign":"left","level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"bottom":"10px"},"margin":{"bottom":"30px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"heading","fontSize":"medium"} -->
					<h5 class="wp-block-heading has-text-align-left has-heading-color has-text-color has-link-color has-medium-font-size" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-bottom:30px;padding-bottom:10px;font-style:normal;font-weight:500">Top Selling</h5>
					<!-- /wp:heading -->

					<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:woocommerce/product-template -->
						<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
						<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-top:0;padding-bottom:15px"><!-- wp:woocommerce/product-image {"showSaleBadge":false,"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"65px","height":"65px"} /-->

							<!-- wp:group {"style":{"spacing":{"blockGap":"5px"}},"layout":{"type":"constrained"}} -->
							<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0rem","top":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"small-plus","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

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
			<figure class="wp-block-image aligncenter size-full is-resized has-custom-border"><img src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group.png" alt="" class="wp-image-452" style="border-radius:10px;aspect-ratio:2/3;object-fit:cover;width:auto;height:420px" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"75%"} -->
		<div class="wp-block-column" style="flex-basis:75%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
			<div class="wp-block-group"><!-- wp:woocommerce/product-collection {"queryId":3,"query":{"perPage":6,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":true,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/featured","hideControls":["inherit","featured","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."},"layout":{"type":"constrained","contentSize":"100%"}} -->
				<div class="wp-block-woocommerce-product-collection"><!-- wp:group {"style":{"spacing":{"padding":{"bottom":"16px"},"margin":{"top":"0","bottom":"45px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
					<div class="wp-block-group" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-top:0;margin-bottom:45px;padding-bottom:16px"><!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"style":"none","width":"0px"}}},"textColor":"heading","fontSize":"big"} -->
						<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-big-font-size" style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0">Trending Products</h4>
						<!-- /wp:heading -->

						<!-- wp:buttons {"style":{"border":{"width":"1px","color":"#4C4C4C","radius":"100px"}},"backgroundColor":"transparent"} -->
						<div class="wp-block-buttons has-border-color has-transparent-background-color has-background" style="border-color:#4C4C4C;border-width:1px;border-radius:100px"><!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"100px","width":"0px","style":"none"},"spacing":{"padding":{"left":"18px","right":"18px","top":"8px","bottom":"8px"}}},"fontSize":"normal"} -->
							<div class="wp-block-button has-custom-font-size has-normal-font-size"><a class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button" href="#" style="border-style:none;border-width:0px;border-radius:100px;padding-top:8px;padding-right:18px;padding-bottom:8px;padding-left:18px">See All</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->

					<!-- wp:woocommerce/product-template -->
					<!-- wp:group {"className":"is-style-grocefycart-boxshadow-hover","style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","layout":{"type":"constrained","contentSize":"300px"}} -->
					<div class="wp-block-group is-style-grocefycart-boxshadow-hover has-border-color has-heading-color has-text-color has-link-color" style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0;margin-bottom:0;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px"><!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","isDescendentOfQueryLoop":true,"width":"","height":"150px","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}}} /-->

						<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0","top":"24px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

						<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"normal","style":{"elements":{"link":{"color":{"text":"#fd8f14"}}},"color":{"text":"#fd8f14"},"spacing":{"margin":{"top":"15px"}}}} /-->

						<!-- wp:group {"align":"wide","style":{"spacing":{"margin":{"top":"24px","bottom":"0"},"padding":{"top":"24px"},"blockGap":"15px"},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
						<div class="wp-block-group alignwide" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;margin-top:24px;margin-bottom:0;padding-top:24px"><!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"right":"0","left":"0","top":"0","bottom":"0"}},"typography":{"fontSize":"14px","lineHeight":"1.2"}}} /-->

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

	<!-- wp:group {"style":{"spacing":{"margin":{"top":"40px","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group" style="margin-top:40px;margin-bottom:0"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"30px"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"33%"} -->
			<div class="wp-block-column" style="flex-basis:33%"><!-- wp:image {"id":549,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
				<figure class="wp-block-image size-full is-resized has-custom-border"><img src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group.jpg" alt="" class="wp-image-549" style="border-radius:10px;width:auto;height:250px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33%"} -->
			<div class="wp-block-column" style="flex-basis:33%"><!-- wp:image {"id":552,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
				<figure class="wp-block-image size-full is-resized has-custom-border"><img src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-1.jpg" alt="" class="wp-image-552" style="border-radius:10px;width:auto;height:250px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":"33%"} -->
			<div class="wp-block-column" style="flex-basis:33%"><!-- wp:image {"id":553,"width":"auto","height":"250px","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"10px"}}} -->
				<figure class="wp-block-image size-full is-resized has-custom-border"><img src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-2-1.jpg" alt="" class="wp-image-553" style="border-radius:10px;width:auto;height:250px" /></figure>
				<!-- /wp:image -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->