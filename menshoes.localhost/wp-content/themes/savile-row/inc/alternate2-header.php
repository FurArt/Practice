<?php   // Show header image if exists
  if(get_header_image()){
    echo '<header id="masthead" class="site-header alternate2 header-background-image" style="background-image:url(' . get_header_image() . '); background-color:' . esc_attr(get_theme_mod('header_background_color')) . ';">';
  }else{
    echo '<header id="masthead" class="site-header alternate2" style="background-color:' . esc_attr(get_theme_mod('header_background_color')) . ';">';
  }
?>

<?php if(! get_theme_mod( 'savilerow_hide_top_nav' ) ): ?>
<div class="container-fluid sm-top">
  <div class="row">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <?php

            $navSetup = array(
              'theme_location' 		=> 'secondary',
              'container_class' 	=> 'top-nav',
            );

            if ( has_nav_menu( 'secondary' ) ) {
              wp_nav_menu( $navSetup );
            }

          ?>
        </div>
        <div class="col-sm-6">
          <?php get_template_part( 'inc/socmed' ); ?>
        </div>
      </div>
    </div>
    <div class="search-container">
      <div class="container">
        <?php get_search_form( true ); ?>
      </div>
    </div>
  </div>
</div>
<?php endif; ?>

  <div class="container siteTitle-nav">
      <div class="col-md-4 title-block">

        <?php if ( get_theme_mod( 'savilerow_logo' ) ) : ?>

          <div class="site-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo esc_url( get_theme_mod( 'savilerow_logo' ) ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"></a>
          </div>

        <?php else : ?>

          <div class="site-introduction">
            <h1 class="site-title"><a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
          </div>

        <?php endif; ?>

      </div>

      <div class="col-sm-12 col-md-8 nav-wrap">

        <nav class="site-navigation main-navigation <?php if(get_header_image()): ?>hasHeaderImg<?php endif; ?>">
          <span class="assistive-text nav-toggle"><a href="#" title="<?php _e('Navigation Toggle', 'savile-row'); ?>"><?php _e( 'Menu', 'savile-row' ); ?></a></span>

          <div class="assistive-text skip-link">
            <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'savile-row' ); ?>"><?php _e( 'Skip to content', 'savile-row' ); ?></a>
          </div>

          <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

        </nav>

      </div>
  </div>


</header>
