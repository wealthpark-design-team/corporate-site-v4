<?php
/*
Template Name: Service Page - Business
*/
if ($_SERVER['REQUEST_URI'] === '/en/business/' || $_SERVER['REQUEST_URI'] === '/sc/business/' || $_SERVER['REQUEST_URI'] === '/tc/business/') {
  header('Location: /ja/business/');
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php include "tag-manager-head.php" ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no">
  <title>WealthParkビジネス | オーナーアプリではじめよう、あたらしい不動産管理</title>
  <meta name="description" content="WealthParkビジネスは、不動産オーナーと管理会社をつなぐ業務支援サービスです。 WealthParkのオーナーアプリを活用すれば、収支報告や売買提案などのやり取りが簡単かつスピーディになります。">
  <meta property="og:title" content="WealthParkビジネス | オーナーアプリではじめよう、あたらしい不動産管理">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://wealth-park.com/business/" />
  <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/ogp/OGP_WP_business.jpg">
  <meta property="og:site_name" content="WealthPark Business" />
  <meta property="og:description" content="WealthParkビジネスは、不動産オーナーと管理会社をつなぐ業務支援サービスです。 WealthParkのオーナーアプリを活用すれば、収支報告や売買提案などのやり取りが簡単かつスピーディになります。">
  <meta name="twitter:card" content="summary_large_image" />
  <?php include "external-css-js-common.php" ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/style.css?v=2">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="canonical" href="https://wealth-park.com/business/" />
  <link rel="alternate" hreflang="ja" href="https://wealth-park.com/ja/business" />
  <link rel="alternate" hreflang="en" href="https://wealth-park.com/en/business" />
  <link rel="alternate" hreflang="zh" href="https://wealth-park.com/sc/business" />
  <link rel="alternate" hreflang="zh-CN" href="https://wealth-park.com/sc/business" />
  <link rel="alternate" hreflang="zh-HK" href="https://wealth-park.com/tc/business" />
  <link rel="alternate" hreflang="zh-TW" href="https://wealth-park.com/tc/business" />
  <!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
  <?php include_once("ga_tracking.php") ?>
</head>

<body>
  <?php include "tag-manager-body.php" ?>
  <div class="hero--wpb__outer">
    <?php include "header-common.php" ?>
    <section class="hero--wpb">
      <div class="hero--wpb__overlay_top">
        <picture>
          <source srcset="<?php echo get_template_directory_uri() ?>/img/wpb/wpb_top_overlay_top--sp.png" media="(max-width: 767px)" />
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/wpb/wpb_top_overlay_top.png" alt="WealthPark" />
        </picture>
      </div>
      <div class="hero--wpb__overlay_bottom">
        <picture>
          <source srcset="<?php echo get_template_directory_uri() ?>/img/wpb/wpb_top_overlay_bottom--sp.png" media="(max-width: 767px)" />
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/wpb/wpb_top_overlay_bottom.png" alt="WealthPark" />
        </picture>
      </div>
      <div class="hero--wpb__inner">
        <div class="hero--wpb__message-box">
          <h1 class="hero--wpb__tagline">
            オーナーアプリで<br>
            はじめよう<br>
            あたらしい不動産管理
          </h1>
          <div class="hero--wpb__caption">
            <ul class="hero__Lists">
              <li>スマホでペーパーレスな収支報告</li>
              <li>チャットでコミュニケーションを見える化</li>
              <li>入居条件や修繕費見積の承諾をワンクリックで</li>
            </ul>
          </div>
          <div class="hero__image--sp">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/wpb/keyvisual_2021_sp.png" alt="画像">
          </div>
          <img loading='lazy' class="hero--wpb__image" src="<?php echo get_template_directory_uri() ?>/img/wpb/wpb_no1_recognitions.png" alt="不動産オーナーと管理会社をつなぐ" />
          <p class="hero--wpb__annotation">※1 日本マーケティングリサーチ機構調べ（2021年6月調査）</p>
          <div class="hero__button-box">
            <div class="button--cv">
              <a href="<?php echo esc_url(home_url('/')); ?>/business/download/form-001/">
              WealthParkビジネスサービス資料<br>
              無料ダウンロード
              </a>
            </div>
          </div>
          <div class="phone">
            <a href="tel:0366942621">03-6694-2621</a>
          </div>
        </div>
      </div>
      <div class="hero--wpb__video-box">
        <video class='background-video-mobile' autoplay loop muted playsinline poster="<?php echo get_template_directory_uri() ?>/video/business/wpb_top_video_thumb_001.jpg">
          <source src="<?php echo get_template_directory_uri() ?>/video/business/main_wpb_video.mp4" type="video/mp4" />
        </video>
      </div>
    </section>
  </div>
  <section>
    <div class="marquee-container">
    
      <div class="marquee-track" id="track">
        <div class="logo-slide">
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/1_clients_leopalace21.png" alt="Leopalace21">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/2_clients_able.png" alt="Able">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/3_clients_asahikasei.png" alt="Asahikasei">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/4_partnerships_jp-capital_en-2.png" alt="東急住宅リース">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/5_partnerships_mizuho-capital_en.png" alt="Mizuho Capital">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/6_partnerships_jp-capital_en.png" alt="三菱地所ハウスネット">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/7_clients_architectdeveloper.png" alt="ADI">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/8_clients_daikyo.png" alt="Daikyo">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/9_clients_mitsui-fudosan.png" alt="Mitsui Fudosan">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/10_clients_nihon-housing.png" alt="Nihon Housing">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/11_clients_areps.png" alt="Areps">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/12_partnerships_lixil_realty.png" alt="Lixil Realty">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/13_clients_anabuki-housing.png" alt="Anabuki Housing">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/14_clients_jog.png" alt="JOG">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/15_clients_hirota.png" alt="Hirota">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/16_clients_kosugi.png" alt="Kosugi">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/17_clients_takuto2.png" alt="Takuto">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/18_clients_kochi-house.png" alt="Kochi Housing">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/19_clients_ja-aichi.png" alt="JA Aichi">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/20_clients_3pukukanri.png" alt="3PukuKanri">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/21_clients_keio_fudosan.png" alt="Keio Fudosan">
          </div>
          <div class="logo-wrapper">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/slides/22_clients_mhe.png" alt="MHE">
          </div>
        </div>
      </div>
    </div>
  </section>
  <aside class="top-banner">
    <ul class="top-banner__inner">
      <li class="top-banner__box">
        <a href="<?php echo esc_url(home_url('/')); ?>business/download/form-011/"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/top-banner_007.jpg" alt="賃貸住宅管理業法改正のポイントとデジタルの活用について"></a>
      </li>
      <li class="top-banner__box">
        <a href="<?php echo esc_url(home_url('/')); ?>business/download/form-012/"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/top-banner_008.jpg" alt="不動産管理業向け電子帳簿保存法への対応ポイント"></a>
      </li>
      <li class="top-banner__box">
        <a href="<?php echo esc_url(home_url('/')); ?>business/release-note"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/top-banner_009.jpg" alt="プロダクト改善・新機能"></a>
      </li>
      <li class="top-banner__box">
        <a href="<?php echo esc_url(home_url('/')); ?>business/download/form-wpl-002/"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/top-banner_006.jpg" alt="WealthPark研究所による、世界の不動産テック最新てポートをダウンロード"></a>
      </li>
    </ul>
  </aside>
  <section class="message-video">
    <video class='message-video__background' autoplay loop muted playsinline>
      <source src="<?php echo get_template_directory_uri() ?>/video/business/case_mjhn_bg.mp4" type="video/mp4">
    </video>
    <div class="message-video__units">
      <div class="message-video__inner">
        <div class="message-video__comments">
          <p class="message__title">不動産管理会社さまの声</p>
          <h1 class="message__txt">
            “「いつでもどこでも情報が見られる環境」をオーナーさまに提供したい”
          </h1>
          <p class="message__ref">
            ― 三井不動産レジデンシャルリース株式会社経営企画部 イノベーション推進課 佐藤 秀洋様
          </p>
          <h1 class="message__txt">
            “今まで知らなかった、オーナーさまの「顔」が見えてきました”
          </h1>
          <p class="message__ref">
            ― 株式会社 コスギ不動産 賃貸管理本部 ＰＭ事業課 課長 友野直寛様
          </p>
          <h1 class="message__txt">
            “送金明細7割電子化を実現！圧倒的に業務が合理的に”
          </h1>
          <p class="message__ref">
            ― 株式会社トラスト 賃貸管理部 副主任 小川洋平様、二瓶優子様
          </p>
          <h1 class="message__txt">
            “これはもう、全オーナー様に導入すべきだと、売買担当者はこぞって言っています”
          </h1>
          <p class="message__ref--end">
            ― 三菱地所ハウスネット株式会社 企画部長 篠原靖直様
          </p>
        </div>
        <div class="image rellax" data-rellax-speed="2">
          <div class="message-video__youtube">
            <iframe src="https://www.youtube.com/embed/w4rQJCNvpwc?si=vtU_qVnX6ql3bGt2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
          </div>
        </div>
      </div>
      <div class="message-video__inner--rev">
        <div class="message-video__comments">
          <p class="message__title">オーナーさまの声</p>
          <h1 class="message__txt">
            “わざわざ紙を取りに行かなくても、その場で収支情報を見せられるのが良い”
          </h1>
          <p class="message__ref">
          </p>
          <h1 class="message__txt">
            “チャットなら、思いついた瞬間にメッセージを送れる”
          </h1>
          <p class="message__ref">
          </p>
          <h1 class="message__txt">
            “スマホアプリ自体が初めてだったけど、便利に使わせて頂きました”
          </h1>
          <p class="message__ref">
          </p>
          <h1 class="message__txt">
            “管理会社の誰に訊けば良いか分からないとき、このアプリがあればすぐに分かる”
          </h1>
          <p class="message__ref--end">
          </p>
        </div>
        <div class="image rellax" data-rellax-speed="2">
          <div class="message-video__youtube">
            <iframe src="https://www.youtube.com/embed/T3deBwuhiH8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="carousel-banner">
    <div class="carousel-banner__inner">
      <ul class="slider carousel-banner__box">
        <?php
        $query = new WP_Query(
          array(
            'post_type' => 'case_study',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'no_found_rows' => true,
            'tax_query' => array(
              array(
                'taxonomy' => 'user_type',
                'field' => 'id',
                'terms' => 32
              )
            )
          )
        );
        if ($query->have_posts()) {
          $_ = function ($str) {
            return $str;
          };
          while ($query->have_posts()) {
            $query->the_post();
            echo "
                <li class='carousel-banner__banner'>
                  <div class='carousel-banner__banner-wrap'>
                    <a href='{$_(get_the_permalink())}' class='carousel-banner__banner-image'>
                      <img loading='lazy' src='{$_(get_field('small_thumbnail'))}' alt='{$_(get_field('companyname'))}'>
                    </a>
                    <a href='{$_(get_the_permalink())}' class='carousel-banner__banner-message'>
                      <p class='carousel-banner__banner-title'>
                        <span>導入事例</span><br />
                        {$_(get_field('companyname'))}
                      </p>
                      <p class='carousel-banner__banner-body'>
                        {$_(get_the_title())}
                      </p>
                    </a>
                  </div>
                </li>
                ";
          }
        }
        wp_reset_query();
        ?>
      </ul>
      <div class="more-case__btn">
        <a class="more-topic__btn--inner" href="<?php echo esc_url(home_url('/')); ?>business/case-study/">導入事例一覧を見る</a>
      </div>
    </div>
  </section>
  <section class="container about-section">
    <div class="container__inner about-section__inner">
      <div class="title-box">
        <p class="title">WealthParkビジネスで実現する、不動産管理のDX</p>
      </div>
      <p class="body">
        WealthParkビジネスは、不動産オーナー様と管理会社をアプリでつなぐ業務支援システムです。
        <span class="marker">不動産管理会社にはクラウド型システム</span>を、<span class="marker">オーナー様にはオーナーアプリ（スマホ用アプリやWEBサイト）</span>を提供することで、収支報告や売買提案などのやり取りが簡単かつスピーディになります。
      </p>
      <div class="about-section__img">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/il_about-wpb.svg" alt="WealthParkビジネスで実現する、不動産管理のDX">
      </div>
      <div class="about-section__movie">
        <div class="about-section__movieInner">
          <iframe width="100%" height="270" src="https://www.youtube.com/embed/UbyW5A9Shlg?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <p class="about-section__movieTxt">2分でわかる、WealthParkビジネス(動画)</p>
      </div>
    </div>
  </section>
  <hr class="visible-sp divider--hr">
  </section>
  <section class="container device-section">
    <div class="container__inner--flex device-section__inner">
      <div class="message">
        <p class="message__title">
          アナログ業務を削減。<br class="visible-sp">業務効率化とコスト削減へ
        </p>
        <ul class="bullet-list">
          <li class="ja"><span class="marker">アプリやWebによる収支報告</span>で、印刷・封入・郵送が不要に。<span class="marker">オーナーへの報告／承諾がすべてシステムで行える</span>ので、<span class="marker">効率化／見える化</span>が実現し、管理業務の生産性が飛躍的に向上します。</li>
        </ul>
      </div>
      <div class="image">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/point_001.png" alt="" />
      </div>
    </div>
    <hr class="visible-sp divider--hr">
    <div class="container__inner--flex-reverse device-section__inner">
      <div class="message">
        <p class="message__title">オーナー満足度が向上。<br class="visible-sp">管理戸数拡大へ</p>
        <ul class="bullet-list">
          <li class="ja">オーナー様は<span class="marker">いつでもどこからでも資産情報を確認可能、確定申告等に</span>利用できるデータも簡単にダウンロード出来ます。また、管理会社からの確認事項を<span class="marker">ワンクリックで承諾可能</span>に。オーナー様の利便性向上／満足度アップにより、<span class="marker">更なる管理獲得や管理離れ防止</span>に繋がります。</li>
        </ul>
      </div>
      <div class="image">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/business_top_point2.png" alt="" />
      </div>
    </div>
    <hr class="visible-sp divider--hr">
    <div class="container__inner--flex device-section__inner">
      <div class="message">
        <p class="message__title">スマホを活用した、オーナー様への新たな提案機会を</p>
        <ul class="bullet-list">
          <li class="ja">オーナーアプリが<span class="marker">オーナー様との接点</span>となり、セミナーのご案内やオススメ物件の紹介、附帯商品の<span class="marker">提案が簡単に出来る</span>ようになります。さらに、<span class="marker">蓄積されたデータは、事業戦略や販売戦略にも活かせる貴重な資産</span>となるでしょう。</li>
        </ul>
      </div>
      <div class="image">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/business_top_point3.png" alt="" />
      </div>
    </div>
    <hr class="visible-sp divider--hr">
  </section>

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

  <!--プロダクト改善情報 -->
  <section class="business-blog-articles p-fp__oneColumn">
    <div class="l-inner">
      <div class="business-blog-articles__header">
        <h2 class="business-blog-articles__headline">プロダクト改善・新機能</h2>
      </div>
      <ul class="business-blog-articles__list">
        <?php
          $_ = function ($str) {
              return $str;
          };
          $args = array(
            'posts_per_page' => 6,
            'post_type' => 'wealthpark',
            'tag_id' => 86,
            'post_status' => 'publish',
            'no_found_rows' => true
          );
          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) {
              while ($the_query->have_posts()) {
                  $the_query->the_post();
                  $category = get_the_terms(get_the_ID(), "category");
                  $tags = array_map(function ($tag) {
                      global $_;
                      return "
                      <li class='business-blog-articles__meta-item'>
                        <a class='business-blog-articles__meta-link' href='{$_(get_term_link($tag->term_id))}'>
                          {$_($tag->name)}
                        </a>
                      </li>";
                  }, get_the_tags());
                  echo "
              <li class='business-blog-articles__item'>
                <a class='business-blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
                  <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                </a>
                <div class='business-blog-articles__item-header'>
                  <p class='business-blog-articles__item-date'>{$_(get_the_date('Y.m.d'))}</p>
                </div>
                <div class='business-blog-articles__item-body'>
                  <p class='business-blog-articles__item-body--inner'>
                    <a href='{$_(get_the_permalink())}'>
                      {$_(get_the_title())}
                    </a>
                  </p>
                </div>
                <ul class='business-blog-articles__meta'>
                    {$_(implode($tags))}
                </ul>
              </li>";
              }
          }
          wp_reset_query();
        ?>
      </ul>
      <p class="text-right">
        <a class="business-blog-articles__link" href="<?php echo esc_url(home_url('/business/release-note/')); ?>">
          <?php _e("article.all-articles", 'wp-next-landing-page'); ?>
        </a>
      </p>
    </div>
  </section>


  <section class="container introduction-section">
    <div class="container__inner introduction__inner">
      <div class="title-box">
        <p class="title">導入の流れ</p>
      </div>
      <p class="body">WealthParkビジネスの導入は、専任スタッフにお任せ下さい。お使いの不動産管理システムとの連携から、オーナー様へのアプリの普及、導入効果の最大化までを全面的にサポートします。</p>
      <ul class="introduction__items">
        <li class="introduction__item">
          <h2 class="item-title">1.基幹システムとの<br class="visible-sp">連携</h2>
          <p class="item-sub-title">最短1ヶ月～<br />スムーズな導入を支援</p>
          <p class="item-thumb"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/introduction-flow_001.jpg" alt="" /></p>
          <p class="item-body"><i class="material-icons md-18">done</i> 各種賃貸管理ソフトとのデータ連携支援<br /><i class="material-icons md-18">done</i> 各種導入課題に応じたソリューションの提案</p>
        </li>
        <li class="introduction__item">
          <h2 class="item-title">2.オーナー様への<br class="visible-sp">アプリ導入</h2>
          <p class="item-sub-title">社内推進からオーナー様向け<br />初期導入までサポート</p>
          <p class="item-thumb"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/introduction-flow_002.jpg" alt="" /></p>
          <p class="item-body">
            <i class="material-icons md-18">done</i> 社内向けトレーニング<br /><i class="material-icons md-18">done</i> オーナー向け初期導入支援<br /><i class="material-icons md-18">done</i> カスタマーサポート<br />
            <i class="material-icons md-18">done</i><a href="https://wealth-park.com/wealthpark-blog/interview_wealthpark-call-center/" style="text-decoration:underline;">オーナー向けコールセンター</a>(有償オプション)
          </p>
        </li>
        <li class="introduction__item">
          <h2 class="item-title">3.活用支援<span class="hidden-sp"><br />&nbsp;</span></h2>
          <p class="item-sub-title">活用支援を通じて<br />導入効果の最大化にコミット</p>
          <p class="item-thumb"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/introduction-flow_003.jpg" alt="" /></p>
          <p class="item-body"><i class="material-icons md-18">done</i> 新機能のご紹介<br /><i class="material-icons md-18">done</i> 活用事例の共有<br /><i class="material-icons md-18">done</i> 定期的な要望ヒアリング</p>
        </li>
      </ul>
      <div class="introduction__btn">
        <a class="introduction__btn--inner" href="/business/customer-success/">導入支援を見る</a>
      </div>
    </div>
  </section>
  <section class="container company-section">
    <div class="container__inner company-section__inner">
      <div class="title-box title-box--record">
        <p class="title">導入実績</p>
        <p class="note">※抜粋、五十音順 ※1 2023年12月時点 ※2 日本マーケティングリサーチ機構調べ（2021年6月調査） ※3 OwnerBox利用者を含む</p>
      </div>
      <ul class="company-section__teams">
        <li>
          <dl>
            <dt>
              導入企業数<span>※1</span>
            </dt>
            <dd>160社+</dd>
            <dd>
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/bar-chart--left.png" alt="導入企業数">
            </dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>
              利用オーナー数<span>※1</span>
            </dt>
            <dd>130,000名+<span>※3</span></dd>
            <dd>
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/bar-chart--right.png" alt="利用オーナー数">
            </dd>
          </dl>
        </li>
      </ul>
      <div class="company-section__btn">
        <a class="company-section__btn--inner" href="/business/case-study/">導入事例を見る</a>
      </div>
      <ul class="logos--4column">
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_owl-bldg.jpg" alt="株式会社アウルビル">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_architectdeveloper.png" alt="ADI">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_asahikasei.png" alt="Asahi KASEI">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_az-stat.png" alt="AZ Stat">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_art-fudo-san.png" alt="アート不動産">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_anabuki-housing.png" alt="穴吹ハウジングサービス">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_areps_new.png" alt="areps">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_e-com-housing.png" alt="ecom housing">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_ichiwa-property.png" alt="ICHIWA PROPERTY">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_epm.jpg" alt="epm不動産株式会社">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_able.jpg" alt="エイブル">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_Emi-us.png" alt="Emi-us">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_mj-home-new.png" alt="MJ HOME">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_mbc.png" alt="MBC不動産">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_ooi-fudosan.png" alt="大井不動産">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_alliq.jpg" alt="オーリック不動産">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_kainuma.jpg" alt="kainuma">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_gim.jpg" alt="ギム">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_kyoto-best-home.png" alt="Kyoto Best Home">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_goodlifecompany.png" alt="グッドライフカンパニー">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_green-energy.png" alt="Green Energy">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_clearth-life.png" alt="CLEARTH LIFE GROUP">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_cred.png" alt="cred">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_keio-fudosan.jpg" alt="京王不動産">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_kochi-house.png" alt="kochi house">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_kosugi.png" alt="コスギ不動産">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_kondo-property.png" alt="KONDO Property">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_3pukukanri.png" alt="3pukukanri">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_sanwa.png" alt="三和エステート株式会社">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_cic.jpg" alt="CIC">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_gp.jpg" alt="gp">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_c-herald.jpg" alt="C-Herald">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_jpr.png" alt="J.P.Returns">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_sure-innovation.png" alt="SURE INNOVATION">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_sho.jpg" alt="SHO ESTATE OFFICE">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_ja-aichi.png" alt="JA AICHI">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_jk.png" alt="jk">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_jog.png" alt="常口アトム">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_shinyu-residence.png" alt="SHINYU RESIDENCE">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_starmica.png" alt="STARMICA Asset Partners">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_sumitas.png" alt="Sumitas">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_3wise.jpg" alt="3wise">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_life-produce.png" alt="株式会社生活プロデュース">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_sonare.png" alt="株式会社ソナーレ Sonare">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_sougou-realty.png" alt="Sougou-realty">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_daikyo.png" alt="Daikyo">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_taikou-fudo-san.png" alt="大興不動産">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_taiheido.png" alt="Taiheido Real Estate Agency, Ltd.">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_darwin_asset_partners.png" alt="ダーウィンアセットパートナーズ株式会社">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_takara.png" alt="株式会社タカラ TAKARA">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_takuto2.png" alt="宅都 TAKUTO">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_tenkyoku.png" alt="アパートプラザ　グループ">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_tokyu-housing-lease.jpg" alt="東急住宅リース">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_new_livable.png" alt="東急リバブル">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_tokyo-tatemono-002.png" alt="東京建物不動産販売">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_trust.png" alt="TRUST">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_aaa-consulting.png" alt="AAA Consulting">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_nice.jpg" alt="nice">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_nakajitsu.jpg" alt="ナカジツ">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_nissei.png" alt="nissei.inc">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_nihon-agent.png" alt="日本エージェント">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_nihon-housing.jpg" alt="日本ハウズイング">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_nomura-re.png" alt="Nomura Real Estate Development">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_houseed-residence-min.png" alt="HOUSEED">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_housing_estate.png" alt="ハウジングエステート">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_hirata.png" alt="hirata">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_factor9.jpg" alt="factor9">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_foreland-realty-network.png" alt="FORELAND REALTY NETWORK">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_fuji-plan.png" alt="富士企画株式会社">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_hirota.png" alt="株式会社不動産のデパートひろた">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_frontier-house.png" alt="株式会社フロンティアハウス">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_hot_house.png" alt="ホットハウスプロパティマネジメント">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_mitsui-chintai.png" alt="三井不動産レジデンシャルリース株式会社">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_mhe.png" alt="Mitsui Home">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_mjhousenet2.png" alt="三菱地所ハウスネット">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_mustumi.png" alt="むつみワールド">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_mu.jpg" alt="move-up">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_meiko.jpg" alt="MEIKO TRADING">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_meisei.jpg" alt="明成不動産管理">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_lixil-realty.jpg" alt="LIXIL REALTY">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_list.jpg" alt="list">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_ryowa.jpg" alt="良和ハウス">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_ryokuto-kaihatsu.jpg" alt="Ryokuto Kaihatsu">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_leopalace21.png" alt="Leopalace21">
        </li>
        <li class="logos__logo">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/clients_watanabe-jyuken.png" alt="株式会社渡辺住研">
        </li>
      </ul>
    </div>
  </section>
  <?php include dirname(__FILE__) . "/template-parts/business-cta-form.php" ?>
  <?php include "news-summary.php" ?>
  <footer>
    <?php include "template-parts/footer-main.php" ?>
    <?php include "template-parts/footer-sub-business.php" ?>
  </footer>
  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
  <script>
    function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
    }
  </script>
  <script>
    $('.slider').slick({
      autoplay: true,
      autoplaySpeed: 5000,
      arrows: true,
      dots: false,
      slidesToShow: 3,
      responsive: [{
        breakpoint: 767,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          dots: false
        }
      }]
    });
    // メインナビのページスクロール // 
    $('a[href^="#"]').on('click', function() {
      var speed = 800;
      var href = $(this).attr("href");
      var target = $(href == "#" || href == "" ? 'html' : href);
      var headerHeight = 0; //固定ヘッダーの高さ
      var position = target.offset().top - headerHeight; //ターゲットの座標からヘッダの高さ分引く
      $('body,html').animate({
        scrollTop: position
      }, speed, 'swing');
      return false;
    });
  </script>
  <script>
    var rellax = new Rellax('.rellax', {
      center: true
    });
  </script>
  <script>
    const track = document.querySelector("#track");
    const logoSlide = track.querySelector(".logo-slide");

    // Clone the logo slide multiple times
    for (let i = 0; i < 2; i++) {
      track.appendChild(logoSlide.cloneNode(true));
    }

    let scrollPosition = 0;
    const speed = .5;
    let isPlaying = true;
    let animationFrameId = null;

    function scroll() {
      if (!isPlaying) return; // Stop if paused

      scrollPosition -= speed;
      const slideWidth = logoSlide.offsetWidth;
      if (Math.abs(scrollPosition) >= slideWidth) {
        scrollPosition += slideWidth;
      }
      track.style.transform = `translateX(${scrollPosition}px)`;
      animationFrameId = requestAnimationFrame(scroll);
    }
    scroll();
  </script>
  <?php include_once("tag_ptengine.php") ?>
  <?php include "tag_hubspot_popup_001.php" ?>
  <?php include "popup_banner_business.php" ?>
</body>

</html>