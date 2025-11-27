<?php
/*
Template Name: Service Page - Asset Management
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<title><?php _e("am.meta-title", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("am.meta-description", 'wp-next-landing-page'); ?>">
<meta property="og:title" content="<?php _e("am.meta-title", 'wp-next-landing-page'); ?>">
<meta property="og:type" content="website">
<meta property="og:site_name" content="WealthPark Asset Management" />
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/wpam/service_002.png">
<meta property="og:description" content="<?php _e("am.meta-description", 'wp-next-landing-page'); ?>">
<meta name="twitter:card" content="summary_large_image" />
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css"> -->
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/asset-management/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja/asset-management" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en/asset-management" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc/asset-management" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc/asset-management" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc/asset-management" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc/asset-management" />
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php
$topPage = "navigation--common--top";
include "header-common.php"
?>
<div class="hero">
  <section class="container">
    <div class="hero__inner">
      <div class="hero__massage--am">
        <!-- <h1 class="hero__massage-title"><?php _e("am.hero-message", 'wp-next-landing-page'); ?></h1> -->
        <?php _e("wp-am.hero-message", 'wp-next-landing-page'); ?>
        <ul class="hero__massage-badges badges">
          <?php $current_lang = qtrans_getLanguage();
          if ($current_lang == "en") { ?>
            <li class="badge">
              <a target="_blank" href="https://itunes.apple.com/app/wealth-park-real-estate-investment/id1068127268" class="app-store"></a>
            </li>
            <li class="badge">
              <a target="_blank" href="https://play.google.com/store/apps/details?id=com.wealthpark.owner" class="google-play"></a>
            </li>
          <?php } elseif ($current_lang == "sc") { ?>
            <li class="badge">
              <a target="_blank" href="https://itunes.apple.com/cn/app/wealth-park-real-estate-investment/id1068127268" class="app-store"></a>
            </li>
            <!-- <li class="badge">
              <a target="_blank" href="https://shouji.baidu.com/software/25602928.html" class="baidu-store"></a>
            </li> -->
            <li class="badge">
              <a target="_blank" href="https://play.google.com/store/apps/details?id=com.wealthpark.owner&hl=zh" class="google-play"></a>
            </li>
          <?php } elseif ($current_lang == "tc") { ?>
            <li class="badge">
              <a target="_blank" href="https://itunes.apple.com/tw/app/wealth-park-real-estate-investment/id1068127268" class="app-store"></a>
            </li>
            <li class="badge">
              <a target="_blank" href="https://play.google.com/store/apps/details?id=com.wealthpark.owner&hl=zh-tw" class="google-play"></a>
            </li>
          <?php } elseif ($current_lang == "ja") { ?>
            <li class="badge">
              <a target="_blank" href="https://itunes.apple.com/jp/app/wealth-park-real-estate-investment/id1068127268" class="app-store"></a>
            </li>
            <li class="badge">
              <a target="_blank" href="https://play.google.com/store/apps/details?id=com.wealthpark.owner&hl=ja" class="google-play"></a>
            </li>
          <?php } ?>
        </ul>
        <p class="hero__massage-landlords"><?php _e("wp-am.hero-message-landlords", 'wp-next-landing-page'); ?></p>
      </div>
      <div class="hero__image">
          <?php _e("wp-am.hero-image", 'wp-next-landing-page'); ?>
      </div>
    </div>
  </section>
</div>

<section class="inPageLink container">
  <div class="inPageLink__inner container__inner">
    <ul class="inPageLink__lists">
      <?php _e("wp-am.page-links", 'wp-next-landing-page'); ?>
    </ul>
  </div>
</section>

<!-- troubles -->
<section class="troubles container" id="troubles">
  <div class="troubles__inner container__inner">
    <?php _e("wp-am.troubles", 'wp-next-landing-page'); ?>
  </div>
</section>
<!-- troubles -->

<!-- features -->
<section class="feature container" id="feature">
  <div class="feature__inner container__inner">
    <?php _e("wp-am.features", 'wp-next-landing-page'); ?>
  </div>
</section>
<!-- features -->

<!-- about -->
<section class="about container">
  <div class="about__inner container__inner">
    <?php _e("wp-am.about", 'wp-next-landing-page'); ?>
  </div>
</section>
<!-- about -->

<!-- movie -->
<section class="movie container">
  <div class="movie__inner container__inner">
    <ul class="movie__list">
      <li>
        <?php _e("wp-am.movie-message", 'wp-next-landing-page'); ?>
      </li>
      <li>
        <?php _e("wp-am.movie-link", 'wp-next-landing-page'); ?>
      </li>
    </ul>
  </div>
</section>
<!-- movie -->

<!-- hosting -->
<section class="hosting container" id="hosting">
  <div class="hosting__inner container__inner">
    <?php _e("wp-am.hosting", 'wp-next-landing-page'); ?>
  </div>
</section>
<!-- hosting -->

<!-- partnership -->
<section class="partnership container" id="partnership">
  <div class="partnership__inner container__inner">
    <?php _e("wp-am.partnership", 'wp-next-landing-page'); ?>
      <ul class="logos--4column">
        <li class="logos__logo">
          <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/img/wpam/ITRC.png" alt="ITRC">
        </li>
        <li class="logos__logo">
          <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/img/wpam/Tokyu-livable.png" alt="Tokyu Livable">
        </li>
        <li class="logos__logo">
          <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/img/wpam/Minamiaoyama.png" alt="Minamiaoyama">
        </li>
        <li class="logos__logo">
          <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/img/wpam/Ooyanet.png" alt="Ooyanet">
        </li>
        <li class="logos__logo">
          <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/img/wpam/PMC-asset-management.png" alt="PMC">
        </li>
        <li class="logos__logo">
          <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/img/wpam/Shinjhoh.png" alt="Shinjhoh">
        </li>
        <li class="logos__logo">
          <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/img/wpam/China-zhiguqushi.png" alt="智谷趋势">
        </li>
      </ul>
  </div>
</section>
<!-- partnership -->


<!-- hsforms -->
  <?php _e("wp-am.hsforms", 'wp-next-landing-page'); ?>
<!-- hsforms -->

<!-- estate -->
<section class="estate container" id="estate">
  <div class="estate__inner container__inner">
    <h2 class="estate__tit section-name">
      <?php _e("wp-am.estate-title", 'wp-next-landing-page'); ?>
    </h2>
    <article class="blog-content">
      <?php
        while (have_posts()) :
        the_post();
        $category = get_the_category();
      ?>
      <!-- <section class="news-detail-box">
        <section class="blog-content__footer">
          <?php
            $_ = function ($str) {
                return $str;
            };
            $tags = function ($tags, $class) {
                if (!$tags) {
                    return '';
                }
                global $_;
                $array = array();
                foreach ($tags as $tag) {
                    array_push(
                        $array,
                        "<li class='{$_($class)}-item'>
                        <a class='{$_($class)}-link' href='{$_(get_term_link($tag->term_id))}'>{$_($tag->name)}</a>
                        </li>"
                    );
                }
                return implode("", $array);
            };
            $terms = get_the_tags();
          ?>
          <ul class="blog-content__footer-tags">
            <?=$tags($terms, "blog-content__footer")?>
          </ul>
        </section>
      </section> -->
    </article>
        <?php
        $include = array();
        if ($terms) {
            foreach ($terms as $term) {
                array_push($include, $term->term_id);
            }
        }

        $query = new WP_Query(array(
            'post_type' => 'wealthpark',
            'posts_per_page' => 3,
            'post_status'	=> 'publish',
            'no_found_rows' => true,
            'tag' => 'propertymarket',
            'tag__in' => $include,
            'post__not_in' => array(get_the_ID())
        ));
        if ($query->have_posts()) {
            echo "
            <section class='blog-articles'>
            <ul class='blog-articles__list'>";
            while ($query->have_posts()) {
                $query->the_post();
                $category = get_the_terms(get_the_ID(), "category");
                echo "
                <li class='blog-articles__item'>
                  <div class='blog-articles__item-header'>
                    <a class='blog-articles__item-category' href='{$_(get_term_link($category[0]->term_id))}'>
                      {$category[0]->name}
                    </a>
                    <p class='blog-articles__item-date'>
                      {$_(get_the_date('Y.m.d'))}
                    </p>
                  </div>
                  <a class='blog-articles__item-thumb' href='{$_(get_permalink())}'>
                    <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                  </a>
                  <div class='blog-articles__item-body'>
                    <p class='blog-articles__item-body--inner'>
                      {$_(get_the_title())}
                    </p>
                  </div>
                  <ul class='blog-articles__meta'>
                    {$tags(get_the_tags(), 'blog-articles__meta')}
                  </ul>
                </li>
                ";
            }
            echo "</ul></section>";
        }
        wp_reset_query(); ?>
          <?php
            endwhile; // End of the loop.
          ?>
    <div class="estate__btn">
      <?php
        // $url = home_url('/');
        // $large = ['/tc/','/ja/','/en/','/sc/'];
        // $url = str_replace($large, '' ,$url);
      ?>
      <a href="<?php echo esc_url(home_url('/')); ?>/tag/propertymarket/">READ MORE</a>
    </div>
  </div>
</section>
<?php include "news-summary.php" ?>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-wpam.php" ?>
</footer>
<script type="text/javascript">
// // メインナビのページスクロール //
$(function () {
    $('a[href^="#"]').click(function() {
      // スクロールの速度
      let speed = 400; // ミリ秒で記述
      let href = $(this).attr("href");
      let target = $(href == "#" || href == "" ? 'html' : href);
      let headerHeight = $('.navigation').outerHeight(); //固定ヘッダーの高さ
      let position = target.offset().top - headerHeight; //ターゲットの座標からヘッダの高さ分引く
      $('body,html').animate({
        scrollTop: position
      }, speed, 'swing');
      return false;
    });
});
  function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
  }
</script>
</body>
</html>
