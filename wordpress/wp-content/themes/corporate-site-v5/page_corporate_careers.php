<?php
/*
Template Name: Corporate Site - Careers
*/
$_ = function ($str) {
    return $str;
};
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<?php include "tag-manager-head.php" ?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta name="format-detection" content="telephone=no">
<title><?php _e("corporate.meta-title.careers", 'wp-next-landing-page'); ?></title>
<meta name="description" content="<?php _e("corporate.meta-description.careers", 'wp-next-landing-page'); ?>">
<meta property="og:title" content="<?php _e("corporate.meta-title.careers", 'wp-next-landing-page'); ?>" />
<meta property="og:type" content="article" />
<meta property="og:url" content="https://wealth-park.com/corporate/careers/" />
<meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/corporate/ogp_image_wp-careers_20200721.png">
<meta property="og:site_name" content="WealthPark Corporate" />
<meta property="og:description" content="<?php _e("corporate.meta-description.careers", 'wp-next-landing-page'); ?>" />
<meta name="twitter:card" content="summary_large_image" />
<?php include "external-css-js-common.php" ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/style.css?<?php echo date('Ymd-Hi'); ?>">
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
<script type="text/javascript" src="<?=get_template_directory_uri() ?>/js/smooth-scroll.js"></script>
<!--[if lt IE 9]>
<script src="/js/html5shiv.js"></script>
<script src="/js/respond.js"></script>
<![endif]-->
</head>
<body>
<?php include "tag-manager-body.php" ?>
<?php include "header-common.php" ?>
  <section class="career-visual">
      <div class="career-visual__outer">
        <video class="career-visual__video" autoplay loop muted playsinline poster="<?php echo get_template_directory_uri() ?>/corporate/img/career_bg_pic1.jpg" onclick="this.play();">
          <source src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/video/corporate/careers_top_001.mp4" type="video/mp4">
        </video>
      </div>
    <div class="career-visual__txt">
      <h1 class="career-visual__title"><?php _e("careers_list_caption", 'wp-next-landing-page') ?></h1>
    </div>
      <div class="career-visual__arrow">
          <a href="#pagename">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_arrow.svg" alt="矢印">
          </a>
      </div>
  </section>

  <section class="page-name page-name--career" id="pagename">
    <div class="page-name__inner page-name__inner--career">
      <h2 class="page-name__title">Vision</h2>
    </div>
  </section>

  <section class="container career-vision">
    <div class="container__inner career-vision__inner">
        <p class="career-vision__title">Be Alternative</p>
        <p class="career-vision__copy"><?php _e("corporate.vision.description", 'wp-next-landing-page'); ?></p>
        <p class="career-vision__img"><img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/career-alternative_pic1.jpg" alt="選択の自由が当たり前の世界を創る"></p>
    </div>
  </section>

  <section class="page-name page-name--career">
    <div class="page-name__inner page-name__inner--career">
      <h2 class="page-name__title">Mission</h2>
    </div>
  </section>

  <section class="container career-mission">
    <div class="container__inner career-mission__inner"><?php _e("corporate.mission.description", 'wp-next-landing-page'); ?></div>
  </section>


  <section class="page-name page-name--career">
    <div class="page-name__inner page-name__inner--career">
      <h2 class="page-name__title">会社紹介</h2>
    </div>
  </section>

  <section class="container career-profile">
    <div class="container__inner career-profile__inner">
      <ul>
        <li>
          <script async class="speakerdeck-embed" data-id="4f93ef2d2a224dfb89d2c4a08b916dee" data-ratio="1.77777777777778" src="//speakerdeck.com/assets/embed.js"></script>
          <!-- <iframe src="https://www.slideshare.net/slideshow/embed_code/key/6sG7DfLlxVkeXI?hostedIn=slideshare&page=upload" width="100%" height="560" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe> -->
        </li>
        <li>
          <script async class="speakerdeck-embed" data-id="709ddc61010e485b998f89bceb7ddd71" data-ratio="1.77725118483412" src="//speakerdeck.com/assets/embed.js"></script>
          <!-- <iframe src="https://www.slideshare.net/slideshow/embed_code/key/rs8Oilcu6jjLmz?hostedIn=slideshare&page=upload" width="100%" height="560" frameborder="0" marginwidth="0" marginheight="0" scrolling="no"></iframe> -->
        </li>
      </ul>
    </div>
  </section>


  <section class="page-name page-name--career">
    <div class="page-name__inner page-name__inner--career">
      <h2 class="page-name__title">Message</h2>
    </div>
  </section>

  <section class="career-video">
    <div class="career-video__inner">
      <div class="career-video__comments">
        <p class="message__title">WealthPark CEO Message</p>
        <h1 class="message__txt">CEO／ファウンダーである川田 隆太から、WealthParkへの参画をご検討されている皆様へのメッセージです。</h1>
      </div>
      <div class="image rellax" data-rellax-speed="2" >
        <div class="career-video__youtube">
          <iframe src="https://www.youtube.com/embed/WcAtb8UlbsI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="career-video__inner--rev">
      <div class="career-video__comments">
        <p class="message__title">WealthPark Product Technology Style</p>
        <h1 class="message__txt">CPO(Chief Product Officer) 間瀬、VP of Product 菊地、VP of Engineering 藤井、VP of Design 吉本がWealthParkのプロダクト開発の考え方／プロセスについて紹介します。</h1>
      </div>
      <div class="image rellax" data-rellax-speed="2" >
        <div class="career-video__youtube">
          <iframe src="https://www.youtube.com/embed/BhwHiHLiIOY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
    <div class="career-story">
      <div class="career-story__inner">
        <ul class="blog-articles__list">
          <?php
            $args = array(
              'posts_per_page' => 6,
              'post_type' => 'wealthpark',
              'tag_id' => 71,
              'post_status' => 'publish',
              'no_found_rows' => true
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) {
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    $category = get_the_terms(get_the_ID(), "category");
                    $tags = array_map(function ($tag) {
                        global $_;
                        return "
                        <li class='blog-articles__meta-item'>
                          <a class='blog-articles__meta-link' href='{$_(get_term_link($tag->term_id))}'>
                            {$_($tag->name)}
                          </a>
                        </li>";
                    }, get_the_tags());
                    echo "
                <li class='blog-articles__item'>
                  <div class='blog-articles__item-header'>
                    <a class='blog-articles__item-category' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                    <p class='blog-articles__item-date'>{$_(get_the_date('Y.m.d'))}</p>
                  </div>
                  <a class='blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
                    <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                  </a>
                  <div class='blog-articles__item-body'>
                  <p class='blog-articles__item-body--inner'>
                    {$_(get_the_title())}
                  </p>
                </div>
                <ul class='blog-articles__meta'>
                    {$_(implode($tags))}
                </ul>
                </li>";
                }
            }
            wp_reset_query();
          ?>
        </ul>
      </div>
    </div>
  </section>

  <!-- <section class="page-name">
    <div class="page-name__inner">
      <h2 class="page-name__title"><?php _e("careers_list_title", 'wp-next-landing-page') ?></h2>
      <p class="page-name__caption"><?php _e("careers_list_caption", 'wp-next-landing-page') ?></p>
    </div>
  </section> -->
  <!-- <section class="container career-copy" id="pagename">
    <div class="container__inner career-copy__inner">
      <h3 class="career-copy__title">SmartHRの採用は、<br class="career-copy__sp">ミッション・価値観を重要視しています</h3>
      <p class="career-copy__txt">
        WealthParkは、オルタナティブアセットのデジタルインフラを目指すスタートアップです。<br>
        現在、東京・上海・台北・香港・ニューヨークを拠点としています。<br><br>
        わたしたちは、オルタナティブアセットと呼ばれる資産領域の中で、<br>
        まずは不動産業界における非流動資産のプラットフォーム構築に挑戦しています。<br><br>
        しかしそれはまだ目指す世界への「通過点」に過ぎません。<br>
        不動産、アート、収集品…あらゆるアセットをテクノロジーで流動化する。<br>
        WealthParkが掲げる未来はその先にあります。
      </p>
    </div>
  </section> -->
  <!-- <section class="career-modal">
    <div class="container__inner career-modal__inner">
      <ul class="career-modal__teams">
        <li class="career-modal__team">
            <a href="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_up_pic1.png" alt="画像アップ">
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_pic1.png" alt="画像">
            </a>
        </li>
        <li class="career-modal__team">
            <a href="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_up_pic2.png" alt="画像アップ">
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_pic2.png" alt="画像">
            </a>
        </li>
        <li class="career-modal__team">
            <a href="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_up_pic3.png" alt="画像アップ">
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_pic3.png" alt="画像">
            </a>
        </li>
        <li class="career-modal__team">
            <a href="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_up_pic4.png" alt="画像アップ">
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_pic4.png" alt="画像">
            </a>
        </li>
        <li class="career-modal__team">
            <a href="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_up.pic5.png" alt="画像アップ">
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal.pic5.png" alt="画像">
            </a>
        </li>
        <li class="career-modal__team">
            <a href="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_up.pic6.png" alt="画像アップ">
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal.pic6.png" alt="画像">
            </a>
        </li>
        <li class="career-modal__team">
            <a href="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_up.pic7.png" alt="画像アップ">
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal.pic7.png" alt="画像">
            </a>
        </li>
        <li class="career-modal__team">
            <a href="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal_up.pic8.png" alt="画像アップ">
              <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/career-modal.pic8.png" alt="画像">
            </a>
        </li>
      </ul>
    </div>
  </section> -->
  <section class="page-name page-name--career">
    <div class="page-name__inner page-name__inner--career">
      <h2 class="page-name__title"><?php _e("careers_list_caption-positions", 'wp-next-landing-page') ?></h2>
    </div>
  </section>
  <section class="container post-summary">
    <div class="container__inner post-summary__inner">
      <?php
        $terms = get_terms('jobtype');
        foreach ($terms as $term) {
            $args = array(
              'post_type' => 'careers',
              'posts_per_page' => 100,
              'tax_query' => array(
                array(
                  'taxonomy' => 'jobtype',
                  'field' => 'id',
                  'terms' => array($term->term_id),
                ),
              ),
            );
            $the_query = new WP_Query($args);
            global $_;
            if ($the_query->have_posts()) {
                echo "<h3 class='post-summary__hd' id='{$term->slug}'>{$term->name}</h3>";
                while ($the_query->have_posts()) {
                    $the_query->the_post();
                    echo "
                    <div class='post-summary__item'>
                      <a class='post-summary__item--inner' href='{$_(get_the_permalink())}'>{$_(get_the_title())}</a>
                    </div>";
                }
            }
        }
        wp_reset_query();
      ?>
    </div>
  </section>
  <section class="page-name page-name--career">
    <div class="page-name__inner page-name__inner--career">
      <h2 class="page-name__title"><?php _e("careers_list_caption-people", 'wp-next-landing-page') ?></h2>
    </div>
  </section>
  <section class="container career-wantedly">
    <div class="container__inner career-wantedly__inner">
        <ul class="career-wantedly__teams">
          <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/422836" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic21.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>柳川 純二(Director of CE & Security)</h4>
                  <p>vol. 21 | これまでに身につけたスキルを今いる場所で出し切りたい。プロダクトマネージャー兼コーポレートエンジニアリングチームマネージャーの組織に対する想いとは</p>
                </dd>
              </dl>
            </a>
          </li>
          <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/404546" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic20.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>村上朝一 (VP of DXコンサルティングチーム)</h4>
                  <p>vol. 20 | 新しいソリューションを生み出し、ワクワクするDXがしたい。不動産業界のボトルネックにダイレクトに向き合うDXコンサルタントの挑戦</p>
                </dd>
              </dl>
            </a>
          </li>
          <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/381551" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic17.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>加賀谷優希(HR)</h4>
                  <p>vol. 19 | WealthParkに携わるすべての人にとっての幸せを追求することが自分の仕事。転職エージェントを経て人事に挑戦した、採用チーム マネージャーの想い</p>
                </dd>
              </dl>
            </a>
          </li>
          <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/364562" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic15.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>藤井貴浩(VP of Engineering)</h4>
                  <p>vol. 18 | 組織が変革されてきた今、次に劇的に成長させるのはプロダクト。グローバルなエンジニア組織を率いるVP of Engineeringの挑戦</p>
                </dd>
              </dl>
            </a>
          </li>
          <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/353420" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic14.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>吉本 祐貴(VP of Design)</h4>
                  <p>vol.17 | デザイナーに求められるのは事業に対する深い理解とユーザー視点。創業時から横断的に組織づくりに関与した経験を経て、VP of Designが目指すこれからのデザイン組織とは</p>
                </dd>
              </dl>
            </a>
          </li>
          <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/348587" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic16.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>菊地 正芳(VP of Product)</h4>
                  <p>vol. 16 | 人々を投資に向かわせるには、投資のメリットを実感できるサービスが必要。これまでの経験や知見を活かして「投資のサイクル」の醸成を目指すVP of Productの挑戦</p>
                </dd>
              </dl>
            </a>
          </li>
          <!-- <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/342031?utm_source=t.co&utm_medium=share&lang=ja" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic13.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>美濃 大地(ウェルスマネジメント事業部)</h4>
                  <p>vol.15 | 自分自身に向き合い、新しい経験を求めて飛び込んだ場所。挫折をバネに粘り強く挑戦し続けてきた、入社3年目社員の「これまで」と「これから」</p>
                </dd>
              </dl>
            </a>
          </li> -->
          <!-- <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/332264" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic12.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>Sean Hill(インターン)</h4>
                  <p>番外編 | ビジネスの立ち上げや仕組み化を学べるベンチャー企業でインターンがしたい。起業を目指すインターン生の奮闘記</p>
                </dd>
              </dl>
            </a>
          </li> -->
          <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/324034" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic11.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>齊藤 奈緒子(カスタマーサクセスマネージャー)</h4>
                  <p>vol. 14 | 「お客様に役立っているか、それを感じられるか」を軸にして辿り着いた場所。お客様の喜びを見据えてチーム力の向上に邁進する、カスタマーサクセスマネージャーの挑戦</p>
                </dd>
              </dl>
            </a>
          </li>
          <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/315127" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic10.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>松本夏弥(デザイナー)</h4>
                  <p>vol. 13 | 制約は喜んで受け入れる。ブランドコミュニケーションの設計を担うデザイナーの挑戦</p>
                </dd>
              </dl>
            </a>
          </li>
          <!-- <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/303776" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic8.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>窪田 将志(カスタマーサクセスマネージャー)</h4>
                  <p>vol. 12 | お客様にとっての本質的な価値を考える。真のプロフェッショナルを目指すカスタマーサクセスの挑戦</p>
                </dd>
              </dl>
            </a>
          </li> -->
          <!-- <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/295060" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic9.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>Jenny Ip(事業推進チーム)</h4>
                  <p>vol. 11 | 変化が成長を加速させる。外資系ホテルのレベニューアナリストから不動産テックのアセットマネジメントへ転身した、社会人4年目の挑戦</p>
                </dd>
              </dl>
            </a>
          </li> -->
          <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/282260" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic7.png" alt="画像">
                </dt>
                <dd>
                  <h4>Patricia Sakai(プロダクトマネージャー)</h4>
                  <p>vol. 10 | 未経験でデザイナーからプロダクトマネージャーに転身。プロダクト戦略やビジネスの成長に貢献できる、PMのプロフェッショナルを目指す想いとは</p>
                </dd>
              </dl>
            </a>
          </li>
          <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/247859" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic1.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>滝澤 周平(コンプライアンスオフィサー)</h4>
                  <p>vol. 9 | 「投資」という枠組みをテクノロジーで変革したい。スタートアップで新規事業の立ち上げにチャレンジするコンプライアンスオフィサーの想い</p>
                </dd>
              </dl>
            </a>
          </li>
          
          <!-- <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/232995" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic2.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>Seth Luan(VP of Product)</h4>
                  <p>vol. 8 | 一人一人が自走するチームを作るのがリーダーの仕事。周囲を自然にモチベートするVP of Productのチームビルディング術</p>
                </dd>
              </dl>
            </a>
          </li> -->
          <!-- <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/225861" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic3.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>Swarna Jana(QA Manager)</h4>
                  <p>vol. 7 | コミュニケーションと透明性が何より大切。地理的に分散したチームでゴールを達成させるQAマネージャーの仕事術</p>
                </dd>
              </dl>
            </a>
          </li> -->
          <!-- <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/209874" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic4.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>小林理沙(営業/カスタマーサクセス)</h4>
                  <p>vol. 6 | 業界の変化の節目に立ち会いたい。営業とカスタマーサクセスの兼務で見えてきた、自分なりの役割と貢献の在り方</p>
                </dd>
              </dl>
            </a>
          </li>
          <li>
            <a href="https://www.wantedly.com/companies/wealth-park/post_articles/204307" target="_blank">
              <dl>
                <dt>
                  <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_wantedly_pic5.jpg" alt="画像">
                </dt>
                <dd>
                  <h4>梁川舞乃(インターン)</h4>
                  <p>番外編 | 年齢や経験に関わらず、フェアな挑戦の場が与えられる。WealthPark初のインターン生の奮闘記。</p>
                </dd>
              </dl>
            </a>
          </li> -->
        </ul>
        <div class="button--transparent career-wantedly__button">
          <a href="https://www.wantedly.com/companies/wealth-park/stories" target="_blank">一覽を見る(Wantedly)</a>
        </div>
    </div>
  </section>
  <section class="career-story">
    <div class="page-name__inner page-name__inner--career">
      <h2 class="page-name__title">関連記事</h2>
    </div>
    <div class="career-story__inner">
          <ul class="blog-articles__list">
            <?php
              $args = array(
                'posts_per_page' => 6,
                'post_type' => 'wealthpark',
                'tag_id' => 57,
                'post_status' => 'publish',
                'no_found_rows' => true
              );
              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) {
                  while ($the_query->have_posts()) {
                      $the_query->the_post();
                      $category = get_the_terms(get_the_ID(), "category");
                      $tags = array_map(function ($tag) {
                          global $_;
                          return "
                          <li class='blog-articles__meta-item'>
                            <a class='blog-articles__meta-link' href='{$_(get_term_link($tag->term_id))}'>
                              {$_($tag->name)}
                            </a>
                          </li>";
                      }, get_the_tags());
                      echo "
                  <li class='blog-articles__item'>
                    <div class='blog-articles__item-header'>
                      <a class='blog-articles__item-category' href='{$_(get_term_link($category[0]->term_id))}'>{$category[0]->name}</a>
                      <p class='blog-articles__item-date'>{$_(get_the_date('Y.m.d'))}</p>
                    </div>
                    <a class='blog-articles__item-thumb' href='{$_(get_the_permalink())}'>
                      <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' />
                    </a>
                    <div class='blog-articles__item-body'>
                    <p class='blog-articles__item-body--inner'>
                      {$_(get_the_title())}
                    </p>
                  </div>
                  <ul class='blog-articles__meta'>
                      {$_(implode($tags))}
                  </ul>
                  </li>";
                  }
              }
              wp_reset_query();
            ?>
          </ul>
    </div>
  </section>
  <section class="career-identity">
          <h2 class="page-name__title">Behavior Identity</h2>
          <section class="career-image--middle">
            <img loading='lazy' src="<?=get_template_directory_uri() ?>/corporate/img/career_bg_pic2.png" alt="" />
          </section>
          <p class="career-identity__description">「グローバル」「クロスボーダー」という強い意思とメッセージを込めるため、<br />英語で表現を統一しています。</p>
          <dl class="career-identity__box">
            <dt class="career-identity__box-title">CUSTOMER CENTRIC</dt>
            <dd class="career-identity__box-item">
              We act and think based on our customers' expectation and needs. Our business dedicates to providing and adding values for our customers.
            </dd>
          </dl>
          <dl class="career-identity__box">
            <dt class="career-identity__box-title">GO BEYOND</dt>
            <dd class="career-identity__box-item">
              We go beyond our roles and positions to take actions that we know will help the business as a whole. We are always proactively interacting and helping each other.
            </dd>
          </dl>
          <dl class="career-identity__box">
            <dt class="career-identity__box-title">APPRECIATION AND RESPECT</dt>
            <dd class="career-identity__box-item">
              We respect diversity and communicate appreciation to the team, and show it with words and acting.
            </dd>
          </dl>
          <dl class="career-identity__box">
            <dt class="career-identity__box-title">COMMIT TO RESULTS</dt>
            <dd class="career-identity__box-item">
              When we commit to something, we will go the distance. No matter what the difficulty is we think about why we can do it, not why we cannot, and stick to delivering the results.
            </dd>
          </dl>
          <dl class="career-identity__box">
            <dt class="career-identity__box-title">DO THE RIGHT THING</dt>
            <dd class="career-identity__box-item">
              We always act with integrity and honesty to the society. We take pride in doing the right things.
            </dd>
          </dl>
  </section>
  <section class="container career-banner">
      <div class="container__inner career-banner__inner">
          <!-- <ul class="career-banner__twoTeams">
            <li>
              <a href="https://www.wantedly.com/companies/wealth-park" target="_blank">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_banner_pic2.jpg" alt="画像">
              </a>
            </li>
            <li>
              <a href="https://www.linkedin.com/company/wealthpark/" target="_blank">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_banner_pic1.jpg" alt="画像">
              </a>
            </li>
          </ul> -->
          <ul class="career-banner__fourTeams">
            <li>
              <a href="https://www.linkedin.com/company/wealthpark/" target="_blank">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_banner_pic1.jpg" alt="画像">
              </a>
            </li>
            <li>
              <a href="https://twitter.com/WP_saiyou" target="_blank">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_banner_pic7.jpg" alt="画像">
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/wealthpark_hr/" target="_blank">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_banner_pic8.jpg" alt="画像">
              </a>
            </li>
            <li>
              <a href="https://takahirofujii.dev/" target="_blank">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_banner_pic9.jpg" alt="画像">
              </a>
            </li>
            <!-- <li>
              <a href="https://note.com/kazuhiko_y" target="_blank">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_banner_pic4.jpg" alt="画像">
              </a>
            </li>
            <li>
              <a href="https://note.com/halchi_cst412" target="_blank">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_banner_pic10.jpg" alt="画像">
              </a>
            </li> -->
            <li>
              <a href="https://note.com/yukikagaya/n/nfd5ef3c4f6a4" target="_blank">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_banner_pic12.jpg" alt="画像">
              </a>
            </li>
            <li>
              <a href="https://www.instagram.com/wealthpark_ebisugohan/" target="_blank">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/careers_banner_pic11.jpg" alt="画像">
              </a>
            </li>
            <li>
              <a href="https://anchor.fm/wealthpark/episodes/001-WealthPark-e1m9cjl?%24web_only=true&_branch_match_id=1066176310905619319&utm_source=web&utm_campaign=web-share&utm_medium=sharing&_branch_referrer=H4sIAAAAAAAAA8soKSkottLXLy7IL8lMq0zMS87IL9ItT03SSywo0MvJzMvWT9V3CU%2FPTaxyNCooTgIAn5UEPjAAAAA%3D" target="_blank">
                <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/corporate/img/podcast.jpeg" alt="画像">
              </a>
            </li>
          </ul>
      </div>
  </section>
  <section class="career-image">
          <img loading='lazy' src="<?=get_template_directory_uri() ?>/corporate/img/career-footer-image.jpg" alt="" />
  </section>

<footer>
  <?php include "template-parts/footer-main.php" ?>
  <?php include "template-parts/footer-sub-corporate.php" ?>
</footer>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery.magnific-popup.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
<script>
// // メインナビのページスクロール //
$(function () {
    $('a[href^="#"]').click(function() {
      // スクロールの速度
      let speed = 400; // ミリ秒で記述
      let href = $(this).attr("href");
      let target = $(href == "#" || href == "" ? 'html' : href);
      let headerHeight = $('.menu__navbar').outerHeight(); //固定ヘッダーの高さ
      let position = target.offset().top - headerHeight; //ターゲットの座標からヘッダの高さ分引く
      $('body,html').animate({
        scrollTop: position
      }, speed, 'swing');
      return false;
    });
});
// magnificPopupの表示
$(function () {
    $('.career-modal__team').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: {  //ギャラリーオプション
            // enabled: true
        }
    });
});
// スマートフォンで全画面表示
$(document).ready(function(){
var hSize = $(window).height();
  $('.career-visual').height(hSize); // アドレスバーを除いたサイズを付与
});
$(window).resize(function(){ // ページをリサイズした時の処理
var hSize = $(window).height();
  $('.career-visual').height(hSize); // アドレスバーを除いたサイズを付与
});
</script>

<script type="text/javascript">
  function dropsort() {
      var browser = document.sort_form.sort.value;
      location.href = browser
  }
</script>
</body>
</html>
