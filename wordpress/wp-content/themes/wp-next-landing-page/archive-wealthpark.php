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
	<div id="primary" class="content-area blog_page blog">
    <section class="seminar-kpv-pr__hero section-block">
        <img loading='lazy' class="seminar-kpv-pr__hero--img" src="<?php echo get_template_directory_uri() ?>/img/app/wealthpark_blog_hero.jpg" />
        <div class="seminar-kpv-pr__hero--txt">
          <h1>WealthPark Blog</h1>
        </div>
      </section>
		<main id="main" class="site-main wp_container blog-container" role="main">


    <section id="section-blog-list--wp">
		<?php
      $_ = function ($str) {
          return $str;
      };
    ?>
		<section class="blog-recommend">
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
    
        $query = new WP_Query(array(
            'post_type' => 'wealthpark',
            'tag_id' => 52,
            'posts_per_page' => 3,
            'post_status'	=> 'publish',
            'no_found_rows' => true
        ));
        if ($query->have_posts()) {
            echo "<ul class='blog-recommend__list'>";
            while ($query->have_posts()) {
                $query->the_post();
                $category = get_the_terms(get_the_ID(), "category");
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
                        <p class='blog-recommend__description'>{$_(mb_substr(wp_strip_all_tags(get_the_content()), 0, 100))}</p>
                        <ul class='blog-recommend__meta'>
                          {$tags(get_the_tags(), 'blog-recommend__meta')}
                        </ul>
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
		<?php
        $terms = get_tags();
        $include = array("");
        foreach ($terms as $term) {
            if ($term->term_id === 55) {
                array_push($include, $term->term_id);
            }
        }
        unset($term);
        
        foreach ($include as $i) :
        ?>
		<section class="blog-articles <?=!empty($term->name) ? "tag-".$term->term_id : "" ?>">
			<div class="blog-articles__header">
				<h2 class="blog-articles__headline">
					<?php
              if (empty($i)) {
                  echo "最新記事";
              } else {
                  $term = get_term($i, "post_tag");
                  echo "#".$term->name;
              }
          ?>
				</h2>
				
			</div>
      <?php
          $latest = new WP_Query(array(
              'post_type' => 'wealthpark',
              'posts_per_page' => empty($i) ? 12 : 6,
              'post_status'	=> 'publish',
              'no_found_rows' => true,
              'tag_id' => $i
          ));
          if ($latest->have_posts()) {
              echo "<ul class='blog-articles__list'>";
              while ($latest->have_posts()) {
                  $latest->the_post();
                  $category = get_the_terms(get_the_ID(), "category");
                  echo "
                      <li class='blog-articles__item'>
                        <a class='blog-articles__item-thumb' href='{$_(get_permalink())}'>
                          <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
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
                            <a href='{$_(get_permalink())}'>
                              {$_(get_the_title())}
                            </a>
                            <span>{$_(get_the_date('Y.m.d'))}</span>
                          </p>
                        </div>
                        <ul class='blog-articles__meta'>
                          {$_(!empty(get_the_tags()) ? $tags(get_the_tags(), 'blog-articles__meta') : '')}
                        </ul>
                      </li>
                      ";
              }
              echo "</ul>";
          }
          wp_reset_query();
        ?>
        <p class="text-right">
          <a class="blog-articles__link" href="<?=!empty($term) ? get_term_link($term) : '/wealthpark-blog-archive/'?>">
            <?=!empty($term->name) ? "#".$term->name."の" : "" ?><?php _e("article.all-articles", 'wp-next-landing-page'); ?>
          </a>
        </p>
		</section>
		<?php endforeach;?>
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

    // Query all blog article sections
    const blogSections = document.querySelectorAll('.blog-articles');

    // Loop through each section
    blogSections.forEach(section => {
        // Check if the section has a ul child
        const hasUl = section.querySelector('ul');
        
        // If no ul is found, hide the section
        if (!hasUl) {
            section.style.display = 'none';
        }
    });
	</script>
	</body>
	</html>
