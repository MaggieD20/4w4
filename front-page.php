<?php
// modele
?>

<?php get_header(); ?>


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
        <h2>Accueil(h2)</h2>
        <div class="section__ville">

            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                    <div class="carte">

                        <h4><?php the_title() ?></h4>
                        <?php echo wp_trim_words(get_the_content(), 30); ?>
                        <p> <a href="<?php echo get_permalink() ?>">voir la suite</a></p>
                        <?php the_category() ?>
                    </div>
                <?php endwhile; ?>
            <?php endif;  ?>
        </div>
    </section>
</div>

<div class="global">
    <section>
        <?php
        $categories = get_categories();

        // Boucle sur chaque catégorie
        foreach ($categories as $category) { ?>
        <div class="carte"></div>
        <?php  
            // Récupérer le lien vers la catégorie
            $category_link = get_category_link($category->term_id);
            // Récupérer le nombre d'articles dans la catégorie
            $post_count = $category->count;
            // Récupérer la description de la catégorie
            $description = $category->description;
            // Récupérer les 10 premiers mots de la description
            $description_words = explode(' ', $description);
            $short_description = implode(' ', array_slice($description_words, 0, 10));
            // Afficher la carte de la catégorie
            echo '<div class=" carte">';
            echo '<h2><a href="' . esc_url($category_link) . '">' . $category->name . '</a></h2>';
            echo '<p>' . $short_description . '...</p>';
            echo '<a href="' . esc_url($category_link) . '">Voir plus</a>';
            echo '<p>Nombre d\'articles : ' . $post_count . '</p>';
            echo '</div>';
        }
        ?>
    </section>
</div>

<div id="galerie" class="global diagonal">
    <section class="galerie__section">
        <h2>galerie</h2>
        <h4>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores distinctio corrupti tempora dolores
        </h4>
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