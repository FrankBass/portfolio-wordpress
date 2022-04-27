<?php

/* Template Name: Galeries */

?>

<?php get_header(); ?>


<div class="page-galeries">
  <h4 class="section-title"> MOBILE GAME</h4>
<?php

$args = array (
 'post_type' => 'post',
 'post_status' => 'publish',
 'posts_per_page' => 100 ,
);

$loop = new WP_Query($args);

if ( $loop->have_posts() ) :
 while ($loop->have_posts() ) : $loop->the_post();
 ?>

    <div class="post-content">
		 <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>

     <h2 class="page-title">
		 <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
     </h2>
     <?php the_excerpt(); ?>
      <h4> Date : <?php the_field('afficher_date'); ?></h4>

    <a href="<?php the_permalink(); ?>">Continuer la lecture </a>

   </div>


 <?php
 endwhile;
endif;?>



  <h4 class="section-title"> <button>TOUS LES ARTICLES MOBILE-GAME</button> </h4>




<?php wp_reset_query();
?>




<div class="page-galeries">
  <h4 class="section-title"> PC-GAME</h4>

<?php
$args = array (
	'post_type' => 'game',
	'post_status' => 'publish',
	'posts_per_page' => 100,
	'tax_query' => array (
		array(
			'taxonomy' => 'genre',
			'field' => 'slug',
			'terms' =>array( 'action','adventure','guerre','horeur')
			)
	)
);


$second_loop = new WP_Query($args);

if ( $second_loop->have_posts() ) :
	while ( $second_loop->have_posts() ) : $second_loop->the_post(); ?>


<div class="post-content">
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>

    <h2 class="page-title">
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

			<?php the_excerpt(); ?>
					<h4> Date: <?php the_field('afficher_date'); ?></h4>
          <a href="<?php the_permalink(); ?>"> Continuer la lecture</a>


     </div>



	<?php
	// Display post content
endwhile;
endif;
?>


<h4 class="section-title"> <button> TOUT LES ARTILES PC-GAME </button></h4>

<?php get_footer(); ?>
