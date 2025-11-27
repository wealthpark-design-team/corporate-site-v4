<?php
/*
Template Name: Service Page - Business - Lp - Manga for owners - Completed
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>

<?php include_once("tag_facebook_pixel_cvt.php") ?>
<?php include_once("tag_facebook_pixel_cvt_download_rincrew.php") ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<title>資料請求フォーム送信完了 | WealthParkビジネス</title>
<meta name="description" content="資料のご請求ありがとうございました">
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

<!-- Event snippet for 資料請求用 conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-408472189/5Q6JCLK41PkBEP2U48IB'});
</script>
<!-- Event snippet for 資料請求用 conversion page -->
<?php include "header-common.php" ?>
<section class="page-name">
  <div class="page-name__inner">
    <h2 class="page-name__title--form">資料請求フォーム送信完了</h2>
  </div>
</section>
<div class="container__inner form-section">
  <p class="form-section__note">資料のご請求、誠にありがとうございました。<br />ご入力いただきましたメールアドレス宛に、資料ダウンロードURLが送信されます。しばらくお待ち下さい。<br />また、「お問合わせ内容」欄にご記入いただきましたご相談、お問合わせにつきましては、担当者より2〜3営業日以内に返信させていただきます。</p>
</div>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-business.php" ?>
</footer>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
<script type="text/javascript">
function dropsort() {
    var browser = document.sort_form.sort.value;
    location.href = browser
}
</script>
<!-- ADMATRIX CV GTM不具合対応 -->
<script src="//lib-3pas.admatrix.jp/3pas/js/AdMatrixAnalyze.min.js"></script>
<script type="text/javascript">
(function(){
    var p = (("https:" == document.location.protocol) ? "https://" : "http://"), r=Math.round(Math.random() * 10000000), rf = window.top.location.href, prf = window.top.document.referrer, i = AdMatrix.CookieUtil.sharedId();

    var elm = document.createElement('div');
    elm.innerHTML = unescape('%3C')+'img src="'+ p + 'acq-3pas.admatrix.jp/if/5/01/0141d14d460f652878570f9c0a633dec.fs?cb=' + encodeURIComponent(r) + '&rf=' + encodeURIComponent(rf) +'&prf=' + encodeURIComponent(prf) + '&i=' + encodeURIComponent(i) + '" alt=""  style="display:block; margin:0; padding:0; border:0; outline:0; width:0; height:0; line-height:0;" '+unescape('%2F%3E');
    document.body.appendChild(elm);
})();
</script>
<noscript><img src="//acq-3pas.admatrix.jp/if/6/01/0141d14d460f652878570f9c0a633dec.fs" alt="" style="display:block; margin:0; padding:0; border:0; outline:0; width:0; height:0; line-height:0;" /></noscript>
<script>AdMatrix.analyze('0141d14d460f652878570f9c0a633dec');</script>
<script>AdMatrix.croRequest('0141d14d460f652878570f9c0a633dec');</script>
<!-- ADMATRIX CV GTM不具合対応 -->
<?php include_once("tag_google_cvt_download.php") ?>
<?php include_once("tag_ydn_cvt_download.php") ?>
<?php include_once("tag_yss_cvt_download.php") ?>
</body>
</html>
