<?php 
// ACF FIELDS
$first_color = get_field( 'first_color' ) ;
$second_color = get_field( 'second_color' );
?>

<!-- START section -->
<section class='section section_theme-blue'>
  <!-- START uk-container -->
  <div class='uk-container'>
  <?php if($first_color || $second_color): ?>
    <!-- START uk-text-center -->
    <div class='uk-text-center' style="    margin-bottom: 30px;
    padding: 10px 0px;">
      <h2 class="section__title"> <?php echo $first_color ;?><span> <?php echo $second_color ;?></span></h2>
    </div>
    <!-- END uk-text-center -->
    <?php endif; ?>
<?php if (have_rows('testimonial')) : ?>

    <!-- START uk-grid -->
    <div class='uk-grid uk-child-width-1-3@m' uk-grid="uk-margin">
    <?php while (have_rows('testimonial')) : the_row(); ?>
    <?php // ACF Fields 
          $caption = get_sub_field( 'caption' );
          $author = get_sub_field( 'author' );
          $source_title = get_sub_field( 'source_title' );
          $source_url = get_sub_field( 'source_url' );
    ?>
      <!-- START div -->
      <div class=''>
        <!-- START card_type-testimonial -->

        <div class="card_type-testimonial uk-text-center">
          <blockquote cite="#">
            <span><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></span>
            <p class="uk-margin-remove"><span uk-icon="icon: quote-right;" class="uk-icon"></span> <?php echo $caption ;?> <span uk-icon="icon: quote-right;" class="uk-icon"></span></p>
            <footer><?php echo $author ;?> &nbsp;&nbsp;<cite><a target="_blank" href="<?php echo $source_url; ?>"><?php echo $source_title ;?></a></cite></footer>
          </blockquote>
        </div>

        <!-- END card_type-testimonial -->

      </div>
      <!-- END div -->
      <?php endwhile; ?>
    </div>
    <!-- END uk-grid -->

<?php endif; ?>
  </div>
  <!-- END uk-container -->
</section>
<!-- END section -->
