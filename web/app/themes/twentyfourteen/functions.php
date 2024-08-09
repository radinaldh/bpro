<?php

/**
 * Twenty Fourteen functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @link https://developer.wordpress.org/themes/advanced-topics/child-themes/
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link https://developer.wordpress.org/plugins/
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

/**
 * Set up the content width value based on the theme's design.
 *
 * @see twentyfourteen_content_width()
 *
 * @since Twenty Fourteen 1.0
 */
if (!isset($content_width)) {
	$content_width = 474;
}

/**
 * Twenty Fourteen only works in WordPress 3.6 or later.
 */
if (version_compare($GLOBALS['wp_version'], '3.6', '<')) {
	require get_template_directory() . '/inc/back-compat.php';
}

if (!function_exists('twentyfourteen_setup')) :
	/**
	 * Twenty Fourteen setup.
	 *
	 * Set up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support post thumbnails.
	 *
	 * @since Twenty Fourteen 1.0
	 */
	function twentyfourteen_setup()
	{

		/*
		 * Make Twenty Fourteen available for translation.
		 *
		 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyfourteen
		 * If you're building a theme based on Twenty Fourteen, use a find and
		 * replace to change 'twentyfourteen' to the name of your theme in all
		 * template files.
		 *
		 * Manual loading of text domain is not required after the introduction of
		 * just in time translation loading in WordPress version 4.6.
		 *
		 * @ticket 58318
		 */
		if (version_compare($GLOBALS['wp_version'], '4.6', '<')) {
			load_theme_textdomain('twentyfourteen');
		}

		/*
		 * This theme styles the visual editor to resemble the theme style.
		 * When fonts are self-hosted, the theme directory needs to be removed first.
		 */
		$font_stylesheet = str_replace(
			array(get_template_directory_uri() . '/', get_stylesheet_directory_uri() . '/'),
			'',
			(string) twentyfourteen_font_url()
		);
		add_editor_style(array('css/editor-style.css', $font_stylesheet, 'genericons/genericons.css'));

		// Load regular editor styles into the new block-based editor.
		add_theme_support('editor-styles');

		// Load default block styles.
		add_theme_support('wp-block-styles');

		// Add support for responsive embeds.
		add_theme_support('responsive-embeds');

		// Add support for custom color scheme.
		add_theme_support(
			'editor-color-palette',
			array(
				array(
					'name'  => __('Green', 'twentyfourteen'),
					'slug'  => 'green',
					'color' => '#24890d',
				),
				array(
					'name'  => __('Black', 'twentyfourteen'),
					'slug'  => 'black',
					'color' => '#000',
				),
				array(
					'name'  => __('Dark Gray', 'twentyfourteen'),
					'slug'  => 'dark-gray',
					'color' => '#2b2b2b',
				),
				array(
					'name'  => __('Medium Gray', 'twentyfourteen'),
					'slug'  => 'medium-gray',
					'color' => '#767676',
				),
				array(
					'name'  => __('Light Gray', 'twentyfourteen'),
					'slug'  => 'light-gray',
					'color' => '#f5f5f5',
				),
				array(
					'name'  => __('White', 'twentyfourteen'),
					'slug'  => 'white',
					'color' => '#fff',
				),
			)
		);

		// Add RSS feed links to <head> for posts and comments.
		add_theme_support('automatic-feed-links');

		// Enable support for Post Thumbnails, and declare two sizes.
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(672, 372, true);
		add_image_size('twentyfourteen-full-width', 1038, 576, true);

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary'   => __('Top primary menu', 'twentyfourteen'),
				'secondary' => __('Secondary menu in left sidebar', 'twentyfourteen'),
				'header-menu' => __('Header Menu', 'twentyfourteen'),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
				'navigation-widgets',
			)
		);

		/*
		 * Enable support for Post Formats.
		 * See: https://developer.wordpress.org/advanced-administration/wordpress/post-formats/
		 */
		add_theme_support(
			'post-formats',
			array(
				'aside',
				'image',
				'video',
				'audio',
				'quote',
				'link',
				'gallery',
			)
		);

		// This theme allows users to set a custom background.
		add_theme_support(
			'custom-background',
			/**
			 * Filters Twenty Fourteen custom-background support arguments.
			 *
			 * @since Twenty Fourteen 1.0
			 *
			 * @param array $args {
			 *     An array of custom-background support arguments.
			 *
			 *     @type string $default-color Default color of the background.
			 * }
			 */
			apply_filters(
				'twentyfourteen_custom_background_args',
				array(
					'default-color' => 'f5f5f5',
				)
			)
		);

		// Add support for featured content.
		add_theme_support(
			'featured-content',
			array(
				'featured_content_filter' => 'twentyfourteen_get_featured_posts',
				'max_posts'               => 6,
			)
		);

		// This theme uses its own gallery styles.
		add_filter('use_default_gallery_style', '__return_false');

		// Indicate widget sidebars can use selective refresh in the Customizer.
		add_theme_support('customize-selective-refresh-widgets');
	}
endif; // twentyfourteen_setup()
add_action('after_setup_theme', 'twentyfourteen_setup');

/**
 * Adjust content_width value for image attachment template.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_content_width()
{
	if (is_attachment() && wp_attachment_is_image()) {
		$GLOBALS['content_width'] = 810;
	}
}
add_action('template_redirect', 'twentyfourteen_content_width');

/**
 * Getter function for Featured Content Plugin.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return array An array of WP_Post objects.
 */
function twentyfourteen_get_featured_posts()
{
	/**
	 * Filters the featured posts to return in Twenty Fourteen.
	 *
	 * @since Twenty Fourteen 1.0
	 *
	 * @param array|bool $posts Array of featured posts, otherwise false.
	 */
	return apply_filters('twentyfourteen_get_featured_posts', array());
}

/**
 * A helper conditional function that returns a boolean value.
 *
 * @since Twenty Fourteen 1.0
 *
 * @return bool Whether there are featured posts.
 */
function twentyfourteen_has_featured_posts()
{
	return !is_paged() && (bool) twentyfourteen_get_featured_posts();
}

/**
 * Register three Twenty Fourteen widget areas.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_widgets_init()
{
	require get_template_directory() . '/inc/widgets.php';
	register_widget('Twenty_Fourteen_Ephemera_Widget');

	register_sidebar(
		array(
			'name'          => __('Primary Sidebar', 'twentyfourteen'),
			'id'            => 'sidebar-1',
			'description'   => __('Main sidebar that appears on the left.', 'twentyfourteen'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => __('Content Sidebar', 'twentyfourteen'),
			'id'            => 'sidebar-2',
			'description'   => __('Additional sidebar that appears on the right.', 'twentyfourteen'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
	register_sidebar(
		array(
			'name'          => __('Footer Widget Area', 'twentyfourteen'),
			'id'            => 'sidebar-3',
			'description'   => __('Appears in the footer section of the site.', 'twentyfourteen'),
			'before_widget' => '<aside id="%1$s" class="widget %2$s">',
			'after_widget'  => '</aside>',
			'before_title'  => '<h1 class="widget-title">',
			'after_title'   => '</h1>',
		)
	);
}
add_action('widgets_init', 'twentyfourteen_widgets_init');

if (!function_exists('twentyfourteen_font_url')) :
	/**
	 * Register Lato font for Twenty Fourteen.
	 *
	 * @since Twenty Fourteen 1.0
	 * @since Twenty Fourteen 3.6 Replaced Google URL with self-hosted fonts.
	 *
	 * @return string
	 */
	function twentyfourteen_font_url()
	{
		$font_url = '';
		/*
		 * translators: If there are characters in your language that are not supported
		 * by Lato, translate this to 'off'. Do not translate into your own language.
		 */
		if ('off' !== _x('on', 'Lato font: on or off', 'twentyfourteen')) {
			$font_url = get_template_directory_uri() . '/fonts/font-lato.css';
		}

		return $font_url;
	}
endif;

/**
 * Enqueue scripts and styles for the front end.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_scripts()
{
	// Add Lato font, used in the main stylesheet.
	$font_version = (0 === strpos((string) twentyfourteen_font_url(), get_template_directory_uri() . '/')) ? '20230328' : null;
	wp_enqueue_style('twentyfourteen-lato', twentyfourteen_font_url(), array(), $font_version);

	// Add Genericons font, used in the main stylesheet.
	wp_enqueue_style('genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.3');

	// Load our main stylesheet.
	wp_enqueue_style('twentyfourteen-style', get_stylesheet_uri(), array(), '20240716');

	// Theme block stylesheet.
	wp_enqueue_style('twentyfourteen-block-style', get_template_directory_uri() . '/css/blocks.css', array('twentyfourteen-style'), '20240613');

	// Load the Internet Explorer specific stylesheet.
	wp_enqueue_style('twentyfourteen-ie', get_template_directory_uri() . '/css/ie.css', array('twentyfourteen-style'), '20140711');
	wp_style_add_data('twentyfourteen-ie', 'conditional', 'lt IE 9');

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	if (is_singular() && wp_attachment_is_image()) {
		wp_enqueue_script('twentyfourteen-keyboard-image-navigation', get_template_directory_uri() . '/js/keyboard-image-navigation.js', array('jquery'), '20150120');
	}

	if (is_active_sidebar('sidebar-3')) {
		wp_enqueue_script('jquery-masonry');
	}

	if (is_front_page() && 'slider' === get_theme_mod('featured_content_layout')) {
		wp_enqueue_script(
			'twentyfourteen-slider',
			get_template_directory_uri() . '/js/slider.js',
			array('jquery'),
			'20150120',
			array(
				'in_footer' => false, // Because involves header.
				'strategy'  => 'defer',
			)
		);
		wp_localize_script(
			'twentyfourteen-slider',
			'featuredSliderDefaults',
			array(
				'prevText' => __('Previous', 'twentyfourteen'),
				'nextText' => __('Next', 'twentyfourteen'),
			)
		);
	}

	wp_enqueue_script(
		'twentyfourteen-script',
		get_template_directory_uri() . '/js/functions.js',
		array('jquery'),
		'20230526',
		array(
			'in_footer' => false, // Because involves header.
			'strategy'  => 'defer',
		)
	);
}
add_action('wp_enqueue_scripts', 'twentyfourteen_scripts');

/**
 * Enqueue font stylesheet to admin screen for custom header display.
 *
 * @since Twenty Fourteen 1.0
 */
function twentyfourteen_admin_fonts()
{
	$font_version = (0 === strpos((string) twentyfourteen_font_url(), get_template_directory_uri() . '/')) ? '20230328' : null;
	wp_enqueue_style('twentyfourteen-lato', twentyfourteen_font_url(), array(), $font_version);
}
add_action('admin_print_scripts-appearance_page_custom-header', 'twentyfourteen_admin_fonts');

/**
 * Add preconnect for Google Fonts.
 *
 * @since Twenty Fourteen 1.9
 * @deprecated Twenty Fourteen 3.6 Disabled filter because, by default, fonts are self-hosted.
 *
 * @param array   $urls          URLs to print for resource hints.
 * @param string  $relation_type The relation type the URLs are printed.
 * @return array URLs to print for resource hints.
 */
function twentyfourteen_resource_hints($urls, $relation_type)
{
	if (wp_style_is('twentyfourteen-lato', 'queue') && 'preconnect' === $relation_type) {
		if (version_compare($GLOBALS['wp_version'], '4.7-alpha', '>=')) {
			$urls[] = array(
				'href' => 'https://fonts.gstatic.com',
				'crossorigin',
			);
		} else {
			$urls[] = 'https://fonts.gstatic.com';
		}
	}

	return $urls;
}
// add_filter( 'wp_resource_hints', 'twentyfourteen_resource_hints', 10, 2 );

/**
 * Enqueue styles for the block-based editor.
 *
 * @since Twenty Fourteen 2.3
 */
function twentyfourteen_block_editor_styles()
{
	// Block styles.
	wp_enqueue_style('twentyfourteen-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20240613');
	// Add custom fonts.
	$font_version = (0 === strpos((string) twentyfourteen_font_url(), get_template_directory_uri() . '/')) ? '20230328' : null;
	wp_enqueue_style('twentyfourteen-fonts', twentyfourteen_font_url(), array(), $font_version);
}
add_action('enqueue_block_editor_assets', 'twentyfourteen_block_editor_styles');

if (!function_exists('twentyfourteen_the_attached_image')) :
	/**
	 * Print the attached image with a link to the next attached image.
	 *
	 * @since Twenty Fourteen 1.0
	 */
	function twentyfourteen_the_attached_image()
	{
		$post = get_post();
		/**
		 * Filters the default Twenty Fourteen attachment size.
		 *
		 * @since Twenty Fourteen 1.0
		 *
		 * @param array $dimensions {
		 *     An array of height and width dimensions.
		 *
		 *     @type int $height Height of the image in pixels. Default 810.
		 *     @type int $width  Width of the image in pixels. Default 810.
		 * }
		 */
		$attachment_size     = apply_filters('twentyfourteen_attachment_size', array(810, 810));
		$next_attachment_url = wp_get_attachment_url();

		/*
		 * Grab the IDs of all the image attachments in a gallery so we can get the URL
		 * of the next adjacent image in a gallery, or the first image (if we're
		 * looking at the last image in a gallery), or, in a gallery of one, just the
		 * link to that image file.
		 */
		$attachment_ids = get_posts(
			array(
				'post_parent'    => $post->post_parent,
				'fields'         => 'ids',
				'numberposts'    => -1,
				'post_status'    => 'inherit',
				'post_type'      => 'attachment',
				'post_mime_type' => 'image',
				'order'          => 'ASC',
				'orderby'        => 'menu_order ID',
			)
		);

		// If there is more than 1 attachment in a gallery...
		if (count($attachment_ids) > 1) {
			foreach ($attachment_ids as $idx => $attachment_id) {
				if ($attachment_id === $post->ID) {
					$next_id = $attachment_ids[($idx + 1) % count($attachment_ids)];
					break;
				}
			}

			if ($next_id) {
				// ...get the URL of the next image attachment.
				$next_attachment_url = get_attachment_link($next_id);
			} else {
				// ...or get the URL of the first image attachment.
				$next_attachment_url = get_attachment_link(reset($attachment_ids));
			}
		}

		printf(
			'<a href="%1$s" rel="attachment">%2$s</a>',
			esc_url($next_attachment_url),
			wp_get_attachment_image($post->ID, $attachment_size)
		);
	}
endif;

if (!function_exists('twentyfourteen_list_authors')) :
	/**
	 * Print a list of all site contributors who published at least one post.
	 *
	 * @since Twenty Fourteen 1.0
	 */
	function twentyfourteen_list_authors()
	{
		$args = array(
			'fields'     => 'ID',
			'orderby'    => 'post_count',
			'order'      => 'DESC',
			'capability' => array('edit_posts'),
		);

		// Capability queries were only introduced in WP 5.9.
		if (version_compare($GLOBALS['wp_version'], '5.9-alpha', '<')) {
			$args['who'] = 'authors';
			unset($args['capability']);
		}

		/**
		 * Filters query arguments for listing authors.
		 *
		 * @since Twenty Fourteen 3.3
		 *
		 * @param array $args Query arguments.
		 */
		$args = apply_filters('twentyfourteen_list_authors_query_args', $args);

		$contributor_ids = get_users($args);

		foreach ($contributor_ids as $contributor_id) :
			$post_count = count_user_posts($contributor_id);

			// Move on if user has not published a post (yet).
			if (!$post_count) {
				continue;
			}
?>

			<div class="contributor">
				<div class="contributor-info">
					<div class="contributor-avatar"><?php echo get_avatar($contributor_id, 132); ?></div>
					<div class="contributor-summary">
						<h2 class="contributor-name"><?php echo get_the_author_meta('display_name', $contributor_id); ?></h2>
						<p class="contributor-bio">
							<?php echo get_the_author_meta('description', $contributor_id); ?>
						</p>
						<a class="button contributor-posts-link" href="<?php echo esc_url(get_author_posts_url($contributor_id)); ?>">
							<?php
							/* translators: %d: Post count. */
							printf(_n('%d Article', '%d Articles', $post_count, 'twentyfourteen'), $post_count);
							?>
						</a>
					</div><!-- .contributor-summary -->
				</div><!-- .contributor-info -->
			</div><!-- .contributor -->

	<?php
		endforeach;
	}
endif;

/**
 * Extend the default WordPress body classes.
 *
 * Adds body classes to denote:
 * 1. Single or multiple authors.
 * 2. Presence of header image except in Multisite signup and activate pages.
 * 3. Index views.
 * 4. Full-width content layout.
 * 5. Presence of footer widgets.
 * 6. Single views.
 * 7. Featured content layout.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing body class values.
 * @return array The filtered body class list.
 */
function twentyfourteen_body_classes($classes)
{
	if (is_multi_author()) {
		$classes[] = 'group-blog';
	}

	if (get_header_image()) {
		$classes[] = 'header-image';
	} elseif (!in_array($GLOBALS['pagenow'], array('wp-activate.php', 'wp-signup.php'), true)) {
		$classes[] = 'masthead-fixed';
	}

	if (is_archive() || is_search() || is_home()) {
		$classes[] = 'list-view';
	}

	if ((!is_active_sidebar('sidebar-2'))
		|| is_page_template('page-templates/full-width.php')
		|| is_page_template('page-templates/contributors.php')
		|| is_attachment()
	) {
		$classes[] = 'full-width';
	}

	if (is_active_sidebar('sidebar-3')) {
		$classes[] = 'footer-widgets';
	}

	if (is_singular() && !is_front_page()) {
		$classes[] = 'singular';
	}

	if (is_front_page() && 'slider' === get_theme_mod('featured_content_layout')) {
		$classes[] = 'slider';
	} elseif (is_front_page()) {
		$classes[] = 'grid';
	}

	return $classes;
}
add_filter('body_class', 'twentyfourteen_body_classes');

/**
 * Extend the default WordPress post classes.
 *
 * Adds a post class to denote:
 * Non-password protected page with a post thumbnail.
 *
 * @since Twenty Fourteen 1.0
 *
 * @param array $classes A list of existing post class values.
 * @return array The filtered post class list.
 */
function twentyfourteen_post_classes($classes)
{
	if (!post_password_required() && !is_attachment() && has_post_thumbnail()) {
		$classes[] = 'has-post-thumbnail';
	}

	return $classes;
}
add_filter('post_class', 'twentyfourteen_post_classes');

/**
 * Create a nicely formatted and more specific title element text for output
 * in head of document, based on current view.
 *
 * @since Twenty Fourteen 1.0
 *
 * @global int $paged WordPress archive pagination page count.
 * @global int $page  WordPress paginated post page count.
 *
 * @param string $title Default title text for current view.
 * @param string $sep Optional separator.
 * @return string The filtered title.
 */
function twentyfourteen_wp_title($title, $sep)
{
	global $paged, $page;

	if (is_feed()) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo('name', 'display');

	// Add the site description for the home/front page.
	$site_description = get_bloginfo('description', 'display');
	if ($site_description && (is_home() || is_front_page())) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if (($paged >= 2 || $page >= 2) && !is_404()) {
		/* translators: %s: Page number. */
		$title = "$title $sep " . sprintf(__('Page %s', 'twentyfourteen'), max($paged, $page));
	}

	return $title;
}
add_filter('wp_title', 'twentyfourteen_wp_title', 10, 2);


/**
 * Modifies tag cloud widget arguments to display all tags in the same font size
 * and use list format for better accessibility.
 *
 * @since Twenty Fourteen 2.1
 *
 * @param array $args Arguments for tag cloud widget.
 * @return array The filtered arguments for tag cloud widget.
 */
function twentyfourteen_widget_tag_cloud_args($args)
{
	$args['largest']  = 22;
	$args['smallest'] = 8;
	$args['unit']     = 'pt';
	$args['format']   = 'list';

	return $args;
}
add_filter('widget_tag_cloud_args', 'twentyfourteen_widget_tag_cloud_args');


// Implement Custom Header features.
require get_template_directory() . '/inc/custom-header.php';

// Custom template tags for this theme.
require get_template_directory() . '/inc/template-tags.php';

// Add Customizer functionality.
require get_template_directory() . '/inc/customizer.php';

// Add support for block patterns.
require get_template_directory() . '/inc/block-patterns.php';

/*
 * Add Featured Content functionality.
 *
 * To overwrite in a plugin, define your own Featured_Content class on or
 * before the 'setup_theme' hook.
 */
if (!class_exists('Featured_Content') && 'plugins.php' !== $GLOBALS['pagenow']) {
	require get_template_directory() . '/inc/featured-content.php';
}

/**
 * Add an `is_customize_preview` function if it is missing.
 *
 * Enables installing Twenty Fourteen in WordPress versions before 4.0.0 when the
 * `is_customize_preview` function was introduced.
 *
 * @global WP_Customize_Manager $wp_customize Customizer object.
 */
if (!function_exists('is_customize_preview')) :
	function is_customize_preview()
	{
		global $wp_customize;

		return ($wp_customize instanceof WP_Customize_Manager) && $wp_customize->is_preview();
	}
endif;



/**
 * SUBMISSION 
 */

function register_submission_post_type()
{
	$args = array(
		'labels' => array(
			'name' => __('Submissions'),
			'singular_name' => __('Submission')
		),
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-welcome-write-blog',
		'supports' => array('title', 'editor', 'custom-fields'),
		'capabilities' => array(
			'create_posts' => 'do_not_allow', // Using 'do_not_allow' to disable creating new posts
		),
		'map_meta_cap' => true, // Use the actual capabilities set above
	);

	register_post_type('submission', $args);
}
add_action('init', 'register_submission_post_type');

function enqueue_custom_js()
{
	wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/custom.js', array('jquery'), null, true);
	wp_localize_script('custom-js', 'ajax_params', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('wp_enqueue_scripts', 'enqueue_custom_js');

function handle_form_submission()
{

	$recaptcha_response = sanitize_text_field($_POST['g-recaptcha-response']);
	$response = wp_remote_get("https://www.google.com/recaptcha/api/siteverify?secret=6Ld0hyIqAAAAAN_coXvQd6zatH7lJYbC8MU4lXWw&response=" . $recaptcha_response);

	$response_body = wp_remote_retrieve_body($response);
	$result = json_decode($response_body);

	if (!$result->success) {
		wp_send_json_error('reCAPTCHA verification failed.');
		return;
	}

	// Check nonce and sanitize inputs as previously discussed
	$post_id = wp_insert_post([
		'post_title' => sanitize_text_field($_POST['name']),
		'post_content' => '',
		'post_status' => 'publish',
		'post_type' => 'submission',
		'meta_input' => [
			'email' => sanitize_email($_POST['email']),
			'phone' => sanitize_text_field($_POST['phone']),
			'checked_in' => 'false', // Initial status, not checked in
		],
	]);

	if ($post_id) {
		$token = generate_secure_token($post_id);
		update_post_meta($post_id, 'secure_token', $token); // Store token in post meta

		$qr_code_url = generate_qr_code_with_token($token); // Generate QR code using the token
		update_post_meta($post_id, 'qr_code_url', $qr_code_url); // Store QR code URL in post meta

		send_qr_code_email($post_id); // Send email with QR code

		$redirect_url = get_permalink($post_id); // Get the permalink to the post
		wp_send_json_success($redirect_url);
	} else {
		wp_send_json_error('There was an error with the submission.');
	}
}

add_action('wp_ajax_submit_form', 'handle_form_submission'); // For logged-in users
add_action('wp_ajax_nopriv_submit_form', 'handle_form_submission'); // For non-logged-in users

function modify_submission_columns($columns)
{
	$new_columns = array(
		'cb' => '<input type="checkbox" />',
		'title' => __('Name'),
		'email' => __('Email'),
		'phone' => __('Phone No.'),
		'checked_in' => __('Checked In'), // New column for checked-in status
		'send_email' => __('Send Email'),
		'date' => __('Date')
	);
	return $new_columns;
}
add_filter('manage_submission_posts_columns', 'modify_submission_columns');

function custom_submission_column_content($column, $post_id)
{
	switch ($column) {
		case 'email':
			echo get_post_meta($post_id, 'email', true);
			break;
		case 'phone':
			echo get_post_meta($post_id, 'phone', true);
			break;
		case 'checked_in':
			$checked_in = get_post_meta($post_id, 'checked_in', true);
			echo ($checked_in === 'true') ? 'Yes' : 'No'; // Explicitly check for the string "true"
			break;
	}
}
add_action('manage_submission_posts_custom_column', 'custom_submission_column_content', 10, 2);

function checked_in_meta_box_html($post)
{
	$checked_in = get_post_meta($post->ID, 'checked_in', true);
	wp_nonce_field('save_checked_in_meta_box_data', 'checked_in_meta_box_nonce');
	?>
	<label for="checked_in_status">Checked In:</label>
	<select name="checked_in_status" id="checked_in_status">
		<option value="false" <?php selected($checked_in, 'false'); ?>>No</option>
		<option value="true" <?php selected($checked_in, 'true'); ?>>Yes</option>
	</select>
	<?php
}


function add_checked_in_meta_box()
{
	add_meta_box(
		'checked_in_status',      // ID of the meta box
		'Checked In Status',      // Title of the meta box
		'checked_in_meta_box_html', // Callback function to display the meta box content
		'submission',             // Post type
		'side',                   // Context where the box will show ('normal', 'side', 'advanced')
		'high'                    // Priority within the context
	);
}
add_action('add_meta_boxes', 'add_checked_in_meta_box');

function save_checked_in_meta_box_data($post_id)
{
	// Check if our nonce is set.
	if (!isset($_POST['checked_in_meta_box_nonce'])) {
		return $post_id;
	}
	$nonce = $_POST['checked_in_meta_box_nonce'];

	// Verify that the nonce is valid.
	if (!wp_verify_nonce($nonce, 'save_checked_in_meta_box_data')) {
		return $post_id;
	}

	// If this is an autosave, our form has not been submitted, so we don't want to do anything.
	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return $post_id;
	}

	// Check the user's permissions.
	if (isset($_POST['post_type']) && 'submission' == $_POST['post_type']) {
		if (!current_user_can('edit_post', $post_id)) {
			return $post_id;
		}
	}

	// Sanitize the user input.
	$new_value = (isset($_POST['checked_in_status']) && $_POST['checked_in_status'] === 'true') ? 'true' : 'false';

	// Update the meta field.
	update_post_meta($post_id, 'checked_in', $new_value);
}
add_action('save_post', 'save_checked_in_meta_box_data');


function custom_submission_sortable_columns($columns)
{
	$columns['email'] = 'email';
	$columns['phone'] = 'phone';
	return $columns;
}
add_filter('manage_edit-submission_sortable_columns', 'custom_submission_sortable_columns');

function hide_add_new_submission_button()
{
	global $pagenow, $typenow;

	// Only apply to the submission post type listings
	if ('edit.php' === $pagenow && 'submission' === $typenow) {
		echo '<style type="text/css">
            .page-title-action { display: none; }
        </style>';
	}
}
add_action('admin_head', 'hide_add_new_submission_button');

function register_check_in_route()
{
	register_rest_route('bethany/v1', '/check-in/', array(
		'methods' => 'GET',
		'callback' => 'handle_check_in',
		// 'permission_callback' => 'check_auth_token'
		'permission_callback' => '__return_true'
	));
}
add_action('rest_api_init', 'register_check_in_route');

function check_auth_token()
{
	$headers = getallheaders();
	if (isset($headers['Authorization'])) {
		$auth_token = $headers['Authorization'];
		$users = get_users(array(
			'meta_key' => 'login_token',
			'meta_value' => $auth_token,
			'number' => 1
		));
		if (!empty($users)) {
			return true;
		}
	}
	return false;
}

function handle_check_in($request)
{
	$token = $request->get_param('token');
	if (!$token) {
		return new WP_Error('no_token', 'No token provided', array('status' => 400));
	}

	$args = [
		'post_type' => 'submission',
		'meta_query' => [
			[
				'key' => 'secure_token',
				'value' => $token,
				'compare' => '='
			]
		],
		'posts_per_page' => 1
	];

	$query = new WP_Query($args);
	if ($query->have_posts()) {
		$query->the_post();
		$checked_in = get_post_meta(get_the_ID(), 'checked_in', true);

		if ($checked_in === 'true') {
			return rest_ensure_response(['message' => 'User already checked in', 'success' => false]);
		}

		update_post_meta(get_the_ID(), 'checked_in', 'true');
		return rest_ensure_response(['message' => 'Check-in successful', 'success' => true]);
	} else {
		return new WP_Error('invalid_token', 'Invalid token', array('status' => 404));
	}
}


function handle_cors()
{
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
	header("Access-Control-Allow-Headers: Authorization, Content-Type");
}

add_action('rest_api_init', function () {
	remove_filter('rest_pre_serve_request', 'rest_send_cors_headers');
	add_filter('rest_pre_serve_request', function ($value) {
		handle_cors();
		return $value;
	});
}, 15);

function generate_secure_token($post_id)
{
	return hash('sha256', $post_id . NONCE_SALT);  // NONCE_SALT should be defined in your wp-config.php for security
}

function generate_qr_code_with_token($token)
{
	$data = urlencode('https://bethanyprofessional.com/wp-json/bethany/v1/check-in?token=' . $token);
	return "https://api.qrserver.com/v1/create-qr-code/?size=300x300&data=$data";
}

function check_in_participant()
{
	if (isset($_POST['token'])) {
		$token = sanitize_text_field($_POST['token']);
		$args = [
			'post_type' => 'submission',
			'meta_query' => [
				[
					'key' => 'secure_token',
					'value' => $token,
					'compare' => '='
				]
			],
			'posts_per_page' => 1 // Limit the query to one result for efficiency
		];
		$query = new WP_Query($args);
		if ($query->have_posts()) {
			$query->the_post();
			update_post_meta(get_the_ID(), 'checked_in', 'Yes');
			wp_reset_postdata(); // Reset the global post object
			wp_send_json_success('Checked in successfully.');
		} else {
			wp_send_json_error('Invalid token.');
		}
	} else {
		wp_send_json_error('Token not provided.');
	}
}

add_action('wp_ajax_check_in_participant', 'check_in_participant');
add_action('wp_ajax_nopriv_check_in_participant', 'check_in_participant');


function add_panitia_role()
{
	add_role('panitia', 'Panitia', array(
		'read' => true,
		'manage_check_in' => false, // Add the manage_check_in capability
		'edit_posts' => false,
		'delete_posts' => false,
		'publish_posts' => false,
		'upload_files' => false,
	));
}
add_action('init', 'add_panitia_role');

// Hide admin bar for users with the role "panitia"
function hide_admin_bar_for_panitia()
{
	if (is_user_logged_in()) {
		$user = wp_get_current_user();
		if (in_array('panitia', (array) $user->roles)) {
			show_admin_bar(false);
		}
	}
}
add_action('after_setup_theme', 'hide_admin_bar_for_panitia');

function custom_logout()
{
	if (isset($_GET['action']) && $_GET['action'] == 'logout') {
		check_admin_referer('log-out');
		wp_logout();
		echo "<script>
            localStorage.removeItem('loginToken');
            window.location.href = '" . home_url('/panitia-login') . "';
        </script>";
		exit;
	}
}
add_action('init', 'custom_logout');


function enqueue_custom_login_js()
{
	wp_enqueue_script('custom-login-js', get_template_directory_uri() . '/js/custom-login.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_login_js');

function send_qr_code_email($post_id)
{
	$email = get_post_meta($post_id, 'email', true);
	$name = get_the_title($post_id);
	$phone = get_post_meta($post_id, 'phone', true);
	$qr_code_url = get_post_meta($post_id, 'qr_code_url', true);

	$subject = 'Invitation QR Code for DISCOVER CYBER SECURITY AND FINANCIAL TRAP';

	$body = '<p>Shallom profesional muda,</p>';
	$body .= '<p>Invitation for:</p>';
	$body .= '<p>Name: ' . $name . '<br>';
	$body .= 'Email: ' . $email . '<br>';
	$body .= 'Phone: ' . $phone . '</p>';
	$body .= '<p>QRCode Invitation:</p>';
	$body .= '<p><img src="' . $qr_code_url . '" alt="QR Code"></p>';
	$body .= '<p>Terima kasih.<br>Tuhan Yesus memberkati<br>Be Success, Be Profesional.</p>';

	$headers = array('Content-Type: text/html; charset=UTF-8');

	if (wp_mail($email, $subject, $body, $headers)) {
		update_post_meta($post_id, 'email_sent', true);
	}
}

function format_phone_number_for_whatsapp($phone)
{
	$phone = str_replace([' ', '-', '+'], '', $phone);

	if (strpos($phone, '0') === 0) {
		$phone = '62' . substr($phone, 1);
	}

	return $phone;
}


function add_send_email_button($column, $post_id)
{
	if ($column === 'send_email') {
		$email_sent = get_post_meta($post_id, 'email_sent', true);
		$button_text = $email_sent ? 'Send Email Again' : 'Send Email';
		echo '<button class="button send-email" data-post-id="' . $post_id . '"style="margin-right: 10px">' . $button_text . '</button>';

		$phone = get_post_meta($post_id, 'phone', true);
		$phone = format_phone_number_for_whatsapp($phone);

		$name = get_the_title($post_id);
		$email = get_post_meta($post_id, 'email', true);
		$qr_code_url = get_permalink();

		$whatsapp_message = urlencode(
			"*Invitation QR Code for DISCOVER CYBER SECURITY AND FINANCIAL TRAP*\n" .
				"Name: $name\n" .
				"Email: $email\n" .
				"Phone: +$phone\n\n" .
				"QR Code: $qr_code_url\n\n" .
				"This message was automatically generated."
		);

		$whatsapp_url = "https://api.whatsapp.com/send?phone=$phone&text=$whatsapp_message";

		echo '<a href="' . $whatsapp_url . '" target="_blank" class="button send-whatsapp">Send WhatsApp</a>';
	}
}
add_action('manage_submission_posts_custom_column', 'add_send_email_button', 10, 2);




function handle_send_email()
{
	if (isset($_POST['post_id'])) {
		$post_id = intval($_POST['post_id']);
		send_qr_code_email($post_id);
		set_transient('email_sent_success', true, 30);
		wp_send_json_success();
	} else {
		wp_send_json_error('Invalid post ID.');
	}
}
add_action('wp_ajax_send_email', 'handle_send_email');

function display_email_sent_notice()
{
	if (get_transient('email_sent_success')) {
	?>
		<div class="notice notice-success is-dismissible">
			<p><?php _e('Email sent successfully.', 'text-domain'); ?></p>
		</div>
<?php
		delete_transient('email_sent_success'); // Delete the transient after displaying the notice
	}
}
add_action('admin_notices', 'display_email_sent_notice');

function enqueue_admin_custom_js()
{
	wp_enqueue_script('custom-admin-js', get_template_directory_uri() . '/js/custom-admin.js', array('jquery'), null, true);
	wp_localize_script('custom-admin-js', 'ajax_params', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'enqueue_admin_custom_js');

function enqueue_recaptcha()
{
	wp_enqueue_script('recaptcha', 'https://www.google.com/recaptcha/api.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_recaptcha');

/**
 * TEMPLATE FUNCTIONS
 */
class Custom_Walker_Nav_Menu extends Walker_Nav_Menu
{
	function start_lvl(&$output, $depth = 0, $args = null)
	{
		$indent = str_repeat("\t", $depth);
		$submenu = ($depth > 0) ? ' sub-menu' : '';
		$output .= "\n$indent<ul class=\"et-header-submenu$submenu\">\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
	{
		$indent = ($depth) ? str_repeat("\t", $depth) : '';
		$li_attributes = '';
		$class_names = $value = '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$classes[] = (!empty($args->walker) && $args->walker->has_children) ? 'has-sub-menu relative' : '';
		$classes[] = 'menu-item-' . $item->ID;
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
		$class_names = ' class="' . esc_attr($class_names) . '"';

		$id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
		$id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

		$output .= $indent . '<li' . $id . $value . $class_names . $li_attributes . '>';

		$attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
		$attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
		$attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
		$attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';

		$attributes .= (!empty($args->walker) && $args->walker->has_children) ? ' role="button"' : '';

		$item_output = $args->before;
		$item_output .= '<a' . $attributes . '>';
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}
}
