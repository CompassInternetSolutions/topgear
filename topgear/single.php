<?php get_header(); ?>

	

<?php
$category = get_the_category(); 
$catn= $category[0]->cat_name;
?>

	<div id="top-content">
		<?php include(TEMPLATEPATH."/top-content.php");?>
	</div><!-- #top-content -->
	

		<div id="main-content"  >
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
			<?php

			  echo "<br/><h1 style='margin-left:0px;'>" ;
			  echo get_the_title();  
			  echo "</h1>";

	

		?>

			<?php get_template_part( 'loop', 'index' ); ?>
<div id="postImg">
<?php the_post_thumbnail();?>
</div>

			<?if ($catn=="blog"){
				error_reporting(0);
				?>
				<?php //comments_template(); ?>
        <?}?>
			
		
			
		</div><!-- #main-content -->
			<div id="sidebar">
		<?php get_sidebar(); ?>
	</div><!-- #sidebar -->
			
<?php get_footer(); ?>