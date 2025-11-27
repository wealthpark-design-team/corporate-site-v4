<?php
/*
Template Name: DX Consulting Service Page
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <?php include "tag-manager-head.php" ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no">
  <title>DXコンサルティング | 不動産市場で、戦略を描く | WealthPark</title>
  <meta name="description" content="経営の最上流で、未来を設計する。WealthParkのDXコンサルティングサービスは、不動産業界に特化したコンサルティングを提供します。">
  <meta property="og:title" content="DXコンサルティング | 不動産市場で、戦略を描く | WealthPark">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://wealth-park.com/dx/" />
  <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/img/ogp/OGP_WP_dx.jpg">
  <meta property="og:site_name" content="WealthPark DX Consulting" />
  <meta property="og:description" content="経営の最上流で、未来を設計する。WealthParkのDXコンサルティングサービスは、不動産業界に特化したコンサルティングを提供します。">
  <meta name="twitter:card" content="summary_large_image" />
  <?php include "external-css-js-common.php" ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/corporate/css/style.css?<?php echo date('Ymd-Hi'); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dx/css/dx-style.css?v=1">
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/modal-multi.js?<?php echo date('Ymd-Hi'); ?>"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="canonical" href="https://wealth-park.com/dx/" />
  <?php include_once("ga_tracking.php") ?>
</head>

<body>
  <?php include "tag-manager-body.php" ?>

  <?php include "header-common.php" ?>

  <!-- Hero Section -->
  <section class="dx-hero">
    <div class="dx-hero__background"></div>
    <div class="dx-hero__inner">
      <h1 class="dx-hero__title">
        不動産市場で、戦略を描く
      </h1>
      <p class="dx-hero__subtitle">
        経営の最上流で、未来を設計する
      </p>
      <div class="dx-hero__buttons">
        <a href="<?php echo esc_url(home_url('/')); ?>corporate/contact/" class="dx-button dx-button--primary">お問い合わせ</a>
        <a href="<?php echo esc_url(home_url('/')); ?>careers/" class="dx-button dx-button--secondary">採用情報</a>
      </div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="dx-features">
    <div class="dx-container">
      <h2 class="dx-section-title">WealthParkが選ばれる3つの特徴</h2>

      <div class="dx-features__grid">
        <!-- Feature 1 -->
        <div class="dx-feature">
          <div class="dx-feature__image">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/point_001.png" alt="成長を続ける不動産業界に特化したコンサルティング" />
          </div>
          <h3 class="dx-feature__title">成長を続ける不動産業界に特化したコンサルティング</h3>
          <p class="dx-feature__description">
            私たちは不動産業界に特化することで培った深い専門知識と、業界動向を先読みする洞察力を武器に、クライアントの成長を加速させます。
          </p>
        </div>

        <!-- Feature 2 -->
        <div class="dx-feature">
          <div class="dx-feature__image">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/business_top_point2.png" alt="不動産ビジネスの最上流からプロジェクトデリバリー" />
          </div>
          <h3 class="dx-feature__title">不動産ビジネスの最上流からプロジェクトデリバリー</h3>
          <p class="dx-feature__description">
            豊富な実績と技術力を活用し、市場調査や事業展開といった最上流の段階からプロジェクトデリバリーします。
          </p>
        </div>

        <!-- Feature 3 -->
        <div class="dx-feature">
          <div class="dx-feature__image">
            <img loading='lazy' src="<?php echo get_template_directory_uri() ?>/business/img/business_top_point3.png" alt="ビジネス・BPR・ITなど幅広いコンサルティングメニュー提供" />
          </div>
          <h3 class="dx-feature__title">ビジネス・BPR・ITなど幅広いコンサルティングメニュー提供</h3>
          <p class="dx-feature__description">
            ビジネス戦略コンサルティングを軸としながら、BPR（業務改革）、IT、組織・人材開発など、多様なコンサルティングメニューを提供しています。
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Project Case Studies Section -->
  <section class="dx-cases">
    <div class="dx-container">
      <h2 class="dx-section-title">プロジェクト事例</h2>
      <p class="dx-section-subtitle">経営課題の最上流からプロジェクト導出し、ビジネス、BPR、ITなど幅広いテーマで顧問契約に従事しています。</p>

      <div class="dx-cases__grid">
        <?php
        $_ = function ($str) {
            return $str;
        };
        $query = new WP_Query(array(
            'post_type' => 'park',
            'posts_per_page' => -1,
            'post_status' => 'publish',
            'no_found_rows' => true,
            'tax_query' => array(
              array(
                  'taxonomy' => 'park_tag',
                  'terms' => 267, // DXコンサルティングサービス事例
                  'field' => 'id'
              )
          )
        ));
        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                $category = get_the_terms(get_the_ID(), "park_category");
                echo "
                  <div class='dx-case'>
                    <a href='{$_(get_permalink())}' class='dx-case__link-wrapper'>
                      <div class='dx-case__image'>
                        <img loading='lazy' src='{$_(forceWriteThumbnailUrl(get_the_ID()))}' alt='{$_(get_the_title())}' />
                      </div>
                      <h3 class='dx-case__title'>{$_(get_the_title())}</h3>
                      <span class='dx-case__link'>事例はこちら</span>
                    </a>
                  </div>
                  ";
            }
        } else {
            // No posts found - show placeholder
            echo "<p style='text-align:center; width:100%; color:#666;'>現在、プロジェクト事例を準備中です。</p>";
        }
        wp_reset_query();
        ?>
      </div>
    </div>
  </section>

  <!-- Consultants Section -->
  <section class="container team dx-consultants-team">
    <div class="container__inner team__inner">
      <h2 class="dx-section-title">コンサルタント紹介</h2>
      <p class="dx-section-subtitle">大手事業会社、コンサルティングファーム出身者など幅広い人材が活躍中です。</p>

      <div class="team">
        <ul class="team-lists">
          <li class="team-lists__person modal-syncer" data-target="modal-content-dx-01">
            <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一"></p>
            <p class="team-lists__person-name">村上 朝一</p>
            <p class="team-lists__person-role">WealthPark株式会社<br>執行役員<br>DXコンサルティング事業部<br>事業部長</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-dx-02">
            <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一"></p>
            <p class="team-lists__person-name">村上 朝一</p>
            <p class="team-lists__person-role">WealthPark株式会社<br>執行役員<br>DXコンサルティング事業部<br>事業部長</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-dx-03">
            <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一"></p>
            <p class="team-lists__person-name">村上 朝一</p>
            <p class="team-lists__person-role">WealthPark株式会社<br>執行役員<br>DXコンサルティング事業部<br>事業部長</p>
          </li>
          <li class="team-lists__person modal-syncer" data-target="modal-content-dx-04">
            <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一"></p>
            <p class="team-lists__person-name">村上 朝一</p>
            <p class="team-lists__person-role">WealthPark株式会社<br>執行役員<br>DXコンサルティング事業部<br>事業部長</p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- Modal Content -->
  <div id="modal-content-dx-01" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一"></p>
    <p class="team-lists__person-name">村上 朝一</p>
    <p class="team-lists__person-role">WealthPark株式会社<br>執行役員<br>DXコンサルティング事業部 <br>事業部長</p>
    <p class="team-lists__person-description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事。WealthParkではDXコンサルティングサービスの責任者を務め、2025年4月より執行役員、DXコンサルティング事業部 事業部長に就任。<br> <br>慶応義塾大学 政策・メディア研究科 修了</p>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-dx-02" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一"></p>
    <p class="team-lists__person-name">村上 朝一</p>
    <p class="team-lists__person-role">WealthPark株式会社<br>執行役員<br>DXコンサルティング事業部 <br>事業部長</p>
    <p class="team-lists__person-description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事。WealthParkではDXコンサルティングサービスの責任者を務め、2025年4月より執行役員、DXコンサルティング事業部 事業部長に就任。<br> <br>慶応義塾大学 政策・メディア研究科 修了</p>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-dx-03" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一"></p>
    <p class="team-lists__person-name">村上 朝一</p>
    <p class="team-lists__person-role">WealthPark株式会社<br>執行役員<br>DXコンサルティング事業部 <br>事業部長</p>
    <p class="team-lists__person-description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事。WealthParkではDXコンサルティングサービスの責任者を務め、2025年4月より執行役員、DXコンサルティング事業部 事業部長に就任。<br> <br>慶応義塾大学 政策・メディア研究科 修了</p>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>
  <div id="modal-content-dx-04" class="modal-content">
    <p class="team-lists__person-photo"><img class="" src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一"></p>
    <p class="team-lists__person-name">村上 朝一</p>
    <p class="team-lists__person-role">WealthPark株式会社<br>執行役員<br>DXコンサルティング事業部 <br>事業部長</p>
    <p class="team-lists__person-description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事。WealthParkではDXコンサルティングサービスの責任者を務め、2025年4月より執行役員、DXコンサルティング事業部 事業部長に就任。<br> <br>慶応義塾大学 政策・メディア研究科 修了</p>
    <p><a id="modal-close" class="modal-content__button--close"><i class="material-icons">close</i></a></p>
  </div>

  <!-- Recruitment Section -->
  <section class="dx-recruitment">
    <div class="dx-container">
      <h2 class="dx-section-title">採用情報</h2>

      <div class="dx-recruitment__grid">
        <!-- Job 1 -->
        <div class="dx-job">
          <div class="dx-job__tags">
            <span class="dx-job__tag">中途採用</span>
            <span class="dx-job__tag">経営・事業企画</span>
            <span class="dx-job__tag">フルタイム</span>
          </div>
          <h3 class="dx-job__title">DXコンサルタント（経営・事業・業務コンサル経験）</h3>
          <p class="dx-job__location">勤務地：東京</p>
          <ul class="dx-job__description">
            <li>不動産業界のクライアント企業に対する経営・事業戦略の立案支援</li>
            <li>業務改革（BPR）プロジェクトのリード、プロジェクトマネジメント</li>
            <li>IT戦略策定、システム導入支援、デジタル化推進</li>
          </ul>
          <div class="dx-job__buttons">
            <a href="#" class="dx-button dx-button--outline">技術記事</a>
            <a href="#" class="dx-button dx-button--outline">ポリシー記事</a>
            <a href="#" class="dx-button dx-button--outline">キャリア座談会</a>
          </div>
        </div>

        <!-- Job 2 -->
        <div class="dx-job">
          <div class="dx-job__tags">
            <span class="dx-job__tag">中途採用</span>
            <span class="dx-job__tag">システム開発経験</span>
            <span class="dx-job__tag">フルタイム</span>
          </div>
          <h3 class="dx-job__title">DXコンサルタント（システム開発経験）</h3>
          <p class="dx-job__location">勤務地：東京</p>
          <ul class="dx-job__description">
            <li>システム導入・システム開発プロジェクトのPMO</li>
            <li>クライアント企業のシステム全体最適化、モダナイゼーション支援</li>
            <li>データ活用基盤の構築、データドリブンな経営支援</li>
          </ul>
          <div class="dx-job__buttons">
            <a href="#" class="dx-button dx-button--outline">技術記事</a>
            <a href="#" class="dx-button dx-button--outline">ポリシー記事</a>
            <a href="#" class="dx-button dx-button--outline">キャリア座談会</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <?php include "template-parts/footer-main.php" ?>
  </footer>

  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
  <?php include_once("tag_ptengine.php") ?>
</body>

</html>
