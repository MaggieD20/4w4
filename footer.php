<!-- page du footer -->
<div id="footer" class="global">
    <footer class="footer__section">

        <div class="info_auteure">
            <h6>Marguerite Demontigny</h6>
            <?php get_template_part("gabarit/logo-sociaux"); ?>
            <a href="https://github.com/MaggieD20/4w4/tree/tp2">Lien Github</a>
            <a href="https://maggied20.github.io/4w4/">Page Git</a>
        </div>
        <div class="info_projet">
            <h6><a href="https://www.cmaisonneuve.qc.ca/">Collège de Maisonneuve</a></h6>
            <h6>Addresse: 3800 R. Sherbrooke E, Montréal, QC H1X 2A2</h6>
            <h6>Site de voyage créé dans le cadre du cours de 4w4</h6>
        </div>
        <div class="liens_recherches_footer">
            <form class="recherche" action="">
                <input class="recherche__input" type="search" placeholder="recherche">
                <button class="recherche__button">
                    <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                    </svg>

                </button>
            </form>
            <div class="liens">
                <?php wp_nav_menu(array("menu" => "piedpage", "container" => "nav")); ?>
            </div>
        </div>
        <div class="image_footer">
            <?php $image_id = 252;
            $image_url = wp_get_attachment_image_url($image_id, 'full') ?>
            <img class="img_footer" src="<?= $image_url ?>" alt="image de la carte du monde">
        </div>

    </footer>
</div>
<?php wp_footer(); ?>
</body>

</html>