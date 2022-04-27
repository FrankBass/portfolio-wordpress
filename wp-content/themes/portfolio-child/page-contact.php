<?php

/* Template Name: Contact */

?>


<?php get_header(); ?>

<?php if ( have_posts() ) :
 while (have_posts() ) :the_post();
 ?>



 <div class="contact-me">
   <p> Aider notre site en faisant un geste .</p>
   <a class="button-two" href="#">Faire un don</a>
 </div>

 <div class="page-contact">
   <h1 class="section-title"> Pour nous contacter veuiller remplir le formulaire  </h1>
    <?php the_content(); ?>


   <div class="post-block2">
   <h2 class="page-back">






<?php endwhile; ?>
<?php endif; ?>




<?php get_footer(); ?>
