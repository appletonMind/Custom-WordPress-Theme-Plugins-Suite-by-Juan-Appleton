<?php
/*
    Plugin Name: appletonseoagenture - Kunden
    Plugin URI: http://appletoninteractive.ch
    Description: Beitragstyp hinzufügen appletonseoagenture
    Version: 1.0.0
    Author: Juan Pablo Appleton
    Author URI: http://appletoninteractive.ch
    Text Domain: appletonseoagenture
*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function appletonseoagenture_kunden_post_type() {

	$labels = array(
		'name'                  => _x( 'Kundenappletonseoagenture', 'Post Type General Name', 'appletonseoagenture' ),
		'singular_name'         => _x( 'kunde', 'Post Type Singular Name', 'appletonseoagenture' ),
		'menu_name'             => __( 'kunden appletonseoagenture', 'appletonseoagenture' ),
		'name_admin_bar'        => __( 'kunden', 'appletonseoagenture' ),
		'archives'              => __( 'archives', 'appletonseoagenture' ),
		'attributes'            => __( 'Attribute', 'appletonseoagenture' ),
		'parent_item_colon'     => __( 'Elternklasse', 'appletonseoagenture' ),
		'all_items'             => __( 'alle kunden', 'appletonseoagenture' ),
		'add_new_item'          => __( 'kunden hinzufügen', 'appletonseoagenture' ),
		'add_new'               => __( 'kunden hinzufügen', 'appletonseoagenture' ),
		'new_item'              => __( 'kunden hinzufügen', 'appletonseoagenture' ),
		'edit_item'             => __( 'kunden bearbeiten', 'appletonseoagenture' ),
		'update_item'           => __( 'Update-kunden', 'appletonseoagenture' ),
		'view_item'             => __( 'siehe kunden', 'appletonseoagenture' ),
		'view_items'            => __( 'siehe kunden', 'appletonseoagenture' ),
		'search_items'          => __( 'kunden suchen', 'appletonseoagenture' ),
		'not_found'             => __( 'nicht gefunden', 'appletonseoagenture' ),
		'not_found_in_trash'    => __( 'nicht gefunden in trash', 'appletonseoagenture' ),
		'featured_image'        => __( 'herausragendes Bild', 'appletonseoagenture' ),
		'set_featured_image'    => __( 'Beitragsbild speichern', 'appletonseoagenture' ),
		'remove_featured_image' => __( 'Beitragsbild entfernen', 'appletonseoagenture' ),
		'use_featured_image'    => __( 'als Beitragsbild verwenden', 'appletonseoagenture' ),
		'insert_into_item'      => __( 'kunden einfügen', 'appletonseoagenture' ),
		'uploaded_to_this_item' => __( 'kunden hinzufügen', 'appletonseoagenture' ),
		'items_list'            => __( 'kundenliste', 'appletonseoagenture' ),
		'items_list_navigation' => __( 'kundennavigation', 'appletonseoagenture' ),
		'filter_items_list'     => __( 'Klassen filtern', 'appletonseoagenture' ),
	);
	$args = array(
		'label'                 => __( 'kunden', 'appletonseoagenture' ),
		'description'           => __( 'appletonseoagenture-kunden', 'appletonseoagenture'),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 8,
        'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'kunden_apple', $args );

}
add_action( 'init', 'appletonseoagenture_kunden_post_type', 0 );
