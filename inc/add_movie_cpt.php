<?php
add_action('init', 'create_movie_cpt');
function create_movie_cpt(){
  $post_type = "film";
  $labels = array(
        'name'               => 'Films',
        'singular_name'      => 'Film',
        'all_items'          => 'Tous les films',
        'add_new'            => 'Ajouter un film',
        'add_new_item'       => 'Ajouter un film',
        'edit_item'          => "Éditer le film",
        'new_item'           => 'Nouveau film',
        'view_item'          => "Voir le film",
        'search_items'       => 'Rechercher un film',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Film parent',
        'menu_name'          => 'Films',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       =>0,
        'menu_icon'           => 'dashicons-video-alt3',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => $post_type )
    );
    register_post_type( 'film', $args );


    $taxonomy = "genre";
    $object_type='film';
    $args = array(
          'label' => 'Catégorie de film',
          'rewrite' => array( 'slug' => 'film-categorie' ),
          'hierarchical' => true,
      );


    register_taxonomy( $taxonomy, $object_type, $args );
}
