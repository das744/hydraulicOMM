<!-- all about, contactus, services page will follow  this page.php-->

<?php get_header(); ?>


<div class="container">


<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>


    <?php the_content(); ?>
    <?php
        // Display post content
    endwhile; 
endif; 
?>

 </div>

<?php get_footer(); ?>



