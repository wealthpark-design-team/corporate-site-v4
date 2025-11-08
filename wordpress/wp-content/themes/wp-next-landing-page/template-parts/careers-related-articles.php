<!-- <section class="career-story section-block">
    <div class="career-story__inner">
          <ul class="blog-articles__list">
            <?php
              $args = array(
                'posts_per_page' => 3,
                'post_type' => 'wealthpark',
                'tag_id' => 57,
                'post_status' => 'publish',
                'no_found_rows' => true
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) {
                  while ($the_query->have_posts()) {
                      $the_query->the_post();
                      $category = get_the_terms(get_the_ID(), "category");
                      $tags = array_map(function ($tag) {
                          global $_;
                          return "
                          <li class='blog-articles__meta-item'>
                            <a class='blog-articles__meta-link' href='{$_(get_term_link($tag->term_id))}'>
                              {$_($tag->name)}
                            </a>
                          </li>";
                      }, get_the_tags());
                      echo "
                  <li class='blog-articles__item'>
                    <div class='blog-articles__item-header'>
                      <a class='blog-articles__item-category' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                      <p class='blog-articles__item-date'>{$_(get_the_date('Y.m.d'))}</p>
                    </div>
                    <a class='blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
                      <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                    </a>
                    <div class='blog-articles__item-body'>
                    <p class='blog-articles__item-body--inner'>
                      {$_(get_the_title())}
                    </p>
                  </div>
                  <ul class='blog-articles__meta'>
                      {$_(implode($tags))}
                  </ul>
                  </li>";
                  }
              }
              wp_reset_query();
            ?>
          </ul>
    </div>
  </section> -->

  <section class="career-story section-block">
    <div class="career-story__inner">
      <ul class="blog-articles__list">
      <?php
          $relatedArticle1 = get_field('related_article_1');
          $relatedArticle2 = get_field('related_article_2');
          $relatedArticle3 = get_field('related_article_3');
          $thePostIdArray = array($relatedArticle1, $relatedArticle2, $relatedArticle3);
          $args = array(
            'posts_per_page' => 3,
            'post_type' => array( 'wealthpark', 'news'),
            'post_status' => 'publish',
            'no_found_rows' => true,
            'post__in' => $thePostIdArray
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) {
              while ($the_query->have_posts()) {
                $the_query->the_post();
                $category = get_the_terms(get_the_ID(), array('category','news_category',));
                $tags = array_map(function ($tag) {
                    global $_;
                    return "
                    <li class='blog-articles__meta-item'>
                      <a class='blog-articles__meta-link' href='{$_(get_term_link($tag->term_id))}'>
                        {$_($tag->name)}
                      </a>
                    </li>";
                }, $_(!empty(get_the_tags()) ? get_the_tags() : []));
                  echo "
                    <li class='blog-articles__item'>
                    <div class='blog-articles__item-header'>
                      <a class='blog-articles__item-category' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                      <p class='blog-articles__item-date'>{$_(get_the_date('Y.m.d'))}</p>
                    </div>
                      <a class='blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
                        <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                      </a>
                      <div class='blog-articles__item-body'>
                        <p class='blog-articles__item-body--inner'>
                          {$_(get_the_title())}
                        </p>
                      </div>
                      <ul class='blog-articles__meta'>
                        {$_(!empty($tags) ? $_(implode($tags)) : '')}
                      </ul>
                    </li>
                  ";
              }
          }
          wp_reset_query();
        ?>
      </ul>
    </div>
  </section>