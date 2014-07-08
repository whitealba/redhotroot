<header class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header page-scroll">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="#" class="navbar-brand scroll-top"></a>

        <?php if ( function_exists( 'ot_get_option' ) ) {
                        $logo_upload = ot_get_option( 'logo_upload' );
                        echo "<img class=\"img-responsive navbar-brand-logo\" src=\"" . $logo_upload. "\" target=\"_blank\">";
                        } else {
                            echo "<a class=\"navbar-brand\">";
                bloginfo('name');
                echo "</a>";
                        } ?>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
     <ul class="nav navbar-nav navbar-right">
                    <li class="page-scroll"> 
      <?php
        if (has_nav_menu('primary_navigation')) :
          wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav'));
        endif;
      ?>
      </li>
                </ul>
    </nav>
  </div>
</header>
