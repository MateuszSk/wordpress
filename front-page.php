	<?php 
	get_header();
	?>

	<div class="container-fluid  gora">
	<div class="container">
		<section id="home" class="home">
			<div class="row">
				<div class="col-2 col-offset-5 logo">
				</div>
				<h2>Witaj na stronie mateuszsk.pl</h2>
				<a href="#portfolio" class="button">Przejdź dalej</a>
			</div>
		</section>
		
		<section id="portfolio" class="portfolio">
			<h3>Najnowsze Projekty</h3>
			<div class="row">
			

					<?php 
						$custom_query_args = array(
							'post_type' => 'post', 
							'cat' => '3',
							'posts_per_page' => '3',
						
						);
			
						$the_query = new WP_Query( $custom_query_args );
						 ?>
						<?php if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
									
									<a href="<?php the_permalink(); ?>">
									<div class="col-md-4 col-xs-12">
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
			<div class="row">
				<a href="" class="button">Zobacz wszystkie projekty.</a>
			</div>
		</section>
	
		<section id="skills" class="skills">
				<div class="row">

				<?php 
						$custom_query_args = array(
							'post_type' => 'post', 
							'cat' => '5',
							'posts_per_page' => '8',
						
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
												<div class="progress-bar">
													<div class="pasek"></div>
												</div>

												<?php endif; ?>		

										
										</div>
											<p>Znajomość Średnia</p>
									</div>
					

		
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
				</div>
				
		</section>

			<section id="blog" class="blog">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-xs-12">
					
					
					<?php 
						$custom_query_args = array(
							'post_type' => 'post', 
							'cat' => '4',
							'posts_per_page' => '2',
						
						);
			
						$the_query = new WP_Query( $custom_query_args );
						 ?>
						<?php if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							
									<div class="row">
									<div class="col-md-5 post">
									<?php if ( has_post_thumbnail() ) :	
									$thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id($whatWeDo_post->ID),'single-post-thumbnail');
									?>
									<div class="img" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
									</div>	
										<?php endif; ?>	
									</div>
										
									<div class="col-md-7 post">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							
										<p><?php the_content(); ?></p>
									</div>
									</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					

					<a href="" class="button">Zobacz najnowsze posty</a>
				</div>
				<div class="col-md-6 col-sm-6 Hcol-xs-12">
					
					<?php 
						$custom_query_args = array(
							'post_type' => 'post', 
							'cat' => '6',
							'posts_per_page' => '2',
						
						);
			
						$the_query = new WP_Query( $custom_query_args );
						 ?>
						<?php if ( $the_query->have_posts() ) : ?>
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							
									
									<div class="row">
									<div class="col-md-5 post">
									<?php if ( has_post_thumbnail() ) :	
									$thumb_url = wp_get_attachment_image_src(get_post_thumbnail_id($whatWeDo_post->ID),'single-post-thumbnail');
									?>
									<div class="img" style="background-image: url(<?php echo $thumb_url[0]; ?>);">
									</div>	
									<?php endif; ?>		
									</div>
										
									<div class="col-md-7 post">
										<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							
										<p><?php the_content(); ?></p>
									</div>
									</div>
							<?php endwhile; ?>
							<?php wp_reset_postdata(); ?>
						<?php else : ?>
							<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
						<?php endif; ?>
					

					<a href="" class="button">Skomentuj Pierwszy</a>
				</div>
			</div>
		</section>
	</div>
	</div>

	<?php 
	get_footer();
	?>
