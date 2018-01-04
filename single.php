<?php get_header(); ?>
 
  <h1>Nikolina</h1>
  <?php 
    if ( have_posts() ):
        while ( have_posts() ): the_post(); 
            ?>
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <p><?php the_content(); ?></p>
            <?php
        endwhile;
    endif;
?>
  <form>
     <label for="">Komentar:</label>
      <textarea name="" id="" cols="30" rows="10"></textarea>
  </form>
<?php get_footer(); ?>