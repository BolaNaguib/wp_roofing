<?php // ACF Fields
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$content = get_field( 'content' );
?>
<!-- START section -->
<section class='section'>
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
      <div class='uk-width-1-2@m uk-width-1-1'>
        <div class="uk-child-width-expand@s uk-text-center" uk-grid="parallax:150">
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
                      <img src="<?php echo $image['url'] ;?>" alt="<?php echo $image['alt'] ;?>" title="<?php echo $image['title'] ;?>">
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
        <div class="card card_theme-white">
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