<?php 
get_header();
?>

<div class="container gora">
	<section class="posts">
		<?php
			if ( get_query_var('paged') ) {
				$paged = get_query_var('paged');
			} elseif ( get_query_var('page') ) { // 'page' is used instead of 'paged' on Static Front Page
				$paged = get_query_var('page');
			} else {
				$paged = 1;
			}
			 
			$custom_query_args = array(
				'post_type' => 'post', 
				'cat' => '4',
				'posts_per_page' => get_option('posts_per_page'),
				'paged' => $paged,
				'post_status' => 'publish',
				'ignore_sticky_posts' => true,
				//'category_name' => 'custom-cat',
				'order' => 'DESC', // 'ASC'
				'orderby' => 'date' // modified | title | name | ID | rand
			);
			
			$custom_query = new WP_Query( $custom_query_args );
			 
			if ( $custom_query->have_posts() ) :
				while( $custom_query->have_posts() ) : $custom_query->the_post();
			 
					get_template_part('content');
			 
				
				endwhile;
				?>
			 
				<?php if ($custom_query->max_num_pages > 1) : // custom pagination  ?>
					<?php
					$orig_query = $wp_query; // fix for pagination to work
					$wp_query = $custom_query;
					?>
					<nav class="prev-next-posts">
						<div class="prev-posts-link">
							<?php echo get_next_posts_link( 'Older Entries', $custom_query->max_num_pages ); ?>
						</div>
						<div class="next-posts-link">
							<?php echo get_previous_posts_link( 'Newer Entries' ); ?>
						</div>
					</nav>
					<?php
					$wp_query = $orig_query; // fix for pagination to work
					?>
				<?php endif; ?>
			 
			<?php
				wp_reset_postdata(); // reset the query 
			else:
				echo '<p>'.__('Sorry, no posts matched your criteria.').'</p>';
			endif;
			?>
	

	</section>
</div>

<?php 
get_footer();
?>
