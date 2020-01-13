<?php 
// ACF Fields 
$hero_background = get_field( 'hero_background' );
$hero_title = get_field( 'hero_title' );
$hero_caption = get_field( 'hero_caption' );

?>

<!-- Hero Section -->
<!-- START section -->
<section class='section_type-hero uk-position-relative uk-flex uk-flex-middle' uk-height-viewport style="background-image: url('<?php echo $hero_background['url'] ;?>');
background-size:cover;">
  <!-- START uk-container -->
  <div class='uk-container uk-position-z-index '>
    <!-- START uk-flex uk-flex-middle -->
    <div class='uk-text-center'>
      <h1 class="" style="font-size: 75px;"><?php echo $hero_title ;?></h1>
      <p><?php echo $hero_caption ;?></p>
      <br>
      <br>
      <a class="button_type-hero" href=""> (561)-757-6587 </a>
    </div>
    <!-- END uk-flex uk-flex-middle -->
  </div>
  <!-- END uk-container -->
</section>