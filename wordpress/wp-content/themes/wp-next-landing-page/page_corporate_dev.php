<?php
/*
Template Name: Service Page - Corporate - Dev
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include_once("tag_facebook_pixel.php") ?>
<?php include_once("tag_facebook_pixel_rincrew.php") ?>
<?php include "tag-manager-head.php" ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<title>テストページ | WealthPark Corporate Site</title>
<meta name="description" content="WealthParkコーポレートサイトのテストページ">
<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css"> -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
<meta name="robots" content="noindex">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
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
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/modal-multi.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body class="drawer drawer--top">
<?php include "tag-manager-body.php" ?>
<!-- Google Tag Manager -->
<!-- End Google Tag Manager -->
<!-- End Facebook Page Plugin -->
<!-- <div class="wealth-park-triangle"> -->
<?php include "header-common.php" ?>

<div class="hero_v3">
  <section class="container">
    <div class="hero__inner_v3">
      <div class="hero__message">
        <?php _e("corporate.hero-message-v3", 'wp-next-landing-page'); ?>
        <?php _e("corporate.panel-banners", 'wp-next-landing-page'); ?>
      </div>
    </div>
  </section>

  <!-- ブログセクション -->
	<main id="main" class="site-main wp_container blog-container" role="main">
  <section id="section-blog-list">
		<?php
        $_ = function ($str) {
            return $str;
        };
        ?>
		<section class="blog-recommend corporate-top-news">
			<div class="blog-articles__header">
				<h2 class="blog-articles__headline">プレスリリース</h2>
				<a class="blog-articles__link" href="<?php echo esc_url(home_url('/news/')); ?>">
					<?php _e("article.all-articles", 'wp-next-landing-page'); ?>
				</a>
			</div>
			<?php
                $query = new WP_Query(array(
                    'post_type' => 'news',
                    'posts_per_page' => 2,
                    'post_status'	=> 'publish',
                    'paged'	=> get_query_var('paged') ? get_query_var('paged') : 1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'news_category',
                            'terms' => 100,
                            'field' => 'id'
                        )
                    )
                ));
                if ($query->have_posts()) {
                    echo "<ul class='blog-recommend__list'>";
                    while ($query->have_posts()) {
                        $query->the_post();
                        $category = get_the_terms(get_the_ID(), "news_category");
                        echo "
                        <li class='blog-recommend__item'>
                          <a class='blog-recommend__thumb' href='{$_(get_permalink())}'>
                            <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                          </a>
                          <div class='blog-recommend__body'>
                            <div class='blog-recommend__header'>
                              <a class='blog-recommend__header-cate' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                              <p class='blog-recommend__header-date'>{$_(get_the_date('Y.m.d'))}</p>
                            </div>
                            <a class='blog-recommend__title' href='{$_(get_permalink())}'>{$_(get_the_title())}</a>
                            <p class='blog-recommend__description'>{$_(mb_substr(wp_strip_all_tags(get_the_content()), 0, 100))}…</p>
                            <div class='blog-recommend__footer'>
                              <a class='blog-recommend__readmore' href='{$_(get_permalink())}'>{$_(esc_html__("readmore", 'wp-next-landing-page'))}</a>
                            </div>
                          </div>
                        </li>
                        ";
                    }
                    echo "</ul>";
                }
                wp_reset_query();
            ?>
		</section>
    <section class="blog-articles corporate-top-news">
      <?php
          if (have_posts()) : ?>
        <ul class="news__list">
        <?php
                  $query = new WP_Query(array(
                      'post_type' => 'news',
                      'posts_per_page' => 3,
                      'post_status'	=> 'publish',
                  ));

                  $_ = function ($str) {
                      return $str;
                  };

                  if ($query->have_posts()) {
                      while ($query->have_posts()) {
                          $query->the_post();
                          $category = get_the_terms(get_the_ID(), "news_category");
                          echo "
                          <li class='blog-articles__item'>
                            <div class='blog-articles__item-header'>
                              <a class='blog-articles__item-category' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                              <p class='blog-articles__item-date'>{$_(get_the_date('Y.m.d'))}</p>
                            </div>
                            <a class='blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
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
                  }
              ?>
      </ul>
      <?php
            wp_reset_query();
        else :
            get_template_part('template-parts/content-news', 'none');
        endif; ?>
    </section>
    <!-- 外部サービスを利用したオウンドメディアのため静的に設置した記事 -->
		<!-- <section class="blog-articles">
      <div class="blog-articles__header">
				<h2 class="blog-articles__headline">WealthPark研究所</h2>
				<a class="blog-articles__link" href="https://medium.com/wealthpark-lab/archive">
					<?php _e("article.all-articles", 'wp-next-landing-page'); ?>
				</a>
			</div>
      <ul class="blog-articles__list">
        <li class='blog-articles__item'>
          <div class='blog-articles__item-header'>
            <a class='blog-articles__item-category' href='https://medium.com/wealthpark-lab'>Lab</a>
            <p class='blog-articles__item-date'>2021.08.06</p>
          </div>
          <a class='blog-articles__item-thumb' href='https://medium.com/wealthpark-lab/%E7%A4%BE%E4%BC%9A%E3%82%92%E5%BD%A9%E3%82%8B%E3%82%A2%E3%83%BC%E3%83%88%E3%81%8B%E3%82%89%E6%8A%95%E8%B3%87%E3%81%AE%E6%9C%AC%E8%B3%AA%E3%82%92%E8%80%83%E3%81%88%E3%82%8B-%E5%89%8D%E7%B7%A8-4ec935c3f488'>
            <img loading='lazy' src='https://wealth-park.com/wp-content/uploads/2021/08/DSC04585_002.jpg' />
          </a>
          <div class='blog-articles__item-body'>
          <p class='blog-articles__item-body--inner'>
            社会を彩るアートから投資の本質を考える（前編）
          </p>
          </div>
          <ul class='blog-articles__meta'>
            <li class='blog-articles__meta-item'>
              <a class='blog-articles__meta-link' href='https://medium.com/wealthpark-lab/tagged/wealthpark'>WealthPark</a>
            </li>
            <li class='blog-articles__meta-item'>
              <a class='blog-articles__meta-link' href='https://medium.com/wealthpark-lab/tagged/the-vision'>The Vision</a>
            </li>
          </ul>
        </li>
        <li class='blog-articles__item'>
          <div class='blog-articles__item-header'>
            <a class='blog-articles__item-category' href='https://medium.com/wealthpark-lab'>Lab</a>
            <p class='blog-articles__item-date'>2021.08.26</p>
          </div>
          <a class='blog-articles__item-thumb' href='https://medium.com/wealthpark-lab/%E3%83%AF%E3%82%A4%E3%83%B3%E3%81%8C%E6%8A%95%E8%B3%87%E3%81%AB%E3%81%AA%E3%82%8B-%E3%81%A3%E3%81%A6%E8%81%9E%E3%81%84%E3%81%9F%E3%82%93%E3%81%A7%E3%81%99%E3%81%8C-%E2%91%A0-438b58a614c5'>
            <img loading='lazy' src='https://wealth-park.com/wp-content/uploads/2021/11/I_heard_wine_could_be_investment_001.jpg' />
          </a>
          <div class='blog-articles__item-body'>
          <p class='blog-articles__item-body--inner'>
            「ワインが投資になる」って聞いたんですが・・・①
          </p>
          </div>
          <ul class='blog-articles__meta'>
            <li class='blog-articles__meta-item'>
              <a class='blog-articles__meta-link' href='https://medium.com/wealthpark-lab/tagged/wealthpark'>WealthPark</a>
            </li>
            <li class='blog-articles__meta-item'>
              <a class='blog-articles__meta-link' href='https://medium.com/wealthpark-lab/tagged/tellmewealthpark'>TellMeWealthPark</a>
            </li>
          </ul>
        </li>
        <li class='blog-articles__item'>
          <div class='blog-articles__item-header'>
            <a class='blog-articles__item-category' href='https://medium.com/wealthpark-lab'>Lab</a>
            <p class='blog-articles__item-date'>2021.10.08</p>
          </div>
          <a class='blog-articles__item-thumb' href='https://medium.com/wealthpark-lab/vision-fortec-architects-v1-300dbbcfcdb2'>
            <img loading='lazy' src='https://wealth-park.com/wp-content/uploads/2021/11/DSC145685_008.jpeg' />
          </a>
          <div class='blog-articles__item-body'>
          <p class='blog-articles__item-body--inner'>
            プロフェッショナルが変われば社会はもっと良くなる（前編）
          </p>
          </div>
          <ul class='blog-articles__meta'>
            <li class='blog-articles__meta-item'>
              <a class='blog-articles__meta-link' href='https://medium.com/wealthpark-lab/tagged/wealthpark'>WealthPark</a>
            </li>
            <li class='blog-articles__meta-item'>
              <a class='blog-articles__meta-link' href='https://medium.com/wealthpark-lab/tagged/the-vision'>The Vision</a>
            </li>
          </ul>
        </li>
		</section> -->
    <!-- 外部サービスを利用したオウンドメディアのため静的に設置した記事 -->
		<section class="blog-articles">
			<div class="blog-articles__header">
				<h2 class="blog-articles__headline">ブログ最新記事</h2>
				<a class="blog-articles__link" href="<?php echo esc_url(home_url('/wealthpark-blog-archive/')); ?>">
					<?php _e("article.all-articles", 'wp-next-landing-page'); ?>
				</a>
			</div>
      <ul class="blog-articles__list">
        <?php
          $args = array(
            'posts_per_page' => 3,
            'post_type' => 'wealthpark',
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
                      <li class='blog-articles__meta-item'>
                        <a class='blog-articles__meta-link' href='{$_(get_term_link($tag->term_id))}'>
                          {$_($tag->name)}
                        </a>
                      </li>";
                  }, get_the_tags());
                  echo "
              <li class='blog-articles__item'>
                <div class='blog-articles__item-header'>
                  <a class='blog-articles__item-category' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                  <p class='blog-articles__item-date'>{$_(get_the_date('Y.m.d'))}</p>
                </div>
                <a class='blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
                  <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                </a>
                <div class='blog-articles__item-body'>
                <p class='blog-articles__item-body--inner'>
                  {$_(get_the_title())}
                </p>
              </div>
              <ul class='blog-articles__meta'>
                  {$_(implode($tags))}
              </ul>
              </li>";
              }
          }
          wp_reset_query();
        ?>
      </ul>
		</section>
		<section class="blog-articles">
			<div class="blog-articles__header">
				<h2 class="blog-articles__headline">プロダクト改善情報</h2>
				<a class="blog-articles__link" href="<?php echo esc_url(home_url('/tag/プロダクト改善・新機能/')); ?>">
					<?php _e("article.all-articles", 'wp-next-landing-page'); ?>
				</a>
			</div>
      <ul class="blog-articles__list">
        <?php
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
                      <li class='blog-articles__meta-item'>
                        <a class='blog-articles__meta-link' href='{$_(get_term_link($tag->term_id))}'>
                          {$_($tag->name)}
                        </a>
                      </li>";
                  }, get_the_tags());
                  echo "
              <li class='blog-articles__item'>
                <div class='blog-articles__item-header'>
                  <a class='blog-articles__item-category' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                  <p class='blog-articles__item-date'>{$_(get_the_date('Y.m.d'))}</p>
                </div>
                <a class='blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
                  <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                </a>
                <div class='blog-articles__item-body'>
                <p class='blog-articles__item-body--inner'>
                  {$_(get_the_title())}
                </p>
              </div>
              <ul class='blog-articles__meta'>
                  {$_(implode($tags))}
              </ul>
              </li>";
              }
          }
          wp_reset_query();
        ?>
      </ul>
		</section>
		<section class="blog-articles">
			<div class="blog-articles__header">
				<h2 class="blog-articles__headline">キーパーソンズ・ボイス</h2>
				<a class="blog-articles__link" href="<?php echo esc_url(home_url('/tag/keypersons-voice/')); ?>">
					<?php _e("article.all-articles", 'wp-next-landing-page'); ?>
				</a>
			</div>
      <ul class="blog-articles__list">
        <?php
          $args = array(
            'posts_per_page' => 3,
            'post_type' => 'wealthpark',
            'tag_id' => 55,
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
                      <li class='blog-articles__meta-item'>
                        <a class='blog-articles__meta-link' href='{$_(get_term_link($tag->term_id))}'>
                          {$_($tag->name)}
                        </a>
                      </li>";
                  }, get_the_tags());
                  echo "
              <li class='blog-articles__item'>
                <div class='blog-articles__item-header'>
                  <a class='blog-articles__item-category' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                  <p class='blog-articles__item-date'>{$_(get_the_date('Y.m.d'))}</p>
                </div>
                <a class='blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
                  <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                </a>
                <div class='blog-articles__item-body'>
                <p class='blog-articles__item-body--inner'>
                  {$_(get_the_title())}
                </p>
              </div>
              <ul class='blog-articles__meta'>
                  {$_(implode($tags))}
              </ul>
              </li>";
              }
          }
          wp_reset_query();
        ?>
      </ul>
		</section>
  </section>
  </main>
  <!-- ブログセクション -->
</div>

<?php include "popup_banner_business.php" ?>

<?php include "template-parts/partnerships-parts.php" ?>

<!-- <?php include "template-parts/corporate-banners.php" ?> -->

<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
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
<script>
// // メインナビのページスクロール //
$(function () {
    $('a[href^="#"]').click(function() {
      // スクロールの速度
      let speed = 400; // ミリ秒で記述
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
// magnificPopupの表示
$(function () {
    $('.career-modal__team').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {  //ギャラリーオプション
            // enabled: true
        }
    });
});
// スマートフォンで全画面表示
$(document).ready(function(){
var hSize = $(window).height();
  $('.career-visual').height(hSize); // アドレスバーを除いたサイズを付与
});
$(window).resize(function(){ // ページをリサイズした時の処理
var hSize = $(window).height();
  $('.career-visual').height(hSize); // アドレスバーを除いたサイズを付与
});
</script>
<script type="text/javascript">
  $('.slider').slick({
    // autoplay: true,
    autoplaySpeed: 5000,
    dots: true,
  });
</script>
<script type="text/javascript">
  function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
  }
</script>
<?php include_once("ga_tracking.php") ?>
</body>
</html>
