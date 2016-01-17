<?php 
get_header();
?>
<div class="container gora">
	<section class="single">

<?php
	if ( have_posts() ) :
				while( have_posts() ) : the_post();
			 
					get_template_part('content-single');
				endwhile;
				?>
			 
			
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