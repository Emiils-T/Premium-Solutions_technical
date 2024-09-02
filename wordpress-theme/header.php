<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>IS Services</title>

    <?php wp_head(); ?>

</head>
<body>
<header>
    <div class="position-relative w-100 h-100">

        <div>
            <div class="hero-container">
                <img class="hero-banner" src="<?php the_field("hero_banner") ?>" alt="">
                <img class="logo" src="<?php the_field("logo") ?>" alt="">
            </div>
        </div>

        <div>
            <img class="language-selector" src="<?php the_field("language_selector") ?>" alt="">

            <div class="top-right-container">
                <img class="top-right-image" src="<?php the_field("top_right_image") ?>" alt="">
                <button class="hamburger-button" aria-label="Menu">
                    <img class="hamburger-icon" src="<?php the_field('hamburger_icon') ?>" alt="">
                </button>
            </div>
            <div class="menu-overlay"></div>
            <nav class="hamburger-dropdown-menu">
                <button class="close-button" aria-label="Close menu">
                    <img src="<?php the_field('dropdown_menu_close_button') ?>" alt="">
                </button>
                <ul>
                    <li><a href="#"><?php the_field('dropdown_option_1') ?></a></li>
                    <li><a href="#"><?php the_field('dropdown_option_2') ?></a></li>
                    <li><a href="#"><?php the_field('dropdown_option_3') ?></a></li>
                    <li><a href="#"><?php the_field('dropdown_option_4') ?></a></li>
                    <li><a href="#"><?php the_field('dropdown_option_5') ?></a></li>

                </ul>
            </nav>

            <div>
                <div class="content">
                    <h1>IS Services</h1>
                    <p>Tavs personīgais konsultants informācijas tehnoloģiju un kiberdrošības jautājumos.</p>
                    <button class="contact-btn"><?php the_field('contact_button') ?></button>
                </div>
            </div>
        </div>
    </div>
</header>