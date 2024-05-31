<?php

/**
 * Template name: Pays
 *
 */
?>

<?php get_header(); ?>
<main class="intro__pays">
    <?php
    if (have_posts()) : the_post(); ?>
        <h1><?= get_the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endif; ?>
    <?php get_template_part("gabarit/vague"); ?>
</main>
<div class="rest_pays">
    <p>hgxrtxgf
    </p>

</div>
<?php
get_footer();
