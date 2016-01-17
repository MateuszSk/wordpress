
	<footer>
		<div class="container">
			<div class="row">

			<?php if(is_active_sidebar('footer1')) : ?>
				<div class="col-md-4 col-xs-4">
				<div class="col-md-12">
					<?php dynamic_sidebar('footer1')?>
				</div>
				</div>
			<?php endif; ?>

			<?php if(is_active_sidebar('footer2')) : ?>
				<div class="col-md-4 col-xs-4">
				<div class="col-md-12">
					<?php dynamic_sidebar('footer2')?>
				</div>
				</div>
			<?php endif; ?>

			<?php if(is_active_sidebar('footer3')) : ?>
				<div class="col-md-4 col-xs-4">
				<div class="col-md-12">
					<?php dynamic_sidebar('footer3')?>
				</div>
				</div>
			<?php endif; ?>
			</div>
		</div>
	</footer>
</body>
</html>


