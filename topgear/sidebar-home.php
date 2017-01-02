<div id="sidebar-home">
	<div class="content">
		<?php //if ( !dynamic_sidebar( 'home-add' ) ) : ?>
				<?php //endif; ?>
			<?php 
			wp_reset_query();
			$recent = new WP_Query(array( 'pagename' => 'about' ) );
			while($recent->have_posts()) : $recent->the_post();
			
			
			?>
			<h2 class="widget_title"><?php the_title(); ?></h2>
			<div class="textwidget">
			<?php the_content(); ?>
			<?php the_post_thumbnail();?>
			</div>
			<?php endwhile; ?>
			
			
	</div>

</div><!-- #sidebar-right -->
<div id="sidebar-services">
	<div class="content">

		<?php if ( !dynamic_sidebar( 'home-services' ) ) : ?>
				<?php endif; ?>
	</div>

</div><!-- #sidebar-right -->
<div id="sidebar-testim">
	<div class="content">

		<?php if ( !dynamic_sidebar( 'home-testim' ) ) : ?>
				<?php endif; ?>
	</div>

</div><!-- #sidebar-right -->