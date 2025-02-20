<?php
/**
 * Title: Product Cover Grid
 * Slug: grocefycart/cover-grid
 * Categories:grocefycart-template
 */

?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"40px","bottom":"40px","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:40px;padding-right:var(--wp--preset--spacing--40);padding-bottom:40px;padding-left:var(--wp--preset--spacing--40)"><!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}}}} -->
	<div class="wp-block-columns" style="margin-top:0;margin-bottom:0"><!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"34px","right":"34px"},"blockGap":"30px"},"border":{"width":"1px","color":"#022E1C1A","radius":"10px"}},"textColor":"heading","layout":{"type":"constrained"}} -->
			<div class="wp-block-group has-border-color has-heading-color has-text-color has-link-color" style="border-color:#022E1C1A;border-width:1px;border-radius:10px;padding-top:20px;padding-right:34px;padding-bottom:20px;padding-left:34px"><!-- wp:heading {"style":{"spacing":{"padding":{"bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"typography":{"fontStyle":"normal","fontWeight":"600"},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"},"top":[],"right":[],"left":[]}},"textColor":"heading","fontSize":"medium"} -->
				<h2 class="wp-block-heading has-heading-color has-text-color has-link-color has-medium-font-size" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;padding-bottom:10px;font-style:normal;font-weight:600">Top Categories</h2>
				<!-- /wp:heading -->

				<!-- wp:categories {"taxonomy":"product_cat","showPostCounts":true,"className":"is-style-grocefycart-categories-flex-style","style":{"spacing":{"padding":{"right":"0","left":"0","top":"0","bottom":"0"}}},"fontSize":"small-plus","fontFamily":"inter"} /-->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"51%"} -->
		<div class="wp-block-column" style="flex-basis:51%"><!-- wp:query {"queryId":0,"query":{"perPage":1,"pages":0,"offset":0,"postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
			<div class="wp-block-query"><!-- wp:post-template -->
				<!-- wp:cover {"url":"http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-2.jpg","id":233,"dimRatio":0,"customOverlayColor":"#efc342","isUserOverlayColor":false,"minHeight":500,"contentPosition":"center left","isDark":false,"style":{"border":{"radius":"10px"},"spacing":{"padding":{"right":"var:preset|spacing|40","left":"55px","top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","contentSize":"420px"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-center-left" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:55px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#efc342"></span><img class="wp-block-cover__image-background wp-image-233" alt="" src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-2.jpg" data-object-fit="cover" />
					<div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"420px","justifyContent":"left"}} -->
						<div class="wp-block-group"><!-- wp:post-terms {"term":"product_cat","className":"is-style-categories-background-with-round","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

							<!-- wp:post-title {"level":1,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"16px","bottom":"16px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600"}},"textColor":"heading","fontSize":"large-plus","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

							<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"primary","fontFamily":"inter","fontSize":"medium","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->

							<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"12px","bottom":"12px","left":"24px","right":"24px"},"margin":{"top":"34px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"light","fontSize":"small-plus"} /-->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:cover -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"20px"}}} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":"1","postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
			<div class="wp-block-query"><!-- wp:post-template -->
				<!-- wp:cover {"url":"http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-4-1.jpg","id":255,"dimRatio":0,"customOverlayColor":"#c4d3e3","isUserOverlayColor":false,"minHeight":240,"contentPosition":"center left","isDark":false,"style":{"spacing":{"padding":{"right":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"170px"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-center-left" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-right:20px;padding-left:20px;min-height:240px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c4d3e3"></span><img class="wp-block-cover__image-background wp-image-255" alt="" src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-4-1.jpg" data-object-fit="cover" />
					<div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"170px","justifyContent":"left"}} -->
						<div class="wp-block-group"><!-- wp:post-terms {"term":"product_cat","className":"is-style-categories-background-with-round","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

							<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

							<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"primary","fontFamily":"inter","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"10px"}}} /-->

							<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"14px","right":"14px"},"margin":{"top":"12px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"light","fontSize":"x-small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:cover -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->

			<!-- wp:query {"queryId":1,"query":{"perPage":1,"pages":0,"offset":"2","postType":"product","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[],"format":[]}} -->
			<div class="wp-block-query"><!-- wp:post-template -->
				<!-- wp:cover {"url":"http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-6-1-1.jpg","id":272,"dimRatio":0,"customOverlayColor":"#6fc1cd","isUserOverlayColor":false,"minHeight":240,"contentPosition":"center left","isDark":false,"style":{"spacing":{"padding":{"right":"20px","left":"20px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"170px"}} -->
				<div class="wp-block-cover is-light has-custom-content-position is-position-center-left" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-right:20px;padding-left:20px;min-height:240px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#6fc1cd"></span><img class="wp-block-cover__image-background wp-image-272" alt="" src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-6-1-1.jpg" data-object-fit="cover" />
					<div class="wp-block-cover__inner-container"><!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","contentSize":"170px","justifyContent":"left"}} -->
						<div class="wp-block-group"><!-- wp:post-terms {"term":"product_cat","className":"is-style-categories-background-with-round","style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"textTransform":"uppercase"}},"textColor":"background","fontSize":"x-small"} /-->

							<!-- wp:post-title {"level":5,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"},":hover":{"color":{"text":"var:preset|color|primary"}}}},"spacing":{"margin":{"top":"10px","bottom":"10px"}},"typography":{"lineHeight":"1.2","fontStyle":"normal","fontWeight":"600","fontSize":"18px"}},"textColor":"heading","__woocommerceNamespace":"woocommerce/product-collection/product-title"} /-->

							<!-- wp:woocommerce/product-price {"isDescendentOfQueryLoop":true,"textColor":"primary","fontFamily":"inter","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"fontStyle":"normal","fontWeight":"700","fontSize":"10px"}}} /-->

							<!-- wp:read-more {"content":"Shop Now","style":{"spacing":{"padding":{"top":"8px","bottom":"8px","left":"14px","right":"14px"},"margin":{"top":"12px"}},"border":{"radius":"100px"},"typography":{"fontStyle":"normal","fontWeight":"500"}},"backgroundColor":"light","fontSize":"x-small"} /-->
						</div>
						<!-- /wp:group -->
					</div>
				</div>
				<!-- /wp:cover -->
				<!-- /wp:post-template -->
			</div>
			<!-- /wp:query -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->

	<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"20px","left":"20px"},"margin":{"top":"40px","bottom":"0"}}}} -->
	<div class="wp-block-columns" style="margin-top:40px;margin-bottom:0"><!-- wp:column {"width":"25%"} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:group {"style":{"border":{"width":"1px","color":"#022E1C1A","radius":"10px"},"spacing":{"padding":{"top":"20px","bottom":"20px","left":"34px","right":"34px"},"blockGap":"0"},"dimensions":{"minHeight":"100%"}},"layout":{"type":"flex","orientation":"vertical","verticalAlignment":"center","justifyContent":"stretch"}} -->
			<div class="wp-block-group has-border-color" style="border-color:#022E1C1A;border-width:1px;border-radius:10px;min-height:100%;padding-top:20px;padding-right:34px;padding-bottom:20px;padding-left:34px"><!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}},"border":{"bottom":{"color":"var:preset|color|primary","width":"1px"}},"spacing":{"padding":{"bottom":"10px"},"margin":{"bottom":"30px"}}},"textColor":"heading"} -->
				<h5 class="wp-block-heading has-heading-color has-text-color has-link-color" style="border-bottom-color:var(--wp--preset--color--primary);border-bottom-width:1px;margin-bottom:30px;padding-bottom:10px">Top Categories</h5>
				<!-- /wp:heading -->

				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px;font-style:normal;font-weight:500"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading","fontSize":"small-plus"} -->
					<p class="has-heading-color has-text-color has-link-color has-small-plus-font-size">Fruits &amp; Vegetable</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color has-link-color">(9)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
					<p class="has-heading-color has-text-color has-link-color">Pet Foods</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color has-link-color">(4)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
					<p class="has-heading-color has-text-color has-link-color">Frozen Seafoods</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color has-link-color">(6)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
					<p class="has-heading-color has-text-color has-link-color">Milk and Diaries</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color has-link-color">(5)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
					<p class="has-heading-color has-text-color has-link-color">Wines &amp; Drinks</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color has-link-color">(8)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"15px"}},"border":{"bottom":{"color":"var:preset|color|border","width":"1px"}}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group has-small-plus-font-size" style="border-bottom-color:var(--wp--preset--color--border);border-bottom-width:1px;margin-top:0;margin-bottom:15px;padding-bottom:15px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
					<p class="has-heading-color has-text-color has-link-color">Coffee &amp; Tea</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color has-link-color">(10)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->

				<!-- wp:group {"style":{"spacing":{"padding":{"bottom":"15px"},"margin":{"top":"0","bottom":"0px"}},"border":{"top":{"style":"none","width":"0px"},"right":{"style":"none","width":"0px"},"bottom":{"color":"var:preset|color|border","width":"0px","style":"none"},"left":{"style":"none","width":"0px"}}},"fontSize":"small-plus","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
				<div class="wp-block-group has-small-plus-font-size" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-bottom-color:var(--wp--preset--color--border);border-bottom-style:none;border-bottom-width:0px;border-left-style:none;border-left-width:0px;margin-top:0;margin-bottom:0px;padding-bottom:15px"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading"}}}},"textColor":"heading"} -->
					<p class="has-heading-color has-text-color has-link-color">Food Cupboard</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
					<p class="has-primary-color has-text-color has-link-color">(3)</p>
					<!-- /wp:paragraph -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"50%"} -->
		<div class="wp-block-column" style="flex-basis:50%"><!-- wp:cover {"url":"http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-2.jpg","id":233,"dimRatio":0,"customOverlayColor":"#efc342","isUserOverlayColor":false,"minHeight":500,"contentPosition":"center left","isDark":false,"style":{"spacing":{"padding":{"right":"55px","left":"55px"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"421px"}} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-center-left" style="border-radius:10px;padding-right:55px;padding-left:55px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#efc342"></span><img class="wp-block-cover__image-background wp-image-233" alt="" src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-2.jpg" data-object-fit="cover" />
				<div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"420px"}} -->
					<div class="wp-block-group"><!-- wp:buttons -->
						<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"Terniary","className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"100px"},"typography":{"textTransform":"uppercase"}},"fontSize":"x-small"} -->
							<div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor has-x-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-terniary-background-color has-background wp-element-button" style="border-radius:100px">Juicy</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->

						<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"16px","bottom":"16px","left":"0","right":"0"}},"typography":{"lineHeight":"1.2"}},"fontSize":"large-plus"} -->
						<h1 class="wp-block-heading has-large-plus-font-size" style="margin-top:16px;margin-right:0;margin-bottom:16px;margin-left:0;line-height:1.2">Healthy Vegetable Drinks</h1>
						<!-- /wp:heading -->

						<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary"} -->
						<h4 class="wp-block-heading has-primary-color has-text-color has-link-color" style="text-transform:uppercase">From $1.99-$2.99</h4>
						<!-- /wp:heading -->

						<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"34px","bottom":"0"},"blockGap":{"top":"0"}}}} -->
						<div class="wp-block-buttons" style="margin-top:34px;margin-bottom:0"><!-- wp:button {"backgroundColor":"light","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"100px"},"spacing":{"padding":{"left":"28px","right":"28px","top":"12px","bottom":"12px"}}},"fontSize":"small-plus"} -->
							<div class="wp-block-button has-custom-font-size has-small-plus-font-size"><a class="wp-block-button__link has-primary-color has-light-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;padding-top:12px;padding-right:28px;padding-bottom:12px;padding-left:28px">Shop Now</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->

		<!-- wp:column {"width":"25%","style":{"spacing":{"blockGap":"20px"}}} -->
		<div class="wp-block-column" style="flex-basis:25%"><!-- wp:cover {"url":"http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-4-1.jpg","id":255,"dimRatio":0,"customOverlayColor":"#c4d3e3","isUserOverlayColor":false,"minHeight":240,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"25px","left":"25px","top":"25px","bottom":"25px"},"margin":{"top":"0","bottom":"0"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"170px"}} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="border-radius:10px;margin-top:0;margin-bottom:0;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px;min-height:240px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#c4d3e3"></span><img class="wp-block-cover__image-background wp-image-255" alt="" src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-4-1.jpg" data-object-fit="cover" />
				<div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"170px"}} -->
					<div class="wp-block-group"><!-- wp:buttons -->
						<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"Terniary","className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"100px"},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"left":"12px","right":"12px","top":"5px","bottom":"5px"}}},"fontSize":"x-small"} -->
							<div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor has-x-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-terniary-background-color has-background wp-element-button" style="border-radius:100px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px">Juicy</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->

						<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"10px","bottom":"10px","left":"0","right":"0"}},"typography":{"lineHeight":"1.2","fontSize":"18px"}}} -->
						<h1 class="wp-block-heading" style="margin-top:10px;margin-right:0;margin-bottom:10px;margin-left:0;font-size:18px;line-height:1.2">Healthy Vegetable Drinks</h1>
						<!-- /wp:heading -->

						<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
						<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase">From $1.99-$2.99</h4>
						<!-- /wp:heading -->

						<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"13px","bottom":"0"},"blockGap":{"top":"0"}}}} -->
						<div class="wp-block-buttons" style="margin-top:13px;margin-bottom:0"><!-- wp:button {"backgroundColor":"light","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"100px"},"spacing":{"padding":{"left":"14px","right":"14px","top":"8px","bottom":"8px"}}},"fontSize":"small-plus"} -->
							<div class="wp-block-button has-custom-font-size has-small-plus-font-size"><a class="wp-block-button__link has-primary-color has-light-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px">Shop Now</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->

			<!-- wp:cover {"url":"http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-6-1.jpg","id":254,"dimRatio":0,"customOverlayColor":"#6fc1cd","isUserOverlayColor":false,"minHeight":240,"contentPosition":"top left","isDark":false,"style":{"spacing":{"padding":{"right":"25px","left":"25px","top":"25px","bottom":"25px"}},"border":{"radius":"10px"}},"layout":{"type":"constrained","contentSize":"170px"}} -->
			<div class="wp-block-cover is-light has-custom-content-position is-position-top-left" style="border-radius:10px;padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px;min-height:240px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim" style="background-color:#6fc1cd"></span><img class="wp-block-cover__image-background wp-image-254" alt="" src="http://localhost/wordpress/grocefy-cart/wp-content/uploads/sites/5/2025/02/Mask-group-6-1.jpg" data-object-fit="cover" />
				<div class="wp-block-cover__inner-container"><!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"170px"}} -->
					<div class="wp-block-group"><!-- wp:buttons -->
						<div class="wp-block-buttons"><!-- wp:button {"backgroundColor":"Terniary","className":"is-style-button-hover-primary-bgcolor","style":{"border":{"radius":"100px"},"typography":{"textTransform":"uppercase"},"spacing":{"padding":{"left":"12px","right":"12px","top":"5px","bottom":"5px"}}},"fontSize":"x-small"} -->
							<div class="wp-block-button has-custom-font-size is-style-button-hover-primary-bgcolor has-x-small-font-size" style="text-transform:uppercase"><a class="wp-block-button__link has-terniary-background-color has-background wp-element-button" style="border-radius:100px;padding-top:5px;padding-right:12px;padding-bottom:5px;padding-left:12px">Juicy</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->

						<!-- wp:heading {"level":1,"style":{"spacing":{"margin":{"top":"10px","bottom":"10px","left":"0","right":"0"}},"typography":{"lineHeight":"1.2","fontSize":"18px"}}} -->
						<h1 class="wp-block-heading" style="margin-top:10px;margin-right:0;margin-bottom:10px;margin-left:0;font-size:18px;line-height:1.2">Healthy Vegetable Drinks</h1>
						<!-- /wp:heading -->

						<!-- wp:heading {"level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"typography":{"textTransform":"uppercase"}},"textColor":"primary","fontSize":"x-small"} -->
						<h4 class="wp-block-heading has-primary-color has-text-color has-link-color has-x-small-font-size" style="text-transform:uppercase">From $1.99-$2.99</h4>
						<!-- /wp:heading -->

						<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"15px","bottom":"0"},"blockGap":{"top":"0"}}}} -->
						<div class="wp-block-buttons" style="margin-top:15px;margin-bottom:0"><!-- wp:button {"backgroundColor":"light","textColor":"primary","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"border":{"radius":"100px"},"spacing":{"padding":{"left":"14px","right":"14px","top":"8px","bottom":"8px"}}},"fontSize":"small-plus"} -->
							<div class="wp-block-button has-custom-font-size has-small-plus-font-size"><a class="wp-block-button__link has-primary-color has-light-background-color has-text-color has-background has-link-color wp-element-button" style="border-radius:100px;padding-top:8px;padding-right:14px;padding-bottom:8px;padding-left:14px">Shop Now</a></div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:group -->
				</div>
			</div>
			<!-- /wp:cover -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</div>
<!-- /wp:group -->