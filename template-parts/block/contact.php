<?php 
// ACF FIELDS
$first_color = get_field( 'first_color' );
$second_color = get_field( 'second_color' );

//INFO BLOCK ACF Fields 
$info_title_first_color = get_field( 'info_title_first_color' );
$info_title_second_color = get_field( 'info_title_second_color' );
$info_content = get_field( 'info_content' );
$address = get_field( 'address' );
$phone = get_field( 'phone' );
$email = get_field( 'email' );

// Form Block 
$first_color_title = get_field( 'first_color_title' );
$second_color_title = get_field( 'second_color_title' );
$form_shortcode = get_field( 'form_shortcode' );
$section_id = get_field( 'section_id' );
?>
<!-- contact section -->
<!-- START section -->
<section id="<?php echo $section_id;?>" class='section'>
  <!-- START uk-container -->
  <div class='uk-container'>
  <?php if ($first_color || $second_color) : ?>
      <!-- START uk-text-center -->
      <div class='uk-text-center'>
        <h2 class="section__title"> <?php echo $first_color; ?><span> <?php echo $second_color; ?></span></h2>
      </div>
      <!-- END uk-text-center -->
    <?php endif; ?>
    <!-- START uk-grid -->
    <div class='uk-grid uk-flex uk-flex-middle' uk-grid="uk-margin">
      <!-- START uk-width-1-3@m -->
      <div class='uk-width-1-3@m  uk-position-relative'>
        <div class="card card_theme_primary card_type-float">
          <h2 class="card__title"> <?php echo $info_title_first_color ;?><span><?php echo $info_title_second_color ;?></span></h2>
          <?php echo $info_content ;?>

          <ul class="uk-list">
            <li>
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto uk-text-center">
                  <h4 class="uk-margin-remove"><i class="fas fa-map-marker-alt"></i></h4>

                </div>
                <div class="uk-width-expand">
                  <h4 class="uk-margin-remove">Address</h4>
                  <small> <?php echo $email ;?></small>
                </div>
              </div>
            </li>
            <li>
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto uk-text-center">
                  <h4 class="uk-margin-remove">
                    <i class="fas fa-mobile-alt"></i> </h4>

                </div>
                <div class="uk-width-expand">
                  <h4 class="uk-margin-remove">Phone</h4>
                  <small><?php echo $phone ;?></small>
                </div>
              </div>
            </li>
            <li>
              <div class="uk-grid-small uk-flex-middle" uk-grid>
                <div class="uk-width-auto uk-text-center">
                  <h4 class="uk-margin-remove">
                    <i class="fas fa-envelope-open-text"></i> </h4>

                </div>
                <div class="uk-width-expand">
                  <h4 class="uk-margin-remove">Email</h4>
                  <small><?php echo $email ;?></small>
                </div>
              </div>
            </li>
          </ul>

        </div>
      </div>
      <!-- END uk-width-1-3@m -->

      <!-- START uk-width-2-3@m -->
      <div class='uk-width-2-3@m'>
        <div class="card card_theme-white card_type-contactform ">
          <h2 class="card__title"><?php echo $first_color_title ;?> <span><?php echo $second_color_title ;?></span></h2>
          <?php echo do_shortcode( ' '. $form_shortcode .' ' );?>

        </div>
      </div>
      <!-- END uk-width-2-3@m -->
    </div>
    <!-- END uk-grid -->
  </div>
  <!-- END uk-container -->
</section>
<!-- END section -->