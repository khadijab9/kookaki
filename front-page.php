<?php

get_header();
?>

<main id="primary" class="site-main">
    <section class="banner" poster="fallback">
        <video id="background-video" autoplay loop muted>
            <source src=" <?php echo get_template_directory_uri() . '-child/images_koukaki/video_Koukaki.mp4'; ?>" type="video/mp4">
        </video>

        <img class="parallax-title" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
    </section>
    <section id="#story" class="story">
        <h2 class="title-anime1"> <span class="title-span1"> L'histoire</span> </h2>
        <article id="" class="story__article">
            <p><?php echo get_theme_mod('story'); ?></p>
        </article>

        <!--Intégration de la section swiper -->
        <?php get_template_part('/templates-part/swiper'); ?>

        </article>
        <article id="place">
            <div>
                <img class="cloudTop cloudScroll" src="<?php echo get_template_directory_uri() . '-child/images_koukaki/big_cloud.png' ?>" alt="nuage">
                <img class="cloudBottom cloudScroll" src=" <?php echo get_template_directory_uri() . '-child/images_koukaki/little_cloud.png' ?>" alt="petit nuage">
                <h3> Le Lieu </h3>
                <p><?php echo get_theme_mod('place'); ?></p>
            </div>
        </article>
    </section>

    <section id="studio">
        <h2 class="title-anime2"> <span class="title-span2"> Studio </span> <span class="title-span3"> Koukaki </span> </h2>
        <div>
            <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
            <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
        </div>
    </section>

    <!--Intégration de la section des oscars -->
    <?php get_template_part('/templates-part/oscars'); ?>
</main><!-- #main -->


<?php
get_footer();
