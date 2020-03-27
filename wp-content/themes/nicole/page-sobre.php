<?php

/**
 * @package Code_Starter
 */

get_header('internal');
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php

        get_template_part('template-parts/content', 'sidebar');

        get_template_part('template-parts/content', 'banner-about');
        ?>

        <div class="about-page">
            <div class="container">
                <div class="section-title center-align">
                    <div class="subtitle">
                        Conheça
                    </div>
                    <div class="title">
                        Nicole Tomazella
                    </div>
                </div>

                <div class="section-one">
                    <div>
                        <img src="<?php the_field('imagem'); ?>" alt="">
                    </div>
                    <div class="text">
                        <?php the_field('nicole_tomazella'); ?>
                        <div>
                            <iframe width="560" height="315" src="<?php the_field('video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section-two container">
                
                <?php
                
                get_template_part('template-parts/content', 'services');
                
                ?>

            </div>

            <?php

            get_template_part('template-parts/content', 'testemonials');

            get_template_part('template-parts/content', 'parallax-about');

            get_template_part('template-parts/content', 'purpose');

            ?>

        </div>

        <?php

        get_template_part('template-parts/content', 'events');

        get_template_part('template-parts/content', 'contact');

        get_template_part('template-parts/content', 'instagram');

        get_template_part('template-parts/content', 'modal');

        ?>

    </main><!-- #main -->
</div><!-- #primary -->

<script>
    document.addEventListener("load", startHome())
</script>

<?php
get_footer();
