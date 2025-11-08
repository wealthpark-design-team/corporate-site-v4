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
$term = get_queried_object();
$_acf = function ($key) {
    return get_field($key);
};
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <?php include_once("tag_yahoo_site-general.php") ?>
    <?php include_once("tag_google_remarketing.php") ?>
    <?php include_once("tag_facebook_pixel.php") ?>
    <?php include_once("tag_facebook_pixel_rincrew.php") ?>
    <?php include_once("tag_hubspot_popup_001.php") ?>
    <?php include "tag-manager-head.php" ?>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no">
    <title>導入事例（<?=$term->name ?>） - WealthParkビジネス</title>
    <meta name="description" content="WealthParkビジネスの導入事例（<?=$term->name ?>）一覧">
    <meta property="og:type" content="article">
    <meta property="og:title" content="導入事例（<?=$term->name ?>） - WealthParkビジネス">
    <meta property="og:description" content="WealthParkビジネスの導入事例一覧（<?=$term->name ?>）">
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
        <?php
    
        $query = new WP_Query(array(
            'post_type' => 'case_study',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'no_found_rows' => true,
            'tax_query' => array(
                array(
                    'taxonomy' => 'features',
                    'field' => 'id',
                    'terms' => $term->term_id
                )
            )
        ));
        echo "<section class='case-study-list'>";
        echo "<h2 class='case-study-list__title case-study-list__title--features'>{$term->name}の活用事例</h2>
        ";
        $terms = get_terms($term->taxonomy);
        echo "<ul class='case-study-list__terms'>";
        foreach ($terms as $obj) {
            if ($obj->name === $term->name) {
                echo "
                <li class='case-study-list__term case-study-list__term--current'>
                    {$obj->name}
                </li>
                ";
            } else {
                $link = get_term_link($obj);
                echo "
                <li class='case-study-list__term'>
                    <a class='case-study-list__btn' href='{$link}'>{$obj->name}</a>
                </li>
                ";
            }
        }
        echo "</ul>";
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $title = get_the_title();
                $url = get_the_permalink();
                $terms = get_the_terms(get_the_ID(), "features");
                $tags = "";
                foreach ($terms as $term) {
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
                <ul class='case-study-list__tags'>
                {$tags}
                </ul>
                <p class='case-study-list__catch'>{$title}</p>
                </div>
                </div>
                ";
            }
        } else {
            echo "該当する活用事例はございませんでした。";
        }
        echo "</section>";
        wp_reset_query();
    ?>
        <?php include "contact-section-featuresprice.php" ?>
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
            <?php include_once("tag-container-001.php") ?>

<?php include "popup_banner_business.php" ?>
<!-- <?php include "tidio-chat-business.php" ?> -->
</body>
</html>