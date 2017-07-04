<?php
/**
 * Main bootstrap file for this theme. Notes for usage:
 *
 * - This file is used for theme setup, file includes, and constant definition for the theme
 * - All functions defined here should be tied to the init, after_theme_setup, or activation hook
 * - Additional function definitions should go in a required file
 * - All relative path mentions in comments are relative to the theme root (where this file is)
 *
 * @package    WordPress
 * @subpackage WPFromScratch
 */


/**
 * Do not allow this file to be loaded directly
 */

if ( ! function_exists( 'add_action' ) ) {
	die( 'Nothing to do...' );
}
