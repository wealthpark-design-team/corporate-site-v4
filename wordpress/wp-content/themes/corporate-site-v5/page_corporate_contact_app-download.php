<?php
/*
Template Name: Corporate Site - Contact - App Download
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
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
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
      <h1 class="page-name__title">Contact</h1>
      <p class="page-name__caption">Demo Account for App</p>
    </div>
  </section>
  <section class="container__inner form-section">
    <p class="form-section__note"><?php _e("contact.note", 'wp-next-landing-page'); ?></p>
    <?php echo do_shortcode( '[contact-form-7 id="99" title="Request a Demo"]' ); ?>
  </section>
</div>
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
