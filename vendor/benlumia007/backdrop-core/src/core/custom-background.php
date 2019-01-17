<?php
/**
 * Backdrop Core (custom-background.php)
 *
 * @package     Backdrop Core
 * @copyright   Copyright (C) 2018. Benjamin Lu
 * @license     GNU General PUblic License v2 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author      Benjamin Lu (https://getbenonit.com)
 */

/**
 * Define namespace
 */
namespace Benlumia007\Backdrop\Core;

/**
 * Table of Content
 *
 *  1.0 - Core (Custom Background)
 */

/**
 *  1.0 - Core (Custom Background)
 */
function load_custom_background() {
	$args = array(
		'default-color' => 'ffffff',
	);
	add_theme_support( 'custom-background', $args );
}
add_action( 'after_setup_theme', __NAMESPACE__ . '\load_custom_background' );
