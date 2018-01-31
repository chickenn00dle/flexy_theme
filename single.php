<?php get_header(); ?>
        <main class="shell">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="shell">
                <div class="module-full">
                    <div class="unit">
                        <?php the_post_thumbnail( 'full-width'); ?>
                    </div>
                </div>
            </section>
            <section class="shell">
                <div class="module">
                    <div class="unit-8">
                        <h2><?php the_title(); ?></h2>
                        <?php
                            $feature_categories = get_the_category();
                        ?>
                        <p><a class="tiny-text" href="<?php echo esc_url( get_category_link( $feature_categories[0]->term_id )) ?>"><?php echo esc_html( $feature_categories[0]->name ) ?></a> | <time><?php the_time(get_option('date_format')); ?></time></p>
                        <?php the_content(); ?>
                    </div>
                    <div class="unit">
                        <?php get_sidebar('single-block'); ?>
                        <?php get_sidebar('single'); ?>
                    </div>
                </div>
            </section>
            <section class="shell">
                <div class="module">
                    <div class="unit-8">
                        <h3>About the Author</h3>
                        <div class="profile">
                            <?php echo get_avatar( get_the_author_meta( 'email' ), '100', 'Mystery Man', 'Avatar of ' . get_the_author_meta('first_name') . ' ' . get_the_author_meta('last_name')); ?>
                            <div class="profile-details">
                                <h3 class="profile-title"><?php the_author_posts_link(); ?></h3>
                                <?php if (get_the_author_meta( 'description' )) { ?>
                                    <p>
                                        <?php the_author_meta( 'description' ); ?>
                                    </p>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </section>
            <?php endwhile; else: ?>
                <section class="bg-fourth">
                    <div class="module module-mid">
                        <div class="unit">
                            <h1>Not Found</h1>
                        </div>
                    </div>
                </section>
                <section class="shell">
                    <div class="module">
                        <div class="unit-8">
                            <p>
                                We're sorry. We can't seem to find the post you're looking for.
                            </p>
                        </div>
                        <div class="unit">
                            <?php get_sidebar('single-block'); ?>
                            <?php get_sidebar('single'); ?>
                        </div>
                    </div>
                </section>
            <?php
                endif;
                $this_post_ID = $post->ID;
                wp_reset_postdata();
            ?>
                <section class="shell">
                    <div class="module">
                        <div class="unit-8">
                            <h3>More Posts</h3>
                            <div class="summary-grid">
                                <?php
                                    $more_param = [
                                        'post__not_in' => [$this_post_ID],
                                        'posts_per_page' => 3
                                    ];

                                    $more_query = new WP_Query($more_param);

                                    if ($more_query->have_posts()) : while ($more_query->have_posts()) : $more_query->the_post();
                                ?>
                                    <div class="summary">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail( 'post-tmb' ); ?>
                                            <h2 class="summary-title"><?php the_title(); ?></h2>
                                        </a>
                                    </div>
                                <?php endwhile; endif; wp_reset_postdata; ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="shell">
                    <div class="module">
                        <div class="unit-8">
                            <?php comments_template(); ?>
                        </div>
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
