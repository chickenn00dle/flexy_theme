<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php wp_title('|'); ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
        <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
        <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet' type='text/css'>
        <!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-112985317-1"></script>
        <script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());
		gtag('config','UA-112985317-1');
	</script>
	<?php wp_head(); ?>
    </head>
    <body <?php body_class($class); ?>>
        <header>
            <nav>
                <div class="nav-module">
                    <div class="nav-hamburger hidden-desktop">
                        <div class="hamburger-outer">
                            <div class="hamburger-inner">
                            </div>
                        </div>
                    </div>
                    <div id="logo"><a href="<?php bloginfo('url'); ?>">
                            <?php
                            $custom_logo_id = get_theme_mod( 'custom_logo' );
                            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                            if ( has_custom_logo() ) {
                                echo '<img src="'. esc_url( $logo[0] ) . '" width="75" height="75">';
                            } else {
                                echo '<img src="http://via.placeholder.com/100x100" alt="Placeholder Logo Thumbnail." />';
                            }
                             ?>
                    </a></div>
                    <div class="nav-slider hidden-mobile" id="js-nav-slider">
                        <div class="nav-upper">
                            <?php
                                $main_menu_header_top = [
                                    'theme_location' => 'nav-upper-header',
                                    'container' => 'ul',
                                    'menu_class' => 'nav-links',
                                    'depth' => 2
                                ];

                                wp_nav_menu($main_menu_header_top);
                            ?>
                            <?php
                                $sns_menu_header = [
                                    'theme_location' => 'nav-sns',
                                    'container' => 'ul',
                                    'menu_class' => 'nav-sns',
                                    'depth' => 1,
                                ];

                                wp_nav_menu($sns_menu_header);
                            ?>
                        </div>
                        <?php
                            $sub_menu_header_bottom = [
                                'theme_location' => 'nav-lower-header',
                                'container' => 'div',
                                'container_class' => 'nav-lower',
                                'menu_class' => 'nav-links',
                                'depth' => 1
                            ];

                            wp_nav_menu($sub_menu_header_bottom);
                        ?>
                    </div>
                </div>
            </nav>
        </header>
