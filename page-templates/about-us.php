<?php
/*
Template Name: Gabarit A propos de nous.
*/
?><?php get_header(); ?>

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
  </div>
  <?php
  }
  }
   ?>

<?php echo do_shortcode('[ninja_form id=2]'); ?>

   <h2>Derniers articles</h2>
   <?php
   $args = array(
     'post_type' => 'post',
     'posts_per_page' => 3
  );

   $the_query = new WP_Query( $args );

   // The Loop
   if ( $the_query->have_posts() ) {
     echo '<div>';
       while ( $the_query->have_posts() ) {
           $the_query->the_post();
           ?>
            <h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
          <?php
       }
       echo '</div>';
       /* Restore original Post Data */
       wp_reset_postdata();
   } else {
       // no posts found
   }

   ?>
</main>

<?php get_footer(); ?>
