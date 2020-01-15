<?php get_header(); ?>
<main role="main" class="probootstrap-main js-probootstrap-main">

  <?php
  // boucle WordPress
  if (have_posts()){
      while (have_posts()){
          the_post();
  ?>
  <h1><?php the_title(); ?></h1>
  <div class="content">
    <?php the_content(); ?>
    <h3>Réalisateur : <?php the_field("realisateur_du_film"); ?></h3>
    <h3>Catégories</h3>
    <?php
    // a utiliser dans la boucle WordPress ou ds la WP_QUERY
    $terms = get_the_terms(get_the_id(), 'genre');
    $count = count( $terms );
    if ( $count > 0 ) {
      echo '<ul>';
        foreach ( $terms as $term ) {
            echo '<li>' . $term->name . '</li>';
        }
      echo '</ul>';
    }
    ?>
  </div>
  <?php
  }
  }
  ?>
</main>
<?php get_footer(); ?>
