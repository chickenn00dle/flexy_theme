<?php get_header(); ?>
    <main class="shell">
        <section class="bg-half">
            <div class="module module-mid">
                <div class="unit">
                    <h1><?php bloginfo('name') ?></h1>
                </div>
            </div>
        </section>

        <section>
            <div class="module module-center">
                <div class="unit">
                    <div class="summary-grid">
                    <?php
                        $feature_param = [
                            'cat' => '5',
                            'posts_per_page' => '1'
                        ];

                        $feature_query = new WP_Query($feature_param);

                        if( $feature_query->have_posts() ) : while ( $feature_query->have_posts() ) : $feature_query->the_post();
                    ?>
                        <div class="summary feature">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'feat-post-tmb' ); ?>
                                <h2 class="summary-title"><?php the_title(); ?></h2>
                                <?php
                                    $feat_categories = get_the_category();
                                ?>
                                <p class="bm-none tiny-text"><?php echo esc_html( $feat_categories[0]->name ) ?> | <time><?php the_time(get_option('date_format')); ?></time></p>
                            </a>
                        </div>
                    <?php
                        endwhile;
                        endif;
                        wp_reset_postdata();
                    ?>

                    <?php

                        $post_param = [
                            'cat' => '-5',
                            'posts_per_page' => '4',
                            'ord' => 'DESC',
                            'orderby' => 'ID'
                        ];

                        $post_query = new WP_Query($post_param);

                        if ($post_query->have_posts()) : while ($post_query->have_posts()) : $post_query->the_post();
                    ?>
                        <div class="summary">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail( 'post-tmb' ); ?>
                                <h2 class="summary-title"><?php the_title(); ?></h2>
                                <?php
                                    $posts_categories = get_the_category();
                                ?>
                                <p class="bm-none tiny-text"><a href="<?php echo esc_url( get_category_link( $posts_categories[0]->term_id )) ?>"><?php echo esc_html( $posts_categories[0]->name ) ?></a> | <time><?php the_time(get_option('date_format')); ?></time></p>
                            </a>
                        </div>
                    <?php endwhile; else: ?>
                        <p>
                            <?php _e("We're sorry. We're having trouble loading posts right now"); ?>
                        </p>
                    <?php
                        endif;
                        wp_reset_postdata();
                    ?>
                    </div>
                    <ul class="more-link bm-none">
                        <li><a href="<?php echo get_year_link( $year ); ?>"><i class="fa fa-caret-right"></i> All Posts</a></p></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="bg-half bg-secondary bg-striped">
            <div class="module module-mid">
                <div class="unit-3">
                    <?php get_sidebar('home-left'); ?>
                </div>
                <div class="unit-3">
                    <?php get_sidebar('home-center'); ?>
                </div>
                <div class="unit-3">
                    <?php get_sidebar('home-right'); ?>
                </div>
            </div>
        </section>
        <section>
            <div class="module module-center">
                <div class="unit">
                    <h3 class="text-center">Excursions</h3>
                    <div class="card-grid">
                        <?php
                            $excursions_param = [
                                'post_type' => 'excursion',
                                'posts_per_page' => 3,
                                'ord' => 'DESC',
                                'orderby' => 'random'
                            ];

                            $excursions_query = new WP_Query($excursions_param);

                            if( $excursions_query->have_posts() ) : while ( $excursions_query->have_posts() ) : $excursions_query->the_post();
                        ?>
                            <div class="card">
                                <div class="card-body">
                                    <?php the_post_thumbnail( 'post-tmb' ); ?>
                                    <h3 class="card-title"><?php the_title(); ?></h3>
                                    <p class="neutral tiny-text"><?php echo get_the_term_list( $post->ID, 'excursion-type', '', ', ', '' ); ?></p>
                                </div>
                                <div class="card-footer">
                                    <a href="<?php the_permalink(); ?>" class="btn card-btn">Details</a>
                                </div>
                            </div>
                        <?php endwhile; else: ?>
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">No Excursions</h3>
                                    <p class="card-text">Check back later for future upcoming excursions!</p>
                                </div>
                                <div class="card-footer">
                                </div>
                            </div>
                        <?php endif; wp_reset_postdata(); ?>
                    </div>
                    <ul class="more-link bm-none">
                        <li><a href="<?php echo get_post_type_archive_link( 'excursion' ); ?>"><i class="fa fa-caret-right"></i> All Excursions</a></p></li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="bg-fourth bg-secondary pre-footer">
            <div class="module module-center">
                <div class="unit-6">
                    <?php get_sidebar('prefooter'); ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>
