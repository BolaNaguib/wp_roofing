<?php
// ACF FIELDS
$post_id =  get_the_ID();
$city = get_field('city', $post_id);
$section_theme = get_field('section_theme');
$section_id = get_field('section_id');
$full_width = get_field('full_width');

$phone_display_option = get_field('phone_display', 'option');
$phone_display_single = get_field('phone_display', $post_id);
$phone_display = $phone_display_single ? $phone_display_single : $phone_display_option;

$phone_option = get_field('phone', 'option');
$phone_single = get_field('phone', $post_id);
$phone = $phone_single ? $phone_single : $phone_option;

$cta_content = get_field( 'cta_content' );

?>
<!-- START section CARD -->
<section id="<?php echo $section_id; ?>" class='section_type-ctav2 <?php if ($full_width) : ?> full-width<?php endif; ?>  <?php if ($section_theme) : ?> section_theme-blue <?php else : ?> section_theme-white <?php endif; ?>'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <!-- START uk-grid uk-gris-small -->
        <div class='uk-grid uk-gris-small uk-flex uk-flex-middle uk-visible@m'>
            <!-- START uk-width-expand@m -->
            <div class='uk-width-expand@m'>
                <h4 class="content"> <?php echo $cta_content  ;?></h4>
            </div>
            <!-- END uk-width-expand@m -->
            <!-- START uk-width-auto@m -->
            <div class='uk-width-auto@m'>
            <a class="button" href="tel:<?php echo $phone ;?>"> <?php echo $phone_display ;?> </a>
            <a class="callback"  href="#quote" uk-scroll="offset: 50"> Request Call Back </a>
            </div>
            <!-- END uk-width-auto@m -->
        </div>
        <!-- END uk-grid uk-gris-small -->

             <!-- START uk-hidden@m uk-text-center -->
             <div class='uk-hidden@m uk-text-center'>
            <!-- START uk-width-expand@m -->
            <div class='uk-width-1-1'>
                <h4 class="content"><?php echo $cta_content  ;?></h4>
            </div>
            <!-- END uk-width-expand@m -->
            <!-- START uk-width-auto@m -->
            <div class='uk-width-1-1'>
            <a class="button" href="tel:<?php echo $phone ;?>"> <?php echo $phone_display ;?> </a>
            <a class="callback" href="#quote"> Request Call Back </a>
            </div>
            <!-- END uk-width-auto@m -->
        </div>
        <!-- END uk-grid uk-gris-small -->
    </div>
    <!-- END uk-container -->
</section>
