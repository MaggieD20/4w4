<?php
// modele
?>

<?php get_header(); ?>

<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Résultat de la recherche</h2>
        <div class="section__ville">

            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>


                    <div class="carte_recherche">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } else {
                        }
                        ?>
                        <div class="recherche_textes">
                            <h2><?php the_title(); ?></h2>
                            <p> <?php echo wp_trim_words(get_the_content(), 10); ?></p>
                            <p> <a href="<?php echo get_permalink() ?>">Suite...</a></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif;  ?>
        </div>
    </section>
</div>
<!-- ---------footer---------- -->

<?php get_footer(); ?>
</body>

</html>