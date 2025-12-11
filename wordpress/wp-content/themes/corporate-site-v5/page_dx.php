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
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/dx/css/dx-style.css?v=7">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/jquery-3.3.1.min.js?<?php echo date('Ymd-Hi'); ?>"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/js/modal-multi.js?<?php echo date('Ymd-Hi'); ?>"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/three.r134.min.js"></script>
  <script src="<?php echo get_template_directory_uri() ?>/js/vanta.dots.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="icon" sizes="192x192" href="<?php echo get_template_directory_uri() ?>/app/img/icon.png">
  <link rel="canonical" href="https://wealth-park.com/dx/" />
  <?php include_once("ga_tracking.php") ?>
</head>

<body>
  <?php include "tag-manager-body.php" ?>

  <?php include "template-parts/header-dx.php" ?>

  <!-- Hero Section -->
  <section class="dx-hero" id="dx-hero-vanta">
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
        <a href="#recruitment" class="dx-button dx-button--secondary">採用情報</a>
      </div>
    </div>
    <!-- Scroll Indicator -->
    <div class="dx-hero__scroll">
      <span class="dx-hero__scroll-text">SCROLL</span>
      <div class="dx-hero__scroll-icon"></div>
    </div>
  </section>

  <!-- Features Section -->
  <section class="dx-features">
    <div class="dx-container">
      <p class="dx-section-label">Three Key Strengths</p>
      <div class="dx-title-with-border">
        <h2 class="dx-section-title">WealthParkが選ばれる3つの特徴</h2>
        <div class="dx-title-border"></div>
      </div>

      <div class="dx-features__list">
        <!-- Feature 1 -->
        <div class="dx-feature dx-feature--right">
          <div class="dx-feature__content">
            <span class="dx-feature__number">01</span>
            <h3 class="dx-feature__title">進化を続ける不動産業界に<br>特化したコンサルティング</h3>
            <p class="dx-feature__description">
              私たちは不動産業界に特化することで培った深い専門知識と、業界動向を先読みする洞察力を武器に、クライアントの成長を加速させます。
            </p>
          </div>
          <div class="dx-feature__image">
            <img loading='lazy' src="https://wealth-park.com/wp-content/uploads/2025/12/001.jpg" alt="進化を続ける不動産業界に特化したコンサルティング" />
          </div>
        </div>

        <!-- Feature 2 -->
        <div class="dx-feature dx-feature--left">
          <div class="dx-feature__content">
            <span class="dx-feature__number">02</span>
            <h3 class="dx-feature__title">不動産ビジネスの最上流から<br>プロジェクトデリバリー</h3>
            <p class="dx-feature__description">
              豊富な実績と技術力を活用し、市場調査や事業展開といった最上流の段階からプロジェクトデリバリーします。
            </p>
          </div>
          <div class="dx-feature__image">
            <img loading='lazy' src="https://wealth-park.com/wp-content/uploads/2025/12/002.jpg" alt="不動産ビジネスの最上流からプロジェクトデリバリー" />
          </div>
        </div>

        <!-- Feature 3 -->
        <div class="dx-feature dx-feature--right">
          <div class="dx-feature__content">
            <span class="dx-feature__number">03</span>
            <h3 class="dx-feature__title">ビジネス・BPR・ITなど幅広い<br>コンサルティングメニュー提供</h3>
            <p class="dx-feature__description">
              ビジネス戦略コンサルティングを軸としながら、BPR（業務改革）、IT、組織・人材開発など、多様なコンサルティングメニューを提供しています。
            </p>
          </div>
          <div class="dx-feature__image">
            <img loading='lazy' src="https://wealth-park.com/wp-content/uploads/2025/12/003.jpg" alt="ビジネス・BPR・ITなど幅広いコンサルティングメニュー提供" />
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Project Case Studies Section -->
  <section class="dx-cases">
    <div class="dx-container">
      <p class="dx-section-label">Project Case Studies</p>
      <div class="dx-title-with-border">
        <h2 class="dx-section-title">プロジェクト事例</h2>
        <div class="dx-title-border"></div>
      </div>
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
  <section class="dx-consultants">
    <div class="dx-container">
      <p class="dx-section-label">Our Consultants</p>
      <div class="dx-title-with-border">
        <h2 class="dx-section-title">コンサルタント紹介</h2>
        <div class="dx-title-border"></div>
      </div>
      <p class="dx-section-subtitle">大手事業会社、コンサルティングファーム出身者など幅広い人材が活躍中です。</p>

      <!-- Desktop: Grid -->
      <div class="dx-consultants__grid dx-consultants__grid--desktop">
        <!-- Consultant 1 -->
        <div class="dx-consultant-card modal-syncer" data-target="modal-content-dx-01">
          <div class="dx-consultant-card__photo">
            <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一">
          </div>
          <h3 class="dx-consultant-card__name">村上 朝一</h3>
          <p class="dx-consultant-card__title">執行役員<br>ディレクター</p>
          <p class="dx-consultant-card__education">慶応義塾大学 政策・メディア研究科 修了</p>
          <p class="dx-consultant-card__description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事</p>
        </div>

        <!-- Consultant 2 -->
        <div class="dx-consultant-card modal-syncer" data-target="modal-content-dx-02">
          <div class="dx-consultant-card__photo">
            <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一">
          </div>
          <h3 class="dx-consultant-card__name">村上 朝一</h3>
          <p class="dx-consultant-card__title">執行役員<br>ディレクター</p>
          <p class="dx-consultant-card__education">慶応義塾大学 政策・メディア研究科 修了</p>
          <p class="dx-consultant-card__description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事</p>
        </div>

        <!-- Consultant 3 -->
        <div class="dx-consultant-card modal-syncer" data-target="modal-content-dx-03">
          <div class="dx-consultant-card__photo">
            <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一">
          </div>
          <h3 class="dx-consultant-card__name">村上 朝一</h3>
          <p class="dx-consultant-card__title">執行役員<br>ディレクター</p>
          <p class="dx-consultant-card__education">慶応義塾大学 政策・メディア研究科 修了</p>
          <p class="dx-consultant-card__description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事</p>
        </div>

        <!-- Consultant 4 -->
        <div class="dx-consultant-card modal-syncer" data-target="modal-content-dx-04">
          <div class="dx-consultant-card__photo">
            <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一">
          </div>
          <h3 class="dx-consultant-card__name">村上 朝一</h3>
          <p class="dx-consultant-card__title">執行役員<br>ディレクター</p>
          <p class="dx-consultant-card__education">慶応義塾大学 政策・メディア研究科 修了</p>
          <p class="dx-consultant-card__description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事</p>
        </div>
      </div>

      <!-- Mobile: Swiper Carousel -->
      <div class="dx-consultants__swiper dx-consultants__grid--mobile">
        <div class="swiper consultants-swiper-v2">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="dx-consultant-card modal-syncer" data-target="modal-content-dx-01">
                <div class="dx-consultant-card__photo">
                  <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一">
                </div>
                <h3 class="dx-consultant-card__name">村上 朝一</h3>
                <p class="dx-consultant-card__title">執行役員<br>ディレクター</p>
                <p class="dx-consultant-card__education">慶応義塾大学 政策・メディア研究科 修了</p>
                <p class="dx-consultant-card__description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="dx-consultant-card modal-syncer" data-target="modal-content-dx-02">
                <div class="dx-consultant-card__photo">
                  <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一">
                </div>
                <h3 class="dx-consultant-card__name">村上 朝一</h3>
                <p class="dx-consultant-card__title">執行役員<br>ディレクター</p>
                <p class="dx-consultant-card__education">慶応義塾大学 政策・メディア研究科 修了</p>
                <p class="dx-consultant-card__description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="dx-consultant-card modal-syncer" data-target="modal-content-dx-03">
                <div class="dx-consultant-card__photo">
                  <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一">
                </div>
                <h3 class="dx-consultant-card__name">村上 朝一</h3>
                <p class="dx-consultant-card__title">執行役員<br>ディレクター</p>
                <p class="dx-consultant-card__education">慶応義塾大学 政策・メディア研究科 修了</p>
                <p class="dx-consultant-card__description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="dx-consultant-card modal-syncer" data-target="modal-content-dx-04">
                <div class="dx-consultant-card__photo">
                  <img src="https://wealth-park.com/wp-content/themes/wp-next-landing-page/app/img/team_ph_murakami.png" alt="村上 朝一">
                </div>
                <h3 class="dx-consultant-card__name">村上 朝一</h3>
                <p class="dx-consultant-card__title">執行役員<br>ディレクター</p>
                <p class="dx-consultant-card__education">慶応義塾大学 政策・メディア研究科 修了</p>
                <p class="dx-consultant-card__description">アクセンチュア、グラクソ・スミスクライン、ソフトバンクロボティクスにて、事業戦略、ビジネス・インテリジェンス（BI）、業務企画、システム企画/運用などに従事</p>
              </div>
            </div>
          </div>
          <!-- Pagination -->
          <div class="swiper-pagination"></div>
          <!-- Navigation Arrows -->
          <div class="swiper-button-prev"></div>
          <div class="swiper-button-next"></div>
        </div>
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
  <section class="dx-recruitment" id="recruitment">
    <div class="dx-container">
      <p class="dx-section-label">Join Our Team</p>
      <div class="dx-title-with-border">
        <h2 class="dx-section-title">採用情報</h2>
        <div class="dx-title-border"></div>
      </div>
      <p class="dx-section-subtitle">DXコンサルティングチームでは、以下の職種を募集しております。</p>

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
        </div>
      </div>

      <!-- Apply Button -->
      <div class="dx-recruitment__apply">
        <a href="https://herp.careers/v1/wealthpark/requisition-groups/14d8a86f-60b1-4319-bc3a-b019bac74522" class="dx-button dx-button--apply" target="_blank" rel="noopener">応募する</a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <?php include "template-parts/footer-main.php" ?>
  </footer>

  <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
  <?php include_once("tag_ptengine.php") ?>

  <script>
  // Vanta.js DOTS background effect for hero section
  if (typeof VANTA !== 'undefined' && typeof THREE !== 'undefined') {
    VANTA.DOTS({
      el: "#dx-hero-vanta",
      mouseControls: true,
      touchControls: true,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      color: 0x0,
      color2: 0x0,
      backgroundColor: 0xffffff,
      showLines: false
    });
  }

  // Smooth scroll for anchor links
  document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll for recruitment section link
    const recruitmentLink = document.querySelector('a[href="#recruitment"]');
    if (recruitmentLink) {
      recruitmentLink.addEventListener('click', function(e) {
        e.preventDefault();
        const targetSection = document.getElementById('recruitment');
        if (targetSection) {
          targetSection.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
      });
    }

    // Typewriter effect for hero title
    const titleElement = document.querySelector('.dx-hero__title');
    const text = titleElement.textContent.trim();
    titleElement.textContent = '';
    titleElement.style.borderRight = '2px solid #1a1a1a';
    titleElement.style.paddingRight = '5px';
    titleElement.style.display = 'inline-block';

    let index = 0;
    const speed = 100; // typing speed in milliseconds

    function typeWriter() {
      if (index < text.length) {
        titleElement.textContent += text.charAt(index);
        index++;
        setTimeout(typeWriter, speed);
      } else {
        // Remove cursor after typing is complete
        setTimeout(function() {
          titleElement.style.borderRight = 'none';
        }, 500);
      }
    }

    // Start typing after a short delay
    setTimeout(typeWriter, 300);

    // Scroll Animation (Intersection Observer)
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };

    const observer = new IntersectionObserver(function(entries, observer) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('dx-animate-in');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    // Observe all sections and elements
    const animateElements = document.querySelectorAll('.dx-features, .dx-cases, .dx-consultants-team, .dx-recruitment, .dx-feature, .dx-case, .dx-job');
    animateElements.forEach(function(element) {
      element.classList.add('dx-animate');
      observer.observe(element);
    });

    // Initialize Swiper for consultants carousel (mobile only)
    if (typeof Swiper !== 'undefined') {
      const consultantsSwiper = new Swiper('.consultants-swiper-v2', {
        slidesPerView: 1,
        spaceBetween: 20,
        centeredSlides: true,
        loop: true,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        touchRatio: 1,
        grabCursor: true,
      });
    }
  });
  </script>
</body>

</html>
