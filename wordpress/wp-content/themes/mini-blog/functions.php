<?php
  //wp_enqueue_style('style',get_stylesheet_uri());
  // wp_enqueue_script();
function mini_blog_setup(){
  add_theme_support('post-thumbnails');
  add_theme_support('');
}

function mini_blog_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Widget area', 'mini-blog' ),
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h1 class="widget-title">',
        'after_title'   => '</h1>',
    ) );

}
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu','mini-blog') //fait la correspondance entre la localisation du menu et un nom plus user-friendly pour l'admin
     )
   );
 }

 function create_post_type() {
     register_post_type( 'chaussures',
         array(
             'labels' => array(
                 'name' => __( 'Chaussures' ),
                 'singular_name' => __( 'Chaussure' ),
             ),
         'public' => true,
         'has_archive' => true,
         'supports'  => array( 'title', 'editor', 'author', 'thumbnail' )
         )
     );
 }

add_action( 'init', 'create_post_type' );
add_action( 'init', 'register_my_menus' );
add_action('after_setup_theme','mini_blog_setup');
add_action( 'widgets_init', 'mini_blog_widgets_init' );
