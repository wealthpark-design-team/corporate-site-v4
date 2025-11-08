<?php
/*
Template Name: Service Page - Asset Management - Company Profile
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
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/asset-management/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>"> -->
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
<div class="wealth-park-triangle">
  <?php include "header-common.php" ?>
  <section class="career-visual career-visual__asset_management">
      <div class="career-visual__outer">
        <video class="career-visual__video" poster="<?php echo get_template_directory_uri() ?>/asset-management/img/header-images.jpg">
        </video>
      </div>
    <div class="career-visual__txt">
      <h1 class="career-visual__title">
        <?php _e("page-caption.corporate", 'wp-next-landing-page'); ?>
      </h1>
    </div>
      <!-- <div class="career-visual__arrow">
          <a href="#pagename">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_arrow.svg" alt="矢印">
          </a>
      </div> -->
  </section>

  <!-- <section class="page-name" id="pagename">
    <div class="page-name__inner page-name__inner--company-profile">
      <h2 class="page-name__title">Vision / Mission</h2>
    </div>
  </section>

  <section class="container career-mission">
    <div class="container__inner career-mission__inner"><?php _e("corporate.mission.description", 'wp-next-landing-page'); ?></div>
  </section> -->

  <section class="page-name">
    <div class="page-name__inner page-name__inner--company-profile">
      <h2 class="page-name__title">Company Profile</h2>
    </div>
  </section>

  <section class="container company-profile company-profile__asset_management">
    <div class="container__inner company-profile__inner container__inner--bottom-narrow">
      <dl class="company-profile__list">
        <dt class="company-profile__title">
          <?php _e("WPAM.company_profile.comp-name-label", 'wp-next-landing-page'); ?>
        </dt>
        <dd class="company-profile__body">
          <?php _e("WPAM.company_profile.comp-name-value", 'wp-next-landing-page'); ?>
        </dd>
      </dl>
      <dl class="company-profile__list">
        <dt class="company-profile__title">
          <?php _e("WPAM.company_profile.capital-label", 'wp-next-landing-page'); ?>
        </dt>
        <dd class="company-profile__body">
          <?php _e("WPAM.company_profile.capital-value", 'wp-next-landing-page'); ?>
        </dd>
      </dl>
      <dl class="company-profile__list">
        <dt class="company-profile__title">
          <?php _e("WPAM.company_profile.year-established-label", 'wp-next-landing-page'); ?>
        </dt>
        <dd class="company-profile__body">
          <?php _e("WPAM.company_profile.year-established-value", 'wp-next-landing-page'); ?>
        </dd>
      </dl>
      <dl class="company-profile__list">
        <dt class="company-profile__title">
          <?php _e("WPAM.company_profile.representative-label", 'wp-next-landing-page'); ?>
        </dt>
        <dd class="company-profile__body">
          <?php _e("WPAM.company_profile.representative-value", 'wp-next-landing-page'); ?>
        </dd>
      </dl>
      <dl class="company-profile__list">
        <dt class="company-profile__title">
        <?php _e("WPAM.company_profile.num-employees-label", 'wp-next-landing-page'); ?>
        </dt>
        <dd class="company-profile__body">
        <?php _e("WPAM.company_profile.num-employees-value", 'wp-next-landing-page'); ?>
        </dd>
      </dl>
      <dl class="company-profile__list">
        <dt class="company-profile__title">
          <?php _e("WPAM.company_profile.head-office-loc-label", 'wp-next-landing-page'); ?>
        </dt>
        <dd class="company-profile__body">
          <?php _e("WPAM.company_profile.head-office-loc-value", 'wp-next-landing-page'); ?>
        </dd>
      </dl>
    </div>

    <div class="container__inner company-profile__inner">
    <dl class="company-profile__list">
        <dt class="company-profile__title">
          <?php _e("WPAM.company_profile.comp-name-label", 'wp-next-landing-page'); ?>
        </dt>
        <dd class="company-profile__body">
          <a href="https://weifuda.tw/" target="_blank" rel="noopener noreferrer" class="company-profile-link"><?php _e("WPAM.company_profile.comp-name-value-tw", 'wp-next-landing-page'); ?> <img src="<?php echo get_template_directory_uri() ?>/img/external_link_black.svg"></a>
        </dd>
      </dl>
      <dl class="company-profile__list">
        <dt class="company-profile__title">
          <?php _e("WPAM.company_profile.capital-label", 'wp-next-landing-page'); ?>
        </dt>
        <dd class="company-profile__body">
          <?php _e("WPAM.company_profile.capital-value-tw", 'wp-next-landing-page'); ?>
        </dd>
      </dl>
      <dl class="company-profile__list">
        <dt class="company-profile__title">
          <?php _e("WPAM.company_profile.year-established-label", 'wp-next-landing-page'); ?>
        </dt>
        <dd class="company-profile__body">
          <?php _e("WPAM.company_profile.year-established-value-tw", 'wp-next-landing-page'); ?>
        </dd>
      </dl>
      <dl class="company-profile__list">
        <dt class="company-profile__title">
          <?php _e("WPAM.company_profile.representative-label", 'wp-next-landing-page'); ?>
        </dt>
        <dd class="company-profile__body">
          <?php _e("WPAM.company_profile.representative-value-tw", 'wp-next-landing-page'); ?>
        </dd>
      </dl>
      <dl class="company-profile__list">
        <dt class="company-profile__title">
          <?php _e("WPAM.company_profile.address-label", 'wp-next-landing-page'); ?>
        </dt>
        <dd class="company-profile__body">
          <?php _e("WPAM.company_profile.address-value", 'wp-next-landing-page'); ?>
        </dd>
      </dl>
    </div>
  </section>
  <?php _e("corporate.panel-banners", 'wp-next-landing-page'); ?>

<!-- </div> -->
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
