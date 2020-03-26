<div class="about">
    <div class="container">
        <div class="section-title">
            <div class="subtitle">
                Conheça
            </div>
            <div class="title">
                Nicole Tomazella
            </div>
        </div>
        <div class="grid margin_2_top">
            <div class="text">
                <div>
                    <?php the_field('nicole_tomazella'); ?> </div>
                <div class="margin_2_top">
                    <a href="./about.php" class="button-default textUpper">
                        saiba mais
                    </a>
                </div>
            </div>
            <div class="video relative">
                <iframe width="560" height="315" src="<?php the_field('video_conheca'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/shape-bool.png" class="Bool" alt="shape" />
            </div>
        </div>
    </div>
</div>