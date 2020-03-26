<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Code_Starter
 */

?>

</div><!-- #content -->

<footer>
	<div class="newsletter">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/newsletter-new.jpg" class="novo" alt="novo" />
		<div class="content">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ipad.jpg" class="img" alt="Newsletter" />
			<div>
				<div class="title">Receba Conteúdo Exclusivo em seu E-mail</div>
				<div class="subtitle text-uppercase">
					Cadastre-se e receba Insights e Estratégias de desenvolvimento
					humano.
				</div>
				<div class="input">
					<input placeholder="Seu Nome" />
					<input placeholder="Seu Email" />
					<button class="button-default">me inscrever</button>
				</div>
			</div>
		</div>
	</div>

	<div class="footer center-align">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.png" class="nt">

		<div class="margin_2_top flex alignCenter textUpper footer-menu">
			<a href="#">produtos</a>
			<div>nt desenvolvimento humano ltda</div>
			<a href="#">videos</a>
		</div>
		<div class="margin_1_top">
			<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ssl.png" class="ssl">
			</a>
		</div>

		<div class="markdigx margin_2_top">
			<a href="#">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/markdigx.png" alt="">
			</a>
		</div>
	</div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>