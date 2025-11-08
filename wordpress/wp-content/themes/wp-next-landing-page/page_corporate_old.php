<?php
/*
Template Name: Corporate Site - Dev
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include_once("tag_facebook_pixel.php") ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
<meta name="apple-itunes-app" content="app-id=1068127268">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc" />
<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/manifest.json">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slick.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/slick-theme.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/select2.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/remodal.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/remodal-default-theme.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/fonts/iconfont/material-icons.css">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/select2.full.min.js"></script>
<script src="<?php echo get_template_directory_uri() ?>/js/remodal.js"></script>
<script>
    function isWeixinOnIOS() {
        var ua = navigator.userAgent.toLowerCase();
        return ( (/micromessenger/.test(ua)) && /ipad|iphone|ipod/.test(ua) ) ? true : false;
    }
</script>
<!-- start Mixpanel --><script type="text/javascript">(function(e,a){if(!a.__SV){var b=window;try{var c,l,i,j=b.location,g=j.hash;c=function(a,b){return(l=a.match(RegExp(b+"=([^&]*)")))?l[1]:null};g&&c(g,"state")&&(i=JSON.parse(decodeURIComponent(c(g,"state"))),"mpeditor"===i.action&&(b.sessionStorage.setItem("_mpcehash",g),history.replaceState(i.desiredHash||"",e.title,j.pathname+j.search)))}catch(m){}var k,h;window.mixpanel=a;a._i=[];a.init=function(b,c,f){function e(b,a){var c=a.split(".");2==c.length&&(b=b[c[0]],a=c[1]);b[a]=function(){b.push([a].concat(Array.prototype.slice.call(arguments,
        0)))}}var d=a;"undefined"!==typeof f?d=a[f]=[]:f="mixpanel";d.people=d.people||[];d.toString=function(b){var a="mixpanel";"mixpanel"!==f&&(a+="."+f);b||(a+=" (stub)");return a};d.people.toString=function(){return d.toString(1)+".people (stub)"};k="disable time_event track track_pageview track_links track_forms register register_once alias unregister identify name_tag set_config reset people.set people.set_once people.increment people.append people.union people.track_charge people.clear_charges people.delete_user".split(" ");
        for(h=0;h<k.length;h++)e(d,k[h]);a._i.push([b,c,f])};a.__SV=1.2;b=e.createElement("script");b.type="text/javascript";b.async=!0;b.src="undefined"!==typeof MIXPANEL_CUSTOM_LIB_URL?MIXPANEL_CUSTOM_LIB_URL:"file:"===e.location.protocol&&"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js".match(/^\/\//)?"https://cdn.mxpnl.com/libs/mixpanel-2-latest.min.js":"//cdn.mxpnl.com/libs/mixpanel-2-latest.min.js";c=e.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}})(document,window.mixpanel||[]);
    mixpanel.init("11816fce65ba5d021bffb451b7cc35db");</script><!-- end Mixpanel -->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php if (qtrans_getLanguage() == "sc") { ?>
    <script>
        function isWeixinOnIOS() {
            var ua = navigator.userAgent.toLowerCase();
            return ( (/micromessenger/.test(ua)) && /ipad|iphone|ipod/.test(ua) ) ? true : false;
        }
        function closeWeChatInst() {
            $("#wechat-help").hide();
        }
        $(document).ready(function() {
            $(".btn.app-store").click(function() {
                if (isWeixinOnIOS()) {
                    $("#wechat-help").show();
                    preventDefault();
                }
            })
        })
    </script>
    <div id="wechat-help" style="display: none">
        <img src="<?php echo get_template_directory_uri()."/" ?>/img/sc/wechat_help.svg" style="width: 100%">
        <a href="javascript:closeWeChatInst()" class="closeWeChatInst">
            <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 20" style="enable-background:new 0 0 20 20;position: relative;top: 2px;margin-right: 5px;" xml:space="preserve" height="15">
		<style type="text/css">
            .st0{fill:#666666;}
        </style>
                <rect x="9.1" y="-2.3" transform="matrix(0.7056 0.7086 -0.7086 0.7056 10.0303 -4.1421)" class="st0" width="1.9" height="24.6"></rect>
                <rect x="9.1" y="-2.3" transform="matrix(-0.7086 0.7056 -0.7056 -0.7086 24.1421 10.0303)" class="st0" width="1.9" height="24.6"></rect>
		</svg>
            关闭提示</a>
    </div>
<?php } ?>
<div id="page" class="whole-page">
  <header class="wp_nav">
        <div class="wp_container">
<!--            <a class="branding" alt="--><?php //_e("WealthPark", 'wp-next-landing-page'); ?><!--" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--">-->
            <a class="branding" alt="<?php _e("WealthPark", 'wp-next-landing-page'); ?>" href="<?php if (is_home()) { echo '#page'; } else { echo esc_url( get_home_url() ); }?>">
                <div class="logo"></div>
                <h2 class="logotype"><?php _e("WealthPark", 'wp-next-landing-page'); ?></h2>
            </a>
            <nav class="top-bar-nav" id="top-bar-nav">
                <ul class="nav navbar-nav nav-menu" role="tablist">
                  <li role="presentation"><a href="<?php echo esc_url( home_url( '/' ) ); ?>news/"><?php _e("News", 'wp-next-landing-page'); ?></a></li>
                  <li role="presentation"><a href="<?php echo esc_url( home_url( '/' ) ); ?>app/"><?php _e("menu.owner-app", 'wp-next-landing-page'); ?></a></li>
                  <li role="presentation"><a href="<?php echo esc_url( home_url( '/' ) ); ?>business/"><?php _e("menu.wp-business", 'wp-next-landing-page'); ?></a></li>
                </ul>
                <ul class="nav-actions">
                  <li class="lang-full">
                    <select name="lang" class="lang-dropdown">
                      <?php
                        $lang_list = qtrans_getSortedLanguages();
                        $current_lang = qtrans_getLanguage();
                        foreach ($lang_list as $lang) {
                            if ($lang == $current_lang) {
                                echo '<option selected="selected" value="' . $lang . '">' . __("lang.$lang", 'wp-next-landing-page') . '</option>';
                            } else {
                                echo '<option value="' . $lang . '/corporate' . '">' . __("lang.$lang", 'wp-next-landing-page') . '</option>';
                            }
                        }
                      ?>
                    </select>
                  </li>
                  <li>
                    <a href="#contact-by-type" class="btn"><?php _e("menu.contact", 'wp-next-landing-page'); ?></a>
                  </li>
                  <!-- <li><a href="#demo" class="btn btn-primary"><?php _e("menu.demo_request", 'wp-next-landing-page'); ?></a></li> -->
                </ul>
            </nav>
        </div>
  </header>
  <div id="content" class="site-content">
<div class="one_page clearfix">
    <div class="wp_container">
        <section id="section-top">
            <!-- 最新ニュース -->
            <?php
                $queryObject = new WP_Query( 'post_type=news&posts_per_page=1' );
                // The Loop!
                if ($queryObject->have_posts()) {
                    ?>
                    <div class="headline-news">
                        <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
                        <div class="headline-news-info">
                            <span class="headline-news-date">
                                <?php echo get_the_date("Y.n.j"); ?>
                            </span>
                            <span class="headline-news-category">
                                <?php $terms = get_the_terms( $post->ID, 'news_category' );
                                if (!empty($terms)) {
                                    foreach($terms as $term) {
                                        echo $term->name;
                                    }
                                }
                                ?>
                            </span>
                        </div>
                        <div class="headline-news-content">
                            <div class="headline-news-content-inner">
                                <div class="headline-news-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <?php } ?>
                                <div class="headline-news-link">
                                    <a href="<?php echo get_post_type_archive_link( 'news' ); ?>"><?php _e("news_list", 'wp-next-landing-page') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            ?>
            <h2>
                <span class="brand-name"><?php _e("WealthPark", 'wp-next-landing-page'); ?></span>
                <span class="slogan-message"><?php _e("Manage your investment with ease.", 'wp-next-landing-page'); ?></span>
            </h2>
            <p class="explain"><?php _e("banner.message", 'wp-next-landing-page'); ?></p>
            <ul class="download-stores">
                <?php include "download-stores.php" ?>
            </ul>
        </section>
        <section id="section-service">
            <h4 class="section-name"><?php _e("section.service.type_name", 'wp-next-landing-page'); ?></h4>
            <h2 class="section-title"><?php _e("section.service.title.h2", 'wp-next-landing-page'); ?></h2>

            <h3><?php _e("section.service.title.h3.f1", 'wp-next-landing-page'); ?></h3>
            <ul class="bullet-list">
                <?php _e("section.service.list_items.f1", 'wp-next-landing-page'); ?>
            </ul>

            <h3><?php _e("section.service.title.h3.f2", 'wp-next-landing-page'); ?></h3>
            <ul class="bullet-list">
                <?php _e("section.service.list_items.f2", 'wp-next-landing-page'); ?>
            </ul>
        </section>

        <section id="section-feature">
            <h4 class="section-name"><?php _e("section.feature.type_name", 'wp-next-landing-page'); ?></h4>
            <h2 class="section-title"><?php _e("section.feature.title.h2", 'wp-next-landing-page'); ?></h2>

            <h3><?php _e("section.feature.title.h3", 'wp-next-landing-page'); ?></h3>
            <ul class="feature-points col-3s">
                <li>
                    <h4 class="feature-title"><?php _e("section.feature_point.f1.title", 'wp-next-landing-page'); ?></h4>
                    <ul class="bullet-list">
                        <?php _e("section.feature_point.f1.items", 'wp-next-landing-page'); ?>
                    </ul>
                </li>
                <li>
                    <h4 class="feature-title"><?php _e("section.feature_point.f2.title", 'wp-next-landing-page'); ?></h4>
                    <ul class="bullet-list">
                        <?php _e("section.feature_point.f2.items", 'wp-next-landing-page'); ?>
                    </ul>
                </li>
                <li>
                    <h4 class="feature-title"><?php _e("section.feature_point.f3.title", 'wp-next-landing-page'); ?></h4>
                    <ul class="bullet-list">
                        <?php _e("section.feature_point.f3.items", 'wp-next-landing-page'); ?>
                    </ul>
                </li>
            </ul>
            <ul class="feature-points col-2s">
                <li>
                    <h4 class="feature-title"><?php _e("section.feature_point.f4.title", 'wp-next-landing-page'); ?></h4>
                    <ul class="bullet-list">
                        <?php _e("section.feature_point.f4.items", 'wp-next-landing-page'); ?>
                    </ul>
                </li>
                <li>
                    <h4 class="feature-title"><?php _e("section.feature_point.f5.title", 'wp-next-landing-page'); ?></h4>
                    <ul class="bullet-list">
                        <?php _e("section.feature_point.f5.items", 'wp-next-landing-page'); ?>
                    </ul>
                </li>
            </ul>
        </section>

        <section id="section-how">
            <h2 class="section-title"><?php _e("section.how.title.h2", 'wp-next-landing-page'); ?></h2>
            <h3><?php _e("section.how.title.h3", 'wp-next-landing-page'); ?></h3>

            <ul id="carousel-filters" class="carousel-filters">
                <li class="">
                    <div class="track-icon icon-1"></div>
                    <span class="track-title"><?php _e("section.how.f1.track_title", 'wp-next-landing-page'); ?></span>
                </li>
                <li class="">
                    <div class="track-icon icon-2"></div>
                    <span class="track-title"><?php _e("section.how.f2.track_title", 'wp-next-landing-page'); ?></span>
                </li>
                <li class="">
                    <div class="track-icon icon-3"></div>
                    <span class="track-title"><?php _e("section.how.f3.track_title", 'wp-next-landing-page'); ?></span>
                </li>
                <li class="">
                    <div class="track-icon icon-4"></div>
                    <span class="track-title"><?php _e("section.how.f4.track_title", 'wp-next-landing-page'); ?></span>
                </li>
                <li class="">
                    <div class="track-icon icon-5"></div>
                    <span class="track-title"><?php _e("section.how.f5.track_title", 'wp-next-landing-page'); ?></span>
                </li>
            </ul>
            <div class="carousel-sliders">
                <div class="slide-item">
                    <div class="screenshot" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/<?php echo qtrans_getLanguage()?>/slide1.png)"></div>
                    <div class="slide-content">
                        <h3><?php _e("section.how.f1.title", 'wp-next-landing-page'); ?></h3>
                        <?php _e("section.how.f1.content", 'wp-next-landing-page'); ?>

                        <ul class="download-stores desktop">
                            <?php include "download-stores.php" ?>
                        </ul>
                    </div>

                </div>
                <div class="slide-item">
                    <div class="screenshot" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/<?php echo qtrans_getLanguage()?>/slide2.png)"></div>
                    <div class="slide-content">
                        <h3><?php _e("section.how.f2.title", 'wp-next-landing-page'); ?></h3>
                        <?php _e("section.how.f2.content", 'wp-next-landing-page'); ?>

                        <ul class="download-stores desktop">
                            <?php include "download-stores.php" ?>
                        </ul>
                    </div>

                </div>
                <div class="slide-item">
                    <div class="screenshot" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/<?php echo qtrans_getLanguage()?>/slide3.png)"></div>
                    <div class="slide-content">
                        <h3><?php _e("section.how.f3.title", 'wp-next-landing-page'); ?></h3>
                        <?php _e("section.how.f3.content", 'wp-next-landing-page'); ?>

                        <ul class="download-stores desktop">
                            <?php include "download-stores.php" ?>
                        </ul>
                    </div>

                </div>
                <div class="slide-item">
                    <div class="screenshot" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/<?php echo qtrans_getLanguage()?>/slide4.png)"></div>
                    <div class="slide-content">
                        <h3><?php _e("section.how.f4.title", 'wp-next-landing-page'); ?></h3>
                        <?php _e("section.how.f4.content", 'wp-next-landing-page'); ?>

                        <ul class="download-stores desktop">
                            <?php include "download-stores.php" ?>
                        </ul>
                    </div>

                </div>
                <div class="slide-item">
                    <div class="screenshot" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/<?php echo qtrans_getLanguage()?>/slide5.png)"></div>
                    <div class="slide-content">
                        <h3><?php _e("section.how.f5.title", 'wp-next-landing-page'); ?></h3>
                        <?php _e("section.how.f5.content", 'wp-next-landing-page'); ?>

                        <ul class="download-stores desktop">
                            <?php include "download-stores.php" ?>
                        </ul>
                    </div>

                </div>

            </div>

            <ul class="mobile download-stores">
                <?php include "download-stores.php" ?>
            </ul>

        </section>

        <section id="section-team">
            <h4 class="section-name"><?php _e("section.team.type_name", 'wp-next-landing-page'); ?></h4>
            <h2 class="section-title"><?php _e("section.team.title.h2", 'wp-next-landing-page'); ?></h2>

            <h3><?php _e("section.team.title.h3", 'wp-next-landing-page'); ?></h3>
            <div id="member-wrapper" class="member-wrapper">
                <?php

                // Get all managers
                $the_query = new WP_Query(array(
                    'post_type'			=> 'member',
                    'posts_per_page'	=> -1,
                    'meta_key'			=> 'display_group',
                    'meta_query'        => array(
                        'key'   => 'display_group',
                        'value' => 'manager'
                    )
                ));

                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <ul class="member-profiles manager clearfix">
                        <?php $teamOutput = "{" ?>
                        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <li id="member-<?php the_ID(); ?>">
                                <a href="javascript:popupMember('<?php the_ID(); ?>')">
                                    <span class="member-img" style="background-image: url(<?php echo get_field('avatar'); ?>)"></span>
                                    <span class="member-full-name"><?php the_title(); ?></span>
                                    <span class="member-position"><?php echo get_field('position'); ?></span>
                                </a>
                            </li>
                            <?php
                                $teamOutput = $teamOutput . "'" . get_the_ID()
                                . "' : { avatar : '" . get_field('avatar')
                                    . "', fullName : '" . get_the_title()
                                    . "', position : '" . get_field('position')
                                    . "', description : '" . get_field('description') . "' }, ";
                            ?>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

                <?php wp_reset_query();	?>


                <?php

                // Get all staff
                $the_query = new WP_Query(array(
                    'post_type'			=> 'member',
                    'posts_per_page'	=> -1,
                    'meta_key'			=> 'display_group',
                    'meta_query'        => array(
                        'key'   => 'display_group',
                        'value' => 'staff'
                    )
                ));

                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <ul class="member-profiles staff clearfix" style="display: none;">
                        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <li id="member-<?php the_ID(); ?>">
<!--                                <a href="javascript:popupMember('--><?php //the_ID(); ?><!--')">-->
                                <a href="javascript:void()">
                                    <span class="member-img" style="background-image: url(<?php echo get_field('avatar'); ?>)"></span>
                                    <span class="member-full-name"><?php the_title(); ?></span>
                                    <span class="member-position"><?php echo get_field('position'); ?></span>
                                </a>
                            </li>
                            <?php
                            $teamOutput = $teamOutput . "'" . get_the_ID()
                                . "' : { avatar : '" . get_field('avatar')
                                . "', fullName : '" . get_the_title()
                                . "', position : '" . get_field('position')
                                . "', description : '" . get_field('description') . "' }, ";
                            ?>
                        <?php endwhile; ?>
                    </ul>
                    <script>
                        var teamOutput = <?php
                            $teamOutput = $teamOutput . "}";
                            $teamOutput = trim(preg_replace('/\s\s+/', ' ', $teamOutput));
                            echo $teamOutput; ?>;
                    </script>
                <?php endif; ?>

                <?php wp_reset_query();	?>
            </div>
            <a href="javascript:expandMember();" id="btn-member-expand" class="btn member-expand mobile"><span class="more"><?php _e("section.team.button.more", 'wp-next-landing-page'); ?></span></a>
        </section>


    </div>
</div>
<div class="seperated-section">
    <div class="wp_container">
        <section id="section-testimonials">
            <h4 class="section-name"><?php _e("section.testimonials.type_name", 'wp-next-landing-page'); ?></h4>
            <h2 class="section-title"><?php _e("section.testimonials.title.h2", 'wp-next-landing-page'); ?></h2>

            <h3><?php _e("section.testimonials.title.h3", 'wp-next-landing-page'); ?></h3>

            <?php

            // Get all Testimonials
            $the_query = new WP_Query(array(
                'post_type'			=> 'testimonial',
                'posts_per_page'	=> -1,
            ));

            ?>
            <?php if( $the_query->have_posts() ): ?>
                <ul class="testimonials">
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <li id="testimonial-<?php the_ID(); ?>">
                            <p class="testimonial-content"><?php echo get_field('content'); ?></p>
                            <div class="clearfix">
                                <span class="testimonial-author"><?php echo get_field('customer'); ?></span>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <?php wp_reset_query();	?>
        </section>

        <section id="section-about">
            <h4 class="section-name"><?php _e("section.about.type_name", 'wp-next-landing-page'); ?></h4>
            <h2 class="section-title"><?php _e("section.about.title.h2", 'wp-next-landing-page'); ?></h2>
            <p class="company-message"><?php _e("section.about.message", 'wp-next-landing-page'); ?></p>

            <table class="striped about-company">
                <tr>
                    <th><?php _e("section.about.table.tr-1.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-1.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-2.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-2.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-3.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-3.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-4.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-4.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-5.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-5.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-6.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-6.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-7.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-7.td", 'wp-next-landing-page'); ?></td>
                </tr>
            </table>

            <!-- 最新ニュース5件 -->
            <?php
            $queryObject = new WP_Query( 'post_type=news&posts_per_page=5' );
            // The Loop!
            if ($queryObject->have_posts()) {
                ?>
                <div class="news-container">
                    <ul class="news-lists">
                    <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
                    <li class="news-list">
                        <span class="date"><?php echo get_the_date("Y.n.j"); ?></span>
                        <span class="category"><?php
                            $terms = get_the_terms( $post->ID, 'news_category' );
                            if (!empty($terms)) {
                                foreach($terms as $term) {
                                    echo $term->name;
                                }
                            }
                        ?></span>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php } ?>
                    </ul>
                    <div class="news-btn">
                        <a href="<?php echo get_post_type_archive_link( 'news' ); ?>"><?php _e("news_list", 'wp-next-landing-page') ?></a>
                    </div>
                </div>
                <?php
            }
            ?>
        </section>

    </div>
</div>

<section id="section-modal-member" class="remodal" data-remodal-id="member">
    <div class="wp_container member-info-container">
        <button data-remodal-action="close" class="remodal-close"></button>
        <div class="content">
            <h2 class="section-title" id="member_modal_fullName"></h2>
            <h3 id="member_modal_position"></h3>
            <p id="member_modal_description"></p>
        </div>
    </div>
</section>

</div><!-- #content -->
<footer>
  <?php include "footer-main.php" ?>
  <div class="container sub-footer">
    <div class="sub-footer__inner">
      <ul class="sub-footer__navigation">
        <li><a href="/corporate/#term_of_use"><?php _e("footer.menu.terms", 'wp-next-landing-page'); ?></a></li>
        <li><a href="/corporate/#privacy_policy"><?php _e("footer.menu.privacy", 'wp-next-landing-page'); ?></a></li>
        <li><a href="/corporate/#security"><?php _e("footer.menu.information", 'wp-next-landing-page'); ?></a></li>
      </ul>
    </div>
  </div>
</footer>
</div><!-- #page -->

<section id="section-contact" class="remodal" data-remodal-id="contact">
  <div class="wp_container">
      <button data-remodal-action="close" class="remodal-close"></button>
      <div id="contact-form-container" class="container-form">
          <h2 class="section-title"><?php _e("section.contact.title.h2", 'wp-next-landing-page'); ?></h2>
          <h3><?php _e("section.contact.title.h3", 'wp-next-landing-page'); ?></h3>
          <?php echo do_shortcode( '[contact-form-7 id="77" html_id="contact_form" title="Contact"]' ); ?>
      </div>
      <div id="contact-message-container" class="message-container success" style="display: none;">
          <h2 class="section-title"><?php _e("section.contact_success.title.h2", 'wp-next-landing-page'); ?></h2>
          <h3><?php _e("section.contact_success.title.h3", 'wp-next-landing-page'); ?></h3>
          <button class="btn btn-primary" data-remodal-action="close"><?php _e("section.form.button.back", 'wp-next-landing-page'); ?></button>
      </div>
  </div>
</section>

<section id="section-contact-by-type" class="remodal" data-remodal-id="contact-by-type">
  <div class="wp_container">
      <button data-remodal-action="close" class="remodal-close"></button>
      <div id="contact-multi-form-container" class="container-form">
          <h2 class="section-title"><?php _e("section.contact.title.h2", 'wp-next-landing-page'); ?></h2>
          <h3><?php _e("section.contact.title.h3", 'wp-next-landing-page'); ?></h3>
          <div class="row vertical-controls col-1">
              <div class="col">
                  <label for="contact_type"><?php _e("contac_type.label", 'wp-next-landing-page'); ?></label>
                  <select name="contact_type" id="contact_type">
                      <option value=""></option>
                      <option value="biz"><?php _e("contac_type.saas", 'wp-next-landing-page'); ?></option>
                      <option value="mgt"><?php _e("contac_type.vertical", 'wp-next-landing-page'); ?></option>
                      <option value="recruit"><?php _e("contac_type.recruit", 'wp-next-landing-page'); ?></option>
                      <option value="media"><?php _e("contac_type.media", 'wp-next-landing-page'); ?></option>
                      <option value="other"><?php _e("contac_type.other", 'wp-next-landing-page'); ?></option>
                  </select>
              </div>
          </div>
          <!-- Contact Type -->
          <div class="type-container" id="contact_biz">
              <?php echo do_shortcode( '[contact-form-7 id="848" html_id="contact_form" title="biz"]' ); ?>
          </div>
          <div class="type-container" id="contact_mgt">
              <?php echo do_shortcode( '[contact-form-7 id="852" html_id="contact_form" title="mgt"]' ); ?>
          </div>
          <div class="type-container" id="contact_recruit">
              <?php echo do_shortcode( '[contact-form-7 id="858" html_id="contact_recruit" title="recruit"]' ); ?>
          </div>
          <div class="type-container" id="contact_media">
              <?php echo do_shortcode( '[contact-form-7 id="860" html_id="contact_media" title="media"]' ); ?>
          </div>
          <div class="type-container" id="contact_other">
              <?php echo do_shortcode( '[contact-form-7 id="859" html_id="contact_other" title="other"]' ); ?>
          </div>
          <!-- Contact Type -->
      </div>
      <div id="contact-multi-message-container" class="message-container success" style="display: none;">
          <h2 class="section-title"><?php _e("section.contact_success.title.h2", 'wp-next-landing-page'); ?></h2>
          <h3><?php _e("section.contact_success.title.h3", 'wp-next-landing-page'); ?></h3>
          <button class="btn btn-primary" data-remodal-action="close"><?php _e("section.form.button.back", 'wp-next-landing-page'); ?></button>
      </div>
  </div>
</section>

<section id="section-demo" class="remodal" data-remodal-id="demo">
  <div class="wp_container">
      <button data-remodal-action="close" class="remodal-close"></button>
      <div id="demo-form-container" class="container-form">
          <h2 class="section-title"><?php _e("section.demo.title.h2", 'wp-next-landing-page'); ?></h2>
          <h3><?php _e("section.demo.title.h3", 'wp-next-landing-page'); ?></h3>
          <?php echo do_shortcode( '[contact-form-7 id="99" html_id="contact_form" title="Request a Demo"]' ); ?>
      </div>
      <div id="demo-message-container" class="message-container success" style="display: none;">
          <h2 class="section-title"><?php _e("section.demo_success.title.h2", 'wp-next-landing-page'); ?></h2>
          <h3><?php _e("section.demo_success.title.h3", 'wp-next-landing-page'); ?></h3>
          <ul class="download-qr desktop">
              <?php include "download-stores-qr.php" ?>
          </ul>
          <ul class="download-stores mobile">
              <?php include "download-stores.php" ?>
          </ul>
      </div>
  </div>
</section>

<section id="section-term" class="remodal" data-remodal-id="term_of_use">
  <div class="wp_container">
      <button data-remodal-action="close" class="remodal-close"></button>
      <div id="term-container" class="container-form">
          <h2 class="section-title"><?php _e("page.term_of_use", 'wp-next-landing-page'); ?></h2>
          <div class="content" id="term_content"></div>
      </div>
  </div>
</section>

<section id="section-privacy" class="remodal" data-remodal-id="privacy_policy">
  <div class="wp_container">
      <button data-remodal-action="close" class="remodal-close"></button>
      <div id="privacy-container" class="container-form">
          <h2 class="section-title"><?php _e("page.privacy_policy", 'wp-next-landing-page'); ?></h2>
          <div class="content" id="privacy_content"></div>
      </div>
  </div>
</section>

<section id="section-security" class="remodal" data-remodal-id="security">
  <div class="wp_container">
      <button data-remodal-action="close" class="remodal-close"></button>
      <div id="security-container" class="container-form">
          <h2 class="section-title"><?php _e("page.information_security_guidelines", 'wp-next-landing-page'); ?></h2>
          <div class="content" id="security_content"></div>
      </div>
  </div>
</section>

<?php wp_footer(); ?>

<script>

  $(document).on('opening', '#section-privacy', function () {
      $.get('privacy_policy', function (data) {
          $('#privacy_content').html($(data).find("#main").html());
      });
  });

  $(document).on('opening', '#section-term', function () {
      $.get('terms', function (data) {
          $('#term_content').html($(data).find("#main").html());
      });
  });

  $(document).on('opening', '#section-security', function () {
      $.get('info_security', function (data) {
          $('#security_content').html($(data).find("#main").html());
      });
  });

  $(function() {

      $('body').scrollspy({ target: '#top-bar-nav', offset: 200 });

      $(document).on('click', '.nav-menu a, a.branding', function(event) {
          var $anchor = $(this);
          $('html, body').stop().animate({
              scrollTop: $($anchor.attr('href')).offset().top - 140
          }, 1000, 'easeInOutExpo');
          event.preventDefault();
      });

      var site_url = "<?php echo get_site_url(); ?>/";
      var current_lang = "<?php echo qtrans_getLanguage();?>";
      $(".lang-dropdown").change(function() {
          current_lang = $(this).find("option:selected")[0].value;
          console.log(site_url + current_lang);
          window.location.href = site_url + current_lang;
      })
  });

  function expandMember() {
//        $memberWrapper.height("auto");
      $("ul.member-profiles.staff").addClass("show");
      $("#btn-member-expand").hide();
  }

  function contactComplete() {
      $(".container-form").fadeOut();
      $(".message-container").fadeIn();
  }

  function demoComplete() {
      $("#demo-form-container").fadeOut();
      $("#demo-message-container").fadeIn();
  }

  var memberModal = $('[data-remodal-id=member]').remodal();

  function popupMember(mid) {
      $("#member_modal_thumbnail").attr("style", "background-image: url('" + teamOutput[mid]["avatar"]) + "')";
      $("#member_modal_fullName").text(teamOutput[mid]["fullName"]);
      $("#member_modal_position").text(teamOutput[mid]["position"]);
      $("#member_modal_description").html(teamOutput[mid]["description"]);
      memberModal.open();
  }

  $(document).ready(function() {

      $("select").select2({
          minimumResultsForSearch: Infinity,
          placeholder: "<?php _e("option.placeholder", 'wp-next-landing-page') ?>"
      });

      $(".lang-full select").select2({
          minimumResultsForSearch: Infinity,
          width: 'resolve',
          containerCss: "full",
          dropdownCssClass: "full",
          dropdownAutoWidth : true

      });

      $("#must_agree").change(function() {
          if ($("#must_agree").is(":checked")) {
              console.log("true");
              $("#contact_agree").prop('checked', true);
              $("#contact_submit").prop('disabled', false);

          } else {
              console.log("false");
              $("#contact_agree").prop('checked', false);
              $("#contact_submit").prop('disabled', true);
          }
      });

      $("#demo_must_agree").change(function() {
          if ($("#demo_must_agree").is(":checked")) {
              $("#demo_agree").prop('checked', true);
              $("#demo_submit").prop('disabled', false);
          } else {
              $("#demo_agree").prop('checked', false);
              $("#demo_submit").prop('disabled', true);
          }
      });

      $(".must_agree").change(function() {
          var type = $(this).data("type");
          $("#contact_"+type+"_agree").click();
      });

      $('#carousel-filters').slick({
          slidesToShow: 5,
          slidesToScroll: 1,
          slidesPerRow: 0,
          asNavFor: '.carousel-sliders',
          dots: false,
          autoplay: false,
          autoplaySpeed: 4500,
          pauseOnHover: true,
          arrows: false,
          dots: false,
          centerMode: false,
          focusOnSelect: true
      });

      $('.carousel-sliders').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          fade: false,
          dots: false,
          arrows: true,
          asNavFor: '#carousel-filters',
          responsive: [
              {
                  breakpoint: 481,
                  settings: {
                      arrows: true,
                      dots: true
                  }
              },
              {
                  breakpoint: 1279,
                  settings: {
                      arrows: false,
                      dots: true
                  }
              }
          ]
      });

      $("#contact_type").change(function() {
          switchType($(this).val(), true);
      });
  })

  $(document).on('opening', '.remodal', function (event) {
      if ($(event.target).data("remodalId") === "contact-by-type") {
          switchType(getParamFromUrl(), true);
      }
  });

  function getParamFromUrl() {
      var url = new URL(window.location);
      var contact_type = new URLSearchParams(url.search).get("contact_type");
      return contact_type;
  }

  function switchType(contact_type, push) {
      //$("form").reset();
      $(".type-container").removeClass("show");
      $("#contact_" + contact_type).addClass("show");
      $('#contact_type').val(contact_type).trigger('change.select2');
      if( push && window.history && window.history.pushState ){
          history.pushState(null,null,"?contact_type=" + contact_type + "#contact-by-type");
      }
  }

  window.onpopstate = function(event) {
      switchType(getParamFromUrl(), false);
  };

  $.fn.extend({
      trackChanges: function() {
          $(":input, select, textarea",this).change(function() {
              $(this.form).data("changed", true);
          });
      },
      isChanged: function() {
          return this.data("changed");
      }
  });


  // Hide Header on on scroll down
  var didScroll;
  var lastScrollTop = 0;
  var delta = 5;
  var navbarHeight = $('header').outerHeight();

  $(window).scroll(function(event){
      didScroll = true;
  });

  setInterval(function() {
      if (didScroll) {
          hasScrolled();
          didScroll = false;
      }
  }, 250);

  function hasScrolled() {
      var st = $(this).scrollTop();

      // Make sure they scroll more than delta
      if(Math.abs(lastScrollTop - st) <= delta)
          return;

      // If they scrolled down and are past the navbar, add class .nav-up.
      // This is necessary so you never see what is "behind" the navbar.
      if (st > lastScrollTop && st > navbarHeight){
          // Scroll Down
          $('header').removeClass('nav-down').addClass('nav-up');
      } else {
          // Scroll Up
          if(st + $(window).height() < $(document).height()) {
              $('header').removeClass('nav-up').addClass('nav-down');
          }
      }

      lastScrollTop = st;
  }
</script>
<?php include_once("ga_tracking.php") ?>
</body>
</html>
