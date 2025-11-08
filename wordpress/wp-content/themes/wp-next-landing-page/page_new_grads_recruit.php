<?php
/*
Template Name: Careers New Graduates Recruiting Site
*/
$_ = function ($str) {
    return $str;
};
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<title><?php echo the_title() ?></title>
<meta name="description" content="<?php _e("corporate.meta-description.careers", 'wp-next-landing-page'); ?>">
<meta property="og:title" content="<?php echo the_title() ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://wealth-park.com/career/new-graduates/" />
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/corporate/careers/ogp-image_careers-top.jpg">
<meta property="og:site_name" content="WealthPark Corporate" />
<meta property="og:description" content="<?php _e("corporate.meta-description.careers", 'wp-next-landing-page'); ?>" />
<meta name="twitter:card" content="summary_large_image" />
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/new-grads.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja/corporate" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en/corporate" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc/corporate" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc/corporate" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc/corporate" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc/corporate" />
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<div id="new-grads">
  <section class="new-grads-hero-bg">
    <div class="top-triangle-corner"></div>
    <div class="new-grads-hero-bg--container">  
      <div class="new-grads-hero-bg--top-right">
        <div class="float">
          <img src="<?= get_template_directory_uri()?>/img/corporate/new_grads/abstract_1-min.jpg" class="rotate rotating-object-1" alt="Abstract background image">
        </div>
      </div>
    </div>
  </section>
  <section class="new-grads-hero-section">
    <div class="container">
      <div class="container-inner container-inner__hero">
        <div class="new-grads-hero">
          <div class="new-grads-hero__text">
            <h1 class="new-grads-hero__text--title">
              <span>WealthPark Group<br class="hidden-lg"> Recruiting Site<br>
              New Graduates 2025</span>
            </h1>
            <img src="<?= get_template_directory_uri()?>/img/corporate/new_grads/new_grads_hero_image-min.png" class="hero-image" alt="New Grads new-grads-hero Image">
            <h2 class="new-grads-hero__text--heading">
              全ての人に、<br class="hidden-sp">
              機会の平等と<br>
              可能性をもたらす。
            </h2>
            <h3 class="new-grads-hero__text--tagline">
              We want to provide "equal opportunities" <br>
              in an unequal world.
            </h3>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-scroll">
    <div class="scroll">
      <a href="#scroll-to">
        <span>Scroll</span>
        <img src="<?= get_template_directory_uri()?>/img/corporate/new_grads/scroll.svg" class="" alt="Scroll Down">
      </a>
    </div>
  </section>
  <section class="section-naname">
    <div class="container">
      <div class="container-inner container-inner--reset naname-1">
        <div class="diagonal-slide diagonal-slide--up">
          <div class="diagonal-slide-wrap"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-president">
    <div class="container">
      <div class="container-inner container-inner__message">
        <div class="president">
          <h2 class="section__heading section__heading--president" id="scroll-to">
            <span>Message</span>
          </h2>
          <div class="president_image_text">
            <div class="president__image">
              <div class="president__image-diamond">
                <div class="president__image-diamond-content">
                  <img src="<?= get_template_directory_uri()?>/img/corporate/new_grads/Ryuta_Kawada-min.jpg" alt="Ryuta Kawada">
                  <p>
                    WealthPark CEO<br>
                    <span>川田隆太</span><br>
                    Ryuta Kawada<br>
                  </p>
                </div>
              </div>
            </div>
            <div class="president__text">
              <div class="president__text-toggle-lang">
                <button class="active toggle-jp">JP</button>
                <button class="toggle-en">EN</button>
              </div>
              <div class="president__text--jp">
                <div class="president__text-container">
                  <h3>平等な世界を創る</h3>
                  <p>平等とは何か。</p>
                  <p>世界のもっとも豊かな1%の人が、世界全体の富の約33%を持っています。</p>
                  <p>生まれた国、民族的背景、育った環境、学歴、ジェンダー... <br>
                  それぞれの人が持つ多種多様な背景には、あらゆる違いがあり、不平等がある世の中です。</p>
                  <p>そんな理不尽な世の中で、誰しもが平等に「資産」を作ることができたなら。 資産を作る機会を、全ての人が享受することができたなら。 WealthParkは、会社・サービスという形で「機会の平等」をもたらしたいと考えます。</p>
                  <p>なぜ、資産に光を当てているのか。</p>
                  <div class="show-me">
                    <p>それは「資産」こそが衣食住、それらを重ねてきた個々人の生き様の結果と過程そのものでもあり、本当の意味で、全ての人に機会の平等と可能性をもたらすものでないといけないと考えているからに他なりません。</p>
                    <p>WealthParkでは、あなたのありたい姿や、成し遂げたいことを実現するための 「機会の平等」を提供します。 あなた自身が、自分の富を生み出す源泉であり、最大の資産です。 自分のキャリアは自分で選択する、選択したことに責任を持つ、ということを 大事にしてほしいなと思います。</p>
                    <p>時間だけが、誰しも平等に与えられています。 与えられた時間を機会として捉えてどのように過ごし、チャレンジをし続けられるのか。 一緒にチャレンジしていきましょう。</p>
                  </div>
                </div>
              </div>
              <div class="president__text--en" style="display: none">
                <div class="president__text-container">
                  <h3>"The world of equal opportunities"</h3>
                  <p>The fact is that we live in a world where over 33% of the world's wealth is granted to 1% of the population. </p>
                  <p>Another veracity is that every day we learn, we recognize, and we are conscious of the disproportions around us. Our upbringing, ethnicity, and gender identity, among many others, shape us to become who we are and what we represent today. </p>
                  <p>Inequality lives within us and we continuously try to negate biases, and discrimination and make an effort to persevere this distortion. </p>                
                  <p>While navigating this ever-changing planet, we try to discover a better way to unite and recover integrity. </p>
                  <div class="show-me">
                    <p>Despite many perplexities, one way to reclaim this is through understanding that we live in a reality that provides us with equal capital investment opportunities. In other words, we can manage and utilize our funds in a fair, beneficial, and satisfying way. </p>
                    <p>The truth is that you are your own greatest asset and the source of wealth, and it is your duty to be in charge of building your destiny. Let's remember that only time is equal for everyone. How will you manage your time to reach your highest potential? Let's figure it out together, at WealthPark.</p>
                  </div>
                </div>
              </div>
              <div>
                <button class="toggle toggle--read-more">
                  Read More
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- STORIES -->
  <?php # include "template-parts/new-grads-stories.php" ?>
  <section class="section-naname">
    <div class="container">
      <div class="container-inner container-inner--reset naname-3">
        <div class="diagonal-slide diagonal-slide--down">
          <div class="diagonal-slide-wrap"></div>
        </div>
      </div>
    </div>
  </section>
  <section class="section-speakerdeck">
    <div class="container">
      <div class="container-inner">
        <!-- <div class="speakerdeck">
          <h2 class="section__heading">
            <span>Our Service</span>
          </h2>
          <script async class="speakerdeck-embed" data-id="4f93ef2d2a224dfb89d2c4a08b916dee" data-ratio="1.77777777777778" src="//speakerdeck.com/assets/embed.js"></script>
        </div> -->
        <div class="speakerdeck">
          <h2 class="section__heading">
            <span>Culture</span>
          </h2>
          <script defer class="speakerdeck-embed" data-id="abc78f3874634e2ab84ac7cbfc681aa7" data-ratio="1.77777777777778" src="//speakerdeck.com/assets/embed.js"></script>
        </div>  
      </div>
    </div>
  </section>
  <!-- <section class="section-naname">
    <div class="container">
      <div class="container-inner container-inner--reset naname-2">
        <div class="diagonal-slide diagonal-slide--up">
          <div class="diagonal-slide-wrap"></div>
        </div>
      </div>
    </div>
  </section> -->
  <!-- ENTRIES -->
  <?php include "template-parts/new-grads-entry.php" ?>
  <section class="bottom-bg">
    <div class="new-grads-bg--bottom-left">
      <div class="float">
        <img src="<?= get_template_directory_uri()?>/img/corporate/new_grads/abstract_1-min.jpg" class="rotate rotating-object-1" alt="Abstract background image">
      </div>
    </div>
  </section>
  <!-- CAREERS SNS BANNERS (podcasts, instagram, etc...) -->
  <?php include "template-parts/careers-sns-banner.php"?>

  <!-- POP UP BANNER -->
  <div <?= get_field('pop_up_show') ? !1 : "style='display: none'"; ?>>
    <?php include "template-parts/new-grads-popup.php"?>
  </div>

</div>

<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>

<script>
  // Toggle President's Message Language
  $('.president__text-toggle-lang').on('click', 'button', function(e){
    e.preventDefault();
    if(!$(this).hasClass('active')){
      $(this).addClass('active');
      $(this).siblings().removeClass('active');
      if($(this).hasClass('toggle-jp')) {
        $('.president__text--jp').css({'display': 'block'})
        $('.president__text--en').css({'display': 'none'})
      } else {
        $('.president__text--jp').css({'display': 'none'})
        $('.president__text--en').css({'display': 'block'})
      }
    }
  })

  // Toggle Read More button
  // PC 
  $(".president__text").on('click', '.toggle', function(e){
    e.preventDefault();
    if(!$(this).hasClass('toggle--read-more')){
      $(this).addClass('toggle--read-more')
      $(this).removeClass('toggle--read-less')
      $(this).text('Read More')
      $('.show-me').slideUp();
    } else {
      $(this).removeClass('toggle--read-more')
      $(this).addClass('toggle--read-less')
      $(this).text('Close')
      $('.show-me').slideDown();
    }
  })

  // Show Diagonal Slides on Scroll

  var element_position1 = $('.naname-1').offset().top;
  // var element_position2 = $('.naname-2').offset().top;
  var element_position3 = $('.naname-3').offset().top;
  
  $(window).on('scroll', function() {
    
    var y_scroll_pos = window.pageYOffset;

    var scroll_pos_test1 = element_position1;
    // var scroll_pos_test2 = element_position2;
    var scroll_pos_test3 = element_position3;
    if(y_scroll_pos > scroll_pos_test1 - 300) {
      if(!$('.naname-1 .diagonal-slide').hasClass('is-animated')) {
        $('.naname-1 .diagonal-slide').addClass('is-animated');
      }
    }
    // if(y_scroll_pos > scroll_pos_test2 + 150) {
    //   if(!$('.naname-2 .diagonal-slide').hasClass('is-animated')) {
    //     $('.naname-2 .diagonal-slide').addClass('is-animated');
    //   }
    // }
    if(y_scroll_pos > scroll_pos_test3 - 500) {
      if(!$('.naname-3 .diagonal-slide').hasClass('is-animated')) {
        $('.naname-3 .diagonal-slide').addClass('is-animated');
      }
    }
  });

  $(function () {
      $('a[href^="#"]').click(function() {
        console.log("test");
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
