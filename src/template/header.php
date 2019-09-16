<!DOCTYPE html>
<html>

<!-- START head -->

<head>
  <title> <?php the_title(); ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,700" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="canonical" href="<?php the_permalink(); ?>" />
  <?php wp_head(); ?>
</head>
<!-- END head -->
<!-- START body -->

<body>
  <!-- START nav -->
  <!-- <nav>
    <div class="uk-navbar-sticky" uk-sticky="animation: uk-animation-slide-bottom; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-position-absolute uk-light; top: 200">

    <nav class="uk-navbar  uk-margin">

        <div class="uk-navbar-left">
            <a class="uk-navbar-toggle" href="#">xvxLabs</a>
        </div>
        <div class="uk-navbar-right uk-text-right">
            <ul class="uk-navbar-nav">
              <li> <a href="#"> Home </a> </li>
              <li> <a href="#"> Home </a> </li>
              <li> <a href="#"> Home </a> </li>
              <li> <a href="#"> Home </a> </li>
            </ul>
          </div>

    </nav>
  </div>

  </nav> -->

<header class="  " style="position:absolute; width:100%;" >
  <div class="uk-container uk-container-large">
    <nav class="uk-navbar  uk-padding uk-padding-remove-horizontal" uk-navbar>
        <div class="uk-navbar-left">

        <a class="uk-logo" style="color:#fff;" href="/"> xvxLabs </a>

        </div>
        <div class="uk-navbar-right">

            <?php wp_nav_menu([
                     'theme_location'  => '',
                       'menu'            => '',
                       'container'       => '',
                       'container_class' => '',
                       'container_id'    => '',
                       'menu_class'      => '',
                       'menu_id'         => '',
                       'echo'            => true,
                       'fallback_cb'     => '',
                       'before'          => '',
                       'after'           => '',
                       'link_before'     => '',
                       'link_after'      => '',
                       'items_wrap'      => '<ul id="%1$s" class="%2$s uk-navbar-nav">%3$s</ul>',
                       'depth'           => 0,
                       'walker'          => new Bootstrap_Walker_Menu_Nav(),

                     ]); ?>




            <ul class="uk-navbar-nav uk-inline">
            <li><a  href="#offcanvas-overlay" class=" button_type_toggle  uk-hidden@m" uk-toggle="target: #offcanvas-overlay">
                <span class="" uk-navbar-toggle-icon>

                </span>
              </a></li></ul>

        </div>
    </nav>
  <!-- END nav -->
  <div id="offcanvas-overlay" uk-offcanvas="overlay: true">
      <div class="uk-offcanvas-bar section_theme_white">

          <button class="uk-offcanvas-close" type="button" uk-close></button>


          <?php wp_nav_menu([
                   'theme_location'  => '',
                     'menu'            => '',
                     'container'       => '',
                     'container_class' => '',
                     'container_id'    => '',
                     'menu_class'      => '',
                     'menu_id'         => '',
                     'echo'            => true,
                     'fallback_cb'     => '',
                     'before'          => '',
                     'after'           => '',
                     'link_before'     => '',
                     'link_after'      => '',
                     'items_wrap'      => '<ul id="%1$s" class="%2$s uk-nav-parent-icon" uk-nav>%3$s</ul>',
                     'depth'           => 0,
                     'walker'          => new Bootstrap_Walker_Menu_Mobile(),

                   ]); ?>
      </div>
  </div>
  </div>
</header>
