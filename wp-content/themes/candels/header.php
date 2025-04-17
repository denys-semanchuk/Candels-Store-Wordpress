<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Candels
 */

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Candels</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Comfortaa&family=Yeseva+One&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
    />

    <?php wp_head(); ?>
  </head>

  <body>
    <header class="header">
      <div class="container header__inner">
        <a href="#" class="logo"
          ><img src="images/logo-header.png" alt="" class="logo__img"
        /></a>
        <nav class="menu header__menu">
          <button class="menu__btn">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </button>
            <?php
            wp_nav_menu(
              array(
                  'theme_location' => 'header-menu',
                  'menu_class'     => 'menu__list header__menu',
                  'container'      => false,
                  'fallback_cb'    => false
              )
          );
      
            ?>
            <!-- <li class="menu__list-item">
              <a href="#" class="menu__list-link">Contacts</a>
            </li> -->
        </nav>
        <a class="phone" href="tel:+4565789876">+45 65 78 98 76</a>
      </div>
    </header>