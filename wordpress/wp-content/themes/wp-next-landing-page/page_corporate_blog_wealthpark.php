<?php
/*
Template Name: Corporate Site - Blog - WealthPark
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
<title><?php _e("corporate.meta-title.blog-wealthpark", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("corporate.meta-description.blog-wealthpark", 'wp-next-landing-page'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
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
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>
<div class="wealth-park-triangle">
  <?php include "header-common.php" ?>
  <section class="page-name">
    <div class="page-name__inner">
      <h1 class="page-name__title"><?php _e("blog-wealthpark_list_title", 'wp-next-landing-page') ?></h1>
      <!-- <p class="page-name__caption"><?php _e("blog-wealthpark_list_caption", 'wp-next-landing-page') ?></p> -->
    </div>
  </section>
  <section class="container career-summary">
    <div class="container__inner career-summary__inner">
      <ul class="career-summary__lists">
        <?php $args = array(
          'numberposts' => 100, //表示する記事の数
          'post_type' => 'wealthpark' //投稿タイプ名
          // 条件を追加する場合はここに追記
        );
        $customPosts = get_posts($args);
        if($customPosts) : foreach($customPosts as $post) : setup_postdata( $post );
        ?>
        <li class="career-summary__article"><a href="<?php the_permalink(); ?>" class="career-summary__article-title"><?php echo get_the_date("Y.n.j"); ?> | <?php the_title(); ?></a></li>
        <?php endforeach; ?>
        <?php else : //記事が無い場合 ?>
        <p>Sorry, no posts matched your criteria.</p>
        <?php endif;
        wp_reset_postdata(); //クエリのリセット ?>
      </ul>
    </div>
  </section>
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
