<!DOCTYPE html>
<html>

<!-- START head -->

<head>
  <title> <?php the_field('meta_title'); ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <meta name="title" content=" <?php the_field('meta_title'); ?> " />
  <meta name="keywords" content=" <?php the_field('meta_keywords'); ?> " />
  <meta name="description" content=" <?php the_field('meta_description'); ?> " />
  <link rel="shortcut icon" type="image/x-icon" href="<?php the_field('favicon', 'option') ?>" />
  <?php the_field('header_js_general', 'option');
  the_field('header_js');
  wp_head();

  $post_id =  get_the_ID();
  $city = get_field('city', $post_id);
  // ACF Fields 
  $phone_display_option = get_field('phone_display', 'option');
  $phone_display_single = get_field('phone_display', $post_id);
  $phone_display = $phone_display_single ? $phone_display_single : $phone_display_option;

  $phone_option = get_field('phone', 'option');
  $phone_single = get_field('phone', $post_id);
  $phone = $phone_single ? $phone_single : $phone_option;

  $logo = get_field('logo', 'option'); ?>


</head>
<!-- END head -->
<!-- START body -->
<nav class="nav">
  <!-- START navbar_type-top -->
  <div class='nav_type-top'>
    <!-- START uk-container -->
    <div class='uk-container uk-flex uk-flex-right@m uk-flex-center'>
      <ul class="uk-iconnav">
        <li><a href="tel:<?php echo $phone; ?>"> <i class="fas fa-mobile-alt"></i> <?php echo $phone_display; ?> </a></li>
      </ul>
    </div>
    <!-- END uk-container -->
  </div>
  <!-- END navbar_type-top -->

  <!-- START nav_type-main -->
  <div class='nav_type-main boundary-align'>
    <!-- START uk-container -->
    <div class='uk-container'>
      <div class="uk-navbar" uk-navbar>
        <div class="uk-navbar-left">
          <a href="/">
            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>">
          </a>

        </div>

        <div class="uk-navbar-right">

          <ul class="uk-navbar-nav uk-visible@m">
            <?php if (have_rows('menu', 'option')) : ?>
              <?php while (have_rows('menu', 'option')) : the_row(); ?>
                <?php if (get_row_layout() == 'pages') : ?>
                  <li><a class="nav__link" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a>
                    <?php if (have_rows('sub_menu')) : ?>

                      <div class="uk-navbar-dropdown xsx  uk-width-medium ">
                        <ul class="uk-nav uk-navbar-dropdown-nav">
                          <?php while (have_rows('sub_menu')) : the_row(); ?>
                            <?php // ACF FIELDS 
                            $page_link = get_sub_field('page_link');
                            $title = get_sub_field('title');
                            ?>
                            <li><a href="<?php echo $page_link; ?>"><?php echo $title; ?></a></li>
                          <?php endwhile; ?>
                        </ul>
                      </div>
                    <?php endif; ?>
                  </li>
                <?php elseif (get_row_layout() == 'links') : ?>
                  <li><a class="nav__link" href="<?php the_sub_field('link'); ?>" uk-scroll="offset: 50"><?php the_sub_field('text'); ?></a></li>
                <?php endif; ?>
              <?php endwhile; ?>
            <?php endif; ?>

          </ul>

          <ul class="uk-navbar-nav uk-inline  uk-hidden@m">
            <li>

              <button class="button_type_toggle" type="button">
                <span class="" uk-navbar-toggle-icon></span></button>
              <!-- <div uk-dropdown="mode: click">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div> -->
              <div class="navbar_type-dropdown" uk-dropdown="mode: click;pos: bottom-justify; boundary: .boundary-align; boundary-align: true">
                <ul class="uk-nav ">
                  <?php if (have_rows('menu', 'option')) : ?>
                    <?php while (have_rows('menu', 'option')) : the_row(); ?>
                      <?php if (get_row_layout() == 'pages') :
                        $page_link = get_sub_field('page_link');
                        $title = get_sub_field('title');
                         ?>
                        <li><a class="<?php if (have_rows('sub_menu')) : ?>uk-parent <?php endif; ?> nav__link uk-margin-bottom" href="<?php echo $page_link; ?>"><?php echo $title; ?></a>
                          <?php if (have_rows('sub_menu')) : ?>
                            <ul class="uk-nav-sub">
                              <?php while (have_rows('sub_menu')) : the_row(); ?>
                                <?php // ACF FIELDS 
                                $page_link = get_sub_field('page_link');
                                $title = get_sub_field('title');
                                ?>
                                <li><a class=" nav__link uk-margin-bottom" href="<?php echo $page_link; ?>"><?php echo $title; ?></a></li>
                              <?php endwhile; ?>
                            </ul>
                          <?php endif; ?>

                        </li>
                      <?php elseif (get_row_layout() == 'links') : ?>
                        <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></li>
                      <?php endif; ?>
                    <?php endwhile; ?>
                  <?php endif; ?>

                </ul>
              </div>
        </div>

        </li>
        </ul>
      </div>
    </div>
  </div> <!-- END uk-container -->
  </div>
  <!-- END nav_type-main -->
</nav>

<!-- Off Canvas -->


<div id="offcanvas-overlay" uk-offcanvas="overlay: true">
  <div class="uk-offcanvas-bar section_theme_white">

    <button class="uk-offcanvas-close" type="button" uk-close></button>
    <br>
    <br>
    <br>
    <ul class="uk-nav ">
      <?php if (have_rows('menu', 'option')) : ?>
        <?php while (have_rows('menu', 'option')) : the_row(); ?>
          <?php if (get_row_layout() == 'pages') : ?>
            <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a></li>
          <?php elseif (get_row_layout() == 'links') : ?>
            <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></li>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>

    </ul>



  </div>
</div>

<body>