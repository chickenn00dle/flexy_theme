<?php get_header(); ?>
        <main class="shell">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section>
                <div class="module-full">
                    <div class="unit">
                        <?php the_post_thumbnail( 'full-width'); ?>
                    </div>
                </div>
            </section>
            <section>
                <div class="module">
                    <div class="unit-6">
                        <h2><?php the_title(); ?></h2>
                        <p class="neutral tiny-text"><?php echo get_the_term_list( $post->ID, 'excursion-type', 'Duration: ', ', ', '' ); ?></p>
                        <?php the_content(); ?>
                    </div>
                    <div class="unit">
                        <?php the_field( 'Location' ); ?>
                    </div>
                </div>
            </section>
            <section>
                <div class="module">
                    <div class="unit-6">
                        <ul class="pagination">
                            <?php
                                previous_post_link( '<li>%link</li>', '<span class="list-icon"><i class="fa fa-caret-left" aria-hidden="true"></i> Previous');
                                next_post_link('<li>%link</li>', 'Next <span class="list-icon"><i class="fa fa-caret-right" aria-hidden="true"></a></i></span>');
                            ?>
                        </ul>
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
            <section>
                <div class="module">
                    <div class="unit-8">
                        <p>
                            We're sorry. We couldn't find the excursion you're looking for.
                        </p>
                    </div>
                </div>
            </section>
            <?php endif; ?>

            <section class="bg-fourth bg-secondary pre-footer">
                <div class="module module-center">
                    <div class="unit-6">
                        <?php get_sidebar('prefooter'); ?>
                    </div>
                </div>
            </section>
        </main>
<?php get_footer(); ?>
