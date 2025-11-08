<?php
/*
Template Name: Corporate Site - External Transmission of User Information
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
<title><?php _e("corporate.external-user-information", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("corporate.description.external-user-information", 'wp-next-landing-page'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="https://use.typekit.net/kbe8wyi.css">
<?php include "external-css-js-common.php" ?>
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
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/modal-multi.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
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
      <h1 class="page-name__title page-name__title--left">外部送信の利用者に関する情報の取扱い</h1>
      <p class="page-name__caption">External Transmission of User Information</p>
    </div>
  </section>
  <section class="container">
    <div class="container__inner external-user-info">
      <p>WealthPark株式会社が提供する以下のサービスに関し、第三者が提供するツールや広告サービスのクッキー等(以下「外部送信ツール」といいます。)により取得する利用者の情報の取扱いについては、以下のとおりです。</p>
      <h3>＜サービス名＞</h3>
      <h4>WealthParkビジネス</h4>
      <div class="table-wrapper">
        <table>
          <thead>
            <tr>
              <th>外部送信ツールの名称</th>
              <th>外部送信ツール提供者</th>
              <th>取得するお客様の情報</th>
              <th>利用目的</th>
              <th>外部送信ツール提供者に関する情報</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Datadog</td>
              <td>Datadog, Inc.</td>
              <td>
                <ul>
                  <li>広告識別子</li>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービスの監視の為<br>
                サービスの最適化のため
              </td>
              <td><a href="https://www.datadoghq.com/ja/legal/privacy/" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>Google Analytics／Firebase</td>
              <td>Google LLC</td>
              <td>
                <ul>
                  <li>広告識別子</li>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービス改善のため<br>
                サービスの最適化のため<br>
                サービス利用状況の分析を行うため
              </td>
              <td><a href="https://policies.google.com/privacy" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>OneSignal</td>
              <td>OneSignal, Inc.</td>
              <td>
                <ul>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービスの提供のため
              </td>
              <td><a href="https://onesignal.com/privacy_policy" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>Intercom</td>
              <td>Intercom, Inc.</td>
              <td>
                <ul>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービスの提供のため
              </td>
              <td><a href="https://www.intercom.com/legal/privacy" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>Sentry</td>
              <td>FUNCTIONAL SOFTWARE, INC.</td>
              <td>
                <ul>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービスの監視の為<br>
                サービスの最適化のため
              </td>
              <td><a href="https://sentry.io/privacy/?original_referrer=https%3A%2F%2Fwww.google.com%2F" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>Flamelink</td>
              <td>Flamelink.io</td>
              <td>
                <ul>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービスの提供のため
              </td>
              <td><a href="https://firebasestorage.googleapis.com/v0/b/flamelink-website.appspot.com/o/flamelink%2Fmedia%2F1542263738168_Flamelink%20Privacy%20Policy.pdf?alt=media&token=ce193870-f339-4b07-9af0-d2e2926c7aee" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>Pardot(Salesforce Marketing Cloud Account Engagement)</td>
              <td>Salesforce, Inc.</td>
              <td>
                <ul>
                  <li>広告識別子</li>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービスの最適化のため<br>
                サービス利用状況の分析を行うため
              </td>
              <td><a href="https://www.salesforce.com/ap/company/privacy/" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>Apple Developer Program</td>
              <td>Apple Inc.</td>
              <td>
                <ul>
                  <li>広告識別子</li>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービスの提供のため
              </td>
              <td><a href="https://developer.apple.com/support/privacy/" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>Google Play</td>
              <td>Google LLC</td>
              <td>
                <ul>
                  <li>広告識別子</li>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービスの提供のため
              </td>
              <td><a href="https://policies.google.com/privacy" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>Branch</td>
              <td>Branch Metrics, Inc.</td>
              <td>
                <ul>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービスの提供のため
              </td>
              <td><a href="https://legal.branch.io/#branchio-privacypolicy" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>SendGrid</td>
              <td>Twilio Inc.</td>
              <td>
                <ul>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                </ul>
              </td>
              <td>
                サービスの提供のため
              </td>
              <td><a href="https://www.twilio.com/ja-jp/legal/privacy" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>Twilio</td>
              <td>Twilio Inc.</td>
              <td>
                <ul>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービスの提供のため
              </td>
              <td><a href="https://www.twilio.com/ja-jp/legal/privacy" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>Cloudflare</td>
              <td>Cloudflare, Inc.</td>
              <td>
                <ul>
                  <li>広告識別子</li>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービス監視用<br>
                セキュリティの最適化のために
              </td>
              <td><a href="https://www.cloudflare.com/privacypolicy/" target="_blank">プライバシーポリシー</a></td>
            </tr>
            <tr>
              <td>Sentry</td>
              <td>Sentry</td>
              <td>
                <ul>
                  <li>広告識別子</li>
                  <li>端末やアプリの情報</li>
                  <li>ネットワークの情報</li>
                  <li>アクセス履歴</li>
                </ul>
              </td>
              <td>
                サービス監視用
              </td>
              <td><a href="https://sentry.io/privacy/" target="_blank">プライバシーポリシー</a></td>
            </tr>
          </tbody>
        </table>
      </div>
      <p class="published">（2023年6月23日公表）</p>
      
      <?php
      // while ( have_posts() ) : the_post();

      //   the_content();


      // endwhile;
      ?>
    </div>
  </div>
  
  

<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>
  
</body>
</html>
