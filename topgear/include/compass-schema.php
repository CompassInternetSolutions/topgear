<?php
if ( is_admin() ){ // admin actions
  add_action( 'admin_menu', 'my_plugin_menu' );
  add_action( 'admin_init', 'register_compass_schema_settings' );
} 
function register_compass_schema_settings()
{
    register_setting( 'compass-schema-group', 'header_title_under_the_left_logo' );
	register_setting( 'compass-schema-group', 'header_phone_number' );
    register_setting( 'compass-schema-group', "header_alt_left_logo" );

    register_setting("compass-schema-group", "iframe_image_alt");

    register_setting("compass-schema-group", "footer_banner_top_text");
    register_setting("compass-schema-group", "footer_banner_bottom_text");

    register_setting( 'compass-schema-group', 'footer_logo_url' );
    register_setting( 'compass-schema-group', 'footer_business_logo_alt_text' );
    register_setting( 'compass-schema-group', 'footer_company_name' );
    register_setting( 'compass-schema-group', 'footer_description' );
    register_setting( 'compass-schema-group', 'footer_address' );
    register_setting( 'compass-schema-group', 'footer_city' );
    register_setting( 'compass-schema-group', 'footer_region' );
    register_setting( 'compass-schema-group', 'footer_zip' );
    register_setting( 'compass-schema-group', 'footer_phone' );
    register_setting( 'compass-schema-group', 'footer_email' );

    register_setting( 'compass-schema-group', 'footer_social_facebook' );
    register_setting( 'compass-schema-group', 'footer_social_tweeter' );
    register_setting( 'compass-schema-group', 'footer_social_gmail' );
	
    register_setting( 'compass-schema-group', 'footer_google_map' );

    register_setting( 'compass-schema-group', 'footer_bottom_text' );
}

function my_plugin_menu() {
	add_options_page( 'Compass Schema Administrator Page', 'Compass Schema', 'manage_options', 'my-compass-schema-identifier', 'my_compass_schema' );
}

function my_compass_schema() 
{
?>
<style type="text/css">
    .my-settings input[type="text"]{
        width: 400px;
    }
</style>
<div class="wrap">
<h2>Main Settings For Compass Schema</h2>

<form method="post" action="options.php">
    <?php settings_fields( 'compass-schema-group' ); ?>
    <?php do_settings_sections( 'compass-schema-group' ); ?>
    <table class="form-table my-settings" style="">
        <!--
        <tr>
            <th colspan="2">
                <h3>Header</h3>
                <hr>
            </th>
        </tr>
        <tr valign="top">
        <th scope="row">Title Under the left Logo</th>
        <td><input type="text" name="header_title_under_the_left_logo" value="<?php echo esc_attr( get_option('header_title_under_the_left_logo') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Phone Number</th>
        <td><input type="text" name="header_phone_number" value="<?php echo esc_attr( get_option('header_phone_number') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Alt Tag for Logo</th>
        <td><input type="text" name="header_alt_left_logo" value="<?php echo esc_attr( get_option('header_alt_left_logo') ); ?>" /></td>
        </tr>

        <tr>
            <th colspan="2">
                <h3>IFrame</h3>
                <hr>
            </th>
        </tr>
        <tr valign="top">
        <th scope="row">Alt Tag for Image</th>
        <td><input type="text" name="iframe_image_alt" value="<?php echo esc_attr( get_option('iframe_image_alt') ); ?>" /></td>
        </tr>

        <tr>
            <th colspan="2">
                <h3>Banner</h3>
                <hr>
            </th>
        </tr>
        <tr valign="top">
        <th scope="row">Top text</th>
        <td><input type="text" name="footer_banner_top_text" value="<?php echo esc_attr( get_option('footer_banner_top_text') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Bottom text</th>
        <td><input type="text" name="footer_banner_bottom_text" value="<?php echo esc_attr( get_option('footer_banner_bottom_text') ); ?>" /></td>
        </tr>
        
		-->

        <tr>
            <th colspan="2">
                <h3>VCARD</h3>
                <hr>
            </th>
        </tr>
        <tr valign="top">
        <th scope="row">Footer Logo link</th>
        <td><input type="text" name="footer_logo_url" value="<?php echo esc_attr( get_option('footer_logo_url') ); ?>" /></td>
        </tr>
        <?php
        	$footer_logo = esc_attr( get_option('footer_logo_url') );
			if($footer_logo != ''){
				?>
					<tr valign="top">
                    <th scope="row">&nbsp;</th>
                    <td><img src="<?php echo esc_attr( get_option('footer_logo_url') ); ?>" width="160" height="50" /></td>
                    </tr>
				<?php
			}
		?>
        
        <tr valign="top">
        <th scope="row">Business Logo ALT Text</th>
        <td><input type="text" name="footer_business_logo_alt_text" value="<?php echo esc_attr( get_option('footer_business_logo_alt_text') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Company Name</th>
        <td><input type="text" name="footer_company_name" value="<?php echo esc_attr( get_option('footer_company_name') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Description</th>
        <td><input type="text" name="footer_description" value="<?php echo esc_attr( get_option('footer_description') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Street Address</th>
        <td><input type="text" name="footer_address" value="<?php echo esc_attr( get_option('footer_address') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">City</th>
        <td><input type="text" name="footer_city" value="<?php echo esc_attr( get_option('footer_city') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Region</th>
        <td><input type="text" name="footer_region" value="<?php echo esc_attr( get_option('footer_region') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Zip Code</th>
        <td><input type="text" name="footer_zip" value="<?php echo esc_attr( get_option('footer_zip') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Phone</th>
        <td><input type="text" name="footer_phone" value="<?php echo esc_attr( get_option('footer_phone') ); ?>" /></td>
        </tr>
        
        <tr valign="top">
        <th scope="row">Email</th>
        <td><input type="text" name="footer_email" value="<?php echo esc_attr( get_option('footer_email') ); ?>" /></td>
        </tr>
        
        <tr>
            <th colspan="2">
                <h3>Social</h3>
                <hr>
            </th>
        </tr>
        <tr valign="top">
        <th scope="row">Twitter</th>
        <td><input type="text" name="footer_social_tweeter" value="<?php echo esc_attr( get_option('footer_social_tweeter') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Google+</th>
        <td><input type="text" name="footer_social_gmail" value="<?php echo esc_attr( get_option('footer_social_gmail') ); ?>" /></td>
        </tr>
        <tr valign="top">
        <th scope="row">Facebook</th>
        <td><input type="text" name="footer_social_facebook" value="<?php echo esc_attr( get_option('footer_social_facebook') ); ?>" /></td>
        </tr>
        
        
        <tr>
            <th colspan="2">
                <h3>Google Map</h3>
                <hr>
            </th>
        </tr>
        <tr valign="top">
        <th scope="row">Embed Google map</th>
        <td><input type="text" name="footer_google_map" value="<?php echo esc_attr( get_option('footer_google_map') ); ?>" /></td>
        </tr>
		<!--
        <tr>
            <th colspan="2">
                <h3>Footer Absolute Bottom</h3>
                <hr>
            </th>
        </tr>
        <tr valign="top">
        <th scope="row">Big Title</th>
        <td><input type="text" name="footer_bottom_text" value="<?php echo esc_attr( get_option('footer_bottom_text') ); ?>" /></td>
        </tr>
		-->
    </table>
    
    <?php submit_button(); ?>

</form>
</div>
<?php 
}