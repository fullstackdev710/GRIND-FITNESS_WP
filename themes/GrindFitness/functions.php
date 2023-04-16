<?php
/*This file is part of GRINDFITNESS, Divi child theme.

All functions of this file will be loaded before of parent theme functions.
Learn more at https://codex.wordpress.org/Child_Themes.

Note: this function loads the parent stylesheet before, then child theme stylesheet
(leave it in place unless you know what you are doing.)
*/

if (!function_exists('suffice_child_enqueue_child_styles')) {
   function GRINDFITNESS_enqueue_child_styles()
   {
      // loading child style
      wp_register_style(
         'main-style',
         get_stylesheet_directory_uri() . '/style.css'
      );
      wp_enqueue_style('main-style');
   }
}

function GRINDFITNESS_enqueue_child_scripts()
{
   wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/js/main-script.js');
}

add_action('wp_enqueue_scripts', 'GRINDFITNESS_enqueue_child_scripts');
