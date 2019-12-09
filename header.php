<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Archi - Responsive Interior Design Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Archi is best selling interior design website template with responsive stunning design">
    <meta name="keywords" content="architecture,building,business,bootstrap,creative,exterior design,furniture design,gallery,garden design,house,interior design,landscape design,multipurpose,onepage,portfolio,studio">
    <meta name="author" content="">

    <!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri() ?>/js/html5shiv.js"></script>
	<![endif]-->
    <?php wp_head() ?>
</head>

<body id="homepage" class="de_light">

    <div id="wrapper">

        <!-- header begin -->
        <header class="header-light <?php echo is_front_page() ? 'autoshow' : '' ?>">
            <div class="info">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col">Working Hours Monday - Friday <span class="id-color"><strong>08:00-16:00</strong></span></div>
                            <div class="col">Toll Free <span class="id-color"><strong>1800.899.900</strong></span></div>
                            <!-- social icons -->
                            <div class="col social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-rss"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-envelope-o"></i></a>
                            </div>
                            <!-- social icons close -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <!-- logo begin -->
                        <div id="logo">
                            <a href="<?php echo home_url() ?>">
                                <img class="logo" src="<?php echo get_template_directory_uri() ?>/images/logo-3.png" alt="">
                            </a>
                        </div>
                        <!-- logo close -->

                        <!-- small button begin -->
                        <span id="menu-btn"></span>
                        <!-- small button close -->

                        <!-- mainmenu begin -->
                        <nav>
                        <?php 
                            wp_nav_menu(array(
                                'container' => 'ul',
                                'menu_id' => 'mainmenu',
                                'menu_class' => null,
                                'theme_location' => 'mainMenuLocation',
                                'container_id' => 'mainMenu',
                            ));
                        ?>
                        </nav>

                    </div>
                    <!-- mainmenu close -->

                </div>
            </div>
        </header>
        <!-- header close -->