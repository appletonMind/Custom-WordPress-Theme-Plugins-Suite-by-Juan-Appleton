<?php
/*
    Plugin Name: appletonseoagenture - Arbeitere
    Plugin URI: http://appletoninteractive.ch
    Description: Beitragstyp hinzufügen appletonseoagenture
    Version: 1.0.0
    Author: Juan Pablo Appleton
    Author URI: http://appletoninteractive.ch
    Text Domain: appletonseoagenture
*/

if(!defined('ABSPATH')) die();

// Registrar Custom Post Type
function appletonseoagenture_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'arbeitereappletonseoagenture', 'Post Type General Name', 'appletonseoagenture' ),
		'singular_name'         => _x( 'arbeiter', 'Post Type Singular Name', 'appletonseoagenture' ),
		'menu_name'             => __( 'arbeitere appletonseoagenture', 'appletonseoagenture' ),
		'name_admin_bar'        => __( 'arbeiter', 'appletonseoagenture' ),
		'archives'              => __( 'archives', 'appletonseoagenture' ),
		'attributes'            => __( 'Attribute', 'appletonseoagenture' ),
		'parent_item_colon'     => __( 'Elternklasse', 'appletonseoagenture' ),
		'all_items'             => __( 'alle Arbeiter', 'appletonseoagenture' ),
		'add_new_item'          => __( 'Arbeiter hinzufügen', 'appletonseoagenture' ),
		'add_new'               => __( 'Arbeiter hinzufügen', 'appletonseoagenture' ),
		'new_item'              => __( 'Arbeiter hinzufügen', 'appletonseoagenture' ),
		'edit_item'             => __( 'Arbeiter bearbeiten', 'appletonseoagenture' ),
		'update_item'           => __( 'Update-Arbeiter', 'appletonseoagenture' ),
		'view_item'             => __( 'siehe Arbeiter', 'appletonseoagenture' ),
		'view_items'            => __( 'siehe Arbeitere', 'appletonseoagenture' ),
		'search_items'          => __( 'Arbeiter suchen', 'appletonseoagenture' ),
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
		'label'                 => __( 'Arbeiter', 'appletonseoagenture' ),
		'description'           => __( 'appletonseoagenture-Mitarbeiter', 'appletonseoagenture'),
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
	register_post_type( 'arbeitere_apple', $args );

}
add_action( 'init', 'appletonseoagenture_clases_post_type', 0 );
