<?php
// Exit if accessed directly
if (!defined("ABSPATH")) {
	exit();
}
/**
 * Parking Systems functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Velocity Automotive
 * @since 1.0
 */

function get_theme_domain() {
	return "velocityautomotive";
}
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function velocityautomotive_setup() {
	/*
		     * Make theme available for translation.
		     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/herb-and-water
		     * If you're building a theme based on Parking Systems, use a find and replace
		     * to change 'herb-and-water' to the name of your theme in all the template files.
	*/
	load_theme_textdomain("velocityautomotive");
	// Add default posts and comments RSS feed links to head.
	add_theme_support("automatic-feed-links");
	/*
		     * Let WordPress manage the document title.
		     * By adding theme support, we declare that this theme does not use a
		     * hard-coded <title> tag in the document head, and expect WordPress to
		     * provide it for us.
	*/
	add_theme_support("title-tag");
	add_theme_support("custom-logo");
	/*
		     * Enable support for Post Thumbnails on posts and pages.
		     *
		     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	*/
	add_theme_support("post-thumbnails");
	/*
		     * Switch default core markup for search form, comment form, and comments
		     * to output valid HTML5.
	*/
	add_theme_support("html5", ["comment-form", "contact-from"]);
	// Set the default content width.
	$GLOBALS["content_width"] = 525;
	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus([
		"main-menu" => __("Main Menu", get_theme_domain()),
		"footer-menu" => __("Footer Menu", get_theme_domain()),
		"resources" => __("Resources", get_theme_domain()),
		"about" => __("About", get_theme_domain()),
		"contact" => __("Contact", get_theme_domain()),
	]);
	/*
		     * This theme styles the visual editor to resemble the theme style,
		     * specifically font, colors, and column width.
	*/
	add_editor_style(["css/editor-style.css"]);
	//add_theme_support( 'woocommerce' );
}

add_action("after_setup_theme", "velocityautomotive_setup");

/**
 * Enqueues scripts and styles.
 */

function velocityautomotive_scripts() {
	// Theme swiper Stylesheet

	/*wp_enqueue_style(
		"velocityautomotive-fonts-style",
		get_theme_file_uri("css/fonts.css"),
		[],
		rand()
	);*/

	wp_enqueue_style(
		"velocityautomotive-plugins-style",
		get_theme_file_uri("css/plugins.css"),
		[],
		rand()
	);
/*
wp_enqueue_style(
"velocityautomotive-rtl-style",
get_theme_file_uri("css/rtl.css"),
[],
rand()
);
 */
	/*wp_enqueue_style(
		"velocityautomotive-theme-style",
		get_theme_file_uri("css/theme.css"),
		[],
		rand()
	);*/

	wp_enqueue_style(
		"velocityautomotive-custom-style",
		get_theme_file_uri("css/custom.css"),
		[],
		rand()
	);

	// Theme Main Stylesheet
	wp_enqueue_style(
		"velocityautomotive-style",
		get_theme_file_uri("css/style.css"),
		[],
		rand()
	);

	wp_enqueue_style(
		"velocityautomotive-flickity",
		get_theme_file_uri("css/flickity.min.css"),
		[],
		rand()
	);

	// Theme Normalize Stylesheet
	//if (!is_admin()) {
	//Unload WP default jQuery

	wp_deregister_script("jquery");

	//Load jquery

	// wp_register_script(
	wp_enqueue_script(
		"jquery",
		get_theme_file_uri("js/jquery.js"),
		[],
		null,
		true
	);
	//} //Endif

	wp_enqueue_script(
		"velocityautomotive-plugins-script",
		get_theme_file_uri("js/plugins.js"),
		[],
		null,
		true
	);

	wp_enqueue_script(
		"velocityautomotive-functions-script",
		get_theme_file_uri("js/functions.js"),
		[],
		null,
		true
	);

}

add_action("wp_enqueue_scripts", "velocityautomotive_scripts");

//Add acf option for the theme

if (function_exists("acf_add_options_page")) {
	acf_add_options_page(); //Options Page
} //endif

if (!function_exists("velocityautomotive_add_favicon")):

	function velocityautomotive_add_favicon() {
		$favicom = get_field("favicon_icon", "option")
		? get_field("favicon_icon", "option")
		: get_theme_file_uri("/images/favicon.png");

		echo '<link rel="shortcut icon" href="' . $favicom . '" />';
	}
	add_action("login_head", "velocityautomotive_add_favicon");
	add_action("admin_head", "velocityautomotive_add_favicon");
	add_action("wp_head", "velocityautomotive_add_favicon");
endif; //endif
/**

 * Add Body class for logged in admin

 */

add_filter("body_class", "velocityautomotive_admin_body_class");

function velocityautomotive_admin_body_class($classes) {
	$user = wp_get_current_user();

	if (current_user_can("administrator")) {
		$classes[] = "admin-logged-in"; // your custom class name
	}

	if (!is_page("home")) {
		$classes[] = "inner-page";
	}

	//return $classes;

	return $classes;
}

if (!function_exists("velocityautomotive_mime_types")):
	/**

	 * Mime Types

	 **/

	function velocityautomotive_mime_types($mimes) {
		$mimes["svg"] = "image/svg+xml";

		return $mimes;
	}

	add_filter("upload_mimes", "velocityautomotive_mime_types");
endif; //endif

add_filter('nav_menu_css_class', 'velocityautomotive_nav_class', 10, 2);

function velocityautomotive_nav_class($classes, $item) {
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'active ';
	}
	return $classes;
}

// Our Testimonial custom post type function
function create_testimonialsposttype() {

	register_post_type('testimonials',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Testimonial'),
				'singular_name' => __('Testimonial'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'testimonials'),
			'show_in_rest' => true,

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_testimonialsposttype');

// Our Velocity custom post type function
function create_velocityposttype() {

	register_post_type('velocity',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Velocity'),
				'singular_name' => __('Velocity'),
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'velocity'),
			'show_in_rest' => true,

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_velocityposttype');

// Our Team custom post type function
function create_teamposttype() {

	register_post_type('teams',
		// CPT Options
		array(
			'labels' => array(
				'name' => __('Team'),
				'singular_name' => __('Team'),
				'post_type' => 'teams',
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'teams'),
			'show_in_rest' => true,

		)
	);
}
// Hooking up our function to theme setup
add_action('init', 'create_teamposttype');

add_action('widgets_init', 'velocity_widgets_init');
function velocity_widgets_init() {
	register_sidebar(array(
		'name' => esc_html__('Sidebar Widget Area', 'velocity'),
		'id' => 'primary-widget-area',
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h4 class="widget-title">',
		'after_title' => '</h4>',
	));
}

function blog_scripts() {
	// Register the script
	wp_register_script('custom-script', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'), false, true);

	// Enqueued script with localized data.
	wp_enqueue_script('custom-script');
}
add_action('wp_enqueue_scripts', 'blog_scripts');

add_action('wp_ajax_load_posts_by_ajax', 'load_posts_by_ajax_callback');
add_action('wp_ajax_nopriv_load_posts_by_ajax', 'load_posts_by_ajax_callback');

/*function load_posts_by_ajax_callback() {
check_ajax_referer('load_more_posts', 'security');
$args = array(
'post_type' => 'post',
'post_status' => 'publish',
'posts_per_page' => '5',
'paged' => $_POST['page'],
);
$blog_posts = new WP_Query($args);
?>

<?php if ($blog_posts->have_posts()): ?>
<?php while ($blog_posts->have_posts()): $blog_posts->the_post();?>
<article class="grid-item" id="blog-posts">
<a href="<?php echo the_permalink(); ?>"></a>
<?php the_post_thumbnail();?>
<header class="entry-header">
<h1 class="entry-title"><?php the_title();?></h1>
</header>
<div class="entry-content">
<p><?php $content = get_the_content();

$content = wp_strip_all_tags($content);

echo substr($content, 0, 250);
?></p>
</div>
<a href="<?php the_permalink();?>" class="btn btn-primary">Read
More</a>
</article>
<?php endwhile;?>
<?php wp_reset_postdata();?>
<?php endif;?>
<?php
wp_die();
}*/

/*function bsubash_load_more_scripts() {
wp_enqueue_script('jquery');
wp_register_script('loadmore_script', get_stylesheet_directory_uri() . '/js/custom.js', array('jquery'));
wp_localize_script('loadmore_script', 'loadmore_params', array(
'ajaxurl' => admin_url('admin-ajax.php'),
));

wp_enqueue_script('loadmore_script');
}

add_action('wp_enqueue_scripts', 'bsubash_load_more_scripts');

function bsubash_loadmore_ajax_handler() {
$type = $_POST['type'];
$category = isset($_POST['category']) ? $_POST['category'] : '';
$args['paged'] = $_POST['page'] + 1;
$args['post_status'] = 'publish';
$args['posts_per_page'] = $_POST['limit'];
if ($type == 'post') {
$args['category_name'] = $category;
}
query_posts($args);
if (have_posts()):
while (have_posts()): the_post();
//write your single post card
the_title();
the_excerpt();
endwhile;
endif;
die;
}
add_action('wp_ajax_loadmore', 'bsubash_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'bsubash_loadmore_ajax_handler');*/
function myplugin_ajaxurl() {

	echo '<script type="text/javascript">
           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
         </script>';
}
add_action('wp_head', 'myplugin_ajaxurl');

function more_post_ajax() {

	$ppp = (isset($_POST["ppp"])) ? $_POST["ppp"] : 10;
	$page = (isset($_POST['pageNumber'])) ? $_POST['pageNumber'] : 0;

	$args = array(
		'suppress_filters' => true,
		'post_type' => 'post',
		'posts_per_page' => $ppp,
		'paged' => $page,
		'cat' => isset($_POST['category']) ? $_POST['category'] : '',
	);

// query is made
	$loop = new WP_Query($args);
	if ($loop->have_posts()):
		ob_start();

		?>
																										<!-- loop start -->
							<?php while ($loop->have_posts()): $loop->the_post();
			$content = get_the_content();
			$content = wp_strip_all_tags($content);
			$content = substr($content, 0, 250);
			?>
																					<article class="grid-item" id="blog-posts"><a href="<?php echo get_the_permalink(); ?>"><?php the_post_thumbnail();?></a>
																						<header class="entry-header">
																							<h1 class="entry-title"><?php echo get_the_title(); ?></h1>
																						</header>
																						<div class="entry-content">
																							<p><?php echo $content . "[...]"; ?></p>
																						</div>
																						<a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary">Read More</a>
																					</article>
																				<?php endwhile;?>
							<!-- loop end -->
							<?php else: ?>
		<p> Nothing found! </p>
	<?php endif;?>

<?php

	$output_string = ob_get_contents();
	ob_end_clean();
	wp_reset_postdata();
	echo json_encode(array(
		"hasmore" => $page * $ppp < $loop->found_posts,
		'html' => $output_string,
	));
	exit;
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

/*add_action('wpcf7_mail_sent', function ($cf7) {
// Run code after the email has been sent
$wpcf = WPCF7_ContactForm::get_current();
$wpccfid = $wpcf->id;
// if you wanna check the ID of the Form $wpcf->id
if ('7' == $wpccfid) {
// Change 123 to the ID of the form
echo '
<div class="modal fade in formids" id="myModal2" role="dialog" style="display:block;" tabindex="-1">
<div class="modal-dialog">

<!-- Modal content-->
<div class="modal-content no_pad text-center">
<button type="button" class="close" data-dismiss="modal">&times;</button>
<div class="modal-header heading">
<h3 class="modal-title">Message Sent!</b></h3>
</div>
<div class="modal-body">

<div class="thanku_outer define_float text-center">
<h3>Thank you for getting in touch!</h3>
</div>
</div>
<div class="modal-footer">
</div>
</div>

</div>
</div>
';
}
});*/


add_action('wp_footer', 'mycustom_wp_footer');

function mycustom_wp_footer() 
{
	?>
    <script type="text/javascript">
         document.addEventListener( 'wpcf7mailsent', function( event ) {
         if ( '7' == event.detail.contactFormId ) { // Change 123 to the ID of the form
         jQuery('.btn btn-light btn-outline btn-roundeded').modal('show'); //this is the bootstrap modal popup id
       }
        }, false );
    </script>

    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer
    src="//js.hs-scripts.com/7814452.js"></script>
    <!-- End of HubSpot Embed Code -->

    <!-- For active jivo chat in site -->
    <script src="//code-eu1.jivosite.com/widget/3tnR0PWnkD" async></script>

<?php  } ?>



<?php 

//For add scripts in head part
function mycustom_wp_header() 
{ 
	?>
    <!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-5VBCWB2LP4"></script>

	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());
	gtag('config', 'G-5VBCWB2LP4');
	</script>

<?php }
// Add hook for admin <head></head>
add_action( 'admin_head', 'mycustom_wp_header' );
// Add hook for front-end <head></head>
add_action( 'wp_head', 'mycustom_wp_header' );