<?php
// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$section_theme = get_field('section_theme');
$post_id =  get_the_ID();
$city = get_field('city', $post_id);
$section_id = get_field( 'section_id' );
$full_width = get_field( 'full_width' );

?>

<!-- START section -->
<div id="<?php echo $section_id;?>" class='section <?php if($full_width): ?> full-width <?php else: ?> <?php endif; ?> <?php if ($section_theme) : ?> section_theme-blue <?php else : ?>  <?php endif; ?>'>
    <!-- START uk-container -->
    <div class='uk-container'>
        <?php if ($first_color || $second_color) : ?>
            <!-- START uk-text-center -->
            <div class='uk-text-center'>
                <h2 class="section__title"> <?php echo $first_color; ?><span> <?php echo $second_color; ?></span></h2>
            </div>
            <!-- END uk-text-center -->
        <?php endif; ?>
        <?php if (have_rows('gallery')) : ?>
        <!-- START uk-grid uk-grid-small -->
        <div class='uk-grid uk-child-width-auto uk-grid-small' uk-grid="uk-margin">
        <?php while (have_rows('gallery')) : the_row(); ?>
        <?php //ACF FIELDS
        $image = get_sub_field( 'image' );
        $image_title = get_sub_field( 'image_title' );
        $image_caption = get_sub_field( 'image_caption' );
        $style = get_sub_field( 'style' );
         ?>
        
            <!-- START div -->
            <div class=' <?php if($style): ;?> uk-width-1-3@m uk-width-1-1 <?php else: ?> uk-width-1-6@m uk-width-1-2 <?php endif; ?>'>
                <!-- START card_type-gallery -->
                <div class='card_type-gallery'>
                    <div class=" hover uk-position-cover uk-flex uk-flex-center uk-flex-middle">
                        <div>
                        <h4> <?php echo $image_title ;?> </h4>
                        <small> <?php echo $image_caption ;?> </small>
                        </div>
                      </div>
                    <img src="<?php echo $image['url'] ;?>" alt="<?php echo $image['alt'] ;?>  | <?php echo $city ;?> " title="<?php echo $image['title'] ;?> | <?php echo $city ;?> ">
                </div>
                <!-- END card_type-gallery -->
            </div>
            <!-- END div -->
            <?php endwhile; ?>
        </div>
        <!-- END uk-grid uk-grid-small -->
        <?php endif; ?>
    </div>
    <!-- END uk-container -->
</div>
<!-- END section -->