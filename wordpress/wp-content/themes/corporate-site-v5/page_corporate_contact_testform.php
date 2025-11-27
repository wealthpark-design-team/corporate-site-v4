<?php
/*
Template Name: Corporate Site - Contact - Test Form
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
<title><?php _e("corporate.corporate.meta-title", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("corporate.corporate.meta-description", 'wp-next-landing-page'); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php _e("app.meta_description", 'wp-next-landing-page'); ?>">
<meta property="og:description" content="<?php _e("am.meta-description", 'wp-next-landing-page'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
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
<?php wp_head(); ?>
<!-- Override Default Contact Form 7 Styling from wp_head()-->
<script>
  $("#wp-next-landing-page-style-css, #contact-form-7-css").remove();
</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/contact-form.css">
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<section class="page-name">
  <div class="page-name__inner">
    <h1 class="page-name__title--form page-name__title--form--reset-padding ">
      <?php _e("page-title.contact-owner", 'wp-next-landing-page'); ?>
    </h1>
  </div>
</section>
<section class="container__inner form-section">
  <div class="breadcrumb">
    <ul class="breadcrumb__list">
      <li class="breadcrumb__item"><a class="breadcrumb__link" href="<?php echo esc_url(home_url('/')); ?>corporate/">TOP</a></li>
      <li class="breadcrumb__item">
        <a class="breadcrumb__link" href="<?php echo esc_url(home_url('/')); ?>corporate/contact/">
          <?php _e("page-caption.contact", 'wp-next-landing-page'); ?>
        </a>
      </li>
      <li class="breadcrumb__item">
        <span class="breadcrumb__link">
          <?php _e("page-title.contact-owner", 'wp-next-landing-page'); ?>
        </span>
      </li>
    </ul>
  </div>
  <p class="form-section__note"><?php _e("contact.note", 'wp-next-landing-page'); ?></p>
  <div id="form-top"></div>
  <?php echo do_shortcode( '[contact-form-7 id="49c1135" title="Contact Test Form"]' ); ?>
  <!-- <?php echo do_shortcode( '[contact-form-7 id="40829" title="Contact Test Form"]' ); ?> -->
  
  <p class="form-section__rule">
    <?php _e("corporate.contact.rule", 'wp-next-landing-page'); ?>
  </p>
</section>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>
<?php wp_footer(); ?>
<script>
  $('.wpcf7-list-item-label').css({'cursor': 'pointer'})
  $('.ui-radio-tabs.ui-radio-tabs--am').on('click', '.wpcf7-list-item-label', function(){
    const $checkbox = $(this).siblings('input[type="checkbox"], input[type="radio"]')
    if($checkbox.prop('checked')){
      $checkbox.prop('checked', false);
    }else{
      $checkbox.prop('checked', true);
    }
  })
</script>
<script>
  $completed_page = '<?php echo esc_url(home_url('/')); ?>contact-test-form-complete-page';
  console.log($completed_page);
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    location = $completed_page;
  }, false );

  document.addEventListener( 'wpcf7invalid', function( event ) {
    console.log("Invalid!")
    $('html, body').animate({
        scrollTop: $("#form-top").offset().top - 70
    }, 500);
  }, false );
</script>
</body>
</html>


