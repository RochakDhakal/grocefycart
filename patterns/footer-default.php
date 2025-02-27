<?php
/**
 * Title: Footer Default
 * Slug: grocefycart/footer-default
 * Categories: grocefycart-template
 */

	$grocefycart_footer_url = trailingslashit( get_template_directory_uri() );
	$grocefycart_footer_img = array(
		$grocefycart_footer_url . '/assets/images/call.png',
		$grocefycart_footer_url . '/assets/images/pay.png',
	)
	?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"background-alt","layout":{"type":"constrained","contentSize":"100%"}} -->
<div class="wp-block-group has-background-alt-background-color has-background"
	style="padding-top:0;padding-right:var(--wp--preset--spacing--40);padding-bottom:0;padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"90px","bottom":"165px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group" style="padding-top:90px;padding-bottom:165px">
		<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"95px"}}}} -->
		<div class="wp-block-columns"><!-- wp:column {"width":"28%"} -->
			<div class="wp-block-column" style="flex-basis:28%"><!-- wp:group {"layout":{"type":"constrained"}} -->
				<div class="wp-block-group"><!-- wp:site-logo {"width":250} /-->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foreground","fontSize":"normal"} -->
					<p class="has-foreground-color has-text-color has-link-color has-normal-font-size"
						style="font-style:normal;font-weight:500">
						<?php
						esc_html_e(
							'But I must explain to you how all this mistaken idea
						of denouncing pleasure and praising pain was born and I will give you a complete account of the
						system',
							'grocefycart'
						)
						?>
						</p>
					<!-- /wp:paragraph -->

					<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"normal"} -->
					<p class="has-background-color has-text-color has-link-color has-normal-font-size"
						style="font-style:normal;font-weight:600"><?php esc_html_e( '2345 Beach,Rd Metrocity USA, HWY 1235', 'grocefycart' ); ?></p>
					<!-- /wp:paragraph -->

					<!-- wp:social-links {"iconColor":"light","iconColorValue":"#F9F9F9","customIconBackgroundColor":"#ffffff1a","iconBackgroundColorValue":"#ffffff1a","className":"is-style-default"} -->
					<ul class="wp-block-social-links has-icon-color has-icon-background-color is-style-default">
						<!-- wp:social-link {"url":"#","service":"facebook"} /-->

						<!-- wp:social-link {"url":"#","service":"x"} /-->

						<!-- wp:social-link {"url":"#","service":"instagram"} /-->

						<!-- wp:social-link {"url":"#","service":"linkedin"} /-->
					</ul>
					<!-- /wp:social-links -->
				</div>
				<!-- /wp:group -->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"width":""} -->
			<div class="wp-block-column">
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"30px","left":"35px"}}}} -->
				<div class="wp-block-columns"><!-- wp:column {"width":"16%"} -->
					<div class="wp-block-column" style="flex-basis:16%">
						<!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"big"} -->
							<h5 class="wp-block-heading has-background-color has-text-color has-link-color has-big-font-size"
								style="font-style:normal;font-weight:600"><?php esc_html_e( 'Grocemart', 'grocefycart' ); ?></h5>
							<!-- /wp:heading -->

							<!-- wp:list {"style":{"spacing":{"padding":{"right":"1em","left":"1em"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foreground","fontSize":"normal"} -->
							<ul style="padding-right:1em;padding-left:1em;font-style:normal;font-weight:500"
								class="wp-block-list has-foreground-color has-text-color has-link-color has-normal-font-size">
								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'About Us', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'Shop', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'Vendors', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"normal"} -->
								<li class="has-foreground-color has-text-color has-link-color has-normal-font-size"><?php esc_html_e( 'Contact Us', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->
							</ul>
							<!-- /wp:list -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"16%"} -->
					<div class="wp-block-column" style="flex-basis:16%">
						<!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"big"} -->
							<h5 class="wp-block-heading has-background-color has-text-color has-link-color has-big-font-size"
								style="font-style:normal;font-weight:600"><?php esc_html_e( 'Quick Links', 'grocefycart' ); ?></h5>
							<!-- /wp:heading -->

							<!-- wp:list {"style":{"spacing":{"padding":{"right":"1em","left":"1em"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foreground","fontSize":"normal"} -->
							<ul style="padding-right:1em;padding-left:1em;font-style:normal;font-weight:500"
								class="wp-block-list has-foreground-color has-text-color has-link-color has-normal-font-size">
								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'About Us', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'Shop', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'Vendors', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"normal"} -->
								<li class="has-foreground-color has-text-color has-link-color has-normal-font-size">
								<?php esc_html_e( 'Contact Us', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->
							</ul>
							<!-- /wp:list -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":"25%"} -->
					<div class="wp-block-column" style="flex-basis:25%">
						<!-- wp:group {"layout":{"type":"constrained"}} -->
						<div class="wp-block-group">
							<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"big"} -->
							<h5 class="wp-block-heading has-background-color has-text-color has-link-color has-big-font-size"
								style="font-style:normal;font-weight:600"><?php esc_html_e( 'Company', 'grocefycart' ); ?></h5>
							<!-- /wp:heading -->

							<!-- wp:list {"style":{"spacing":{"padding":{"right":"1em","left":"1em"}},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}},"typography":{"fontStyle":"normal","fontWeight":"500"}},"textColor":"foreground","fontSize":"normal"} -->
							<ul style="padding-right:1em;padding-left:1em;font-style:normal;font-weight:500"
								class="wp-block-list has-foreground-color has-text-color has-link-color has-normal-font-size">
								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'Terms & Conditions', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'Sponsers', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'Privacy Policy', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'Return Policy', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'Executive', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->

								<!-- wp:list-item {"style":{"spacing":{"margin":{"bottom":"5px"}}}} -->
								<li style="margin-bottom:5px"><?php esc_html_e( 'Partners', 'grocefycart' ); ?></li>
								<!-- /wp:list-item -->
							</ul>
							<!-- /wp:list -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->

					<!-- wp:column {"width":""} -->
					<div class="wp-block-column">
						<!-- wp:group {"className":"is-style-grocefycart-overflow-hidden","layout":{"type":"constrained","contentSize":"330px","justifyContent":"left"}} -->
						<div class="wp-block-group is-style-grocefycart-overflow-hidden">
							<!-- wp:heading {"level":5,"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"background","fontSize":"big"} -->
							<h5 class="wp-block-heading has-background-color has-text-color has-link-color has-big-font-size"
								style="font-style:normal;font-weight:600"><?php esc_html_e( 'Newsletter Sign-up', 'grocefycart' ); ?></h5>
							<!-- /wp:heading -->

							<!-- wp:contact-form-7/contact-form-selector {"id":1577,"hash":"8ff56a9","title":"Footer Contact Form","className":"grocefycart-contact-form-1"} -->
							<div class="wp-block-contact-form-7-contact-form-selector grocefycart-contact-form-1">
								[contact-form-7 id="8ff56a9" title="Footer Contact Form"]</div>
							<!-- /wp:contact-form-7/contact-form-selector -->

							<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"15px","right":"15px"},"blockGap":"10px","margin":{"top":"65px"}},"border":{"color":"#ffffff4d","width":"1px"}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"center"}} -->
							<div class="wp-block-group has-border-color"
								style="border-color:#ffffff4d;border-width:1px;margin-top:65px;padding-top:10px;padding-right:15px;padding-bottom:10px;padding-left:15px">
								<!-- wp:image {"id":1563,"width":"34px","aspectRatio":"1","scale":"cover","sizeSlug":"full","linkDestination":"none"} -->
								<figure class="wp-block-image size-full is-resized"><img
										src="<?php echo esc_url( $grocefycart_footer_img[0] ); ?>"
										alt="" class="wp-image-1563"
										style="aspect-ratio:1;object-fit:cover;width:34px" /></figure>
								<!-- /wp:image -->

								<!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|background"}}},"spacing":{"blockGap":"0"}},"textColor":"background","layout":{"type":"constrained"}} -->
								<div class="wp-block-group has-background-color has-text-color has-link-color">
									<!-- wp:paragraph {"fontSize":"x-small"} -->
									<p class="has-x-small-font-size"><?php esc_html_e( 'Hotline Number', 'grocefycart' ); ?></p>
									<!-- /wp:paragraph -->

									<!-- wp:paragraph {"style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"fontSize":"normal"} -->
									<p class="has-normal-font-size" style="font-style:normal;font-weight:600"><?php esc_html_e( '+1 (000)012-3456', 'grocefycart' ); ?></p>
									<!-- /wp:paragraph -->
								</div>
								<!-- /wp:group -->
							</div>
							<!-- /wp:group -->
						</div>
						<!-- /wp:group -->
					</div>
					<!-- /wp:column -->
				</div>
				<!-- /wp:columns -->
			</div>
			<!-- /wp:column -->
		</div>
		<!-- /wp:columns -->
	</div>
	<!-- /wp:group -->

	<!-- wp:group {"style":{"spacing":{"padding":{"top":"24px","bottom":"24px","left":"0","right":"0"},"margin":{"top":"0","bottom":"0"}},"border":{"top":{"color":"#ffffff29","width":"1px"}}},"layout":{"type":"constrained","contentSize":"1260px"}} -->
	<div class="wp-block-group"
		style="border-top-color:#ffffff29;border-top-width:1px;margin-top:0;margin-bottom:0;padding-top:24px;padding-right:0;padding-bottom:24px;padding-left:0">
		<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
		<div class="wp-block-group" style="padding-right:0;padding-left:0">
			<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|light"}}}},"textColor":"light","fontSize":"small-plus"} -->
			<p class="has-light-color has-text-color has-link-color has-small-plus-font-size"><?php esc_html_e( 'Proudly powered by WordPress | GrocefyCart by CozyThemes.', 'grocegycart' ); ?></p>
			<!-- /wp:paragraph -->

			<!-- wp:image {"id":1516,"width":"auto","height":"25px","sizeSlug":"full","linkDestination":"none"} -->
			<figure class="wp-block-image size-full is-resized"><img
					src="<?php echo esc_url( $grocefycart_footer_img[1] ); ?>" alt=""
					class="wp-image-1516" style="width:auto;height:25px" /></figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->