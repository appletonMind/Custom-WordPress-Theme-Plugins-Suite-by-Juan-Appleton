<?php
/*
    Plugin Name: appletonseoagenture - Dients
    Plugin URI: http://appletoninteractive.ch
    Description: Beitragstyp hinzufügen appletonseoagenture
    Version: 1.0.0
    Author: Juan Pablo Appleton
    Author URI: http://appletoninteractive.ch
    Text Domain: appletonseoagenture
*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function appletonseoagenture_dients_post_type() {

	$labels = array(
		'name'                  => _x( 'dientsappletonseoagenture', 'Post Type General Name', 'appletonseoagenture' ),
		'singular_name'         => _x( 'dient', 'Post Type Singular Name', 'appletonseoagenture' ),
		'menu_name'             => __( 'dients appletonseoagenture', 'appletonseoagenture' ),
		'name_admin_bar'        => __( 'dients', 'appletonseoagenture' ),
		'archives'              => __( 'archives', 'appletonseoagenture' ),
		'attributes'            => __( 'Attribute', 'appletonseoagenture' ),
		'parent_item_colon'     => __( 'Elternklasse', 'appletonseoagenture' ),
		'all_items'             => __( 'alle dients', 'appletonseoagenture' ),
		'add_new_item'          => __( 'dients hinzufügen', 'appletonseoagenture' ),
		'add_new'               => __( 'dients hinzufügen', 'appletonseoagenture' ),
		'new_item'              => __( 'dients hinzufügen', 'appletonseoagenture' ),
		'edit_item'             => __( 'dients bearbeiten', 'appletonseoagenture' ),
		'update_item'           => __( 'Update-dients', 'appletonseoagenture' ),
		'view_item'             => __( 'siehe dients', 'appletonseoagenture' ),
		'view_items'            => __( 'siehe dients', 'appletonseoagenture' ),
		'search_items'          => __( 'dients suchen', 'appletonseoagenture' ),
		'not_found'             => __( 'nicht gefunden', 'appletonseoagenture' ),
		'not_found_in_trash'    => __( 'nicht gefunden in trash', 'appletonseoagenture' ),
		'featured_image'        => __( 'herausragendes Bild', 'appletonseoagenture' ),
		'set_featured_image'    => __( 'Beitragsbild speichern', 'appletonseoagenture' ),
		'remove_featured_image' => __( 'Beitragsbild entfernen', 'appletonseoagenture' ),
		'use_featured_image'    => __( 'als Beitragsbild verwenden', 'appletonseoagenture' ),
		'insert_into_item'      => __( 'Arbeiter einfügen', 'appletonseoagenture' ),
		'uploaded_to_this_item' => __( 'Arbeiter hinzufügen', 'appletonseoagenture' ),
		'items_list'            => __( 'Arbeiterliste', 'appletonseoagenture' ),
		'items_list_navigation' => __( 'Arbeiternavigation', 'appletonseoagenture' ),
		'filter_items_list'     => __( 'Klassen filtern', 'appletonseoagenture' ),
	);
	$args = array(
		'label'                 => __( 'dients', 'appletonseoagenture' ),
		'description'           => __( 'appletonseoagenture-dients', 'appletonseoagenture'),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'hierarchical'          => true, // true = posts , false = paginas
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
        'menu_position'         => 7,
        'menu_icon'             => 'dashicons-businessperson',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'dients_apple', $args );

}
add_action( 'init', 'appletonseoagenture_dients_post_type', 0 );
