<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <div class="wrapper">

        <header class="header">
            <div class="container">
                <div class="header__logo">
                    <a href="/">
                        <?php 
                            $custom_logo_id = get_theme_mod( 'custom_logo' );

                            $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

                            echo '<img src="'.$image[0].'" class="logo"/>';
                        ?>
                    </a>
                </div>
                <div class="header__nav">
                    
                    <div class="header__info">
                        <div class="header__site-name">
                            <?php bloginfo('name') ?>
                        </div>
                        <div class="header__auth"></div>
                    </div>
                    
                    <div class="header__menu">
                    
                    </div>
                </div>
            </div>
        </header>

        <main>

        </main>
    
    </div>