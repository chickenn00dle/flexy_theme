<? get_header(); ?>
    <main class="shell">
        <section class="bg-fourth">
            <div class="module module-mid">
                <div class="unit">
                    <h1>Four Oh Four :(</h1>
                </div>
            </div>
        </section>
        <section>
            <div class="module">
                <div class="unit-8">
                    <div class="block">
                        <p>
                            Whoops! Something went wrong and we can't seem to find what you're looking for. Sorry for the inconvenience! Try searching below or head back to our <a href="<? bloginfo('url'); ?>">Home Page</a>.
                        </p>
                    </div>
                    <?php get_search_form(); ?>
                </div>
                <div class="unit">
                    <?php get_sidebar('404'); ?>
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
<? get_footer(); ?>
