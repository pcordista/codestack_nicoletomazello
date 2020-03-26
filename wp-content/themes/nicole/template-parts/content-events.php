<div class="events relative">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/parallax2.jpg" class="widthfull hide-on-med-and-down">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/parallax2-mobile.jpg" class="widthfull hide-on-large-only">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/bools.png" class="shape">
    <div class="content">
        <div>
            <div class="header">
                Próximos eventos
            </div>

            <?php

            $args = array(
                'post_type'              => array('evento'),
                'nopaging'               => true,
                'posts_per_page'         => '3',
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>

                    <div class="event">

                        <?php
                        $date = get_field('data');
                        $dia = date("d", strtotime($date));
                        $mesano = date("M. Y", strtotime($date));
                        ?>

                        <div class="date">
                            <span><?php echo $dia; ?></span><BR><?php echo $mesano; ?>
                        </div>
                        <div>
                            <div class="title">
                                <?php the_title(); ?>
                            </div>
                            <div class="margin_05_top flex">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/clock.png" alt="" class="iconLeft">
                                <?php the_field('horario'); ?>
                            </div>
                            <div class="link">
                                <a href="<?php the_field('link'); ?>">
                                    Saiba Mais
                                </a>
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
</div>