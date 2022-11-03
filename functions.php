<?php 

  // Register WP Nav
  function register_my_menus() {
      register_nav_menus(
        array(
          'main-menu' => __( 'Main Menu' ),
        )
      );
  }
  add_action( 'init', 'register_my_menus' );


  add_action( 'wp_enqueue_scripts', 'enqueue_vue' );

  function enqueue_vue() {
    if( WP_DEBUG ) {
      wp_register_script( 'vue', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.js', [], '', true );
    } else {
      wp_register_script( 'vue', 'https://cdn.jsdelivr.net/npm/vue/dist/vue.min.js', [], '', true );
    }

    // your app code
    wp_register_script( 'my-app', get_stylesheet_directory_uri()
  . '/js/app.js', [], '', true );
  }



?>