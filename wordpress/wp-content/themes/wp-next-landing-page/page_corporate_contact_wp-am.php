<?php
/*
Template Name: Corporate Site - Contact - WP AM
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
<title><?php _e("corporate.meta-title.contact", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("corporate.meta-description.contact", 'wp-next-landing-page'); ?>">
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
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
<?php wp_head(); ?>
<!-- Override Default Contact Form 7 Styling from wp_head()-->
<script>
  $("#wp-next-landing-page-style-css, #contact-form-7-css").remove();
</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/contact-form.css">
</head>
<body>
<?php include "tag-manager-body.php" ?>
<!-- <div class="wealth-park-triangle"> -->
  <?php include "header-common.php" ?>
  <section class="page-name">
    <div class="page-name__inner">
      <h1 class="page-name__title--form page-name__title--form--reset-padding"><?php _e("page-caption.wp-am", 'wp-next-landing-page'); ?></h1>
    </div>
  </section>
  <div id="form-top"></div>
  <section class="container__inner form-section form-section-contact">
    <p class="form-section__note"><?php _e("contact.note", 'wp-next-landing-page'); ?></p>
    <?php echo do_shortcode( '[contact-form-7 id="852" title="Contact Form_Management"]' ); ?>
    <p class="form-section__rule">
      <a href="<?php echo esc_url(home_url('/')); ?>corporate/terms-of-use/">利用規約</a> / <a href="<?php echo esc_url(home_url('/')); ?>corporate/privacy-policy/">プライバシーポリシー</a>
    </p>
  </section>
<!-- </div> -->
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>
<input type="hidden" id="home_url" value="<?php echo esc_url(home_url('/')); ?>">
<?php wp_footer(); ?>
<script>
  $home_url = $('#home_url').val();
  $completed_page = $home_url + 'contact/complete';
  console.log($completed_page);
  document.addEventListener( 'wpcf7mailsent', function( event ) {
    console.log("Success!")
    location = $completed_page;
  }, false );

  document.addEventListener( 'wpcf7invalid', function( event ) {
    console.log("Invalid!")
    $('html, body').animate({
        scrollTop: $("#form-top").offset().top - 70
    }, 500);
  }, false );

</script>
<script type="text/javascript">
  function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
  }
</script>
</body>
</html>


