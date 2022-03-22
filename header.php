<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Custom Wordpress Theme">
    <meta name="author" content="https://www.youtube.com/watch?v=-h7gOJbIpmo&ab_channel=freeCodeCamp.org">
    <link rel="shortcut icon" href="<?= get_template_directory_uri() ?>/assets/images/logo.png">
    <!-- Load styles -->
    <?= wp_head(); ?>
</head>

<body>

    <header class="header text-center">
        <a class="site-title pt-lg-4 mb-0" href="/">
            <!-- Get Site Title -->
            <?= get_bloginfo('name') ?>
        </a>

        <nav class="navbar navbar-expand-lg navbar-dark">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div id="navigation" class="collapse navbar-collapse flex-column">
                <?php
                    // Get site identity logo path
                    if( function_exists('the_custom_logo'))
                    {
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                        $logo_path = $logo[0];
                    }
                ?>

                <img class="mb-3 mx-auto logo" src="<?= $logo_path ?>" alt="logo">

                <?php
                    // Dynamic menu
                    wp_nav_menu([
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="navbar-nav flex-column text-sm-center text-md-left">%3$s</ul>'
                    ]);
                ?>

                <hr>
                <ul class="social-list list-inline py-3 mx-auto">
                    <li class="list-inline-item"><a href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                    <li class="list-inline-item"><a href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                </ul>

            </div>
        </nav>
    </header>

    <div class="main-wrapper">
        <header class="page-title theme-bg-light text-center gradient py-5">
            <!-- Get Page title -->
            <h1 class="heading"><?= the_title(); ?></h1>
        </header>