<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $description ?>">
    <script type="text/javascript" src="<?php echo get_theme_root_uri() . '/b5awesometheme/js/bootstrap.min.js' ?>"></script>
    <script type="text/javascript" src="<?php echo get_theme_root_uri() . '/b5awesometheme/js/carousel.js' ?>"></script>
    <link rel="stylesheet" href="<?php echo get_theme_root_uri() . '/b5awesometheme/css/bootstrap.css' ?>">
    <link rel="stylesheet" href="<?php echo get_theme_root_uri() . '/b5awesometheme/css/font-awesome/css/fontawesome-all.css' ?>">
    <link rel="stylesheet" href="<?php echo bloginfo('stylesheet_url') . '?v=' . date('H:i:s') ?>">
    <?php echo wp_head(); ?>
    <?php if ($_SERVER['HTTP_HOST'] != 'localhost' && !current_user_can('manage_options')) : ?>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-YD4N4CS6HP"></script>
        <script>
            window.dataLayer = window.dataLayer || [];

            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'G-YD4N4CS6HP');
        </script>
    <?php endif; ?>
    <?php
    if (current_user_can('manage_options')) :
    ?>
        <style>
            .sticky-top {
                top: 18px;
            }

            @media (max-width: 782px) {
                .sticky-top {
                    top: 32px;
                }
            }

            @media (max-width: 600px) {
                .sticky-top {
                    top: 0;
                }
            }
        </style>
    <?php
    endif;
    ?>
</head>
<body>
    <?php if ($_SERVER['HTTP_HOST'] != 'localhost') : ?>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v13.0" nonce="tdlOUxuG"></script>
    <?php endif ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top" aria-label="Main Menu">
        <div class="container-fluid">
            <a class="navbar-brand mx-1 mx-md-2" href="<?php echo site_url() ?>">
                <img class="h-100 w-100" src="<?php echo site_url() . '/logo.png' ?>" alt="<?php echo bloginfo('title') ?>">
            </a>
            <button class="navbar-toggler justify-content-end me-1" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMainMenu" aria-controls="navbarMainMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse mt-1 mt-md-0" id="navbarMainMenu">
                <?PHP
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'container_class' => 'primary-menu ms-auto'
                    )
                );
                ?>
            </div>
        </div>
    </nav>
    <main>
        <div class="container-fluid px-4 my-3">