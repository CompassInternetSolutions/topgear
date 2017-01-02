<?php
/*

Template Name: Eto Template

*/
?>
<?php get_header(); ?>

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- #sidebar -->

	<div id="top-content">
		<?php include(TEMPLATEPATH."/top-content.php");?>
	</div><!-- #top-content -->
	

		<div id="main-content">
	<div id="breadcrumbs">
		<?php if (function_exists('bcn_display')) {
			bcn_display();
			}
			else {
			echo "Please enable Breadcrumb NavXT";
			}
		?>
		<br clear="all" />
	</div><!-- #breadcrumbs -->
		
		<?php

		$page_h1 = get_post_meta($post->ID, 'h1', true);

		if( $page_h1 != null ) {

			echo '<h1>',$page_h1,'</h1>';

		}

		?>
		
			<?php get_template_part( 'loop', 'index' ); ?>
			
			<?php if (is_front_page()) : ?> 
			<!-- <div id="homepage-articles">  -->
				<?php// include(TEMPLATEPATH."/homepage-articles.php");?>
			<!-- </div> -->
			<?php endif; ?>
			
		</div><!-- #main-content -->	
		
				

			
<?php get_footer('eto'); ?>