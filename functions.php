<?php 

/* Support Templates */
add_post_type_support( 'page', 'page-attributes' );

/* Featured Images */
add_theme_support( 'post-thumbnails' ); 

/* Remove Featured Image dimensions */
add_filter( 'post_thumbnail_html', 'remove_thumbnail_dimensions', 10, 3 );
function remove_thumbnail_dimensions( $html, $post_id, $post_image_id ) {
    $html = preg_replace( '/(width|height)=\"\d*\"\s/', "", $html );
    return $html;
}

/* Register Menus */
if ( function_exists( 'register_nav_menus' ) ) {
  	register_nav_menus(
  		array(
  		  'foot_menu' => 'Footer Menu',
  		  'sidebar_menu' => 'Sidebar Menu'
  		)
  	);
}

// Register Custom Post Type
function albums_post_type() {

    $labels = array(
        'name'                  => _x( 'Albums', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Album', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Albums', 'text_domain' ),
        'name_admin_bar'        => __( 'Album', 'text_domain' ),
        'archives'              => __( 'Album', 'text_domain' ),
        'parent_item_colon'     => __( 'Superior:', 'text_domain' ),
        'all_items'             => __( 'Todos', 'text_domain' ),
        'add_new_item'          => __( 'Agregar Album nuevo', 'text_domain' ),
        'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
        'new_item'              => __( 'Nuevo Album', 'text_domain' ),
        'edit_item'             => __( 'Editar Album', 'text_domain' ),
        'update_item'           => __( 'Actualizar Album', 'text_domain' ),
        'view_item'             => __( 'Ver Album', 'text_domain' ),
        'search_items'          => __( 'Buscar Album', 'text_domain' ),
        'not_found'             => __( 'No encontrado', 'text_domain' ),
        'not_found_in_trash'    => __( 'No encontrado en la Papelera', 'text_domain' ),
        'featured_image'        => __( 'Carátula del disco', 'text_domain' ),
        'set_featured_image'    => __( 'Cargar carátula', 'text_domain' ),
        'remove_featured_image' => __( 'Quitar carátula', 'text_domain' ),
        'use_featured_image'    => __( 'Usar como carátula', 'text_domain' ),
        'insert_into_item'      => __( 'Insertar en el Album', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Cargado en este Album', 'text_domain' ),
        'items_list'            => __( 'Lista de Albums', 'text_domain' ),
        'items_list_navigation' => __( 'Navegar la lista de Albums', 'text_domain' ),
        'filter_items_list'     => __( 'Filtrar Albums', 'text_domain' ),
    );
    $args = array(
        'label'                 => __( 'Album', 'text_domain' ),
        'description'           => __( 'Albums lanzados por Domus', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
        'taxonomies'            => array( 'artistas' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-audio',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'albums', $args );

}
add_action( 'init', 'albums_post_type', 0 );


// Register Custom Post Type
function gallery_post_type() {

    $labels = array(
        'name'                  => _x( 'Galerías', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Galería', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Galerías', 'text_domain' ),
        'name_admin_bar'        => __( 'Galería', 'text_domain' ),
        'archives'              => __( 'Archivo de Galerías', 'text_domain' ),
        'parent_item_colon'     => __( 'Galería superior:', 'text_domain' ),
        'all_items'             => __( 'Todas las Galerías', 'text_domain' ),
        'add_new_item'          => __( 'Agregar Galería nueva', 'text_domain' ),
        'add_new'               => __( 'Agregar nueva', 'text_domain' ),
        'new_item'              => __( 'Galería nueva', 'text_domain' ),
        'edit_item'             => __( 'Editar Galería', 'text_domain' ),
        'update_item'           => __( 'Actualizar Galería', 'text_domain' ),
        'view_item'             => __( 'Ver Galería', 'text_domain' ),
        'search_items'          => __( 'Buscar Galería', 'text_domain' ),
        'not_found'             => __( 'No encontrado', 'text_domain' ),
        'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
        'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
        'remove_featured_image' => __( 'Quitar imagen destacada', 'text_domain' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
        'insert_into_item'      => __( 'Insertar en Galería', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Cargar en esta Galería', 'text_domain' ),
        'items_list'            => __( 'Lista de Galerías', 'text_domain' ),
        'items_list_navigation' => __( 'Navegar lista de Galerías', 'text_domain' ),
        'filter_items_list'     => __( 'Filtrar lista de Galerías', 'text_domain' ),
    );
    $rewrite = array(
        'slug'                  => 'galeria',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Galería', 'text_domain' ),
        'description'           => __( 'Galerías de fotos & videos', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', ),
        'taxonomies'            => array( 'artistas' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-gallery',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'gallery', $args );

}
add_action( 'init', 'gallery_post_type', 0 );

// Register Custom Post Type
function eventos_post_type() {

    $labels = array(
        'name'                  => _x( 'Agenda de Eventos', 'Post Type General Name', 'text_domain' ),
        'singular_name'         => _x( 'Evento', 'Post Type Singular Name', 'text_domain' ),
        'menu_name'             => __( 'Agenda', 'text_domain' ),
        'name_admin_bar'        => __( 'Evento', 'text_domain' ),
        'archives'              => __( 'Archivo de eventos', 'text_domain' ),
        'parent_item_colon'     => __( 'Evento superior:', 'text_domain' ),
        'all_items'             => __( 'Todos los Eventos', 'text_domain' ),
        'add_new_item'          => __( 'Agregar Evento nuevo', 'text_domain' ),
        'add_new'               => __( 'Agregar nuevo', 'text_domain' ),
        'new_item'              => __( 'Evento nuevo', 'text_domain' ),
        'edit_item'             => __( 'Editar Evento', 'text_domain' ),
        'update_item'           => __( 'Actualizar Evento', 'text_domain' ),
        'view_item'             => __( 'Ver Evento', 'text_domain' ),
        'search_items'          => __( 'Buscar Evento', 'text_domain' ),
        'not_found'             => __( 'No encontrado', 'text_domain' ),
        'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
        'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'text_domain' ),
        'remove_featured_image' => __( 'Quitar imagen destacada', 'text_domain' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'text_domain' ),
        'insert_into_item'      => __( 'Insertar en Evento', 'text_domain' ),
        'uploaded_to_this_item' => __( 'Cargar en este Evento', 'text_domain' ),
        'items_list'            => __( 'Lista de Eventos', 'text_domain' ),
        'items_list_navigation' => __( 'Navegar lista de Eventos', 'text_domain' ),
        'filter_items_list'     => __( 'Filtrar lista de Eventos', 'text_domain' ),
    );
    $rewrite = array(
        'slug'                  => 'agenda',
        'with_front'            => true,
        'pages'                 => true,
        'feeds'                 => true,
    );
    $args = array(
        'label'                 => __( 'Evento', 'text_domain' ),
        'description'           => __( 'Agenda de eventos', 'text_domain' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail', 'excerpt'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-calendar-alt',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,        
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'page',
    );
    register_post_type( 'eventos', $args );

}
add_action( 'init', 'eventos_post_type', 0 );

// Register Custom Taxonomy
function artists_taxonomy() {

    $labels = array(
        'name'                       => _x( 'Artistas', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Artista', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Artistas', 'text_domain' ),
        'all_items'                  => __( 'Todos los Artistas', 'text_domain' ),
        'parent_item'                => __( 'Superior', 'text_domain' ),
        'parent_item_colon'          => __( 'Superior', 'text_domain' ),
        'new_item_name'              => __( 'Nombre', 'text_domain' ),
        'add_new_item'               => __( 'Agregar nuevo', 'text_domain' ),
        'edit_item'                  => __( 'Editar', 'text_domain' ),
        'update_item'                => __( 'Actualizar', 'text_domain' ),
        'view_item'                  => __( 'Ver', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separar con comas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Agregar/Quitar', 'text_domain' ),
        'choose_from_most_used'      => __( 'Elegir de los más usados', 'text_domain' ),
        'popular_items'              => __( 'Artistas Populares', 'text_domain' ),
        'search_items'               => __( 'Buscar', 'text_domain' ),
        'not_found'                  => __( 'No encontrado', 'text_domain' ),
        'no_terms'                   => __( 'No hay Artistas', 'text_domain' ),
        'items_list'                 => __( 'Lista', 'text_domain' ),
        'items_list_navigation'      => __( 'Navegación', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => false,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'artistas', array( 'albums', 'gallery' ), $args );

}
add_action( 'init', 'artists_taxonomy', 0 );

?>