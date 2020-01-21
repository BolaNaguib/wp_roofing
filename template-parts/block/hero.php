<?php
// ACF Fields 
$hero_background = get_field('hero_background');
$hero_title = get_field('hero_title');
$hero_caption = get_field('hero_caption');
$city = get_field( 'city' );

// ACF Fields 
$phone_display_option = get_field( 'phone_display','option' );
$phone_display_single = get_field( 'phone_display' );
$phone_display = $phone_display_single ? $phone_display_single : $phone_display_option  ;

$phone_option = get_field( 'phone','option' );
$phone_single = get_field( 'phone' );
$phone = $phone_single ? $phone_single : $phone_option  ;

?>

<!-- Hero Section -->
<!-- START section -->
<section class='section_type-hero uk-position-relative uk-flex uk-flex-middle' style="background-image: url('<?php echo $hero_background['url']; ?>');
background-size:cover; height:98vh;  ">
  <!-- START uk-container -->
  <div class='uk-container uk-position-relative ' style=" ">
    <!-- START uk-flex uk-flex-middle -->
    <div class='uk-text-center uk-margin-bottom'>
      <h1 class="" style="font-size: 75px;"><?php echo $hero_title; ?> <?php echo $city ;?> </h1>
      <p><?php echo $hero_caption; ?></p>
      <br>
      <br>
      <a class="button_type-hero" href="<?php echo $phone ;?>"><?php echo $phone_display ;?></a>
    </div>

  


    <!-- END uk-flex uk-flex-middle -->
  </div>
  <!-- END uk-container -->

  <div class="uk-visible@m" style="bottom: 30px;
    position: absolute !important;
    width: 100%;">
    <div class="uk-container">
      <!-- START uk-grid uk-child-width-1-4@m uk-child-width-1-1 -->
      <div class='uk-grid uk-child-width-1-4@m uk-child-width-1-1' uk-grid="uk-margin">
        <!-- START div -->
        <div class=''>
          <!-- START card_type-values -->
          <div class='card_type-values'>
            <h3>24/7</h3>
            <span>Available</span>
          </div>
          <!-- END card_type-values -->
        </div>
        <!-- END div -->

        <!-- START div -->
        <div class=''>
          <!-- START card_type-values -->
          <div class='card_type-values'>
            <h3>5</h3>
            <span>Star Google Rating</span>
          </div>
          <!-- END card_type-values -->
        </div>
        <!-- END div -->

        <!-- START div -->
        <div class=''>
          <!-- START card_type-values -->
          <div class='card_type-values'>
            <h3>100%</h3>
            <span>Service Guarantee</span>
          </div>
          <!-- END card_type-values -->
        </div>
        <!-- END div -->

        <!-- START div -->
        <div class=''>
          <!-- START card_type-values -->
          <div class='card_type-values'>
            <h3>Free</h3>
            <span>Quote</span>
          </div>
          <!-- END card_type-values -->
        </div>
        <!-- END div -->



      </div>
      <!-- END uk-grid uk-child-width-1-4@m uk-child-width-1-1 -->


    </div>
  </div>

</section>

<section class="section_type-cta uk-hidden@m" >
    <div class="uk-container">
      <!-- START uk-grid uk-child-width-1-4@m uk-child-width-1-1 -->
      <div class='uk-grid uk-child-width-1-2' uk-grid="uk-margin">
        <!-- START div -->
        <div class=''>
          <!-- START card_type-values -->
          <div class='card_type-values'>
            <h3>24/7</h3>
            <span>Available</span>
          </div>
          <!-- END card_type-values -->
        </div>
        <!-- END div -->

        <!-- START div -->
        <div class=''>
          <!-- START card_type-values -->
          <div class='card_type-values'>
            <h3>5</h3>
            <span>Star Google Rating</span>
          </div>
          <!-- END card_type-values -->
        </div>
        <!-- END div -->

        <!-- START div -->
        <div class=''>
          <!-- START card_type-values -->
          <div class='card_type-values'>
            <h3>100%</h3>
            <span>Service Guarantee</span>
          </div>
          <!-- END card_type-values -->
        </div>
        <!-- END div -->

        <!-- START div -->
        <div class=''>
          <!-- START card_type-values -->
          <div class='card_type-values'>
            <h3>Free</h3>
            <span>Quote</span>
          </div>
          <!-- END card_type-values -->
        </div>
        <!-- END div -->



      </div>
      <!-- END uk-grid uk-child-width-1-4@m uk-child-width-1-1 -->


    </div>
  </section>