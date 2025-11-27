<?php
/*
Template Name: Service Page - Business - FAQ
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
<title>FAQ(よくある質問) | WealthParkビジネス</title>
<meta name="description" content="WealthParkビジネスに関するよくある質問。その他ご不明点などありましたら、お問合せフォームよりお気軽にご相談下さい。">
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/ogp/OGP_faq.jpg">
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
<?php include_once("ga_tracking.php") ?>
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
<section class="page-name">
  <div class="page-name__inner">
    <h1 class="page-name__title">FAQ</h1>
    <p class="page-name__caption">よくある質問</p>
  </div>
</section>
<section class="faq container__inner">
  <div class="faq__inner">
    <h2 class="faq__title">不動産管理会社様がご利用いただくシステムについて</h2>
    <ul class="faq__lists">
      <li class="faq__list">
        <p class="faq__q">Q. 自社で使っている賃貸管理ソフトと連携は可能ですか？</p>
        <p class="faq__a">A. 貴社がご利用の賃貸管理ソフトと、csvアップロードや自動（FTPもしくはAPI）で連携が可能です。データの2重入力がない形で運用いただけます。パッケージソフトだけでなく、貴社オリジナルの管理システムや、Excel等で台帳情報や収支情報を管理されている場合でも、貴社のデータ形式などを教えていただいたうえで、連携の方法を検討させて頂きます。</p>
      </li>
      <li class="faq__list">
        <p class="faq__q">Q. システムのインストールは必要ですか？</p>
        <p class="faq__a">A. PCへのシステムのインストールは不要です。Webブラウザを通じて、管理会社専用のログインページよりログインしてご利用いただけます（WebブラウザはGoogle Chromeを推奨）。</p>
      </li>
      <li class="faq__list">
        <p class="faq__q">Q. 個社向けのカスタマイズは可能ですか？</p>
        <p class="faq__a">A. 個社別のカスタマイズやOEM提供はしておりませんが、お客様から集まる様々な要望をもとに、よりニーズや効果の高い機能追加や改善を行います。継続的なプロダクトのアップデートを通じて、様々な管理会社のベストプラクティスをご活用いただけます。</p>
      </li>
      <li class="faq__list">
        <p class="faq__q">Q. 管理会社側のユーザーの人数に制限はありますか？</p>
        <p class="faq__a">A. 管理会社のユーザーに人数制限はありません。複数の部門や担当者に対し、アカウントを発行してご利用いただけます。</p>
      </li>
      <li class="faq__list">
        <p class="faq__q">Q. システムのセキュリティは問題ありませんか？</p>
        <p class="faq__a">A. 当社は情報セキュリティマネジメントシステム（ISMS）の認証「JIS  Q27001:2014(ISO/IEC 27001:2013)」を取得しており、厳格なセキュリティ基準に則って運用を行っております。その安全性の高さから大手管理会社様にもご導入いただいています。</p>
      </li>
    </ul>
  </div>
</section>
<section class="faq container__inner">
  <div class="faq__inner">
    <h2 class="faq__title">不動産オーナー様がご利用いただくアプリ・Webサービスについて</h2>
    <ul class="faq__lists">
      <li class="faq__list">
        <p class="faq__q">Q. WealthParkを利用する不動産オーナー様には料金が発生しますか？</p>
        <p class="faq__a">A. 弊社はWealthParkのアプリおよびWebのご利用にあたり、オーナー様から利用料等はいただいておりません。</p>
      </li>
      <li class="faq__list">
        <p class="faq__q">Q. アプリはiOS、Android対応していますか？</p>
        <p class="faq__a">A. iOS、Androidどちらでもお使いいただけます。</p>
      </li>
      <li class="faq__list">
        <p class="faq__q">Q. スマートフォンを持っていないオーナー様も利用可能ですか？</p>
        <p class="faq__a">A. スマートフォンのアプリだけでなく、PC版（ブラウザ版）もありますので、スマートフォンかPCいずれかをお持ちでしたらご利用いただけます</p>
      </li>
    </ul>
  </div>
</section>
<section class="faq container__inner">
  <div class="faq__inner">
    <h2 class="faq__title">導入に向けたサポートについて</h2>
    <ul class="faq__lists">
      <li class="faq__list">
        <p class="faq__q">Q. システム導入の期間や流れについて教えてください。</p>
        <p class="faq__a">A. 貴社専任のカスタマーサクセスチームがシステム導入から、導入後の運用・活用を支援いたします。貴社がご利用の賃貸管理ソフトや社内体制などによりますが、導入（システムをご利用いただける状態まで）は最短1か月～、その後オーナー様初期導入を1ヶ月サポートいたします。</p>
      </li>
      <li class="faq__list">
        <p class="faq__q">Q. オーナー様にはどのようにWealthParkを導入すればよいですか？</p>
        <p class="faq__a">A. オーナー様の皆様がスムーズにサービスをご利用いただけるよう、そのままお使いいただける説明書や、手順をまとめた資料などを準備しております。また、初期導入期間中は、専任のカスタマーサクセスチームがサポートしますのでご安心ください。</p>
      </li>
      <li class="faq__list">
        <p class="faq__q">Q. WealthParkの利用を嫌がるオーナー様はいませんか？</p>
        <p class="faq__a">A. オーナー様にこそメリットがあり、多くのオーナー様にご利用いただいています。管理会社とのコミュニケーションや煩雑な紙の書類管理にお困りのオーナー様も多く、WealthParkはコミュニケーションや資産情報を一元管理出来るツールとしてお使いいただいています。</p>
      </li>
      <li class="faq__list">
        <p class="faq__q">Q. ご高齢のオーナー様でもWealthParkは利用できますか？</p>
        <p class="faq__a">A. 導入いただいた管理会社の実績では、80代の方もご活用いただいている事例がございます。もしスマートフォンをお持ちでない場合は、PC版の利用をお勧めしております。また、窓口となっているご親族の方等にWealthParkアカウントを発行して、ご利用いただいているケースもございます。</p>
      </li>
      <li class="faq__list">
        <p class="faq__q">Q. メールやSNS（LINEなど）といった連絡手段と、WealthParkのチャット機能はどう違いますか？</p>
        <p class="faq__a">A. メッセージ一括送信機能を利用した定期連絡や「言った言わないを防ぐための記録として効率的なオーナーコミュニケーションを実現します。オーナー様と担当者のやり取りの履歴がシステムに残るため、担当者の退職や入れ替えの際にもスムーズに引き継ぎ可能です。</p>
      </li>
      <li class="faq__list">
        <p class="faq__q">Q. WealthPark導入による、送金明細の電子化は可能ですか？</p>
        <p class="faq__a">A. 可能です。すでにWealthParkのオーナー導入率100%にして、紙の送金明細送付を中止したお客様もいらっしゃいます。送金明細の電子化は、郵送費・人件費等のコスト削減効果だけでなく、不動産収支の見える化による、オーナー利便性向上の効果もございます。送金明細電子化のサポート実積豊富なカスタマーサクセスチームに、ぜひご相談ください。</p>
      </li>
    </ul>
  </div>
</section>
<?php include dirname(__FILE__)."/template-parts/business-cta-form.php" ?>
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
<?php include "tag_hubspot_popup_001.php" ?>
<?php include "popup_banner_business.php" ?>
<!-- <?php include "tidio-chat-business.php" ?> -->
</body>
</html>
