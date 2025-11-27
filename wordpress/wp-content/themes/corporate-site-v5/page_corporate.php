<?php
/*
Template Name: Corporate Site
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
<title><?php _e("corporate.meta-title.top", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("corporate.meta-description.top", 'wp-next-landing-page'); ?>">
<meta property="og:title" content="<?php _e("corporate.meta-title.top", 'wp-next-landing-page'); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="https://wealth-park.com/corporate/" />
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/corporate/ogp_image_wp-corporate_001.jpg">
<meta property="og:site_name" content="WealthPark Corporate" />
<meta property="og:description" content="<?php _e("corporate.meta-description.top", 'wp-next-landing-page'); ?>">
<meta name="twitter:card" content="summary_large_image" />
<!-- <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/business/img/keyvisual_002.png"> -->
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css"> -->
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
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
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/modal-multi.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>
<div class="hero">
  <?php
    $topPage = "navigation--common--top";
    include "header-common.php"
  ?>
  <section class="container">
    <div class="hero__inner">
      <div class="hero__massage">
        <h1 class="hero__massage-title"><?php _e("corporate.hero-message", 'wp-next-landing-page'); ?></h1>
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
              <a target="_blank" href="https://shouji.baidu.com/software/25990171.html" class="baidu-store"></a>
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
      </div>
    </div>
  </section>
  <section class="container service-list">
    <div class="container__inner service-list__inner">
      <ul class="service-list__items">
        <li class="service-list__item">
          <figure class="service-list__item-thumb">
            <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/service_001.jpg" alt="" /></a>
          </figure>
          <h2 class="service-list__item-lead"><?php _e("service-name.app", 'wp-next-landing-page'); ?></h2>
          <p class="service-list__item-description"><?php _e("service-description.app", 'wp-next-landing-page'); ?></p>
          <div class="service-list__item-button">
            <div class="button">
              <a href="<?php echo esc_url(home_url('/')); ?>" target="_blank"><?php _e("button.more", 'wp-next-landing-page'); ?></a>
            </div>
          </div>
        </li>
        <li class="service-list__item">
          <figure class="service-list__item-thumb">
            <a href="<?php echo esc_url(home_url('/business')); ?>" target="_blank"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/service_002.jpg" alt="" /></a>
          </figure>
          <h2 class="service-list__item-lead"><?php _e("service-name.wp-business", 'wp-next-landing-page'); ?></h2>
          <p class="service-list__item-description"><?php _e("service-description.wp-business", 'wp-next-landing-page'); ?></p>
          <div class="service-list__item-button">
            <div class="button">
              <a href="<?php echo esc_url(home_url('/business')); ?>" target="_blank"><?php _e("button.more", 'wp-next-landing-page'); ?></a>
            </div>
          </div>
        </li>
        <li class="service-list__item">
          <figure class="service-list__item-thumb">
            <a href="<?php echo esc_url(home_url('/asset-management')); ?>" target="_blank"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/service_003.jpg" alt="" /></a>
          </figure>
          <h2 class="service-list__item-lead"><?php _e("service-name.wp-am", 'wp-next-landing-page'); ?></h2>
          <p class="service-list__item-description"><?php _e("service-description.wp-am", 'wp-next-landing-page'); ?></p>
          <div class="service-list__item-button">
            <div class="button">
              <a href="<?php echo esc_url(home_url('/asset-management')); ?>" target="_blank"><?php _e("button.more", 'wp-next-landing-page'); ?></a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
</div>
<?php include "template-parts/partnerships-parts.php" ?>
<?php include "news-summary.php" ?>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>
<script>
  $("#modal-open").click(
  	function(){
      //キーボード操作などにより、オーバーレイが多重起動するのを防止する
      $(this).blur() ;	//ボタンからフォーカスを外す
      //新しくモーダルウィンドウを起動しない
      if($("#modal-overlay")[0]) return false ;
      $("body").append('<div id="modal-overlay" class="modal-overlay"></div>');
      $("#modal-overlay").fadeIn("slow");
      $("#modal-content").fadeIn("slow");
  	}
  );
  $("#modal-overlay, #modal-close").unbind().click(function(){
    $("#modal-content, #modal-overlay").fadeOut("slow",function(){
    	$("#modal-overlay").remove();
    });
  });
</script>
<script type="text/javascript">
  $('.slider').slick({
    // autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
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
