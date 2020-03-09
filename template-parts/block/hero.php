<?php
// ACF Fields 
$hero_background = get_field('hero_background');
$hero_title = get_field('hero_title');
$hero_caption = get_field('hero_caption');
$post_id =  get_the_ID();
$city = get_field( 'city', $post_id );
// ACF Fields 
$phone_display_option = get_field( 'phone_display','option' );
$phone_display_single = get_field( 'phone_display', $post_id  );
$phone_display = $phone_display_single ? $phone_display_single : $phone_display_option  ;

$phone_option = get_field( 'phone','option' );
$phone_single = get_field( 'phone', $post_id  );
$phone = $phone_single ? $phone_single : $phone_option  ;

$full_width = get_field( 'full_width' );

?>
<!-- Hero Section -->
<!-- START section -->
<section class='section_type-hero <?php if($full_width): ?> full-width <?php else: ?> <?php endif; ?> uk-position-relative uk-flex uk-flex-middle' style="background-image: url('<?php echo $hero_background['url']; ?>');
background-size:cover;">
  <!-- START uk-container -->
  <div class='uk-container uk-position-relative ' style=" ">
    <!-- START uk-flex uk-flex-middle -->
    <div class='uk-text-center uk-margin-bottom'>
      <h1 class="">  <?php echo $hero_title; ?> <?php echo $city;?> </h1>
      <p><?php echo $hero_caption; ?></p>
      <br>
      <br>
      <a class="button_type-hero" href="<?php echo $phone ;?>"><?php echo $phone_display ;?></a>
    </div>

  


    <!-- END uk-flex uk-flex-middle -->
  </div>
  <!-- END uk-container -->
  <?php if (have_rows('value_propositions')) : ?>

  <div class="uk-visible@m" style="bottom: 30px;
    position: absolute !important;
    width: 100%;">
    <div class="uk-container">
      <!-- START uk-grid uk-child-width-1-4@m uk-child-width-1-1 -->
      <div class='uk-grid uk-child-width-1-4@m uk-child-width-1-1' uk-grid="uk-margin">
      <?php while (have_rows('value_propositions')) : the_row(); ?>
      <?php // ACF Fields 
        $block_fontawesome = get_sub_field( 'block_fontawesome' );
        $block_caption = get_sub_field( 'block_caption' );
       ?>
        <!-- START div -->
        <div class=''>
          <!-- START card_type-values -->
          <div class='card_type-values'>
            <h3><?php echo $block_fontawesome ;?></h3>
            <span><?php echo $block_caption ;?></span>
          </div>
          <!-- END card_type-values -->
        </div>
        <!-- END div -->
        <?php endwhile; ?>
      </div>
      <!-- END uk-grid uk-child-width-1-4@m uk-child-width-1-1 -->
    </div>
  </div>
  <?php endif; ?>

</section>
<?php if (have_rows('value_propositions')) : ?>

<section class="section_type-cta uk-hidden@m" >
    <div class="uk-container">
      <!-- START uk-grid uk-child-width-1-4@m uk-child-width-1-1 -->
      <div class='uk-grid uk-child-width-1-2' uk-grid="uk-margin">
      <?php while (have_rows('value_propositions')) : the_row(); ?>
      <?php // ACF Fields 
        $block_fontawesome = get_sub_field( 'block_fontawesome' );
        $block_caption = get_sub_field( 'block_caption' );
       ?>
        <!-- START div -->
        <div class=''>
          <!-- START card_type-values -->
          <div class='card_type-values'>
            <h3><?php echo $block_fontawesome ;?></h3>
            <span><?php echo $block_caption ;?></span>
          </div>
          <!-- END card_type-values -->
        </div>
        <!-- END div -->
        <?php endwhile; ?>


      </div>
      <!-- END uk-grid uk-child-width-1-4@m uk-child-width-1-1 -->


    </div>
      <!-- START uk-text-center -->
  <div class="uk-text-center scroll_button">
    <a class="" href="<?php echo $scroll_to_section ;?>" uk-scroll="offset: 50">
      <img  loading="lazy" src="<?php echo get_template_directory_uri(); ?>/images/scroll-dwn.png" alt="">
    </a>
  </div>
  <!-- END uk-text-center -->
  </section>
  <?php endif; ?>
