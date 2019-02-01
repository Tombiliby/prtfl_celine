<?php
/** 
 * Add support for titles
 */
add_theme_support( 'title-tag' );
/** 
 * Add support for featured images 
 */
add_theme_support( 'post-thumbnails' );
/**
 * Change more excerpt
 */
function new_excerpt_more( $more ) {
	return '...';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );
/** 
 * Add Categories for attachments
 */
function add_categories_for_attachments() {
	register_taxonomy_for_object_type( 'category', 'attachment' );
}
add_action( 'init' , 'add_categories_for_attachments' );
/**
 * Custom length for the_excerpt 
 */  
function custom_excerpt_length() {
	if ( is_front_page() ) {
		return 300;
	} else {
		return 300;
	}
}
add_filter('excerpt_length', 'custom_excerpt_length');
/** 
 * Support search form
 */
add_theme_support( 'html5', array( 'search-form' ) );
/** 
 * Change 'more' link
 */
function modify_read_more_link() {
	return '<p class="right-text"><a class="button" href="' . get_permalink() . '">Read More</a></p>';
}
add_filter( 'the_content_more_link', 'modify_read_more_link' );
/** 
 * Include navigation menu
 */
function register_my_menu() {
  register_nav_menu('nav-menu',__( 'Navigation Menu' ));
}
add_action( 'init', 'register_my_menu' );
/** 
 * jQuery to the bottom
 */
function starter_scripts() {
	wp_deregister_script( 'jquery' );
	wp_enqueue_style( 'starter-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'starter_scripts' );
/** 
 *  Add stylesheets
 */
//function oblate_scripts() {
//	wp_dequeue_style( 'starter-style' );
//	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.css?01-15-2019' ); 
//	wp_enqueue_script( 'prism', get_template_directory_uri() . '/js/prism.js', array(), '1.1.0', true );
//	wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array(), '1.2.0', true );
//}
//add_action( 'wp_enqueue_scripts', 'oblate_scripts' );
 
/** 
 * Google Fonts
 */
//function load_fonts() {
//	wp_register_style( 'All', '//fonts.googleapis.com/css?family=Nunito:400,600,700|Roboto+Mono' );
//	wp_register_style('FontAwesome', '//use.fontawesome.com/releases/v5.0.13/css/all.css');
//	wp_enqueue_style( 'All' );
//	wp_enqueue_style( 'FontAwesome' );
//}
//add_action('wp_print_styles', 'load_fonts'); 
// Disable XML RPC
add_filter('xmlrpc_enabled', '__return_false');
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
function insert_fb_in_head() {
	global $post;
	if ( !is_singular()) return; 
	
	$meta = strip_tags($post->post_content);
	$meta = strip_shortcodes($post->post_content);
	$meta = str_replace(array("\n", "\r", "\t"), ' ', $meta);
	$meta = substr($meta, 0, 255);    
	$meta = strip_tags($meta);
	$title = htmlspecialchars(get_the_title());

    
    // basics, same for all    
    echo '<meta property="og:locale" content="en_US">' . "\n";
    echo '<meta property="og:type" content="article">' . "\n";
    echo '<meta name="twitter:creator" content="@taniarascia">' . "\n";
    echo '<meta name="twitter:site" content="@taniarascia">' . "\n";
    echo '<meta name="twitter:domain" content="Tania Rascia">' . "\n";
    echo '<meta property="og:site_name" content="Tania Rascia">' . "\n";
    // title, URL, description
    echo '<meta property="og:title" content="' . $title . '">' . "\n";
    echo '<meta property="og:url" content="' . get_permalink() . '">' . "\n";
    echo '<meta property="og:description" content="' . $meta . '">' . "\n";
    echo '<meta name="description" content="' . $meta . '">' . "\n";
	
}
add_action( 'wp_head', 'insert_fb_in_head', 5 );
/** 
 * Escape HTML
 */
function escapeHTML($arr) {
	// last params (double_encode) was added in 5.2.3
	if (version_compare(PHP_VERSION, '5.2.3') >= 0) {
	
		$output = htmlspecialchars($arr[2], ENT_NOQUOTES, get_bloginfo('charset'), false); 
	}
	else {
		$specialChars = array(
			'&' => '&amp;',
			'<' => '&lt;',
			'>' => '&gt;'
		);
		// decode already converted data
		$data = htmlspecialchars_decode($arr[2]);
		// escapse all data inside <pre>
		$output = strtr($data, $specialChars);
	}
	if (! empty($output)) {
		return  $arr[1] . $output . $arr[3];
	}	else 	{
		return  $arr[1] . $arr[2] . $arr[3];
	}	
}
function filterCode($data) {
	//$modifiedData = preg_replace_callback('@(<pre.*>)(.*)(<\/pre>)@isU', 'escapeHTML', $data);
	$modifiedData = preg_replace_callback('@(<code.*>)(.*)(<\/code>)@isU', 'escapeHTML', $data);
	$modifiedData = preg_replace_callback('@(<tt.*>)(.*)(<\/tt>)@isU', 'escapeHTML', $modifiedData);
 
	return $modifiedData;
}
add_filter( 'content_save_pre', 'filterCode', 9 );
add_filter( 'excerpt_save_pre', 'filterCode', 9 );
// Disable W3TC footer comment for all users
add_filter( 'w3tc_can_print_comment', function( $w3tc_setting ) { return false; }, 10, 1 );
/**
 * Remove WP embed script
 */
function speed_stop_loading_wp_embed() {
	if (!is_admin()) {
		wp_deregister_script('wp-embed');
	}
}
add_action('init', 'speed_stop_loading_wp_embed');
///**
// * Remove contact form scripts 
// */
//function load_contactform7_on_specific_page() {
//   //  Edit page IDs here
//   if ( !is_page( 'contact' ) ) {		
//      wp_dequeue_script('contact-form-7'); // Dequeue JS Script file.
//      wp_dequeue_style('contact-form-7');  // Dequeue CSS file. 
//   }
//}
//add_action( 'wp_enqueue_scripts', 'load_contactform7_on_specific_page' );
/**
 * Remove Query String from Static Resources 
 */
function remove_cssjs_ver( $src ) {
    if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src );
    return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );
/**
 * Remove Query String from Static Resources 
 */
function remove_cssjs_ver2( $src ) {
	if( strpos( $src, 'ver=' ) )
		$src = remove_query_arg( 'ver', $src );
	return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver2', 10, 2 );
/**
 * Filter search
 */
function exclude_pages($query) {
if ($query->is_search) {
	$query->set('post_type', 'post');
}
 return $query;
}
add_filter('pre_get_posts','exclude_pages');
/** 
 * Work type
 */
function create_post_work() {
	register_post_type('work', // Register Custom Post Type
		array(
		'labels' => array(
			'name' => __('Works', 'Celine Tricart'), // Rename these to suit
		),
		'public' => true,
		'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
		'has_archive' => false,
		'supports' => array(
			//'title',
			'custom-fields'
			//'thumbnail'
		), // Go to Dashboard Custom HTML5 Blank post for supports
		'can_export' => true, // Allows export in Tools > Export
		'taxonomies' => array(
				'category'
		) // Add Category and Post Tags support
	));
}
add_action('init', 'create_post_work'); // Add our work type


/*
* On utilise une fonction pour créer notre custom post type 'Séries TV'
*/
// 
// function wpm_custom_post_type() {
// 
// 	// On rentre les différentes dénominations de notre custom post type qui seront affichées dans l'administration
// 	$labels = array(
// 		// Le nom au pluriel
// 		'name'                => _x( 'Landing pages', 'Post Type General Name'),
// 		// Le nom au singulier
// 		'singular_name'       => _x( 'Landing page', 'Post Type Singular Name'),
// 		// Le libellé affiché dans le menu
// 		'menu_name'           => __( 'Landing page'),
// 		// Les différents libellés de l'administration
// 		'all_items'           => __( 'All landing pages'),
// 		'view_item'           => __( 'Voir les séries TV'),
// 		'add_new_item'        => __( 'Add new landing page'),
// 		'add_new'             => __( 'Add landing page'),
// 		'edit_item'           => __( 'Edit landing page'),
// 		'update_item'         => __( 'Update landing page'),
// 		'search_items'        => __( 'Search a landing page'),
// 		'not_found'           => __( 'Not found'),
// 		'not_found_in_trash'  => __( 'Not found in trash'),
// 	);
// 	
// 	// On peut définir ici d'autres options pour notre custom post type
// 	
// 	$args = array(
// 		'label'               => __( 'Landings page'),
// 		'description'         => __( 'Landing page'),
// 		'labels'              => $labels,
// 		// On définit les options disponibles dans l'éditeur de notre custom post type ( un titre, un auteur...)
// 		'supports'            => array('revisions', 'custom-fields', ),
// 		/* 
// 		* Différentes options supplémentaires
// 		*/	
// 		'hierarchical'        => false,
// 		'public'              => true,
// 		'has_archive'         => true,
// 		'rewrite'			  => array( 'slug' => 'landing-page'),
// 
// 	);
// 	
// 	// On enregistre notre custom post type qu'on nomme ici "serietv" et ses arguments
// 	register_post_type( 'landing-page', $args );
// 
// }
// 
// add_action( 'init', 'wpm_custom_post_type', 0 );

function remove_menus() {
	remove_menu_page( 'edit.php' );                   //Posts
}
add_action( 'admin_menu', 'remove_menus' );