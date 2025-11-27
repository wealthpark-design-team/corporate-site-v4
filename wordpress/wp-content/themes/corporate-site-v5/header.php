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
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/common.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/select2.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/remodal.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/remodal-default-theme.css">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/fonts/iconfont/material-icons.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<script src="<?php echo get_template_directory_uri()."/" ?>js/jquery-3.1.1.min.js"></script>
<script src="<?php echo get_template_directory_uri()."/" ?>js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri()."/" ?>js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri()."/" ?>js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri()."/" ?>js/select2.full.min.js"></script>
<script src="<?php echo get_template_directory_uri()."/" ?>js/remodal.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
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
<body class="drawer drawer--top">
<div id="page" class="whole-page">
  <header class="header--transparent">
    <div class="header--transparent__logo">
      <a href="<?php echo esc_url( home_url( '/corporate' ) ); ?>"><img src="<?php echo get_template_directory_uri() ?>/corporate/img/header_logo.png" alt="WealthPark" /></a>
    </div>
    <ul class="header--transparent__menu-box">
      <li class="header--transparent__menu">
        <a href="<?php echo esc_url( home_url( '/news' ) ); ?>"><?php _e("menu.news", 'wp-next-landing-page'); ?></a>
      </li>
      <li class="header--transparent__menu">
        <a href="<?php echo esc_url( home_url( '/corporate-service' ) ); ?>"><?php _e("menu.service", 'wp-next-landing-page'); ?></a>
      </li>
      <li class="header--transparent__menu">
        <a href="<?php echo esc_url( home_url( '/corporate-corporate' ) ); ?>"><?php _e("menu.company", 'wp-next-landing-page'); ?></a>
      </li>
    </ul>
  </header>
	<div id="content" class="site-content">
