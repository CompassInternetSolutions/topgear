<?php get_header(); ?>

	<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- #sidebar -->

	
	



<div id="top-content">
		<?php include(TEMPLATEPATH."/top-content.php");?>
	</div><!-- #top-content -->
	

	

		<div id="main-content" style="min-height:830px">
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
		<BR><H1><?php single_cat_title(); ?></H1>

			<?php get_template_part( 'loop', 'index' ); ?>

		</div><!-- #main-content -->	
		

     
<?php get_footer(); ?>