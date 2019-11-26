<?php

// Tema Destekleri
add_theme_support( 'post-thumbnails', array( 'post', 'sliders' ) );
add_theme_support( 'title-tag' );

// Yardımcı Fonksiyonlar
if ( ! function_exists( 'base_url' ) ) {
	function base_url( $url = "" ) {
		return get_template_directory_uri() . "/" . $url;
	}
}

$role_object = get_role( 'editor' );
$role_object->add_cap( 'edit_theme_options' );

// Menuler
add_action( 'init', function () {
	register_nav_menus(
		array(
			'primary' => __( 'Header Menu' ),
			'top-menu' => __( 'Top Menu' )
		)
	);
});


// Wordpress kaynak kodda silme işlemleri
function kaynakKodSil() {
	remove_action( 'wp_head', 'wp_resource_hints', 2 );
	remove_action( 'wp_head', 'wp_generator' );
	remove_action( 'wp_head', 'rsd_link' );
	remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'wp_shortlink_wp_head' );
	remove_action( 'wp_head', 'rest_output_link_wp_head' );
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	remove_action( 'wp_head', 'feed_links', 2 );
	remove_action( 'wp_head', 'index_rel_link' );
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head' );
	remove_action( 'wp_head', 'rel_canonical' );
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links', 10 );
	remove_action( 'wp_head', 'wp_oembed_add_host_js' );
	remove_action( 'rest_api_init', 'wp_oembed_register_route' );
	remove_filter( 'oembed_dataparse', 'wp_filter_oembed_result', 10 );

	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );

	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
}

kaynakKodSil();

add_filter( 'the_content', 'remove_empty_p', 20, 1 );
function remove_empty_p( $content ) {
	$content = force_balance_tags( $content );

	return preg_replace( '#<p>\s*+(<br\s*/*>)?\s*</p>#i', '', $content );
}

function remove_gutenberg_styles() {
	wp_dequeue_style( 'wp-block-library' );
}

add_action( 'wp_enqueue_scripts', 'remove_gutenberg_styles', 100 );


function kisalt( $kelime, $str = 10 ) {

	if ( strlen( $kelime ) > $str ) {
		if ( function_exists( "mb_substr" ) ) {
			$kelime = mb_substr( $kelime, 0, $str, "UTF-8" ) . '..';
		} else {
			$kelime = substr( $kelime, 0, $str ) . '..';
		}
	}

	return $kelime;
}


function categoryNewUrl( $url ) {
	return site_url() . "/k/" . $url;
}

function ncoPostImage( $id ) {

	if ( get_the_post_thumbnail_url( $id ) !== false ) {
		$haberResimUrl = get_the_post_thumbnail_url( $id );
	} else {
		$haberResimUrl = base_url( 'assets/img/resimyok.jpg' );
	}

	return $haberResimUrl;
}

function ncoPostDate( $postDate ) {
	$postDate    = explode( "/", $postDate );
	return $postDate;
}

function ncoAylar( $ay ) {

	$aylar = array(
		1  => "Ocak",
		2  => "Şubat",
		3  => "Mart",
		4  => "Nisan",
		5  => "Mayıs",
		6  => "Hazrn",
		7  => "Temmz",
		8  => "Ağsts",
		9  => "Eylül",
		10 => "Ekim",
		11 => "Kasım",
		12 => "Aralk"
	);

	$res = ltrim( $ay, '0' );

	return $aylar[ $res ];

}


add_filter( 'manage_edit-post_columns', 'add_new_columns' );
add_filter( 'manage_edit-post_sortable_columns', 'register_sortable_columns' );
add_filter( 'request', 'hits_column_orderby' );
add_action( 'manage_posts_custom_column', 'custom_columns' );

function add_new_columns( $columns ) {

	$column_meta = array( 'slider_sirasi' => 'Slider Sırası' );
	$columns     = array_slice( $columns, 0, 6, true ) + $column_meta + array_slice( $columns, 6, null, true );

	return $columns;

}

// Register the columns as sortable
function register_sortable_columns( $columns ) {
	$columns['slider_sirasi'] = 'slider_sirasi';

	return $columns;
}

//Add filter to the request to make the hits sorting process numeric, not string
function hits_column_orderby( $vars ) {
	if ( isset( $vars['orderby'] ) && 'slider_sirasi' == $vars['orderby'] ) {
		$vars = array_merge( $vars, array(
			'meta_key' => 'slider_sirasi',
			'orderby'  => 'meta_value_num',
		) );
	}

	return $vars;
}


function custom_columns( $column ) {

	global $post;

	switch ( $column ) {
		case 'slider_sirasi':
			$hits = get_post_meta( $post->ID, 'slider_sirasi', true );
			echo (int) $hits;
			break;
	}
}


function nco_strtotime($date){
	$date = str_replace('/', '-', $date);
	return date('Y-m-d', strtotime($date));
}