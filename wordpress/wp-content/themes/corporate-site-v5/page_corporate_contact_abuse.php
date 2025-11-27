<?php
/*
Template Name: Corporate Site - Contact - Abuse
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
<title>WealthPark - <?php _e("contact.report-abuse", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("contact.report-abuse-description", 'wp-next-landing-page'); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="WealthPark - <?php _e("contact.report-abuse", 'wp-next-landing-page'); ?>">
<meta property="og:description" content="<?php _e("contact.report-abuse-description", 'wp-next-landing-page'); ?>">
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
    <?php _e("contact.report-abuse", 'wp-next-landing-page'); ?>
    </h1>
  </div>
</section>
<section class="container__inner form-section form-section-contact">
  <div class="abuse-form-info">
    <?php _e("contact.report-abuse-content", 'wp-next-landing-page'); ?>
  </div>
  <div id="form-top"></div>
  <div>
    <?php echo do_shortcode( '[contact-form-7 id="036af73" title="Report Abuse"]' ); ?>
    <p class="form-section__rule">
      <?php _e("corporate.contact.rule", 'wp-next-landing-page'); ?>
    </p>
  </div>
</section>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>
<input type="hidden" id="home_url" value="<?php echo esc_url(home_url('/')); ?>">
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
  $home_url = $('#home_url').val();
  $completed_page = $home_url + 'contact/owner-completed';
  console.log($completed_page);
  // document.addEventListener( 'wpcf7mailsent', function( event ) {
  //   console.log("Success!")
  //   location = $completed_page;
  // }, false );

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




