<?php
/**
 * The template for displaying posts in the Status Post Format on index and archive pages
 *
 * Learn more: http://codex.wordpress.org/Post_Formats
 *
 * @package Cryout Creations
 * @subpackage Nirvana
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php cryout_post_before_content_hook();  
	?><?php if ( is_search() ) : // Only display Excerpts for Search ?>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div><!-- .entry-summary -->
		<?php else : ?>
		<div class="entry-content">	
			<?php /* endif; */ ?>
			<div class="avatar">
				<?php echo get_avatar( get_the_author_meta( 'ID' ), apply_filters( 'nirvana_status_avatar', '65' ) ); ?>
			</div>
			<div class="status_content">	
				<?php the_content( __( 'Seguir leyendo <span class="meta-nav">&rarr;</span>', 'nirvana' ) ); ?> </div>
			</div><!-- .entry-content -->
		<?php endif; ?>
		<footer class="entry-meta">
			<?php cryout_post_after_content_hook();  ?>
		</footer>
	</article><!-- #post-<?php the_ID(); ?> -->
