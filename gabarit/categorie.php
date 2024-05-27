  <?php
    //   gabarit pour afficher des cartes de catégories
    $categories = get_categories();
    // Boucle sur chaque catégorie
    foreach ($categories as $category) {
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