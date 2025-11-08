<?php
/*
Template Name: Service Page - Business - FeaturesPrice
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
<title>機能 / 価格 | WealthParkビジネス</title>
<meta name="description" content="WealthParkビジネスの機能一覧。価格に関する参考情報もこちらから。不動産オーナーと管理会社をつなぐ、デジタルプラットフォーム「WealthParkビジネス」">
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/ogp/OGP_features_list.jpg">
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
<?php include_once("ga_tracking.php") ?>
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<section class="p-fp__understand">
  <video class="p-fp__understandVideo" src="" poster="<?php echo get_template_directory_uri() ?>/business/img/fp_understand_pic1.png" autoplay loop></video>
  <div class="p-fp__inner l-inner">
    <div class="p-fp__understandTit">
      <h1 class="p-fp__understandTxt">
        機能 / 価格
      </h1>
      <p class="p-fp__understandDetail">
        WealthParkビジネスなら、収支報告をアプリでオーナー様に共有したり、
        チャットを使ってコミュニケーションを見える化することができます。
        また、アクティビティ機能を使えば、オーナー様の承諾をスムースに取得できます！
      </p>
    </div>
    <div class="p-fp__understandMovie">
      <div class="p-fp__understandMovieInner">
        <iframe width="100%" height="270" src="https://www.youtube.com/embed/UbyW5A9Shlg?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<!-- p-fp__understand -->

<section id="support-center" class="container container--oa">
  <div class="container__inner container__inner--oa">
    <div class="title-box">
      <p class="title">機能一覧</p>
    </div>
    <div class="container__row container__row--col2">
      <a href="<?php echo esc_url(home_url('/')); ?>business/features/cashflow/" class="support-link container__col">
        <div class="support-title">
          <h3 class="support-cashflow">収支明細・報告書の電子化</h3>
        </div>
        <p class="desc">シンプルで見やすい収支報告書をアプリやWebで共有</p>
        <p class="text-right">
          <span>
            詳しく見る >
          </span>
        </p>
      </a>
      <a href="<?php echo esc_url(home_url('/')); ?>business/features/chat/" class="support-link container__col">
        <div class="support-title">
          <h3 class="support-chat">チャットコミュニケーション</h3>
        </div>
        <p class="desc">チャットを使って社内での情報共有がよりスムーズに</p>
        <p class="text-right">
          <span>
            詳しく見る >
          </span>
        </p>
      </a>
    </div>
    <div class="container__row container__row--col2">
      <a href="<?php echo esc_url(home_url('/')); ?>business/features/workflow/" class="support-link container__col">
        <div class="support-title">
          <h3 class="support-activity">アクティビティ機能</h3>
        </div>
        <p class="desc">オーナー様への報告・承諾をシンプルかつ確実に</p>
        <p class="text-right">
          <span>
            詳しく見る >
          </span>
        </p>
      </a>
      <a href="<?php echo esc_url(home_url('/')); ?>business/features/document-storage/" class="support-link container__col">
        <div class="support-title">
          <h3 class="support-storage">オーナーアプリでの情報共有</h3>
        </div>
        <p class="desc">物件・テナント情報やローン情報も、オーナー様にアプリで共有</p>
        <p class="text-right">
          <span>
            詳しく見る >
          </span>
        </p>
      </a>
    </div>
    <div class="container__row container__row--col2">
      <a href="<?php echo esc_url(home_url('/')); ?>business/features/multiple-language/" class="support-link container__col">
        <div class="support-title">
          <h3 class="support-lang">多言語対応</h3>
        </div>
        <p class="desc">多言語機能を活用して、海外物件や海外 オーナーにも対応可能</p>
        <p class="text-right">
          <span>
            詳しく見る >
          </span>
        </p>
      </a>
      <a href="<?php echo esc_url(home_url('/')); ?>business/features/security/" class="support-link container__col">
        <div class="support-title">
          <h3 class="support-security">情報セキュリティ対策</h3>
        </div>
        <p class="desc">情報資産の機密性、完全性、可用性に係る取り組み</p>
        <p class="text-right">
          <span>
            詳しく見る >
          </span>
        </p>
      </a>
    </div>
    <div class="container__row container__row--col2">
        <a href="<?php echo esc_url(home_url('/')); ?>business/features/wpb-pocket/" class="support-link container__col">
          <div class="support-title">
            <h3 class="support-pocket">不動産管理会社様向けモバイル<br>アプリ</h3>
          </div>
          <p class="desc">不動産管理会社向けのアプリ「WPBポケット」について</p>
          <p class="text-right">
            <span>
              詳しく見る >
            </span>
          </p>
        </a>
      </div>
  </div>
</section>

<!-- p-fp__use -->
<section class="p-fp__use">
  <h2 class="c-fp__tit p-fp__useTit">ご利用料金</h2>
  <dl class="p-fp__useList l-inner">
    <div class="p-fp__useListInner">
      <dt class="p-fp__useListName">初期費用</dt>
      <dd class="p-fp__useListDetail">
        <span class="p-fp__useListTxt--black">40万円～</span>
      </dd>
    </div>
    <div class="p-fp__useListInner">
      <dt class="p-fp__useListName">月額料金</dt>
      <dd class="p-fp__useListDetail">
        <span class="p-fp__useListTxt--black">お見積り</span> （管理戸数によって変動します）
      </dd>
    </div>
  </dl>
  <?php include dirname(__FILE__)."/template-parts/business-cta-form.php" ?>
</section>
<!-- p-fp__use -->
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
<script>
  (function(d) {
    var config = {
      kitId: 'mlg2zvs',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>
<?php include "tag_hubspot_popup_001.php" ?>
<?php include "popup_banner_business.php" ?>
<!-- <?php include "tidio-chat-business.php" ?> -->
</body>
</html>
