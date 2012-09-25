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
 global $options;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<header class="entry-header">
		
		<?php cyberchimps_post_format_icon(); ?>
		<h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'cyberchimps' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php ( get_the_title() )? the_title() : the_permalink(); ?></a></h2>  
	
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta">
				<?php cyberchimps_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
  
	<?php if ( is_single() ) : // Only display Excerpts for Search ?>
  
		<div class="entry-content">
    	<?php cyberchimps_featured_image(); ?>
			<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'cyberchimps' ) ); ?>
			<?php wp_link_pages( array( 'before' => '<div class="page-links">' . __( 'Pages:', 'cyberchimps' ), 'after' => '</div>' ) ); ?>
		</div><!-- .entry-content -->
		
  <?php elseif( is_search() ): ?>	
  	<div class="entry-summary">
    <?php cyberchimps_featured_image(); ?>
    	<?php add_filter( 'excerpt_more', 'cyberchimps_search_excerpt_more', 999 ); ?>
      <?php add_filter( 'excerpt_length', 'cyberchimps_search_excerpt_length', 999 ); ?>
			<?php the_excerpt(); ?>
      <?php remove_filter( 'excerpt_length', 'cyberchimps_search_excerpt_length', 999 ); ?>
      <?php remove_filter( 'excerpt_more', 'cyberchimps_search_excerpt_more', 999 ); ?>
		</div><!-- .entry-summary -->
    
	<?php else : ?>
  	<div class="entry-summary">
    <?php cyberchimps_featured_image(); ?>
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		
	<?php endif; ?>
	
	<footer class="entry-meta">
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
    
				<?php cyberchimps_posted_in() ?>
	
				<?php cyberchimps_post_tags(); ?>
        
		<?php endif; // End if 'post' == get_post_type() ?>
    
		<?php cyberchimps_post_comments() ?>
		
		<?php edit_post_link( __( 'Edit', 'cyberchimps' ), '<span class="edit-link">', '</span>' ); ?>
    
    <?php cyberchimps_article_share() ?>
		
	</footer><!-- #entry-meta -->
	
</article><!-- #post-<?php the_ID(); ?> -->