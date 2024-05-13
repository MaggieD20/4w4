<?php
// Gabarit pour afficher un carte de destination
?>

<div class="carte">
    <?php the_post_thumbnail('thumbnail');  ?>
    <h4><?php the_title() ?></h4>
    <?php echo wp_trim_words(get_the_content(), 30); ?>
    <p> <a href="<?php echo get_permalink() ?>">voir la suite</a></p>
    <?php the_category() ?>
</div>