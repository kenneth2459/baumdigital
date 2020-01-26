<?php 

add_action('init', 'register_custom_types');

function register_custom_types() {

	  $labels_festivales = array(
		'name' => _x('Festivales', 'post type general name'),
		'singular_name' => _x('Festivales', 'post type singular name'),
		'all_items' => __('Ver todos los Festivales o conciertos'),
		'add_new' => _x('Agregar nuevo', 'Festival o concierto'),
		'add_new_item' => __('Agregar nuevo Festival o concierto '),
		'edit_item' => __('Editar Festival o concierto'),
		'new_item' => __('Nuevo Festival o concierto'),
		'view_item' => __('Ver Festival o concierto'),
		'search_items' => __('Buscar Festival o concierto'),
		'not_found' =>  __('No hay Festival o concierto'),
		'not_found_in_trash' => __('No hay Festival o concierto en la papelera de reciclaje'),
		'parent_item_colon' => ''
	);

	$args_festivales = array(
		'labels'             => $labels_festivales,
		'description'        => 'Festival o concierto',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'query_var'          => true,
		'menu_icon'          => null,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'hierarchical'       => true,
		'menu_position'      => null,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => true,
		//'taxonomies'         => array('category'),	
		'rewrite'            => array('slug' => 'festivales'), 
		'supports'           => array('title', 'editor', 'excerpt', 'thumbnail', 'custom-fields', 'page-attributes' ),
		'has_archive'        => true,
	  );

	  register_post_type( 'festivales' , $args_festivales );


	flush_rewrite_rules();
}

add_action( 'init', 'eventos_artista_taxonomias', 0 );  


function eventos_artista_taxonomias() {
  
  $labels = array(
    'name'             => _x( 'Eventos', 'taxonomy general name' ),
    'singular_name'    => _x( 'Evento', 'taxonomy singular name' ),
    'search_items'     =>  __( 'Buscar por Evento' ),
    'all_items'        => __( 'Todos los Evento' ),
    'parent_item'      => __( 'Evento padre' ),
    'parent_item_colon'=> __( 'Evento padre:' ),
    'edit_item'        => __( 'Editar Evento' ),
    'update_item'      => __( 'Actualizar Evento' ),
    'add_new_item'     => __( 'Añadir nuevo Evento' ),
    'new_item_name'    => __( 'Nombre del nuevo Evento' ),
  );
  
  register_taxonomy( 'evento', array( 'festivales' ), array(
    'hierarchical'       => true,
    'labels'             => $labels,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'evento' ),
  ));


  $labels = array(
    'name'             => _x( 'Artistas', 'taxonomy general name' ),
    'singular_name'    => _x( 'Artista', 'taxonomy singular name' ),
    'search_items'     =>  __( 'Buscar por Artista' ),
    'all_items'        => __( 'Todos los Artista' ),
    'parent_item'      => __( 'Artista padre' ),
    'parent_item_colon'=> __( 'Artista padre:' ),
    'edit_item'        => __( 'Editar Artista' ),
    'update_item'      => __( 'Actualizar Artista' ),
    'add_new_item'     => __( 'Añadir nuevo Artista' ),
    'new_item_name'    => __( 'Nombre del nuevo Artista' ),
  );
  
  
  register_taxonomy( 'artista', array( 'festivales' ), array(
    'hierarchical'       => true,
    'labels'             => $labels,
    'show_ui'            => true,
    'query_var'          => true,
    'rewrite'            => array( 'slug' => 'artista' ),
  ));
  
  
  
}
?>