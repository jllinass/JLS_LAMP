<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php wp_head(); ?>
    <?php jls_add_theme_scripts(); ?>
    
    <title>Home</title>
</head>
<body>
    <script src="https://kit.fontawesome.com/d532356f5e.js" crossorigin="anonymous"></script>
    <header>
        <div class="header">
            <div class="logo">RUNO</div>

            <?php

            wp_nav_menu(array(
                'menu' => 'primary',
                'theme_location' => 'primary',
                'container' => 'ul',
                'menu_class' => 'align-items-center justify-content-evenly w-100 navbar-nav m-auto mb-2 mb-lg-0',
            ))
            
            ?>
            <div class="social-icons">
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
                <a href="#"><i class="fab fa-pinterest"></i></a>
                <a href="#"><i class="fab fa-search"></i></a>
            </div>
        </div>
        <div class="title-header">
            <div>
                <h2>Richird Norton photorealistic rendering as real photos</h2>
                <p>Progressively incentivize cooperative systems through technically sound functionalities. The credibly productivate seamless data.</p>
            </div>
        </div>
    </header>