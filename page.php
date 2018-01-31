<?php
    /*
    Template Name: Full width
    */
 ?>

<?php get_header(); ?>
    <main class="shell">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <section class="bg-half">
            <div class="module module-mid">
                <div class="unit">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </section>
        <section>
            <div class="module">
                <div class="unit-8">
                    <?php the_content(); ?>
                </div>
                <div class="unit">
                    <?php get_sidebar('page-block'); ?>
                    <?php get_sidebar('page'); ?>
                </div>
            </div>
        </section>
        <?php endwhile; else: ?>
        <section class="bg-half">
            <div class="module">
                <div class="unit">
                    <h1>Not Found</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="module module-center">
                <div class="unit-6">
                    <p>
                        We're sorry. We couldn't find The page you're looking for.
                    </p>
                </div>
                <div class="unit">
                    <?php get_sidebar('page-block'); ?>
                    <?php get_sidebar('page'); ?>
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
