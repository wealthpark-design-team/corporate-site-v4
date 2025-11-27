<?php
/*
Template Name: Careers Top Page Template
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
<title><?php _e("corporate.meta-title.careers", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("corporate.meta-description.careers", 'wp-next-landing-page'); ?>">
<meta property="og:title" content="<?php _e("corporate.meta-title.careers", 'wp-next-landing-page'); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://wealth-park.com/careers/" />
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/corporate/img/careers/ogp.png">
<meta property="og:site_name" content="WealthPark Corporate" />
<meta property="og:description" content="<?php _e("corporate.meta-description.careers", 'wp-next-landing-page'); ?>" />
<meta name="twitter:card" content="summary_large_image" />
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/careers.css?<?php echo date('Ymd-Hi'); ?>">
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

<?php include "template-parts/careers-url.php" ?>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<div id="careers-page">
  <section class="seminar-kpv-pr__hero section-block">
    <img loading='lazy' class="seminar-kpv-pr__hero--img" src="<?php echo get_template_directory_uri() ?>/img/app/careers_hero.png" />
    <div class="seminar-kpv-pr__hero--txt">
      <h1>Careers</h1>
    </div>
  </section>
  
  <section class="container career-profile section-block">
    <div class="container__inner career-profile__inner foc">
      <h2>
        今よりもっと <br class="visible-sp" />
        選択の自由がある人生を。
      </h2>
      <p>
        長い人生において「投資」を正しく扱えるか否かは、 <br class="visible-sp" />人生の豊かさや幸せ大きな影響を与えます。 <br><br class="visible-sp" />
        WealthParkは、すべての人に「投資」の機会と可能性を届けることを通じて、より良い世界を創りたいという想いで、展開する事業に挑戦しています。様々な挑戦と成長を続け、着実に前に進んでいますが、まだまだ道半ばです。<br><br class="visible-sp" />
        「選択の自由が当たり前の世界を創る」、壮大なビジョンに一緒に挑戦することで、あなたの人生の可能性と選択肢も豊かにしませんか。
      </p>
      </div>
  </section>



  <section class="page-title section-block section-block--mb-5">
    <div class="page-title__inner container__inner container__inner--careers">
      <h3 class="page-title__name page-title__name">
        WealthParkについて
      </h3>
    </div>
  </section>
  <section class="container career-profile section-block">
    <div class="container__inner career-profile__inner">
      <ul>
        <li>
          <script async class="speakerdeck-embed" data-id="4f93ef2d2a224dfb89d2c4a08b916dee" data-ratio="1.77777777777778" src="//speakerdeck.com/assets/embed.js"></script>
        </li>
      </ul>
    </div>
  </section>


  
  
  <div class="grey-bg">
    <section class="page-title section-block section-block--mb-5">
      <div class="page-title__inner container__inner container__inner--careers">
        <h3 class="page-title__name">
          <span>募集職種</span>
        </h3>
      </div>
    </section>
    <?php include "template-parts/careers-departments-tree.php"?>
    <?php include "template-parts/careers-current-recruiting.php"?>
  </div>

  <!-- ALL INTERVIEWS -->
  <section class="page-title section-block section-block--mb-5">
    <div class="page-title__inner container__inner container__inner--careers">
      <h3 class="page-title__name">
        <span>社員インタビュー</span>
      </h3>
    </div>
  </section>
  <section class="container section-block blog-articles">
    <div class="container__inner">
      <?php
        $tags = function ($tags, $class) {
        global $_;
        $array = array();
        foreach ($tags as $tag) {
          array_push(
            $array,
            "<li class='{$_($class)}-item'>
              <a class='{$_($class)}-link' href='{$_(get_term_link($tag->term_id))}'>{$_($tag->name)}</a>
            </li>"
                );
            }
            return implode("", $array);
          };
        $latest = new WP_Query(array(
            'post_type' => 'park',
            'posts_per_page' => 6,
            'post_status'	=> 'publish',
            'no_found_rows' => true,
            'tax_query' => array(
              array(
                'taxonomy' => 'park_category',
                'terms' => 160,
                'field' => 'id'
              )
            )
        ));
        if ($latest->have_posts()) {
            echo "<ul class='blog-articles__list'>";
            while ($latest->have_posts()) {
                $latest->the_post();
                $category = get_the_terms(get_the_ID(), "park_category");
                echo "
              <li class='blog-articles__item'>
                <a class='blog-articles__item-thumb' href='{$_(get_permalink())}'>
                  <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                </a>
                <div class='blog-articles__item-body'>
                  <p class='blog-articles__item-body--inner'>
                    {$_(get_the_title())}
                  </p>
                </div>
              </li>
              ";
            }
            echo "</ul>";
        }
        wp_reset_query();
      ?>
      <div class="text-right">
        <a href="<?= home_url() ?>/park_category/person/" class="black-link">すべてのインタビュー</a>
      </div>
    </div>
  </section>

  <section class="page-title section-block section-block--mb-5">
    <div class="page-title__inner">
      <h3 class="page-title__name">Founder & CEOからのメッセージ</h3>
    </div>
  </section>
  <section class="career-video section-block">
    <div class="career-video__inner">
      <div class="career-video__comments">
        <p class="message__title">WealthPark CEO Message</p>
        <h1 class="message__txt">CEO／ファウンダーである川田 隆太から、WealthParkへの参画をご検討されている皆様へのメッセージです。</h1>
      </div>
      <div class="image rellax reset-mb" data-rellax-speed="2" >
        <div class="career-video__youtube">
          <iframe src="https://www.youtube.com/embed/WcAtb8UlbsI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </section>
  
  <section class="page-title section-block section-block--mb-5">
    <div class="page-title__inner">
      <h3 class="page-title__name">Vision</h3>
    </div>
  </section>
  <section class="container section-block">
    <div class="container__inner container__inner--careers">
      <h4 class="container__inner--title">
        “Be Alternative” <br>
        選択の自由が当たり前の世界を創る
      </h4>
      <p class="container__inner--description">
        WealthParkは「オルタナティブ資産への投資機会をすべての人へ届ける」というミッションのもとに、オルタナティブ資産のプラットフォームをつくっています。
        テクノロジーを通じて、すべての人が平等に投資機会をもてる社会を実現し、オルタナティブ投資の民主化にチャレンジします。
      </p>
    </div>
  </section>

  <section class="container section-block career-vision">
    <div class="container__inner career-vision__inner">
        <p class="career-vision__img"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/career-alternative_pic1.jpg" alt="選択の自由が当たり前の世界を創る"></p>
    </div>
  </section>

  <section class="page-title section-block section-block--mb-5">
    <div class="page-title__inner">
      <h3 class="page-title__name">Mission</h3>
    </div>
  </section>

  <section class="container career-mission section-block">
    <div class="container__inner career-mission__inner"><?php _e("corporate.mission.description", 'wp-next-landing-page'); ?></div>
  </section>

  <section class="page-title section-block section-block--mb-5 font-helvetica">
    <div class="page-title__inner">
      <h3 class="page-title__name font-helvetica">Behavior Identity</h3>
    </div>
  </section>
  <section class="container font-helvetica">
    <div class="container__inner container__inner--careers">
      <dl class="career-identity__box">
        <dt class="career-identity__box-title">CUSTOMER CENTRIC</dt>
        <dd class="career-identity__box-item">
          We act and think based on our customers' expectation and needs. <br>
          Our business dedicates to providing and adding values for our customers.<br>
          <a href="<?= home_url() ?>/park/person_kosuke-kinjo/">Learn More</a>
        </dd>
      </dl>
      <dl class="career-identity__box">
        <dt class="career-identity__box-title">GO BEYOND</dt>
        <dd class="career-identity__box-item">
          We go beyond our roles and positions to take actions that we know will help the business as a whole. <br>
          We are always proactively interacting and helping each other.<br>
          <a href="<?= home_url() ?>/park/behavioridentity_shoumei-yamamoto/">Learn More</a>
        </dd>
      </dl>
      <dl class="career-identity__box">
        <dt class="career-identity__box-title">APPRECIATION AND RESPECT</dt>
        <dd class="career-identity__box-item">
          We respect diversity and communicate appreciation to the team, and show it with words and acting.<br>
          <a href="<?= home_url() ?>/park/behavioridentity_yuki-kagaya/">Learn More</a>
        </dd>
      </dl>
      <dl class="career-identity__box">
        <dt class="career-identity__box-title">COMMIT TO RESULTS</dt>
        <dd class="career-identity__box-item">
          When we commit to something, we will go the distance. <br>
          No matter what the difficulty is we think about why we can do it, not why we cannot, and stick to delivering the results.<br>
          <a href="<?= home_url() ?>/park/behavioridentity_karan-nose/">Learn More</a>
        </dd>
      </dl>
      <dl class="career-identity__box">
        <dt class="career-identity__box-title">DO THE RIGHT THING</dt>
        <dd class="career-identity__box-item">
          We always act with integrity and honesty to the society. <br>
          We take pride in doing the right things.<br>
          <a href="<?= home_url() ?>/park/behavioridentity_kazuho-hagiwara/">Learn More</a>
        </dd>
      </dl>
    </div>
  </section>
  <section class="career-identity-image section-block">
    <img loading='lazy' src="<?=get_template_directory_uri() ?>/corporate/img/careers/career-identiy.jpg" alt="WealthPark career identity" />
  </section>
  <!-- CAREERS SNS BANNERS (podcasts, instagram, etc...) -->
  <?php include "template-parts/careers-sns-banner.php"?>

</div>

<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script type="text/javascript">
  function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
  }
</script>

</body>
</html>
