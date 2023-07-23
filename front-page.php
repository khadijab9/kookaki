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
            <h2 class="title-anime1"> <span class="title-span1" > L'histoire</span> </h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <article id="characters">
                <div class="main-character">
                    <h3> Les personnages </h3>
 <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img  src= "<?php echo get_template_directory_uri() . '-child/images_koukaki/Orenjiiro-1.png' ?>" alt="nuage">
      </div>
      <div class="swiper-slide">
        <img  src= "<?php echo get_template_directory_uri() . '-child/images_koukaki/Pinku-1.png' ?>" alt="nuage">
      </div>
      <div class="swiper-slide">
        <img  src= "<?php echo get_template_directory_uri() . '-child/images_koukaki/Tenshi-1.png' ?>" alt="nuage">
      </div>
      <div class="swiper-slide">
        <img  src= "<?php echo get_template_directory_uri() . '-child/images_koukaki/Jaakuna-1.png' ?>" alt="nuage">
      </div>
      <div class="swiper-slide">
        <img  src= "<?php echo get_template_directory_uri() . '-child/images_koukaki/Kawaneko.png' ?>" alt="nuage">
      </div>
    </div>
    
  </div>

  
            </article>
            <article id="place">
                <div>
                    <img class="cloudScroll" src= "<?php echo get_template_directory_uri() . '-child/images_koukaki/big_cloud.png' ?>" alt="nuage">
                    <img class="cloudScroll" src=" <?php echo get_template_directory_uri() . '-child/images_koukaki/little_cloud.png' ?>" alt="petit nuage">
                    <h3> Le Lieu  </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                </div>

            </article>
        </section>


        <section id="studio">
            <h2 class="title-anime2"> <span class="title-span2"> Studio </span> <span class="title-span3"> Koukaki </span>  </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        
        <!--Intégration de la section des oscars -->
        <?php get_template_part( '/templates-part/oscars' ); ?>
    </main><!-- #main -->


<?php
get_footer();