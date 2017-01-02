<?php get_header(); ?>

	

	<div id="top-content">
		<?php include(TEMPLATEPATH."/top-content.php");?>
	</div><!-- #top-content -->
	
	<div id="breadcrumbs">
		<?php /*if (function_exists('bcn_display')) {
			bcn_display();
			}
			else {
			echo "Please enable Breadcrumb NavXT";
			}*/
		?>
		<br clear="all" />
	</div><!-- #breadcrumbs -->

		<div id="main-content">
		
			<?php

			if(is_category()){ ?>
				<h1><?php single_cat_title(); ?>	</H1>


			<?php }else {?>

<?php
$pageID = 16;
$page = get_post($pageID);

?>
				<h1 style="text-align:center;"><?php echo $page->post_title; ?></h1>
			<?php } ?>
		
			<?php get_template_part( 'loop', 'index' ); ?>
			
			<?php if (is_front_page()) : ?> 
			<div id="homepage-articles"> 
				<?php include(TEMPLATEPATH."/homepage-articles.php");?>
			</div>
			<?php endif; ?>
			
		</div><!-- #main-content -->	
		
				<?php //include(TEMPLATEPATH."/sidebar-right.php");?>
				<div id="sidebar">
		<?php //get_sidebar(); ?>
	</div><!-- #sidebar -->


			
<?php get_footer(); ?>