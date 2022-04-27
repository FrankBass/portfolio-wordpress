
<?php

/* Template Name: Main */

?>


<?php get_header();?>



<?php
$args = array (
 'post_type' => 'main',
 'post_status' => 'publish',
 'posts_per_page' => 8,

);

$loop = new WP_Query($args);

if ( $loop->have_posts() ) :
 while ($loop->have_posts() ) : $loop->the_post();
 ?>



 <?php      // Display post content
 endwhile;
 endif;?>









  <div class="content">
    <h4>Bonjour, je m'appelle </h4>
    <h1>Frank<span> Bassilekin</span></h1>
    <h4>Bienvenu sur mon Blog</h4>
  </div>



  <h2 class="page-back">
  <?php the_post_thumbnail(); ?>
  </h2>



<section class="about">
  <div class="main">
    <?php

    $args = array (
     'post_type' => 'post',
     'post_status' => 'publish',
     'posts_per_page' => 100 ,
     'tax_query' => array (
   		array(
   			'taxonomy' => 'main',
        'field' => 'slug',
        'terms' =>array( 'photo-1')
   	)
  )
   );
?>



    <?php the_post_thumbnail(); ?>
    <div class="about-text">

      <h8>Developer <span>& informer</span></h8>

      <div class="newslatter">
        <form>
          <input type="email" name="email" id="mail" placeholder="Enter Your Email">
          <input type="submit" name="submit" value="Parlez nous">
        </form>

    </div>
  </div>
  </div>

</section>



<?php get_footer(); ?>

<div class="contact-me">
  <p> Aider notre site en faisant un geste .</p>
  <a class="button-two" href="#">Faire un don</a>
</div>
