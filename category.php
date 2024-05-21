<?php
// page des catégories
?>

<!-- prendre le header -->
<?php get_header(); ?>

<!-- zonne d'accueil -->
<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Accueil</h2>
        <div class="section__ville">

            <!-- faire apparaitre le catégorie -->
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
<!-- zonne de galerie -->
<div id="galerie" class="global diagonal">
    <section class="galerie__section">
        <h2>galerie</h2>
        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores distinctio corrupti tempora dolores
        </h4>
    </section>
</div>
<!-- zone d'évenement -->
<div id="evenement" class="global">
    <section class="evenement__section">
        <h2>Evenement</h2>
        <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam quo beatae necessitatibus porro vel
            sint dolorum sapiente odio recusandae! Sint, aspernatur modi illum voluptas a ullam aut quisquam tempora
            commodi.</h5>
    </section>
    <?php get_template_part("gabarit/vague"); ?>
</div>

<!-- prendre le footer -->
<?php get_footer(); ?>

</body>

</html>