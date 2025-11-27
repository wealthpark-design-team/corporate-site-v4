<?php
/*
Template Name: Product Page - LP
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
<title>WealthPark | A modern real estate management platform</title>
<meta name="description" content="WealthPark | A modern real estate management platform">
<meta property="og:title" content="WealthPark | A modern real estate management platform">
<meta property="og:type" content="website">
<!-- <meta property="og:url" content="https://wealth-park.com/business/" /> -->
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/lp/ogp_image_wpus_002.jpg">
<meta property="og:site_name" content="WealthPark" />
<meta property="og:description" content="WealthPark | A modern real estate management platform">
<meta name="twitter:card" content="summary_large_image" />
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/lp/product.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja/business" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en/business" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc/business" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc/business" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc/business" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc/business" />
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>
<script src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/js/modal-multi.js?20210516-0906"></script>
<!--  -->


</head>
<body>

  <!--  -->
  
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/business/js/sample.js"></script>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH2RPBR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<article class="lp-product">
  <section class="lp-product-kv">
    <div class="lp-product-kv__right">
      <p class="lp-product-kv__right-title">
        A modern real estate management platform
        <span class="lp-product-kv__right-title--sub">
          Democratize Alternative Asset Investment for Everyone
        </span>
      </p>
      <ul class="lp-product-kv__buttons">
        <li class="lp-product-kv__buttons-item">
          <a class="lp-product-kv__buttons-btn" href="https://itunes.apple.com/app/wealth-park-real-estate-investment/id1068127268">
            <img class="lp-product-kv__buttons-btn--app" src="<?=get_template_directory_uri() ?>/img/badge_app-store-us_black.png" alt="AppStore" />
          </a>
        </li>
        <li class="lp-product-kv__buttons-item">
          <a class="lp-product-kv__buttons-btn" href="https://play.google.com/store/apps/details?id=com.wealthpark.owner">
            <img class="lp-product-kv__buttons-btn--google" src="<?=get_template_directory_uri() ?>/img/badge_google-play_black.png" alt="GooglePlay" />
          </a>
        </li>
      </ul>
    </div>
    <div class="lp-product-kv__left">
      <img class="lp-product-kv__left-image" src="<?=get_template_directory_uri() ?>/img/lp/kv.png" alt="" />
    </div>
  </section>
  <section class="lp-product-lead">
    <h2 class="lp-product-lead__headline">
      Digital transform your real estate management
    </h2>
    <div class="lp-product-lead__content">
      <ul class="lp-product-lead__content-list">
        <li class="lp-product-lead__content-list-item">
          <div class="lp-product-lead__content-icon">
            <img class="lp-product-lead__content-icont--image" src="<?=get_template_directory_uri() ?>/img/lp/lead_a.png" alt="">
          </div>
          <div class="lp-product-lead__content-text">
            <p class="lp-product-lead__content-title">
              A powerful cloud base asset management SaaS for asset operators and managers
            </p>
            <p class="lp-product-lead__content-description">
              Digitize operations to provide stand-out service to Investors
            </p>
          </div>
        </li>
        <li class="lp-product-lead__content-list-item">
          <div class="lp-product-lead__content-icon">
            <img class="lp-product-lead__content-icont--image" src="<?=get_template_directory_uri() ?>/img/lp/lead_b2.png" alt="">
          </div>
          <div class="lp-product-lead__content-text">
            <p class="lp-product-lead__content-title">
              A modern wealth management tool for asset Investors
            </p>
            <p class="lp-product-lead__content-description">
              Amazing mobile experience to manage assets
            </p>
          </div>
        </li>
        <li class="lp-product-lead__content-list-item">
          <div class="lp-product-lead__content-icon">
            <img class="lp-product-lead__content-icont--image" src="<?=get_template_directory_uri() ?>/img/lp/lead_c.png" alt="">
          </div>
          <div class="lp-product-lead__content-text">
            <p class="lp-product-lead__content-title">
              A marketplace for institutional quality real estate
            </p>
            <p class="lp-product-lead__content-description">
              Gain access to capital source and unique investment opportunities
            </p>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <section class="lp-product-record">
    <ul class="lp-product-record__list">
      <li class="lp-product-record__list-item">
        <p class="lp-product-record__middle">Track Record</p>
      </li>
      <li class="lp-product-record__list-item">
        <p class="lp-product-record__text--large">$40Bn+</p>
        <p class="lp-product-record__text">Real Estate Managed</p>
      </li>
      <li class="lp-product-record__list-item">
        <p class="lp-product-record__text--large">120K+</p>
        <p class="lp-product-record__text">Investors</p>
      </li>
      <li class="lp-product-record__list-item">
        <p class="lp-product-record__text--large">14</p>
        <p class="lp-product-record__text">Countries / Regions</p>
      </li>
    </ul>
    <ul class="lp-product-record__logo">
      <li class="lp-product-record__logo-item">
        <img class="lp-product-record__logo-item--image" src="<?=get_template_directory_uri() ?>/img/lp/logo_a.png" alt="" />
      </li>
      <li class="lp-product-record__logo-item">
        <img class="lp-product-record__logo-item--image" src="<?=get_template_directory_uri() ?>/img/lp/logo_b.png" alt="" />
      </li>
      <li class="lp-product-record__logo-item">
        <img class="lp-product-record__logo-item--image" src="<?=get_template_directory_uri() ?>/img/lp/logo_c.png" alt="" />
      </li>
      <li class="lp-product-record__logo-item">
        <img class="lp-product-record__logo-item--image" src="<?=get_template_directory_uri() ?>/img/lp/logo_d.png" alt="" />
      </li>
    </ul>
  </section>
  <div class="container__inner">
    <div class="title-box">
      <p class="title">Team</p>
    </div>
  </div>
  <?php _e("app.team.profile", 'wp-next-landing-page'); ?>
  <section class="lp-product-contact form-section">
    <div class="lp-product-contact__inner">
      <h2 class="lp-product-contact__headline">Talk with an expert</h2>
      <div class="lp-product-contact__form">
        <?php echo do_shortcode('[contact-form-7 id="860" title="Contact Form_Media"]'); ?>
      </div>
    </div>
  </section>
</article>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-en-lp.php" ?>
</footer>
<script type="text/javascript">
function dropsort() {
    var browser = document.sort_form.sort.value;
    location.href = browser
}
</script>
<script>
// magnificPopupの表示
$(function () {
    $('.download-main__preview-wrap').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {  //ギャラリーオプション
            // enabled: true
        }
    });
});
</script>
</body>
</html>
