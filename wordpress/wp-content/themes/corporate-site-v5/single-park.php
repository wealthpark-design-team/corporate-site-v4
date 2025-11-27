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
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc" />
<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/manifest.json?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<meta property="og:image" content="<?=get_the_post_thumbnail_url(); ?>" />
<meta property="og:title" content="<?=get_the_title(); ?>" />
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
<?php include "tag-manager-body.php" ?>
<div id="page" class="whole-page">
  <?php include "header-common.php" ?>
	<div id="content" class="site-content">
	<div id="primary" class="content-area news_page blog hr-blog">
		<main id="main" class="site-main wp_container wp_container--article" role="main">
		<section id="section-news-detail">
    <article class="blog-content">
      <?php
        while (have_posts()) :
        the_post();
        $pan = new breadcrumb();
        $pan->append("HOME", home_url());
        $pan->append("Park", get_post_type_archive_link("park"));
        $pan->append(get_the_title(), get_permalink());
        // $pan->build();

        $category = get_the_terms(get_the_ID(), "park_category");
      ?>
      <section class="news-detail-box">
      <section class="blog-content__header">
      <?php if (!empty($category)): ?>
        <a class="blog-content__header-category" href="<?=get_term_link($category[0])?>">
          <?=$category[0]->name ?>
        </a>
        <?php endif; ?>
        <p class="blog-content__header-date"><?=get_the_date("Y.m.d") ?></p>
      </section>
      <h1 class="blog-content__headline"><?=get_the_title() ?></h1>
      <?php
        new TableOfContents();
        the_content();
      ?>          
      </section>

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
          // $terms = get_the_tags();
          $terms = wp_get_post_terms($post->ID,'park_tag');
        ?>
        <ul class="blog-content__footer-tags">
          <?= $tags($terms, "blog-content__footer")?>
        </ul>

      </section>
    </article>
      <?php
      $include = array();
      if ($terms) {
          foreach ($terms as $term) {
              array_push($include, $term->term_id);
          }
      }

      $query = new WP_Query(array(
        'post_type' => 'park',
        'posts_per_page' => 6,
        'post_status'	=> 'publish',
        'no_found_rows' => true,
        'post__not_in' => array(get_the_ID()),
        'tax_query' => array(
            array(
                'taxonomy' => 'park_tag',
                'terms' => array(implode(", ", $include)),
                'field' => 'id'
            )
        )
    ));

      if ($query->have_posts()) {
          echo "
          <section class='blog-articles'>
          <div class='blog-articles__header'>
            <h2 class='blog-articles__headline'>RELATED ARTICLES</h2>
          </div>    
          <ul class='blog-articles__list'>";
          while ($query->have_posts()) {
              $query->the_post();
              $category = get_the_terms(get_the_ID(), "park_category");
              echo "
              <li class='blog-articles__item'>
                <div class='blog-articles__item-header'>
                  <a class='blog-articles__item-category' href='{$_(!empty($category) ? get_term_link($category[0]->term_id) : '#')}'>
                    {$_(!empty($category) ? $category[0]->name : 'その他')}
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
                  {$_(!empty(wp_get_post_terms($post->ID,'park_tag')) ? $tags($terms = wp_get_post_terms($post->ID,'park_tag'), 'blog-articles__meta') : '')}
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
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/toc.js"></script>
  </body>
  </html>
