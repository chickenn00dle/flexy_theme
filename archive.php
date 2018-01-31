<?php get_header(); ?>
        <main class="shell">
            <section class="bg-half">
                <div class="module module-mid">
                    <div class="unit">
                        <h1><?php
                            $title = '';
                            if( is_day() ) {
                                $title .= get_the_date();
                                _e( 'Posts' );
                            } elseif ( is_month() ) {
                                $title .= get_the_date( 'F Y');
                                _e( 'Posts' );
                            } elseif ( is_year() ) {
                                $title .= get_the_date( 'Y');
                                _e( 'Posts' );
                            } elseif ( is_author() ) {
                                _e( 'Author Posts');
                            } else {
                                _e( single_cat_title('', false) );
                            }
                         ?></h1>
                    </div>
                </div>
            </section>
            <section>
                <div class="module">
                    <div class="unit">
                        <?php if($title): ?>
                            <h2><?php echo $title; ?></h2>
                        <?php endif; ?>
                        <div class="summary-grid">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div class="summary">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail( 'post-tmb' ); ?>
                                        <h2 class="summary-title"><?php the_title(); ?></h2>
                                    </a>
                                </div>
                            <?php endwhile; else: ?>
                                </div>
                                <p><?php _e('The archives you are looking for could not be found.'); ?></p>
                            <?php endif; ?>
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
