<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress
 * @subpackage Tea Coffee
 * @version 1.2.1
 */

if ( ! is_active_sidebar( 'sidebar1' ) ) {
	return;
}
?>

<sidebar>
  <?php dynamic_sidebar('sidebar1') ?>
</sidebar>
