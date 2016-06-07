<?php 
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    
    
    register_sidebar( array(
        'name'      => ('First Widget'),
        'id'        => 'footer-one',
        'description' => 'Widget for our sidebar on pages', 
        'before_widget' => '<div class="widget-sidebar">', 
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'                        
        ));
    /*--First Footer Widget--*/
    register_sidebar( array(
        'name'      => ('First Footer Widget'),
        'id'        => 'footer-widget-one',
        'description' => 'Left widget in the footer',
        'before_widget' => '<div class="widget-footer widget-left">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
    /*--Second Footer Widget--*/
     register_sidebar( array(
        'name'      => ('Second Footer Widget'),
        'id'        => 'footer-widget-two',
        'description' => 'Middle widget in the footer',
        'before_widget' => '<div class="widget-footer widget-middle">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        ));
    /*--Third Footer Widget--*/
   register_sidebar( array(
        'name'       => ('Third Footer Widget'),
        'id'        => 'footer-widget-three',
        'description' => 'Right widget in the footer',
        'before_widget' => '<div class="widget-footer widget-right">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'                        
        )); 

}

add_action('widgets_init', 'blank_widgets_init');


add_theme_support('menus')
    
/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );     
    
    
?>



