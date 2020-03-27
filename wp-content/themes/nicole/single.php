<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Code_Starter
 */

get_header('internal');
?>

<div id="primary" class="content-area">
	<main id="main" class="site-main">

		<?php

		get_template_part('template-parts/content', 'sidebar');

		?>

		<?php
		while (have_posts()) :
			the_post(); ?>

			<div class="banner relative">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-blog.jpg" class="widthfull hide-on-med-and-down">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/banner-blog.jpg" class="widthfull hide-on-large-only">
				<div class="content full_absolute flex alignCenter justifycenter textCapitalize white-text">
					<?php the_title(); ?>
				</div>
			</div>

			<div class="blog-page">
				<div class="container">
					<div class="grid">
						<div>
							<div class="post">
								<div class="category">
									<span>Novidades</span>, <span>Coach</span>
								</div>
								<h5 class="title">
									<?php the_title(); ?>
								</h5>
								<div class="text">
									<?php

									the_content();

									?>
								</div>
							</div>
						</div>
						<div>
							<div class="shape">
								<h5>Categorias</h5>

								<ul>

									<?php
									$categories = get_categories(array(
										'orderby' => 'name',
										'order'   => 'ASC'
									));

									foreach ($categories as $category) {
										$category_link = sprintf(
											'<a href="%1$s" alt="%2$s">%3$s</a>',
											esc_url(get_category_link($category->term_id)),
											esc_attr(sprintf(__('View all posts in %s', 'textdomain'), $category->name)),
											esc_html($category->name)
										);

										echo '<li>' . sprintf(esc_html__('> %s'), $category_link) . '</li> ';
									}

									?>

								</ul>
							</div>

							<div class="shape hide-on-med-and-down">
								<h5>Artigos & Posts</h5>
								<?php

								$args = array(
									'nopaging'               => true,
									'posts_per_page'         => '3',
								);

								$query = new WP_Query($args);

								if ($query->have_posts()) {
									while ($query->have_posts()) {
										$query->the_post();
								?>
										<a href="<?php the_permalink(); ?>">
											<div class="post-item">
												<div class="image">
													<img src="<?php echo get_the_post_thumbnail_url(); ?>">
												</div>
												<div>
													<div class="title"><?php the_title(); ?></div>
													<div class="date"><?php the_date(); ?></div>
												</div>
											</div>
										</a>
								<?php
									}
								}
								wp_reset_postdata();

								?>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php
		endwhile; // End of the loop.
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<script>
	document.addEventListener("load", startHome())
</script>

<?php
get_footer();
