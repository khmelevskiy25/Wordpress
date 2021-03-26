<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package test_work
 */

get_header();
?>

<main id="primary" class="site-main">

	<section class="error-404 not-found">
		<header class="page-header">
			<h1 class="page-title" style="text-align: center; margin: 50px 0;"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'test_work'); ?></h1>
		</header><!-- .page-header -->
</main><!-- #main -->

<?php
get_footer();
