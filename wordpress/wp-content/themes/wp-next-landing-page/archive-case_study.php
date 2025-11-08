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
<?php
$_acf = function ($key) {
    return get_field($key);
};
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php include "tag-manager-head.php" ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <title>導入事例 | WealthParkビジネス</title>
    <meta name="description" content="WealthParkビジネスの導入事例一覧">
    <meta property="og:type" content="article">
    <meta property="og:title" content="導入事例 | WealthParkビジネス">
    <meta property="og:description" content="WealthParkビジネスの導入事例一覧">
    <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/ogp/OGP_case_study.jpg">
    <?php include "external-css-js-common.php" ?>
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/business/css/style.css?<?php echo date('Ymd-Hi'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
    <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
    <link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja/case_study" />
    <link rel="alternate" hreflang="en" href="http://wealth-park.com/en/case_study" />
    <link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc/case_study" />
    <link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc/case_study" />
    <link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc/case_study" />
    <link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc/case_study" />
    <!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
<?php include_once("ga_tracking.php") ?>
</head>

<body>
    <?php include "tag-manager-body.php" ?>
    <?php include "header-common.php" ?>
    <main id="page" class="whole-page case-study">
        <section class="case-study-mainv">
            <div class="case-study-mainv__image">
                <video class="video-section__background" autoplay="" loop="" muted="" playsinline="">
                    <source
                        src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/video/business/case_mjhn_bg.mp4"
                        type="video/mp4">
                </video>
            </div>
            <div class="case-study-mainv__text">
                <p class="case-study-mainv__title">導入事例</p>
                <p class="case-study-mainv__description">
                    WealthParkビジネスを活用して業務を効率化している不動産管理会社や、アプリを活用して資産を管理している不動産オーナーの皆様へインタビューを実施しました。
                </p>
            </div>
            <div class="case-study-mainv__video">
                <div class="case-study-mainv__video-inner">
                  <iframe src="https://www.youtube.com/embed/w4rQJCNvpwc?si=vtU_qVnX6ql3bGt2" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </section>

        <?php
        $_ = function ($str) {
              return $str;
          };
    $user_types = array(32,33);
    $i = 0;
    foreach ($user_types as $type) {
        $query = new WP_Query(
            array(
            'post_type' => 'case_study',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'no_found_rows' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'user_type',
                    'field' => 'id',
                    'terms' => $type
            )
            )
        )
        );
        if ($query->have_posts()) {
            echo "<section class='case-study-list'>";
            echo "<h2 class='case-study-list__title'>{$_(get_term($type)->name)}様の活用事例</h2>
            ";
            while ($query->have_posts()) {
                $query->the_post();
                $title = get_the_title();
                $url = get_the_permalink();
                $terms = get_the_terms(get_the_ID(), "features");
                $tags = "";
                foreach ((array)$terms as $term) {
                    if (empty($term)) {
                        break;
                    }
                    $link = get_term_link($term);
                    $tags .= "
                    <li class='case-study-list__tag'>
                        <a class='case-study-list__tag--link' href='{$link}'>{$term->name}</a>
                    </li>
                    ";
                }
                $name = $_acf('companyname');
                if (empty($name)) {
                    $name = $_acf('name');
                }
                echo "
                <div class='case-study-list__item'>
                <a class='case-study-list__thumb' href='{$url}'>
                <img loading='lazy' src='{$_acf('small_thumbnail')}' />
                </a>
                <div class='case-study-list__text'>
                <a class='case-study-list__hd' href='{$url}'>{$name}</a>
                <p class='case-study-list__catch'>{$title}</p>
                <ul class='case-study-list__tags'>
                {$tags}
                </ul>
                </div>
                </div>
                ";
            }
            echo "</section>";
            ++$i;
        }
        wp_reset_query();
    }
    ?>
    <?php include dirname(__FILE__)."/template-parts/business-cta-form.php" ?>
        <main>
            <footer>
                <?php include "template-parts/footer-main.php" ?>
                <?php include "template-parts/footer-sub-business.php" ?>
            </footer>
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
            <script type="text/javascript">
                function dropsort() {
                    var browser = document.sort_form.sort.value;
                    location.href = browser
                }
            </script>
<!-- <?php include "tidio-chat-business.php" ?> -->
<?php include "popup_banner_business.php" ?>
</body>
</html>
