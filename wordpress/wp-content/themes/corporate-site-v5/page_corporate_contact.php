<?php
/*
Template Name: Corporate Site - Contact
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<title>WealthPark | <?php _e("page-caption.contact", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("app.meta_description", 'wp-next-landing-page'); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="WealthPark | <?php _e("page-caption.contact", 'wp-next-landing-page'); ?>">
<meta property="og:description" content="<?php _e("app.meta_description", 'wp-next-landing-page'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja/corporate" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en/corporate" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc/corporate" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc/corporate" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc/corporate" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc/corporate" />
<script src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>
  <?php include "header-common.php" ?>
  <section class="page-name">
    <div class="page-name__inner">
      <h1 class="page-name__title">Contact</h1>
      <p class="page-name__caption"><?php _e("page-caption.contact", 'wp-next-landing-page'); ?></p>
    </div>
  </section>
  <section class="container card-list">
    <div class="container__inner card-list__inner">
      <ul class="card-list__items">
        <li class="card-list__item">
          <!-- <p class="card-list__item-number">CONTACT: 01</p> -->
          <figure class="card-list__item-thumb">
            <a href="<?php echo esc_url( home_url( '/business/contact/' ) ); ?>"><i class="material-icons">business</i></a>
          </figure>
          <h2 class="card-list__item-lead"><?php _e("department.wp-business", 'wp-next-landing-page'); ?></h2>
          <p class="card-list__item-company"><?php _e("department.description.wp-business", 'wp-next-landing-page'); ?></p>
          <div class="card-list__item-button">
            <div class="button">
              <a href="<?php echo esc_url( home_url( '/business/contact/' ) ); ?>"><?php _e("button.contact", 'wp-next-landing-page'); ?></a>
            </div>
          </div>
        </li>
        <li class="card-list__item">
          <figure class="card-list__item-thumb">
            <a href="<?php echo esc_url( home_url( '/corporate/contact/wp-am/' ) ); ?>"><i class="material-icons">assessment</i></a>
          </figure>
          <h2 class="card-list__item-lead"><?php _e("department.wp-am", 'wp-next-landing-page'); ?></h2>
          <p class="card-list__item-company"><?php _e("department.description.wp-am", 'wp-next-landing-page'); ?></p>
          <div class="card-list__item-button">
            <div class="button">
              <a href="<?php echo esc_url( home_url( '/corporate/contact/wp-am/' ) ); ?>"><?php _e("button.contact", 'wp-next-landing-page'); ?></a>
            </div>
          </div>
        </li>
        <li class="card-list__item">
          <figure class="card-list__item-thumb">
            <a href="<?php echo esc_url( home_url( '/corporate/contact/wp-pm/' ) ); ?>"><i class="material-icons">home</i></a>
          </figure>
          <h2 class="card-list__item-lead"><?php _e("department.wp-pm", 'wp-next-landing-page'); ?></h2>
          <p class="card-list__item-company"><?php _e("department.description.wp-pm", 'wp-next-landing-page'); ?></p>
          <div class="card-list__item-button">
            <div class="button">
              <a href="<?php echo esc_url( home_url( '/corporate/contact/wp-pm/' ) ); ?>"><?php _e("button.contact", 'wp-next-landing-page'); ?></a>
            </div>
          </div>
        </li>
        <li class="card-list__item">
          <figure class="card-list__item-thumb">
            <a href="<?php echo esc_url( home_url( '/corporate-contact-recruit/' ) ); ?>"><i class="material-icons">assignment_ind</i></a>
          </figure>
          <h2 class="card-list__item-lead"><?php _e("department.recruit", 'wp-next-landing-page'); ?></h2>
          <p class="card-list__item-company"><?php _e("department.description.wp-recruit", 'wp-next-landing-page'); ?></p>
          <div class="card-list__item-button">
            <div class="button">
              <a href="<?php echo esc_url( home_url( '/corporate-contact-recruit/' ) ); ?>"><?php _e("button.contact", 'wp-next-landing-page'); ?></a>
            </div>
          </div>
        </li>
        <li class="card-list__item">
          <figure class="card-list__item-thumb">
            <a href="<?php echo esc_url( home_url( '/corporate/contact/pr/' ) ); ?>"><i class="material-icons">question_answer</i></a>
          </figure>
          <h2 class="card-list__item-lead"><?php _e("department.pr", 'wp-next-landing-page'); ?></h2>
          <p class="card-list__item-company"><?php _e("department.description.wp-pr", 'wp-next-landing-page'); ?></p>
          <div class="card-list__item-button">
            <div class="button">
              <a href="<?php echo esc_url( home_url( '/corporate/contact/pr/' ) ); ?>"><?php _e("button.contact", 'wp-next-landing-page'); ?></a>
            </div>
          </div>
        </li>
        <li class="card-list__item">
          <figure class="card-list__item-thumb">
            <a href="<?php echo esc_url( home_url( '/contact/owner/' ) ); ?>"><i class="material-icons">devices</i></a>
          </figure>
          <h2 class="card-list__item-lead">
            <?php _e("page-title.contact-owner", 'wp-next-landing-page'); ?>
          </h2>
          <p class="card-list__item-company">
            <?php _e("contact-owner.description", 'wp-next-landing-page'); ?>
          </p>
          <div class="card-list__item-button">
            <div class="button">
              <a href="<?php echo esc_url( home_url( '/contact/owner/' ) ); ?>"><?php _e("button.contact", 'wp-next-landing-page'); ?></a>
            </div>
          </div>
        </li>
        <li class="card-list__item">
          <figure class="card-list__item-thumb">
            <a href="<?php echo esc_url( home_url( '/contact/report-abuse/' ) ); ?>"><i class="material-icons">report</i></a>
          </figure>
          <h2 class="card-list__item-lead">
            <?php _e("contact.report-abuse-list-title", 'wp-next-landing-page'); ?>
          </h2>
          <p class="card-list__item-company">
            <?php _e("contact.report-abuse-excerpt", 'wp-next-landing-page'); ?>
          </p>
          <div class="card-list__item-button">
            <div class="button">
              <a href="<?php echo esc_url( home_url( '/contact/report-abuse/' ) ); ?>"><?php _e("button.contact", 'wp-next-landing-page'); ?></a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
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
