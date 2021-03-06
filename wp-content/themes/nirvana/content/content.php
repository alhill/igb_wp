<?php
/**
 * The default template for displaying content
 *
 * @package Cryout Creations
 * @subpackage Nirvana
 * @since Nirvana 1.0
 */

$options = nirvana_get_theme_options();
foreach ($options as $key => $value) {
     ${"$key"} = $value ;
} 

?><?php cryout_before_article_hook(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class( (( is_sticky() && is_page_template() )?'sticky':'') ); ?>>

			<?php cryout_post_before_content_hook();  
			?><?php if ( is_archive() || is_search() || is_page() ) : // Display excerpts for archives, search and page templates ?>
			
						<?php if ($nirvana_excerptarchive != "Full Post" ){ ?>
						<div class="entry-summary">
						<?php nirvana_set_featured_thumb(); ?>
						<?php the_excerpt(); ?>
						</div><!-- .entry-summary -->
						<?php } else { ?>
						<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'nirvana' ) . '</span>', 'after' => '</div>' ) ); ?>
						</div><!-- .entry-content --> 
						<?php }   ?>
			
		<?php else : 
				if (is_sticky() && $nirvana_excerptsticky == "Full Post")  $sticky_test=1; else $sticky_test=0;
				if ($nirvana_excerpthome != "Full Post" && $sticky_test==0){ ?>
					
					
						<div class="entry-summary">
						<?php nirvana_set_featured_thumb(); ?>
                            <span class="entry-title" style="font-size: 2em; font-weight: bold; color:#666666;"><?php the_title(); ?></span>
						<?php the_excerpt(); ?>
						</div><!-- .entry-summary --> 
						<?php } else { ?>
						<div class="entry-content">
                            
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'nirvana' ) . '</span>', 'after' => '</div>' ) ); ?>
						</div><!-- .entry-content --> 
						<?php }  

			endif; ?>

		<footer class="entry-meta">
			<?php cryout_post_after_content_hook();  ?>
		</footer>
	</article><!-- #post-<?php the_ID(); ?> -->
	
	
<?php cryout_after_article_hook(); ?>