<?php
/*
Template Name: Service Page - Business - FeaturesPrice - WPB Pocket
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
<title>WPBポケット | WealthParkビジネス</title>
<meta name="description" content="WealthParkビジネスにおける「チャット機能」のモバイルアプリ">
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/ogp/OGP_pocket.jpg">
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
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
<?php include_once("ga_tracking.php") ?>
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<?php
  // app stores URL
  $apple = 'https://apps.apple.com/jp/app/wpb%E3%83%9D%E3%82%B1%E3%83%83%E3%83%88/id6740527215';
  $android = 'https://play.google.com/store/apps/details?id=com.wealthpark.business';
?>

<section class="page-name wpb-pocket-hero">
  <div class="l-inner wpb-pocket-hero-inner">
    <div class="desc">
      <div class="desc-content">
        <p class="tagline">不動産管理会社様向け<br class="visible-sp">モバイルアプリ</p>
        <h1 class="title"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/pocket-logo.svg" alt="WPBポケット"></h1>
        <p class="app-badges">
          <a href="<?php echo $apple; ?>" target="_blank">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/badge_app-store-us_black.png" alt="badge_app-store-us">
          </a>
          <a href="<?php echo $android; ?>" target="_blank">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/badge_google-play_black.png" alt="badge_google-play">
          </a>
        </p>
      </div>
    </div>
    <div class="image">
      <img class="visible-pc" loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/phonepc.png" alt="wpb-pocket mockup">
      <img class="visible-sp" loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/phonesp.png" alt="wpb-pocket mockup">
    </div>
  </div>
</section>

<!-- p-fp__oneColumn -->
<section class="p-fp__oneColumn p-fp__oneColumn-pocket">
  <div class="l-inner">
    <div class="visible-sp">
      <p class="wpb-pocket-app-badges-sp">
        <a href="<?php echo $apple; ?>" target="_blank">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/badge_app-store-us_black.png" alt="badge_app-store-us">
        </a>
        <a href="<?php echo $android; ?>" target="_blank">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/badge_google-play_black.png" alt="badge_google-play">
        </a>
      </p>
    </div>
    <h2 class="p-fp__oneTit c-fp__tit">WealthParkビジネスにおける「チャット機能」のモバイルアプリ</h2>
    <div class="pocket-main-image">
        <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/wpb_pocket_01.png" alt="image">
    </div>
    <p class="pocket-main-image-caption">
      不動産管理会社のご担当者様向けモバイルアプリ「WPB ポケット」が登場しました。WealthParkビジネスにおける「チャット機能」のモバイル版としてご利用いただけます。外出先や移動中など、オフィスに戻らずともスマートフォン一つで手軽に業務が行えます。オーナーアプリ「WealthPark」と連携し、オーナー様とのコミュニケーションを効率化し、接点を広げます。
    </p>
  </div>
</section>
<!-- p-fp__oneColumn -->

<!-- p-fp__twoColumn -->
<section class="p-fp__twoColumn p-fp__twoColumn-pocket">
  <div class="l-inner">
      <ul class="p-fp__twoTeams">
        <li class="p-fp__twoTeam">
            <h3 class="p-fp__twoTit c-fp__tit">オーナー様といつでもどこでも<br>チャットでコミュニケーション</h3>
            <p class="p-fp__twoTxt">
              出先や移動中、あるいはご自宅でも、いつでもどこでもオーナー様とチャットでコミュニケーションできます。<br>
              物件の状態を写真に撮って、その場で瞬時に共有することも可能です。
            </p>
        </li>
        <li class="p-fp__twoTeam">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/asset1.png" alt="オーナー様といつでもどこでもチャットでコミュニケーション">
        </li>
      </ul>
      <ul class="p-fp__twoTeams">
        <li class="p-fp__twoTeam">
            <h3 class="p-fp__twoTit c-fp__tit">プッシュ通知でオーナー様からの<br>メッセージにすぐに気づける</h3>
            <p class="p-fp__twoTxt">
              プッシュ通知があれば、オーナー様からの急ぎのメッセージにもすぐに気づけます。外出中や業務の合間でも、重要な連絡をリアルタイムで受け取れるので、対応の遅れによるトラブルを防ぎ、オーナー様との信頼関係をより強固に築くことができます。
            </p>
        </li>
        <li class="p-fp__twoTeam">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/asset2.png" alt="プッシュ通知でオーナー様からのメッセージにすぐに気づける">
        </li>
      </ul>
      <ul class="p-fp__twoTeams">
        <li class="p-fp__twoTeam">
            <h3 class="p-fp__twoTit c-fp__tit">重要なメッセージにはスターを<br>付けて後から簡単に確認</h3>
            <p class="p-fp__twoTxt">
              重要なメッセージにはスターを付けて、後から簡単に確認できます。メッセージにスターをつけることで、対応が必要なメッセージを明確にし、オーナー様への返信漏れ、対応漏れを防ぐことができます。
            </p>
        </li>
        <li class="p-fp__twoTeam">
          <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/asset3.png" alt="重要なメッセージにはスターを付けて後から簡単に確認">
        </li>
      </ul>
  </div>
</section>


<!-- p-fp__modal -->
  <section class="p-fp__modal">
    <ul class="p-fp__modalTeams l-inner">
      <li class="p-fp__modalTeam">
        <dl class="p-fp__modalList">
          <dt class="p-fp__modalImg">
            <a href="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/ss-3.png" alt="チャット画面（WPBポケット）">
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/ss-3-thumb.png" alt="チャット画面（WPBポケット）">
            </a>
          </dt>
          <dd class="p-fp__modalTxt">
            チャット画面（WPBポケット）
          </dd>
        </dl>
      </li>
      <li class="p-fp__modalTeam">
        <dl class="p-fp__modalList">
          <dt class="p-fp__modalImg">
            <a href="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/ss-2.png" alt="プッシュ通知（WPBポケット）">
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/ss-2-thumb.png" alt="プッシュ通知（WPBポケット）">
            </a>
          </dt>
          <dd class="p-fp__modalTxt">
            プッシュ通知（WPBポケット）
          </dd>
        </dl>
      </li>
      <li class="p-fp__modalTeam">
        <dl class="p-fp__modalList">
          <dt class="p-fp__modalImg">
            <a href="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/ss-1.png" alt="スター機能（WPBポケット）">
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/wpb-pocket/ss-1-thumb.png" alt="スター機能（WPBポケット）">
            </a>
          </dt>
          <dd class="p-fp__modalTxt">
            スター機能（WPBポケット）
          </dd>
        </dl>
      </li>
    </ul>
  </section>
<!-- p-fp__modal -->

<!--プロダクト改善情報 -->
  <section class="business-blog-articles p-fp__oneColumn">
    <div class="l-inner">
      <div class="business-blog-articles__header">
        <h2 class="business-blog-articles__headline">プロダクト改善情報</h2>
      </div>
      <ul class="business-blog-articles__list">
        <?php
          $_ = function ($str) {
              return $str;
          };
          $args = array(
            'posts_per_page' => 3,
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
                  <a class='business-blog-articles__item-category' href='{$_(!empty($category) ? get_term_link($category[0]->term_id) : '#')}'>
                    {$_(!empty($category) ? $category[0]->name : 'その他')}
                  </a>
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
        <a class="business-blog-articles__link" href="<?php echo esc_url(home_url('/tag/プロダクト改善・新機能/')); ?>">
          <?php _e("article.all-articles", 'wp-next-landing-page'); ?>
        </a>
      </p>
    </div>
  </section>


<?php include "template-parts/business-fp-function.php"?>
<?php include dirname(__FILE__)."/template-parts/business-cta-form.php" ?>
<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-business.php" ?>
</footer>
<script>
// magnificPopupの表示
$(function () {
    $('.p-fp__modalImg').magnificPopup({
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
</script>
<?php include "tag_hubspot_popup_001.php" ?>
<?php include "popup_banner_business.php" ?>
<!-- <?php include "tidio-chat-business.php" ?> -->
</body>
</html>
