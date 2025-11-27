<?php
/*
Template Name: Corporate Site - Contact - Completed
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
<title>お問い合わせフォーム送信完了 | WealthPark</title>
<meta name="description" content="WealthParkへのお問合せありがとうございました">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/style.css?<?php echo date('Ymd-Hi'); ?>">
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
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<section class="page-name">
  <div class="page-name__inner">
    <h2 class="page-name__title--form">お問い合わせフォーム送信完了</h2>
  </div>
</section>
<div class="container__inner form-section">
  <p class="form-section__note">お問い合わせ、誠にありがとうございました。<br />ご相談への回答につきましては、担当者より2〜3営業日以内に返信させていただきます。</p>
</div>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-business.php" ?>
</footer>
</body>
</html>
