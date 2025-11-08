<?php
/*
Template Name: Product Page - App - Event
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
<title>Event | WealthPark</title>
<meta name="description" content="WealthParkが主催するイベント、カンファレンス、セミナーをご紹介。">
<meta property="og:type" content="website">
<meta property="og:title" content="Event - WealthPark">
<meta property="og:description" content="WealthParkが主催するイベント、カンファレンス、セミナーをご紹介。">
<!-- <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/asset-management/img/service_002.png"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/app/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
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
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<section class="page-name">
  <div class="page-name__inner">
    <h1 class="page-name__title">Event</h1>
    <p class="page-name__caption"><?php _e("event.all-events", 'wp-next-landing-page'); ?></p>
  </div>
</section>
<section class="container service-list">
  <div class="container__inner service-list__inner">
    <ul class="service-list__items">
      <li class="service-list__item">
        <figure class="service-list__item-thumb">
          <a href="<?php echo esc_url( home_url( '/app-event-cv2020' ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/app/event_thumb_connect-value-2020.jpg" alt="" /></a>
        </figure>
        <h2 class="service-list__item-lead">CONNECT VALUE<br />WealthPark Tokyo 2020</h2>
        <p class="service-list__item-sub">2020.3.23 Mon.<br /><?php _e("event.where-2020", 'wp-next-landing-page'); ?></p>
        <p class="service-list__item-description"><?php _e("event.description-2020", 'wp-next-landing-page'); ?></p>
        <div class="service-list__item-button">
          <div class="button">
            <a href="<?php echo esc_url( home_url( '/app-event-cv2020' ) ); ?>"><?php _e("event.learn-more", 'wp-next-landing-page'); ?></a>
          </div>
        </div>
      </li>
      <li class="service-list__item">
        <figure class="service-list__item-thumb">
          <a href="<?php echo esc_url( home_url( '/app-event-nyc2019' ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/app/event_thumb_wpnyc-2019.jpg" alt="" /></a>
        </figure>
        <h2 class="service-list__item-lead">WealthPark NYC<br />2019</h2>
        <p class="service-list__item-sub">2019.11.14 Thu.<br />Studio 525</p>
        <p class="service-list__item-description"><?php _e("event.description-2019", 'wp-next-landing-page'); ?></p>
        <div class="service-list__item-button">
          <div class="button">
            <a href="<?php echo esc_url( home_url( '/app-event-nyc2019' ) ); ?>" target="_blank"><?php _e("event.learn-more", 'wp-next-landing-page'); ?></a>
          </div>
        </div>
      </li>
      <li class="service-list__item">
        <figure class="service-list__item-thumb">
          <a href="<?php echo esc_url( home_url( '/news/article030819' ) ); ?>" target="_blank"><img src="<?php echo get_template_directory_uri() ?>/img/app/event_thumb_wpnyc-2018.jpg" alt="" /></a>
        </figure>
        <h2 class="service-list__item-lead">WealthPark NYC<br />2018</h2>
        <p class="service-list__item-sub">2020.12.5 Wed.</p>
        <p class="service-list__item-description"><?php _e("event.description-2018", 'wp-next-landing-page'); ?></p>
        <div class="service-list__item-button">
          <div class="button">
            <a href="<?php echo esc_url( home_url( '/news/article030819' ) ); ?>" target="_blank"><?php _e("event.learn-more", 'wp-next-landing-page'); ?></a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</section>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-app.php" ?>
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
<script type="text/javascript">
  var rellax = new Rellax('.rellax', {
    center: true
  });
</script>
</body>
</html>
