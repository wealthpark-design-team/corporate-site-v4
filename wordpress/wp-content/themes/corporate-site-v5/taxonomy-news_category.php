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
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
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
	<div id="primary" class="content-area news_page">
		<main id="main" class="site-main wp_container news-container" role="main">
		<section id="section-news-list">
		<?php
        $obj = get_queried_object();

        $pan = new breadcrumb();
        $pan->append("HOME", home_url());
        $pan->append("すべてのNews", get_post_type_archive_link("news"));
        $pan->append($obj->name, get_term_link($obj->term_id));
        // $pan->build();
        if (have_posts()) :
        ?>

			<header class="page-header">
				<h1 class="page-title news-title"><?=$obj->name ?> News<small><?=$obj->name ?>のニュース</small></h1>
			</header><!-- .page-header -->
			<ul class="news__list">
			<?php
                $query = new WP_Query(array(
                    'post_type' => 'news',
                    'posts_per_page' => 15,
                    'post_status'	=> 'publish',
                    'paged'	=> get_query_var('paged') ? get_query_var('paged') : 1,
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'news_category',
                            'terms' => array($obj->term_id),
                            'field' => 'id'
                        )
                    )
                ));

                $_ = function ($str) {
                    return $str;
                };

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                        $category = get_the_terms(get_the_ID(), "news_category");
                        echo "
                    <li class='news-item'>
                      <article id='post-{$_(get_the_ID())}' class='news-item__item'>
                        <div class='news-item__link'>
                          <header class='news-item__header'>
                            <a href='{$_(get_the_permalink())}' class='news-item__header-pic'>
                              <img loading='lazy' class='news-item__header-image' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                            </a>
                            <div class='news-item__header-inner'>
                              <a class='news-item__header-cate' href='{$_(get_term_link($category[0]))}'>{$category[0]->name}</a>
                              <p class='news-item__header-date'>{$_(get_the_date('Y.m.d'))}</p>
                            </div>
                          </header>
                          <div class='news-item__contnet'>
                            <a class='news-item__title' href='{$_(get_the_permalink())}'>{$_(get_the_title())}</a>
                          </div>
                        </div>
                      </article>
                    </li>
                    ";
                    }
                }
            ?>
		 </ul>
		 <section class="pagination">
			<?php
                $big = 999999999;
                echo paginate_links(array(
                    'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                    'show_all' => true,
                    'type' => 'list',
                    'format' => '?paged=%#%',
                    'current' => max(1, get_query_var('paged')),
                    'total' => $query->max_num_pages,
                    'prev_text' => '<i class="material-icons">keyboard_arrow_left</i>',
                    'next_text' => '<i class="material-icons">keyboard_arrow_right</i>',
                ));
            ?>
		 </section>
			<?php
            wp_reset_query();
        else :
            get_template_part('template-parts/content-news', 'none');
        endif; ?>

		</section>
		</main><!-- #main -->
	</div><!-- #primary -->
  </div>
	<footer>
    <?php include "template-parts/footer-main.php" ?>
    <?php include "template-parts/footer-sub-corporate.php" ?>
	</footer>
	<script type="text/javascript">
	  function dropsort() {
	      var browser = document.sort_form.sort.value;
	      location.href = browser
	  }
	</script>
	</body>
	</html>
