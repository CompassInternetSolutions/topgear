<?php
$frontpage_id = get_option('page_on_front');
$local_logo_title = get_post_meta($frontpage_id, 'alt-logo', true);
$alt_24 = get_post_meta($frontpage_id, 'alt_24', true);
/* Phone Numbers */
global $phone_number;

/* Phone Numbers */

$local_phone_number = get_post_meta($post->ID, 'phone', true);

if (!isset( $_COOKIE["LocalPhoneNumber"] )) {

	if ($local_phone_number != null) {

		$phone_number = $local_phone_number;

		//1 day

		setcookie('LocalPhoneNumber', $local_phone_number, time()+60*60*24);



	} else {

		$phone_number = get_compass('phone_number');

		//1 day

		setcookie('LocalPhoneNumber', $phone_number, time()+60*60*24);

	}

} else {

	$phone_number = $_COOKIE["LocalPhoneNumber"];

}

$bullet1 = get_post_meta($frontpage_id, 'bullet1', true);
$bullet2 = get_post_meta($frontpage_id, 'bullet2', true);$cert_link =get_post_meta($frontpage_id, 'certificate link', true);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="google-site-verification" content="ENO4_G8BY1JeUTMCF4ETatUJLXa83WRoWGuH16CZUqw" />

<title><?php
	global $page, $paged;
	wp_title( '|', true, 'right' );
	bloginfo( 'name' );
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'compass' ), max( $paged, $page ) );
	?></title>

	<link rel="shortcut icon" href="<?php echo get_bloginfo('url') ?>/favicon.ico" type="image/x-icon" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" />
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

	<?php wp_head(); ?>

<?php
/**
 * Scripts Section 
 */
?>
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/videobox.css" type="text/css" media="screen" />
<link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/images/favicon.png">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/mootools.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/swfobject.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/videobox.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>	

<!--[if IE 7]>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/ie7.css" />
<![endif]-->


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71419934-1', 'auto');
  ga('send', 'pageview');

</script>

</head>

<body <?php body_class(); ?>>
<div id="wrapper">
 <div id="header">
	<div id="header_gradient">
		<div id="branding">
			<div id="site-logo">
			<a href="<?php echo home_url( '/' ); ?>" >
			<img src="<?php echo bloginfo('template_directory') . '/images/logo.png';?>" id="tg-logo" alt="<?php echo $local_logo_title; ?>" title="<?php echo $local_logo_title; ?>"			/>
			</a>
			</div><!-- #site-logo -->
			<div id="phone-number">
				<p><?php echo $phone_number ?></p>
			</div><!-- #phone-number -->
			<div id="header-icons">				<ul id="tg-service-icons">				<li class="tg-serv-icon"><img src="<?php echo get_template_directory_uri() ?>/images/24.png" alt="<?php echo $alt_24; ?>" title="<?php echo $alt_24; ?>"/></li>				<li class="tg-serv-icon"><a href="<?php echo $cert_link;?>">				<img id="tg-cert-icon" src="<?php echo get_template_directory_uri() ?>/images/certified_service.png" alt="Certified locksmith services in Dallas" title="Certified locksmith services in Dallas"/></a></li></li>				</ul>
				
				
			</div><!-- #header-icons -->
			
			<!-- <div class="bullet1"><img alt="" title=""  src="<?php echo get_template_directory_uri() ?>/images/bullet.png" class="bullet_img"></div>
			<div class="bullet_text1"><?php echo $bullet1;?></div>
			<div class="bullet2"><img alt="" title=""  src="<?php echo get_template_directory_uri() ?>/images/bullet.png" class="bullet_img"></div>
			<div class="bullet_text2"><?php echo $bullet2;?></div> -->
	
			<br clear="all" />
			<!--div id="site-description"><?php bloginfo( 'description' ); ?></div-->
			<br clear="all" />
<?php $frontpage_id = get_option('page_on_front');$video_alt = get_post_meta($frontpage_id, 'video_alt', TRUE);$video_link = get_post_meta($frontpage_id, 'video_link', TRUE);?>
	<!-- <div id="video_menu">
	<a href="<?php echo $video_link;?>"><img  title="<?php echo $video_alt;?>" alt="<?php echo $video_alt;?>"  src="<?php echo get_template_directory_uri() ?>/images/videos.png" /></a>
	</div>	-->
			
			
		</div><!-- #branding -->
	</div><!-- #header_gradient -->
 </div><!-- #header -->
			
		<div id="access">
			<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
		</div><!-- #access -->
		
<div id="main">