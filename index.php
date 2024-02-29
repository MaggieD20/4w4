<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>theme</title>
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() . '/normalize.css'; ?>">
    <link rel="stylesheet" href=" <?php echo get_template_directory_uri() . '/style.css'; ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Darumadrop+One&family=Single+Day&display=swap" rel="stylesheet">

</head>

<body>
    <div id="entete" class="global">
        <header class="entete__header">
            <h1>Theme</h1>
            <h2>4w4 - conception d'interfarce et développement web</h2>
            <h3>TIM collège de Maisonneuve</h3>
            <button class="entete__button">Évenements</button>
        </header>
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" style="fill:var(--couleur-arriere-accueil)"></path>
            </svg>
        </div>
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
                        $temps = substr($titre, -6);
                        $titre = substr($titre, 7, -6);
                        // strpos
                        ?>
                        <div class="carte">
                            <h4><?php echo $sigle ?></h4>
                            <h4><?php echo $titre ?></h4>


                            <?php
                            $contenu = wp_trim_words(get_the_content(), 30); ?>
                            <?php echo $contenu; ?>
                            <h4><?php echo $temps ?></h4>
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
        <div class="vague">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" style="fill:var(--couleur-arriere-footer)"></path>
            </svg>
        </div>
    </div>
    <div id="footer" class="global">
        <footer class="footer__section">
            <h2>footer</h2>
            <button>merci</button>
        </footer>
    </div>
</body>

</html>