<?php

/**
 * File for holding dashboard welcome page for theme
 */
if ( ! function_exists( 'grocefycart_is_plugin_installed' ) ) {
	function grocefycart_is_plugin_installed( $plugin_slug ) {
		$plugin_path = WP_PLUGIN_DIR . '/' . $plugin_slug;
		return file_exists( $plugin_path );
	}
}
if ( ! function_exists( 'grocefycart_is_plugin_activated' ) ) {
	function grocefycart_is_plugin_activated( $plugin_slug ) {
		return is_plugin_active( $plugin_slug );
	}
}
if ( ! function_exists( 'grocefycart_welcome_notice' ) ) :
	function grocefycart_welcome_notice() {
		if ( get_option( 'grocefycart_dismissed_custom_notice' ) ) {
			return;
		}
		global $pagenow;
		$current_screen = get_current_screen();

		if ( is_admin() ) {
			if ( $current_screen->id !== 'dashboard' && $current_screen->id !== 'themes' ) {
				return;
			}
			if ( is_network_admin() ) {
				return;
			}
			if ( ! current_user_can( 'manage_options' ) ) {
				return;
			}
			$theme = wp_get_theme();

			if ( is_child_theme() ) {
				$theme = wp_get_theme()->parent();
			}
			$grocefycart_version = $theme->get( 'Version' );

			?>
			<div class="grocefycart-admin-notice notice notice-success is-dismissible content-install-plugin theme-info-notice" id="grocefycart-dismiss-notice">
				<div class="info-content">
					<div class="notice-holder">
						<h3><?php echo __( 'Welcome to Grocefy Cart! Launch your website in minutes with over 100 pre-built sections, pre-built starter sites, and a seamless one-click demo importer for easy setup.', 'grocefycart' ); ?></h3>
						<div class="notice-text">
							<p class="cozy-blocks-text"><?php echo __( 'Please install and activate all recommended plugins to use 40+ advanced blocks, 200+ pre-built sections and starter site demos. Enhance website building and launch your site within minutes with just a few clicks! - Cozy Addons, Cozy Essential Addons, Advanced Import.', 'grocefycart' ); ?></p>

						</div>
						<a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __( 'Getting started with a single click', 'grocefycart' ); ?></a>
						<a href="<?php echo admin_url(); ?>themes.php?page=about-grocefycart" class="button admin-button info-button"><?php echo __( 'Explore Grocefy Cart', 'grocefycart' ); ?></a>

					</div>
				</div>
				<div class="theme-hero-screens">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/inc/admin/images/theme-templates-stack.png' ); ?>" />
				</div>

			</div>
			<?php
		}
	}
endif;
add_action( 'admin_notices', 'grocefycart_welcome_notice' );
function grocefycart_dismissble_notice() {
	if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( $_POST['nonce'], 'grocefycart_admin_nonce' ) ) {
		wp_send_json_error( array( 'message' => 'Nonce verification failed.' ) );
		return;
	}

	$result = update_option( 'grocefycart_dismissed_custom_notice', 1 );

	if ( $result ) {
		wp_send_json_success();
	} else {
		wp_send_json_error( array( 'message' => 'Failed to update option' ) );
	}
}
add_action( 'wp_ajax_grocefycart_dismissble_notice', 'grocefycart_dismissble_notice' );
// Hook into a custom action when the button is clicked
add_action( 'wp_ajax_grocefycart_install_and_activate_plugins', 'grocefycart_install_and_activate_plugins' );
add_action( 'wp_ajax_nopriv_grocefycart_install_and_activate_plugins', 'grocefycart_install_and_activate_plugins' );
add_action( 'wp_ajax_grocefycart_rplugin_activation', 'grocefycart_rplugin_activation' );
add_action( 'wp_ajax_nopriv_grocefycart_rplugin_activation', 'grocefycart_rplugin_activation' );

// Function to install and activate the plugins



function check_plugin_installed_status( $pugin_slug, $plugin_file ) {
	return file_exists( ABSPATH . 'wp-content/plugins/' . $pugin_slug . '/' . $plugin_file ) ? true : false;
}

/* Check if plugin is activated */


function check_plugin_active_status( $pugin_slug, $plugin_file ) {
	return is_plugin_active( $pugin_slug . '/' . $plugin_file ) ? true : false;
}

require_once ABSPATH . 'wp-admin/includes/plugin-install.php';
require_once ABSPATH . 'wp-admin/includes/file.php';
require_once ABSPATH . 'wp-admin/includes/misc.php';
require_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
function grocefycart_install_and_activate_plugins() {
	if ( ! current_user_can( 'manage_options' ) ) {
		return;
	}
	check_ajax_referer( 'grocefycart_welcome_nonce', 'nonce' );
	// Define the plugins to be installed and activated
	$recommended_plugins = array(
		array(
			'slug' => 'cozy-addons',
			'file' => 'cozy-addons.php',
			'name' => 'Cozy Addons',
		),
		array(
			'slug' => 'advanced-import',
			'file' => 'advanced-import.php',
			'name' => 'Advanced Imporrt',
		),
		array(
			'slug' => 'cozy-essential-addons',
			'file' => 'cozy-essential-addons.php',
			'name' => 'Cozy Essential Addons',
		),
		// Add more plugins here as needed
	);

	// Include the necessary WordPress functions

	// Set up a transient to store the installation progress
	set_transient( 'install_and_activate_progress', array(), MINUTE_IN_SECONDS * 10 );

	// Loop through each plugin
	foreach ( $recommended_plugins as $plugin ) {
		$plugin_slug = $plugin['slug'];
		$plugin_file = $plugin['file'];
		$plugin_name = $plugin['name'];

		// Check if the plugin is active
		if ( is_plugin_active( $plugin_slug . '/' . $plugin_file ) ) {
			update_install_and_activate_progress( $plugin_name, 'Already Active' );
			continue; // Skip to the next plugin
		}

		// Check if the plugin is installed but not active
		if ( is_grocefycart_plugin_installed( $plugin_slug . '/' . $plugin_file ) ) {
			$activate = activate_plugin( $plugin_slug . '/' . $plugin_file );
			if ( is_wp_error( $activate ) ) {
				update_install_and_activate_progress( $plugin_name, 'Error' );
				continue; // Skip to the next plugin
			}
			update_install_and_activate_progress( $plugin_name, 'Activated' );
			continue; // Skip to the next plugin
		}

		// Plugin is not installed or activated, proceed with installation
		update_install_and_activate_progress( $plugin_name, 'Installing' );

		// Fetch plugin information
		$api = plugins_api(
			'plugin_information',
			array(
				'slug'   => $plugin_slug,
				'fields' => array( 'sections' => false ),
			)
		);

		// Check if plugin information is fetched successfully
		if ( is_wp_error( $api ) ) {
			update_install_and_activate_progress( $plugin_name, 'Error' );
			continue; // Skip to the next plugin
		}

		// Set up the plugin upgrader
		$upgrader = new Plugin_Upgrader();
		$install  = $upgrader->install( $api->download_link );

		// Check if installation is successful
		if ( $install ) {
			// Activate the plugin
			$activate = activate_plugin( $plugin_slug . '/' . $plugin_file );

			// Check if activation is successful
			if ( is_wp_error( $activate ) ) {
				update_install_and_activate_progress( $plugin_name, 'Error' );
				continue; // Skip to the next plugin
			}
			update_install_and_activate_progress( $plugin_name, 'Activated' );
		} else {
			update_install_and_activate_progress( $plugin_name, 'Error' );
		}
	}

	// Delete the progress transient
	$redirect_url = admin_url( 'themes.php?page=advanced-import' );

	// Delete the progress transient
	delete_transient( 'install_and_activate_progress' );
	// Return JSON response
	wp_send_json_success( array( 'redirect_url' => $redirect_url ) );
}

// Function to check if a plugin is installed but not active
function is_grocefycart_plugin_installed( $plugin_slug ) {
	$plugins = get_plugins();
	return isset( $plugins[ $plugin_slug ] );
}

// Function to update the installation and activation progress
function update_install_and_activate_progress( $plugin_name, $status ) {
	$progress   = get_transient( 'install_and_activate_progress' );
	$progress[] = array(
		'plugin' => $plugin_name,
		'status' => $status,
	);
	set_transient( 'install_and_activate_progress', $progress, MINUTE_IN_SECONDS * 10 );
}


function grocefycart_dashboard_menu() {
	add_theme_page( esc_html__( 'About Grocefy Cart', 'grocefycart' ), esc_html__( 'About Grocefy Cart', 'grocefycart' ), 'edit_theme_options', 'about-grocefycart', 'grocefycart_theme_info_display' );
}
add_action( 'admin_menu', 'grocefycart_dashboard_menu' );
function grocefycart_theme_info_display() {

	?>
	<div class="dashboard-about-grocefycart">
		<div class="grocefycart-dashoard-hero">
			<div class="grocefycart-hero-screens">
				<div class="grocefycart-intro">
					<h1> <?php echo __( 'Welcome to the Grocefy Cart - Ultimate WordPress Theme for Your Business', 'grocefycart' ); ?></h1>
					<p><?php echo __( 'The ultimate WordPress theme you’ll ever need. Lightweight, SEO-optimized, and fully responsive, Grocefy Cart features Full Site Editing (FSE) with 100+ pre-built sections and templates for effortless website creation.', 'grocefycart' ); ?></p>
					<a href="https://cozythemes.com/grocefycart-wordpress-theme/" target="_blank" class="theme-details"><?php echo __( 'Explore More', 'grocefycart' ); ?></a>
				</div>
			</div>

			<div class="grocefycart-features-box-holder">
				<div class="grocefycart-features-box">
					<h4><?php echo __( '100+ Pre-built Sections', 'grocefycart' ); ?></h4>
					<p><?php echo __( 'Grocefy Cart provides 100+ pre-built sections, including headers, footers, hero sections, testimonials, and more. Easily customize and combine them to create a unique, professional website without coding.', 'grocefycart' ); ?></p>
				</div>
				<div class="grocefycart-features-box">
					<h4><?php echo __( 'Full Site Editing', 'grocefycart' ); ?></h4>
					<p><?php echo __( 'Grocefy Cart supports Full Site Editing, allowing you to easily customize every part of your site—headers, footers, and content—using intuitive drag-and-drop blocks. Build modern, flexible websites with no coding needed.', 'grocefycart' ); ?></p>
				</div>
				<div class="grocefycart-features-box">
					<h4><?php echo __( '100% Customizable', 'grocefycart' ); ?></h4>
					<p><?php echo __( 'Grocefy Cart is 100% customizable, giving you full control over design and layout. Adjust colors and sections to fit your brand’s style with ease, ensuring your website is truly unique and personalized.', 'grocefycart' ); ?></p>
				</div>
			</div>
		</div>
		<div class="grocefycart-dashboard">

			<ul id="grocefycart-dashboard-tabs-nav">
				<li><a href="#grocefycart-welcome"><?php echo __( 'Get Started', 'grocefycart' ); ?></a></li>
				<li><a href="#grocefycart-setup"><?php echo __( 'Setup Instruction', 'grocefycart' ); ?></a></li>
				<li><a href="#grocefycart-comparision"><?php echo __( 'FREE VS PRO', 'grocefycart' ); ?></a></li>
			</ul> <!-- END tabs-nav -->
			<div id="tabs-content">
				<div id="grocefycart-welcome" class="tab-content">

					<h3><?php echo __( 'Required Plugins', 'grocefycart' ); ?></h3>
					<p class="notice-text"><?php echo __( 'Please install and activate all recommended pluign to import the demo with "one click demo import" feature and unlock premium features!(for pro version)', 'grocefycart' ); ?></p>
					<ul class="grocefycart-required-plugin">
						<li>

							<h4><?php echo __( '1. Cozy Addons', 'grocefycart' ); ?>
								<?php
								if ( grocefycart_is_plugin_activated( 'cozy-addons/cozy-addons.php' ) ) {
									echo __( ': Plugin has been already activated!', 'grocefycart' );
								} elseif ( grocefycart_is_plugin_installed( 'cozy-addons/cozy-addons.php' ) ) {
									echo __( ': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'grocefycart' );
								} else {
									echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-addons&TB_iframe=true&width=600&height=550">' . esc_html__( 'Install and Activate', 'grocefycart' ) . '</a>';
								}
								?>
							</h4>
						</li>
						<li>

							<h4><?php echo __( '2. Cozy Essential Addons', 'grocefycart' ); ?>
								<?php
								if ( grocefycart_is_plugin_activated( 'cozy-essential-addons/cozy-essential-addons.php' ) ) {
									echo __( ': Plugin has been already activated!', 'grocefycart' );
								} elseif ( grocefycart_is_plugin_installed( 'cozy-essential-addons/cozy-essential-addons.php' ) ) {
									echo __( ': Plugin does not activated, Activate the plugin to use one click demo import and unlock premium features.', 'grocefycart' );
								} else {
									echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=cozy-essential-addons&TB_iframe=true&width=600&height=550">' . esc_html__( 'Install and Activate', 'grocefycart' ) . '</a>';
								}
								?>
							</h4>
						</li>
						<li>
							<h4><?php echo __( '3. Advanced Import - Need only to use "one click demo import" features', 'grocefycart' ); ?>
								<?php
								if ( grocefycart_is_plugin_activated( 'advanced-import/advanced-import.php' ) ) {
									echo __( ': Plugin has been already activated!', 'grocefycart' );
								} elseif ( grocefycart_is_plugin_installed( 'advanced-import/advanced-import.php' ) ) {
									echo __( ': Plugin does not activated, Activate the plugin to use one click demo import feature.', 'grocefycart' );
								} else {
									echo ': <a href="' . get_admin_url() . 'plugin-install.php?tab=plugin-information&plugin=advanced-import&TB_iframe=true&width=600&height=550">' . esc_html__( 'Install and Activate', 'grocefycart' ) . '</a>';
								}
								?>
							</h4>
						</li>
					</ul>
					<a href="#" id="install-activate-button" class="button admin-button info-button"><?php echo __( 'Getting started with a single click', 'grocefycart' ); ?></a>

					<h3 class="dash-grocefycart-patterns-header"><?php echo __( '100+ Pre-built Sections/Patterns Offered by Grocefy Cart:', 'grocefycart' ); ?></h3>
					<div class="grocefycart-features-dash">
						<div class="grocefycart-features-box">
							<h4><?php echo __( '01. Header', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart offers fully customizable header patterns with multiple layouts. Choose from various designs, adjust styles, and easily modify elements to create the perfect header that fits your brand\'s look.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/headers/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '02. Footer', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart provides fully customizable footer patterns with multiple layout options. Tailor the design, colors, and elements to create a professional and cohesive footer that complements your site\'s style.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/footers/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '03. Hero & Banner', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart offers customizable hero and banner sections with multiple layout options. Highlight key content with stunning visuals, modify text and styles, and create engaging sections that capture attention.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/hero-and-banners/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '04. About Us/Content', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart includes customizable About Us and content sections with various layouts. Share your story and values with engaging designs, adjust styles, and create compelling narratives that resonate with visitors.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/about-and-contents/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '05. Testimonials', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart features customizable testimonial sections with multiple layouts. Showcase client feedback and success stories using engaging designs, adjustable styles, and formats that build trust and credibility.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/testimonials/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '06. Team', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart offers customizable team sections with various layouts. Showcase your team members with profile photos, bios, and social media links, presenting a professional image that builds trust.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/teams/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '07.Services and Features', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart provides customizable service and feature sections. Highlight what you offer with engaging layouts, easily adjust styles, and showcase your unique value to potential clients.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/services-features/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '08. Portfolio and Gallery', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart includes customizable portfolio and gallery sections. Display your work with stunning layouts, adjust styles, and present your projects in a visually appealing way to attract clients.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/portfolio-gallery/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '09. Contact and Newsletters', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart features customizable contact and newsletter sections. Easily integrate forms and adjust designs to encourage visitors to connect with you and subscribe for updates.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/contact-and-newsletters/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '10. FAQ & Accordion Content', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart offers customizable FAQ and accordion sections. Present information clearly with adjustable layouts that allow users to easily find answers, enhancing user experience and engagement.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/faq-and-accordion-content/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '11. Call To Action', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart includes customizable call-to-action sections. Encourage user engagement with eye-catching designs and clear messaging, driving conversions and guiding visitors toward desired actions.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/call-to-action/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '12. Pricing Tables', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart features customizable pricing tables with various layouts. Clearly present your pricing options, highlight features, and make it easy for customers to choose the best plan for their needs.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/pricing-tables/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '13. Posts', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart provides customizable post sections to display your latest content. Showcase blog posts or articles with engaging layouts, adjustable styles, and easy navigation to keep visitors informed.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/posts/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '14. Profile Cards', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart includes customizable profile cards featuring profile photos, short descriptions, social media links, and essential resources like CVs and portfolios, creating an informative and engaging overview.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/profile-cards/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '15. Number/Stats Counter', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart offers customizable number and stats counter sections. Highlight key achievements and metrics with dynamic visuals, engaging visitors and presenting important information at a glance.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/number-stats/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
						<div class="grocefycart-features-box">
							<h4><?php echo __( '16. Extra Sections', 'grocefycart' ); ?></h4>
							<p><?php echo __( 'Grocefy Cart provides customizable extra sections, including job listings, Our Process Setps, event listings, product grids, and brand showcases. Tailor these sections to suit your needs, enhancing site functionality and user engagement.', 'grocefycart' ); ?></p>
							<a href="https://themedemos.cozythemes.com/grocefycart-sections/extra-section/" target="_blank" class="grocefycart-patterns-demo"><?php echo __( 'View Live Demos', 'grocefycart' ); ?></a>
						</div>
					</div>
				</div>
				<div id="grocefycart-setup" class="tab-content">
					<h3 class="grocefycart-baisc-guideline-header"><?php echo __( 'Basic Theme Setup', 'grocefycart' ); ?></h3>
					<div class="grocefycart-baisc-guideline">
						<div class="featured-box">
							<ul>
								<li><strong><?php echo __( 'Setup Header Layout:', 'grocefycart' ); ?></strong>
									<ul>
										<li> - <?php echo __( 'Go to Appearance -> Editor -> Patterns -> Template Parts -> Header:', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'click on Header > Click on Edit (Icon) -> Add or Remove Requirend block/content as your requirement.:', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'Click on save to update your layout', 'grocefycart' ); ?></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="featured-box">
							<ul>
								<li><strong><?php echo __( 'Setup Footer Layout:', 'grocefycart' ); ?></strong>
									<ul>
										<li> - <?php echo __( 'Go to Appearance -> Editor -> Patterns -> Template Parts -> Footer:', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'click on Footer > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'Click on save to update your layout', 'grocefycart' ); ?></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="featured-box">
							<ul>
								<li><strong><?php echo __( 'Setup Templates like Homepage/404/Search/Page/Single and more templates Layout:', 'grocefycart' ); ?></strong>
									<ul>
										<li> - <?php echo __( 'Go to Appearance -> Editor -> Templates:', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'click on Template(You need to edit/update) > Click on Edit (Icon) > Add or Remove Requirend block/content as your requirement.:', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'Click on save to update your layout', 'grocefycart' ); ?></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="featured-box">
							<ul>
								<li><strong><?php echo __( 'Restore/Reset Default Content layout of Template(Like: Frontpage/Blog/Archive etc.)', 'grocefycart' ); ?></strong>
									<ul>
										<li> - <?php echo __( 'Go to Appearance -> Editor -> Templates:', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'Click on Manage all Templates', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'Click on 3 Dots icon at right side of respective Template', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'Click on Clear Customization', 'grocefycart' ); ?></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="featured-box">
							<ul>
								<li><strong><?php echo __( 'Restore/Reset Default Content layout of Template Parts(Header/Footer/Sidebar)', 'grocefycart' ); ?></strong>
									<ul>
										<li> - <?php echo __( 'Go to Appearance -> Editor -> Patterns:', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'Click on Manage All Template Parts', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'Click on 3 Dots icon at right side of respective Template parts', 'grocefycart' ); ?></li>
										<li> - <?php echo __( 'Click on Clear Customization', 'grocefycart' ); ?></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div id="grocefycart-comparision" class="tab-content">
					<div class="featured-list">
						<div class="half-col free-features">
							<h3><?php echo __( 'Grocefy Cart Features (Free)', 'grocefycart' ); ?></h3>
							<ul>
								<li><strong> - <?php echo __( 'Grocefy Cart offer wide range of  ready to use Home Sections Patterns', 'grocefycart' ); ?></strong>
									<ul>
										<li><?php echo __( 'Headers Layout', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Footers Layout', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Hero/Banner Section', 'grocefycart' ); ?></li>
										<li><?php echo __( 'About Us/Content Section', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Testimonials', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Teams', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Servcies and Features', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Portfolio and Gallery', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Contact and Newsletter', 'grocefycart' ); ?></li>
										<li><?php echo __( 'FAQ and Accordion Content ', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Call to Action', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Pricing Tables', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Posts Layouts', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Profile Cards', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Number and Stats Showcase', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Process/Step Sections', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Job Listing', 'grocefycart' ); ?></li>
										<li><?php echo __( 'Events Listing', 'grocefycart' ); ?></li>
									</ul>
								</li>

								<li> <strong>- <?php echo __( 'FSE Templates Ready', 'grocefycart' ); ?></strong>
									<ul>
										<li> <?php echo __( '404 Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Archive Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Product Catalog Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Blank Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Front Page Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Blog Home Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Index Page Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Search Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Sitemap Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Page Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Left Sidebar Page Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Right sidebar page  Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Single Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Single Product Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Cart Page Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Checkout Page Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Left Sidebar Single Template', 'grocefycart' ); ?></li>
										<li> <?php echo __( 'Full Width Single Template', 'grocefycart' ); ?></li>

									</ul>
								<li>
								<li><strong> - <?php echo __( '2 Pre-built Demos', 'grocefycart' ); ?></strong></li>
								<li><strong> - <?php echo __( '100+ Pre-built Sections', 'grocefycart' ); ?></strong></li>
								<li><strong> - <?php echo __( 'Fully Customizable Header Layout', 'grocefycart' ); ?></strong></li>
								<li> <strong>- <?php echo __( 'Fully Customizable Footer Layout ', 'grocefycart' ); ?></strong></li>
								<li> <strong>- <?php echo __( 'On Scroll Animation option', 'grocefycart' ); ?></strong></li>
								<li> <strong>- <?php echo __( 'One Click Demo Import Features', 'grocefycart' ); ?></strong></li>
								<li> <strong>- <?php echo __( 'Access Cozy Blocks with upto 20+ Advanced Blocks for FSE and Gutenberg Editor', 'grocefycart' ); ?></strong></li>
							</ul>
						</div>
						<div class="half-col pro-features">
							<h3><?php echo __( 'Premium Features', 'grocefycart' ); ?></h3>
							<p><?php echo __( 'Including all free features, Grocefy Cart seamlessly integrates with Cozy Blocks, offering 40+ advanced blocks designed to elevate and empower your website. These blocks provide powerful capabilities, enabling you to integrate essential and advanced features effortlessly. By combining these blocks with our ready-to-use patterns, you gain the flexibility to craft a professional and engaging online presence tailored specifically to business and  corporate needs.', 'grocefycart' ); ?></p>
							<h4><?php echo __( '- 5 Pre-built Starter Demos (Including Free)', 'grocefycart' ); ?></h4>
							<h4><?php echo __( '- 150+ Pre-built Sections (Including Free)', 'grocefycart' ); ?></h4>
							<h4><?php echo __( '- 40+ Advanced Blocks', 'grocefycart' ); ?></h4>
							<ul>
								<li><?php echo __( 'Slider Block', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Counter Block', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Prgress Bar Block', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Advanced Gallery with Lightbox, filterable and multiple layout', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Portfolio Block with Custom Post Type with lightbox, category filterable and multiple layout', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Team Block with grid and carousel', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Testimonial Block with grid and carousel', 'grocefycart' ); ?></li>
								<li><?php echo __( '15 Post and Magazine Blocks', 'grocefycart' ); ?></li>
								<li><?php echo __( '10 WooCommerce Blocks', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Advacned Tabs Block', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Accordion Blocks', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Social Shares Blocks', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Social Icons Blocks', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Breadcrumbs Block', 'grocefycart' ); ?></li>
								<li><?php echo __( 'Popup buidler Block to display offer and flash sale', 'grocefycart' ); ?>
									<?php echo __( 'and access', 'grocefycart' ); ?> <a href="https://cozythemes.com/cozy-addons/" target="_blank"><?php echo __( 'Cozy Blocks with more than 40+ advanced block.', 'grocefycart' ); ?></a>
								</li>

							</ul>
							<br />
							<a href="https://cozythemes.com/pricing-and-plans/" class="upgrade-btn button" target="_blank"><?php echo __( 'Upgrade to Pro', 'grocefycart' ); ?></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
}
