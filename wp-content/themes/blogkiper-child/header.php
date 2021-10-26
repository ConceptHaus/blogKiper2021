<!doctype html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">       

        <!-- S T Y L E S - G E N E R A L -->
        <meta name="theme-color" content="#E53F28">
        <?php wp_head(); ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
        
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <script>
            var siteURL = '<?php echo esc_url(site_url('')); ?>';
        </script>
    </head>
    <body <?php body_class('is-preload'); ?>>

    <!-- Header -->
    <header id="headerGeneral" class="g-header" data-blur-content>
      <div class="container">
        <div class="row align-items-center">
          <div class="d-none d-md-block col-md-4">
            <div class="socialCt">
              <ul class="socialCt__list">
                <li class="socialCt__item"><a href="#" class="socialCt__link" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li class="socialCt__item"><a href="#" class="socialCt__link" target="_blank"><i class="fa fa-instagram"></i></a></li>
              </ul><!-- end.socialCt__list -->
            </div><!-- end.socialCt -->
          </div><!-- end.col-* -->
          <div class="col-4 col-md-4">
            <div class="brand">
              <a href="/">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/kiper.svg" alt="Kiper">
                <h1 class="site-title">Kiper</h1>
              </a>
            </div><!-- end.brand -->
          </div><!-- end.col-* -->
          <div class="col-8 col-md-4">
            <div class="boxSearch">
              <form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
                <label>
                  <span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
                  <input type="search" class="search-field"
                    placeholder="<?php echo esc_attr_x( 'Buscar', 'placeholder' ) ?>"
                    value="<?php echo get_search_query() ?>" name="s"
                    autocomplete="off"
                    title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>">
                    <div class="iconSearch">
                      <i class="fa fa-search"></i>
                    </div>
                </label>
                <input type="submit" class="search-submit"
                    value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">
              </form>
            </div>
          </div>
        </div><!-- end.row -->
      </div><!-- end.container -->
    </header>
    
    <!-- Main -->
    <main data-blur-content>
      <div id="primary" class="content-area">