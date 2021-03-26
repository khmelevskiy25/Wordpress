<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package test_work
 */

get_header();
?>

<section id="intro">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
				<div class="intro animate-box">
					<h1><?php echo the_title(); ?></h1>
					<h2><?php echo get_field('pre_title'); ?></h2>
				</div>
			</div>
		</div>
		<div>
</section>

<main id="main">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 animate-box">
			<?php echo the_content(); ?>
		</div>
		<!-- <div class="col-md-4"></div> -->
	</div>
</main>

<?php
get_footer();
