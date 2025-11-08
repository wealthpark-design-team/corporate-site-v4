<?php
/*
Template Name: Careers Sub Page Template
*/
$_ = function ($str) {
    return $str;
};
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<title><?php echo get_the_title(); ?></title>
<meta name="description" content="<?php _e("corporate.meta-description.careers", 'wp-next-landing-page'); ?>">
<meta property="og:title" content="<?php _e("corporate.meta-title.careers", 'wp-next-landing-page'); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://wealth-park.com/careers/" />
<meta property="og:image" content="<?=get_the_post_thumbnail_url(); ?>">
<meta property="og:site_name" content="WealthPark Corporate" />
<meta property="og:description" content="<?php _e("corporate.meta-description.careers", 'wp-next-landing-page'); ?>" />
<meta name="twitter:card" content="summary_large_image" />
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/careers.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja/corporate" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en/corporate" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc/corporate" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc/corporate" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc/corporate" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc/corporate" />
<script type="text/javascript" src="<?=get_template_directory_uri() ?>/js/smooth-scroll.js"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php $page_id = get_queried_object_id();?>
<?php include "template-parts/careers-url.php" ?>  
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>

<div id="careers-page">
  <section class="careers-top__hero section-block">
    <?php if (has_post_thumbnail()): ?>
      <img loading='lazy' class="careers-top__hero--img" src="<?=get_the_post_thumbnail_url(); ?>" />
    <?php endif; ?>
  </section>
  <?php if(get_field('about_heading') != ''): ?>
  <section class="container section-block">
    <div class="container__inner container__inner--careers">
      <h4 class="container__inner--title container__inner--title-sub">
        <?= get_field('about_heading'); ?>
      </h4>
      <p class="container__inner--description">
        <?= get_field('about_description'); ?>
      </p>
    </div>
  </section>
  <?php endif; ?>
  <?php if(get_field('about_banner') != ''): ?>
  <section class="container section-block">
    <div class="container__inner container__inner--careers container__inner--careers-about">
      <img src="<?= get_field('about_banner'); ?>">
    </div>
  </section>
  <?php endif; ?>

  
  <?php if(get_field('tree_pc') != ''): ?>
    <section class="page-title section-block section-block--mb-5">
      <div class="page-title__inner">
          <h3 class="page-title__name">組織図</h3>
      </div>
    </section>
    <section class="container section-block">
      <div class="container__inner container__inner--careers tree">
        <img src="<?= get_field('tree_pc') ?>" alt="組織について" class="tree-pc <?= get_field('tree_pc_narrow') ? "tree-pc--narrow" : ""; ?>">
        <img src="<?= get_field('tree_sp') ?>" alt="組織について" class="tree-sp">
      </div>
    </section>
  <?php endif; ?>

  <section class="page-title section-block section-block--mb-5" id="job-listings-title">
    <div class="page-title__inner">
      <h3 class="page-title__name"><?php _e("careers_list_caption-positions", 'wp-next-landing-page') ?></h3>
    </div>
  </section>

  <section class="container section-block">
    <div class="container__inner container__inner--careers " id="job-listings">
    <?php
      $terms = get_terms('jobtype');
      $jobtype_slugs = get_field('jobtype_slug');
      $jobtypes = explode (",", $jobtype_slugs);
      
      foreach ($terms as $term) {
          $args = array(
            'post_type' => 'careers',
            'posts_per_page' => 100,
            'tax_query' => array(
              array(
                'taxonomy' => 'jobtype',
                'field' => 'id',
                'terms' => array($term->term_id),
              ),
            ),
          );
          $the_query = new WP_Query($args);
          global $_;
          if ($the_query->have_posts()) {
            echo "<ul class='blog-articles__list' id='careers_job_listings'>";
            for ($i=0; $i < count($jobtypes); $i++) { 
              if ($term->slug == trim($jobtypes[$i])){
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    echo "
                      <li class='blog-articles__item'>
                        <a class='blog-articles__item-thumb' href='{$_(get_permalink())}'>
                          <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                        </a>
                        <div class='blog-articles__item-body'>
                          <p class='blog-articles__item-body--inner'>
                            {$_(get_the_title())}
                          </p>
                        </div>
                      </li>
                      ";
                }
              }
            }
            echo "</ul>";
          }
        }
        wp_reset_query();
      ?>
    </div>
  </section>

  <?php
    // Get the request URI
    $requestUri = $_SERVER['REQUEST_URI'];
    $requestUri = strtok($requestUri, '?');
    $segments = explode('/', trim($requestUri, '/'));
    $lastSegment = end($segments);

    $tagLink = '/park_tag/dxコンサルティングサービス事例/';

    if($lastSegment == 'wpb') {
      $recommend = 267; // Recommend-wpb
      $tagTitle = "#DXコンサルティングサービス事例";
    }elseif($lastSegment == 'wai') {
      $recommend = 263; // Recommend-wai
    }elseif($lastSegment == 'ret') {
      $recommend = 264; // Recommend-ret
    }
  ?>
  
  <?php
    $_ = function ($str) {
        return $str;
    };
  ?>
  
  <?php
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
          'posts_per_page' => 4,
          'post_status'	=> 'publish',
          'no_found_rows' => true,
          'tax_query' => array(
            array(
                'taxonomy' => 'park_tag',
                'terms' => $recommend,
                'field' => 'id'
            )
        )
      ));
      if ($query->have_posts()) {
          echo "
                <section class='page-title section-block section-block--mb-5'>
                  <div class='page-title__inner'>
                    <h3 class='page-title__name'>{$_($tagTitle)}</h3>
                  </div>
                </section>
                <section class='blog-recommend'>
                  <div class='container__inner container__inner--careers post-summary__inner'>

                    <ul class='blog-recommend__list blog-articles__list--careers'>";
                      $index = 0;
                      while ($query->have_posts()) {
                        $index++;
                        $query->the_post();
                        $category = get_the_terms(get_the_ID(), "park_category");
                        if($index == 1) {
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
                        } else {
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
                      }
          echo "    </ul>
                  {$_($index > 4 ? '<div class="text-right"><a href="'.$tagLink.'" class="black-link">すべての記事</a></div>' : '')}
                  </div>
                </section>";
      }
      wp_reset_query();
    ?>
      
    
  

  <!-- PARK INTERVIEWS -->
  <section class="page-title section-block section-block--mb-5">
    <div class="page-title__inner container__inner container__inner--careers">
      <h3 class="page-title__name">
        <span><?= get_field('park_interview_title');?></span>
      </h3>
    </div>
  </section>
  <section class="container section-block blog-articles">
    <div class="container__inner">
      <?php
        $park_tag_id = get_field('park_tag_id');
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
        $latest = new WP_Query(array(
            'post_type' => 'park',
            'posts_per_page' => 6,
            'post_status'	=> 'publish',
            'no_found_rows' => true,
            'tax_query' => array(
              array(
                'taxonomy' => 'park_tag',
                'terms' => $park_tag_id,
                'field' => 'id'
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
                <div class='blog-articles__item-body'>
                  <p class='blog-articles__item-body--inner'>
                    {$_(get_the_title())}
                  </p>
                </div>
              </li>
              ";
            }
            echo "</ul>";
        }
        wp_reset_query();
      ?>
      <div class="text-right">
        <a href="<?= home_url() ?>/park_tag/<?= get_field('park_tag_name');?>/" class="black-link">すべてのインタビュー</a>
      </div>
    </div>
  </section>



  <!-- CAREERS DEPARTMENT -->
  <div class="grey-background">
    <?php include "template-parts/careers-departments-tree.php" ?>
  </div>
</div>

<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script>

  // display or hide job listings title
  $(document).ready(function() {
    if(!$('#careers_job_listings').length) {
      $('#job-listings').append( '<p class="no-joblisting">該当するポジションは見つかりませんでした</p>' );
    }
  });
// // メインナビのページスクロール //
$(function () {
    $('a[href^="#"]').click(function() {
      // スクロールの速度
      let speed = 400; // ミリ秒で記述
      let href = $(this).attr("href");
      let target = $(href == "#" || href == "" ? 'html' : href);
      let headerHeight = $('.menu__navbar').outerHeight(); //固定ヘッダーの高さ
      let position = target.offset().top - headerHeight; //ターゲットの座標からヘッダの高さ分引く
      $('body,html').animate({
        scrollTop: position
      }, speed, 'swing');
      return false;
    });
});
// magnificPopupの表示
$(function () {
    $('.career-modal__team').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {  //ギャラリーオプション
            // enabled: true
        }
    });
});
// スマートフォンで全画面表示
$(document).ready(function(){
var hSize = $(window).height();
  $('.career-visual').height(hSize); // アドレスバーを除いたサイズを付与
});
$(window).resize(function(){ // ページをリサイズした時の処理
var hSize = $(window).height();
  $('.career-visual').height(hSize); // アドレスバーを除いたサイズを付与
});
</script>

<script type="text/javascript">
  function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
  }
</script>
</body>
</html>
