<?php

/* Template Name: Listes */

?>

<?php get_header(); ?>


<div class="page-galeries">
  <h5 class="section-title"> MOBILE GAME </h5>


<?php
$args = array (
 'post_type' => 'liste',
 'post_status' => 'publish',
 'posts_per_page' => 10,

);

$loop = new WP_Query($args);

if ( $loop->have_posts() ) :
 while ($loop->have_posts() ) : $loop->the_post();
 ?>



 <div class="post-content">

 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail("medium_large"); ?> </a>
 <p><?php the_excerpt(); ?></p>
  <a href="<?php the_permalink(); ?>">Continuer la lecture </a>
 <hr>

</div>

 <?php      // Display post content
 endwhile;
endif;?>


<?php get_footer(); ?>
