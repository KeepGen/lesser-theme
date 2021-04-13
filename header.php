<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<a href="javascript:;" class="mobile-menu-toggle">
   <span class="span1"></span>
   <span class="span2"></span>
   <span class="span3"></span>
</a>
<!-- /.mobile-menu-toggle -->

<?php
   wp_nav_menu( [
      'theme_location'  => 'header_menu',
      'container'       => 'nav', 
      'container_class' => 'mobiheader-nav',
      'menu_class'      => 'mobiheader-menu',
      'echo'            => true,
   ] );
?>
<!-- /.mobiheader-nav -->

<?php wp_body_open(); ?>
<div class="grand-wrapper">
   <header class="header">
      <div class="container">
         <div class="header-wrapper">
            <?php
               if( has_custom_logo() ){
                  echo '<div class="logo">' . get_custom_logo() .
                  '<span class="logo-name">' . get_bloginfo('name') . '</span></div>';
               } else {
                  echo '<span class="logo-name">' . get_bloginfo('name') . '</span>';
               }
            ?>

            <?php
               wp_nav_menu( [
                  'theme_location'  => 'header_menu',
                  'container'       => 'nav', 
                  'container_class' => 'header-nav',
                  'menu_class'      => 'header-menu',
                  'echo'            => true,
               ] );
            ?>

         </div>
      </div>
   </header>