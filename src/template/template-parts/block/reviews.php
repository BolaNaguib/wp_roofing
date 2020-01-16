<section id="" class=" section section_theme-black">
    <div class="uk-container">
        <?php if ($first_color || $second_color) : ?>
            <!-- START uk-text-center -->
            <div class='uk-text-center' style=" margin-bottom: 30px; padding: 10px 0px;">
                <h2 class="section__title"> <?php echo $first_color; ?><span> <?php echo $second_color; ?></span></h2>
            </div>
            <!-- END uk-text-center -->
        <?php endif; ?>
        <div class="uk-child-width-1-4@m uk-child-width-1-1" uk-grid>

            <?php
            // check if the repeater field has rows of data
            if (have_rows('review')) :
                // loop through the rows of data
                while (have_rows('review')) : the_row(); ?>
                    <?php 
                    $image = get_sub_field( 'review_image' );
                    ?>
                    <div class="">
                        <div class="uk-card-header">
                            <a target="_blank" style="color: inherit;" href=" <?php the_sub_field('review_url') ?> ">

                                <div class="uk-grid-small uk-flex-middle" uk-grid>

                                    <div class="uk-width-auto">
                                        <img class="uk-border-circle" width="60" height="60" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                                    </div>
                                    <div class="uk-width-expand">
                                        <h4 class=" uk-margin-remove-bottom"><?php the_sub_field('review_title'); ?></h4>
                                        <p class="uk-text-meta uk-margin-remove-top star">
                                            <?php if (get_sub_field('review_rating') == 'one') : ?>
                                                <i class="fas fa-star"></i>
                                            <?php elseif (get_sub_field('review_rating') == 'two') : ?>
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <?php elseif (get_sub_field('review_rating') == 'three') : ?>
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <?php elseif (get_sub_field('review_rating') == 'four') : ?>
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <?php elseif (get_sub_field('review_rating') == 'fourhalf') : ?>
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                                            <?php elseif (get_sub_field('review_rating') == 'five') : ?>
                                                <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                                            <?php endif; ?>
                                        </p>
                                    </div>
                                </div>
                            </a>

                        </div>
                    </div>

            <?php endwhile;
            else :
            // no rows found
            endif; ?>







        </div>

        <div class="uk-text-center uk-padding">
            <span style="color:#ffc600" class="rating-desc" itemscope="" itemtype="http://schema.org/Organization">
                <span style="color:#ffc600" itemprop="name">
                    <?php if (get_field('schema_organization_name')) : ?>
                        <?php the_field('schema_organization_name') ?>
                    <?php else : ?>
                        <?php the_field('schema_organization_name', 'option'); ?>
                    <?php endif; ?>
                </span>
                <span itemprop="aggregateRating" itemscope="" itemtype="http://schema.org/AggregateRating">Rated
                    <span itemprop="ratingValue"> <?php if (get_field('rating')) : ?>
                            <?php the_field('rating') ?>
                        <?php else : ?>
                            <?php the_field('rating', 'option'); ?>
                        <?php endif; ?></span>/ <?php if (get_field('rating_total')) : ?>
                        <?php the_field('rating_total') ?>
                    <?php else : ?>
                        <?php the_field('rating_total', 'option'); ?>
                    <?php endif; ?> Based On
                    <span itemprop="reviewCount"> <?php if (get_field('rating_based_on')) : ?>
                            <?php the_field('rating_based_on') ?>
                        <?php else : ?>
                            <?php the_field('rating_based_on', 'option'); ?>
                        <?php endif; ?></span>
                    <a class="ratings" href="  <?php if (get_field('rating_source_url')) : ?>
               <?php the_field('rating_source_url') ?>
               <?php else : ?>
                 <?php the_field('rating_source_url', 'option'); ?>
               <?php endif; ?>"> <?php if (get_field('rating_source')) : ?>
                            <?php the_field('rating_source') ?>
                        <?php else : ?>
                            <?php the_field('rating_source', 'option'); ?>
                        <?php endif; ?></a>
                </span>
            </span>
        </div>
    </div>
</section>