<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Next_Landing_Page
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="news-detail-box">

		<header class="news-detail-header">
		</header><!-- .entry-header -->

		<div class="body">
		<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );
			endif;
			if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wp_next_landing_page_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php	endif; ?>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wp-next-landing-page' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
            ) );

            the_posts_navigation();

            wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-next-landing-page' ),
				'after'  => '</div>',
            ) );
		?>
		</div>
		<nav class="nav-links">
			<div class="page-numbers-inverse"><?= get_previous_post() ? previous_post_link('%link', '<span><i class="material-icons">keyboard_arrow_left</i></span>'  ) : '<span class="disable"><i class="material-icons">keyboard_arrow_left</i></span>' ?></div>
			<div class="back-text"><a href="<?php echo get_post_type_archive_link( 'help_owner' ); ?>">ヘルプ TOP</a></div>
			<div class="page-numbers-inverse"><?= get_next_post()     ? next_post_link    ('%link', '<span><i class="material-icons">keyboard_arrow_right</i></span>') : '<span class="disable"><i class="material-icons">keyboard_arrow_right</i></span>' ?></div>
		</nav>
	</div><!-- .news-detail-box -->
	<footer class="entry-footer">
		<?php wp_next_landing_page_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
