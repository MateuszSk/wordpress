<?php 
get_header()
?>

<div class="container gora">
	<section class="category-portfolio">
			<div class="row">
					<?php 
						$custom_query_args = array(
							'post_type' => 'post', 
							'cat' => '3',
							'posts_per_page' => '100',
						
						);
			
						$the_query = new WP_Query( $custom_query_args );
						 ?>
						<?php if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									
									<a href="<?php the_permalink(); ?>">
									<div class="col-md-4 col-xs-6">
									<div class="col-md-12">
									
									<?php if ( has_post_thumbnail() ) :	
									$thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id($whatWeDo_post->ID),'middle-post-thumbnail');
									?>
									<div class="img" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
									</div>
									<?php endif; ?>		
									<h5 class="title">
										<?php the_title(); ?>
									</h5>
									</a>
									
					

									</div>
									</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
			</div>
		</section>
</div>

<?php 
get_footer();
?>
	