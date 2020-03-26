<div class="instagram">
    <div class="container">
        <div class="redes flex alignCenter justifycenter">
            <a href="<?php the_field('facebook_url', 'option');?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/facebook-circle.png" alt="" class="iconLeft">
            </a>
            <a href="<?php the_field('instagram_url', 'option');?>">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/youtube-circle.png" alt="" class="iconLeft">
            </a>
        </div>
        <div class="title margin_2_top center-align">
        <?php the_field('user_name', 'option');?>
        </div>
        <div class="margin_2_top">
            <!-- PUT API HERE -->
        </div>
    </div>
</div>