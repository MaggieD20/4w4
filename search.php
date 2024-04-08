<?php
// modele
?>

<?php get_header(); ?>

<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Résultat de la recherche</h2>
        <div class="flexbox">

            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>


                    <div class="carte">

                        <?php the_title();
                        ?>
                        <?php
                        echo wp_trim_words(get_the_content(), 10); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif;  ?>
        </div>
    </section>
</div>
<!-- ---------footer---------- -->
<div id="footer" class="global">
    <footer class="footer__section">
        <h2>footer</h2>

    </footer>
</div>
</body>

</html>