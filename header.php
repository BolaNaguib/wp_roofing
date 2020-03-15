<!DOCTYPE html><html><!-- START head --><head><title> <?php the_field('meta_title'); ?> </title><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1"><!-- UIkit CSS --><style>/* Critical Path CSS Generated by Pegasaas Accelerator at https://pegasaas.com/critical-path-css-generator/ for https://roofmasters.us/boca-raton/ */
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
      -webkit-text-decoration-skip: objects
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
    h2,
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

    h2 {
      font-size: 1.7rem;
      line-height: 1.3
    }

    h4 {
      font-size: 1.25rem;
      line-height: 1.4
    }

    @media (min-width:960px) {
      h1 {
        font-size: 2.625rem
      }

      h2 {
        font-size: 2rem
      }
    }

    ul {
      padding-left: 30px
    }

    :root {
      --uk-breakpoint-s: 640px;
      --uk-breakpoint-m: 960px;
      --uk-breakpoint-l: 1200px;
      --uk-breakpoint-xl: 1600px
    }

    .uk-icon {
      margin: 0;
      border: none;
      border-radius: 0;
      overflow: visible;
      font: inherit;
      color: inherit;
      text-transform: none;
      padding: 0;
      background-color: transparent;
      display: inline-block;
      fill: currentcolor;
      line-height: 0
    }

    .uk-icon::-moz-focus-inner {
      border: 0;
      padding: 0
    }

    .uk-icon:not(.uk-preserve) [stroke*='#']:not(.uk-preserve) {
      stroke: currentcolor
    }

    .uk-icon>* {
      transform: translate(0, 0)
    }

    .uk-container {
      box-sizing: content-box;
      max-width: 1200px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 15px;
      padding-right: 15px
    }

    @media (min-width:640px) {
      .uk-container {
        padding-left: 30px;
        padding-right: 30px
      }
    }

    @media (min-width:960px) {
      .uk-container {
        padding-left: 40px;
        padding-right: 40px
      }
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

    *+.uk-grid-margin,
    .uk-grid>.uk-grid-margin {
      margin-top: 30px
    }

    @media (min-width:1200px) {
      .uk-grid {
        margin-left: -40px
      }

      .uk-grid>* {
        padding-left: 40px
      }

      *+.uk-grid-margin,
      .uk-grid>.uk-grid-margin {
        margin-top: 40px
      }
    }

    .uk-grid-small {
      margin-left: -15px
    }

    .uk-grid-small>* {
      padding-left: 15px
    }

    .uk-grid-small>.uk-grid-margin {
      margin-top: 15px
    }

    .uk-close {
      color: #999
    }

    .uk-nav {
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

    .uk-navbar {
      display: flex;
      position: relative
    }

    .uk-navbar-left,
    .uk-navbar-right {
      display: flex;
      align-items: center
    }

    .uk-navbar-right {
      margin-left: auto
    }

    .uk-navbar-nav {
      display: flex;
      margin: 0;
      padding: 0;
      list-style: none
    }

    .uk-navbar-left,
    .uk-navbar-right {
      flex-wrap: wrap
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

    .uk-slidenav {
      padding: 5px 10px;
      color: rgba(102, 102, 102, .5)
    }

    .uk-dotnav {
      display: flex;
      flex-wrap: wrap;
      margin: 0;
      padding: 0;
      list-style: none;
      margin-left: -12px
    }

    .uk-dotnav>* {
      flex: none;
      padding-left: 12px
    }

    .uk-dotnav>*>* {
      display: block;
      box-sizing: border-box;
      width: 10px;
      height: 10px;
      border-radius: 50%;
      background: 0 0;
      text-indent: 100%;
      overflow: hidden;
      white-space: nowrap;
      border: 1px solid rgba(102, 102, 102, .4)
    }

    .uk-dotnav>.uk-active>* {
      background-color: rgba(102, 102, 102, .6);
      border-color: transparent
    }

    .uk-offcanvas {
      display: none;
      position: fixed;
      top: 0;
      bottom: 0;
      left: 0;
      z-index: 1000
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

    @media (min-width:960px) {
      .uk-offcanvas-bar {
        left: -350px;
        width: 350px;
        padding: 40px 40px
      }
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

    [class*=uk-child-width]>* {
      box-sizing: border-box;
      width: 100%
    }

    @media (min-width:640px) {
      .uk-child-width-expand\@s>:not([class*=uk-width]) {
        flex: 1;
        min-width: 1px
      }
    }

    [class*=uk-width] {
      box-sizing: border-box;
      width: 100%;
      max-width: 100%
    }

    .uk-width-1-2 {
      width: 50%
    }

    @media (min-width:960px) {
      .uk-width-1-2\@m {
        width: 50%
      }

      .uk-width-auto\@m {
        width: auto
      }

      .uk-width-expand\@m {
        flex: 1;
        min-width: 1px
      }
    }

    .uk-text-center {
      text-align: center !important
    }

    [class*=uk-inline] {
      display: inline-block;
      position: relative;
      max-width: 100%;
      vertical-align: middle;
      -webkit-backface-visibility: hidden
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

    @media (min-width:960px) {
      .uk-flex-right\@m {
        justify-content: flex-end
      }
    }

    .uk-flex-middle {
      align-items: center
    }

    .uk-flex-last {
      order: 99
    }

    @media (min-width:960px) {
      .uk-flex-first\@m {
        order: -1
      }
    }

    .uk-margin {
      margin-bottom: 20px
    }

    *+.uk-margin {
      margin-top: 20px !important
    }

    .uk-margin-bottom {
      margin-bottom: 20px !important
    }

    [class*=uk-position-center] {
      position: absolute !important
    }

    [class*=uk-position-center-left],
    [class*=uk-position-center-right] {
      top: 50%;
      transform: translateY(-50%)
    }

    .uk-position-center-left {
      left: 0
    }

    .uk-position-center-right {
      right: 0
    }

    .uk-position-relative {
      position: relative !important
    }

    .uk-position-small {
      max-width: calc(100% - (15px * 2));
      margin: 15px
    }

    .uk-position-small[class*=uk-position-center-left],
    .uk-position-small[class*=uk-position-center-right] {
      transform: translateY(-50%) translateY(-15px)
    }

    .uk-hidden {
      display: none !important
    }

    @media (min-width:960px) {
      .uk-hidden\@m {
        display: none !important
      }
    }

    @media (max-width:959px) {
      .uk-visible\@m {
        display: none !important
      }
    }

    .uk-invisible {
      visibility: hidden !important
    }

    .uk-offcanvas-bar {
      color: rgba(255, 255, 255, .7)
    }

    .uk-light a,
    .uk-offcanvas-bar a {
      color: #fff
    }

    .uk-offcanvas-bar .uk-close {
      color: rgba(255, 255, 255, .5)
    }

    .uk-light .uk-slidenav {
      color: rgba(255, 255, 255, .7)
    }

    h1,
    h2,
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
      background: #068daf;
      height: 2px;
      width: 0;
      position: absolute;
      left: 0;
      top: 0
    }

    .nav_type-top {
      background-color: #12679b;
      color: #fff;
      padding: 10px 0
    }

    .nav_type-top a {
      color: inherit;
      font-size: 32px
    }

    .nav_type-main {
      padding: 10px 0;
      background-color: #092e44
    }

    .section {
      padding: 75px 0;
      overflow: hidden
    }

    .section_type-hero {
      color: #fff;
      height: 84vh
    }

    .section_type-hero:before {
      content: "";
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
      font-size: 26px
    }

    .section_type-ctav2 {
      padding: 40px 0
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

    .section_theme-blue {
      background-color: #092e44;
      color: #fff
    }

    .card {
      padding: 20px
    }

    .card_theme-white {
      -webkit-box-shadow: 5px 8px 30px 0 rgba(31, 35, 37, .08);
      box-shadow: 5px 8px 30px 0 rgba(31, 35, 37, .08);
      background-color: #fff;
      color: #092e44
    }

    .card_theme-white .card__title span {
      color: #12679b
    }

    .card_type-contactform input {
      height: 20px
    }

    .card_type-contactform input {
      width: 100%;
      border-radius: 0;
      font-size: 13px;
      background: none;
      border: none;
      border-bottom: 2px solid #f5f5f5;
      -webkit-box-shadow: none;
      box-shadow: none
    }

    .card__title {
      position: relative;
      padding: 15px 0;
      color: inherit
    }

    .card__title:after {
      background: #eee;
      margin-left: 0
    }

    .card__title:after,
    .card__title:before {
      content: "";
      width: 50px;
      left: 0;
      height: 5px;
      position: absolute;
      bottom: 0
    }

    .card__title:before {
      background: #12679b;
      margin-left: 50px
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

    .img-border {
      position: relative
    }

    .img-border:before {
      border: 5px solid hsla(0, 0%, 100%, .2);
      bottom: 14px;
      content: "";
      left: 14px;
      position: absolute;
      right: 14px;
      top: 14px
    }

    .img-border img {
      width: 100%
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

    .xdx {
      background-color: #092e44
    }

    .uk-dotnav .uk-active a {
      background-color: #fff;
      border-color: #fff
    }

    .uk-dotnav a {
      background-color: #12679b;
      border-color: #12679b
    }

    .xsx {
      background-color: #092e44;
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
      background: #068daf;
      height: 2px;
      width: 0;
      position: absolute;
      left: 0;
      top: 0
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

    @media (min-width:960px) {
      .nav_type-top a {
        font-size: 16px
      }

      .section_type-hero h1 {
        font-size: 54px
      }
    }

    .fas {
      -moz-osx-font-smoothing: grayscale;
      -webkit-font-smoothing: antialiased;
      display: inline-block;
      font-style: normal;
      font-variant: normal;
      text-rendering: auto;
      line-height: 1
    }

    .fa-mobile-alt:before {
      content: "\f3cd"
    }

    @font-face {
      font-family: "Font Awesome 5 Free";
      font-style: normal;
      font-weight: 400;
      font-display: auto;
      src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.eot);
      src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.eot?#iefix) format("embedded-opentype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.woff2) format("woff2"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.woff) format("woff"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.ttf) format("truetype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-regular-400.svg#fontawesome) format("svg")
    }

    @font-face {
      font-family: "Font Awesome 5 Free";
      font-style: normal;
      font-weight: 900;
      font-display: auto;
      src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.eot);
      src: url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.eot?#iefix) format("embedded-opentype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.woff2) format("woff2"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.woff) format("woff"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.ttf) format("truetype"), url(https://use.fontawesome.com/releases/v5.8.1/webfonts/fa-solid-900.svg#fontawesome) format("svg")
    }

    .fas {
      font-family: "Font Awesome 5 Free"
    }

    .fas {
      font-weight: 900
    }

    div.wpcf7-response-output {
      margin: 2em 0.5em 1em;
      padding: 0.2em 1em;
      border: 2px solid #f00
    }

    .wpcf7-display-none {
      display: none
    }</style><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css"><link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet"><link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"><meta name="title" content=" <?php the_field('meta_title'); ?> "><meta name="keywords" content=" <?php the_field('meta_keywords'); ?> "><meta name="description" content=" <?php the_field('meta_description'); ?> "><link rel="shortcut icon" type="image/x-icon" href="<?php the_field('favicon', 'option') ?>"> <?php the_field('header_js_general', 'option');
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

  $logo = get_field('logo', 'option'); ?> </head><!-- END head --><!-- START body --><nav class="nav"><!-- START navbar_type-top --><div class="nav_type-top"><!-- START uk-container --><div class="uk-container uk-flex uk-flex-right@m uk-flex-center"><ul class="uk-iconnav"><li><a href="tel:<?php echo $phone; ?>"><i class="fas fa-mobile-alt"></i> <?php echo $phone_display; ?> </a></li></ul></div><!-- END uk-container --></div><!-- END navbar_type-top --><!-- START nav_type-main --><div class="nav_type-main"><!-- START uk-container --><div class="uk-container"><div class="uk-navbar" uk-navbar><div class="uk-navbar-left"><a href="/"><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" title="<?php echo $logo['title']; ?>"></a></div><div class="uk-navbar-right"><ul class="uk-navbar-nav uk-visible@m"> <?php if (have_rows('menu', 'option')) : ?> <?php while (have_rows('menu', 'option')) : the_row(); ?> <?php if (get_row_layout() == 'pages') : ?> <li><a class="nav__link" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a> <?php if (have_rows('sub_menu')) : ?> <div class="uk-navbar-dropdown xsx uk-width-medium"><ul class="uk-nav uk-navbar-dropdown-nav"> <?php while (have_rows('sub_menu')) : the_row(); ?> <?php // ACF FIELDS 
                            $page_link = get_sub_field('page_link');
                            $title = get_sub_field('title');
                            ?> <li><a href="<?php echo $page_link; ?>"><?php echo $title; ?></a></li> <?php endwhile; ?> </ul></div> <?php endif; ?> </li> <?php elseif (get_row_layout() == 'links') : ?> <li><a class="nav__link" href="<?php the_sub_field('link'); ?>" uk-scroll="offset: 50"><?php the_sub_field('text'); ?></a></li> <?php endif; ?> <?php endwhile; ?> <?php endif; ?> </ul><ul class="uk-navbar-nav uk-inline uk-hidden@m"><li><button class="button_type_toggle" type="button"><span class="" uk-navbar-toggle-icon></span></button><!-- <div uk-dropdown="mode: click">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</div> --><div class="navbar_type-dropdown" uk-dropdown="mode: click;pos: bottom-justify; boundary: .boundary-align; boundary-align: true"><ul class="uk-nav"> <?php if (have_rows('menu', 'option')) : ?> <?php while (have_rows('menu', 'option')) : the_row(); ?> <?php if (get_row_layout() == 'pages') : ?> <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a></li> <?php elseif (get_row_layout() == 'links') : ?> <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></li> <?php endif; ?> <?php endwhile; ?> <?php endif; ?> </ul></div></li></ul></div></div></div></div><!-- END uk-container --><!-- END nav_type-main --></nav><!-- Off Canvas --><div id="offcanvas-overlay" uk-offcanvas="overlay: true"><div class="uk-offcanvas-bar section_theme_white"><button class="uk-offcanvas-close" type="button" uk-close></button><br><br><br><ul class="uk-nav"> <?php if (have_rows('menu', 'option')) : ?> <?php while (have_rows('menu', 'option')) : the_row(); ?> <?php if (get_row_layout() == 'pages') : ?> <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a></li> <?php elseif (get_row_layout() == 'links') : ?> <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></li> <?php endif; ?> <?php endwhile; ?> <?php endif; ?> </ul></div></div><body></body></html>