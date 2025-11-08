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
?>
<!DOCTYPE html>
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
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php
    $getImage = function ($fileName) {
        return get_template_directory_uri()."/img/help/{$fileName}";
    };
    $current = get_queried_object_id();
    $term = get_term($current);
    $slug = $term->slug;
?>
<?php
  global $post_type;
  $previous_url = $_SERVER['HTTP_REFERER'];
  if (preg_match("/asset-management/", $previous_url)) {
      $post_type = 'help_wpam';
      $parent_url = '/asset-management/';
      $top_pan = "WealthPark Asset Management";
  }
  else {
      $post_type = 'help_wpb';
      $parent_url = '/business/';
      $top_pan = "WealthPark Business";
  }
?>
<div id="page" class="whole-page">
	<?php include "header-common.php" ?>
	<main id="main" class="site-content">
		<article class="help-archive help-archive--<?php echo $help_type;?>">
			<section class="help-list">
        <div class="container__inner reset-padding">
          <h2 class="help-list__headline--large"><?=$term->name?></h2>
          <p class="help-list__description">
              不動産オーナー向けサービスWealthParkの
              「<?=$term->name?>」
              記事一覧ページです。
          </p>
          <div class="post-summary__inner">
            <?php
              $_ = function ($str) {
                  return $str;
              };
              $query = new WP_Query(array(
                  "post_type" => $post_type,
                  "post_status" => "publish",
                  "posts_per_page" => -1,
                  "no_found_rows" => true,
                  "tax_query" => array(
                      array(
                          "taxonomy" => "help_topics",
                          'field' => 'id',
                          "terms" => $current
                      )
                  )
              ));
              if ($query->have_posts()) {
                while ($query->have_posts()) {
                  $query->the_post();
                  $terms = get_the_terms(get_the_ID(), "help_topics");
                  
                  echo "
                  <div class='post-summary__item'>
                    <a class='post-summary__item--inner' href='{$_(get_the_permalink())}'>{$_(get_the_title())}</a>
                  </div>
                ";
                    }
                }
                wp_reset_query();
              ?>
          </div>
        </div>
			</section>
		</article>
	</main>
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
