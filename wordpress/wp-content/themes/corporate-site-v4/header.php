<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header id="site-header" class="site-header">
    <nav class="header-nav">
        <!-- Desktop Navigation -->
        <div class="desktop-nav">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-wealthpark-black.svg'); ?>" alt="WealthPark" width="187" height="35">
            </a>

            <ul class="nav-menu">
                <!-- ニュース -->
                <li class="nav-item has-dropdown">
                    <button class="nav-link dropdown-toggle">
                        ニュース
                        <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="https://wealth-park.com/ja/news/">ニュース</a></li>
                        <li><a href="<?php echo esc_url(home_url('/business/release-note')); ?>">プロダクト新機能・改善</a></li>
                        <li><a href="https://prtimes.jp/main/html/searchrlp/company_id/40576" target="_blank">プレスリリース</a></li>
                    </ul>
                </li>

                <!-- サービス -->
                <li class="nav-item has-dropdown">
                    <button class="nav-link dropdown-toggle">
                        サービス
                        <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="<?php echo esc_url(home_url('/business')); ?>">
                                不動産管理会社向けサービス<br>
                                <small>WealthParkビジネス</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://owner-app.wealth-park.com" target="_blank">
                                不動産オーナー向けサービス<br>
                                <small>WealthParkオーナーアプリ</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://wealthpark-ret.com/" target="_blank">
                                海外不動産投資家向けサービス<br>
                                <small>WealthPark RealEstate Technologies</small>
                            </a>
                        </li>
                        <li>
                            <a href="https://wealthpark-alt.com/" target="_blank">
                                不動産関連のクラウドファンディングサービス<br>
                                <small>WealthPark Investment</small>
                            </a>
                        </li>
                    </ul>
                </li>

                <!-- 会社概要 -->
                <li class="nav-item">
                    <a href="<?php echo esc_url(home_url('/corporate/company')); ?>" class="nav-link">会社概要</a>
                </li>

                <!-- 採用 -->
                <li class="nav-item has-dropdown">
                    <button class="nav-link dropdown-toggle">
                        採用
                        <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo esc_url(home_url('/careers')); ?>">中途採用</a></li>
                        <li><a href="<?php echo esc_url(home_url('/park')); ?>">採用オウンドメディア「Park」</a></li>
                    </ul>
                </li>

                <!-- 記事 -->
                <li class="nav-item has-dropdown">
                    <button class="nav-link dropdown-toggle">
                        記事
                        <svg class="dropdown-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-wide">
                        <li class="dropdown-header">オウンドメディア</li>
                        <li><a href="<?php echo esc_url(home_url('/blog')); ?>">WealthParkブログ</a></li>
                        <li><a href="https://wealthpark-lab.com" target="_blank">WealthPark研究所</a></li>
                        <li><a href="<?php echo esc_url(home_url('/park')); ?>">採用オウンドメディア「Park」</a></li>
                        <li class="dropdown-divider"></li>
                        <li class="dropdown-header">特集</li>
                        <li><a href="https://wealth-park.com/ja/business/seminar">イベント・セミナー</a></li>
                        <li><a href="https://wealth-park.com/ja/tag/keypersons-voice/">Key Person's Voice</a></li>
                        <li><a href="https://wealth-park.com/ja/park_category/person/">社員インタビュー</a></li>
                    </ul>
                </li>

                <!-- CTAボタン -->
                <li class="nav-item nav-cta">
                    <a href="<?php echo esc_url(home_url('/business')); ?>" class="btn btn-outline">不動産管理会社の方</a>
                    <a href="https://owner.wealth-park.com/" target="_blank" class="btn btn-solid">パソコン版</a>
                </li>
            </ul>
        </div>

        <!-- Mobile Navigation -->
        <div class="mobile-nav">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="mobile-logo">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/logo-wealthpark-black.svg'); ?>" alt="WealthPark" width="165" height="31" id="mobile-logo-img">
            </a>

            <button class="hamburger" id="hamburger-btn" aria-label="メニュー">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

        <!-- Mobile Menu Content -->
        <div class="mobile-menu" id="mobile-menu">
            <div class="mobile-menu-content">
                <ul class="mobile-nav-list">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>

                    <li class="has-submenu">
                        <button class="submenu-toggle">
                            ニュース
                            <svg class="submenu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <ul class="mobile-submenu">
                            <li><a href="https://wealth-park.com/ja/news/">ニュース</a></li>
                            <li><a href="<?php echo esc_url(home_url('/business/release-note')); ?>">プロダクト新機能・改善</a></li>
                            <li><a href="https://prtimes.jp/main/html/searchrlp/company_id/40576" target="_blank">プレスリリース</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <button class="submenu-toggle">
                            サービス
                            <svg class="submenu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <ul class="mobile-submenu">
                            <li><a href="<?php echo esc_url(home_url('/business')); ?>">不動産管理会社向けサービス<br><small>WealthParkビジネス</small></a></li>
                            <li><a href="https://owner-app.wealth-park.com" target="_blank">不動産オーナー向けサービス<br><small>WealthParkオーナーアプリ</small></a></li>
                            <li><a href="https://wealthpark-ret.com/" target="_blank">海外不動産投資家向けサービス<br><small>WealthPark RealEstate Technologies</small></a></li>
                            <li><a href="https://wealthpark-alt.com/" target="_blank">不動産関連のクラウドファンディングサービス<br><small>WealthPark Investment</small></a></li>
                        </ul>
                    </li>

                    <li><a href="<?php echo esc_url(home_url('/corporate/company')); ?>">会社概要</a></li>

                    <li class="has-submenu">
                        <button class="submenu-toggle">
                            採用
                            <svg class="submenu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <ul class="mobile-submenu">
                            <li><a href="<?php echo esc_url(home_url('/careers')); ?>">中途採用</a></li>
                            <li><a href="<?php echo esc_url(home_url('/park')); ?>">採用オウンドメディア「Park」</a></li>
                        </ul>
                    </li>

                    <li class="has-submenu">
                        <button class="submenu-toggle">
                            記事
                            <svg class="submenu-icon" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" /></svg>
                        </button>
                        <ul class="mobile-submenu">
                            <li class="submenu-header">オウンドメディア</li>
                            <li><a href="<?php echo esc_url(home_url('/blog')); ?>">WealthParkブログ</a></li>
                            <li><a href="https://wealthpark-lab.com" target="_blank">WealthPark研究所</a></li>
                            <li><a href="<?php echo esc_url(home_url('/park')); ?>">採用オウンドメディア「Park」</a></li>
                            <li class="submenu-header">特集</li>
                            <li><a href="https://wealth-park.com/ja/business/seminar">イベント・セミナー</a></li>
                            <li><a href="https://wealth-park.com/ja/tag/keypersons-voice/">Key Person's Voice</a></li>
                            <li><a href="https://wealth-park.com/ja/park_category/person/">社員インタビュー</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Mobile Menu Footer -->
                <div class="mobile-menu-footer">
                    <a href="<?php echo esc_url(home_url('/business')); ?>" class="btn btn-outline-white">不動産管理会社の方</a>
                    <a href="https://owner.wealth-park.com/" target="_blank" class="btn btn-solid-white">パソコン版WealthPark</a>
                </div>
            </div>
        </div>
    </nav>
</header>
