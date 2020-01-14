<!DOCTYPE html>
<html>

<!-- START head -->

<head>
  <title> </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/css/uikit.min.css" />
  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet"> -->

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
  <meta name="title" content=" <?php the_field('meta_title'); ?> " />
  <meta name="keywords" content=" <?php the_field('meta_keywords'); ?> " />
  <meta name="description" content=" <?php the_field('meta_description'); ?> " />
  <link rel="shortcut icon" type="image/x-icon" href="<?php the_field('favicon','option') ?>" />
  <?php the_field('header_js_general', 'option'); 
        the_field('header_js'); 
        wp_head(); 
        $phone_display =  get_field('phone_display', 'option'); 
        $phone =  get_field('phone', 'option'); 
        $logo = get_field( 'logo', 'option' ); ?>
</head>
<!-- END head -->
<!-- START body -->
<nav class="nav">
  <!-- START navbar_type-top -->
  <div class='nav_type-top'>
    <!-- START uk-container -->
    <div class='uk-container uk-flex uk-flex-right'>
      <ul class="uk-iconnav">
        <li><a href="tel:<?php echo $phone ;?>"> <i class="fas fa-mobile-alt"></i> <?php echo $phone_display ;?> </a></li>
      </ul>
    </div>
    <!-- END uk-container -->
  </div>
  <!-- END navbar_type-top -->

  <!-- START nav_type-main -->
  <div class='nav_type-main'>
    <!-- START uk-container -->
    <div class='uk-container'>
      <div class="uk-navbar"  uk-navbar>
      <div class="uk-navbar-left">
        <a href="/">
          <img src="<?php echo $logo['url'] ;?>" alt="<?php echo $logo['alt'] ;?>" title="<?php echo $logo['title'] ;?>">
        </a>

      </div>

      <div class="uk-navbar-right">

        <ul class="uk-navbar-nav uk-visible@m">
        <?php if( have_rows('menu', 'option') ): ?>
    <?php while( have_rows('menu', 'option') ): the_row(); ?>
        <?php if( get_row_layout() == 'pages' ): ?>
          <li><a class="nav__link" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a></li>
        <?php elseif( get_row_layout() == 'links' ):?>
          <li><a class="nav__link" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></li>
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>
       
        </ul>
        <ul class="uk-navbar-nav uk-inline  uk-hidden@m">
  <li><a  href="#offcanvas-overlay" class=" button_type_toggle " uk-toggle="target: #offcanvas-overlay">
      <span class="" uk-navbar-toggle-icon>

      </span>
    </a></li></ul

      </div>
      </div>
   
    </div>
    <!-- END uk-container -->
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
<?php if( have_rows('menu', 'option') ): ?>
<?php while( have_rows('menu', 'option') ): the_row(); ?>
<?php if( get_row_layout() == 'pages' ): ?>
  <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('page_link'); ?>"><?php the_sub_field('title'); ?></a></li>
<?php elseif( get_row_layout() == 'links' ):?>
  <li><a class="nav__link uk-margin-bottom" href="<?php the_sub_field('link'); ?>"><?php the_sub_field('text'); ?></a></li>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>

</ul>


      
    </div>
</div>
<body>