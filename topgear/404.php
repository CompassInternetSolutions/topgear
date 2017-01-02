<?php get_header(); ?>

	<div id="top-content">
		<?php include(TEMPLATEPATH."/top-content.php");?>
	</div><!-- #top-content -->
	
	<div id="breadcrumbs">
		<?php if (function_exists('bcn_display')) {
			bcn_display();
			}
			else {
			//echo "Please enable Breadcrumb NavXT";
			}
		?>
		<br clear="all" />
	</div><!-- #breadcrumbs -->

	<div id="main-content">
		<div id="404error">
				<p class="entry-title">Not Found</p>
			<div class="entry-content">
				<p>Apologies, but the page you requested could not be found.<br />Perhaps searching will help.</p>
				<br />
				<?php get_search_form(); ?>
			</div><!-- .entry-content -->
		</div><!-- #404error -->

	</div><!-- #main-content -->
	
	<div id="sidebar">
		<?php //get_sidebar(); ?>
	</div><!-- #sidebar -->


		
				<?php //include(TEMPLATEPATH."/sidebar-right.php");?>

			
<?php get_footer(); ?>