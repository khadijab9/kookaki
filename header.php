<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'foce' ); ?></a>


<header id="masthead" class="site-header">
		<nav id="site-navigation" class="main-navigation">
            <div class="title-toggle">
                <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                <button  aria-controls="primary-menu"class="nav-toggle" aria-expanded="false">
                    <span class="line l1"></span>
                    <span class="line l2"></span>
                    <span class="line l3"></span>
                </button>
            </div>
            <div class="burgerNav">
            <ul>
                <img  src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
                <li><a href="#story">Histoire</a></li>
                <li><a href="#characters">Personnages</a></li>
                <li><a href="#place">Lieu</a></li>
                <li><a href="#studio">Studio Koukaki</a></li>
            </ul>
            </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->