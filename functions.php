


<?php
  function basic_bootstrapping(){
    load_theme_textdomain("basic-blog");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
  }

  add_action("after_setup_theme","basic_bootstrapping");


  function basic_assets(){
      wp_enqueue_style( "style", get_stylesheet_uri() );
  }

     add_action( "wp_enqueue_scripts", "basic_assets");
