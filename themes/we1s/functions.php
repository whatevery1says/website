<?php
/* Add WE1S styles */
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/* Remove Sydney main script and replace it with WE1S main script */
function sydney_child_dequeue_script() {
    wp_dequeue_script('sydney-main');
 }
add_action( 'wp_print_scripts', 'sydney_child_dequeue_script', 100 );
add_action('wp_enqueue_scripts', 'main_js');
function main_js() {
    wp_enqueue_script( 'main_js', get_stylesheet_directory_uri() . '/js/main.min.js', array('jquery'),'20170504', true );
}

/* Add extra WE1S scripts */
add_action('wp_enqueue_scripts', 'we1s_js');
function we1s_js() {
    wp_enqueue_script( 'we1s_js', get_stylesheet_directory_uri() . '/js/click-event-modifier.js', array('jquery'),'20170504', true );
}

/* Add a search form to menu navigation */
/* To use the default Wordpress search form, rename 
   searchform.php and change the css class below to 
   top-search-menu. */
// add_filter('wp_nav_menu_items', 'sydney_child_add_search_form_to_nav', 10, 2);
// function sydney_child_add_search_form_to_nav($items, $args){
//   if ($args->theme_location == 'primary') {
//       $items .= '<li class="custom-search-input">'.get_search_form(false).'</li>';
//   }
//   return $items;
// }
?>