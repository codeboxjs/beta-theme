<?php
function beta_theme_setup() {
   // Add support for post thumbnails
   add_theme_support('post-thumbnails');

   // Register a custom navigation menu
   register_nav_menus(array(
      'primary' => __('Primary Menu', 'beta-theme'),
   ));
}

add_action('after_setup_theme', 'beta_theme_setup');
