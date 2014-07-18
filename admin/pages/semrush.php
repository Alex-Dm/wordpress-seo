<?php
/**
 * @package Admin
 */

if ( ! defined( 'WPSEO_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

global $wpseo_admin_pages;
$wpseo_admin_pages->admin_header( true, WPSEO_Options::get_group_name( 'wpseo_semrush' ), 'wpseo_semrush' );
?>

<h2 class="nav-tab-wrapper" id="wpseo-tabs">
	<a class="nav-tab" id="semrush-settings-tab" href="#top#semrush-settings"><?php _e( 'Settings', 'wordpress-seo' );?></a>
	<a class="nav-tab" id="semrush-stats-tab" href="#top#semrush-stats"><?php _e( 'Stats', 'wordpress-seo' );?></a>
</h2>

<div class="tabwrapper">
	<div id="semrush-settings" class="wpseotab">
		<?php
			echo '<h2>' . __( 'Semrush settings', 'wordpress-seo' ) . '</h2>';
			echo $wpseo_admin_pages->textinput( 'semrush_login', __( 'Semrush login', 'wordpress-seo' ) );
			echo $wpseo_admin_pages->textinput( 'semrush_password', __( 'Semrush password', 'wordpress-seo' ) );
		?>
		<?php submit_button(); ?>
	</div>
	<div id="semrush-stats" class="wpseotab">
		<iframe src="http://semrush.com/" width="90%" height="500" style="margin: 10px;"></iframe>
	</div>
</div>

<?php
