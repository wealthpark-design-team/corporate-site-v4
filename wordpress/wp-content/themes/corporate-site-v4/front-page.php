<?php get_header(); ?>

<main>
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
    <section class="banners-section relative py-16 md:py-24 px-6">
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

    <!-- Newsセクション -->
    <section id="news" class="py-20 md:py-28 lg:py-32 px-6 bg-white">
        <div class="max-w-7xl mx-auto">
            <!-- セクションタイトル -->
            <div class="mb-16 flex items-center gap-6">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900">ニュース</h2>
                <div class="w-24 h-0.5 bg-gray-900"></div>
            </div>

            <!-- ニュース一覧 -->
            <div class="space-y-8 md:space-y-0 md:divide-y md:divide-gray-200">
                <?php
                // ニュース（カスタム投稿タイプ）を取得（最新5件）
                $news_args = array(
                    'post_type' => 'news',
                    'posts_per_page' => 5,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $news_query = new WP_Query($news_args);

                if ($news_query->have_posts()) :
                    $index = 0;
                    while ($news_query->have_posts()) : $news_query->the_post();
                        $is_first = ($index === 0);
                        ?>
                        <div class="md:py-8 <?php echo $is_first ? 'first:md:pt-0' : ''; ?>">
                            <a href="<?php the_permalink(); ?>" class="group block">
                                <div class="flex <?php echo $is_first ? 'flex-col md:flex-row md:gap-8 md:w-4/5 md:mx-auto' : 'flex-row md:gap-8 gap-4 md:w-4/5 md:mx-auto'; ?>">
                                    <!-- 画像 -->
                                    <div class="<?php echo $is_first ? 'overflow-hidden mb-4 md:mb-0 md:w-56 md:flex-shrink-0' : 'overflow-hidden mb-0 w-32 md:w-56 flex-shrink-0'; ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium', array('class' => 'w-full h-auto object-contain rounded-lg border border-gray-200')); ?>
                                        <?php endif; ?>
                                    </div>

                                    <!-- テキスト部分 -->
                                    <div class="flex flex-col flex-1 justify-center">
                                        <!-- 日付 + カテゴリ -->
                                        <div class="flex items-center gap-3 mb-3">
                                            <time class="text-sm text-gray-900 font-normal">
                                                <?php echo get_the_date('Y.m.d'); ?>
                                            </time>
                                            <?php
                                            $terms = get_the_terms(get_the_ID(), 'category');
                                            if ($terms && !is_wp_error($terms)) :
                                                foreach ($terms as $term) :
                                            ?>
                                                <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700">
                                                    #<?php echo esc_html($term->name); ?>
                                                </span>
                                            <?php
                                                endforeach;
                                            endif;
                                            ?>
                                        </div>

                                        <!-- タイトル -->
                                        <h3 class="text-base md:text-lg font-bold text-gray-900 leading-relaxed group-hover:opacity-60 transition-opacity">
                                            <?php the_title(); ?>
                                        </h3>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                        $index++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <!-- 全記事を見るリンク -->
            <div class="text-center mt-12">
                <a href="<?php echo esc_url(home_url('/news/')); ?>" class="inline-block text-sm text-gray-700 hover:text-gray-900 transition-colors font-medium">
                    すべての記事を見る
                </a>
            </div>
        </div>
    </section>

    <!-- Blogセクション -->
    <section class="py-20 md:py-28 lg:py-32 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto">
            <!-- セクションタイトル -->
            <div class="mb-16 flex items-center gap-6">
                <h2 class="text-2xl md:text-3xl font-bold text-gray-900">WealthPark ブログ</h2>
                <div class="w-24 h-0.5 bg-gray-900"></div>
            </div>

            <!-- ブログ一覧（グリッド） -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
                <?php
                // WealthParkブログ（カスタム投稿タイプ）を取得（最新6件）
                $blog_args = array(
                    'post_type' => 'wealthpark',
                    'posts_per_page' => 6,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );
                $blog_query = new WP_Query($blog_args);

                if ($blog_query->have_posts()) :
                    $index = 0;
                    while ($blog_query->have_posts()) : $blog_query->the_post();
                        $is_first = ($index === 0);
                        ?>
                        <div>
                            <a href="<?php the_permalink(); ?>" class="group block">
                                <?php if ($is_first) : ?>
                                    <!-- 最新記事：NEWバッジ付きカード -->
                                    <div class="bg-white overflow-visible shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 h-full flex flex-col relative">
                                        <!-- NEWバッジ -->
                                        <div class="absolute -top-6 -left-6 w-12 h-12 rounded-full bg-red-500 flex items-center justify-center z-10 shadow-lg">
                                            <span class="text-white font-bold text-xs">NEW</span>
                                        </div>
                                        <div class="overflow-hidden">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('large', array('class' => 'w-full h-auto object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="p-6 flex-1 flex flex-col">
                                            <div class="flex items-center gap-3 mb-3">
                                                <time class="text-xs text-gray-500"><?php echo get_the_date('Y.m.d'); ?></time>
                                                <?php
                                                $terms = get_the_terms(get_the_ID(), 'category');
                                                if ($terms && !is_wp_error($terms)) :
                                                    foreach ($terms as $term) :
                                                ?>
                                                    <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">
                                                        <?php echo esc_html($term->name); ?>
                                                    </span>
                                                <?php
                                                    endforeach;
                                                endif;
                                                ?>
                                            </div>
                                            <h3 class="text-base font-bold text-gray-900 leading-relaxed mb-4 flex-1 group-hover:text-blue-600 transition-colors">
                                                <?php the_title(); ?>
                                            </h3>
                                            <div class="flex justify-end">
                                                <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                                                    <svg class="w-4 h-4 text-gray-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php else : ?>
                                    <!-- 2番目以降 -->
                                    <!-- モバイル：コンパクト -->
                                    <div class="flex md:hidden gap-4">
                                        <div class="overflow-hidden w-32 flex-shrink-0">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-auto object-contain rounded-lg border border-gray-200')); ?>
                                            <?php endif; ?>
                                        </div>
                                        <div class="flex flex-col flex-1">
                                            <time class="text-sm text-gray-900 font-normal mb-2 block">
                                                <?php echo get_the_date('Y.m.d'); ?>
                                            </time>
                                            <h3 class="text-base font-bold text-gray-900 leading-relaxed group-hover:opacity-60 transition-opacity">
                                                <?php the_title(); ?>
                                            </h3>
                                        </div>
                                    </div>
                                    <!-- PC：カード -->
                                    <div class="hidden md:block bg-white overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 border border-gray-100 h-full">
                                        <div class="flex flex-col h-full">
                                            <div class="overflow-hidden">
                                                <?php if (has_post_thumbnail()) : ?>
                                                    <?php the_post_thumbnail('large', array('class' => 'w-full h-auto object-cover group-hover:scale-105 transition-transform duration-300')); ?>
                                                <?php endif; ?>
                                            </div>
                                            <div class="p-6 flex-1 flex flex-col">
                                                <div class="flex items-center gap-3 mb-3">
                                                    <time class="text-xs text-gray-500"><?php echo get_the_date('Y.m.d'); ?></time>
                                                    <?php
                                                    $terms = get_the_terms(get_the_ID(), 'category');
                                                    if ($terms && !is_wp_error($terms)) :
                                                        foreach ($terms as $term) :
                                                    ?>
                                                        <span class="text-xs px-3 py-1 bg-gray-100 text-gray-700 rounded-full">
                                                            <?php echo esc_html($term->name); ?>
                                                        </span>
                                                    <?php
                                                        endforeach;
                                                    endif;
                                                    ?>
                                                </div>
                                                <h3 class="text-base font-bold text-gray-900 leading-relaxed mb-4 flex-1 group-hover:text-blue-600 transition-colors">
                                                    <?php the_title(); ?>
                                                </h3>
                                                <div class="flex justify-end">
                                                    <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                                                        <svg class="w-4 h-4 text-gray-600 group-hover:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endif; ?>
                            </a>
                        </div>
                        <?php
                        $index++;
                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

            <!-- 全記事を見るリンク -->
            <div class="text-center mt-12">
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="inline-block text-sm text-gray-700 hover:text-gray-900 transition-colors font-medium">
                    すべての記事を見る
                </a>
            </div>
        </div>
    </section>

    <!-- Partnersセクション -->
    <section class="py-20 md:py-28 lg:py-32 px-6 bg-white">
        <div class="max-w-6xl mx-auto">
            <!-- パートナー -->
            <div class="mb-24">
                <div class="mb-16">
                    <div class="flex items-center gap-6 mb-3">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">パートナー</h2>
                        <div class="w-24 h-0.5 bg-gray-900"></div>
                    </div>
                    <p class="text-base text-gray-500">※五十音順</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <?php
                    $partners = array(
                        array('name' => 'OWL', 'image' => 'partnerships_owl.png'),
                        array('name' => 'あおぞら銀行', 'image' => 'partner_aozora_bank_jp.png'),
                        array('name' => 'Asahi Kasei', 'image' => 'partnerships_asahikasei.png'),
                        array('name' => 'HPM', 'image' => 'partnerships_hpm.png'),
                        array('name' => 'MJ Home', 'image' => 'clients_mj-home-new.png'),
                        array('name' => 'SBIインベストメント', 'image' => 'partner_sbi_Investment.png'),
                        array('name' => 'Kochi House', 'image' => 'partnerships_kochi-house.png'),
                        array('name' => 'Kosugi', 'image' => 'partnerships_kosugi.png'),
                        array('name' => 'Sanwa', 'image' => 'partnerships_sanwa.png'),
                        array('name' => 'jic', 'image' => 'partner_jic.png'),
                        array('name' => 'J. Front Retailing', 'image' => 'partnerships_jfr_logo_eibun.png'),
                        array('name' => 'Life Produce', 'image' => 'partnerships_life-produce.png'),
                        array('name' => 'Takuto', 'image' => 'partnerships_takuto.png'),
                        array('name' => 'Chuo Nittochi', 'image' => 'partnerships_chuo-nittochi.png'),
                        array('name' => 'デジタルガレージ', 'image' => 'partner_dg.png'),
                        array('name' => 'Tokyo Kaizyo', 'image' => 'partnerships_tokyo-kaizyo.png'),
                        array('name' => 'Tokyu Fudousan', 'image' => 'partnerships_TokyuFudousan.png'),
                        array('name' => 'Nine Holdings', 'image' => 'partnerships_nine-holdings.png'),
                        array('name' => 'Nihon Agent', 'image' => 'partnerships_nihon-agant.png'),
                        array('name' => '日本郵政キャピタル株式会社', 'image' => 'partner_japan_post_capital_jp.png'),
                        array('name' => 'Hanshin Hankyu', 'image' => 'partnerships_hanshin-hankyu.png'),
                        array('name' => 'Hirota', 'image' => 'partnerships_hirota.png'),
                        array('name' => 'Visual Research', 'image' => 'partnerships_visual-research.png'),
                        array('name' => 'みずほキャピタル', 'image' => 'partner_mizuho_capital_jp.png'),
                        array('name' => 'Miyoshi', 'image' => 'partnerships_miyoshi.png'),
                        array('name' => '横浜銀行', 'image' => 'partner_hamagin.png'),
                        array('name' => 'W Juken', 'image' => 'partnerships_watanabe.png'),
                    );

                    foreach ($partners as $partner) :
                        $image_url = 'https://wealth-park.com/wp-content/uploads/2024/10/' . $partner['image'];
                    ?>
                        <div class="flex items-center justify-center md:p-6 hover:opacity-70 transition-opacity">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($partner['name']); ?>" class="max-w-full h-auto object-contain">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- 掲載メディア -->
            <div>
                <div class="mb-16">
                    <div class="flex items-center gap-6 mb-3">
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900">掲載メディア</h2>
                        <div class="w-24 h-0.5 bg-gray-900"></div>
                    </div>
                    <p class="text-base text-gray-500">※五十音順</p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                    <?php
                    $media = array(
                        array('name' => '全国賃貸住宅新聞', 'image' => 'media_logo_chintaijyutakushinbun.png', 'link' => ''),
                        array('name' => 'commercial observer', 'image' => 'commercial_observer_jp.png', 'link' => ''),
                        array('name' => 'signal', 'image' => 'media_logo_signal.png', 'link' => 'https://signal.diamond.jp/'),
                        array('name' => 'techcrunch', 'image' => 'media_logo_tc.png', 'link' => 'https://jp.techcrunch.com/'),
                        array('name' => 'TOKYO MX', 'image' => 'media_logo_tokyomx.png', 'link' => ''),
                        array('name' => 'THE BRIDGE', 'image' => 'media_logo_thebridge.png', 'link' => ''),
                    );

                    foreach ($media as $item) :
                        $image_url = 'https://wealth-park.com/wp-content/uploads/2024/10/' . $item['image'];
                        if ($item['link']) :
                    ?>
                        <a href="<?php echo esc_url($item['link']); ?>" target="_blank" rel="noopener noreferrer" class="flex items-center justify-center md:p-6 hover:opacity-70 transition-opacity">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($item['name']); ?>" class="max-w-full h-auto object-contain">
                        </a>
                    <?php else : ?>
                        <div class="flex items-center justify-center md:p-6 hover:opacity-70 transition-opacity">
                            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($item['name']); ?>" class="max-w-full h-auto object-contain">
                        </div>
                    <?php endif;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
