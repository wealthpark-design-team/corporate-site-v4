<?php
/*
Template Name: Service Page - WPL - Download - Form Template
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
<title><?=get_field("document_name") ?> | WealthPark Lab</title>
<meta name="description" content="<?php _e("wpb_dl-form_meta-description", 'wp-next-landing-page'); ?>">
<meta property="og:title" content="Download | WealthPark Lab">
<meta property="og:type" content="website">
<!-- <meta property="og:url" content="https://wealth-park.com/business/" /> -->
<!-- <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/wpl/ogp-image_wpl-wp.jpg"> -->
<meta property="og:image" content="<?=get_the_post_thumbnail_url() ?>">
<meta property="og:site_name" content="WealthPark Business" />
<meta property="og:description" content="<?php _e("wpb_dl-form_meta-description", 'wp-next-landing-page'); ?>">
<meta name="twitter:card" content="summary_large_image" />
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja/business" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en/business" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc/business" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc/business" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc/business" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc/business" />
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>

</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<article class="download">
  <section class="download-main">
    <div class="download-main__box">
      <dl class="download-main__detail">
        <dt class="download-main__title">
          <?=get_field("document_name") ?>
        </dt>
        <dd class="download-main__description">
          <p><?php _e("wpb_dl-form_msg", 'wp-next-landing-page'); ?></p>
        </dd>
      </dl>
      <div class="download-main__thumbnail">
        <img loading='lazy' src="<?=get_the_post_thumbnail_url() ?>" alt="Document" />
      </div>
      <div class="download-main__preview">
        <div class="download-main__preview-wrap">
          <a href="<?=get_field('preview_image1') ?>">
            <img loading='lazy' src="<?=get_field('preview_image1') ?>" alt="Document" />
          </a>
        </div>
        <div class="download-main__preview-wrap">
          <a href="<?=get_field('preview_image2') ?>">
            <img loading='lazy' src="<?=get_field('preview_image2') ?>" alt="Document" />
          </a>
        </div>
      </div>
      <dl class="download-main__detail">
        <dd class="download-main__description">
          <?=get_field("document_description") ?><br>
            <?php if (get_field("previous_volume_url") != "") : ?>
              <a href="<?=get_field("previous_volume_url") ?>">
                <?=get_field("previous_volume_text") ?>
              </a>
            <?php endif; ?>
        </dd>
      </dl>
    </div>
    <div class="download-main__box">
      <section class="form-section--salesforce form-section--salesforce-half">
        <script>
          function check(){
            var a=document.search_form.q.value;
            if(a==""){
              return false;
            }else if(!a.match(/\S/g)){
              return false;
            }
          }
        </script>
        <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
        <form action="<?=get_field("form_src") ?>" method="post">
        <input type=hidden name="oid" value="00D2v000001XqKf">
        <input type=hidden name="retURL" value="https://wealth-park.com/ja/business-contact-completed/">
        <div class="form-block form-block--column">
          <div class="form-block__item-name">
            <span><?php _e("wpb_dl-form_mandatory", 'wp-next-landing-page'); ?></span>
            <label for="company"><?php _e("wpb_dl-form_item_company", 'wp-next-landing-page'); ?></label>
          </div>
          <div class="form-block__item">
            <input id="company" maxlength="40" name="company" size="20" type="text" pattern=".*\S+.*" required/>
          </div>
        </div>
        <div class="form-block form-block--column">
          <div class="form-block__item-name">
            <span><?php _e("wpb_dl-form_mandatory", 'wp-next-landing-page'); ?></span>
            <label for="last_name"><?php _e("wpb_dl-form_item_last-name", 'wp-next-landing-page'); ?></label>
          </div>
          <div class="form-block__item">
            <input id="last_name" maxlength="40" name="last_name" size="20" type="text" pattern=".*\S+.*" required/>
          </div>
        </div>
        <div class="form-block form-block--column">
          <div class="form-block__item-name">
            <span><?php _e("wpb_dl-form_mandatory", 'wp-next-landing-page'); ?></span>
            <label for="first_name"><?php _e("wpb_dl-form_item_first-name", 'wp-next-landing-page'); ?></label>
          </div>
          <div class="form-block__item">
            <input id="first_name" maxlength="40" name="first_name" size="20" type="text" pattern=".*\S+.*" required/>
          </div>
        </div>
        <div class="form-block form-block--column">
          <div class="form-block__item-name">
            <span><?php _e("wpb_dl-form_mandatory", 'wp-next-landing-page'); ?></span>
            <label for="email"><?php _e("wpb_dl-form_item_email", 'wp-next-landing-page'); ?></label>
          </div>
          <div class="form-block__item">
            <input id="email" maxlength="80" name="email" size="20" type="email" pattern=".+\.[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]" required/>
          </div>
        </div>
        <div class="form-block form-block--column">
          <div class="form-block__item-name">
            <label><?php _e("wpb_dl-form_item_comment", 'wp-next-landing-page'); ?></label>
          </div>
          <div class="form-block__item">
            <textarea id="inquiry_content" name="inquiry_content" rows="25" type="text" wrap="soft" pattern=".*\S+.*"></textarea>
          </div>
        </div>
        <div class="form-block--hidden">
          <div class="form-block__item-name">
            <label>郵便番号</label>
          </div>
          <div class="form-block__item">
            <input id="zip" maxlength="10" name="zip" size="20" type="text" pattern="[\d\-]*"/>
          </div>
        </div>
        <div class="form-block--hidden">
          <div class="form-block__item-name">
            <label>都道府県</label>
          </div>
          <div class="form-block__item">
            <input id="prefecture" maxlength="10" name="prefecture" size="20" type="text" pattern=".*\S+.*"/>
          </div>
        </div>
        <div class="form-block--hidden">
          <div class="form-block__item-name">
            <label>市町郡</label>
          </div>
          <div class="form-block__item">
            <input id="city" maxlength="80" name="city" size="20" type="text" pattern=".*\S+.*"/>
          </div>
        </div>
        <div class="form-block--hidden">
          <div class="form-block__item-name">
            <label>町名・番地</label>
          </div>
          <div class="form-block__item">
            <input id="address" maxlength="80" name="address" size="20" type="text" pattern=".*\S+.*"/>
          </div>
        </div>
        <div class="form-block--hidden">
          <div class="form-block__item-name">
            <label>WEBサイト</label>
          </div>
          <div class="form-block__item">
            <input id="web_url" maxlength="100" name="web_url" size="20" type="text" pattern=".*\S+.*"/>
          </div>
        </div>
        <div class="form-block--hidden">
          <div class="form-block__item-name">
            <label>従業員数</label>
          </div>
          <div class="form-block__item">
            <input id="employees" maxlength="20" name="employees" size="20" type="text" pattern=".*\S+.*"/>
          </div>
        </div>
        <div class="form-block--hidden">
          <div class="form-block__item-name">
            <label>年間売上</label>
          </div>
          <div class="form-block__item">
            <input id="annual_sales" maxlength="40" name="annual_sales" size="20" type="text" pattern=".*\S+.*"/>
          </div>
        </div>
        <div class="form-block--hidden">
          <div class="form-block__item-name">
            <label>資本金</label>
          </div>
          <div class="form-block__item">
            <input id="capital" maxlength="40" name="capital" size="20" type="text" pattern=".*\S+.*"/>
          </div>
        </div>
        <div class="form-block--hidden">
          <div class="form-block__item-name">
            <label>業態</label>
          </div>
          <div class="form-block__item">
            <input id="industry" maxlength="40" name="industry" size="20" type="text" pattern=".*\S+.*"/>
          </div>
        </div>
        <div class="form-block--hidden">
          <div class="form-block__item-name">
            <label>法人番号</label>
          </div>
          <div class="form-block__item">
            <input id="corporate_number" maxlength="40" name="corporate_number" size="20" type="text" pattern=".*\S+.*"/>
          </div>
        </div>
        <div class="form-block">
          <input type="submit" name="submit" value="<?php _e("wpb_dl-form_submit", 'wp-next-landing-page'); ?>">
        </div>
        </form>
      </section>
    </div>
  </section>
</article>

<!-- フォームの自動補完機能を実装 -->

<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/business/js/sample1.js"></script>

<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-business.php" ?>
</footer>
<script type="text/javascript">
function dropsort() {
    var browser = document.sort_form.sort.value;
    location.href = browser
}
</script>
<script>
// magnificPopupの表示
$(function () {
    $('.download-main__preview-wrap').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {  //ギャラリーオプション
            // enabled: true
        }
    });
});
</script>
</body>
</html>
