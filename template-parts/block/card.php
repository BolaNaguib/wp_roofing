<?php 
// ACF FIELDS
$first_color = get_field( 'first_color' ) ;
$second_color = get_field( 'second_color' );
$content = get_field( 'content' );
$media = get_field( 'media' );
$card_title = get_field( 'card_title' );
$post_id =  get_the_ID();
$city = get_field( 'city', $post_id );
 ?>


<!-- START section -->
<div class='section'>
  <!-- START uk-container -->
  <div class='uk-container'>
    <?php if($first_color || $second_color): ?>
    <!-- START uk-text-center -->
    <div class='uk-text-center'>
      <h2 class="section__title"> <?php echo $first_color ;?><span> <?php echo $second_color ;?></span></h2>
    </div>
    <!-- END uk-text-center -->
    <?php endif; ?>
    <!-- START uk-grid -->
    <div class='uk-grid uk-flex-middle' uk-grid="uk-margin">
      <!-- START uk-width-1-3@m uk-width-1-1 -->
      <div class='uk-width-2-3@m uk-width-1-1'>
    

          <?php if($content): ?>
        <div class="card card_theme-white">
        <h2 class="card__title"><?php echo $card_title ;?> <span><?php echo $city ;?></span></h2>

        <?php echo $content ;?>
        </div>
          <?php endif; ?>

      </div>
      <!-- END uk-width-1-3@m uk-width-1-1 -->

      <style>

      </style>
      <!-- START uk-wodth-1-3 -->
      <div class='uk-width-1-3@m uk-width-1-1'>
          <?php if($media): ?>
        <div class="img-border">
          <img src="<?php echo $media['url'] ?>" alt="<?php echo $media['alt'] ?>" title="<?php echo $media['title'] ?>">
        </div>
          <?php endif; ?>
      </div>
      <!-- END uk-wodth-1-3 -->
    </div>
    <!-- END uk-grid -->
  </div>
  <!-- END uk-container -->
</div>
<!-- END section -->