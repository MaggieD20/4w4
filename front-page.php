<?php
// front-page
?>

<!-- prendre le header -->
<?php get_header(); ?>

<!-- zone de haut de page -->
<div id="entete" class="global">
    <section class="entete__header">
        <h1 class="bgc-texte"><?php echo get_bloginfo('name'); ?> </h1>
        <h2 class="bgc-texte"><?php echo get_bloginfo('description'); ?></h2>
        <h3 class="bgc-texte">TIM collège de Maisonneuve</h3>
        <button class="entete__button">Évenements</button>
    </section>
    <?php get_template_part("gabarit/vague"); ?>
</div>
<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Destinations populaires</h2>
        <div class="section__ville">

            <!-- afficher les voyages populaires -->
            <?php if (have_posts()) :
                while (have_posts()) : the_post();
                    $ma_categorie = "carte";
                    if (in_category('galerie')) {
                        $ma_categorie = "galerie";
                    }
                    get_template_part('gabarit/categorie', $ma_categorie);
            ?>

                <?php endwhile; ?>
            <?php endif;  ?>
        </div>
    </section>
</div>

<div class="global clr-agencement-vert">
    <section class="section__ville">
        <h2>Categories</h2>
        <div class="section__ville">
            <?php get_template_part("gabarit/categorie"); ?>

    </section>
</div>
</div>

<div id=" galerie" class="global diagonal">
    <section class="galerie__section">
        <h2>galerie</h2>
        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores distinctio corrupti tempora dolores
        </h4>
        <?php echo do_shortcode("[em_destination]"); ?>
    </section>
</div>
<div id="evenement" class="global">
    <section class="evenement__section">
        <h2>Evenement</h2>
        <h5>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquam quo beatae necessitatibus porro vel
            sint dolorum sapiente odio recusandae! Sint, aspernatur modi illum voluptas a ullam aut quisquam tempora
            commodi.</h5>
    </section>
    <?php get_template_part("gabarit/vague"); ?>
</div>


<?php get_footer(); ?>

</body>

</html>