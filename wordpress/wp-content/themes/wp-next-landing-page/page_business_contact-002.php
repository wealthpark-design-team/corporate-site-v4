<?php
/*
Template Name: Service Page - Business - Contact 002
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
<title>お問い合わせ | WealthParkビジネス</title>
<meta name="description" content="製品デモの実施依頼や、価格のお見積り、その他サービスに関するお問合せ">
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/ogp/OGP_contact.jpg">
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
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>

<!-- フォームハンドラー -->
<section class="page-name">
  <div class="page-name__inner">
    <h1 class="page-name__title page-name__title--form--reset-padding">Contact</h1>
  </div>
</section>
<section class="form-section--salesforce form-section--salesforce-contact">
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
  <p class="form-section__note">下記フォームへ必要事項をご記入の上、送信ボタンをクリックしてください。</p>
  <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=UTF-8">
  <form action="https://p.wealth-park.com/l/884073/2021-09-20/78zs8" method="post" id="sf-form">

  <input type=hidden name="oid" value="00D2v000001XqKf">
  <input type=hidden name="retURL" value="https://wealth-park.com/ja/business-contact-completed/">
  <div class="form-block">
    <div class="form-block__item-name">
      <span>必須</span>
      <label for="company">会社名</label>
    </div>
    <div class="form-block__item">
      <input id="company" maxlength="40" name="company" size="20" type="text" pattern=".*\S+.*" required/>
    </div>
  </div>
  <div class="form-block">
    <div class="form-block__item-name">
      <span>必須</span>
      <label for="managed_units">お客様区分</label>
    </div>
    <div class="form-block__item">
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
  <div class="form-block">
    <div class="form-block__item-name">
      <span>必須</span>
      <label for="last_name">姓</label>
    </div>
    <div class="form-block__item">
      <input id="last_name" maxlength="40" name="last_name" size="20" type="text" pattern=".*\S+.*" required/>
    </div>
  </div>
  <div class="form-block">
    <div class="form-block__item-name">
      <span>必須</span>
      <label for="first_name">名</label>
    </div>
    <div class="form-block__item">
      <input id="first_name" maxlength="40" name="first_name" size="20" type="text" pattern=".*\S+.*" required/>
    </div>
  </div>
  <div class="form-block">
    <div class="form-block__item-name">
      <span>必須</span>
      <label for="email">メール</label>
    </div>
    <div class="form-block__item">
      <input id="email" maxlength="80" name="email" size="20" type="email" pattern=".+\.[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]" required/>
    </div>
  </div>
  <div class="form-block">
    <div class="form-block__item-name">
      <span>必須</span>
      <label for="phone">お電話番号</label>
    </div>
    <div class="form-block__item">
      <input id="phone" maxlength="12" name="phone" size="20" type="tel" pattern="[\d\-]*" required/>
    </div>
  </div>
  <div class="form-block">
    <div class="form-block__item-name">
      <span>必須</span>
      <label>お問合わせ内容</label>
    </div>
    <div class="form-block__item">
      <textarea id="inquiry_content" name="inquiry_content" rows="25" type="text" wrap="soft" pattern=".*\S+.*" required></textarea>
    </div>
  </div>
  <div class="form-block--hidden">
    <label>フォームタイプ</label>
    <select id="00N2v00000THpvL" name="00N2v00000THpvL" title="フォームタイプ">
      <option value="">--なし--</option>
      <option value="PM用">PM用</option>
      <option value="その他" selected>その他</option>
    </select>
  </div>
  <div class="form-block">
    <!-- <input type="submit" name="submit" value="送信"> -->
    <button class="g-recaptcha" 
        data-sitekey="6LcWATYqAAAAAGl9ObJYc_JxIdmz9FsGNOh-Rh3m" 
        data-callback='onSubmit' 
        data-action='submit'>送信</button>
  </div>
  </form>
</section>

<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-business.php" ?>
</footer>
 <script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
   function onSubmit(token) {
     document.getElementById("sf-form").submit();
   }
 </script>
<script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
<script type="text/javascript">
function dropsort() {
    var browser = document.sort_form.sort.value;
    location.href = browser
}
</script>
<?php include_once("tag-container-002.php") ?>
</body>
</html>
