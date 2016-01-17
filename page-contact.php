
<?php get_header();
?>

	
	
<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		
		<section class="contact">
		<div class="container">
		<div class="row">
			<div class="col-md-7">
				sdmnaoidsnaoidsniaodn
			</div>
			<div class="content col-md-5">	
			<?php the_content() ?>
			</div>
		</div>
			
		</div>
		</section>
					

									
	<?php endwhile; ?>
							
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

