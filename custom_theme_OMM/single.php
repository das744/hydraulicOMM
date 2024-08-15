<!-- all separate blog post will follow this single.php -->

<?php get_header(); ?>


<div class="container">

        <?php  if(has_post_thumbnail()):?>

                

                <?php  endif; ?>


			<?php 
				if ( have_posts() ) : 
				while ( have_posts() ) : the_post(); ?>


				<?php the_content(); ?>
				<?php
				// Display post content
				endwhile; 
				endif; 
			?>

        <?php comments_template( ); ?>

 </div>

<?php get_footer(); ?>