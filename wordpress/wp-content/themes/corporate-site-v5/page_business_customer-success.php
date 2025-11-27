<?php
/*
Template Name: Service Page - Business - customer-success
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
<title>導入・活用支援サービス | WealthParkビジネス</title>
<meta name="description" content="導入・活用支援サービス。不動産オーナーと管理会社をつなぐ、デジタルプラットフォーム「WealthParkビジネス」">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/customer_success_style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="https://use.typekit.net/vlj5keq.css">
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
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
<?php include_once("ga_tracking.php") ?>
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php
  $topPage = "navigation--common--top";
  include "header-common.php"
?>
<main class="customer-success-page">
  <section class="cs-hero">
    <div class="cs-hero_image">
      <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/hero-image-min.jpeg" alt="導入支援･サポートについて">
    </div>
    <div class="cs-hero_text">
      <div class="cs-hero_text_container">
        <h1>導入支援･サポートについて</h1>
        <h2>WealthParkの強みは、<br class="hidden-mobile">
          カスタマーサクセスにあると言っても過言ではありません。<br>
          これまでに150社以上の管理会社さまの業務をDX成功に導いた専任チームが、<br class="hidden-mobile">
          導入設計から運用支援まで幅広くサポートいたします。</h2>
      </div>
    </div>
  </section>
  <section class="cs-section">
    <div class="container">
      <div class="container-inner">
        <div class="cs-section__heading">
          <h2>
            <span>＼よくある失敗／</span><br>
            なぜ“導入支援”が必要なのか？
          </h2>
        </div>
        <p>WealthParkで管理業務をDXして、オーナーさまにより良い体験をしていただくには「管理会社さまの理解」と「オーナーさまへの利用促進」が必要不可欠です。しかし、多くの管理会社さまでは下記のような課題に直面することが一般的です。ただツールを導入するだけだと、こうなってしまうかもしれません…。</p>
        <div class="bubble-block bubble-block--left bubble-block--top">
          <div class="bubble-block__img">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/common-mistake-1-min.png" width="208" height="208" alt="common mistake 1">
          </div>
          <div class="bubble-block__text bubble-block__text--left">
            <div class="bubble-block__text__content">
              <ul>
                <li>ツール導入半年後…全オーナーの5％しか使ってくれていない…</li>
                <li>スタッフもオーナーさんへの説明方法がわかっていない…</li>
                <li>結局紙の運用と併用しているのでDX出来ていない…</li>
                <li>ウチのオーナーさんが本当にアプリを使ってくれるのか不安…</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="bubble-block bubble-block--right bubble-block--bottom">
          <div class="bubble-block__img">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/common-mistake-2-min.png" width="208" height="208" alt="common mistake 2">
          </div>
          <div class="bubble-block__text bubble-block__text--right">
            <div class="bubble-block__text__content">
              <ul>
                <li>アプリの利用方法がわからない</li>
                <li>アプリによりどう便利になるのかイメージできない</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cs-section cs-section--blue">
    <div class="container">
      <div class="container-inner">
        <div class="cs-section__heading">
          <h2>
            <span>＼そうならないために／</span><br>
            WealthParkは<br class="visible-mobile">“徹底的にご支援”します！
          </h2>
        </div>
        <div class="thorough-support">
          <div class="thorough-support__item">
            <a href="#step-1" class="thorough-support__item__link">
              <div class="thorough-support__item__step">
                Step
                <span>01</span>
              </div>
              <div class="thorough-support__item__name">
                システム導入
              </div>
              <div class="thorough-support__item__caret">
                <img src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/blue-caret-down.svg" width="15" height="15" alt="caret down">
              </div>
            </a>
          </div>
          <div class="thorough-support__item">
            <a href="#step-2" class="thorough-support__item__link">
              <div class="thorough-support__item__step">
                Step
                <span>02</span>
              </div>
              <div class="thorough-support__item__name">
                管理会社さま・オーナーさま向け導入サポート
              </div>
              <div class="thorough-support__item__caret">
                <img src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/blue-caret-down.svg" width="15" height="15" alt="caret down">
              </div>
            </a>
          </div>
          <div class="thorough-support__item">
            <a href="#step-3" class="thorough-support__item__link">
              <div class="thorough-support__item__step">
                Step
                <span>03</span>
              </div>
              <div class="thorough-support__item__name">
                継続活用支援
              </div>
              <div class="thorough-support__item__caret">
                <img src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/blue-caret-down.svg" width="15" height="15" alt="caret down">
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cs-section">
    <div class="container">
      <div class="container-inner reset-pb">
        <div class="cs-section__heading cs-section__heading--center pb-md">
          <div class="thorough-support__item__step" id="step-1">
            Step
            <span>01</span>
          </div>
        </div>
        <div class="cs-section__heading">
          <h2 class="pb-xl">システム導入</h2>
        </div>
        <div class="step-block">
          <div class="step-block__image">
            <img src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/step-1-img1-min.jpg" alt="">
          </div>
          <div class="step-block__text">
            <h3 class="mb-sm">導入目標設定・計画策定</h3>
            <p>まずは導入段階で、導入の目的と業務フローをきちんとヒアリングさせていただきます。<br>
              KGI・KPIの設定から、オーナーさまへの報告や提案フローのBefore／Afterまで設計を行います。</p>
          </div>
        </div>
        <div class="mb-xl">
          <p class="customer-success__stepDocument grey-7A">▼資料: <br class="visible-mobile">成果定義, 業務フローヒアリング, 運用支援体制</p>
          <ul class="customer-success__stepModals reset-m">
            <li class="customer-success__stepModal">
              <a href="<?php echo get_template_directory_uri() ?>/business/img/customer_success/point_pic1-modal-min.jpg" alt="成果定義">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/point_pic1-min.jpg" alt="成果定義">
              </a>
            </li>
            <li class="customer-success__stepModal">
              <a href="<?php echo get_template_directory_uri() ?>/business/img/customer_success/point_pic2-modal-min.jpg" alt="運用支援体制">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/point_pic2-min.jpg" alt="運用支援体制">
              </a>
            </li>
            <li class="customer-success__stepModal">
              <a href="<?php echo get_template_directory_uri() ?>/business/img/customer_success/point_pic3-modal-min.jpg" alt="業務フローヒアリング">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/point_pic3-min.jpg" alt="業務フローヒアリング">
              </a>
            </li>
          </ul>
        </div>
        <div class="step-block step-block--reverse mb-xl">
          <div class="step-block__image">
            <img src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/customer-success_isp1.jpg" alt="image">
          </div>
          <div class="step-block__text">
            <h3 class="mb-sm">
              基幹システムとの連携支援
            </h3>
            <p>
              ほとんどの管理会社様が、導入時にご利用中の基幹システム（賃貸管理ソフト）とのデータ連携を行い、オーナー情報／物件情報／収支情報など必要な情報を連携しています。<br>
              WealthParkのカスタマーサクセスチームは、あらゆる賃貸管理システムとの連携実績があり、導入のサポートをしてまいりますので、お気軽にご相談ください。
            </p>
            <br>
            <h4>【豊富な連携実績】</h4>
            <p>i-SP, OBIC7, 賃貸革命, 賃貸名人, Future Vision, J-Rent, Kit-Fit, いえらぶCLOUD, ESいい物件One, Salesforceなど。<br>
              自社開発のシステムとも連携可能。
            </p>
          </div>
        </div>
        <div class="bg-bluegrey px-lg pt-lg pb-lg br-10 bg-bluegrey--point">
          <div class="step-block step-block--horizontal reset-m">
            <div class="step-block__content">
              <div class="step-block__text step-block__text--heading">
                <h3 class="mb-md">
                  <span>ポイント</span><br class="visible-mobile">
                  賃貸管理システム「i-SP」との連携強化！API連携が可能に
                </h3>
              </div>
              <div class="step-block step-block--horizontal reset-m">
                <div class="step-block__text">
                  <p>i-SPをご利用の管理会社様は、APIを使ったデータ連携をご活用頂けます。物件情報、オーナー情報、収支情報などを自動でWealthParkビジネスへ連携させる事が可能となり、導入および活用が非常にスムーズになります。</p>
                </div>
                <div class="step-block__image">
                  <img src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/customer_success_isp2_pc.jpg" class="hidden-mobile" width="100%" alt="image">
                  <img src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/customer_success_isp2_sp.jpg" class="visible-mobile" width="100%" alt="image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cs-section">
    <div class="container">
      <div class="container-inner reset-pb">
        <div class="cs-section__heading cs-section__heading--center pb-md">
          <div class="thorough-support__item__step" id="step-2">
            Step
            <span>02</span>
          </div>
        </div>
        <div class="cs-section__heading">
          <h2 class="pb-xl">
            管理会社さま・オーナーさま向け<br>
            導入サポート
          </h2>
        </div>
        <div class="step-block">
          <div class="step-block__image">
            <img src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/step-2-img1-min.jpg" alt="">
          </div>
          <div class="step-block__text">
            <h3 class="mb-sm">管理会社ご担当者さま向け研修</h3>
            <p>WealthParkを実際に利用される管理会社さまのご担当者さま向けに、「新しい業務フローの説明」や「WealthParkビジネスの使い方」、「オーナーさまとのコミュニケーションのコツ」をレクチャーいたします。</p>
          </div>
        </div>
        <div class="mb-xl">
          <h3 class="mb-md">下記の記事や事例もぜひご覧ください。</h3>
          <ul class="customer-success__contentsList">
            <li>
              <a href="<?php echo home_url(); ?>/business/case-study/ichiwaproperty/">
                <dl>
                  <dt>
                    <p>
                      <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/article-sample-1-min.jpg" alt="image">
                    </p>
                    <p>「この会社だったら任せられる」カスタマーサクセス部門がオーナーコミュニケーションに果たす役割</p>
                  </dt>
                </dl>
              </a>
            </li>
            <li>
              <a href="<?php echo home_url(); ?>/tc/business/case-study/life-produce/">
                <dl>
                  <dt>
                    <p>
                      <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/article-sample-2-min.jpg" alt="image">
                    </p>
                    <p>「CSのサポート体制がなければ導入は難しかった」WealthParkとの連携で実現した社内浸透</p>
                  </dt>
                </dl>
              </a>
            </li>
            <li>
              <a href="<?php echo home_url(); ?>/ja/wealthpark-blog/50k-cs/">
                <dl>
                  <dt>
                    <p>
                      <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/article-sample-3-min.jpg" alt="image">
                    </p>
                    <p>「WealthPark」登録オーナー数5万人突破記念！ユーザーサクセスチーム座談会</p>
                  </dt>
                </dl>
              </a>
            </li>
          </ul>
        </div>
        <div class="step-block step-block--reverse mb-xl">
          <div class="step-block__image">
            <img src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/step-2-img2-min.jpg" alt="">
          </div>
          <div class="step-block__text">
            <h3 class="mb-sm">
              オーナーさま向けサポート
            </h3>
            <p class="mb-sm">
              シニア層のオーナー様にもWealthParkを活用していただくため、様々なサポートを用意しております。<br>
              多数のオーナー様向けにサポートした経験をベースに、オーナー様向けのセミナー・オーナー様向けの案内文書の作成・オーナー様向けのコールセンター（※）の開設サポートなどを行っております。
            </p>
            <small>※コールセンターは通常の初期費用には含まれない有償オプションです。</small>
          </div>
        </div>
        <div class="bg-bluegrey px-md pt-lg pb-lg mb-xl br-10">
          <div class="cs-section__heading">
            <h2 class="reset-pb">
              具体的なオーナー導入のご支援
            </h2>
          </div>
          <div>
            <ul class="owner-support__list">
              <li class="owner-support__modal">
                <a href="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support1-modal-min.png" alt="image">
                  <h3>HP告知・<br>ニュース配信</h3>
                  <div class="owner-support__img"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support1-min.png" alt="image"></div>
                </a>
              </li>
              <li class="owner-support__modal">
                <a href="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support2-modal-min.png" alt="image">
                  <h3>チラシ・案内通知</h3>
                  <div class="owner-support__img owner-support__img--vertical"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support2-min.png" alt="image"></div>
                </a>
              </li>
              <li class="owner-support__modal">
                <a href="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support3-modal-min.png" alt="image">
                  <h3>マニュアル</h3>
                  <div class="owner-support__img"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support3-min.png" alt="image"></div>
                </a>
              </li>
              <li class="owner-support__modal">
                <a href="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support4-modal-min.png" alt="image">
                  <h3>オーナー向け動画</h3>
                  <div class="owner-support__img"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support4-min.png" alt="image"></div>
                </a>
              </li>
              <li class="owner-support__modal">
                <a href="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support5-modal-min.png" alt="image">
                  <h3>コールセンター</h3>
                  <div class="owner-support__img"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support5-min.png" alt="image"></div>
                </a>
              </li>
              <li class="owner-support__modal">
                <a href="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support6-modal-min.png" alt="image">
                  <h3>オーナーセミナー</h3>
                  <div class="owner-support__img"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support6-min.png" alt="image"></div>
                </a>
              </li>
              <li class="owner-support__modal">
                <a href="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support7-modal-min.png" alt="image">
                  <h3>オーナーインタビュー</h3>
                  <div class="owner-support__img"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support7-min.png" alt="image"></div>
                </a>
              </li>
              <li class="owner-support__modal">
                <a href="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support8-modal-min.png" alt="image">
                  <h3>オーナー向け漫画</h3>
                  <div class="owner-support__img owner-support__img--vertical"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/owner-support8-min.png" alt="image"></div>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div>
          <h3 class="mb-md">下記の記事や事例もぜひご覧ください。</h3>
          <ul class="customer-success__contentsList">
            <li>
              <a href="<?php echo home_url(); ?>/wealthpark-blog/usersgroup_20220526_owner_introduction/">
                <dl>
                  <dt>
                    <p>
                      <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/article-sample-4-min.jpg" alt="image">
                    </p>
                    <p>半年で70％のオーナー様にログインしていただいた2社の取り組み紹介（WealthParkユーザー会レポート記事）</p>
                  </dt>
                </dl>
              </a>
            </li>
            <li>
              <a href="<?php echo home_url(); ?>/business/case-study/keio/">
                <dl>
                  <dt>
                    <p>
                      <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/article-sample-5-min.jpg" alt="image">
                    </p>
                    <p>「抵抗感は抱かれておりませんでした」オーナー様に気付かされた電子化の必要性</p>
                  </dt>
                </dl>
              </a>
            </li>
            <li>
              <a href="<?php echo home_url(); ?>/business/case-study/meiko/">
                <dl>
                  <dt>
                    <p>
                      <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/article-sample-6-min.jpg" alt="image">
                    </p>
                    <p>800名以上の導入に成功！明光トレーディングに聞く「導入を断られても諦めない極意」</p>
                  </dt>
                </dl>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <section class="cs-section">
    <div class="container">
      <div class="container-inner">
        <div class="cs-section__heading cs-section__heading--center pb-md">
          <div class="thorough-support__item__step" id="step-3">
            Step
            <span>03</span>
          </div>
        </div>
        <div class="cs-section__heading">
          <h2 class="pb-xl">継続活用支援</h2>
        </div>
        <div class="step-block reset-mb">
          <div class="step-block__image">
            <img src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/step-3-img1-min.jpg" alt="">
          </div>
          <div class="step-block__text">
            <h3 class="mb-sm">導入後の定期的な“活用”支援</h3>
            <p>
              導入後も、WealthParkをより良く“活用”するための支援を定期的に行います。<br>
              売買の提案や物件の広告など、収支報告だけでないWealthPark活用事例の共有などを行い、管理会社さまのビジネス成長させるためのご提案を行います。
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cs-section cs-section--blue">
    <div class="container">
      <div class="container-inner container-inner--wpxsm">
        <div class="cs-section__heading">
          <h2 class="reset-pb">
            だから結果が出るWealthPark 
          </h2>
        </div>
        <div class="bubble-block bubble-block--right bubble-block--top bubble-block--result">
          <div class="bubble-block__img bubble-block__img--result">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/results-1-min.png" width="370" height="370" alt="image">
          </div>
          <div class="bubble-block__text bubble-block__text--right bubble-block__text--white">
            <div class="bubble-block__text__content">
              <div>
                <h3>
                  <em class="color-blue">月100万円以上</em>の郵送コスト削減
                  作業人員の<em class="color-blue">半減</em>
                </h3>
                <p class="txt-right">デベロッパー系管理会社　K社さま</p>
              </div>
            </div>
          </div>
        </div>
        <div class="bubble-block bubble-block--left bubble-block--top bubble-block--result">
          <div class="bubble-block__img bubble-block__img--result">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/results-2-min.png" width="370" height="370" alt="image">
          </div>
          <div class="bubble-block__text bubble-block__text--left bubble-block__text--white">
            <div class="bubble-block__text__content">
              <div>
                <h3>オーナー導入率<em class="color-blue">70％</em>を達成</h3>
                <p class="txt-right">デベロッパー系管理会社　K社さま</p>
              </div>
            </div>
          </div>
        </div>
        <div class="bubble-block bubble-block--right bubble-block--top bubble-block--result">
          <div class="bubble-block__img bubble-block__img--result">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/results-3-min.png" width="370" height="370" alt="image">
          </div>
          <div class="bubble-block__text bubble-block__text--right bubble-block__text--white">
            <div class="bubble-block__text__content">
              <div>
                <h3>
                  利用オーナー様の約半数が<br>
                  <em class="color-blue">50代以上</em>
                </h3>
                <p>年齢別の属性では、50代以上のユーザーが49.9%を占めています。（40代26.4％、50代が25.7％、60代が17.9％、70代が4.9％、80代が1.4％）中高年以上の方々を中心に幅広い年代層にご利用いただいております。</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="cs-section">
    <div class="container">
      <div class="container-inner">
        <h3 class="mb-md">下記の記事や事例もぜひご覧ください。</h3>
        <ul class="customer-success__contentsList">
          <li>
            <a href="<?php echo home_url(); ?>/business/case-study/hirota/">
              <dl>
                <dt>
                  <p>
                    <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/article-sample-7-min.jpg" alt="image">
                  </p>
                  <p>45年以上オーナーと向き合い続ける北九州の不動産企業が考える「次世代を見据えた資産提案」のあり方</p>
                </dt>
              </dl>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url(); ?>/wealthpark-blog/20210325-seminar/">
              <dl>
                <dt>
                  <p>
                    <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/article-sample-8-min.jpg" alt="image">
                  </p>
                  <p>【イベントレポート】不動産業界DXのリアル : 送金明細・紙をなくすには？</p>
                </dt>
              </dl>
            </a>
          </li>
          <li>
            <a href="<?php echo home_url(); ?>/wealthpark-blog/eventreport_220425_fastory/">
              <dl>
                <dt>
                  <p>
                    <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/customer_success/article-sample-9-min.jpg" alt="image">
                  </p>
                  <p>【イベントレポート】徹底的なDXによるオーナー満足度UP！！ FASTORYのAI賃料査定機能活用術とは</p>
                </dt>
              </dl>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </section>


  <section class="cs-section bg-greyF5">
    <div class="customer-success__qaInner container-inner">
        <h3 class="customer-success__qaTit customer-success__sectionRead">導入時のよくある質問</h3>
        <dl class="customer-success__qaList">
          <dt>Q.上記に記載のない、基幹システムでも連携は可能ですか？</dt>
          <dd>A.上記に記載のない基幹システムについても、連携実績がございます。必要に応じて、ご契約前にデータ連携の可否を確認することも可能です。詳しくは、お問い合わせください。</dd>
        </dl>
        <dl class="customer-success__qaList">
          <dt>Q.自社開発のシステムでも、連携は可能ですか？</dt>
          <dd>A.データの出力ができれば、連携は可能です。システムのカスタマイズが必要な場合でも、システムベンダーとのコミュニケーションのサポート（一部、有償オプション）をすることも可能です。</dd>
        </dl>
        <dl class="customer-success__qaList">
          <dt>Q.オーナー様へWealthParkを説明するのが大変そうなのですが…</dt>
          <dd>A.オーナー様向けの説明資料や動画など、導入促進の素材を提供いたします。また、オーナー導入開始後、一定期間定例ミーティングを設け、ご担当者様の進捗確認や、導入時の疑問点や確認点をなくしていくサポートしております。既存業務が忙しく、オーナー導入にお時間を割くのが難しい場合、専用のコールセンターを設置して、オーナー導入のコミュニケーションを代行するサービス（有償オプション）もご用意しております。</dd>
        </dl>
        <dl class="customer-success__qaList">
          <dt>Q.オーナー様に外国人のオーナー様がいるのですが、対応可能ですか？</dt>
          <dd>A.WealthParkは、日本語、英語、中国語（繁体字・簡体字）の4言語に対応しております。オーナー様側で言語設定を切り替えることで、各言語でのご利用可能です。</dd>
        </dl>
        <dl class="customer-success__qaList">
          <dt>Q.オーナー様にご高齢の方が多いのですが、オーナー様に利用されますか？</dt>
          <dd>A.実際に、WealthParkをご利用いただいているオーナー様の約3割が60代のオーナー様です※。ご高齢のオーナー様が比較的多い、地場管理会社様の導入実績が多数ございます。また、管理解除防止策として、WealthParkをオーナー様のご子息・ご親族にご利用いただいている管理会社様もございます。<br>※当社調べ</dd>
        </dl>
        <dl class="customer-success__qaList">
          <dt>Q.社員のITリテラシーが低く、不安です。サポートはありますか？</dt>
          <dd>A.WealthParkのカスタマーサクセスチームがサポートいたします。導入時のトレーニングはもちろん、定期的なミーティングを設けて、システム利用上の課題をなくし、活用を推進する支援をいたします。</dd>
        </dl>
        <dl class="customer-success__qaList">
          <dt>Q.他社がどう活用しているかを知りたいのですが可能ですか？</dt>
          <dd>A.WealthParkでは、ユーザー会というコミュニティがあり、定期的に交流の場を設けています。WealthParkをご利用されている会社の実際の活用事例の共有、WealthParkのプロダクト・開発チームからの新機能の説明や製品フィードバックなど、ご契約中の管理会社様やWealthParkの情報交換・交流の場として活用されています。</dd>
        </dl>
    </div>
  </section>
  <?php include dirname(__FILE__)."/template-parts/business-cta-form.php" ?>
</main>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-business.php" ?>
</footer>
<script>
// magnificPopupの表示
$(function () {
  $('.customer-success__stepModal').magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {  //ギャラリーオプション
          // enabled: true
      }
  });
  $('.owner-support__modal').magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: {  //ギャラリーオプション
          // enabled: true
      }
  });
});
</script>

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

  $(function () {
    $('a[href^="#"]').click(function() {
      // スクロールの速度
      let speed = 800; // ミリ秒で記述
      let href = $(this).attr("href");
      let target = $(href == "#" || href == "" ? 'html' : href);
      let headerHeight = $('.menu__navbar').outerHeight(); //固定ヘッダーの高さ
      let position = target.offset().top - headerHeight; //ターゲットの座標からヘッダの高さ分引く
      $('body,html').animate({
        scrollTop: position
      }, speed, 'swing');
      return false;
    });
  });
</script>
<?php include "tag_hubspot_popup_001.php" ?>
<?php include "popup_banner_business.php" ?>
<!-- <?php include "tidio-chat-business.php" ?> -->
</body>
</html>
