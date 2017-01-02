<br clear="all" />
	
</div><!-- #main --></div><!-- #wrapper --></div>

		<?php if (is_front_page()) : ?> 			
				<?php get_sidebar('home'); ?>			
			
			<?php endif; ?>
	<br clear="all" />

	<div id="footer">
	
	<?php 
		$frontpage_id = get_option('page_on_front');
		$footer_text = get_post_meta($frontpage_id, 'footer_text', true);
	?>

		<div id="footer-inner">
			<div class="logo_footer"><img src="<?php bloginfo('template_directory'); ?>/images/footer_logo.png" width="338" height="48"  alt="" /></div>

			<!--<div id="footer_left_text2"> <?php echo $footer_text;?></div>-->
			<div id="footer_middle_menu2">
		<?php wp_nav_menu( array(
				  'theme_location'  => 'footer_menu',
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
		<!--<div id="footer_right_phone2">
		<?php //global $phone_number;echo $phone_number;?>
		</div>-->
		
<br clear="all" />

			<?php if (is_front_page()) : ?>
<div class="schema-container">
<div id="footer-disclaimer">
			 
				<div itemscope="" itemtype="http://schema.org/LocalBusiness">
                	<ul class="footer-list">
						<?php
                            $footer_logo = esc_attr( get_option('footer_logo_url') );
                            if($footer_logo != ''){
                                ?>
                                <li>
                                    <div class="footer-logo">
                                        <a href="<?php echo get_home_url(); ?>" alt="<?php echo esc_attr( get_option('footer_business_logo_alt_text') ); ?>"  title="<?php echo esc_attr( get_option('footer_business_logo_alt_text') ); ?>">
                                            <img src="<?php print $footer_logo; ?>" alt="<?php echo esc_attr( get_option('footer_business_logo_alt_text') ); ?>" itemprop="logo">
                                        </a>
                                    </div>
                                </li>
                                <?php
                            }
                        ?>
                        <li>
                            <div class="footer-company-info">
                                <span itemprop="name"><?php echo esc_attr( get_option('footer_company_name') ); ?></span><br>
                                <span itemprop="description"><?php echo esc_attr( get_option('footer_description') ); ?></span>
                            </div>
                        </li>
                        <li class="inline-block">
                            <div class="footer-address">
                                <div class="description" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><i class="fa fa-home">&nbsp</i>
                                    <span itemprop="streetAddress"><?php echo html_entity_decode(esc_attr( get_option('footer_address') )); ?></span>,<br>
                                    <span itemprop="addressLocality"><?php echo html_entity_decode(esc_attr( get_option('footer_city') )); ?></span> 
                                    <span itemprop="addressRegion"><?php echo html_entity_decode(esc_attr( get_option('footer_region') )); ?>, </span>
				    <span itemprop="postalCode"><?php echo html_entity_decode(esc_attr( get_option('footer_zip') )); ?></span>
                                </div>
                            </div>
                        </li>
                        <li class="inline-block">
                            <div class="footer-phone"><i class="fa fa-phone">&nbsp</i>
                                  <span itemprop="telephone"><?php echo esc_attr( get_option('footer_phone') ); ?></span>
                               
                            </div>
                        </li>
                        <li class="inline-block">
                            <!-- <div class="footer-mail">
                                <a href="mailto:<?php echo esc_attr( get_option('footer_email') ); ?>" itemprop="email"><?php echo esc_attr( get_option('footer_email') ); ?></a>
                            </div> -->
                            <div class="footer-mail">
                                <?php echo esc_attr( get_option('footer_email') ); ?>
                            </div>
                            <div class="footer-url"><i class="fa fa-url">&nbsp</i>
                                
                               
                            </div>

			    <div class="clearstar"><i class="fa fa-url">&nbsp</i>
                                 <img src="http://www.topgearlocksmith.com/wp-content/uploads/2016/08/unnamed1.gif">
                            </div>
                        </li>
                    </ul>
                    <div class="footer-social-icons">
                        <?php if(get_option('footer_social_facebook') != ''){?><a href="<?php echo esc_attr( get_option('footer_social_facebook') ); ?>" class="icon socialfb" target="_blank"><i class="fa fa-facebook"></i></a><?php }?>
                        <?php if(get_option('footer_social_tweeter') != ''){?><a href="<?php echo esc_attr( get_option('footer_social_tweeter') ); ?>" class="icon socialtw" target="_blank"><i class="fa fa-twitter"></i></a><?php }?>
                        <?php if(get_option('footer_social_gmail') != ''){?><a href="<?php echo esc_attr( get_option('footer_social_gmail') ); ?>" class="icon socialgo" target="_blank"><i class="fa fa-google-plus"></i></a><?php }?>
                    </div>
                    <div class="footer-google-map">
                    	<?php 
							if(get_option('footer_google_map') != ''){
								echo get_option('footer_google_map');
							}
						?>
                    </div>
                    <div class="clear"></div>
				</div>
			
			
			
			</div><!-- #footer-disclaimer -->
    </div>
<?php else: ?>
<div id="footer-disclaimer">
<?php echo get_compass('footer_disc'); ;?>
</div>
<?php endif  ;?>

<?php wp_footer(); ?>
		</div>
	</div><!-- #footer -->
	<?php if(is_front_page()) {?>
<script type="text/javascript">

    jQuery(document).ready(function () {
		var hash = window.location.hash;
		console.log(hash);
		if ( !hash == null || !hash =='')
		{
			jQuery('html, body').animate({scrollTop: (jQuery(hash).offset().top)}, 2000 );
		}

		jQuery("#menu-main-menu li a").on('click', function(){					
				var link=jQuery(this).attr("href");
				console.log(link);
					jQuery('html, body').animate({scrollTop: (jQuery(link).offset().top)}, 2000 );
					jQuery("#menu-main-menu li").removeClass('current_page_item');
				jQuery(this).parent().addClass('current_page_item');
				return false;
		});
				
		
	});

</script>
<?php } else {?>
<script type="text/javascript">

    jQuery(document).ready(function () {
		
		jQuery("#menu-main-menu li a").on('click', function(){	
			var link=jQuery(this).attr("href");
			var hash =  link.substring(link.indexOf('#'));
			//console.log(hash);
			if (hash!=undefined)
			{
				window.location="http://www.topgearlocksmith.com/"+link;

			}
				
			
		});
				
		
	});

</script>
<?php } ?>
</body>
</html>