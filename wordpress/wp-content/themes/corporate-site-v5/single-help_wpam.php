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
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body>
<?php include "tag-manager-body.php" ?>
<div id="page" class="whole-page">
	<?php include "header-common.php" ?>
	<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
      <article class="help-content help-content--wpam">
        <?php
          $getImage = function ($fileName) {
              return get_template_directory_uri()."/img/help/{$fileName}";
          };
          $pan = new breadcrumb();
          $pan->append("WealthPark Asset Management", home_url()."/asset-management/");
          $pan->append("WealthPark Support", get_post_type_archive_link("help_wpam"));
          $pan->append(get_the_title(), get_permalink());
          $pan->build();
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
						<a class="help-footer__inner" href="<?=get_term_link(92, "help_am_topics") ?>">
							<div class="help-footer__icon">
								<img loading='lazy' class="help-footer__icon--default" src="<?=$getImage("icon_graph.png") ?>" alt="" />
							</div>
							<div class="help-footer__box">
								<?php _e("owner-help.footer.topic-variation-list-1", 'wp-next-landing-page'); ?>
								<p class="help-footer__box-link" href=""><?php _e("owner-help.topic-variation-link", 'wp-next-landing-page'); ?></p>
							</div>
						</a>
					</li>
					<li class="help-footer__item">
					<a class="help-footer__inner" href="<?=get_term_link(93, "help_am_topics") ?>">
						<div class="help-footer__icon">
							<img loading='lazy' class="help-footer__icon--default" src="<?=$getImage("icon_device.png") ?>" alt="" />
						</div>
						<div class="help-footer__box">
							<?php _e("owner-help.footer.topic-variation-list-2", 'wp-next-landing-page'); ?>
							<p class="help-footer__box-link" href=""><?php _e("owner-help.topic-variation-link", 'wp-next-landing-page'); ?></p>
						</div>					
					</a>
					</li>
					<li class="help-footer__item">
					<a class="help-footer__inner" href="<?=get_term_link(94, "help_am_topics") ?>">
					<div class="help-footer__icon">
							<img loading='lazy' class="help-footer__icon--default" src="<?=$getImage("icon_cloud.png") ?>" alt="" />
						</div>
						<div class="help-footer__box">
							<?php _e("owner-help.footer.topic-variation-list-3", 'wp-next-landing-page'); ?>
							<p class="help-footer__box-link" href=""><?php _e("owner-help.topic-variation-link", 'wp-next-landing-page'); ?></p>
						</div>				
					</a>
					</li>
					<li class="help-footer__item">
					<a class="help-footer__inner" href="<?=get_term_link(95, "help_am_topics") ?>">
						<div class="help-footer__icon">
							<img loading='lazy' class="help-footer__icon--default" src="<?=$getImage("icon_chat.png") ?>" alt="" />
						</div>
						<div class="help-footer__box">
							<?php _e("owner-help.footer.topic-variation-list-4", 'wp-next-landing-page'); ?>
							<p class="help-footer__box-link" href=""><?php _e("owner-help.topic-variation-link", 'wp-next-landing-page'); ?></p>
						</div>				
					</a>
					</li>
					<li class="help-footer__item">
					<a class="help-footer__inner" href="<?=get_term_link(96, "help_am_topics") ?>">
						<div class="help-footer__icon">
							<img loading='lazy' class="help-footer__icon--default" src="<?=$getImage("icon_chat.png") ?>" alt="" />
						</div>
						<div class="help-footer__box">
							<?php _e("owner-help.footer.topic-variation-list-5", 'wp-next-landing-page'); ?>
							<p class="help-footer__box-link" href=""><?php _e("owner-help.topic-variation-link", 'wp-next-landing-page'); ?></p>
						</div>				
					</a>
					</li>
				</ul>
			</section>
      </article>
		</main><!-- #main -->
	</div><!-- #primary -->
  </div>
  <footer>
    <?php include "template-parts/footer-main.php" ?>
    <?php include "template-parts/footer-sub-wpam.php" ?>
  </footer>
  <script type="text/javascript">
    function dropsort() {
        var browser = document.sort_form.sort.value;
        location.href = browser
    }
  </script>
  </body>
  </html>
