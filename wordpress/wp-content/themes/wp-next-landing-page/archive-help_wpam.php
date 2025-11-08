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
<?php include "external-css-js-common.php" ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
<!-- `wp_head`によって自動生成されるtitleを削除し、titleを指定 -->
<?php remove_action( 'wp_head', '_wp_render_title_tag', 1 ); ?>
<title>WealthPark Support Center | WealthPark Asset Management</title>
<?php wp_head(); ?>
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
		<article class="help-archive">
			<!-- help__understand -->
			<div class="help__mainVisual">
			<section class="help__understand">
				<div class="l-inner l-inner--wpam">
					<?php
											$pan = new breadcrumb();
											$pan->append("WealthPark Asset Management", home_url()."/asset-management/");
											$pan->append("WealthPark Asset Management Support", get_post_type_archive_link("help_wpam"));
											$pan->build();
									?>
				</div>
				<div class="help__inner l-inner">
					<div class="help__understandTit">
						<?php _e("wp-am.owner-help.hero-message", 'wp-next-landing-page'); ?>
					</div>
					<div class="help__mainVisualImg">
						<img  loading='lazy' src="<?php echo get_template_directory_uri() ?>/img/wpam/wp-am.help-owner1.png" alt="WP Asset Managementサポートセンター">
					<div>
				</div>
			</section>
			</div>
      <section class='whats-new container'>
        <div class="container__inner">
          <div class="whats-new__heading">
            <h2><?php _e("wp-am.owner-help.whats-new", 'wp-next-landing-page')?></h2>
            <a href="<?php echo esc_url(home_url('asset-management/help/topics/latest-news/')); ?>"><?php _e("wp-am.owner-help.read-all", 'wp-next-landing-page')?></a>
          </div>
          <ul class="blog-articles__list">
            <?php
              $_ = function ($str) {
                return $str;
              };
            
              $args = array(
                'posts_per_page' => 3,
                'post_type' => 'help_wpam',
                'post_status' => 'publish',
                'no_found_rows' => true,
                'tax_query' => array(
                    array(
                        'taxonomy' => 'help_am_topics',
                        'field' => 'id',
                        'terms' => 141,
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
        </div>
      </section>
			<div class="help-bgWhite">
				<!-- topic__variation -->
				<section class="topic__variation">
					<h2 class="c-fp__tit topic__variationTit"><?php _e("owner-help.find-topics", 'wp-next-landing-page'); ?></h2>
					<ul class="topic__variationTeams l-inner">
						<li class="topic__variationTeam--help">
							<a href="<?=get_term_link(92, "help_am_topics") ?>">
								<div class="topic__variationContents">
									<dl class="topic__variationList">
										<?php _e("owner-help.topic-variation-list-1", 'wp-next-landing-page'); ?>
										<dd class="topic__variationLink">
											<?php _e("owner-help.topic-variation-link", 'wp-next-landing-page'); ?>
										</dd>
									</dl>
								</div>
							</a>
						</li>
            <li class="topic__variationTeam--help">
							<a href="<?=get_term_link(93, "help_am_topics") ?>">
								<div class="topic__variationContents">
									<dl class="topic__variationList">
										<?php _e("owner-help.topic-variation-list-2", 'wp-next-landing-page'); ?>
										<dd class="topic__variationLink">
											<?php _e("owner-help.topic-variation-link", 'wp-next-landing-page'); ?>
										</dd>
									</dl>
								</div>
							</a>
						</li>
						<li class="topic__variationTeam--help">
							<a href="<?=get_term_link(94, "help_am_topics") ?>">
								<div class="topic__variationContents">
									<dl class="topic__variationList">
										<?php _e("owner-help.topic-variation-list-3", 'wp-next-landing-page'); ?>
										<dd class="topic__variationLink">
											<?php _e("owner-help.topic-variation-link", 'wp-next-landing-page'); ?>
										</dd>
									</dl>
								</div>
							</a>
						</li>
						<li class="topic__variationTeam--help">
							<a href="<?=get_term_link(95, "help_am_topics") ?>">
								<div class="topic__variationContents">
									<dl class="topic__variationList">
										<?php _e("owner-help.topic-variation-list-4", 'wp-next-landing-page'); ?>
										<dd class="topic__variationLink">
											<?php _e("owner-help.topic-variation-link", 'wp-next-landing-page'); ?>
										</dd>
									</dl>
								</div>
							</a>
						</li>
						<li class="topic__variationTeam--help">
							<a href="<?=get_term_link(96, "help_am_topics") ?>">
								<div class="topic__variationContents">
									<dl class="topic__variationList">
										<?php _e("owner-help.topic-variation-list-5", 'wp-next-landing-page'); ?>
										<dd class="topic__variationLink">
											<?php _e("owner-help.topic-variation-link", 'wp-next-landing-page'); ?>
										</dd>
									</dl>
								</div>
							</a>
						</li>
					</ul>
				</section>
				<!-- topic__variation -->
				<section class="container post-summary" id="readAll">
					<h2 class="help-list__headline">
						<?php _e("owner-help.article-list-headline", 'wp-next-landing-page'); ?>
					</h2>
					<div class="container__inner post-summary__inner">
						<?php
                            $terms = get_terms('help_am_topics');
                            foreach ($terms as $term) {
                                $args = array(
                                    'post_type' => 'help_wpam',
                                    'posts_per_page' => 100,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'help_am_topics',
                                            'field' => 'id',
                                            'terms' => array($term->term_id),
                                        ),
                                    ),
                                );
                                $the_query = new WP_Query($args);
                                $_ = function ($str) {
                                    return $str;
                                };
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
	</main>
	<footer>
    <?php include "template-parts/footer-main.php" ?>
    <?php include "template-parts/footer-sub-wpam.php" ?>
	</footer>
	<script type="text/javascript">
    $(".readAll").on("click",function(e){
      e.preventDefault();
      $('html, body').animate({
        scrollTop: $("#readAll").offset().top - 80
    }, 1000);
    })
	  function dropsort() {
	      var browser = document.sort_form.sort.value;
	      location.href = browser
	  }
	</script>
	</body>
	</html>
