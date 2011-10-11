
<?php

get_header(); ?>



		<div id="content_container">

		<?php get_sidebar(); ?>
		
			<div id="content" role="main">

			<?php
			
			 get_template_part( 'loop', 'index' );
			?>
			</div><!-- #content -->
		</div><!-- #container -->


<?php get_footer(); ?>