<?php
/**
 * The main template file
 *
 * フォールバックテンプレート（必須ファイル）
 * front-page.php、single.php等が存在しない場合にこのファイルが使用されます
 */

get_header();
?>

<main class="pt-16 lg:pt-[5.313rem]">
    <div class="max-w-7xl mx-auto px-6 py-16">
        <?php if (have_posts()) : ?>

            <div class="space-y-12">
                <?php while (have_posts()) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-lg shadow-sm p-8'); ?>>
                        <header class="mb-6">
                            <h2 class="text-3xl font-bold text-gray-900 mb-2">
                                <a href="<?php the_permalink(); ?>" class="hover:text-blue-600 transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            <div class="text-sm text-gray-600">
                                <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                            </div>
                        </header>

                        <?php if (has_post_thumbnail()) : ?>
                            <div class="mb-6">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('large', array('class' => 'w-full h-auto rounded-lg')); ?>
                                </a>
                            </div>
                        <?php endif; ?>

                        <div class="prose max-w-none mb-6">
                            <?php the_excerpt(); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 text-blue-600 hover:text-blue-700 font-medium">
                            続きを読む
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </a>
                    </article>

                <?php endwhile; ?>
            </div>

            <?php
            // ページネーション
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => '← 前へ',
                'next_text' => '次へ →',
                'class' => 'mt-12'
            ));
            ?>

        <?php else : ?>

            <div class="text-center py-16">
                <h2 class="text-2xl font-bold text-gray-900 mb-4">投稿が見つかりませんでした</h2>
                <p class="text-gray-600">申し訳ございません。該当する投稿が見つかりませんでした。</p>
            </div>

        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
