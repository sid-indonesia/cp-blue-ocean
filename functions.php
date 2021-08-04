<?php
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

require get_template_directory() . '/inc/extras.php';

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true ); // default Featured Image dimensions (cropped)
 
    // additional image sizes
    // delete the next line if you do not need additional image sizes
//     add_image_size( 'category-thumb', 300, 9999 ); // 300 pixels wide (and unlimited height)
 }

function register_navwalker(){
	require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

if ( ! file_exists( get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'THEMENAME' ),
) );


//register Sidebar
if (function_exists('register_sidebar')) {
	register_sidebar( array(
		'id'			=>	'sidebar-widget',
		'name'			=>	'Sidebar Utama',
		'description'	=>	'Sidebar Samping',
		'before_widget'	=>	'<div class="card border-primary mt-3">',
		'after_widget'	=>	'</div></div>',
		'before_title'	=>	'<div class="card-header text-primary">',
		'after_title'	=>	'</div><div class="card-body text-primary">',
	));
}

// Function page Navigation
require ('inc/wp_bootstrap_pagination.php');
 
//==========Call Partial Template===============//
//Get slider
function get_Slider(){
	require_once get_template_directory() . '/template-parts/slider.php';
}
//Get Vision And Mission
function get_vision_mission(){
	require_once get_template_directory() . '/template-parts/vision_mission.php';
}
function get_Activites(){
	require_once get_template_directory() . '/template-parts/Our_activities.php';
}
function get_Impact(){
	require_once get_template_directory() . '/template-parts/Our_impact.php';
}

function get_News(){
	require_once get_template_directory() . '/template-parts/Our_news.php';
}
add_shortcode( 'news_sid', 'get_News' );
function get_News2(){
	require_once get_template_directory() . '/template-parts/Our_news2.php';
}
add_shortcode( 'news_sid', 'get_News2' );
function get_Collaborators(){
	require_once get_template_directory() . '/template-parts/Our_collaborator.php';
}
add_shortcode( 'summit_collaborator', 'get_Collaborators' );
function get_Career(){
	require_once get_template_directory() . '/template-parts/career.php';
}
add_shortcode( 'career_sid', 'get_Career' );


function wp_bootstrap_main_nav() 
{
    // Display the WordPress menu if available
    wp_nav_menu( 
        array( 
				'container'         => 'false',
				'menu_id'			=> 'nav',
                'menu_class'        => 'navbar-nav animated',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker(),
        )
    );
}



// Function add class to comments
require ('inc/wp_comment_walker.php');
function add_class_reply($link, $args, $comment, $post){
	return str_replace("class='comment-reply-link'", "class='comment-reply-link btn btn-outline-primary btn-sm'", $link);
}
add_filter('comment_reply_link', 'add_class_reply', 420, 4);

function tn_custom_excerpt_length( $length ) {
	return 30;
	}
add_filter( 'excerpt_length', 'tn_custom_excerpt_length', 999 );

function remove_image_size_attributes( $html ) {
return preg_replace( '/(width|height)="\d*"/', '', $html );
}

// Remove image size attributes from post thumbnails
add_filter( 'post_thumbnail_html', 'remove_image_size_attributes' );

function myplugin_settings() {  
    // Add tag metabox to page
    register_taxonomy_for_object_type('post_tag', 'page'); 
    // Add category metabox to page
    register_taxonomy_for_object_type('category', 'page');  
}
 // Add to the admin_init hook of your theme functions.php file 
add_action( 'init', 'myplugin_settings' );
