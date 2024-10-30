<?php
/**
* Plugin Name: Copyright shortcode creator VICT
* Description: Shortcodes to show the current year, the copyright logo and/or the sitename wherever you want it.
* Version: 1.5
* Requires at least: 6.0
* Requires PHP: 8.0
* Author: Voordelig ICT
* Author URI: https://voordeligict.nl 
* License: GPLv2 or later
* License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly      

function vict_showOnlyYear() {
    $year = gmdate('Y');
    return $year;
  }
 add_shortcode('vict_y', 'vict_showOnlyYear');
//example: 2023


function vict_showNameAndCopyright() {
	$websiteName = get_bloginfo( 'name' );
	$copyrightLogoName = "{$websiteName} ©";
	return $copyrightLogoName;
}
 add_shortcode('vict_nc', 'vict_showNameAndCopyright');	
//example: sitename ©


function vict_NameandlogoandYear() {
		$currentYear = gmdate('Y');
		$copyrightLogoOnly = "©";
		$siteName = get_bloginfo( 'name' );
		$NameLogoYear = "{$siteName} {$copyrightLogoOnly} {$currentYear}";
		return $NameLogoYear;
}
 add_shortcode('vict_ncy', 'vict_NameandlogoandYear');
//example: siteName © 2024


function vict_nameAndCopyrightAndYearAndRights() {
		$currentYear = gmdate('Y');
		$copyrightLogoOnly = "©";
		$siteName = get_bloginfo( 'name' );
		$copyLogoYear = "{$siteName} {$copyrightLogoOnly} {$currentYear} - All rights reserved";
		return $copyLogoYear;
}
 add_shortcode('vict_ncyr', 'vict_nameAndCopyrightAndYearAndRights');
//example: siteName © 2024 - All rights reserved