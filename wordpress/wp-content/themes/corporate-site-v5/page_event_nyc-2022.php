<?php
/*
Template Name: Event - NYC-2022
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
<title>WealthPark NYC 2022</title>
<meta name="description" content="WealthParkは「Connect Value」をテーマに、日米のPropTech企業の交流の場となる国際カンファレンスに参加しています。”不動産×テクノロジー”に関する国内外の大きなトレンドをチェックしましょう！※同時通訳あり">
<meta property="og:type" content="website">
<meta property="og:title" content="WealthPark NYC 2022">
<meta property="og:description" content="WealthParkは「Connect Value」をテーマに、日米のPropTech企業の交流の場となる国際カンファレンスに参加しています。”不動産×テクノロジー”に関する国内外の大きなトレンドをチェックしましょう！※同時通訳あり">
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/event/ogp_nyc-2022.jpg">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/app/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc" />
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/modal-multi.js?<?php echo date('Ymd-Hi'); ?>"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<?php $current_lang = qtrans_getLanguage(); ?>
<section class="event-hero-section--nyc-2022">
  <div class="event-hero-section__inner">
      <h1 class="event-hero-section__title"><?php _e("event.hero.connect-value", 'wp-next-landing-page'); ?></h1>
      <p class="event-hero-section__sub-title">
        <!-- <?php _e("event.hero.date", 'wp-next-landing-page'); ?> -->
        November 7th to 11th, 2022
      </p>
      <p class="event-hero-section__logo">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/app/metaprop_logo.png" alt="logo">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/app/wealthpark_logo.png" alt="logo">
      </p>
      <p class="event-hero-section__description"><span class="ja"><?php _e("event.hero.description", 'wp-next-landing-page'); ?></span></p>
      <div class="button--blue">
        <a href="#event-contact-form"><?php _e("event.hero.contact", 'wp-next-landing-page'); ?></a>
      </div>
    </div>
  </div>
</section>
<section class="page-name">
  <div class="page-name__inner page-name__inner--event ">
    <h2 class="event-content__title"><?php _e("event.description.title", 'wp-next-landing-page'); ?></h2>
  </div>
</section>
<section class="container event-content">
  <div class="container__inner container__inner--event">
    <p class="event-content__text">
    <?php _e("event.description.text", 'wp-next-landing-page'); ?>
    </p>
  </div>
</section>
<section class="page-name">
  <div class="page-name__inner page-name__inner--event">
    <h2 class="event-content__title"><?php _e("event.outline.title", 'wp-next-landing-page'); ?></h2>
  </div>
</section>
<section class="container company-profile company-profile__asset_management event-content__table">
  <div class="container__inner company-profile__inner company-profile__inner--event">
    <dl class="company-profile__list">
      <dt class="company-profile__title">
        <?php _e("event.outline.objective.label", 'wp-next-landing-page'); ?>
      </dt>
      <dd class="company-profile__body">
        <?php _e("event.outline.objective.value", 'wp-next-landing-page'); ?>
      </dd>
    </dl>
    <dl class="company-profile__list">
      <dt class="company-profile__title">
        <?php _e("event.outline.period.label", 'wp-next-landing-page'); ?>
      </dt>
      <dd class="company-profile__body">
        <?php _e("event.outline.period.value", 'wp-next-landing-page'); ?>
      </dd>
    </dl>
    <dl class="company-profile__list">
      <dt class="company-profile__title">
        <?php _e("event.outline.content.label", 'wp-next-landing-page'); ?>
      </dt>
      <dd class="company-profile__body">
        <?php _e("event.outline.content.value", 'wp-next-landing-page'); ?>
      </dd>
    </dl>
    <dl class="company-profile__list">
      <dt class="company-profile__title">
        <?php _e("event.outline.price.label", 'wp-next-landing-page'); ?>
      </dt>
      <dd class="company-profile__body">
        <?php _e("event.outline.price.value", 'wp-next-landing-page'); ?>
      </dd>
    </dl>
    <!-- <dl class="company-profile__list">
      <dt class="company-profile__title">
        <?php _e("event.outline.application.label", 'wp-next-landing-page'); ?>
      </dt>
      <dd class="company-profile__body">
        <?php _e("event.outline.application.value", 'wp-next-landing-page'); ?>
      </dd>
    </dl> -->
  </div>
  <div class="container__inner container__inner--event container__inner--event-covid">
    <p class="event-content__text">
      <?php _e("event.covid.note", 'wp-next-landing-page'); ?>
    </p>
  </div>
</section>
<!-- <section class="page-name">
  <div class="page-name__inner page-name__inner--event">
    <h2 class="event-content__title">
      <?php _e("event.schedule.title", 'wp-next-landing-page'); ?>
    </h2>
  </div>
</section>
<section class="container event-content event-content__timeline">
  <div class="container__inner container__inner--event">
    <p class="event-content__text">
      <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/event/<?php _e("event.schedule.image", 'wp-next-landing-page'); ?>.jpg" alt="event timeline">
    </p>
  </div>
</section> -->
<!-- <section class="container event-content event-content__button">
  <div class="container__inner container__inner--event">
    <div class="button--blue">
      <a href="#event-contact-form"><?php _e("event.hero.contact", 'wp-next-landing-page'); ?></a>
    </div>
  </div>
</section> -->
<section class="page-name">
  <div class="page-name__inner page-name__inner--event">
    <h2 class="event-content__title event-content__title--wealthpark-event">
      WealthPark Event
    </h2>
  </div>
</section>
<section class="container event-content event-content__timeline">
  <div class="container__inner container__inner--event container__inner--event-date-venue">
    <?php if ($current_lang == "ja") { ?>
      <h3>[日時] 2022/11/11</h3>
      <p>[Start:12:30]</p>
      <h3>[会場] Studio 525</h3>
      <p>525 W 24th Street, New York NY 10011</p>
    <?php } else { ?>
      <h3>[Date] 2022/11/11</h3>
      <p>[Start:12:30]</p>
      <h3>[Venue] Studio 525</h3>
      <p>525 W 24th Street, New York NY 10011</p>
    <?php } ?>
  </div>
</section>

<?php if ($current_lang == "ja") { ?>
  <!-- JAPANESE -->
  <section class="page-name">
    <div class="page-name__inner page-name__inner--event ">
      <h2 class="event-content__title">Speakers</h2>
      <p class="event-content__title__note">スピーカーは決定次第、随時更新されます<br>
      *アルファベット順</p>
    </div>
  </section>
  <section class="container partnerships partnerships--2022 event-content">
    <div class="container__inner partnerships__inner container__inner--event">
      <div class="team">
        <ul class="team-lists team-lists--justify-center">
          <li class="team-lists__person modal-syncer" data-target="modal-content-34">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/anastasia_istratova.png" alt="Anastasia Istratova"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Anastasia Istratova</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Fifth Wall<br>(Vice President on the Climate Technology investment team)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-28">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/brian_sharlow.png" alt="Brian Sharlow"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Brian Sharlow</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Turntide Technologies <br>(Director of Sales Engineering - North America）</p>
          </li>
          <!-- <li class="team-lists__person modal-syncer" data-target="modal-content-07">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/greg_smithies.png" alt="Greg Smithies"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Greg Smithies</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Fifth Wall<br>(Partner)</p>
          </li> -->
          <li class="team-lists__person modal-syncer" data-target="modal-content-29">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/kay_kato.png" alt="加藤 航介"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Kay (Kosuke) Kato</p>
            <p class="team-lists__person-role team-lists__person-role-2022">WealthPark Lab<br>(President)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-30">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/marcela_sapone.png" alt="Marcela Sapone"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Marcela Sapone</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Hello Alfred<br>(CEO & Co-founder)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-26">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/mike_rudoy.png" alt="Mike Rudoy"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Mike Rudoy</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Jetty<br>(Co-Founder <br>& CEO)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-31">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/naohito_sato.png" alt="佐藤　直人"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Naohito Sato</p>
            <p class="team-lists__person-role team-lists__person-role-2022">在ニューヨーク<br>日本国総領事館<br>経済部</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-32">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/seiji_inada.png" alt="稲田　誠士"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Seiji Inada</p>
            <p class="team-lists__person-role team-lists__person-role-2022">ユーラシア・<br>グループ 日本代表</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-27">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/todd_sigaty.png" alt="Todd Sigaty"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Todd Sigaty</p>
            <p class="team-lists__person-role team-lists__person-role-2022">SHoP Architects<br>(Chief Officer<br>& Board Member)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-33">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/yoshihiro_tachibana.png" alt="橘　嘉宏"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Yoshihiro Tachibana</p>
            <p class="team-lists__person-role team-lists__person-role-2022">三菱地所株式会社<br>(住宅業務企画部 主事HOMETACTプロジェクトリーダー)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-25">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/zach_aarons.png" alt="Zach Aarons"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Zach Aarons</p>
            <p class="team-lists__person-role team-lists__person-role-2022">MetaProp<br>(Co-Founder<br>& General Partner)</p>
          </li>
          <!-- <li class="team-lists__person team-lists__person--tbd">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/placeholder.png" alt="placeholder image"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">TBD</p>
            <p class="team-lists__person-role team-lists__person-role-2022">TBD</p>
          </li> -->
        </ul>
      </div>
    </div>
  </section>
  <div>
    <!-- <div id="modal-content-07" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/greg_smithies.png" alt="Greg Smithies"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Greg Smithies</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Fifth Wall<br>(Partner)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <Fifth>Fifth WallのPartnerであり、Climate Technology Investmentチームを率いている。Fifth Wall入社以前は、彼が設立したBMW i Venturesのパートナーとして、Prometheus FuelsやPureCycle (NASDAQ: ROCH)などの企業へ投資をした実績を持つ。BMW i Ventures以前は、The Boring CompanyとNeuralinkの両社で、財務とオペレーションを担当していた。</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div> -->
    <div id="modal-content-25" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/zach_aarons.png" alt="Zach Aarons"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Zach Aarons</p>
      <p class="team-lists__person-role team-lists__person-role-2022">MetaProp<br>(Co-Founder & General Partner)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>MetaPropの共同創業者兼Partnerであり、10年以上にわたって不動産テクノロジーの最前線に身を置く。PropTech投資家としてはもちろんのこと、ベストセラー作家、大学教授など、数多くの顔を持つ。2015年、不動産とテクノロジー分野での経験を生かしてMetaPropを設立し、テクノロジーを活用して不動産をより手が届きやすく身近なものにし、持続可能なものにするというミッションにキャリアを捧げている。Metaprop設立以来、150社以上のPropTech企業に投資してきた。</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-26" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/mike_rudoy.png" alt="Mike Rudoy"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Mike Rudoy</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Jetty<br>(Co-Founder & CEO)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>JettyのCEO兼共同創業者である。戦略コンサルタント Diamond Management & Technology Consultants (現在は PwC の一部) で経営コンサルタントとしてキャリアをスタート。 2009 年、ライブビデオ プラットフォームである Big Live を共同創業。 2014 年、高成長のスタートアップにコンサルティングサービスを提供する会社である Breadhouse を共同創業。</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-27" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/todd_sigaty.png" alt="Todd Sigaty"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Todd Sigaty</p>
      <p class="team-lists__person-role team-lists__person-role-2022">SHoP Architects<br>(Chief Officer & Board Member)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>トッド・シガティは、SHoPアーキテクツの最高責任者兼取締役であり、過去15年以上にわたり、デザイン、不動産、ハイテク分野における数々の開発プロジェクト、パートナーシップ、戦略的ベンチャーに携わり、助言と交渉を行っている。 またSHoP参画以前は、構造調整と改革に取り組む様々な政府や組織で、開発プロジェクトのシニアアドバイザーを務めた。</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-28" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/brian_sharlow.png" alt="Brian Sharlow"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Brian Sharlow</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Turntide Technologies <br>(Director of Sales Engineering - North America）</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>HVAC、配管、暖房、建設業界の販売とプロジェクト管理の両方で10年以上の経験を持つ、セールスエンジニアリングのプロフェッショナル。重要顧客のためのサステナビリティ・プロジェクトの開発・調整を行っている。</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-29" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/kay_kato.png" alt="加藤 航介"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Kay (Kosuke) Kato</p>
      <p class="team-lists__person-role team-lists__person-role-2022">WealthPark Lab<br>(President)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>日系・外資系の大手投資会社においてファンドマネージャー、投資啓発などの要職を歴任後、WealthPark に参画。英国・米国に約 10 年滞在し、世界 30ヵ国での投資実務を経験する。米国コロンビア大学MBA（経営学修士）修了。米国公認会計士、ファイナンシャ ル・プランナー、証券アナリスト試験に合格。英国ケンブリッジ大学Executive Program（GMCA） 在籍中。一般社団法人 投資信託協会「すべての人に世界の成長を届ける研究会」客員研究員。</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-30" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/marcela_sapone.png" alt="Marcela Sapone"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Marcela Sapone</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Hello Alfred<br>(CEO & Co-founder)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>ハーバード・ビジネス・スクール在学中の2014年にJessica Beckと共同でHello Alfredを設立。米国とカナダの52都市で30万人以上の住民にサービスを提供するまでに拡大し、2018、2019、2020年のFast CompanyのTop 50 Most Innovative Companiesに選出されました。また、ゴールドマン・サックスの「最も魅力的な起業家」や、2016年のForbes 30 Under 30のConsumer Tech部門にも選ばれています。</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-31" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/naohito_sato.png" alt="佐藤　直人"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Naohito Sato</p>
      <p class="team-lists__person-role team-lists__person-role-2022">在ニューヨーク<br>日本国総領事館<br>経済部</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>2010年に国土交通省に入省。国土交通省では、建設業政策や土地政策のほか、都市開発の海外展開を始めとするインフラ輸出等の国際関係業務を担当。また、不動産業行政では、賃貸住宅管理業法の制定や宅建業者の押印規制等の見直しに関与。2021年6月より現職。</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-32" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/seiji_inada.png" alt="稲田　誠士"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Seiji Inada</p>
      <p class="team-lists__person-role team-lists__person-role-2022">ユーラシア・グループ 日本代表</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>外務省および首相官邸において経済外交や国家安全保障関連業務に従事の後、外資系コンサルティング会社および金融機関にて勤務。また世界経済フォーラムにおいてESGやデジタル・テクノロジー分野の提言活動に従事した後、2020年より現職。内閣官房国家戦略会議「平和フロンティア部会」委員、総務省「デジタル変革時代のICTグローバル戦略懇談会国際戦略ワーキンググループ」構成員などを歴任。</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-33" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/yoshihiro_tachibana.png" alt="橘　嘉宏"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Yoshihiro Tachibana</p>
      <p class="team-lists__person-role team-lists__person-role-2022">三菱地所株式会社<br>(住宅業務企画部 主事HOMETACTプロジェクトリーダー)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>2008年三菱地所株式会社入社。住宅業務企画部 新事業・DXユニット所属。分譲マンションの用地・一棟リノベーション事業の立ち上げなどを経験後、同社の住宅事業グループのバリューチェーン推進業務に従事。以後、住宅事業グループCRM立上げや会員組織「三菱地所のレジデンスクラブ」統合プロジェクトなどDX施策・新事業立上げを主に担当。総合スマートホームサービス「HOMETACT」を2021年11月にリリース。</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-34" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/anastasia_istratova.png" alt="Anastasia Istratova"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Anastasia Istratova</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Fifth Wall<br>(Vice President on the Climate Technology investment team)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>AnastasiaはFifth Wallの気候技術投資チームのヴァイスプレジデントで、ディールソーシング、デューデリジェンス、ディール実行を中心に活動している。</p>
        <p>Fifth Wall入社前は、Standard Investmentsのベンチャー投資家として、初期および成長段階の産業技術企業に焦点を当てていた。AnastasiaのキャリアはSunPowerで始まり、同社のプロジェクトファイナンス取引の多くを主導した。</p>
        <p>ロシアのサンクトペテルブルクで生まれ、現在はニューヨーク市在住。ノースイースタン大学で国際ビジネスの学位を取得し、フランスのNEOMA Reims Management Schoolでデュアルディプロマプログラムを修了。ハーバード・ビジネス・スクールでMBAを取得。</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
  </div>
<?php } else { ?>
  <!-- ENGLISH -->
  <section class="page-name">
    <div class="page-name__inner page-name__inner--event ">
      <h2 class="event-content__title">Speakers</h2>
      <p class="event-content__title__note">Speakers will be updated as soon as they are confirmed<br>
      *Alphabetical order </p>
    </div>
  </section>
  <section class="container partnerships partnerships--2022 event-content">
    <div class="container__inner partnerships__inner container__inner--event">
      <div class="team">
        <ul class="team-lists team-lists--justify-center">
          <li class="team-lists__person modal-syncer" data-target="modal-content-34">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/anastasia_istratova.png" alt="Anastasia Istratova"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Anastasia Istratova</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Fifth Wall<br>(Vice President on the Climate Technology investment team)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-28">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/brian_sharlow.png" alt="Brian Sharlow"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Brian Sharlow</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Turntide Technologies <br>(Director of Sales Engineering - North America）</p>
          </li>
          <!-- <li class="team-lists__person modal-syncer" data-target="modal-content-07">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/greg_smithies.png" alt="Greg Smithies"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Greg Smithies</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Fifth Wall<br>(Partner)</p>
          </li> -->
          <li class="team-lists__person modal-syncer" data-target="modal-content-29">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/kay_kato.png" alt="Kay (Kosuke) Kato"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Kay (Kosuke) Kato</p>
            <p class="team-lists__person-role team-lists__person-role-2022">WealthPark Lab<br>(President)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-30">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/marcela_sapone.png" alt="Marcela Sapone"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Marcela Sapone</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Hello Alfred<br>(CEO & Co-founder)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-26">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/mike_rudoy.png" alt="Mike Rudoy"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Mike Rudoy</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Jetty<br>(Co-Founder <br>& CEO)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-31">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/naohito_sato.png" alt="Naohito Sato"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Naohito Sato</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Economic Affairs Division,<br> Consulate-General of Japan in New York</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-32">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/seiji_inada.png" alt="Seiji Inada"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Seiji Inada</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Eurasia Group Japan Representative</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-27">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/todd_sigaty.png" alt="Todd Sigaty"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Todd Sigaty</p>
            <p class="team-lists__person-role team-lists__person-role-2022">SHoP Architects<br>(Chief Officer<br>& Board Member)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-33">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/yoshihiro_tachibana.png" alt="Yoshihiro Tachibana"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Yoshihiro Tachibana</p>
            <p class="team-lists__person-role team-lists__person-role-2022">Mitsubishi Estate Co., Ltd.<br>(Chief HOMETACT Project Leader, Housing Business Planning Department)</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-25">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/zach_aarons.png" alt="Zach Aarons"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">Zach Aarons</p>
            <p class="team-lists__person-role team-lists__person-role-2022">MetaProp<br>(Co-Founder<br>& General Partner)</p>
          </li>
          <!-- <li class="team-lists__person team-lists__person--tbd">
            <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/placeholder.png" alt="placeholder image"></p>
            <p class="team-lists__person-name team-lists__person-name-2022">TBD</p>
            <p class="team-lists__person-role team-lists__person-role-2022">TBD</p>
          </li> -->
        </ul>
      </div>
    </div>
  </section>
  <div>
    <!-- <div id="modal-content-07" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/greg_smithies.png" alt="Greg Smithies"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Greg Smithies</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Fifth Wall<br>(Partner)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>Greg is a Partner at Fifth Wall, where he leads the Climate Technology Investment team. Prior to joining Fifth Wall, Greg was a Partner at BMW i Ventures where he founded and led the Sustainability investing practice, investing in companies such as Prometheus Fuels, and PureCycle (NASDAQ: ROCH). Before joining BMW i Ventures, Greg led Finance & Operations for both The Boring Company and Neuralink simultaneously.</p>
        <p>Greg started his investment career at Battery Ventures where he covered early-stage enterprise technology startups, as well as industrial technology buyouts. Successful exits from his work there include Nutanix (NASDAQ: NTNX), AppDynamics (acquired by Cisco Systems, Inc.), and IST (acquired by Scott Brand). Greg was born in Pretoria, South Africa, and currently lives in Petaluma, CA. He graduated from the University of Pennsylvania’s Wharton School where he received a BS in Economics and a BS in Computer Science.</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div> -->
    <div id="modal-content-25" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/zach_aarons.png" alt="Zach Aarons"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Zach Aarons</p>
      <p class="team-lists__person-role team-lists__person-role-2022">MetaProp<br>(Co-Founder & General Partner)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>Zach Aarons is an award-winning PropTech investor, best-selling author, professor, and speaker who has been a pioneering thought leader at the forefront of real estate technology for over a decade. In 2010, while working as a Project Manager for internationally renowned large-scale mixed-use real estate developer Millennium Partners, Zach began investing in early-stage PropTech companies, quickly becoming the most active angel investor in the space with over 50 portfolio companies. In 2015, Zach parlayed his experiences in the real estate and technology sectors to found MetaProp, devoting his career to the mission of utilizing technology to make real estate more affordable, accessible, sustainable, and resilient. Since founding MetaProp, Zach and his team have invested in 150 PropTech companies.</p>
        <p>Prior to founding MetaProp and working at Millennium Partners, Zach served as a Senior Associate for ENIAC Ventures, an early-stage venture capital fund based in New York City and San Francisco. He has served as a technology entrepreneur, founding the online/offline tourism company Travelgoat. Zach began his career as an Analyst for boutique investment bank PJ Solomon, working on mergers and acquisitions as well as financial restructuring.</p>
        <p>Outside of work, Zach currently serves on the Board of Trustees of The Tenement Museum. Zach is an Assistant Adjunct Professor at the Columbia Graduate School of Architecture, Planning, and Preservation. He serves on the Technology Committee for the Real Estate Board of New York and the Technology and Real Estate Council for the Urban Land Institute. He graduated Magna Cum Laude with an A.B. from Brown University in Ancient Studies and earned an MBA from Columbia Business School.</p>
        <p>Zach co-authored the Amazon bestseller PropTech 101 and has been featured in dozens of international publications and media, including The Wall Street Journal, The New Yorker, The Real Deal, Curbed, Commercial Observer, Propmodo, The Information, TechCrunch, Bisnow, Forbes, The Real Estate Weekly, Crain's, and Cheddar. He is a frequent speaker at global PropTech events including the Urban Land Institute, MIPIM, Realcomm, Argus Connect, SuperReturn International, and the Columbia/Goodwin Real Estate Capital Markets Conference. In 2017, Zach was honored as “Investor of the Year” at the Global PropTech Awards.</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-26" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/mike_rudoy.png" alt="Mike Rudoy"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Mike Rudoy</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Jetty<br>(Co-Founder & CEO)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>Mike Rudoy is the co-founder and CEO of Jetty, a financial services company on a mission to make renting a home more affordable. Mike started his career as a management consultant at the strategy firm Diamond Management & Technology Consultants (now part of PwC). In 2009, Mike co-founded Big Live, a venture-backed live video platform that sought to bring a social experience to the consumption of online video. In 2014, Mike co-founded Breadhouse, a consultancy servicing high-growth start-ups. Mike graduated from Princeton University with a B.S. in International Politics.</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-27" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/todd_sigaty.png" alt="Todd Sigaty"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Todd Sigaty</p>
      <p class="team-lists__person-role team-lists__person-role-2022">SHoP Architects<br>(Chief Officer & Board Member)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>Todd Sigaty is the Chief Officer and Board Member at SHoP Architects and in this capacity over the past 15+ years has engaged, advised and negotiated numerous development projects, partnerships and strategic ventures in design, real estate and tech opportunities, including recent NFT and web3 releases and investments as part of the core business. Todd is also integral in establishing and structuring other ventures incubated within SHoP, such as a development management services group, a CRE tech start and an off-site building manufacturing company, “Assembly OSM,” which closed a series A round recently. Prior to SHoP, Todd was a Senior Advisor on development projects globally with various governments and organizations focused on structural adjustment and reform. Mr. Sigaty has held teaching positions on business and legal courses in Europe and the US, including at the Sotheby’s MA Program in NYC for 5+ years. He was a YLF Fellow with US-China for the National Committee and a Fellow at the Advocacy Institute in Washington D.C. Todd earned a J.D. and Planning Degree from the University of Oregon Law School and a B.A. in History from the University of Texas (Austin). Todd also co-owns a vineyard and wine bar in Oregon and has been on the Board of many organizations.</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-28" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/brian_sharlow.png" alt="Brian Sharlow"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Brian Sharlow</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Turntide Technologies <br>(Director of Sales Engineering - North America）</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>Brian Sharlow is a sales engineering professional with over 10 years' experience in both sales and project management in the HVAC, plumbing, heating and construction industries. He develops and co-ordinates sustainability projects for key clients.</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-29" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/kay_kato.png" alt="Kay (Kosuke) Kato"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Kay (Kosuke) Kato</p>
      <p class="team-lists__person-role team-lists__person-role-2022">WealthPark Lab<br>(President)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>Kay Kato conducts research and disseminates information in order to “open new investment doors for all.” Prior to WealthPark, Kay held key positions in global major investment companies, including fund manager and investment enlightenment mentor. He once resided in the UK and the US for about 10 years and had investment experience in 30 countries around the world. He holds a M.B.A. from Columbia University. He is also a Certified Public Accountant, a Financial Planner, and the certified member analyst of Securities Analysts Association of Japan (CMA). He is currently a visiting scholar of The Investment Trusts Association, Japan.</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-30" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/marcela_sapone.png" alt="Marcela Sapone"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Marcela Sapone</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Hello Alfred<br>(CEO & Co-founder)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>Marcela Sapone co-founded Hello Alfred with Jessica Beck in 2014 when she was a student at Harvard Business School. The company has expanded to serve more than 300,000 residents in 52 cities across the U.S. and Canada and was named to Fast Company's Top 50 Most Innovative Companies in 2018, 2019, and 2020. Shw was named one of Goldman Sachs' Most Attractive Entrepreneurs and featured as the face of Consumer Tech in Forbes 30 Under 30 in 2016.</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-31" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/naohito_sato.png" alt="Naohito Sato"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Naohito Sato</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Economic Affairs Division,<br> Consulate-General of Japan in New York</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>Sato joined the Ministry of Land, Infrastructure and Transport (MLIT) in 2010. At MLIT Japan, he was responsible for construction industry policy and land policy, as well as international relations work such as infrastructure exports, including the overseas development of urban development. In the real estate industry administration, he took part into the enactment of the Rental Housing Management Business Law and the review of the seal regulations for building contractors, etc. He has been in his current position since June 2021.</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-32" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/seiji_inada.png" alt="Seiji Inada"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Seiji Inada</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Eurasia Group Japan Representative</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>After working on economic diplomacy and national security affairs at the Ministry of Foreign Affairs and the Prime Minister's Office, Inada worked for a foreign consulting firm and a financial institution. He participated into advocacy activities in the fields of ESG and digital technology at the World Economic Forum before being appointed to his current position in 2020. He has served as a member of the Peace Frontier Subcommittee of the National Strategy Council, Cabinet Secretariat, and as a member of the International Strategy Working Group of the ICT Global Strategy Roundtable in the Age of Digital Transformation, Ministry of Internal Affairs and Communications.</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-33" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/yoshihiro_tachibana.png" alt="Yoshihiro Tachibana"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Yoshihiro Tachibana</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Mitsubishi Estate Co., Ltd.<br>(Chief HOMETACT Project Leader, Housing Business Planning Department)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>Tachibana joined Mitsubishi Estate in 2008, currently serving at the New Business & DX Unit, Residential Business Planning Department. After working on the launch of a condominium site and whole building renovation business, he was engaged in the promotion of the value chain of the company's residential business group. Since then, he has mainly been in charge of DX and new business launches, including the launch of CRM for the Residential Business Group and the integration project for the "Mitsubishi Estate's Residence Club" membership organisation. The smart home service HOMETACT was released in November 2021.</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
    <div id="modal-content-34" class="modal-content">
      <p class="team-lists__person-photo"><img class="" src="<?php echo get_template_directory_uri() ?>/img/event/anastasia_istratova.png" alt="Anastasia Istratova"></p>
      <p class="team-lists__person-name team-lists__person-name-2022">Anastasia Istratova</p>
      <p class="team-lists__person-role team-lists__person-role-2022">Fifth Wall<br>(Vice President on the Climate Technology investment team)</p>
      <div class="team-lists__person-description team-lists__person-description-2022">
        <p>Anastasia is a Vice President on the Climate Technology investment team at Fifth Wall, where she focuses on deal sourcing, due diligence, and deal execution.</p>
        <p>Prior to joining Fifth Wall, Anastasia was a venture investor at Standard Investments, focusing on early and growth stage industrial technology companies. Anastasia began her career at SunPower, where she led many of the company’s project finance transactions.</p>
        <p>Anastasia was born in St Petersburg, Russia and currently lives in New York City. She graduated from Northeastern University with a degree in International Business, and also completed a dual diploma program at NEOMA Reims Management School in France. She received her MBA from Harvard Business School.</p>
      </div>
      <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
    </div>
  </div>
<?php } ?>





<section class="container event-content event-content__sponsor">
  <div class="page-name__inner page-name__inner--event page-name__inner--sponsor">
    <h2 class="event-content__title">
      Platinum Sponsor
    </h2>
  </div>
  <div class="container__inner container__inner--event">
    <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/event/sponsor_mitsubishi_estate.png" alt="Mitsubishi Estate">
  </div>
  <div class="page-name__inner page-name__inner--event page-name__inner--sponsor">
    <h2 class="event-content__title">
      Gold Sponsor
    </h2>
  </div>
  <div class="container__inner container__inner--event">
    <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/event/sponsor_chuo_nittochi.png" alt="Chuo Nittochi">
  </div>
  <div class="page-name__inner page-name__inner--event page-name__inner--sponsor">
    <h2 class="event-content__title">
      Silver Sponsor
    </h2>
  </div>
  <div class="container__inner container__inner--event">
    <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/event/sponsor_price_hubble.png" alt="Price Hubble">
  </div>
</section>
<section class="container event-content event-content__sponsor event-content__sponsor--attendees">
  <div class="page-name__inner page-name__inner--event page-name__inner--sponsor">
    <h2 class="event-content__title">
      Partners
    </h2>
    <?php if ($current_lang == "ja") { ?>
      <p>*アルファベット順</p>
    <?php } else { ?>
      <p>*Alphabetical order</p>
    <?php } ?>
  </div>
  <div class="container__inner container__inner--event">
  <ul class="logos--4column">
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/partners_agya.png" alt="Agya">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/partners_alfred.png" alt="Alfred">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/partners_curina.png" alt="Curina">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/partners_dealpath.png" alt="Dealpath">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/partners_fifthwall.png" alt="Fifth Wall">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/partners_metaprop.png" alt="Metaprop">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/partners_okada_co.png" alt="Okada & Co">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/partners_rally.png" alt="Rally">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/partners_turntide.png" alt="Turntide">
      </li>
    </ul>
  </div>
</section>
<section class="container event-content event-content__sponsor event-content__sponsor--attendees">
  <div class="page-name__inner page-name__inner--event page-name__inner--sponsor">
    <h2 class="event-content__title">
      Attendees Confirmed
    </h2>
    <?php if ($current_lang == "ja") { ?>
      <p>*アルファベット順</p>
    <?php } else { ?>
      <p>*Alphabetical order</p>
    <?php } ?>
  </div>
  <div class="container__inner container__inner--event">
  <ul class="logos--4column">
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_asahikasei.png" alt="Asahi Kasei Homes">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_CIT.png" alt="Center For Real Estate Innovation">
      </li>
      <!-- <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_chuo-nittochi.png" alt="Chuo Nittochi">
      </li> -->
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_deloitte.png" alt="Deloitte">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_dgi.png" alt="DG Incubation">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_Drma.png" alt="Diamond Realty Management America">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_fis.png" alt="FIS">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_hirata.png" alt="Hirata">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_iyell.png" alt="iYell">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_kp.png" alt="KP Technologies">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_mitsubishi.png" alt="Mitsubishi Estate Group">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_mitsui-fudosan.png" alt="Mitsui Fudosan">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_mistui-residential.png" alt="Mitsui Fudosan Residential Lease">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_miyoshi.png" alt="Miyoshi">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_nihon-agant.png" alt="Nihon Agent">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_orix.png" alt="Orix">
      </li>
      <!-- <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_realty_mark.png" alt="Realty Mark">
      </li> -->
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_SCSK.png" alt="SCSK">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_Sonare.png" alt="Sonare">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_space.png" alt="Space">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_takuto.png" alt="Takuto">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_terass.png" alt="Terass">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_tokyu-hplding.png" alt="Tokyu Holdings">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_tokyurease.png" alt="Tokyu Lease">
      </li>
      <li class="logos__logo">
        <img loading="lazy" src="<?php echo get_template_directory_uri() ?>/img/event/attendee_wakuwaku.png" alt="Waku Waku">
      </li>
    </ul>
  </div>
</section>


<section class="page-name">
  <div class="page-name__inner page-name__inner--event page-name__inner--event-title-video">
    <h2 class="event-content__title">
      <?php _e("event.previous2019.title", 'wp-next-landing-page'); ?>
    </h2>
    <p class="event-content__text event-content__text--center"><?php _e("event.video.caption", 'wp-next-landing-page'); ?></p>
  </div>
</section>
<section class="page-name">
  <div class="page-name__inner page-name__inner--event page-name__inner--event-video">
    <h2 class="event-content__title">
      WealthPark 2019
    </h2>
  </div>
</section>
<section class="container event-content">
  <div class="container__inner container__inner--event">
    <div class="event-feature-section__youtube-wrapper">
      <div class="event-feature-section__youtube">
        <iframe src="https://www.youtube.com/embed/2ymrRKGkTf0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<section class="page-name">
  <div class="page-name__inner page-name__inner--event page-name__inner--event-video">
    <h2 class="event-content__title">
      WealthPark 2018
    </h2>
  </div>
</section>
<section class="container event-content">
  <div class="container__inner container__inner--event">
    <div class="event-feature-section__youtube-wrapper">
      <div class="event-feature-section__youtube">
        <iframe src="https://www.youtube.com/embed/Vdgp63jC-9A" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</section>
<section class="container event-content event-content__testimonials">
  <div class="container__inner container__inner--event">
    <div class="event-content__testimonial">
      <div class="event-content__testimonial--img-container">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/event/kc_mccleary.png" alt="KC McKleary"/>
      </div>
      <div class="event-content__testimonial--text">
        <p class="event-content__testimonial--text-quote"><?php _e("event.quote.kccleary", 'wp-next-landing-page'); ?></p>
        <p class="event-content__testimonial--text-sign">― K.C. Cleary / Fifth Wall (Partner)</p>
      </div>
    </div>
    <div class="event-content__testimonial">
      <div class="event-content__testimonial--img-container">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/event/curren_mckay.png" alt="Curren Mckay"/>
      </div>
      <div class="event-content__testimonial--text">
        <p class="event-content__testimonial--text-quote"><?php _e("event.quote.currenmcckay", 'wp-next-landing-page'); ?></p>
        <p class="event-content__testimonial--text-sign">― Curren McKay / AskPorter (CCO)</p>
      </div>
    </div>
    <div class="event-content__testimonial">
      <div class="event-content__testimonial--img-container">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/event/andrea_jang.png" alt="Andrea Jang"/>
      </div>
      <div class="event-content__testimonial--text">
        <p class="event-content__testimonial--text-quote"><?php _e("event.quote.andreajang", 'wp-next-landing-page'); ?></p>
        <p class="event-content__testimonial--text-sign">― Andrea Jang / JJL Spark (Growth Lead)</p>
      </div>
    </div>
  </div>
</section>
<section class="container event-content event-content__photos">
  <div class="container__inner container__inner--event">
    <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/event/<?php _e("event.photos", 'wp-next-landing-page'); ?>.jpg" alt="event photos">
  </div>
</section>
<section class="page-name">
  <div class="page-name__inner page-name__inner--event">
    <h2 class="event-content__title">
    <?php _e("event.faq.title", 'wp-next-landing-page'); ?>
    </h2>
  </div>
</section>
<section class="container event-content event-content__faq">
  <div class="container__inner container__inner--event">
    <?php _e("event.faq.content", 'wp-next-landing-page'); ?>
  </div>
</section>
<section class="page-name" id="event-contact-form">
  <div class="page-name__inner page-name__inner--event">
    <h2 class="event-content__title">
      <?php if ($current_lang == "sc") { ?>
      留下您的資料
      <?php } elseif ($current_lang == "tc") { ?>
      留下您的資料
      <?php } elseif ($current_lang == "ja") { ?>
      お問い合わせ
      <?php } else { ?>
      Contact
      <?php } ?>   
    </h2>
  </div>
</section>
<section class="container event-content event-content__faq">
  <div class="container__inner form-section">
    <p class="event-contact-form-note">
      <?php if ($current_lang == "sc") { ?>
      
      <?php } elseif ($current_lang == "tc") { ?>
      
      <?php } elseif ($current_lang == "ja") { ?>
      料金などの詳細については、下記問い合わせフォームからお問い合わせください。<br>
      また、参加を希望の方には、メールにて申込書をお送りいたします。  
      <?php } else { ?>
      
      <?php } ?>   
    </p>
    <?php echo do_shortcode( '[contact-form-7 id="39677" title="Contact Form NYC Event 2022"]' ); ?>
  </div>
</section>
<!-- <section class="container event-content customer-success__form form-section--salesforce form-section--salesforce-event">
  <div class="container__inner">
    <script>
      function check(){
        var a=document.search_form.q.value;
        if(a==""){
          return false;
        }else if(!a.match(/\S/g)){
          return false;
        }
      }
    </script>
    <p class="event-contact-form-note">
      料金などの詳細については、下記問い合わせフォームからお問い合わせください。<br>
      また、参加を希望の方には、メールにて申込書をお送りいたします。
    </p>
    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
    <form action="https://p.wealth-park.com/l/884073/2021-09-20/78zs8" method="post">

    <input type=hidden name="oid" value="00D2v000001XqKf">
    <input type=hidden name="retURL" value="https://wealth-park.com/ja/business-contact-completed/">

    <div class="form-block">
      <div class="form-block__item-name">
        <span>必須</span>
        <label for="last_name">姓</label>
      </div>
      <div class="form-block__item">
        <input id="last_name" maxlength="40" name="last_name" size="20" type="text" pattern=".*\S+.*" placeholder="姓" required/>
      </div>
    </div>
    <div class="form-block">
      <div class="form-block__item-name">
        <span>必須</span>
        <label for="first_name">名</label>
      </div>
      <div class="form-block__item">
        <input id="first_name" maxlength="40" name="first_name" size="20" type="text" pattern=".*\S+.*" required/>
      </div>
    </div>
    <div class="form-block">
      <div class="form-block__item-name">
        <span>必須</span>
        <label for="company">貴社名</label>
      </div>
      <div class="form-block__item">
        <input id="company" maxlength="40" name="company" size="20" type="text" pattern=".*\S+.*" placeholder="会社名を入力してください" required/>
      </div>
    </div>
    <div class="form-block">
      <div class="form-block__item-name">
        <span>必須</span>
        <label for="email">Eメール</label>
      </div>
      <div class="form-block__item">
        <input id="email" maxlength="80" name="email" size="20" type="email" pattern=".+\.[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]" placeholder="xxx@wealth-park.com" required/>
      </div>
    </div>
    <div class="form-block">
      <div class="form-block__item-name">
        <label for="phone">お電話番号</label>
      </div>
      <div class="form-block__item">
        <input id="phone" maxlength="12" name="phone" size="20" type="tel" pattern="[\d\-]*" placeholder="090-1234-1234"/>
      </div>
    </div>

    <div class="form-block">
      <div class="form-block__item-name">
        <label>お問合わせ内容</label>
      </div>
      <div class="form-block__item">
        <textarea id="inquiry_content" name="inquiry_content" rows="25" type="text" wrap="soft" pattern=".*\S+.*" placeholder="お問い合わせ内容"></textarea>
      </div>
    </div>
    <div class="form-block form-block__agree">
      <p>
        <a href="#">利用規約</a>
        <span>/</span>
        <a href="#">プライバシーポリシー</a>
        に同意の上でお進みください。
      </p>
    </div>
    <div class="form-block event-content event-content__button">
      <div class="container__inner container__inner--event">
        <div class="button--blue">
          <input class="submit" type="submit" name="submit" value="送信する">
        </div>
      </div>
    </div>
    </form>
  </div>
</section> -->



<?php _e("corporate.panel-banners", 'wp-next-landing-page'); ?>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-app.php" ?>
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
</body>
</html>
