<?php get_header(); //appel du template header.php  ?>

    <main role="main" class="probootstrap-main js-probootstrap-main">
      <div class="probootstrap-bar">
        <a href="#" class="probootstrap-toggle js-probootstrap-toggle"><span class="oi oi-menu"></span></a>
        <div class="probootstrap-main-site-logo"><a href="index.html">Aside</a></a></div>
      </div>
      <div class="card-columns">

        <?php
        // boucle WordPress
        if (have_posts()){
            while (have_posts()){
                the_post();
        ?>
        <div class="card">
          <a href="<?php the_permalink(); ?>">
            <?php
              if(has_post_thumbnail())
              {
                the_post_thumbnail('home_thumbnail',['class' =>'card-img-top probootstrap-animate','title'=>get_the_title()]) ;
              }
            ?>
          </a>
        </div>
        <?php
        }
        }
        else {
        ?>
        Nous n'avons pas trouvé d'article répondant à votre recherche
        <?php
        }
        ?>
      </div>

      <div class="container-fluid d-md-none">
        <div class="row">
          <div class="col-md-12">
            <ul class="list-unstyled d-flex probootstrap-aside-social">
              <li><a href="#" class="p-2"><span class="icon-twitter"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-instagram"></span></a></li>
              <li><a href="#" class="p-2"><span class="icon-dribbble"></span></a></li>
            </ul>
            <p>&copy; 2017 <a href="https://uicookies.com/" target="_blank">uiCookies:Aside</a>. <br> All Rights Reserved. Designed by <a href="https://uicookies.com/" target="_blank">uicookies.com</a></p>
          </div>
        </div>
      </div>

    </main>
<?php /*
<div id="content">
    <h1>Contenu Principal</h1>
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
            <?php
              if(has_post_thumbnail())
              {
                the_post_thumbnail('home_thumbnail') ;
              }
            ?>
            <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
            <h2>Posté le <?php the_time('F jS, Y') ?></h2>
            <p><?php the_content(); ?></p>
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
</div> <!-- /content -->
*/ ?>

<?php
$args = array( 'post_type' => 'film' );

$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {

    while ( $the_query->have_posts() ) {
        $the_query->the_post();
        if(has_post_thumbnail())
        {
          the_post_thumbnail( 'single_thumbnail');
        }
        echo '<h1>' . get_the_title() . '</h1>';

        the_field('realisateur_du_film');
        echo '<h2>Durée du film : '.get_field('duree_du_film').'</h2>';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
} else {
    // no posts found
}

?>
<?php get_footer(); //appel du template footer.php ?>
