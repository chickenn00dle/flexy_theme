            <footer>
                <div class="footer-module">
                    <div class="footer-nav">
                        <nav class="footer-nav-col">
                            <?php
                                $footer_left = [
                                    'theme_location' => 'nav-footer-left',
                                    'container' => 'ul',
                                    'menu_class' => 'list-icons',
                                    'depth' => 0
                                ];

                                wp_nav_menu($footer_left);
                            ?>
                        </nav>
                        <nav class="footer-nav-col">
                            <?php
                                $footer_center = [
                                    'theme_location' => 'nav-footer-center',
                                    'container' => 'ul',
                                    'menu_class' => 'list-icons',
                                    'depth' => 0
                                ];

                                wp_nav_menu($footer_center);
                            ?>
                        </nav>
                        <nav class="footer-nav-col">
                            <?php
                                $footer_right = [
                                    'theme_location' => 'nav-footer-right',
                                    'container' => 'ul',
                                    'menu_class' => 'list-icons',
                                    'depth' => 0
                                ];

                                wp_nav_menu($footer_right);
                            ?>
                        </nav>
                    </div>
                    <?php
                        $sns_menu_header = [
                            'theme_location' => 'nav-sns',
                            'container' => 'ul',
                            'menu_class' => 'nav-sns hidden-mobile',
                            'depth' => 1,
                        ];

                        wp_nav_menu($sns_menu_header);
                    ?>
                    <p class="footer-copyright">Copyright &copy; <span id="copyright"><?php echo Date('Y'); ?></span> <?php bloginfo( 'name' ); ?></p>
                </div>


            </footer>
        <script src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>
