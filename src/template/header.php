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
<style>
  h1,
  h4,
  html {
    font-family: Poppins, sans-serif
  }

  .nav {
    position: fixed;
    top: 0;
    z-index: 999;
    width: 100%
  }

  .nav__link {
    margin-left: 35px;
    position: relative;
    color: #fff !important;
    min-height: unset !important;
    padding: 0 !important
  }

  .nav__link:before {
    content: "";
    background: #068daf !important;
    height: 2px;
    width: 0;
    position: absolute;
    left: 0;
    bottom: 0;
    top: unset
  }

  .nav_type-top {
    background-color: #12679b !important;
    color: #fff !important;
    padding: 10px 0
  }

  .nav_type-top a {
    color: inherit;
    font-size: 32px
  }

  .navbar_type-dropdown {
    background-color: #092e44 !important;
    margin-top: 0 !important;
    border-top: 1px solid #12679b !important
  }

  .section_type-hero {
    color: #fff;
    height: 100vh
  }

  .section_type-hero .section-hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    display: block;
    right: 0;
    bottom: 0;
    background: #05385a;
    z-index: 0;
    opacity: .9
  }

  .section_type-hero * {
    color: #fff
  }

  .section_type-hero h1 {
    font-size: 22px
  }

  .section_type-ctav2 .content {
    color: #fff
  }

  .section_type-ctav2 .button {
    background-color: #f2a700;
    color: #fff
  }

  .section_type-ctav2 .button,
  .section_type-ctav2 .callback {
    display: inline-block;
    padding: 10px 20px;
    font-weight: 700;
    border-radius: 5px;
    -webkit-box-shadow: 0 10px 30px -5px #000;
    box-shadow: 0 10px 30px -5px #000
  }

  .section_type-ctav2 .callback {
    background-color: #fff;
    color: #002e5b;
    margin-left: 10px
  }

  .button_type-hero {
    background-color: #12679b;
    color: #fff;
    border-radius: 5px;
    padding: 10px 20px;
    -webkit-box-shadow: 0 22px 20px -10px #000;
    box-shadow: 0 22px 20px -10px #000;
    display: inline-block;
    font-size: 32px
  }

  @-webkit-keyframes bounce {
    0% {
      -webkit-transform: translateY(-5px);
      transform: translateY(-5px)
    }

    50% {
      -webkit-transform: translateY(10px);
      transform: translateY(10px)
    }

    to {
      -webkit-transform: translateY(-5px);
      transform: translateY(-5px)
    }
  }

  @keyframes bounce {
    0% {
      -webkit-transform: translateY(-5px);
      transform: translateY(-5px)
    }

    50% {
      -webkit-transform: translateY(10px);
      transform: translateY(10px)
    }

    to {
      -webkit-transform: translateY(-5px);
      transform: translateY(-5px)
    }
  }

  .xsx {
    background-color: #092e44 !important;
    padding: 10px;
    top: 52px !important
  }

  .xsx a {
    position: relative;
    color: #fff !important;
    min-height: unset !important;
    padding: 5px 0 !important;
    display: inline-block !important
  }

  .xsx a:before {
    content: "";
    background: #068daf !important;
    height: 2px;
    width: 0;
    position: absolute;
    left: 0;
    top: unset;
    bottom: 0
  }

  .scroll_button {
    display: inline-block;
    z-index: 9;
    -webkit-animation: bounce 2s infinite;
    animation: bounce 2s infinite;
    bottom: 25px;
    position: absolute;
    width: 100%
  }

  body {
    overflow: overlay
  }

  html {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 16px;
    font-weight: 400;
    line-height: 1.5;
    -webkit-text-size-adjust: 100%;
    background: #fff;
    color: #666
  }

  body {
    margin: 0
  }

  a {
    color: #1e87f0;
    text-decoration: none
  }

  img,
  svg {
    vertical-align: middle
  }

  img {
    max-width: 100%;
    height: auto;
    box-sizing: border-box
  }

  @supports (display:block) {
    svg {
      max-width: 100%;
      height: auto;
      box-sizing: border-box
    }
  }

  svg:not(:root) {
    overflow: hidden
  }

  p,
  ul {
    margin: 0 0 20px 0
  }

  *+p,
  *+ul {
    margin-top: 20px
  }

  h1,
  h4 {
    margin: 0 0 20px 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-weight: 400;
    color: #333;
    text-transform: none
  }

  h1 {
    font-size: 2.23125rem;
    line-height: 1.2
  }

  h4 {
    font-size: 1.25rem;
    line-height: 1.4
  }

  ul {
    padding-left: 30px
  }

  ul>li>ul {
    margin: 0
  }

  :root {
    --uk-breakpoint-s: 640px;
    --uk-breakpoint-m: 960px;
    --uk-breakpoint-l: 1200px;
    --uk-breakpoint-xl: 1600px
  }

  .uk-container {
    box-sizing: content-box;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding-left: 15px;
    padding-right: 15px
  }

  .uk-container::after,
  .uk-container::before {
    content: "";
    display: table
  }

  .uk-container::after {
    clear: both
  }

  .uk-container>:last-child {
    margin-bottom: 0
  }

  .uk-grid {
    display: flex;
    flex-wrap: wrap;
    margin: 0;
    padding: 0;
    list-style: none
  }

  .uk-grid>* {
    margin: 0
  }

  .uk-grid>*>:last-child {
    margin-bottom: 0
  }

  .uk-grid {
    margin-left: -30px
  }

  .uk-grid>* {
    padding-left: 30px
  }

  .uk-nav,
  .uk-nav ul {
    margin: 0;
    padding: 0;
    list-style: none
  }

  .uk-nav li>a {
    display: block;
    text-decoration: none
  }

  .uk-nav>li>a {
    padding: 5px 0
  }

  ul.uk-nav-sub {
    padding: 5px 0 5px 15px
  }

  .uk-nav-sub a {
    padding: 2px 0
  }

  .uk-navbar-nav {
    display: flex;
    margin: 0;
    padding: 0;
    list-style: none
  }

  .uk-navbar-nav>li>a {
    display: flex;
    justify-content: center;
    align-items: center;
    box-sizing: border-box;
    min-height: 80px;
    padding: 0 15px;
    font-size: .875rem;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    text-decoration: none
  }

  .uk-navbar-nav>li>a {
    color: #999;
    text-transform: uppercase
  }

  .uk-navbar-dropdown {
    display: none;
    position: absolute;
    z-index: 1020;
    box-sizing: border-box;
    width: 200px;
    padding: 25px;
    background: #fff;
    color: #666;
    box-shadow: 0 5px 12px rgba(0, 0, 0, .15)
  }

  .uk-navbar-dropdown-nav {
    font-size: .875rem
  }

  .uk-navbar-dropdown-nav>li>a {
    color: #999
  }

  .uk-offcanvas-bar {
    position: absolute;
    top: 0;
    bottom: 0;
    left: -270px;
    box-sizing: border-box;
    width: 270px;
    padding: 20px 20px;
    background: #222;
    overflow-y: auto;
    -webkit-overflow-scrolling: touch
  }

  .uk-offcanvas-close {
    position: absolute;
    z-index: 1000;
    top: 20px;
    right: 20px;
    padding: 5px
  }

  :root {
    --uk-leader-fill-content: .
  }

  .uk-iconnav {
    display: flex;
    flex-wrap: wrap;
    margin: 0;
    padding: 0;
    list-style: none;
    margin-left: -10px
  }

  .uk-iconnav>* {
    padding-left: 10px
  }

  .uk-iconnav>*>a {
    display: block;
    color: #999
  }

  [class*=uk-width] {
    box-sizing: border-box;
    width: 100%;
    max-width: 100%
  }

  .uk-width-medium {
    width: 300px
  }

  .uk-text-center {
    text-align: center !important
  }

  .uk-flex {
    display: flex
  }

  .uk-flex::after,
  .uk-flex::before {
    display: none
  }

  .uk-flex-center {
    justify-content: center
  }

  .uk-flex-middle {
    align-items: center
  }

  .uk-margin-bottom {
    margin-bottom: 20px !important
  }

  .uk-position-relative {
    position: relative !important
  }

  @media (max-width:959px) {
    .uk-visible\@m {
      display: none !important
    }
  }

  .uk-offcanvas-bar {
    color: rgba(255, 255, 255, .7)
  }

  .uk-offcanvas-bar a {
    color: #fff
  }
</style>
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