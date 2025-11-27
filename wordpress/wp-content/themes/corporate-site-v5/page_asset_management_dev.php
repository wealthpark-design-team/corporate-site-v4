<?php
/*
Template Name: Service Page - Asset Management - Dev
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include_once("tag_yahoo_site-general.php") ?>
<?php include_once("tag_google_remarketing.php") ?>
<?php include_once("tag_facebook_pixel.php") ?>
<?php include "tag-manager-head.php" ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<title>資料ダウンロード - WealthParkビジネス</title>
<meta name="description" content="WealthParkビジネス導入に関する資料のダウンロードはこちらから。WealthParkビジネス概要をお伝えする資料から、詳しい活用法まで幅広く資料をご用意">
<meta name="keywords" content="収益不動産, 不動産管理, プロパティマネジメント, アセットマネジメント">
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/megamenu.css"> -->
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
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
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/megamenu.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<!-- Google Tag Manager -->
<?php include "tag-manager-body.php" ?>
<!-- End Google Tag Manager -->
<!-- End Facebook Page Plugin -->
<?php include "header-common.php" ?>
<section class="page-name">
  <div class="page-name__inner">
    <h1 class="page-name__title">Download</h1>
    <p class="page-name__caption">資料ダウンロード</p>
  </div>
</section>
<section class="container">
  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
  <script>
    hbspt.forms.create({
  	region: "na1",
  	portalId: "20405636",
  	formId: "7296bf68-70c8-4d1a-a616-15a7c7e5a326"
  });
  </script>
</section>

<footer>
  <?php include "footer-main.php" ?>
  <?php include "footer-sub-business.php" ?>
</footer>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
<script type="text/javascript">
function dropsort() {
    var browser = document.sort_form.sort.value;
    location.href = browser
}
</script>
<?php include_once("ga_tracking.php") ?>
<?php include_once("tag_ptengine.php") ?>
<?php include_once("tag_yahoo_remarketing.php") ?>
<?php include_once("tag_ydn_remarketing.php") ?>
</body>
</html>
