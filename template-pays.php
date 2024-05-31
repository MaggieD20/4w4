<?php

/**
 * Template name: Pays
 *
 */
?>
<?php get_header(); ?>

<main class="intro__pays">
    <div>
        <?php
        if (have_posts()) : the_post(); ?>
            <h1><?= get_the_title(); ?></h1>
            <?php the_content(); ?>
        <?php endif; ?>
    </div>
    <?php get_template_part("gabarit/vague"); ?>
</main>
<div class="rest_pays">
    <div class="api">
        <?php echo do_shortcode("[pays]"); ?>
    </div>
    <?php get_template_part("gabarit/vague"); ?>
</div>
<?php
get_footer();
