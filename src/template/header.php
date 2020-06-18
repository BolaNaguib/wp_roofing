<!DOCTYPE html>
<html>

<!-- START head -->

<head>
  <title> <?php the_field('meta_title'); ?> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
        <li><a href="tel:<?php echo $phone; ?>"> <svg width="15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16" style="
    /* width: 15px; */
">
              <path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path>
            </svg> <?php echo $phone_display; ?> </a></li>
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
              <div class="navbar_type-dropdown" style="display:none;" uk-dropdown="mode: click;pos: bottom-justify; boundary: .boundary-align; boundary-align: true">
                <ul class="uk-nav uk-nav-parent-icon">
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