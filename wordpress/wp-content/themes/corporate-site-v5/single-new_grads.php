<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Next_Landing_Page
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>
<meta charset="<?php bloginfo('charset'); ?>">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
<meta name="apple-itunes-app" content="app-id=1068127268">
<title><?php echo the_title() ?> - WealthPark</title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc" />
<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/manifest.json?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/new-grads.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/corporate/ogp_image_wp-careers_20200721.png">
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<div id="new-grads" class="theme--<?= get_field('theme'); ?>">
  <section class="new-grads-hero-bg">
    <div class="top-triangle-corner top-triangle-corner--inner"></div>
  </section>
  <section class="section-naname">
    <div class="container">
      <div class="container-inner container-inner--reset naname-3">
        <div class="diagonal-slide diagonal-slide--down diagonal-slide--down-inner-top">
          <div class="diagonal-slide-wrap"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-back">
    <a href="<?= home_url()?>/career/new-graduates/" class="back-to-newgrads">
      <span>2023 Recruiting Site <br class="hidden-md">Top</span>
      <img src="<?= get_template_directory_uri()?>/img/corporate/new_grads/arrow-back-min.png" width="22" height="22" alt="Back to 2023 Recruiting Site Top">
    </a>
  </section>
  <section class="section-stories-title">
    <div class="container">
      <div class="container-inner">
        <h2 class="section__heading section__heading--small section__heading--main">
          <span>Stories</span>
        </h2>
      </div>
    </div>
  </section>
  <section class="section-profile">
    <div class="container">
      <div class="container-inner container-inner--reset">
        <div class="profile">
          <div class="profile__text">
            <div class="profile__joined">
              <p><?= get_field('year_and_dept'); ?></p>
              <span><?= get_field('name'); ?></span>
            </div>
            <div class="profile__quote">
              <p><?= get_field('profile_quote'); ?></p>
            </div>
            <h3 class="profile__heading">Profile</h3>
            <p class="profile_text">
              <?= get_field('profile_text'); ?>
            </p>
          </div>
          <div class="profile__image">
            <div class="profile__image-diamond-cont">
              <div class="profile__image-diamond">
                <div class="profile__image-diamond-content">
                  <img src="<?= get_field('profile_image'); ?>" alt="<?= get_field('name'); ?>">
                </div>
              </div>
              <div class="profile__image-diamond-back"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-naname section-naname--sp">
    <div class="container">
      <div class="container-inner container-inner--reset naname-4">
        <div class="diagonal-slide diagonal-slide--up">
          <div class="diagonal-slide-wrap"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="qa">
    <div class="container">
      <div class="container-inner container-inner--narrow container-inner--pt-wide">
        <div class="qa-top">
          <div class="qa-top__image qa-top__image--left">
            <img src="<?= get_field('profile_image_2'); ?>" alt="<?= get_field('name'); ?>">
          </div>
          <div class="qa-top__text">
            <div class="qa-top__text-block">
              <div class="gradient">
                <h3>
                  <span>Q1.Why did you decide to join WealthPark?</span>
                  入社理由は？
                </h3>
              </div>
              <p><?= get_field('question_1_answer'); ?></p>
            </div>
            <div class="qa-top__text-block">
              <div class="gradient">
                <h3>
                  <span>Q2.What's your job?</span>
                  仕事内容を教えてください
                </h3>
              </div>
              <p><?= get_field('question_2_answer'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-naname section-naname--sp">
    <div class="container">
      <div class="container-inner container-inner--reset naname-5">
        <div class="diagonal-slide diagonal-slide--up">
          <div class="diagonal-slide-wrap"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="qa">
    <div class="container">
      <div class="container-inner container-inner--narrow">
        <div class="qa-top qa-top--reverse">
          <div class="qa-top__image qa-top__image--right">
            <div>
              <img src="<?= get_field('profile_image_3'); ?>" alt="<?= get_field('name'); ?>">
              <small class="caption"><?= get_field('caption'); ?></small>
            </div>
          </div>
          <div class="qa-top__text">
            <div class="qa-top__text-block">
              <div class="gradient">
                <h3>
                  <span>Q3.What do you find rewarding?</span>
                  やりがいは何ですか？
                </h3>
              </div>
              <p><?= get_field('question_3_answer'); ?></p>
            </div>
            <div class="qa-top__text-block">
              <div class="gradient">
                <h3>
                  <span>Q4.What your favorite point of WealthPark</span>
                  WealthParkの好きなところは？
                </h3>
              </div>
              <p><?= get_field('question_4_answer'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-image-block section-image-block--single">
    <div class="container">
      <img src="<?= get_field('profile_image_block'); ?>" width="100%" alt="<?= get_field('name'); ?>">
    </div>
  </section>
  <section class="qa">
    <div class="container">
      <div class="container-inner container-inner--narrow container-inner--narrow--bottom reset-pt-md">
        <div class="qa-bottom">
          <div class="qa-bottom__text">
            <div class="qa-top__text-block">
              <div class="gradient">
                <h3>
                  <span>Q5. What do you want to challenge at WealthPark</span>
                  今後挑戦したいことは？
                </h3>
              </div>
              <p><?= get_field('question_5_answer'); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-schedule">
    <div class="container">
      <div class="container-inner container-inner--narrow reset-pt-md">
        <div class="schedule">
          <div class="schedule__heading">
            <h2>
              <span>One Day Schedule</span>
              ある1日のスケジュール 
              <small><?= get_field('one_day_schedule_title'); ?></small>
            </h2>
          </div>
          <div class="schedule__content">
            <div class="schedule__image">
              <ul>
                <li>
                  <img src="<?= get_field('one_day_schedule_image_1'); ?>" width="100%" alt="<?= get_field('name'); ?>">
                </li>
                <li>
                  <img src="<?= get_field('one_day_schedule_image_2'); ?>" width="100%" alt="<?= get_field('name'); ?>">
                </li>
                <li>
                  <img src="<?= get_field('one_day_schedule_image_3'); ?>" width="100%" alt="<?= get_field('name'); ?>">
                </li>
              </ul>
            </div>
            <div class="schedule__timeline">
              <!-- <ul>
                <li>
                  <div class="schedule__time">
                    06:00
                  </div>
                  <div class="schedule__activity">
                    <div class="schedule__activity--title">
                      起床
                    </div>
                    <div class="schedule__activity--description">
                      朝食を取り、コーヒーを飲み、ストレッチをして身体を起こします。
                    </div>
                  </div>
                </li>
                <li>
                  <div class="schedule__time">
                    08:00
                  </div>
                  <div class="schedule__activity">
                    <div class="schedule__activity--title">
                      ジム
                    </div>
                    <div class="schedule__activity--description">
                      近所のジムで1時間ほど、ランニングします。
                    </div>
                  </div>
                </li>
                <li>
                  <div class="schedule__time">
                    10:00
                  </div>
                  <div class="schedule__activity">
                    <div class="schedule__activity--title">
                      始業
                    </div>
                    <div class="schedule__activity--description">
                      フレックス制度を使っていつもより1時間遅めの始業。
                    </div>
                  </div>
                </li>
                <li>
                  <div class="schedule__time">
                    11:00
                  </div>
                  <div class="schedule__activity">
                    <div class="schedule__activity--title">
                      オンラインMTG
                    </div>
                    <div class="schedule__activity--description">
                      海外の仕入先への支払処理、為替に関する業務、経理伝票作成を行います。
                    </div>
                  </div>
                </li>
                <li>
                  <div class="schedule__time">
                    12:00
                  </div>
                  <div class="schedule__activity">
                    <div class="schedule__activity--title">
                      昼食
                    </div>
                    <div class="schedule__activity--description">
                      週に3日はリモートワークのため、自宅で簡単なお昼ご飯を作ります。出社の時は、社内の食堂で先輩と一緒にランチ。
                    </div>
                  </div>
                </li>
                <li>
                  <div class="schedule__time">
                    16:00
                  </div>
                  <div class="schedule__activity">
                    <div class="schedule__activity--title">
                      資料作成
                    </div>
                    <div class="schedule__activity--description">
                      貿易取引に関する各種残高管理の資料作成や、海外駐在員事務所スタッフに英文での問合せ。
                    </div>
                  </div>
                </li>
                <li>
                  <div class="schedule__time">
                    17:00
                  </div>
                  <div class="schedule__activity">
                    <div class="schedule__activity--title">
                      業務確認
                    </div>
                    <div class="schedule__activity--description">
                      終業に向けて、当日中にすべきことや、翌日行うことを整理します。
                    </div>
                  </div>
                </li>
                <li>
                  <div class="schedule__time">
                    18:00
                  </div>
                  <div class="schedule__activity">
                    <div class="schedule__activity--title">
                      退社
                    </div>
                    <div class="schedule__activity--description">
                      帰宅し、夕食後はジムに行ったり、映画鑑賞を行います。
                    </div>
                  </div>
                </li>
              </ul> -->
              <ul>
                <?= get_field('one_day_schedule'); ?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- STORIES -->
  <?php include "template-parts/new-grads-stories.php" ?>

  <!-- ENTRIES -->
  <?php include "template-parts/new-grads-entry.php" ?>

  <section>
    <div class="container">
      <div class="container-inner container-inner--reset">
        <div>
          <a href="<?= home_url()?>/career/new-graduates/" class="back-to-newgrads-bottom">
            <img src="<?= get_template_directory_uri()?>/img/corporate/new_grads/arrow-back-min.png" width="25" height="25" alt="Back to 2023 Recruiting Site Top">
            Recruiting Site Topに戻る 
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <!-- CAREERS SNS BANNERS (podcasts, instagram, etc...) -->
  <?php include "template-parts/careers-sns-banner.php"?>

</div>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>

<script>
  

  // Show Diagonal Slides on Scroll

  
  var element_position3 = $('.naname-3').offset().top;
  var element_position4 = $('.naname-4').offset().top;
  var element_position5 = $('.naname-5').offset().top;
  
  $(window).on('scroll', function() {
    
    var y_scroll_pos = window.pageYOffset;
    var scroll_pos_test3 = element_position3;
    var scroll_pos_test4 = element_position4;
    var scroll_pos_test5 = element_position5;
    
    if(y_scroll_pos > scroll_pos_test3 - 70) {
      if(!$('.naname-3 .diagonal-slide').hasClass('is-animated')) {
        $('.naname-3 .diagonal-slide').addClass('is-animated');
      }
    }
    if(y_scroll_pos > scroll_pos_test4 - 200) {
      if(!$('.naname-4 .diagonal-slide').hasClass('is-animated')) {
        $('.naname-4 .diagonal-slide').addClass('is-animated');
      }
    }
    if(y_scroll_pos > scroll_pos_test5 - 300) {
      if(!$('.naname-5 .diagonal-slide').hasClass('is-animated')) {
        $('.naname-5 .diagonal-slide').addClass('is-animated');
      }
    }
  });

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
  function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
  }
</script>
</body>
</html>