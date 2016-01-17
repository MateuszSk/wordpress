<?php 
get_header()
?>

<div class="container gora">
	<section class="category-skills">
				<div class="row">

				<?php 
						$custom_query_args = array(
							'post_type' => 'post', 
							'cat' => '5',
							'posts_per_page' => '100',
						
						);
			
						$the_query = new WP_Query( $custom_query_args );
						 ?>
						<?php if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							
							
									
								
									<div class="col-md-3 col-xs-6">
										<div class="col-md-12">

											<?php if ( has_post_thumbnail() ) :	
											$thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id($whatWeDo_post->ID),'single-post-thumbnail');
											?>
												<div class="img" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
												</div>
											<?php endif; ?>		
									
											<p><?php the_title(); ?></p>
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
	