<!DOCTYPE html>
<html <?php language_attributes() ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <?php wp_head(); ?>
</head>

<body>

<div class="alleinhalten">
    <header class="header">
        <div class="container <?php if(wp_is_mobile()){?>clasemobilcontainer<?php } ?>">
        <?php if ( function_exists( 'the_custom_logo' ) ) : ?>
    <div class="containerimage">
        <?php if ( has_custom_logo() ) : ?>
            <?php the_custom_logo(); ?>
        <?php else : ?>
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <img src="<?php echo get_theme_file_uri( '/assets/img/logo.png' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>
                <div class="containermenu">

                <nav>
                    <?php if(wp_is_mobile()){?>
<div class="menuamburguesa">
    <div class="linea1"></div>
    <div class="linea2"></div>
    <div class="linea3"></div>
</div>
<div class="menumobile">
    <?php
    wp_nav_menu(array(
        'theme_location' => 'menuprincipal',
        'menu_class' => 'menu-principal',
        'container_class' => 'container-menu',
        'current_item_class' => 'current-menu-item'
    ));
    ?>


                       
                   <?php }else{
  wp_nav_menu(array(
    'theme_location' => 'menuprincipal',
    'menu_class' => 'menu-principal',
    'container_class' => 'container-menu',
    'current_item_class' => 'current-menu-item'
));
 } ?>
                    
                       
                    </nav>
            </div>

            <div class="buttomHeader">
<button>Jetzt anfangen</button>
            </div>

        </div>
    
       
    </header>