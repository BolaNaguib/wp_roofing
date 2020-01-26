<?php
// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$post_id =  get_the_ID();
$city = get_field('city', $post_id);


?>
<!-- Services Block -->
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
        <div class='uk-grid' uk-grid="uk-margin">
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
                    <!-- START uk-width-1-3@m -->
                    <div class='uk-width-1-3@m'>
                        <!-- START card -->
                        <div class='card_type-service card_theme-white'>
                            <!-- START uk-card-media-top -->
                            <div class='img-border'>
                                <?php if ($page_link) : ?>
                                    <a href="<?php echo $page_link; ?>">
                                        <div class="uk-position-cover uk-overlay uk-overlay-default uk-flex uk-flex-center uk-flex-middle card-hover"><i class="fas fa-search"></i></div>
                                    <?php endif; ?>
                                    <?php if ($thumbnail) : ?>
                                        <img src="<?php echo $thumbnail['url']; ?>" alt="<?php echo $thumbnail['alt']; ?>  | <?php echo $city ;?> " title="<?php echo $thumbnail['title']; ?> | <?php echo $city ;?> ">
                                    <?php endif; ?>
                                    <?php if ($page_link) : ?>
                                    </a>
                                <?php endif; ?>

                            </div>
                            <!-- END uk-card-media-top -->
                            <!-- START card -->
                            <div class='card'>
                                <h3><?php echo $block_title; ?></h3>
                                <p><?php echo $block_content; ?></p>
                            </div>
                            <!-- END card -->


                        </div>
                        <!-- END card -->
                    </div>
                    <!-- END uk-width-1-3@m -->
            <?php endwhile;

            else :

            // no rows found

            endif;

            ?>
        </div>
        <!-- END uk-grid -->
    </div>
    <!-- END uk-container -->
</section>
<!-- END section -->