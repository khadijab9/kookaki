<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'foce'); ?></a>


        <header id="masthead" class="site-header">
            <nav id="site-navigation" class="main-navigation">
                <div class="containerNav">
                    <h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
                    <div class="burgerMenu">
                        <span class="line l1"></span>
                        <span class="line l2"></span>
                        <span class="line l3"></span>
                    </div>
                </div>

                <div class="menu-full">
                    <ul>
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                        <li><a href="#story">Histoire</a></li>
                        <li><a href="#characters">Personnages</a></li>
                        <li><a href="#place">Lieu</a></li>
                        <li><a href="#studio">Studio Koukaki</a></li>
                        <li class="studio"> STUDIO KOUKAKI </li>
                    </ul>
                    <img class="orchidMenu" src="<?php echo get_template_directory_uri() . '-child/icone-koukaki/orchid.png'; ?>" alt="logo menu fullscreen">
                    <img class="cat" src="<?php echo get_template_directory_uri() . '-child/icone-koukaki/cat-1.png'; ?>" alt="logo menu fullscreen">
                    <img class="flower" src="<?php echo get_template_directory_uri() . '-child/icone-koukaki/Flower.png'; ?>" alt="logo menu fullscreen">
                    <img class="catBlue" src="<?php echo get_template_directory_uri() . '-child/icone-koukaki/cat.png'; ?>" alt="logo menu fullscreen">
                    <img class="sunFlower" src="<?php echo get_template_directory_uri() . '-child/icone-koukaki/Sunflower.png'; ?>" alt="logo menu fullscreen">
                    <img class="litleFlower" src="<?php echo get_template_directory_uri() . '-child/icone-koukaki/random_flower.png'; ?>" alt="logo menu fullscreen">
                    <img class="cat3" src="<?php echo get_template_directory_uri() . '-child/icone-koukaki/Group 180.png'; ?>" alt="logo menu fullscreen">
                    <img class="hibisusMenu" src="<?php echo get_template_directory_uri() . '-child/icone-koukaki/Hibiscus.png'; ?>" alt="logo menu fullscreen">
                </div>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->