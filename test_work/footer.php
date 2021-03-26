<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package test_work
 */

?>

<section id="services">
	<div class="container">
		<div class="row">
			<?php dynamic_sidebar('widget_footer'); ?>
		</div>
</section>

<footer id="footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="footer-widget border">
					<p class="pull-left"><small>&copy;<?php esc_html_e('PLANET EARTH. All Rights Reserved.', 'test_work'); ?> </small></p>

				</div>
			</div>
		</div>
	</div>
</footer>
</div>

<?php wp_footer(); ?>
<audio id="playAudio" controls>
	<source src="music.mp3">
</audio>
<p class="pre" onclick="soundClick()">Кликни по этому тексту</p>
</body>

</html>