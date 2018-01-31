<?php get_header(); ?>
        <main class="shell">
            <section class="bg-half">
                <div class="module module-mid">
                    <div class="unit">
                        <h1>Excursions</h1>
                    </div>
                </div>
            </section>
            <section>
                <div class="module">
                    <div class="unit">
                        <div class="card-grid">
                            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                            <?php endwhile; endif;?>
                        </div>
                    </div> 
                     <div class="unit">
                        <?php get_sidebar('page-block'); ?>
                        <?php get_sidebar('page'); ?>
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
