<?php // ACF Fields
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$content = get_field( 'content' );
$card_title = get_field( 'card_title' );
$media_direction = get_field('card_direction');
$post_id =  get_the_ID();
$city = get_field( 'city', $post_id );
$section_id = get_field( 'section_id' );
$card_theme = get_field('card_theme');
$section_theme = get_field('section_theme');
$full_width = get_field( 'full_width' );

?>
<!-- START section -->
<section id="<?php echo $section_id;?>" class='section <?php if($full_width): ?> full-width <?php else: ?> <?php endif; ?> <?php if ($section_theme) : ?> section_theme-blue <?php else : ?>  <?php endif; ?>'>
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

      <!-- START uk-width-1-2@m uk-width-1-1 -->
      <div class='uk-width-1-2@m uk-width-1-1  uk-flex-last <?php if ($media_direction) : ?> uk-flex-first@m <?php endif; ?>'>
        <div class="uk-child-width-expand@s uk-text-center uk-grid-small " uk-grid="parallax:50">
          <?php
          // check if the repeater field has rows of data
          if (have_rows('image_column')) :
            // loop through the rows of data
            while (have_rows('image_column')) : the_row(); ?>

              <div>
                <?php
                // check if the repeater field has rows of data
                if (have_rows('column')) :
                  // loop through the rows of data
                  while (have_rows('column')) : the_row(); 
                  $image = get_sub_field( 'image' );?>
                    <div class="img-border uk-margin-bottom">
                      <img loading="lazy" src="<?php echo $image['url'] ;?>" alt="<?php echo $image['alt'] ;?>  | <?php echo $city ;?> " title="<?php echo $image['title'] ;?> | <?php echo $city ;?> ">
                    </div>
                <?php endwhile;
                else :  endif; ?>

              </div>

          <?php endwhile;
          else :  endif; ?>

        </div>
      </div>
      <!-- END uk-width-1-2@m uk-width-1-1 -->

      <!-- START uk-width-1-2@m  -->
      <div class='uk-width-1-2@m '>
        <div class="card  <?php if ($card_theme) : ?> card_theme_primary <?php else : ?> card_theme-white <?php endif; ?>">
        <h2 class="card__title"><?php echo $card_title ;?> <span><?php echo $city ;?></span></h2>

          <?php echo $content ;?>

        </div>
      </div>
    </div>
    <!-- END uk-width-1-2@m  -->
  </div>
  <!-- END uk-grid -->
  </div>
  <!-- END uk-container -->
</section>
<!-- END section -->