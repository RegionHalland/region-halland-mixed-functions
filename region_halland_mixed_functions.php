<?php

	/**
	 * @package Region Halland Mixed Functions
	 */
	/*
	Plugin Name: Region Halland Mixed Functions
	Description: Front-end-plugin med olika användbara funktioner
	Version: 1.1.0
	Author: Roland Hydén
	License: Free to use
	Text Domain: regionhalland
	*/

	// Ta bort short code
	function region_halland_remove_shortcode($content) {
		$tmp_A = explode("[modularity", $content);
		$tmp_B = explode("[styrdadokument", $tmp_A[0]);
		return $tmp_B[0];
	}

	function region_halland_switch_http_https($link) {
		if (env('WP_ENV') == "production") {
			$myLink = str_replace("http","https",$link);
		} else {
			$myLink = str_replace("https","http",$link);
		}
		return $myLink;
	}

	// Metod som anropas när pluginen aktiveras
	function region_halland_mixed_functions_activate() {
		// Ingenting just nu...
	}

	// Metod som anropas när pluginen avaktiveras
	function region_halland_mixed_functions_deactivate() {
		// Ingenting just nu...
	}
	
	// Vilken metod som ska anropas när pluginen aktiveras
	register_activation_hook( __FILE__, 'region_halland_mixed_functions_activate');

	// Vilken metod som ska anropas när pluginen avaktiveras
	register_deactivation_hook( __FILE__, 'region_halland_mixed_functions_deactivate');

?>