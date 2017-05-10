<?php
/**
 * @package fortunato
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( 'post' == get_post_type() ) : ?>
			<div class="entry-meta smallPart">
				<?php fortunato_posted_on(); ?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php the_title( sprintf( '<h2 class="entry-title noMarginTop"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-content -->

	<footer class="entry-footer smallPart">
		<span class="read-link">
			<a href="<?php echo esc_url( get_permalink()); ?>"><?php esc_html_e('Read More', 'fortunato'); ?><i class="fa fa-angle-right spaceLeft" aria-hidden="true"></i></a>
		</span>
		<?php edit_post_link( esc_html__( 'Edit', 'fortunato' ), '<span class="edit-link" style="margin-top: 0.5em;"><i class="fa fa-wrench spaceRight" aria-hidden="true"></i>', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<div class="sepHentry2"></div>