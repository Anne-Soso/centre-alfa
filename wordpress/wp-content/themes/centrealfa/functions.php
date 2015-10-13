<?php
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu','centrealfa') //fait la correspondance entre la localisation du menu et un nom plus user-friendly pour l'admin
     )
   );
 }

 function my_general_settings_register_fields()
 {
     register_setting('general', 'phone_contact', 'esc_attr');
     add_settings_field('phone_contact', '<label for="phone_contact">'.__('Numéro de Téléphone' , 'phone_contact' ).'</label>' , 'my_general_settings_fields_html', 'general');

     register_setting('general', 'adresse', 'esc_attr');
     add_settings_field('adresse', '<label for="adresse">'.__('Adresse du Centre' , 'adresse' ).'</label>' , 'adresse_field_html', 'general');
 }

 function my_general_settings_fields_html()
 {
     $value = get_option( 'phone_contact', '' );
     echo '<input type="text" id="phone_contact" class="regular-text" name="phone_contact" value="' . $value . '" />';
  }

 function adresse_field_html(){
    $value = get_option( 'adresse', '' );
    echo '<input type="text" id="adresse" class="regular-text" name="adresse" value="' . $value . '" />';
  }

 function create_post_types() {
  register_post_type( 'news',
      array(
          'labels' => array(
              'name' => __( 'Actualités' ),
              'singular_name' => __( 'Actualité' ),
              'add_new_item' => __('Ajouter une actualité')
          ),
      'public' => true,
      'has_archive' => true,
      'supports'  => array( 'title', 'editor' )
      )
   );
   register_post_type( 'equipes',
       array(
           'labels' => array(
               'name' => __( 'Équipe' ),
               'singular_name' => __( 'Membre' ),
               'add_new_item' => __('Ajouter un nouveau membre')
           ),
       'public' => true,
       'has_archive' => false,
       'supports'  => array( 'title')
       )
    );
  }
 add_action( 'init', 'create_post_types' );
 add_action( 'init', 'register_my_menus' );
 add_filter('admin_init', 'my_general_settings_register_fields');
