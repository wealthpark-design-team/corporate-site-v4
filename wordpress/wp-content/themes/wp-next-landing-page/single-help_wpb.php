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
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc" />
<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/manifest.json?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
<style>
  .customer-success__download .container__inner,
  .customer-success__form .container__inner,
  .form-section--salesforce .form-block--column .form-block__item {
    width: 100% !important;
  }
</style>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
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
  .help-contact-owner {
    padding-top: 80px;
  }
  .help-footer {
    width: 98.7vw;
  }
  @media screen and (max-width: 990px) {
    .help-contact-owner {
      padding-top: 40px;
    } 
  }
</style>
</head>
<body>
<?php include "tag-manager-body.php" ?>
<div id="page" class="whole-page">
	<?php include "header-common.php" ?>
	<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <article class="help-content">
        <?php
          $getImage = function ($fileName) {
              return get_template_directory_uri()."/img/help/{$fileName}";
          };
        ?>
        <h1 class="help-content__headline"><?=get_the_title() ?></h1>
        <section class="help-article">
          <?php
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }
          ?>
        </section>

        <section class="help-footer">
				<ul class="help-footer__list">
					<li class="help-footer__item">
						<a class="help-footer__inner" href="<?=get_term_link(44, "help_topics") ?>">
							<div class="help-footer__icon">
								<img loading='lazy' class="help-footer__icon--default" src="<?=$getImage("icon_graph.png") ?>" alt="" />
							</div>
							<div class="help-footer__box">
								<p class="help-footer__box-title">はじめての方</p>
								<p class="help-footer__box-detail">
									WealthParkとは？最初にログインするには？など基本的なご案内
								</p>
								<p class="help-footer__box-link" href="">詳しく見る</p>
							</div>
						</a>
					</li>
					<li class="help-footer__item">
					<a class="help-footer__inner" href="<?=get_term_link(47, "help_topics") ?>">
					<div class="help-footer__icon">
							<img loading='lazy' class="help-footer__icon--default" src="<?=$getImage("icon_cloud.png") ?>" alt="" />
						</div>
						<div class="help-footer__box">
							<p class="help-footer__box-title">よくあるご質問</p>
							<p class="help-footer__box-detail">
								ログインできない、チャットが上手く行かない、などはこちら
							</p>
							<p class="help-footer__box-link" href="">詳しく見る</p>
						</div>				
					</a>
					</li>
					<li class="help-footer__item">
					<a class="help-footer__inner" href="<?=get_term_link(73, "help_topics") ?>">
						<div class="help-footer__icon">
							<img loading='lazy' class="help-footer__icon--default" src="<?=$getImage("icon_chat.png") ?>" alt="" />
						</div>
						<div class="help-footer__box">
							<p class="help-footer__box-title">操作方法（モバイル版）</p>
							<p class="help-footer__box-detail">
								iOS/Androidでの各画面の見方や、チャット／アクティビティの使い方など
							</p>
							<p class="help-footer__box-link" href="">詳しく見る</p>
						</div>				
					</a>
					</li>
					<li class="help-footer__item">
					<a class="help-footer__inner" href="<?=get_term_link(74, "help_topics") ?>">
						<div class="help-footer__icon">
							<img loading='lazy' class="help-footer__icon--default" src="<?=$getImage("icon_chat.png") ?>" alt="" />
						</div>
						<div class="help-footer__box">
							<p class="help-footer__box-title">操作方法（パソコン版）</p>
							<p class="help-footer__box-detail">
								PCでの各画面の見方や、チャット／アクティビティの使い方など
							</p>
							<p class="help-footer__box-link" href="">詳しく見る</p>
						</div>				
					</a>
					</li>
				</ul>
			</section>
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
		</main><!-- #main -->
	</div><!-- #primary -->
  </div>
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
