<?php 
/* Template Name: Page No Title
*/
get_header(); ?>
 
  <h1>Nikolina</h1>
  <?php 
    if ( have_posts() ):
        while ( have_posts() ): the_post(); 
            ?>

           <small> Objavljeno: <?php the_time ('F j, Y'); ?> u <?php the_time ('g:i a'); ?> </small>
            <p><?php the_content(); ?></p>
        
        <?php endwhile;
    endif;
?>
  
<?php get_footer(); ?>