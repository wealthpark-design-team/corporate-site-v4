<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Next_Landing_Page
 */
?>

<li class="news-list">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<a href="<?php the_permalink(); ?>">
			<header class="entry-header">
				<div class="news-list-info clearfix">
					<p class="date">
						<?php echo get_the_date("Y.n.j"); ?>
					</p>
					<p class="category">
						<?php
						$terms = get_the_terms( $post->ID, 'news_category' );
						if (!empty($terms)) {
							foreach($terms as $term) {
								echo $term->name;
							}
						}
						?>
					</p>
				</div>
			</header><!-- .entry-header -->
			<div class="news-list-content">
				<p class="news-title"><?php the_title(); ?></p>
				<?php
				if ( 'post' === get_post_type() ) :
				?>
				<div class="entry-meta">
					<?php wp_next_landing_page_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php	endif; ?>
				<p class="news-body">
					<?php
					// Get content without images
					function wpse_get_content_without_images() {
					    $content = get_the_content("");
					    $content = preg_replace( '/<img[^>]+./', '', $content );
					    echo wp_strip_all_tags($content);
					}
					wpse_get_content_without_images();

					wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-next-landing-page' ),
					'after'  => '</div>',
					) );
					?>
				</p>
			</div><!-- .entry-content -->
		</a>
	</article><!-- #post-## -->
</li>
