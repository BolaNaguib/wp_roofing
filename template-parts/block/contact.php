<?php
$post_id =  get_the_ID();

// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');

//INFO BLOCK ACF Fields 
$info_title_first_color = get_field('info_title_first_color');
$info_title_second_color = get_field('info_title_second_color');
$info_content = get_field('info_content');

$phone_display_option = get_field('phone_display', 'option');
$phone_display_single = get_field('phone_display', $post_id);
$phone_display = $phone_display_single ? $phone_display_single : $phone_display_option;

$phone_option = get_field('phone', 'option');
$phone_single = get_field('phone', $post_id);
$phone = $phone_single ? $phone_single : $phone_option;

$city = get_field('city', $post_id);
$address_option = get_field('address', 'option');
$address = $city ? $city : $address_option;

$email = get_field('email', 'option');

// Form Block 
$first_color_title = get_field('first_color_title');
$second_color_title = get_field('second_color_title');
$form_shortcode = get_field('form_shortcode');
$section_id = get_field('section_id');

$full_width = get_field('full_width');
$facebook = get_field('facebook', 'options');
$twitter = get_field('twitter', 'options');
$instagram = get_field('instagram', 'options');
$youtube = get_field('youtube', 'options');
?> <!-- contact section --><!-- START section --><section id="<?php echo $section_id; ?>" class="section <?php if ($full_width) : ?> full-width <?php else : ?> <?php endif; ?>"><!-- START uk-container --><div class="uk-container"> <?php if ($first_color || $second_color) : ?> <!-- START uk-text-center --><div class="uk-text-center"><h2 class="section__title"> <?php echo $first_color; ?><span> <?php echo $second_color; ?></span></h2></div><!-- END uk-text-center --> <?php endif; ?> <!-- START uk-grid --><div class="uk-grid uk-flex uk-flex-middle" uk-grid="uk-margin"><!-- START uk-width-1-3@m --><div class="uk-width-1-3@m uk-position-relative"><div class="card card_theme_primary card_type-float"><h2 class="card__title"> <?php echo $info_title_first_color; ?><span><?php echo $info_title_second_color; ?></span></h2> <?php echo $info_content; ?> <ul class="uk-list"><li><div class="uk-grid-small uk-flex-middle" uk-grid><div class="uk-width-auto uk-text-center"><h4 class="uk-margin-remove"><svg width="15px" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-phone-alt fa-w-16" style="/* width: 15px; */"><path fill="currentColor" d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z" class=""></path></svg></h4></div><div class="uk-width-expand"><h4 class="uk-margin-remove">Phone</h4><small><a href="tel:<?php echo $phone; ?>"><?php echo $phone_display; ?></a></small></div></div></li><li><div class="uk-grid-small uk-flex-middle" uk-grid><div class="uk-width-auto uk-text-center"><h4 class="uk-margin-remove"><i class="fas fa-envelope-open-text"></i></h4></div><div class="uk-width-expand"><h4 class="uk-margin-remove">Email</h4><small><?php echo $email; ?></small></div></div></li><li><div class="uk-grid-small uk-flex-middle" uk-grid><div class="uk-width-auto uk-text-center"><h4 class="uk-margin-remove"><i class="fas fa-map-marker-alt"></i></h4></div><div class="uk-width-expand"><h4 class="uk-margin-remove">Address</h4><small> <?php echo $address; ?></small></div></div></li></ul><hr><div class="uk-flex uk-flex-center"><ul class="uk-iconnav"> <?php if ($facebook) : ?><li><a href="<?php echo $facebook; ?>"><i class="fab fa-facebook-square"></i></a></li><?php endif; ?> <?php if ($twitter) : ?><li><a href="<?php echo $twitter; ?>"><i class="fab fa-twitter-square"></i></a></li><?php endif; ?> <?php if ($instagram) : ?><li><a href="<?php echo $instagram; ?>"><i class="fab fa-instagram"></i></a></li><?php endif; ?> <?php if ($youtube) : ?><li><a href="<?php echo $youtube; ?>"><i class="fab fa-youtube"></i></a></li><?php endif; ?> </ul></div></div></div><!-- END uk-width-1-3@m --><!-- START uk-width-2-3@m --><div class="uk-width-2-3@m"><div class="card card_theme-white card_type-contactform"><h2 class="card__title"><?php echo $first_color_title; ?> <span><?php echo $second_color_title; ?></span></h2> <?php echo do_shortcode(' ' . $form_shortcode . ' '); ?> </div></div><!-- END uk-width-2-3@m --></div><!-- END uk-grid --></div><!-- END uk-container --></section><!-- END section -->