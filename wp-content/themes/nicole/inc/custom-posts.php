<?php

// Register SERVIÇOS
function Serviços() {

	$labels = array(
		'name'                  => _x( 'Serviços', 'Post Type General Name', 'code-starter' ),
		'singular_name'         => _x( 'Serviço', 'Post Type Singular Name', 'code-starter' ),
		'menu_name'             => __( 'Serviços & Produtos', 'code-starter' ),
		'name_admin_bar'        => __( 'Serviços', 'code-starter' ),
		'archives'              => __( 'Item Archives', 'code-starter' ),
		'attributes'            => __( 'Item Attributes', 'code-starter' ),
		'parent_item_colon'     => __( 'Parent Item:', 'code-starter' ),
		'all_items'             => __( 'Todos os Itens', 'code-starter' ),
		'add_new_item'          => __( 'Adicionar Novo Item', 'code-starter' ),
		'add_new'               => __( 'Adicionar Novo', 'code-starter' ),
		'new_item'              => __( 'Novo Item', 'code-starter' ),
		'edit_item'             => __( 'Editar Item', 'code-starter' ),
		'update_item'           => __( 'Atualizar Item', 'code-starter' ),
		'view_item'             => __( 'Ver Item', 'code-starter' ),
		'view_items'            => __( 'Ver Itens', 'code-starter' ),
		'search_items'          => __( 'Buscar Item', 'code-starter' ),
		'not_found'             => __( 'Not found', 'code-starter' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'code-starter' ),
		'featured_image'        => __( 'Featured Image', 'code-starter' ),
		'set_featured_image'    => __( 'Set featured image', 'code-starter' ),
		'remove_featured_image' => __( 'Remove featured image', 'code-starter' ),
		'use_featured_image'    => __( 'Use as featured image', 'code-starter' ),
		'insert_into_item'      => __( 'Insert into item', 'code-starter' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'code-starter' ),
		'items_list'            => __( 'Items list', 'code-starter' ),
		'items_list_navigation' => __( 'Items list navigation', 'code-starter' ),
		'filter_items_list'     => __( 'Filter items list', 'code-starter' ),
	);
	$args = array(
		'label'                 => __( 'Serviço', 'code-starter' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'servicos', $args );

}
add_action( 'init', 'Serviços', 0 );


// Register DEPOIMENTOS
function Depoimentos() {

	$labels = array(
		'name'                  => _x( 'Depoimentos', 'Post Type General Name', 'code-starter' ),
		'singular_name'         => _x( 'Depoimento', 'Post Type Singular Name', 'code-starter' ),
		'menu_name'             => __( 'Depoimentos', 'code-starter' ),
		'name_admin_bar'        => __( 'Depoimentos', 'code-starter' ),
		'archives'              => __( 'Item Archives', 'code-starter' ),
		'attributes'            => __( 'Item Attributes', 'code-starter' ),
		'parent_item_colon'     => __( 'Parent Item:', 'code-starter' ),
		'all_items'             => __( 'Todos os Itens', 'code-starter' ),
		'add_new_item'          => __( 'Adicionar Novo Item', 'code-starter' ),
		'add_new'               => __( 'Adicionar Novo', 'code-starter' ),
		'new_item'              => __( 'Novo Item', 'code-starter' ),
		'edit_item'             => __( 'Editar Item', 'code-starter' ),
		'update_item'           => __( 'Atualizar Item', 'code-starter' ),
		'view_item'             => __( 'Ver Item', 'code-starter' ),
		'view_items'            => __( 'Ver Itens', 'code-starter' ),
		'search_items'          => __( 'Buscar Item', 'code-starter' ),
		'not_found'             => __( 'Not found', 'code-starter' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'code-starter' ),
		'featured_image'        => __( 'Featured Image', 'code-starter' ),
		'set_featured_image'    => __( 'Set featured image', 'code-starter' ),
		'remove_featured_image' => __( 'Remove featured image', 'code-starter' ),
		'use_featured_image'    => __( 'Use as featured image', 'code-starter' ),
		'insert_into_item'      => __( 'Insert into item', 'code-starter' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'code-starter' ),
		'items_list'            => __( 'Items list', 'code-starter' ),
		'items_list_navigation' => __( 'Items list navigation', 'code-starter' ),
		'filter_items_list'     => __( 'Filter items list', 'code-starter' ),
	);
	$args = array(
		'label'                 => __( 'Depoimento', 'code-starter' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'depoimento', $args );

}
add_action( 'init', 'Depoimentos', 0 );


// Register EVENTOS
function Eventos() {

	$labels = array(
		'name'                  => _x( 'Eventos', 'Post Type General Name', 'code-starter' ),
		'singular_name'         => _x( 'Evento', 'Post Type Singular Name', 'code-starter' ),
		'menu_name'             => __( 'Eventos', 'code-starter' ),
		'name_admin_bar'        => __( 'Eventos', 'code-starter' ),
		'archives'              => __( 'Item Archives', 'code-starter' ),
		'attributes'            => __( 'Item Attributes', 'code-starter' ),
		'parent_item_colon'     => __( 'Parent Item:', 'code-starter' ),
		'all_items'             => __( 'Todos os Itens', 'code-starter' ),
		'add_new_item'          => __( 'Adicionar Novo Item', 'code-starter' ),
		'add_new'               => __( 'Adicionar Novo', 'code-starter' ),
		'new_item'              => __( 'Novo Item', 'code-starter' ),
		'edit_item'             => __( 'Editar Item', 'code-starter' ),
		'update_item'           => __( 'Atualizar Item', 'code-starter' ),
		'view_item'             => __( 'Ver Item', 'code-starter' ),
		'view_items'            => __( 'Ver Itens', 'code-starter' ),
		'search_items'          => __( 'Buscar Item', 'code-starter' ),
		'not_found'             => __( 'Not found', 'code-starter' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'code-starter' ),
		'featured_image'        => __( 'Featured Image', 'code-starter' ),
		'set_featured_image'    => __( 'Set featured image', 'code-starter' ),
		'remove_featured_image' => __( 'Remove featured image', 'code-starter' ),
		'use_featured_image'    => __( 'Use as featured image', 'code-starter' ),
		'insert_into_item'      => __( 'Insert into item', 'code-starter' ),
		'uploaded_to_this_item' => __( 'Uploaded to this item', 'code-starter' ),
		'items_list'            => __( 'Items list', 'code-starter' ),
		'items_list_navigation' => __( 'Items list navigation', 'code-starter' ),
		'filter_items_list'     => __( 'Filter items list', 'code-starter' ),
	);
	$args = array(
		'label'                 => __( 'Evento', 'code-starter' ),
		'labels'                => $labels,
		'supports'              => array( 'title' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'evento', $args );

}
add_action( 'init', 'Eventos', 0 );
