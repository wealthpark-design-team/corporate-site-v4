<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Next_Landing_Page
 */

get_header(); ?>

<div class="one_page clearfix">
    <div class="wp_container">
        <section id="section-top">
            <!-- 最新ニュース -->
            <?php
                $queryObject = new WP_Query( 'post_type=news&posts_per_page=1' );
                // The Loop!
                if ($queryObject->have_posts()) {
                    ?>
                    <div class="headline-news">
                        <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
                        <div class="headline-news-info">
                            <span class="headline-news-date">
                                <?php echo get_the_date("Y.n.j"); ?>
                            </span>
                            <span class="headline-news-category">
                                <?php $terms = get_the_terms( $post->ID, 'news_category' );
                                if (!empty($terms)) {
                                    foreach($terms as $term) {
                                        echo $term->name;
                                    }
                                }
                                ?>
                            </span>
                        </div>
                        <div class="headline-news-content">
                            <div class="headline-news-content-inner">
                                <div class="headline-news-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </div>
                                <?php } ?>
                                <div class="headline-news-link">
                                    <a href="<?php echo get_post_type_archive_link( 'news' ); ?>"><?php _e("news_list", 'wp-next-landing-page') ?></a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
            ?>
            <h2>
                <span class="brand-name"><?php _e("WealthPark", 'wp-next-landing-page'); ?></span>
                <span class="slogan-message"><?php _e("Manage your investment with ease.", 'wp-next-landing-page'); ?></span>
            </h2>
            <p class="explain"><?php _e("banner.message", 'wp-next-landing-page'); ?></p>
            <ul class="download-stores">
                <?php include "download-stores.php" ?>
            </ul>
        </section>
        <?php _e("corporate.v1.video", 'wp-next-landing-page'); ?>
        <section id="section-service">
            <h4 class="section-name"><?php _e("section.service.type_name", 'wp-next-landing-page'); ?></h4>
            <h2 class="section-title"><?php _e("section.service.title.h2", 'wp-next-landing-page'); ?></h2>

            <h3><?php _e("section.service.title.h3.f1", 'wp-next-landing-page'); ?></h3>
            <ul class="bullet-list">
                <?php _e("section.service.list_items.f1", 'wp-next-landing-page'); ?>
            </ul>

            <h3><?php _e("section.service.title.h3.f2", 'wp-next-landing-page'); ?></h3>
            <ul class="bullet-list">
                <?php _e("section.service.list_items.f2", 'wp-next-landing-page'); ?>
            </ul>
        </section>

        <section id="section-feature">
            <h4 class="section-name"><?php _e("section.feature.type_name", 'wp-next-landing-page'); ?></h4>
            <h2 class="section-title"><?php _e("section.feature.title.h2", 'wp-next-landing-page'); ?></h2>

            <h3><?php _e("section.feature.title.h3", 'wp-next-landing-page'); ?></h3>
            <ul class="feature-points col-3s">
                <li>
                    <h4 class="feature-title"><?php _e("section.feature_point.f1.title", 'wp-next-landing-page'); ?></h4>
                    <ul class="bullet-list">
                        <?php _e("section.feature_point.f1.items", 'wp-next-landing-page'); ?>
                    </ul>
                </li>
                <li>
                    <h4 class="feature-title"><?php _e("section.feature_point.f2.title", 'wp-next-landing-page'); ?></h4>
                    <ul class="bullet-list">
                        <?php _e("section.feature_point.f2.items", 'wp-next-landing-page'); ?>
                    </ul>
                </li>
                <li>
                    <h4 class="feature-title"><?php _e("section.feature_point.f3.title", 'wp-next-landing-page'); ?></h4>
                    <ul class="bullet-list">
                        <?php _e("section.feature_point.f3.items", 'wp-next-landing-page'); ?>
                    </ul>
                </li>
            </ul>
            <ul class="feature-points col-2s">
                <li>
                    <h4 class="feature-title"><?php _e("section.feature_point.f4.title", 'wp-next-landing-page'); ?></h4>
                    <ul class="bullet-list">
                        <?php _e("section.feature_point.f4.items", 'wp-next-landing-page'); ?>
                    </ul>
                </li>
                <li>
                    <h4 class="feature-title"><?php _e("section.feature_point.f5.title", 'wp-next-landing-page'); ?></h4>
                    <ul class="bullet-list">
                        <?php _e("section.feature_point.f5.items", 'wp-next-landing-page'); ?>
                    </ul>
                </li>
            </ul>
        </section>

        <section id="section-how">
            <h2 class="section-title"><?php _e("section.how.title.h2", 'wp-next-landing-page'); ?></h2>
            <h3><?php _e("section.how.title.h3", 'wp-next-landing-page'); ?></h3>

            <ul id="carousel-filters" class="carousel-filters">
                <li class="">
                    <div class="track-icon icon-1"></div>
                    <span class="track-title"><?php _e("section.how.f1.track_title", 'wp-next-landing-page'); ?></span>
                </li>
                <li class="">
                    <div class="track-icon icon-2"></div>
                    <span class="track-title"><?php _e("section.how.f2.track_title", 'wp-next-landing-page'); ?></span>
                </li>
                <li class="">
                    <div class="track-icon icon-3"></div>
                    <span class="track-title"><?php _e("section.how.f3.track_title", 'wp-next-landing-page'); ?></span>
                </li>
                <li class="">
                    <div class="track-icon icon-4"></div>
                    <span class="track-title"><?php _e("section.how.f4.track_title", 'wp-next-landing-page'); ?></span>
                </li>
                <li class="">
                    <div class="track-icon icon-5"></div>
                    <span class="track-title"><?php _e("section.how.f5.track_title", 'wp-next-landing-page'); ?></span>
                </li>
            </ul>
            <div class="carousel-sliders">
                <div class="slide-item">
                    <div class="screenshot" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/<?php echo qtrans_getLanguage()?>/slide1.png)"></div>
                    <div class="slide-content">
                        <h3><?php _e("section.how.f1.title", 'wp-next-landing-page'); ?></h3>
                        <?php _e("section.how.f1.content", 'wp-next-landing-page'); ?>

                        <ul class="download-stores desktop">
                            <?php include "download-stores.php" ?>
                        </ul>
                    </div>

                </div>
                <div class="slide-item">
                    <div class="screenshot" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/<?php echo qtrans_getLanguage()?>/slide2.png)"></div>
                    <div class="slide-content">
                        <h3><?php _e("section.how.f2.title", 'wp-next-landing-page'); ?></h3>
                        <?php _e("section.how.f2.content", 'wp-next-landing-page'); ?>

                        <ul class="download-stores desktop">
                            <?php include "download-stores.php" ?>
                        </ul>
                    </div>

                </div>
                <div class="slide-item">
                    <div class="screenshot" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/<?php echo qtrans_getLanguage()?>/slide3.png)"></div>
                    <div class="slide-content">
                        <h3><?php _e("section.how.f3.title", 'wp-next-landing-page'); ?></h3>
                        <?php _e("section.how.f3.content", 'wp-next-landing-page'); ?>

                        <ul class="download-stores desktop">
                            <?php include "download-stores.php" ?>
                        </ul>
                    </div>

                </div>
                <div class="slide-item">
                    <div class="screenshot" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/<?php echo qtrans_getLanguage()?>/slide4.png)"></div>
                    <div class="slide-content">
                        <h3><?php _e("section.how.f4.title", 'wp-next-landing-page'); ?></h3>
                        <?php _e("section.how.f4.content", 'wp-next-landing-page'); ?>

                        <ul class="download-stores desktop">
                            <?php include "download-stores.php" ?>
                        </ul>
                    </div>

                </div>
                <div class="slide-item">
                    <div class="screenshot" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/<?php echo qtrans_getLanguage()?>/slide5.png)"></div>
                    <div class="slide-content">
                        <h3><?php _e("section.how.f5.title", 'wp-next-landing-page'); ?></h3>
                        <?php _e("section.how.f5.content", 'wp-next-landing-page'); ?>

                        <ul class="download-stores desktop">
                            <?php include "download-stores.php" ?>
                        </ul>
                    </div>

                </div>

            </div>

            <ul class="mobile download-stores">
                <?php include "download-stores.php" ?>
            </ul>

        </section>

        <section id="section-team">
            <h4 class="section-name"><?php _e("section.team.type_name", 'wp-next-landing-page'); ?></h4>
            <h2 class="section-title"><?php _e("section.team.title.h2", 'wp-next-landing-page'); ?></h2>

            <h3><?php _e("section.team.title.h3", 'wp-next-landing-page'); ?></h3>
            <div id="member-wrapper" class="member-wrapper">
                <?php

                // Get all managers
                $the_query = new WP_Query(array(
                    'post_type'			=> 'member',
                    'posts_per_page'	=> -1,
                    'meta_key'			=> 'display_group',
                    'meta_query'        => array(
                        'key'   => 'display_group',
                        'value' => 'manager'
                    )
                ));

                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <ul class="member-profiles manager clearfix">
                        <?php $teamOutput = "{" ?>
                        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <li id="member-<?php the_ID(); ?>">
                                <a href="javascript:popupMember('<?php the_ID(); ?>')">
                                    <span class="member-img" style="background-image: url(<?php echo get_field('avatar'); ?>)"></span>
                                    <span class="member-full-name"><?php the_title(); ?></span>
                                    <span class="member-position"><?php echo get_field('position'); ?></span>
                                </a>
                            </li>
                            <?php
                                $teamOutput = $teamOutput . "'" . get_the_ID()
                                . "' : { avatar : '" . get_field('avatar')
                                    . "', fullName : '" . get_the_title()
                                    . "', position : '" . get_field('position')
                                    . "', description : '" . get_field('description') . "' }, ";
                            ?>
                        <?php endwhile; ?>
                    </ul>
                <?php endif; ?>

                <?php wp_reset_query();	?>


                <?php

                // Get all staff
                $the_query = new WP_Query(array(
                    'post_type'			=> 'member',
                    'posts_per_page'	=> -1,
                    'meta_key'			=> 'display_group',
                    'meta_query'        => array(
                        'key'   => 'display_group',
                        'value' => 'staff'
                    )
                ));

                ?>
                <?php if( $the_query->have_posts() ): ?>
                    <ul class="member-profiles staff clearfix" style="display: none;">
                        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                            <li id="member-<?php the_ID(); ?>">
<!--                                <a href="javascript:popupMember('--><?php //the_ID(); ?><!--')">-->
                                <a href="javascript:void()">
                                    <span class="member-img" style="background-image: url(<?php echo get_field('avatar'); ?>)"></span>
                                    <span class="member-full-name"><?php the_title(); ?></span>
                                    <span class="member-position"><?php echo get_field('position'); ?></span>
                                </a>
                            </li>
                            <?php
                            $teamOutput = $teamOutput . "'" . get_the_ID()
                                . "' : { avatar : '" . get_field('avatar')
                                . "', fullName : '" . get_the_title()
                                . "', position : '" . get_field('position')
                                . "', description : '" . get_field('description') . "' }, ";
                            ?>
                        <?php endwhile; ?>
                    </ul>
                    <script>
                        var teamOutput = <?php
                            $teamOutput = $teamOutput . "}";
                            $teamOutput = trim(preg_replace('/\s\s+/', ' ', $teamOutput));
                            echo $teamOutput; ?>;
                    </script>
                <?php endif; ?>

                <?php wp_reset_query();	?>
            </div>
            <a href="javascript:expandMember();" id="btn-member-expand" class="btn member-expand mobile"><span class="more"><?php _e("section.team.button.more", 'wp-next-landing-page'); ?></span></a>
        </section>


    </div>
</div>
<div class="seperated-section">
    <div class="wp_container">
        <section id="section-testimonials">
            <h4 class="section-name"><?php _e("section.testimonials.type_name", 'wp-next-landing-page'); ?></h4>
            <h2 class="section-title"><?php _e("section.testimonials.title.h2", 'wp-next-landing-page'); ?></h2>

            <h3><?php _e("section.testimonials.title.h3", 'wp-next-landing-page'); ?></h3>

            <?php

            // Get all Testimonials
            $the_query = new WP_Query(array(
                'post_type'			=> 'testimonial',
                'posts_per_page'	=> -1,
            ));

            ?>
            <?php if( $the_query->have_posts() ): ?>
                <ul class="testimonials">
                    <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
                        <li id="testimonial-<?php the_ID(); ?>">
                            <p class="testimonial-content"><?php echo get_field('content'); ?></p>
                            <div class="clearfix">
                                <span class="testimonial-author"><?php echo get_field('customer'); ?></span>
                            </div>
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>

            <?php wp_reset_query();	?>
        </section>

        <section id="section-about">
            <h4 class="section-name"><?php _e("section.about.type_name", 'wp-next-landing-page'); ?></h4>
            <h2 class="section-title"><?php _e("section.about.title.h2", 'wp-next-landing-page'); ?></h2>
            <p class="company-message"><?php _e("section.about.message", 'wp-next-landing-page'); ?></p>

            <table class="striped about-company">
                <tr>
                    <th><?php _e("section.about.table.tr-1.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-1.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-2.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-2.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-3.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-3.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-4.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-4.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-5.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-5.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-6.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-6.td", 'wp-next-landing-page'); ?></td>
                </tr>
                <tr>
                    <th><?php _e("section.about.table.tr-7.th", 'wp-next-landing-page'); ?></th>
                    <td><?php _e("section.about.table.tr-7.td", 'wp-next-landing-page'); ?></td>
                </tr>
            </table>

            <!-- 最新ニュース5件 -->
            <?php
            $queryObject = new WP_Query( 'post_type=news&posts_per_page=5' );
            // The Loop!
            if ($queryObject->have_posts()) {
                ?>
                <div class="news-container">
                    <ul class="news-lists">
                    <?php while ($queryObject->have_posts()) { $queryObject->the_post(); ?>
                    <li class="news-list">
                        <span class="date"><?php echo get_the_date("Y.n.j"); ?></span>
                        <span class="category"><?php
                            $terms = get_the_terms( $post->ID, 'news_category' );
                            if (!empty($terms)) {
                                foreach($terms as $term) {
                                    echo $term->name;
                                }
                            }
                        ?></span>
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </li>
                    <?php } ?>
                    </ul>
                    <div class="news-btn">
                        <a href="<?php echo get_post_type_archive_link( 'news' ); ?>"><?php _e("news_list", 'wp-next-landing-page') ?></a>
                    </div>
                </div>
                <?php
            }
            ?>
        </section>

    </div>
</div>

<section id="section-modal-member" class="remodal" data-remodal-id="member">
    <div class="wp_container member-info-container">
        <button data-remodal-action="close" class="remodal-close"></button>
        <div class="content">
            <h2 class="section-title" id="member_modal_fullName"></h2>
            <h3 id="member_modal_position"></h3>
            <p id="member_modal_description"></p>
        </div>
    </div>
</section>

<?php


get_sidebar();
get_footer();
