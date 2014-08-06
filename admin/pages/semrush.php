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

<div id="semrush-stats" class="wpseotab">
	<div id="semrush-frame-container">
		<div class="wpseo-sem-loader"></div>
	</div>
</div>