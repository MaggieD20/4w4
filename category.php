<?php
// page des catégories
?>

<!-- prendre le header -->
<?php get_header(); ?>

<!-- zonne d'accueil -->
<div id="accueil" class="global">
    <section class="accueil__section">
        <h2><?php single_cat_title(); ?></h2>
        <div class="section__ville">

            <!-- faire apparaitre la catégorie -->
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                    <div class="carte">

                        <h4><?php the_title() ?></h4>
                        <?php echo wp_trim_words(get_the_content(), 30); ?>
                        <p> <a href="<?php echo get_permalink() ?>">voir la suite</a></p>

                    </div>
                <?php endwhile; ?>
            <?php endif;  ?>
        </div>
    </section>
</div>

<!-- prendre le footer -->
<?php get_footer(); ?>

</body>

</html>