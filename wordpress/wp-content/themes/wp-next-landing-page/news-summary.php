<?php if (is_page('asset-management')): ?>
<section class="container news-summary news-summary--am">
<?php else: ?>
<section class="container news-summary">
<?php endif; ?>
  <div class="container__inner news-summary__inner">
    <div class="title-box">
      <p class="title">News</p>
    </div>
    <!-- Latest Article(10) -->
    <?php
      $queryObject = new WP_Query( 'post_type=news&posts_per_page=10' );
      // The Loop!
      if ($queryObject->have_posts()) {
    ?>
    <div class="article-lists">
      <ul>
        <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
        <li class="article-lists__article">
          <span class="article-lists__article-date"><?php echo get_the_date("Y.n.j"); ?></span>
          <span class="article-lists__article-category">
            <?php
              $terms = get_the_terms( $post->ID, 'news_category' );
              if (!empty($terms)) {
                  foreach($terms as $term) {
                       echo $term->name;
                  }
              }
            ?>
          </span>
          <a href="<?php the_permalink(); ?>" class="article-lists__article-title"><?php the_title(); ?></a>
        </li>
        <?php } ?>
      </ul>
      <div class="article-lists__more">
        <a href="<?php echo get_post_type_archive_link( 'news' ); ?>"><?php _e("news.read_other_articles", 'wp-next-landing-page'); ?></a>
      </div>
    </div>
    <?php
    }
    ?>
  </div>
</section>
