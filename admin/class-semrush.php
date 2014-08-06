<?php

if ( ! defined( 'WPSEO_VERSION' ) ) {
	header( 'Status: 403 Forbidden' );
	header( 'HTTP/1.1 403 Forbidden' );
	exit();
}

if ( ! class_exists( 'WPSEO_Semrush' ) ) {

	class WPSEO_Semrush {

		public function checkUser($login, $pass){
			return true;
		}

		public function getRefreshToken($login, $pass){
			return 'sampleToken';
		}

		public function registerUser(){

		}
	}
}