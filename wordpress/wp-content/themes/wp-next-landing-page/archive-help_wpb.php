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
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>
<meta charset="<?php bloginfo('charset'); ?>">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/ogp/OGP_owner_help.jpg">
<meta name="apple-itunes-app" content="app-id=1068127268">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc" />
<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/manifest.json?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
<style>
  .customer-success__download .container__inner,
  .customer-success__form .container__inner,
  .form-section--salesforce .form-block--column .form-block__item {
    width: 100% !important;
  }
</style>
<?php include "external-css-js-common.php" ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->

<?php remove_action( 'wp_head', '_wp_render_title_tag', 1 ); ?>
<title>WealthParkサポートセンター | WealthPark</title>
<?php wp_head(); ?>
<script>
  $("#contact-form-7-css").remove();
</script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/contact-form.css">
<style>
  .row {
    display: block;
    width: 100%;
  }
  .col {
    width: 100% !important;
  }
  .wpcf7-form .wpcf7-radio .wpcf7-list-item input[type='radio'],
  .ui-radio-tabs input[type='radio'], 
  .ui-radio-tabs input[type='checkbox'] {
    display: inline-block;
  }
  .ui-radio-tabs .wpcf7-form-control .wpcf7-list-item {
    flex-grow: 0;
    margin-right: 30px;
  }
  form input[type='checkbox'] + label:before {
    display: none;
  }
  form input[type='checkbox'] + label {
    padding-left: 0;
    margin-bottom: 0;
  }
  form input[type='checkbox'] {
    display: inline-block;
  }
</style>
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php
    $getImage = function ($fileName) {
        return get_template_directory_uri()."/img/help/{$fileName}";
    };
?>
<div id="page" class="whole-page">
	<?php include "header-common.php" ?>
	<main id="main" class="site-content">
		<article class="help-archive help-archive--wpb">
			<!-- help__understand -->
			<section class="help__understand">
			<video class="help__understandVideo" src="" poster="<?php echo get_template_directory_uri() ?>/business/img/help_pic1.png" autoplay loop></video>
			<div class="help__inner l-inner">
				<div class="help__understandTit">
					<h1 class="help__understandTxt">
						WealthPark<br>サポートセンター
					</h1>
					<p class="help__understandDetail">
						不動産オーナー向けサービス「WealthPark」のサポートページです。iOS/Android向けアプリ版と、PC向けWeb版をご利用の方を対象としたページです。初めてご利用になられる際、ご不明な点がある際は、まずはこちらのページをご一読ください。
					</p>
				</div>
				<div class="help__understandMovie">
					<div class="help__understandMovieInner">
						<iframe width="100%" height="270" src="https://www.youtube.com/embed/9PnbheUbd-I?rel=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>					
					</div>
				</div>
			</div>
			</section>
			<div class="help-bgWhite">
				<main id="main" class="site-main wp_container blog-container" role="main">
				<section id="section-blog-list--help">
					<section class="blog-articles blog-articles-oa">
						<div class="blog-articles__header">
							<h2 class="blog-articles__headline">最新情報</h2>
						</div>
						<ul class="blog-articles__list">
							<?php
                $_ = function ($str) {
                    return $str;
                };
								$args = array(
									'posts_per_page' => 3,
									'post_type' => 'help_wpb',
									'post_status' => 'publish',
									'no_found_rows' => true,
									'tax_query' => array(
											array(
													'taxonomy' => 'help_topics',
													'field' => 'id',
													'terms' => 104,
											),
									),
								);
								$the_query = new WP_Query($args);
								if ($the_query->have_posts()) {
										while ($the_query->have_posts()) {
												$the_query->the_post();
												echo "
                          <li class='blog-articles__item'>
                            <a class='blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
                              <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                            </a>
                            <div class='blog-articles__item-body'>
                            <p class='blog-articles__item-body--inner'>
                              {$_(get_the_title())}
                            </p>
                            </div>
                          </li>";
										}
								}
								wp_reset_query();
							?>
						</ul>
            <p class="text-right">
              <a class="blog-articles__link" href="<?php echo esc_url(home_url('help/topics/latest_information/')); ?>">
								<?php _e("article.all-articles", 'wp-next-landing-page'); ?>
							</a>
            </p>
					</section>
				</section>
				</main>
				
				<section id="support-center" class="container container--oa">
					<div class="container__inner container__inner--oa">
						<div class="title-box">
							<p class="title">トピックスを探す</p>
						</div>
						<div class="container__row container__row--col2">
							<a href="<?=get_term_link(44, "help_topics") ?>" class="support-link container__col">
								<div class="support-title">
									<h3 class="support-hajimete">はじめての方</h3>
								</div>
								<p class="desc">WealthParkとは？最初にログインするには？など基本的なご案内</p>
								<p class="text-right">
									<span>
										詳しく見る >
									</span>
								</p>
							</a>
							<a href="<?=get_term_link(47, "help_topics") ?>" class="support-link container__col">
								<div class="support-title">
									<h3 class="support-faq">よくあるご質問</h3>
								</div>
								<p class="desc">ログインできない、チャットが上手く行かない、などはこちら</p>
								<p class="text-right">
									<span>
										詳しく見る >
									</span>
								</p>
							</a>
						</div>
						<div class="container__row container__row--col2">
							<a href="<?=get_term_link(73, "help_topics") ?>" class="support-link container__col">
								<div class="support-title">
									<h3 class="support-mobile">操作方法（モバイル版）</h3>
								</div>
								<p class="desc">スマホでの各画面の見方や、チャット／アクティビティの使い方など</p>
								<p class="text-right">
									<span>
										詳しく見る >
									</span>
								</p>
							</a>
							<a href="<?=get_term_link(74, "help_topics") ?>" class="support-link container__col">
								<div class="support-title">
									<h3 class="support-pc">操作方法（パソコン版）</h3>
								</div>
								<p class="desc">PCでの各画面の見方や、チャット／アクティビティの使い方など</p>
								<p class="text-right">
									<span>
										詳しく見る >
									</span>
								</p>
							</a>
						</div>
					</div>
				</section>


				<section class="container post-summary">
					<h2 class="help-list__headline">WealthParkサポートセンター記事一覧</h2>
					<div class="container__inner post-summary__inner">
						<?php
              $terms = get_terms('help_topics');
              foreach ($terms as $term) {
                $target = array($term->term_id);
                $result = array_diff($target, array(104));
                $result = array_values($result);
                  $args = array(
                      'post_type' => 'help_wpb',
                      'posts_per_page' => 100,
                      'tax_query' => array(
                          array(
                              'taxonomy' => 'help_topics',
                              'field' => 'id',
                              'terms' => $result,
                          ),
                      ),
                  );
                  $_ = function ($str) {
                      return $str;
                  };
                  $the_query = new WP_Query($args);
                  if ($the_query->have_posts()) {
                      echo "<h3 class='post-summary__hd'>{$term->name}</h3>";
                      while ($the_query->have_posts()) {
                          $the_query->the_post();
                          echo "
                          <div class='post-summary__item'>
                            <a class='post-summary__item--inner' href='{$_(get_the_permalink())}'>{$_(get_the_title())}</a>
                          </div>";
                        }
                    }
                }
                wp_reset_query();
            ?>
					</div>
				</section>
			</div>
		</article>
		<div class="help-bgWhite help-contact-owner">
      <section class="page-name">
        <div class="page-name__inner">
          <h3 class="page-name__title--form page-name__title--form--reset-padding ">
            <?php _e("page-title.contact-owner", 'wp-next-landing-page'); ?>
          </h3>
        </div>
      </section>
      <section class="container__inner form-section">
        <div id="form-top"></div>
        <?php echo do_shortcode( '[contact-form-7 id="39957" title="Contact Form Owner"]' ); ?>
        <p class="form-section__rule">
          <?php _e("corporate.contact.rule", 'wp-next-landing-page'); ?>
        </p>
      </section>
		</div>
	</main>
	<footer>
    <?php include "template-parts/footer-main.php" ?>
    <?php include "template-parts/footer-sub-corporate.php" ?>
	</footer>
  <input type="hidden" id="home_url" value="<?php echo esc_url(home_url('/')); ?>">
  <?php wp_footer(); ?>
	<script type="text/javascript">
	  function dropsort() {
	      var browser = document.sort_form.sort.value;
	      location.href = browser
	  }
	</script>
  <script>
    $('.wpcf7-list-item-label').css({'cursor': 'pointer'})
    $('.ui-radio-tabs.ui-radio-tabs--am').on('click', '.wpcf7-list-item-label', function(){
      const $checkbox = $(this).siblings('input[type="checkbox"], input[type="radio"]')
      if($checkbox.prop('checked')){
        $checkbox.prop('checked', false);
      }else{
        $checkbox.prop('checked', true);
      }
    })
  </script>
  <script>
    $home_url = $('#home_url').val();
    $completed_page = $home_url + 'contact/owner-completed';
    console.log($completed_page);
    document.addEventListener( 'wpcf7mailsent', function( event ) {
      console.log("Success!")
      location = $completed_page;
    }, false );

    document.addEventListener( 'wpcf7invalid', function( event ) {
      console.log("Invalid!")
      $('html, body').animate({
          scrollTop: $("#form-top").offset().top - 70
      }, 500);
    }, false );

    // MULTILINE PLACEHOLDER
    $("textarea").on('change keyup paste', function() {
      var length = $(this).val().length;
      if (length > 0) {
        $(this).addClass('data-edits');
      } else {
        $(this).removeClass('data-edits');
      }
    });
  </script>
	</body>
	</html>
