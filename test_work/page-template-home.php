<?php

/**Template name: Home page template */

?>

<?php get_header(); ?>

<?php $posts = get_posts(array(
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  => '',
    'post_type'   => 'post',
    'suppress_filters' => true,
));
?>


<section id="intro">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 text-center">
                <div class="intro animate-box">
                    <h2><?php echo get_field('pre_title'); ?></h2>
                </div>
            </div>
        </div>
        <div>
</section>

<section id="work">
    <div class="container">
        <div class="row">
            <?php
            foreach ($posts as $post) : ?>
                <?php setup_postdata($post); ?>
                <div class="col-md-6">
                    <div class="fh5co-grid animate-box" style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);">
                        <a class="image-popup text-center" href="<?php echo get_post_permalink(); ?>">
                            <div class="work-title">
                                <h3><?php echo get_the_title(); ?></h3>
                                <span class="short-desc"><?php echo the_excerpt(); ?></span>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php wp_reset_postdata(); ?>
        </div>
        <div>
</section>

<?php get_footer(); ?>
<audio id="playAudio" controls>
    <source src="music.mp3">
</audio>
<p class="pre" onclick="soundClick()">Кликни по этому тексту</p>