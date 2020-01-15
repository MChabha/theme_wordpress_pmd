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

  </div>
  <?php
  }
  }
  ?>
</main>
<?php get_footer(); ?>
