<?php

/**
 * @package Code_Starter
 */

get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php

//         get_template_part('template-parts/content', 'menu');

        get_template_part('template-parts/content', 'sidebar');

        get_template_part('template-parts/content', 'slider');

        get_template_part('template-parts/content', 'newsletter');

        get_template_part('template-parts/content', 'about');

        get_template_part('template-parts/content', 'parallax');

        get_template_part('template-parts/content', 'services');

        get_template_part('template-parts/content', 'testemonials');

        get_template_part('template-parts/content', 'purpose');

        get_template_part('template-parts/content', 'news');

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
