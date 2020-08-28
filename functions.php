<?php
add_action('after_setup_theme', function(){
  register_nav_menus( array(
    'main_menu' => 'Главное меню',
    'foot_menu' => 'Меню в футере',  
  ) );
});
