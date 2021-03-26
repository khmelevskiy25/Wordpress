<?php

/**Template name: Services page template */

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

<section id="services">
    <div class="container">
        <div class="row">
            <?php dynamic_sidebar('widget_services'); ?>         
        </div>
    </div>
</section>
<?php get_footer(); ?>