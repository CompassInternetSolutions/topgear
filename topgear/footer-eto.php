<br clear="all" />
	<div id="credit">
		<?php 
			$frontpage_id = get_option('page_on_front');
			$credit_card_alt = get_post_meta($frontpage_id, 'credit_card_alt', true);
			$great_job_alt = get_post_meta($frontpage_id, 'great_job_alt', true);
		?>
		
		
		<div id="footer_left_text">
		&nbsp;
		</div>
		<div id="footer_middle_menu">
		
				<?php 
				 if (is_front_page()){
				  wp_nav_menu( array(
				  'theme_location'  => 'footersitemap',
				  'menu'            => '', 
				  'container'       => 'div', 
				  'container_class' => '', 
				  'container_id'    => 'footer-sitemap', 
				  'menu_class'      => '', 
				  'menu_id'         => '',
				  'echo'            => true,
				  'fallback_cb'     => 'wp_page_menu',
				  'before'          => '',
				  'after'           => '',
				  'link_before'     => '',
				  'link_after'      => '',
				  'depth'           => 0,
				  'walker'          => ''
				  ) );
				  }
		?><!-- #footer-sitemap -->
		</div>
		<div id="footer_right_phone">
			<img src="<?php bloginfo('template_directory'); ?>/images/credit.jpg"   alt="<?php echo $credit_card_alt;?>"  title="<?php echo $credit_card_alt;?>"/>
		</div>
		</div>
		<br clear="all" />  
		<div id="great_job">
		<img src="<?php bloginfo('template_directory'); ?>/images/great_job.jpg"   alt="<?php echo $great_job_alt;?>"  title="<?php echo $great_job_alt;?>"/>
		</div>
</div><!-- #main --></div><!-- #wrapper --></div>

		<!--img src="<?php bloginfo('template_directory'); ?>/images/stroke.jpg" width="721" height="11" class="footer-separator" alt="" /-->
	<br clear="all" />

	<div id="footer">
	
	<?php 
		$frontpage_id = get_option('page_on_front');
		$footer_text = get_post_meta($frontpage_id, 'footer_text', true);
	?>

		<div id="footer-inner">
			<div id="footer_left_text2"> <?php echo $footer_text;?></div>
			<div id="footer_middle_menu2">
		<?php wp_nav_menu( array(
				  'theme_location'  => 'lower_menu',
				  'menu'            => '', 
				  'container'       => 'div', 
				  'container_class' => '', 
				  'container_id'    => 'lower_menu', 
				  'menu_class'      => '', 
				  'menu_id'         => '',
				  'echo'            => true,
				  'fallback_cb'     => '',
				  'before'          => '',
				  'after'           => '',
				  'link_before'     => '',
				  'link_after'      => '',
				  'depth'           => 0,
				  'walker'          => ''
				  ) );
		?><!-- #footer-sitemap -->
		</div>
		<div id="footer_right_phone2">
		<?php global $phone_number;echo $phone_number;?>
		</div>
		
<br clear="all" />

			<!--div id="footer-disclaimer">
			
			<?php echo get_compass('footer_disc'); ?>
			
			
			
			</div--><!-- #footer-disclaimer -->
<?php wp_footer(); ?>
		</div>
	</div><!-- #footer -->




</body>
</html>