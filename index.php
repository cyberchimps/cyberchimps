<?php
/**
 * FIXME: Edit Title Content
 *
 * FIXME: Edit Description Content
 *
 * Please do not edit this file. This file is part of the Cyber Chimps Framework and all modifications
 * should be made in a child theme.
 * FIXME: POINT USERS TO DOWNLOAD OUR STARTER CHILD THEME AND DOCUMENTATION
 *
 * @category Cyber Chimps Framework
 * @package  Framework
 * @since    1.0
 * @author   CyberChimps
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     http://www.cyberchimps.com/
 */
 
get_header(); ?>

<?php do_action( 'cyberchimps_before_container' ); ?>


	
	<?php do_action( 'cyberchimps_blog_content' ); ?>
	
	

<?php do_action( 'cyberchimps_after_container'); ?>

<?php get_footer(); ?>