<div class="testemonials">
    <div class="container">
        <div class="section-title">

            <div class="subtitle">
                Depoimentos
            </div>
            <div class="title">
                Lorem Ipsum
            </div>
        </div>
        <div class="swiper-container swiper-testemonials">
            <div class="swiper-wrapper">

                <?php

                $args = array(
                    'post_type'              => array('depoimento'),
                    'nopaging'               => true,
                    'posts_per_page'         => '3',
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                ?>

                        <div class="swiper-slide">
                            <div class="grid">
                                <div class="image">
                                    <img src="<?php the_field('imagem'); ?>" alt="<?php the_title(); ?>" />
                                </div>
                                <div class="content">
                                    <div class="title"><?php the_field('texto_01'); ?></div>
                                    <div class="text"><?php the_field('texto_01'); ?></div>
                                    <div class="margin_3_top person">
                                        <div class="name">Felipe Oliveira</div>
                                        <div class="business"><?php the_field('empresa'); ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                wp_reset_postdata();

                ?>

            </div>
        </div>
        <div class="swiper-button-next swiper-testemonials-next">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-yellow.png" alt="arrow" />
        </div>
        <div class="swiper-button-prev swiper-testemonials-prev">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow-yellow.png" alt="arrow" />
        </div>
    </div>
</div>