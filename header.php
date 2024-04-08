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
    <div id="menu" class="global clr-agencement-primaire">
        <!-- permet d'ajouter un logo qui a été choisi à l'Aide du personnaliser (custom) -->
        <?php echo get_custom_logo(); ?>
        <header class="entete__menu">
            <label id="burger" for="chk_burger"><svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg></label>
            <input id="chk_burger" type="checkbox">
            <div class= "menu_recherche">
            <?php wp_nav_menu(array("menu"=>"principal","container" => "nav")); ?>
            <?php get_search_form(); ?>
            </div>
        </header>
    </div>