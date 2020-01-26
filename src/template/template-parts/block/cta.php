<?php 
// ACF Fields 
$phone_display_option = get_field( 'phone_display','option' );
$phone_display_single = get_field( 'phone_display' );
$phone_display = $phone_display_single ? $phone_display_single : $phone_display_option  ;

$phone_option = get_field( 'phone','option' );
$phone_single = get_field( 'phone' );
$phone = $phone_single ? $phone_single : $phone_option  ;

$cta_content = get_field( 'cta_content' );
$section_id = get_field( 'section_id' );
?>
<!-- CTA -->
<!-- START section -->
<section id="<?php echo $section_id;?>" class='section_type-cta'>
  <!-- START uk-container -->
  <div class='uk-container'>
    <!-- START uk-text-center -->
    <div class='uk-text-center'>
      <h2 class="uk-margin-remove"><?php echo $cta_content ;?> <a href="tel:<?php echo $phone ;?>"><?php echo $phone_display ;?></a></h2>

    </div>
    <!-- END uk-text-center -->
  </div>
  <!-- END uk-container -->
</section>
<!-- END section -->