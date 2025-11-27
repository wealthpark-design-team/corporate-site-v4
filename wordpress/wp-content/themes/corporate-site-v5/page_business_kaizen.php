<?php
/*
Template Name: Service Page - Business - Kaizen
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>
<meta charset="<?php bloginfo('charset'); ?>">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
<meta name="apple-itunes-app" content="app-id=1068127268">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc" />
<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/manifest.json">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/kaizen.css?v=<?php echo date('Ymd-Hi'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
  <?php 
    $story1 = "/business/kaizen/k001";
    $story2 = "/business/kaizen/k002";
  ?>
  <?php include "tag-manager-body.php" ?>
  <div id="page" class="whole-page seminar-kpv-pr seminar-kpv-pr--kaizen">
	<?php include "header-common.php" ?>
    <div id="content" class="site-content site-content--kaizen">
      <section class="seminar-kpv-pr__hero section-block">
        <img loading='lazy' class="seminar-kpv-pr__hero--img" src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/kaizen_hero-min.jpg" />
        <div class="seminar-kpv-pr__hero--txt">
          <h1><?php the_title()?></h1>
        </div>
      </section>
      <main id="main" class="site-main wp_container blog-container" role="main">
        <section id="section-blog-list">
          <section class="kaizen-heading">
            <div class="kaizen-heading__heading">
              <h2>「顧客課題解決主義」</h2>
            </div>
            <div class="kaizen-heading__content">
              <p>
                WealthParkは、不動産業界の課題と向き合い、<br>
                業務に役立つソリューション開発を行っています。
              </p>
              <p>
                「顧客課題解決主義」<br class="visible-sp">というスローガンを打ち立て、<br>
                顧客の声を聞き、現場の声を開発へ。
              </p>
              <p> さらに使いやすいサービスを構築していきます。</p>
            </div>
          </section>
          <section class="blog-recommend">
            <ul class="blog-recommend__list">
              <li class="blog-recommend__item blog-recommend__item--kaizen">
                <a class="blog-recommend__thumb" href="<?php echo $story1?>">
                  <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/tezuka_thumb-min.jpg">
                </a>
                <div class="blog-recommend__body">
                  <div>
                    <a class="blog-recommend__title" href="<?php echo $story1?>">
                      顧客課題解決主義を掲げ、<br class="hidden-sp">
                      顧客との対話と<br class="visible-sp">ソリューションを起点にした事業へ進化
                    </a>
                    <p class="blog-recommend__description">
                      WealthPark株式会社 法人事業本部 <br>
                      CEO 手塚 健介
                    </p>
                  </div>
                  <div class="blog-recommend__footer">
                    <a class="blog-recommend__readmore" href="<?php echo $story1?>">詳しく見る</a>
                  </div>
                </div>
              </li>


              <li class="blog-recommend__item blog-recommend__item--kaizen">
                <a class="blog-recommend__thumb" href="<?php echo $story2?>">
                  <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/business/img/kaizen/managers_thumb-min.jpg">
                </a>
                <div class="blog-recommend__body">
                  <div>
                    <a class="blog-recommend__title" href="<?php echo $story2?>">
                      顧客の課題解決に向けて、ワンチームで顧客現場に<br class="visible-sp">寄り添った<br class="hidden-sp">
                      プロダクト開発を進める
                    </a>
                    <p class="blog-recommend__description">
                      WealthPark株式会社法人事業本部 <br>
                      執行役員 カスタマーサクセス統括 鳥谷 拓真<br>
                      プロダクトマネージャー 鳥居 俊二<br>
                      エンジニアディレクター 寺島 浩太<br>
                    </p>
                  </div>
                  <div class="blog-recommend__footer">
                    <a class="blog-recommend__readmore" href="<?php echo $story2?>">詳しく見る</a>
                  </div>
                </div>
              </li> 
              
              
            </ul>		
          </section>
        </section>
      </main><!-- #main -->
    </div>
  </div>
	<footer>
    <?php include "template-parts/footer-main.php" ?>
    <?php include "template-parts/footer-sub-corporate.php" ?>
	</footer>
</body>
</html>
