<?php get_header(); ?>
        <main class="shell">
            <section class="bg-half">
                <div class="module module-mid">
                    <div class="unit">
                        <h1>Search</h1>
                    </div>
                </div>
            </section>
            <section>
                <div class="module module-mid">
                    <div class="unit-7">
                        <?php get_search_form(); ?>
                        <p>
                            <strong>Results:</strong>
                        </p>
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                            <h3><?php the_title(); ?></h3>
                            <p class="bm-0"><time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('M n'); ?></time> | <span class="neutral"><?php comments_number('0 Comments', '1 Comment', '% Comments'); ?></span></p>
                            <p>
                                <?php the_excerpt(); ?>
                            </p>
                            <a class="btn" href="<?php the_permalink(); ?>">Read More</a>
                            <hr  />

                        <?php endwhile; else: ?>
                            <p><?php _e("Sorry, we couldn't find anything for '" . get_search_query() . "'."); ?></p>
                        <?php endif; ?>
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
