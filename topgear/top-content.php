

<?php	
	$frontpage_id = get_option('page_on_front');
	$prices_alt = get_post_meta($frontpage_id, 'prices_alt', true);

	$main_pic_alt = get_post_meta($post->ID, 'ALT TAGS', true); 

	$small1_link = get_post_meta($frontpage_id, 'small1_link', true); 
	$small2_link = get_post_meta($frontpage_id, 'small2_link', true); 
	$small3_link = get_post_meta($frontpage_id, 'small3_link', true); 
	
	

	$small1_text = get_post_meta($frontpage_id, 'small1_text', true); 
	$small2_text = get_post_meta($frontpage_id, 'small2_text', true); 
	$small3_text = get_post_meta($frontpage_id, 'small3_text', true); 
	

	$small1_title = get_post_meta($frontpage_id, 'small1_title', true); 
	$small2_title = get_post_meta($frontpage_id, 'small2_title', true); 
	$small3_title = get_post_meta($frontpage_id, 'small3_title', true); 
	

	$small1_alt = get_post_meta($frontpage_id, 'small1_alt', true); 
	$small2_alt = get_post_meta($frontpage_id, 'small2_alt', true); 
	$small3_alt = get_post_meta($frontpage_id, 'small3_alt', true); 
	
	
?>
	<div class="block_top">
		 <a href="<?php echo $small1_link;?>"><img  title="<?php echo $small1_title; ?>" alt="<?php echo $small1_alt; ?>"  src="<?php echo get_template_directory_uri() ?>/images/residential.png" id="small1"/></a>
		 <h3><a href="<?php echo $small1_link;?>" title="<?php echo $small1_title; ?>"><?php echo $small1_title; ?></a></h3>
		 <p><a href="<?php echo $small1_link;?>" title="<?php echo $small1_title; ?>"><?php echo $small1_text; ?></a></p>
	</div>
	<div class="block_top">
		<a href="<?php echo $small2_link;?>"><img  title="<?php echo $small2_title;?>" alt="<?php echo $small2_alt;?>"  src="<?php echo get_template_directory_uri() ?>/images/automotive.png" id="small2"/></a>
		<h3><a href="<?php echo $small2_link;?>" title="<?php echo $small2_title; ?>"><?php echo $small2_title; ?></a></h3>
		<p><a href="<?php echo $small2_link;?>" title="<?php echo $small2_title; ?>"><?php echo $small2_text; ?></a></p>
   </div>
   <div class="block_top">
		<a href="<?php echo $small3_link;?>"><img  title="<?php echo $small3_title;?>" alt="<?php echo $small3_alt;?>"  src="<?php echo get_template_directory_uri() ?>/images/emergency.png" id="small3"/></a>
		<h3><a href="<?php echo $small3_link;?>" title="<?php echo $small3_title; ?>"><?php echo $small3_title; ?></a></h3>
		<p><a href="<?php echo $small3_link;?>" title="<?php echo $small3_title; ?>"><?php echo $small3_text; ?></a></p>
	</div>
  

