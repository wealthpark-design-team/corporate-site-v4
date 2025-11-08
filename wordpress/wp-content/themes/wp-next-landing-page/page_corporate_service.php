<?php
/*
Template Name: Corporate Site - Service
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
<title><?php _e("corporate.meta-title.service", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("corporate.meta-description.service", 'wp-next-landing-page'); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php _e("corporate.meta-title.service", 'wp-next-landing-page'); ?>">
<meta property="og:description" content="<?php _e("corporate.meta-description.service", 'wp-next-landing-page'); ?>">
<!-- <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/business/img/keyvisual_002.png"> -->
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
<?php include "external-css-js-common.php" ?>
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
<div class="wealth-park-triangle">
  <?php include "header-common.php" ?>
  <section class="page-name">
    <div class="page-name__inner">
      <h1 class="page-name__title">Services</h1>
      <p class="page-name__caption"><?php _e("page-caption.service", 'wp-next-landing-page'); ?></p>
    </div>
  </section>
</div>
<section class="container services">
  <div class="service--app">
    <div class="service__inner">
      <div class="service__inner__message">
        <h2 class="service-logo--app"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/header_logo.png" alt="WealthPark" /></h2>
        <p class="service-tagline"><?php _e("service.tagline.app", 'wp-next-landing-page'); ?></p>
        <p class="service-descriprion"><?php _e("service-description.app", 'wp-next-landing-page'); ?></p>
        <div class="button--inverse">
          <a href="https://wealth-park.com/" target="_blank"><?php _e("button.more", 'wp-next-landing-page'); ?></a>
        </div>
      </div>
      <div class="service__inner__visual">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/service_business_pict.png" alt="" />
      </div>
    </div>
  </div>
  <div class="service--business">
    <div class="service__inner">
      <div class="service__inner__message">
        <h2 class="service-logo--business"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/logo_header.png" alt="WealthPark Business" /></h2>
        <p class="service-tagline"><?php _e("service.tagline.wp-business", 'wp-next-landing-page'); ?></p>
        <p class="service-descriprion"><?php _e("service-description.wp-business", 'wp-next-landing-page'); ?></p>
        <div class="button--inverse">
          <a href="https://wealth-park.com/ja/business/" target="_blank"><?php _e("button.more", 'wp-next-landing-page'); ?></a>
        </div>
      </div>
      <div class="service__inner__visual">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/keyvisual_002.png" alt="" />
      </div>
    </div>
  </div>
  <div class="service--am">
    <div class="service__inner">
      <div class="service__inner__message">
        <h2 class="service-logo--am"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/asset-management/img/logo.png" alt="WealthPark Asset Management" /></h2>
        <p class="service-tagline"><?php _e("service.tagline.wp-am", 'wp-next-landing-page'); ?></p>
        <p class="service-descriprion"><?php _e("service-description.wp-am", 'wp-next-landing-page'); ?></p>
        <div class="button--inverse">
          <a href="https://wealth-park.com/ja/asset-management/" target="_blank"><?php _e("button.more", 'wp-next-landing-page'); ?></a>
        </div>
      </div>
      <div class="service__inner__visual">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/app/img/cross-device_mock_001.png" alt="" />
      </div>
    </div>
  </div>
</section>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>
<?php include "drawer-nav-corporate.php" ?>
<script>
  $(function() {
      $('.drawer').drawer();
  });
</script>
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
