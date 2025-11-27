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
global $post;
$name = $_acf('companyname');
if (empty($name)) {
    $name = $_acf('name');
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
<?php include "tag-manager-head.php" ?>
  <?php include_once("tag_yahoo_site-general.php") ?>
  <?php include_once("tag_google_remarketing.php") ?>
  <?php include_once("tag_facebook_pixel.php") ?>
  <?php include_once("tag_facebook_pixel_rincrew.php") ?>
  <?php include_once("tag_hubspot_popup_001.php") ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no">
  <title><?=$name ?> 導入事例 - WealthParkビジネス</title>
  <meta name="description" content="<?=get_the_title() ?>">
  <meta property="og:type" content="article">
  <meta property="og:title" content="<?=$name ?> | WealthPark導入事例" />
  <meta property="og:description" content="<?=mb_substr(wp_strip_all_tags($post->post_content, true), 0, 100); ?>" />
  <meta property="og:image"
    content="<?=get_the_post_thumbnail_url(get_the_ID()) ?>" />
  <meta name=“twitter:card” content=“summary_large_image” />
  <?php include "external-css-js-common.php" ?>
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/business/css/style.css?<?php echo date('Ymd-Hi'); ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri() ?>/business/css/case_study_style.css?<?php echo date('Ymd-Hi'); ?>">
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
<?php include_once("ga_tracking.php") ?>
</head>
<body class="body-single-case-study">
  <?php include "tag-manager-body.php" ?>
  <?php include "header-common.php"; ?>
  <div class="single-case-study">
    <article class="example">
      <?php if (has_post_thumbnail()): ?>
        <section class="featured-image">
          <img loading='lazy' class="example-thumbnail__image" src="<?=get_the_post_thumbnail_url(); ?>" />
        </section>
      <?php endif; ?>
      <section class="example-header">
        <div class="example-header__meta">
          <?php 
            $company_logo = get_field('company_logo');
            if(!empty($company_logo)) : ?>
            <div class="company-logo">
              <img src="<?php echo esc_url($company_logo['url']); ?>" alt="image" />
            </div>
          <?php endif; ?>
          <p class="example-header__meta--description">
            <?=get_the_title() ?>
          </p>
          <p class="example-header__company-name"><?=$_acf('companyname') ?: "オーナーインタビュー" ?></p>
          <p class="example-header__owner-name"><?=$_acf('name')?></p>
        </div>
      </section>
      <?php
      $problem = get_field("problem");
      if (!empty($problem)): ?>
      <section class="example-matter">
        <dl class="example-matter__wrap">
          <dt class="example-matter__hd">課題</dt>
          <dd class="example-matter__detail">
            <ul class="example-matter__list">
              <?php
              $list = explode("::", $_acf('problem'));
              foreach ($list as $item) {
                  echo "<li class='example-matter__item'>{$item}</li>";
              }
              ?>
            </ul>
          </dd>
        </dl>
        <dl class="example-matter__wrap">
          <dt class="example-matter__hd">効果</dt>
          <dd class="example-matter__detail">
            <ul class="example-matter__list">
              <?php
              $list = explode("::", $_acf('effective'));
              foreach ($list as $item) {
                  echo "<li class='example-matter__item'>{$item}</li>";
              }
              ?>
            </ul>
          </dd>
        </dl>
      </section>
          <?php endif; ?>
      <section class="example-content">
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                the_content();
            }
        }
        ?>
      </section>
      <section class="example-content case-study-form">
      <h2 class='case-study-list__title'>他社事例もまとめてダウンロード</h2>
        <section class="download-main--case-study">
          <div class="download-main__box--case-study">
            <dl class="download-main__detail">
              <dt class="download-main__title">
                <?=get_field("document_name", 39028) ?>
              </dt>
              <dd class="download-main__description">
                <p><?php _e("wpb_dl-form_msg", 'wp-next-landing-page'); ?></p>
              </dd>
            </dl>
            <div class="download-main__case-study--thumbnails">
              <div class="download-main__case-study--thumbnail">
                <img loading='lazy' src="<?=get_the_post_thumbnail_url(39028,'full') ?>" alt="Document" />
              </div>
              <div class="download-main__case-study--previews">
                <div class="download-main__case-study--preview">
                  <a href="<?=get_field('preview_image1', 39028) ?>">
                    <img loading='lazy' src="<?=get_field('preview_image1', 39028) ?>" alt="Document" />
                  </a>
                </div>
                <div class="download-main__case-study--preview">
                  <a href="<?=get_field('preview_image2', 39028) ?>">
                    <img loading='lazy' src="<?=get_field('preview_image2', 39028) ?>" alt="Document" />
                  </a>
                </div>
              </div>
            </div>
            <dl class="download-main__detail">
              <dd class="download-main__description download-main__description--case-study">
                <?=get_field("document_description", 39028) ?>
                <br>
                  <?php if (get_field("previous_volume_url", 39028) != "") : ?>
                    <a href="<?=get_field("previous_volume_url", 39028) ?>">
                      <?=get_field("previous_volume_text", 39028) ?>
                    </a>
                  <?php endif; ?>
              </dd>
            </dl>
          </div>
          <div class="download-main__box--case-study">
            <section class="example-content form-section--salesforce form-section--salesforce-half">
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
              <form action="<?=get_field("form_src", 39028) ?>" method="post">
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
                  <label for="managed_units"><?php _e("wpb_dl-form_item_details-of-company", 'wp-next-landing-page'); ?></label>
                </div>
                <div class="form-block__item form-block__item--case-study">
                  <p>
                  <label>
                    <input name="managed_units" type="radio" value="管理会社（管理戸数1室～999室）" required/> 管理会社（管理戸数1室～999室）
                  </label>
                  </p>
                  <p>
                  <label>
                    <input name="managed_units" type="radio" value="管理会社（管理戸数1,000室～9,999室）"/> 管理会社（管理戸数1,000室～9,999室）
                  </label>
                  </p>
                  <p>
                  <label>
                    <input name="managed_units" type="radio" value="管理会社（管理戸数10,000室以上）"/> 管理会社（管理戸数10,000室以上）
                  </label>
                  </p>
                  <p>
                  <label>
                    <input name="managed_units" type="radio" value="不動産オーナー"/> 不動産オーナー
                  </label>
                  </p>
                  <p>
                  <label>
                    <input name="managed_units" type="radio" value="その他"/> その他
                  </label>
                  </p>
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
                  <span><?php _e("wpb_dl-form_mandatory", 'wp-next-landing-page'); ?></span>
                  <label for="phone"><?php _e("wpb_dl-form_item_telephone-number", 'wp-next-landing-page'); ?></label>
                </div>
                <div class="form-block__item">
                  <input id="phone" maxlength="12" name="phone" size="20" type="tel" pattern="[\d\-]*" required/>
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
      </section>
    </article>
    <?php include "case-banner.php" ?>
    <section class="see-more">
      <a href="<?php echo home_url('/') ?>business/case-study" class="btn-link">もっとみる</a>
    </section>
    <?php include dirname(__FILE__)."/template-parts/business-cta-form.php" ?>
    <footer>
      <?php include "template-parts/footer-main.php" ?>
      <?php include "template-parts/footer-sub-business.php" ?>
    </footer>
  </div>
  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
  <script type="text/javascript">
    function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
    }
  </script>
  <?php include "tag_hubspot_popup_001.php" ?>
  <?php include "popup_banner_business.php" ?>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js"></script>
  <script>
  // magnificPopupの表示
  $(function () {
      $('.download-main__case-study--preview').magnificPopup({
          delegate: 'a',
          type: 'image',
          gallery: {  //ギャラリーオプション
              enabled: true
          }
      });
  });
  </script>
</body>
</html>
