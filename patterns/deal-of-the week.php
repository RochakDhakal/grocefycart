<?php
/**
 * Title: Deal Of The Week
 * Slug: grocefycart/deal-of-the-week
 * Categories:grocefycart-template
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"right":"var:preset|spacing|40","left":"var:preset|spacing|40","top":"40px","bottom":"40px"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group"
	style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"position":{"type":""}},"layout":{"type":"constrained","contentSize":"100%"}} -->
	<div class="wp-block-group">
		<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"22px"},"margin":{"top":"0","bottom":"0px"}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
		<div class="wp-block-group"
			style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-top:0;margin-bottom:0px;padding-bottom:22px">
			<!-- wp:heading {"textAlign":"center","level":4,"style":{"spacing":{"margin":{"bottom":"0"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"style":"none","width":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"big"} -->
			<h4 class="wp-block-heading has-text-align-center has-heading-color has-text-color has-link-color has-big-font-size"
				style="border-bottom-style:none;border-bottom-width:0px;margin-bottom:0;font-style:normal;font-weight:600">
				Deal Of The Week</h4>
			<!-- /wp:heading -->

			<!-- wp:buttons {"style":{"border":{"width":"1px","color":"#4C4C4C","radius":"100px"}},"backgroundColor":"transparent"} -->
			<div class="wp-block-buttons has-border-color has-transparent-background-color has-background"
				style="border-color:#4C4C4C;border-width:1px;border-radius:100px">
				<!-- wp:button {"backgroundColor":"transparent","textColor":"foreground","style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"border":{"radius":"100px","width":"0px","style":"none"},"spacing":{"padding":{"left":"18px","right":"18px","top":"8px","bottom":"8px"}}},"fontSize":"normal"} -->
				<div class="wp-block-button has-custom-font-size has-normal-font-size"><a
						class="wp-block-button__link has-foreground-color has-transparent-background-color has-text-color has-background has-link-color wp-element-button"
						href="#"
						style="border-style:none;border-width:0px;border-radius:100px;padding-top:8px;padding-right:18px;padding-bottom:8px;padding-left:18px">See
						All</a></div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:group -->

		<!-- wp:columns {"style":{"spacing":{"margin":{"top":"45px"}}}} -->
		<div class="wp-block-columns" style="margin-top:45px"><!-- wp:column {"width":"33%"} -->
			<div class="wp-block-column" style="flex-basis:33%">
				<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
				<div class="wp-block-group">
					<!-- wp:woocommerce/product-collection {"queryId":15,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"asc","orderBy":"post__in","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":false,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":["60"],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"list","columns":2,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/hand-picked","hideControls":["inherit","hand-picked","filterable","order"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
					<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
						<!-- wp:group {"style":{"spacing":{"padding":{"right":"25px","left":"25px","top":"34px","bottom":"34px"},"margin":{"top":"0","bottom":"0"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
						<div class="wp-block-group has-border-color"
							style="border-color:#022E1C1A;border-width:1px;border-radius:10px;margin-top:0;margin-bottom:0;padding-top:34px;padding-right:25px;padding-bottom:34px;padding-left:25px">
							<!-- wp:woocommerce/product-image {"saleBadgeAlign":"left","imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100%","height":"235px","style":{"spacing":{"margin":{"bottom":"24px"}}}} /-->

							<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"100%","justifyContent":"left"}} -->
							<div class="wp-block-group" style="margin-top:0;margin-bottom:0">
								<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.75rem","top":"0"}},"typography":{"fontStyle":"normal","fontWeight":"600"},"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}}},"textColor":"heading","fontSize":"medium","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

								<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"style":{"elements":{"link":{"color":{"text":"#fd8f14"}}},"color":{"text":"#fd8f14"},"spacing":{"margin":{"top":"14px","bottom":"14px"}}}} /-->

								<!-- wp:post-excerpt {"excerptLength":20,"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"spacing":{"margin":{"bottom":"14px"}}},"textColor":"foreground","fontSize":"small-plus"} /-->

								<!-- wp:group {"style":{"spacing":{"blockGap":"20px","padding":{"top":"24px"},"margin":{"top":"24px"}},"border":{"top":{"color":"#2424241a","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
								<div class="wp-block-group"
									style="border-top-color:#2424241a;border-top-width:1px;margin-top:24px;padding-top:24px">
									<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"center","textColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"500","fontSize":"14px"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /-->

									<!-- wp:woocommerce/product-button {"textAlign":"center","isDescendentOfQueryLoop":true,"fontSize":"small","style":{"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"}}} /-->
								</div>
								<!-- /wp:group -->
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

			<!-- wp:column {"width":""} -->
			<div class="wp-block-column">
				<!-- wp:woocommerce/product-collection {"queryId":16,"query":{"perPage":6,"pages":1,"offset":0,"postType":"product","order":"asc","orderBy":"title","search":"","exclude":[],"inherit":false,"taxQuery":[],"isProductCollectionBlock":true,"featured":false,"woocommerceOnSale":true,"woocommerceStockStatus":["instock","outofstock","onbackorder"],"woocommerceAttributes":[],"woocommerceHandPickedProducts":[],"filterable":false,"relatedBy":{"categories":true,"tags":true}},"tagName":"div","displayLayout":{"type":"flex","columns":3,"shrinkColumns":true},"dimensions":{"widthType":"fill"},"collection":"woocommerce/product-collection/on-sale","hideControls":["inherit","on-sale","filterable"],"queryContextIncludes":["collection"],"__privatePreviewState":{"isPreview":false,"previewMessage":"Actual products will vary depending on the page being viewed."}} -->
				<div class="wp-block-woocommerce-product-collection"><!-- wp:woocommerce/product-template -->
					<!-- wp:group {"style":{"spacing":{"padding":{"right":"20px","left":"20px","top":"24px","bottom":"24px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained"}} -->
					<div class="wp-block-group has-border-color"
						style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
						<!-- wp:woocommerce/product-image {"imageSizing":"thumbnail","isDescendentOfQueryLoop":true,"width":"100%","height":"130px"} /-->

						<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textAlign":"left","textColor":"primary","fontSize":"normal","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}}} /-->

						<!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"spacing":{"margin":{"bottom":"14px","top":"14px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"normal","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

						<!-- wp:woocommerce/product-rating {"isDescendentOfQueryLoop":true,"fontSize":"normal","style":{"color":{"text":"#fd8f14"},"elements":{"link":{"color":{"text":"#fd8f14"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->
					</div>
					<!-- /wp:group -->
					<!-- /wp:woocommerce/product-template -->
				</div>
				<!-- /wp:woocommerce/product-collection -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->

		<!-- wp:columns {"style":{"spacing":{"margin":{"top":"45px"},"blockGap":{"top":"30px","left":"30px"}}}} -->
		<div class="wp-block-columns" style="margin-top:45px"><!-- wp:column {"width":"33%"} -->
			<div class="wp-block-column" style="flex-basis:33%">
				<!-- wp:group {"style":{"spacing":{"padding":{"top":"25px","bottom":"25px","left":"25px","right":"25px"}},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
				<div class="wp-block-group has-border-color"
					style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px">
					<!-- wp:image {"id":61,"width":"auto","height":"240px","aspectRatio":"4/3","scale":"cover","sizeSlug":"full","linkDestination":"none","align":"center"} -->
					<figure class="wp-block-image aligncenter size-full is-resized"><img
							src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/product-wine.jpg"
							alt="" class="wp-image-61"
							style="aspect-ratio:4/3;object-fit:cover;width:auto;height:240px" /></figure>
					<!-- /wp:image -->

					<!-- wp:heading {"level":6,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"medium"} -->
					<h6 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size"
						style="font-style:normal;font-weight:600">Red &amp; White Wine Collection</h6>
					<!-- /wp:heading -->

					<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"spacing":{"margin":{"top":"0px","bottom":"0"}}}} -->
					<figure class="wp-block-image size-full is-resized" style="margin-top:0px;margin-bottom:0"><img
							src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/star-1.png"
							alt="" class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" /></figure>
					<!-- /wp:image -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#6a6a6a"}}},"color":{"text":"#6a6a6a"},"typography":{"fontStyle":"normal","fontWeight":"300"}},"fontSize":"small-plus"} -->
					<p class="has-text-color has-link-color has-small-plus-font-size"
						style="color:#6a6a6a;font-style:normal;font-weight:300">Lorem ipsum dolor sit amet, consectetur
						adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
					<!-- /wp:paragraph -->

					<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px"}},"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":[],"bottom":[],"left":[]}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
					<div class="wp-block-group"
						style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;padding-top:24px">
						<!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus"} -->
						<h2 class="wp-block-heading has-small-plus-font-size" style="font-style:normal;font-weight:500">
							<s><mark style="background-color:rgba(0, 0, 0, 0)"
									class="has-inline-color has-foreground-color">$1299.99 </mark></s><mark
								style="background-color:rgba(0, 0, 0, 0)"
								class="has-inline-color has-primary-color">$999.99</mark></h2>
						<!-- /wp:heading -->

						<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"space-between"}} -->
						<div class="wp-block-buttons">
							<!-- wp:button {"backgroundColor":"primary","textColor":"background","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"padding":{"left":"14px","right":"14px","top":"12px","bottom":"12px"}},"border":{"radius":"100px"}},"fontSize":"x-small"} -->
							<div class="wp-block-button has-custom-font-size has-x-small-font-size"><a
									class="wp-block-button__link has-background-color has-primary-background-color has-text-color has-background has-link-color wp-element-button"
									style="border-radius:100px;padding-top:12px;padding-right:14px;padding-bottom:12px;padding-left:14px">Add
									To Cart</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":""} -->
			<div class="wp-block-column"><!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group">
					<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"15px","left":"15px"}}}} -->
					<div class="wp-block-columns"><!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
							<div class="wp-block-group has-border-color"
								style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
								<!-- wp:image {"id":74,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
								<figure class="wp-block-image aligncenter size-full is-resized"
									style="margin-bottom:24px"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/product-papaya.jpg"
										alt="" class="wp-image-74" style="width:auto;height:110px" /></figure>
								<!-- /wp:image -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
								<h2
									class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
									$29.99</h2>
								<!-- /wp:heading -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
								<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
									style="margin-top:14px;margin-bottom:14px">Fresh Papaya</h2>
								<!-- /wp:heading -->

								<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
								<figure class="wp-block-image size-full is-resized"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/star-1.png"
										alt="" class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
								</figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:column -->

						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
							<div class="wp-block-group has-border-color"
								style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
								<!-- wp:image {"id":76,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
								<figure class="wp-block-image aligncenter size-full is-resized"
									style="margin-bottom:24px"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/product-promogranate.jpg"
										alt="" class="wp-image-76" style="width:auto;height:110px" /></figure>
								<!-- /wp:image -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
								<h2
									class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
									$39.99</h2>
								<!-- /wp:heading -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
								<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
									style="margin-top:14px;margin-bottom:14px">Fresh Pomegranate</h2>
								<!-- /wp:heading -->

								<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
								<figure class="wp-block-image size-full is-resized"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/star-1.png"
										alt="" class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
								</figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:column -->

						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
							<div class="wp-block-group has-border-color"
								style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
								<!-- wp:image {"id":66,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
								<figure class="wp-block-image aligncenter size-full is-resized"
									style="margin-bottom:24px"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/product-berry-1.jpg"
										alt="" class="wp-image-66" style="width:auto;height:110px" /></figure>
								<!-- /wp:image -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
								<h2
									class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
									$29.99</h2>
								<!-- /wp:heading -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
								<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
									style="margin-top:14px;margin-bottom:14px">Fresh Strawberry</h2>
								<!-- /wp:heading -->

								<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
								<figure class="wp-block-image size-full is-resized"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/star-1.png"
										alt="" class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
								</figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:column -->
					</div>
					<!-- /wp:columns -->

					<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"15px","left":"15px"}}}} -->
					<div class="wp-block-columns"><!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
							<div class="wp-block-group has-border-color"
								style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
								<!-- wp:image {"id":70,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
								<figure class="wp-block-image aligncenter size-full is-resized"
									style="margin-bottom:24px"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/product-tagliatelle.jpg"
										alt="" class="wp-image-70" style="width:auto;height:110px" /></figure>
								<!-- /wp:image -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
								<h2
									class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
									$29.99</h2>
								<!-- /wp:heading -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
								<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
									style="margin-top:14px;margin-bottom:14px">Capellini Tagliati</h2>
								<!-- /wp:heading -->

								<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
								<figure class="wp-block-image size-full is-resized"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/star-1.png"
										alt="" class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
								</figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:column -->

						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
							<div class="wp-block-group has-border-color"
								style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
								<!-- wp:image {"id":68,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
								<figure class="wp-block-image aligncenter size-full is-resized"
									style="margin-bottom:24px"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/product-farfalle.jpg"
										alt="" class="wp-image-68" style="width:auto;height:110px" /></figure>
								<!-- /wp:image -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
								<h2
									class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
									$39.99</h2>
								<!-- /wp:heading -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
								<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
									style="margin-top:14px;margin-bottom:14px">Farfalle Pasta</h2>
								<!-- /wp:heading -->

								<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
								<figure class="wp-block-image size-full is-resized"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/star-1.png"
										alt="" class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
								</figure>
								<!-- /wp:image -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:column -->

						<!-- wp:column -->
						<div class="wp-block-column">
							<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"20px","right":"20px"},"blockGap":"0"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"layout":{"type":"constrained","contentSize":"100%"}} -->
							<div class="wp-block-group has-border-color"
								style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:24px;padding-right:20px;padding-bottom:24px;padding-left:20px">
								<!-- wp:image {"id":63,"width":"auto","height":"110px","sizeSlug":"full","linkDestination":"none","align":"center","style":{"spacing":{"margin":{"bottom":"24px"}}}} -->
								<figure class="wp-block-image aligncenter size-full is-resized"
									style="margin-bottom:24px"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/product-mix.jpg"
										alt="" class="wp-image-63" style="width:auto;height:110px" /></figure>
								<!-- /wp:image -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"normal"} -->
								<h2
									class="wp-block-heading has-primary-color has-text-color has-link-color has-normal-font-size">
									$39.99</h2>
								<!-- /wp:heading -->

								<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"spacing":{"margin":{"top":"14px","bottom":"14px"}}},"textColor":"heading","fontSize":"normal"} -->
								<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-normal-font-size"
									style="margin-top:14px;margin-bottom:14px">Mixed Fruit basket</h2>
								<!-- /wp:heading -->

								<!-- wp:image {"id":1423,"width":"80px","height":"16px","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
								<figure class="wp-block-image size-full is-resized"><img
										src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/star-1.png"
										alt="" class="wp-image-1423" style="object-fit:cover;width:80px;height:16px" />
								</figure>
								<!-- /wp:image -->
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
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->