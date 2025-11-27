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
    <main id="page" class="whole-page pm-list">
      <section class="pm-list-list">
        <h2 class="pm-list-list__title">
          <?php
            $term_name = $term->name; // 変数に代入
            echo "WealthParkを利用できる{$term_name}の不動産管理会社({$term->count})";
          ?>
        </h2>
        <p class="pm-list-list__description">
          「オーナーアプリで賃貸経営を便利にしたい」と考えている不動産オーナーのみなさま！あなたの物件の管理会社がWealthParkに対応しているか、このページでお調べいただけます。<br />お問い合わせは<a href="#pm-list__form">こちらのフォーム</a>から<br /><span class="pm-list-list__note">※五十音順 ※掲載を希望された企業様のみの一覧になります</span>
        </p>
        <div class="pm-list-list__area">
  				<a href="<?php echo esc_url(home_url('/')); ?>/business/pm-list/">全国</a>
          <?php
  					$terms = get_terms('wpb_area');
  					foreach ( $terms as $term ){
  						echo ' | <a href="'.get_term_link($term->slug, 'wpb_area').'">'.$term->name.'（'.$term->count.'）</a>';
  					}
  				?>
  			</div>
  			<ul class="pm-list-list__items">
  			<?php
  			if ( have_posts() ) {
  				while ( have_posts() ){
  					the_post();
  					?>
  				<li class="pm-list-list__item">
  					<div class="pm-list-list__thumb"><?php the_post_thumbnail('thumbnail'); ?></div>
  					<div class="pm-list-list__text">
  						<p class="pm-list-list__hd"><?php echo get_post_meta($post->ID , 'pm-name' ,true); ?></p>
  						<ul class="pm-list-list__tags">
                <?php // 投稿に紐づくタームの一覧を表示
                $taxonomy_slug = 'wpb_area'; // 任意のタクソノミースラッグを指定
                $category_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タームの情報を取得
                if(!empty($category_terms)){ // 変数が空でなければ true
                  if(!is_wp_error($category_terms)){ // 変数が WordPress Error でなければ true
                    foreach($category_terms as $category_term){ // タームのループを開始
                      echo '<a href="'.get_term_link($category_term->slug, $taxonomy_slug).'" class="pm-list-list__tag">'.$category_term->name.'</a>'; // タームをリンク付きで表示
                    } // ループの終了
                  }
                }
                ?>
  						</ul>
  						<p class="pm-list-list__catch"><?php echo get_post_meta($post->ID , 'pm-description' ,true); ?></p>
  					</div>
  				</li>
  					<?php
  				}
  			}
  			?>
  			</ul>
  		</section>
      <section id="pm-list__form" class="customer-success__form form-section--salesforce">
        <div class="container__inner">
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
          <h3 class="customer-success__formTit customer-success__sectionRead">ご相談はこちらから</h3>
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
              <label for="managed_units">ご職業</label>
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
        </div>
      </section>
    <main>
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
<?php include_once("tag-container-001.php") ?>
<?php include "popup_banner_business.php" ?>
<!-- <?php include "tidio-chat-business.php" ?> -->
</body>
</html>
