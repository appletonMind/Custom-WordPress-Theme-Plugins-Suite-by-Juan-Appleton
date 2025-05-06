<?php
/*
    Plugin Name: appletonseoagenture - bebertungen
    Plugin URI: http://appletoninteractive.ch
    Description: Beitragstyp hinzufügen appletonseoagenture
    Version: 1.0.0
    Author: Juan Pablo Appleton
    Author URI: http://appletoninteractive.ch
    Text Domain: appletonseoagenture
*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function appletonseoagenture_meinung_post_type() {

	$labels = array(
		'name'                  => _x( 'bebertungenappletonseoagenture', 'Post Type General Name', 'appletonseoagenture' ),
		'singular_name'         => _x( 'bebertunge', 'Post Type Singular Name', 'appletonseoagenture' ),
		'menu_name'             => __( 'bebertungen appletonseoagenture', 'appletonseoagenture' ),
		'name_admin_bar'        => __( 'bebertungen', 'appletonseoagenture' ),
		'archives'              => __( 'archives', 'appletonseoagenture' ),
		'attributes'            => __( 'Attribute', 'appletonseoagenture' ),
		'parent_item_colon'     => __( 'Elternklasse', 'appletonseoagenture' ),
		'all_items'             => __( 'alle bebertungen', 'appletonseoagenture' ),
		'add_new_item'          => __( 'bebertungen hinzufügen', 'appletonseoagenture' ),
		'add_new'               => __( 'bebertungen hinzufügen', 'appletonseoagenture' ),
		'new_item'              => __( 'bebertungen hinzufügen', 'appletonseoagenture' ),
		'edit_item'             => __( 'bebertungen bearbeiten', 'appletonseoagenture' ),
		'update_item'           => __( 'Update-bebertungen', 'appletonseoagenture' ),
		'view_item'             => __( 'siehe bebertungen', 'appletonseoagenture' ),
		'view_items'            => __( 'siehe bebertungen', 'appletonseoagenture' ),
		'search_items'          => __( 'bebertungen suchen', 'appletonseoagenture' ),
		'not_found'             => __( 'nicht gefunden', 'appletonseoagenture' ),
		'not_found_in_trash'    => __( 'nicht gefunden in trash', 'appletonseoagenture' ),
		'featured_image'        => __( 'herausragendes Bild', 'appletonseoagenture' ),
		'set_featured_image'    => __( 'Beitragsbild speichern', 'appletonseoagenture' ),
		'remove_featured_image' => __( 'Beitragsbild entfernen', 'appletonseoagenture' ),
		'use_featured_image'    => __( 'als Beitragsbild verwenden', 'appletonseoagenture' ),
		'insert_into_item'      => __( 'bebertungen einfügen', 'appletonseoagenture' ),
		'uploaded_to_this_item' => __( 'bebertungen hinzufügen', 'appletonseoagenture' ),
		'items_list'            => __( 'bebertungenliste', 'appletonseoagenture' ),
		'items_list_navigation' => __( 'bebertungennavigation', 'appletonseoagenture' ),
		'filter_items_list'     => __( 'Klassen filtern', 'appletonseoagenture' ),
	);
	$args = array(
		'label'                 => __( 'bebertungen', 'appletonseoagenture' ),
		'description'           => __( 'appletonseoagenture-bebertungen', 'appletonseoagenture'),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 6,
        'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'meinung_apple', $args );

}
add_action( 'init', 'appletonseoagenture_meinung_post_type', 0 );
