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
<?php include "tag-manager-head.php" ?><meta charset="<?php bloginfo('charset'); ?>">
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
	<div id="primary" class="content-area blog">
		<main id="main" class="site-main wp_container blog-container" role="main">
		<section id="section-blog-list" class="section-blog-list--arch-tag-cat">
		<?php
        $obj = get_queried_object();
        $pan = new breadcrumb();
        $pan->append("HOME", home_url());
        $pan->append("PARK", get_post_type_archive_link("park"));
        $pan->append($obj->name, get_term_link($obj->term_id));
        // $pan->build();
        
         ?>

			<header class="page-header">
        <h1 class="page-title blog-title">#<?=$obj->name ?> <small>Park</small></h1>
			</header><!-- .page-header -->
			<section class="blog-articles">
			<ul class="blog__list">
			<?php
                $query = new WP_Query(array(
                    'post_type' => 'park',
                    'posts_per_page' => 15,
                    'post_status'	=> 'publish',
                    'paged'	=> get_query_var('paged') ? get_query_var('paged') : 1,
                    'tax_query' => array(
                      array(
                          'taxonomy' => 'park_tag',
                          'terms' => array($obj->term_id),
                          'field' => 'id'
                      )
                  )
                ));

                $_ = function ($str) {
                    return $str;
                };

                if ($query->have_posts()) {
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
                    echo "<ul class='blog-articles__list'>";

                    while ($query->have_posts()) {
                        $query->the_post();
                        $category = get_the_terms(get_the_ID(), "park_category");
                        echo "
                    <li class='blog-articles__item'>
                      <a class='blog-articles__item-thumb' href='{$_(get_permalink())}'>
                        <img src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                      </a>
                      <div class='blog-articles__item-header'>
                        <a class='blog-articles__item-category' href='{$_(!empty($category) ? get_term_link($category[0]->term_id) : '#')}'>
                          {$_(!empty($category) ? $category[0]->name : 'その他')}
                        </a>
                        <p class='blog-articles__item-date'>
                          {$_(get_the_date('Y.m.d'))}
                        </p>
                      </div>
                      <div class='blog-articles__item-body'>
                        <p class='blog-articles__item-body--inner'>
                          {$_(get_the_title())}
                        </p>
                      </div>
                      <ul class='blog-articles__meta'>
                        {$_(!empty(wp_get_post_terms($post->ID,'park_tag')) ? $tags($terms = wp_get_post_terms($post->ID,'park_tag'), 'blog-articles__meta') : '')}
                      </ul>
                    </li>
                    ";
                    }
                    echo "</ul>";
                }
            ?>
		</section>
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
			<?php wp_reset_query();?>

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