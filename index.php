<?php
// modele
?>

<?php get_header(); ?>
<div id="entete" class="global">
    <section class="entete__header">
        <h1 class="bgc-texte">Theme</h1>
        <h2 class="bgc-texte">4w4 - conception d'interfarce et développement web</h2>
        <h3 class="bgc-texte">TIM collège de Maisonneuve</h3>
        <button class="entete__button">Évenements</button>
    </section>
    <?php get_template_part("gabarit/vague"); ?>
</div>
<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Accueil(h2)</h2>
        <div class="section__cours">

            <!--  if (have_posts()) {
                     while (have_posts()) {
                         the_post();
                         the_title('<p>', '</p>');
                         $contenu = get_the_content();
                         $contenu = wp_trim_words($contenu, 10);
                         echo $contenu;
                     }
                 } -->

            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <?php $titre = get_the_title();
                    $sigle = substr($titre, 0, 7);
                    $pos_parenthese = strpos($titre, '(');
                    $temps = substr($titre, $pos_parenthese + 1, -1);
                    $titre = substr($titre, 7, $pos_parenthese - 7);
                    // strpos
                    ?>
                    <div class="carte">
                        <h4><?php echo $sigle ?></h4>
                        <h4><?php echo $titre ?></h4>


                        <?php
                        $contenu = wp_trim_words(get_the_content(), 30); ?>
                        <?php echo $contenu; ?>
                        <h4>Durée: <?php echo $temps ?></h4>
                    </div>
                <?php endwhile; ?>
            <?php endif;  ?>
        </div>
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
<div id="footer" class="global">
    <footer class="footer__section">
        <h2>footer</h2>
        <button>merci</button>
    </footer>
</div>
</body>

</html>