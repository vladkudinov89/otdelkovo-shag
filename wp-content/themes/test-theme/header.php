<!DOCTYPE html>
<html>
<head>
    <title>Отделково</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
        $urls = GetTemplatePath();
    ?>

    <link rel="stylesheet" href="<?php echo $urls['template']; ?>/css/fonts.css">
    <link rel="stylesheet" href="<?php echo $urls['template']; ?>/css/style.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.0.min.js"></script>
    <script src="<?php echo $urls['template']; ?>/js/jquery.smoothscroll.js"></script>
    <script src="<?php echo $urls['template']; ?>/js/script.js"></script>
</head>
<body>
<header>
    <div class="container">
        <div class="logoWrapper inlineBlock">
            <a href="<?php echo $urls['home']; ?>" title="На главную">
                <img src="<?php echo $urls['template']; ?>/images/headerLogo.png" alt="">
            </a>
        </div>
        <div class="menuWrapper inlineBlock">
            <?php wp_nav_menu(array(
                'menu_class'      => 'menu mainMenu'
            ));
            ?>
        </div>
    </div>
</header>