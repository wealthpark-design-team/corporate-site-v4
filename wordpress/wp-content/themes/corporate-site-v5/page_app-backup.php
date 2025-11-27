<?php
/*
Template Name: Product Page - App
*/
if ($_SERVER['REQUEST_URI'] === '/en/') {
    header('Location: https://wealth-park.com/en/lp-product-us/');
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<script type="text/javascript">
  setTimeout(function(){
    var nowURL = location.href;
    if(nowURL.indexOf('#privacy_policy') !== -1){
      location.href = '/corporate/privacy-policy/';
    }
  }, 0);
</script>
<?php include "tag-manager-head.php" ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<title><?php _e("app.meta_title", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("app.meta_description", 'wp-next-landing-page'); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php _e("app.meta_description", 'wp-next-landing-page'); ?>">
<meta property="og:description" content="<?php _e("am.meta-description", 'wp-next-landing-page'); ?>">
<meta property="og:url" content="https://wealth-park.com/" />
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/app/ogp_image_wp-app_002.jpeg">
<meta property="og:site_name" content="WealthPark" />
<meta property="og:description" content="<?php _e("app.meta_description", 'wp-next-landing-page'); ?>">
<meta name="twitter:card" content="summary_large_image" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/app/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slick.css?<?php echo date('Ymd-Hi'); ?>" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slick-theme.css?<?php echo date('Ymd-Hi'); ?>" media="screen" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc" />
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/slick.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/modal-multi.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/rellax.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>

<div class="hero_v3">
  <section class="container">
    <div class="hero__inner_v3">
      <div class="hero__message">
        <div class="hero__message_top">
          <?php _e("corporate.hero-message-v3", 'wp-next-landing-page'); ?>
        </div>
        <?php _e("corporate.panel-banners", 'wp-next-landing-page'); ?>
      </div>
    </div>
  </section>
</div>

<!-- ブログセクション -->
<main id="main" class="site-main wp_container blog-container" role="main">
  <section id="section-blog-list" class="section-blog-list--top">
		<?php
        $_ = function ($str) {
            return $str;
        };
        ?>
		<section class="blog-recommend corporate-top-news">
			<div class="blog-articles__header">
				<h2 class="blog-articles__headline"><?php _e("menu.news", 'wp-next-landing-page'); ?></h2>
			</div>
			<?php
                $query = new WP_Query(array(
                    'post_type' => 'news',
                    'posts_per_page' => 2,
                    'post_status'	=> 'publish',
                    'paged'	=> get_query_var('paged') ? get_query_var('paged') : 1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'news_category',
                            'terms' => 100,
                            'field' => 'id'
                        )
                    )
                ));
                if ($query->have_posts()) {
                    echo "<ul class='blog-recommend__list'>";
                    while ($query->have_posts()) {
                        $query->the_post();
                        $category = get_the_terms(get_the_ID(), "news_category");
                        echo "
                        <li class='blog-recommend__item'>
                          <a class='blog-recommend__thumb' href='{$_(get_permalink())}'>
                            <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                          </a>
                          <div class='blog-recommend__body'>
                            <div class='blog-recommend__header'>
                              <a class='blog-recommend__header-cate' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                              <p class='blog-recommend__header-date'>{$_(get_the_date('Y.m.d'))}</p>
                            </div>
                            <a class='blog-recommend__title' href='{$_(get_permalink())}'>{$_(get_the_title())}</a>
                            <p class='blog-recommend__description'>{$_(mb_substr(wp_strip_all_tags(get_the_content()), 0, 100))}…</p>
                            <div class='blog-recommend__footer'>
                              <a class='blog-recommend__readmore' href='{$_(get_permalink())}'>{$_(esc_html__("readmore", 'wp-next-landing-page'))}</a>
                            </div>
                          </div>
                        </li>
                        ";
                    }
                    echo "</ul>";
                }
                wp_reset_query();
            ?>
		</section>

    <section class="blog-articles corporate-top-news">
      <?php
          if (have_posts()) : ?>
        <ul class="news__list">
        <?php
                  $query = new WP_Query(array(
                      'post_type' => 'news',
                      'posts_per_page' => 6,
                      'post_status'	=> 'publish',
                      'tax_query' => array(
                        array(
                            'taxonomy' => 'news_category',
                            'terms' => 100,
                            'field' => 'id',
                            'operator' => 'NOT IN',
                        )
                      )
                  ));

                  $_ = function ($str) {
                      return $str;
                  };

                  if ($query->have_posts()) {
                      while ($query->have_posts()) {
                          $query->the_post();
                          $category = get_the_terms(get_the_ID(), "news_category");
                          echo "
                          <li class='blog-articles__item'>
                            <a class='blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
                              <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                            </a>
                            <div class='blog-articles__item-header'>
                              <a class='blog-articles__item-category' href='{$_(!empty($category) ? get_term_link($category[0]->term_id) : '#')}'>
                                {$_(!empty($category) ? $category[0]->name : 'その他')}
                              </a>
                              <p class='blog-articles__item-date'>{$_(get_the_date('Y.m.d'))}</p>
                            </div>
                            <div class='blog-articles__item-body'>
                              <p class='blog-articles__item-body--inner'>
                                <a href='{$_(get_the_permalink())}'>
                                  {$_(get_the_title())}
                                </a>
                              </p>
                            </div>
                          </li>
                          ";
                      }
                  }
              ?>
      </ul>
      <?php
            wp_reset_query();
        else :
            get_template_part('template-parts/content-news', 'none');
        endif; ?>
        <p class="text-right">
          <a class="blog-articles__link" href="<?php echo esc_url(home_url('/news/')); ?>">
            <?php _e("article.all-articles", 'wp-next-landing-page'); ?>
          </a>
        </p>
    </section>
		<section class="blog-articles">
			<div class="blog-articles__header">
				<h2 class="blog-articles__headline">WealthParkブログ最新記事</h2>
			</div>
      <ul class="blog-articles__list blog-articles__list--latest">
        <?php
          $args = array(
            'posts_per_page' => 7,
            'post_type' => 'wealthpark',
            'post_status' => 'publish',
            'no_found_rows' => true
          );
          $index = 0;
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) {
              while ($the_query->have_posts()) {
                  $the_query->the_post();
                  $category = get_the_terms(get_the_ID(), "category");
                  $index++;
                  $tags = array_map(function ($tag) {
                      global $_;
                      return "
                      <li class='blog-articles__meta-item'>
                        <a class='blog-articles__meta-link' href='{$_(get_term_link($tag->term_id))}'>
                          {$_($tag->name)}
                        </a>
                      </li>";
                  }, $_(!empty(get_the_tags()) ? get_the_tags() : []));
                  if($index == 1) {
                    echo "
                        <li class='blog-recommend__item'>
                          <a class='blog-recommend__thumb' href='{$_(get_permalink())}'>
                            <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                          </a>
                          <div class='blog-recommend__body'>
                            <div class='blog-recommend__header'>
                              <a class='blog-recommend__header-cate' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                              <p class='blog-recommend__header-date'>{$_(get_the_date('Y.m.d'))}</p>
                            </div>
                            <div>
                              <a class='blog-recommend__title' href='{$_(get_permalink())}'>{$_(get_the_title())}</a>
                              <p class='blog-recommend__description'>{$_(mb_substr(wp_strip_all_tags(get_the_content()), 0, 100))}…</p>
                            </div>
                            <ul class='blog-articles__meta'>
                              {$_(!empty($tags) ? $_(implode($tags)) : '')}
                            </ul>
                          </div>
                        </li>
                      ";
                  } else {
                    echo "
                      <li class='blog-articles__item'>
                        <a class='blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
                          <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                        </a>
                        <div class='blog-articles__item-header'>
                          <a class='blog-articles__item-category' href='{$_(!empty($category) ? get_term_link($category[0]->term_id) : '#')}'>
                            {$_(!empty($category) ? $category[0]->name : 'その他')}
                          </a>
                          <p class='blog-articles__item-date'>{$_(get_the_date('Y.m.d'))}</p>
                        </div>
                        <div class='blog-articles__item-body'>
                          <p class='blog-articles__item-body--inner'>
                            <a href='{$_(get_the_permalink())}'>
                              {$_(get_the_title())}
                            </a>
                          </p>
                        </div>
                        <ul class='blog-articles__meta'>
                            {$_(!empty($tags) ? $_(implode($tags)) : '')}
                        </ul>
                      </li>";
                  }
              }
          }
          wp_reset_query();
        ?>
      </ul>
      <p class="text-right">
        <a class="blog-articles__link" href="<?php echo esc_url(home_url('/wealthpark-blog/')); ?>">
					<?php _e("article.all-articles", 'wp-next-landing-page'); ?>
				</a>
      </p>
		</section>
  </section>
</main>
<!-- ブログセクション -->

<?php include "template-parts/partnerships-parts.php" ?>


<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-app.php" ?>
</footer>
<script>
  function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
  }
</script>
</body>
</html>
