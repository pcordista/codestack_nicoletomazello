<div class="services">
    <div class="section-title center-align">
        <div class="subtitle">
            Conheça
        </div>
        <div class="title">
            Nossos Serviços & Produtos
        </div>
    </div>
    <div class="bg">
        <div class="container margin_3_top">
            <div class="grid relative">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape-bool-gray.png" alt="Shape" class="imgBg" />

                <?php

                $args = array(
                    'post_type'              => array('servicos'),
                    'nopaging'               => true,
                    'posts_per_page'         => '3',
                );

                $query = new WP_Query($args);

                if ($query->have_posts()) {
                    while ($query->have_posts()) {
                        $query->the_post();
                ?>

                        <div class="service-item">
                            <div class="title flex alignCenter justifycenter">
                                <?php the_title(); ?>
                            </div>
                            <div class="text">
                                <?php the_field('descricao'); ?>
                            </div>
                            <div class="button text-center">
                                <a class="modal-trigger" href="#contact">
                                    Saiba Mais
                                </a>
                            </div>
                        </div>

                <?php
                    }
                }
                wp_reset_postdata();

                ?>

            </div>
        </div>
    </div>
</div>