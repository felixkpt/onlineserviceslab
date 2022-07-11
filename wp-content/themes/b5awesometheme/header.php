<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title ?></title>
    <link rel="shortcut icon" href="<?php echo site_url('favicon.ico') ?>" type="image/x-icon">
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
    <?php 
    include "nav.php";
    ?>
    <main>
        <div class="container-fluid px-4 my-3">