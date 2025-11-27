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
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no' name='viewport' />
<meta name="apple-itunes-app" content="app-id=1068127268">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="alternate" hreflang="ja" href="http://wealth-park.com/ja" />
<link rel="alternate" hreflang="en" href="http://wealth-park.com/en" />
<link rel="alternate" hreflang="zh" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-CN" href="http://wealth-park.com/sc" />
<link rel="alternate" hreflang="zh-HK" href="http://wealth-park.com/tc" />
<link rel="alternate" hreflang="zh-TW" href="http://wealth-park.com/tc" />
<link rel="manifest" href="<?php echo get_template_directory_uri() ?>/manifest.json?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/business/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
<?php include "external-css-js-common.php" ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/img/icon.png">
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->

<?php remove_action( 'wp_head', '_wp_render_title_tag', 1 ); ?>
<title>WealthPark導入企業を探す | WealthParkビジネス</title>
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/ogp/OGP_pm_list.jpg">
<meta property="og:description" content="「オーナーアプリで賃貸経営を便利にしたい」と考えている不動産オーナーのみなさま！あなたの物件の管理会社がWealthParkに対応しているか、このページでお調べいただけます。">
<?php wp_head(); ?>
</head>
<body>
<div id="page" class="whole-page">
	<?php include "header-common.php" ?>
	<main id="main" class="site-content pm-list">
		<section class="pm-list-list pm-list-list--archive">
			<div class="pm-list-list__contents">
				<div class="pm-list-list__contents-inner">
					<div class="pm-list-list__txt">
						<h1 class="pm-list-list__title--df">導入企業を探す</h1>
						<p class="pm-list-list__description--df">
							「オーナーアプリで賃貸経営を便利にしたい」と考えている不動産オーナーのみなさま！あなたの物件の管理会社がWealthParkに対応しているか、このページでお調べいただけます。<br />
							お問い合わせはこちらの<a href="#pm-list__form">フォーム</a>から<br /><br />
							<span class="pm-list-list__note">※掲載を希望された企業様のみの一覧になります</span>
						</p>
					</div>
					<div class="pm-list-list__map">
						<div class="pm-list-list__map-inner">
							<p class="pm-list-list__map-all">
								<a href="<?php echo esc_url(home_url('/')); ?>/business/pm-list/">
									<?php
									global $wp_query;
									echo 'すべて<span>（'.$wp_query->found_posts.'）</span>';
									?>
								</a>
							</p>
							<ul class="pm-list-list__map-other">
								<?php
									$terms = get_terms('wpb_area');
									foreach ( $terms as $term ){
										if ($term->name == "北海道") {
											$areaclass = "pm-list-list__map--hokkaido";
										}
										elseif ($term->name == "東北") {
											$areaclass = "pm-list-list__map--touhoku";
										}
										elseif ($term->name == "関東") {
											$areaclass = "pm-list-list__map--kantou";
										}
										elseif ($term->name == "中部") {
											$areaclass = "pm-list-list__map--tyubu";
										}
										elseif ($term->name == "近畿") {
											$areaclass = "pm-list-list__map--kinki";
										}
										elseif ($term->name == "中国") {
											$areaclass = "pm-list-list__map--tyugoku";
										}
										elseif ($term->name == "四国") {
											$areaclass = "pm-list-list__map--shikoku";
										}
										elseif ($term->name == "中国・四国") {
											$areaclass = "pm-list-list__map--tyugoku-shikoku";
										}
										elseif ($term->name == "九州・沖縄") {
											$areaclass = "pm-list-list__map--kyushu-okinawa";
										}
										elseif ($term->name == "外国") {
											$areaclass = "pm-list-list__map--foreign";
										}
										else {
											$areaclass = "pm-list-list__map--area-other";
										}
										echo
										'<li class="'.$areaclass.'">
												<a href="'.get_term_link($term->slug, 'wpb_area').'">'.$term->name.'<span>（'.$term->count.'）</span></a>
										</li>';
									}
								?>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<h2 class="pm-list-list__title">
				<?php
				  global $wp_query;
				  echo 'WealthParkを利用できる不動産管理会社（'.$wp_query->found_posts.'）';
				?>
			</h2>
			<div class="pm-list-list__area">
				<a href="<?php echo esc_url(home_url('/')); ?>/business/pm-list/">
					<?php
					  global $wp_query;
					  echo 'すべて（'.$wp_query->found_posts.'）';
					?>
				</a>
				<?php
					$terms = get_terms('wpb_area');
					foreach ( $terms as $term ){
						echo ' | <a href="'.get_term_link($term->slug, 'wpb_area').'">'.$term->name.'（'.$term->count.'）</a>';
					}
				?>
			</div>
			<ul class="pm-list-list__items">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
				<?php endwhile; ?>
				<?php else: ?>
					<h2>導入企業が見つかりません</h2>
				<?php endif; ?>
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
	</main>
	<footer>
    <?php include "template-parts/footer-main.php" ?>
    <?php include "template-parts/footer-sub-corporate.php" ?>
	</footer>
	<script src="https://www.google.com/recaptcha/api.js"></script>
  <script>
   function onSubmit(token) {
     document.getElementById("sf-form").submit();
   }
 </script>
	<script type="text/javascript">
	  function dropsort() {
	      var browser = document.sort_form.sort.value;
	      location.href = browser
	  }
	</script>
	</body>
	</html>
