<?php
// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$post_id =  get_the_ID();
$city = get_field('city', $post_id);
$section_theme = get_field('section_theme');
$section_id = get_field('section_id');
$section_id = get_field('section_id');
$full_width = get_field( 'full_width' );

?>

<!-- Services Block -->
<!-- START section -->
<section id="<?php echo $section_id; ?>" class='section <?php if($full_width): ?> full-width <?php else: ?> <?php endif; ?> <?php if ($section_theme) : ?> section_theme-blue section_theme-blue_type-services <?php else : ?>  <?php endif; ?> '>
    <!-- START uk-container -->
    <div class='uk-container'>
        <?php if ($first_color || $second_color) : ?>
            <!-- START uk-text-center -->
            <div class='uk-text-center'>
                <h2 class="section__title"> <?php echo $first_color; ?><span> <?php echo $second_color; ?></span></h2>
            </div>
            <!-- END uk-text-center -->
        <?php endif; ?>


        <div uk-slider>

            <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                <ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid uk-grid-match ">
                    <?php

                    // check if the repeater field has rows of data
                    if (have_rows('block')) :

                        // loop through the rows of data
                        while (have_rows('block')) : the_row();
                            $page_link = get_sub_field('page_link');
                            $thumbnail = get_sub_field('thumbnail');
                            $block_title = get_sub_field('block_title');
                            $block_content = get_sub_field('block_content');
                    ?>
                            <li>
                                <!-- START card -->
                                <div class='card_type-service card_theme-white'>
                                    <!-- START uk-card-media-top -->
                                    <div class='img-border'>
                                        <?php if ($page_link) : ?>
                                            <a href="<?php echo $page_link; ?>" uk-scroll="offset: 100">
                                                <div class="uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle card-hover"><i class="fas fa-search"></i></div>
                                            <?php endif; ?>
                                            <?php if ($thumbnail) : ?>
                                                <img loading="lazy" src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>  | <?php echo $city; ?> " title="<?php echo $thumbnail['title']; ?> | <?php echo $city; ?> ">
                                            <?php endif; ?>
                                            <?php if ($page_link) : ?>
                                            </a>
                                        <?php endif; ?>

                                    </div>
                                    <!-- END uk-card-media-top -->
                                    <!-- START card -->
                                    <div class='card'>
                                        <div class="uk-text-center">
                                            <h3><?php echo $block_title; ?></h3>
                                        </div>
                                        <p><?php echo $block_content; ?></p>
                                    </div>
                                    <!-- END card -->


                                </div>
                                <!-- END card -->
                            </li>
                    <?php endwhile;

                    else :

                    // no rows found

                    endif;

                    ?>

                </ul>

                <a class="uk-position-center-left uk-position-small uk-hidden-hover xdx" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
                <a class="uk-position-center-right uk-position-small uk-hidden-hover xdx" href="#" uk-slidenav-next uk-slider-item="next"></a>

            </div>

            <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

        </div>


    </div>
    <!-- END uk-container -->
</section>
<!-- END section -->