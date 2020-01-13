<?php // ACF Fields
$first_color = get_field( 'first_color' );
$second_color = get_field( 'second_color' );
 ?>
<!-- START section -->
<section class='section'>
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
    <div class='uk-grid' uk-grid="uk-margin">
      <!-- START uk-width-1-2@m uk-width-1-1 -->
      <div class='uk-width-1-2@m uk-width-1-1'>
        <div class="uk-child-width-expand@s uk-text-center" uk-grid="">
          <div>
            <div class="img-border uk-margin-bottom">
              <img class="" style="" src="https://www.buildmasters.net/pictures/img1.png" alt="">
            </div>
            <div class="img-border uk-margin-bottom">
              <img class="" style="" src="https://www.buildmasters.net/pictures/img1.png" alt="">
            </div>
            <div class="img-border uk-margin-bottom">
              <img class="" style="" src="https://www.buildmasters.net/pictures/img1.png" alt="">
            </div>
          </div>
          <div>
            <div class="img-border uk-margin-top">
              <img class="" style="" src="https://www.buildmasters.net/pictures/img1.png" alt="">
            </div>
            <div class="img-border uk-margin-top">
              <img class="" style="" src="https://www.buildmasters.net/pictures/img1.png" alt="">
            </div>
          </div>
        </div>
      </div>
      <!-- END uk-width-1-2@m uk-width-1-1 -->

      <!-- START uk-width-1-2@m  -->
      <div class='uk-width-1-2@m '>
        <div class="card card_theme-white">
          <h5>Why Choose us?</h5>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae itaque id ex illo eveniet iste, suscipit distinctio, quibusdam officiis ea quasi fugit cumque delectus nobis. Esse non obcaecati vero quos!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae itaque id ex illo eveniet iste, suscipit distinctio, quibusdam officiis ea quasi fugit cumque delectus nobis. Esse non obcaecati vero quos!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae itaque id ex illo eveniet iste, suscipit distinctio, quibusdam officiis ea quasi fugit cumque delectus nobis. Esse non obcaecati vero quos!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae itaque id ex illo eveniet iste, suscipit distinctio, quibusdam officiis ea quasi fugit cumque delectus nobis. Esse non obcaecati vero quos!</p>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repudiandae itaque id ex illo eveniet iste, suscipit distinctio, quibusdam officiis ea quasi fugit cumque delectus nobis. Esse non obcaecati vero quos!</p>
        

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
