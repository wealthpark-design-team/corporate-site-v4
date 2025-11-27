<?php
/*
Template Name: Corporate Site - Press Kit
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
<title>プレスキット・素材ダウンロード</title>
<meta name="description" content="">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
<?php include "external-css-js-common.php" ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja/press-kit" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en/press-kit" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc/press-kit" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc/press-kit" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc/press-kit" />
<link rel="alternate" hreflang="zh-TW" href="shttp://wealth-park.com/tc/press-kit" />
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
  <?php include "tag-manager-body.php" ?>
  <?php include "header-common.php" ?>
  <?php
    $langArray = require 'locale/page/presskit.php';
  ?>
  <section class="page-name">
    <div class="page-name__inner">
      <h1 class="page-name__title page-name__title--presskit"><?= $langArray['title'];?></h1>
    </div>
  </section>
  <section class="container">
    <div class="container__inner">
      <div class="presskit__row presskit__row--corporate">
        <div class="presskit__col">
          <h2><?= $langArray['corporate_logo'];?></h2>
          <p><?= $langArray['corporate_logo_desc'];?></p>
          <p>
            <?php if ($current_lang == 'ja') :?>
              <a href="<?php echo get_template_directory_uri()?>/corporate/img/presskit/downloads/WealthPark_Corporate_Logo.zip" download="WealthPark_Corporate_Logo" class="download-btn"><?= $langArray['download'];?></a>
            <?php else : ?>
              <a href="<?php echo get_template_directory_uri()?>/corporate/img/presskit/downloads/WealthPark_Corporate_Logo_EN.zip" download="WealthPark_Corporate_Logo_EN" class="download-btn"><?= $langArray['download'];?></a>
            <?php endif; ?>
          </p>
        </div>
        <div class="presskit__col">
          <img src="<?php echo get_template_directory_uri()?>/corporate/img/presskit/wealthpark-logo.png" class="corporate-section-img" alt="WealthPark Logo">
        </div>
      </div>
      <div class="presskit__row presskit__row--corporate">
        <div class="presskit__col">
          <h2><?= $langArray['service_logo'];?></h2>
          <p><?= $langArray['service_logo_desc'];?></p>
          <p><a href="<?php echo get_template_directory_uri()?>/corporate/img/presskit/downloads/WealthPark_Service_Logo.zip" download="WealthPark_Service_Logo" class="download-btn"><?= $langArray['download'];?></a></p>
        </div>
        <div class="presskit__col">
          <img src="<?php echo get_template_directory_uri()?>/corporate/img/presskit/wealthpark-service-logo.png" class="corporate-section-img" alt="WealthPark Service Logo">
        </div>
      </div>
      <div class="presskit__row presskit__row--corporate">
        <div class="presskit__col">
          <h2><?= $langArray['service_screenshots'];?></h2>
          <p><?= $langArray['service_screenshots_desc'];?></p>
          <p><a href="<?php echo get_template_directory_uri()?>/corporate/img/presskit/downloads/WealthPark_Screenshots.zip" download="WealthPark_Screenshots" class="download-btn"><?= $langArray['download'];?></a></p>
        </div>
        <div class="presskit__col">
          <img src="<?php echo get_template_directory_uri()?>/corporate/img/presskit/wealthpark-screenshot.png" class="corporate-section-img" alt="WealthPark Screenshot">
        </div>
      </div>
    </div>
  </section>
  <section class="container grey-bg">
    <div class="container__inner">
      <div class="presskit__row presskit__row--group-companies">
        <div class="presskit__row--group-companies-title">
          <h2><?= $langArray['group_companies'];?></h2>
          <p><?= $langArray['group_companies_desc'];?></p>
        </div>
      </div>
      <div class="presskit__row presskit__row--group-companies">
        <h3><?= $langArray['wpai'];?></h3>
        <div class="presskit__row presskit__row--inner">
          <div class="presskit__col">
            <p>
              <img src="<?php echo get_template_directory_uri()?>/corporate/img/presskit/wealthpark-alternative-investments-logo.png" class="group-companies-img" alt="Wealthpark Alternative Investments Logo">
            </p>
            <p><?= $langArray['wpai_desc'];?></p>
            <p><a href="<?php echo get_template_directory_uri()?>/corporate/img/presskit/downloads/WealthPark-Alternative-Investments_Logo.zip" download="WealthPark-Alternative-Investments_Logo" class="download-btn"><?= $langArray['download'];?></a></p>
          </div>
          <div class="presskit__col">
            <p><img src="<?php echo get_template_directory_uri()?>/corporate/img/presskit/wealthpark-investment-logo.png" class="group-companies-img" alt="Wealthpark Investment Logo"></p>
            <p><?= $langArray['wpi_desc'];?></p>
            <p><a href="<?php echo get_template_directory_uri()?>/corporate/img/presskit/downloads/WealthPark-Investment_Logo.zip" download="WealthPark-Investment_Logo" class="download-btn"><?= $langArray['download'];?></a></p>
          </div>
        </div>
      </div>
      <div class="presskit__row presskit__row--group-companies">
        <h3><?= $langArray['wpret'];?></h3>
        <div class="presskit__row presskit__row--inner">
          <div class="presskit__col">
            <p><img src="<?php echo get_template_directory_uri()?>/corporate/img/presskit/wealthpark-realestate-technologies-logo.png" class="group-companies-img" alt="Wealthpark RealEstate Technologies Logo"></p>
            <p><?= $langArray['wpret_desc'];?></p>
            <p><a href="<?php echo get_template_directory_uri()?>/corporate/img/presskit/downloads/WealthPark-RealEstate-Technologies_Logo.zip" download="WealthPark-RealEstate-Technologies_Logo" class="download-btn"><?= $langArray['download'];?></a></p>
          </div>
          <div class="presskit__col">
            <p><img src="<?php echo get_template_directory_uri()?>/corporate/img/presskit/weifuda-logo.png" class="group-companies-img" alt="Weifuda Logo"></p>
            <p><?= $langArray['weifuda_desc'];?></p>
            <p><a href="<?php echo get_template_directory_uri()?>/corporate/img/presskit/downloads/Weifuda_Corp_Logo.zip" download="Weifuda_Corp_Logo" class="download-btn"><?= $langArray['download'];?></a></p>
          </div>
        </div>
      </div>
      <div class="presskit__row presskit__row--group-companies">
        <h3><?= $langArray['wplab'];?></h3>
        <div class="presskit__row presskit__row--inner">
          <div class="presskit__col">
            <p><img src="<?php echo get_template_directory_uri()?>/corporate/img/presskit/wealthpark-lab-logo.png" class="group-companies-img" alt="Wealthpark Lab"></p>
            <p><?= $langArray['wplab_desc'];?></p>
            <p><a href="<?php echo get_template_directory_uri()?>/corporate/img/presskit/downloads/WealthPark-Lab_Logo.zip" download="WealthPark-Lab_Logo" class="download-btn"><?= $langArray['download'];?></a></p>
          </div>
          <div class="presskit__col"><!-- empty column --></div>
        </div>
      </div>
    </div>
  </section>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>
</body>
</html>
