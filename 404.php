<?php
// page d'erreur
?>

<!-- prendre le header -->
<?php get_header(); ?>

<!-- message  -->
<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Accueil</h2>
        <div class = "page_erreur">
            <h4>L'adresse que vous avec entrée n'existe pas. vous pouvez revenir à la page d'accueil en cliquant sur ce lien:</h4>
          <a class = "lien-accueil" href="<?php echo get_bloginfo('url'); ?>">revenir en arriere</a>  
        </div>
    </section>
</div>

<div id="footer" class="global">
    <footer class="footer__section">
        <h2>footer</h2>
       
    </footer>
</div>
</body>

</html>