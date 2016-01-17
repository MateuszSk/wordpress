	<div <?php post_class('box'); ?> id="post-<?php the_ID(); ?>">
									


									<?php if ( has_post_thumbnail() ) :	
									$thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id($whatWeDo_post->ID),'big-single-post-thumbnail');
									?>
									<div class="img" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
									</div>
										
									<?php endif; ?>	
								
								
							<div class="post-content">
							<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
							<?php the_content(); ?>
							</div>
						</div>					