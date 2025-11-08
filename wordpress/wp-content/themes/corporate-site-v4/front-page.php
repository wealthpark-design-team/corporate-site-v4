<?php get_header(); ?>

<main class="pt-16 lg:pt-[5.313rem]">
    <!-- Vanta.js背景エリア（固定） -->
    <div id="vanta-bg" class="fixed top-0 left-0 w-full h-screen -z-10"></div>

    <!-- Heroセクション -->
    <section class="hero-section">
        <!-- スクロールインジケーター -->
        <div class="hero-scroll-indicator">
            <div class="hero-scroll-text">
                SCROLL
            </div>
            <div class="hero-scroll-line">
                <div class="hero-scroll-progress"></div>
            </div>
        </div>

        <div class="hero-content-wrapper">
            <div class="hero-content">
                <!-- タイトル（タイプライター効果） -->
                <div class="hero-title-wrapper">
                    <!-- プレースホルダー（スペース確保） -->
                    <h1 class="hero-title hero-title-placeholder" aria-hidden="true">
                        <span class="hero-title-line1">
                            すべての人へ
                        </span>
                        <span class="hero-title-line2">
                            オルタナティブ資産への
                        </span>
                        <span class="hero-title-line3">
                            投資機会を。
                        </span>
                    </h1>

                    <!-- タイプライター表示 -->
                    <h1 class="hero-title hero-title-typing">
                        <span id="type-line1" class="hero-title-line1"></span>
                        <span id="type-line2" class="hero-title-line2"></span>
                        <span id="type-line3" class="hero-title-line3"></span>
                    </h1>
                </div>

                <!-- 説明文 -->
                <p class="hero-description">
                    不動産、アート、ワイン、未上場株式、インフラ。<br>
                    WealthParkはグローバルなプラットフォームをつくることで、一部の限られた人にしかアクセスできなかった「オルタナティブ資産への投資」を開放します。テクノロジーを使って、すべての人が平等にオルタナティブ資産への投資機会を得られる社会を目指します。
                </p>

                <!-- CTA -->
                <a href="<?php echo esc_url(home_url('/corporate/company/')); ?>" class="hero-cta group">
                    <span class="hero-cta-text">
                        WealthParkについて
                    </span>
                    <div class="hero-cta-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- Bannersセクション -->
    <section class="relative py-16 md:py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="space-y-16">
                <!-- 不動産テック -->
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">不動産テック</h2>
                        <div class="flex-1 h-0.5 bg-gradient-to-r from-blue-600/20 to-transparent"></div>
                    </div>

                    <div class="space-y-6">
                        <!-- ビジネス事業 -->
                        <a href="<?php echo esc_url(home_url('/business/')); ?>" class="group block">
                            <div class="flex items-center gap-6 p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-blue-200">
                                <div class="flex-shrink-0 w-20 h-20 md:w-24 md:h-24 rounded-xl overflow-hidden bg-gray-100">
                                    <?php
                                    $business_banner = get_template_directory_uri() . '/assets/images/banner_wpb_ja_001.jpg';
                                    ?>
                                    <img src="<?php echo esc_url($business_banner); ?>" alt="ビジネス事業" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-1 group-hover:text-blue-600 transition-colors">
                                        ビジネス事業
                                    </h3>
                                    <p class="text-sm md:text-base text-gray-600">
                                        不動産管理会社向けサービス
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-blue-50 flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                                        <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- アセットマネジメント事業 -->
                        <a href="https://wealth-park.com/asset-management/" target="_blank" rel="noopener noreferrer" class="group block">
                            <div class="flex items-center gap-6 p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-blue-200">
                                <div class="flex-shrink-0 w-20 h-20 md:w-24 md:h-24 rounded-xl overflow-hidden bg-gray-100">
                                    <?php
                                    $am_banner = get_template_directory_uri() . '/assets/images/banner_wpam_ja_001.jpg';
                                    ?>
                                    <img src="<?php echo esc_url($am_banner); ?>" alt="アセットマネジメント事業" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-1 group-hover:text-blue-600 transition-colors">
                                        アセットマネジメント事業
                                    </h3>
                                    <p class="text-sm md:text-base text-gray-600">
                                        不動産資産管理サービス
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-blue-50 flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                                        <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- フィンテック -->
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">フィンテック</h2>
                        <div class="flex-1 h-0.5 bg-gradient-to-r from-blue-600/20 to-transparent"></div>
                    </div>

                    <div class="space-y-6">
                        <!-- Investment事業 -->
                        <a href="https://wealthpark-alt.com/" target="_blank" rel="noopener noreferrer" class="group block">
                            <div class="flex items-center gap-6 p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-blue-200">
                                <div class="flex-shrink-0 w-20 h-20 md:w-24 md:h-24 rounded-xl overflow-hidden bg-gray-100">
                                    <?php
                                    $investment_banner = get_template_directory_uri() . '/assets/images/banner_wealthpark-investment_002.jpg';
                                    ?>
                                    <img src="<?php echo esc_url($investment_banner); ?>" alt="Investment事業" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-1 group-hover:text-blue-600 transition-colors">
                                        Investment事業
                                    </h3>
                                    <p class="text-sm md:text-base text-gray-600">
                                        クラウドファンディングサービス
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-blue-50 flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                                        <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- カンパニー -->
                <div class="space-y-8">
                    <div class="flex items-center gap-4">
                        <h2 class="text-3xl md:text-4xl font-bold text-gray-900">カンパニー</h2>
                        <div class="flex-1 h-0.5 bg-gradient-to-r from-blue-600/20 to-transparent"></div>
                    </div>

                    <div class="space-y-6">
                        <!-- 採用情報 -->
                        <a href="<?php echo esc_url(home_url('/careers/')); ?>" class="group block">
                            <div class="flex items-center gap-6 p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-blue-200">
                                <div class="flex-shrink-0 w-20 h-20 md:w-24 md:h-24 rounded-xl overflow-hidden bg-gray-100">
                                    <?php
                                    $careers_banner = get_template_directory_uri() . '/assets/images/banner_careers_003.jpg';
                                    ?>
                                    <img src="<?php echo esc_url($careers_banner); ?>" alt="採用情報" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-1 group-hover:text-blue-600 transition-colors">
                                        採用情報
                                    </h3>
                                    <p class="text-sm md:text-base text-gray-600">
                                        WealthParkで働く
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-blue-50 flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                                        <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>

                        <!-- WealthPark研究所 -->
                        <a href="https://wealthpark-lab.com/" target="_blank" rel="noopener noreferrer" class="group block">
                            <div class="flex items-center gap-6 p-6 bg-white rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-blue-200">
                                <div class="flex-shrink-0 w-20 h-20 md:w-24 md:h-24 rounded-xl overflow-hidden bg-gray-100">
                                    <?php
                                    $lab_banner = get_template_directory_uri() . '/assets/images/banner_wp-lab_002.jpg';
                                    ?>
                                    <img src="<?php echo esc_url($lab_banner); ?>" alt="WealthPark研究所" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1 min-w-0">
                                    <h3 class="text-lg md:text-xl font-bold text-gray-900 mb-1 group-hover:text-blue-600 transition-colors">
                                        WealthPark研究所
                                    </h3>
                                    <p class="text-sm md:text-base text-gray-600">
                                        不動産テックの研究・情報発信
                                    </p>
                                </div>
                                <div class="flex-shrink-0">
                                    <div class="w-10 h-10 md:w-12 md:h-12 rounded-full bg-blue-50 flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                                        <svg class="w-5 h-5 md:w-6 md:h-6 text-blue-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- TODO: NewsセクションとBlogセクション、Partnersセクションは次のステップで実装 -->
</main>

<?php get_footer(); ?>
