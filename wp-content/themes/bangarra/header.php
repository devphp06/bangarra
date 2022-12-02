<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/pt-sans-narrow" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&display=swap" rel="stylesheet">
    <?php wp_head(); ?>   
</head>
<body class="<?php if(is_front_page()){echo 'home';}?>" >
</div>
    <div class="main-bang">
        <div class="header-main">
            <nav class="navbar navbar-expand-lg">
                <div class="container">                
                  <?php  
                    $logo_src ='';
                    if ( is_front_page() && get_theme_mod( 'light_logo_upload' ) ){ 
                      $logo_src = get_theme_mod( 'light_logo_upload' );
                    }else if ( has_custom_logo()){
                      $logo_img = get_theme_mod( 'custom_logo' );
                      $image_src = wp_get_attachment_image_src( $logo_img , 'full' );
                      $logo_src = $image_src[0];
                    }
                    if($logo_src == ''){
                      $logo_src = get_template_directory_uri().'/assets/images/logo.png';
                    } 
                    ?>
                    <a href="<?php echo site_url(); ?>" class="navbar-brand">
                      <img src="<?php echo $logo_src; ?>" class="img-fluid brand-logo" alt="logo">
                    </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <?php if ( has_nav_menu( 'primary_menu' ) ) : ?>
                           <?php
                              wp_nav_menu(
                                  array(
                                      'theme_location'  => 'primary_menu',
                                      'menu_class'      => 'menu-wrapper',
                                      'container_class' => 'collapse navbar-collapse',
                                      'container_id'    => 'navbarNavDropdown',
                                      'items_wrap'      => '<ul id="primary-menu-list" class="%2$s navbar-nav ms-auto">%3$s</ul>',
                                      'fallback_cb'     => false,
                                  )
                              );
                              ?>
                  <?php endif; ?>
                </div>
              </nav>
        </div>