
<?php get_header() ; ?>


<!-- conteneur global main -->
<?php if ( have_posts() ) :
  while (have_posts() ) : the_post(); ?>



<div class="page-articles">
<!-- afficher le titre et le contenue d'une page -->
<h3><?php the_title(); ?></h3>

<!-- mettre en avant l'image de l'article en taille maxi -->
<?php the_post_thumbnail (); ?>
<h4> Afficher Date - <?php the_field('afficher_date') ;?> </h4>
<h4> Auteur - <?php the_field('auteur') ;?> </h4>
<h4> Createur - <?php the_field('createur') ;?> </h4>
<h4> Prix - $<?php the_field('prix') ;?> </h4>
<?php the_content(); ?>

</div>



<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>


<?php get_footer(); ?>
