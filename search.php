<?php 
get_header();
?>
<div class="container gora">
	<section class="posts">

<?php
	if ( have_posts() ) :
				while( have_posts() ) : the_post();
			 		?> <?php 
					get_template_part('content');
				endwhile;
				?>

				<?php wpbeginner_numeric_posts_nav(); ?>

			 
			
			<?php
		 
			else:
				echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
			endif;
?>
</section>
</div>

<?php 
get_footer();
?>