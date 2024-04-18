<?php
// page single
?>

<?php get_header(); ?>

<div id="accueil" class="global">
    <section class="accueil__section">
        <h2>Accueil(h2)</h2>
        <div class="section__ville">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>

                    <div class="carte">
                        <?php the_post_thumbnail('medium') ?>
                        <h4><?php the_title() ?></h4>
                        <?php the_content(); ?>

                    </div>
                <?php endwhile; ?>
            <?php endif;  ?>
        </div>
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