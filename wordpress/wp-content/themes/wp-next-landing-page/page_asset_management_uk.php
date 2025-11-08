<?php
/*
Template Name: Service Page - Asset Management UK
*/
// エラー出力しない場合
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
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/asset-management/css/style.css?<?php echo date('Ymd-Hi'); ?>">
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php
$topPage = "navigation--common--top";
include "header-common.php"
?>
<div class="hero hero--uk">
  <section class="container container--uk">
    <div class="hero__inner">
      <div class="hero__img">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/wpam/bg_hero_uk_img.png" alt="images">
      </div>
      <div class="hero__massage">
        <h1 class="hero__massage-title">
          <?php _e("uk.hero-message", 'wp-next-landing-page'); ?>
        </h1>
        <p class="hero__massage-txt">
          <?php _e("uk.hero-message-txt", 'wp-next-landing-page'); ?>
        </p>
        <aside class="button-box">
          <div class="button-box__inner">
            <div class="button">
              <a href="<?php echo esc_url(home_url('/')); ?>asset-management/uk/contact">
                <?php $current_lang = qtrans_getLanguage();
                if ($current_lang == "sc") { ?>
                聯繫我們
                <?php } elseif ($current_lang == "tc") { ?>
                聯繫我們
                <?php } else { ?>
                Get in Touch
                <?php } ?>
              </a>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <section class="container launch-section launch-section--uk">
    <div class="container__inner launch-section__inner">
      <div class="caption caption--uk">
        <p class="caption__category"><?php _e("uk.launch.category", 'wp-next-landing-page'); ?></p>
        <h2 class="caption__title"><?php _e("uk.launch.title", 'wp-next-landing-page'); ?></h2>
      </div>
      <?php _e("uk.launch.copy.txt", 'wp-next-landing-page'); ?>
    </div>
  </section>

  <section class="container service-section service-section--uk">
    <div class="container__inner service-section__inner">
      <div class="caption caption--uk">
        <p class="caption__category"><?php _e("uk.service.category", 'wp-next-landing-page'); ?></p>
        <!-- <h2 class="caption__title"><?php _e("uk.service.title", 'wp-next-landing-page'); ?></h2> -->
      </div>
      <ul class="service-section__services">
        <li class="service-section__service type-1">
          <div class="type-1__body">
            <h3 class="type-1__body-title"><?php _e("uk.service.001.title", 'wp-next-landing-page'); ?></h3>
            <?php _e("uk.service.001.description", 'wp-next-landing-page'); ?>
          </div>
          <figure class="type-1__image">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/wpam/service_002.png" alt="Property Protect Services" />
          </figure>
        </li>
        <li class="service-section__service type-1">
          <div class="type-1__body">
            <h3 class="type-1__body-title"><?php _e("uk.service.002.title", 'wp-next-landing-page'); ?></h3>
            <?php _e("uk.service.002.description", 'wp-next-landing-page'); ?>
          </div>
          <figure class="type-1__image">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/wpam/service_uk_001.png" alt="Tenant Find" />
          </figure>
        </li>
      </ul>
    </div>
  </section>
</div>
<section class="container feature-section feature-section--uk">
  <div class="container__inner feature-sectio__inner">
    <div class="caption caption--uk">
      <p class="caption__category"><?php _e("uk.feature.category", 'wp-next-landing-page'); ?></p>
      <h2 class="caption__title"><?php _e("uk.feature.title", 'wp-next-landing-page'); ?></h2>
      <p class="caption__lead"><?php _e("uk.feature.description", 'wp-next-landing-page'); ?></p>
    </div>
    <?php _e("uk.feature.features", 'wp-next-landing-page'); ?>
  </div>
</section>
<section class="container voice-section voice-section--uk">
  <!-- <div class="container__inner voice-section__inner">
    <div class="caption">
      <div class="caption__category"><?php _e("am.voice.category", 'wp-next-landing-page'); ?></div>
      <h2 class="caption__title"><?php _e("am.voice.title", 'wp-next-landing-page'); ?></h2>
    </div>
    <?php _e("am.voice.voices", 'wp-next-landing-page'); ?>
  </div> -->
  <aside class="button-box">
    <div class="button-box__inner">
      <div class="button">
        <a href="<?php echo esc_url(home_url('/')); ?>asset-management/uk/contact">
          <?php $current_lang = qtrans_getLanguage();
          if ($current_lang == "sc") { ?>
          聯繫我們
          <?php } elseif ($current_lang == "tc") { ?>
          聯繫我們
          <?php } else { ?>
          Get in Touch
          <?php } ?>        
        </a>
        <!-- <a href="<?php echo esc_url(home_url('/')); ?>corporate?contact_type=null#contact-by-type">Get in Touch</a> -->
      </div>
    </div>
  </aside>
</section>
<!-- <?php// include "news-summary.php"?> -->
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-wpam.php" ?>
</footer>
<script type="text/javascript">
  function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
  }
</script>
</body>
</html>
