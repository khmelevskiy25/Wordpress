<?php

/**Template name: Contact page template */

?>

<?php get_header(); ?>

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
            <?php echo do_shortcode('[contact-form-7 id="52" title="Contact form"]'); ?>
        </div>
        <!-- <div class="col-md-4"></div> -->
    </div>
</main>

<?php get_footer(); ?>