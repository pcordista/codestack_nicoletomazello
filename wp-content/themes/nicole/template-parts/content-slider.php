<div class="relative">
    <div class="swiper-banner swiper-container">

        <div class="swiper-wrapper">

            <?php

            if (have_rows('banner')) :

                while (have_rows('banner')) : the_row();

            ?>

                    <div class="swiper-slide">
                        <img src="<?php the_sub_field('imagem_desktop'); ?>" alt="Banner Home" class="widthfull hide-on-small-only" />
                        <img src="<?php the_sub_field('imagem_mobile'); ?>" alt="Banner Home" class="widthfull hide-on-med-and-up" />
                        <div class="content white-text">
                            <div>
                                <div>
                                    <h5 class="subtitle"><?php the_sub_field('subtitulo'); ?></h5>
                                    <h1 class="title"><?php the_sub_field('titulo'); ?></h1>
                                    <div class="mt-4">
                                        <a href="<?php the_sub_field('link_botao'); ?>" class="button-default textUpper">
                                            saiba mais
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            <?php

                endwhile;

            endif;

            ?>

        </div>
        <div class="swiper-button-next">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.svg" alt="Arrow" />
        </div>
        <div class="swiper-button-prev">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.svg" alt="Arrow" />
        </div>
        <div class="swiper-count">
            <span class="index">01</span>&nbsp;/&nbsp;<span class="total"></span>
        </div>
        <div class="redes">
            <a href="https://www.instagram.com/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/instagram.png" alt="instagram" />
            </a>
            <a href="https://www.facebook.com/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook.png" alt="facebook" />
            </a>
            <a href="https://www.youtube.com/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube.png" alt="youtube" />
            </a>
        </div>
    </div>
    <div class="slider-image">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/nicole.png" alt="Nicole Tomazella" />
    </div>
</div>