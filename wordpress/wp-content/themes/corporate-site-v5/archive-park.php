<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Next_Landing_Page
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>
<meta charset="<?php bloginfo('charset'); ?>">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
<meta name="apple-itunes-app" content="app-id=1068127268">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title>Park | WealthParkの温度を伝える</title>
<meta name="description" content="『WealthParkの “人” が持つ体温や熱量を、正しく広く届ける。』をコンセプトに、採用を目的とした発信をするオウンドメディアです。">
<meta property="og:type" content="website">
<meta property="og:title" content="Park | WealthParkの温度を伝える">
<meta property="og:description" content="『WealthParkの “人” が持つ体温や熱量を、正しく広く届ける。』をコンセプトに、採用を目的とした発信をするオウンドメディアです。">
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/corporate/park/ogp.jpg">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja/park" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en/park" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc/park" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc/park" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc/park" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc/park" />
<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/manifest.json?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/park.css?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->

<?php # wp_head(); ?>
</head>
<body>
<?php include "tag-manager-body.php" ?>

<div id="page" class="whole-page park-blog">
	<?php include "header-common.php" ?>
	<div id="content" class="site-content">
	<div id="primary" class="content-area blog_page blog">
    <section class="park-top__hero section-block">
      <div class="wp_container">
        <div class="visible-pc">
            <img loading='lazy' class="park-top__hero--img park-top__hero--img-mountain" src="<?php echo get_template_directory_uri() ?>/img/corporate/park/park-hero-pc-min.png" alt="WealthParkの「温度」を伝える"/>
        </div>
        <div class="visible-sp">
          <img loading='lazy' class="park-top__hero--img park-top__hero--img-mountain" src="<?php echo get_template_directory_uri() ?>/img/corporate/park/park-hero-sp-min.png" alt="WealthParkの「温度」を伝える"/>
        </div>
      </div>
    </section>
		<main id="main" class="site-main wp_container blog-container" role="main">
      <section id="section-blog-list">
      <?php
          $_ = function ($str) {
              return $str;
          };
          $pan = new breadcrumb();
          $pan->append("HOME", home_url());
          $pan->append("Park", get_post_type_archive_link("park"));
          // $pan->build();
          ?>
      <section class="blog-recommend">
        <?php
          $arrTerms = array(201); // recommend
          $tags = function ($tags, $class) {
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
                  $query = new WP_Query(array(
                      'post_type' => 'park',
                      'posts_per_page' => 3,
                      'post_status'	=> 'publish',
                      'no_found_rows' => true,
                      'tax_query' => array(
                        array(
                            'taxonomy' => 'park_tag',
                            'terms' => $arrTerms,
                            'field' => 'id'
                        )
                    )
                  ));
                  if ($query->have_posts()) {
                      echo "<ul class='blog-recommend__list'>";
                      while ($query->have_posts()) {
                          $query->the_post();
                          $category = get_the_terms(get_the_ID(), "park_category");
                          echo "
                            <li class='blog-recommend__item'>
                              <a class='blog-recommend__thumb' href='{$_(get_permalink())}'>
                                <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                              </a>
                              <div class='blog-recommend__body'>
                                <div class='blog-recommend__header'>
                                  <a class='blog-recommend__header-cate' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                                  
                                </div>
                                <a class='blog-recommend__title' href='{$_(get_permalink())}'>{$_(get_the_title())}</a>
                                <p class='blog-recommend__description'>{$_(mb_substr(wp_strip_all_tags(get_the_content()), 0, 75))}</p>
                                <ul class='blog-recommend__meta'>
                                  {$tags(wp_get_post_terms($post->ID,'park_tag'), 'blog-recommend__meta')}
                                </ul>
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
      
      <section class="blog-articles">
        <div class="blog-articles__header">
          <h2 class="blog-articles__headline">
            LATEST ARTICLES
          </h2>
        </div>
        <?php
          $latest = new WP_Query(array(
              'post_type' => 'park',
              'posts_per_page' => -1,
              'post_status'	=> 'publish',
              'no_found_rows' => true,
              'tax_query' => array(
                array(
                    'taxonomy' => 'park_tag',
                    'terms' => 201,
                    'field' => 'id',
                    'operator' => 'NOT IN',
                )
              )
          ));
          if ($latest->have_posts()) {
              echo "<ul class='blog-articles__list'>";
              while ($latest->have_posts()) {
                  $latest->the_post();
                  $category = get_the_terms(get_the_ID(), "park_category");
                  echo "
                <li class='blog-articles__item'>
                  <a class='blog-articles__item-thumb' href='{$_(get_permalink())}'>
                    <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                  </a>
                  <div class='blog-articles__item-header'>
                    <a class='blog-articles__item-category' href='{$_(!empty($category) ? get_term_link($category[0]->term_id) : '#')}'>
                      {$_(!empty($category) ? $category[0]->name : 'その他')}
                    </a>
                  </div>
                  <div class='blog-articles__item-body'>
                    <p class='blog-articles__item-body--inner'>
                      {$_(get_the_title())}
                    </p>
                  </div>
                  <ul class='blog-articles__meta'>
                    {$_(!empty(wp_get_post_terms($post->ID,'park_tag')) ? $tags($terms = wp_get_post_terms($post->ID,'park_tag'), 'blog-articles__meta') : '')}
                  </ul>
                </li>
                ";
              }
              echo "</ul>";
          }
          wp_reset_query();
        ?>
      </section>
		</main><!-- #main -->
	</div><!-- #primary -->
  </div>
	<footer>
    <?php include "template-parts/footer-main.php" ?>
    <?php include "template-parts/footer-sub-corporate.php" ?>
	</footer>
	<script type="text/javascript">
	  function dropsort() {
	      var browser = document.sort_form.sort.value;
	      location.href = browser
	  }
	</script>
	</body>
	</html>
