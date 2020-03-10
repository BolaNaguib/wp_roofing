<?php
// ACF FIELDS
$first_color = get_field('first_color');
$second_color = get_field('second_color');
$section_theme = get_field('section_theme');
$section_id = get_field('section_id');
$full_width = get_field('full_width');
?> <!-- START section --><section id="<?php echo $section_id; ?>" class="section <?php if ($full_width) : ?> full-width <?php else : ?> <?php endif; ?> <?php if ($section_theme) : ?> section_theme-blue <?php else : ?> <?php endif; ?>"><!-- START uk-container --><div class="uk-container"> <?php if ($first_color || $second_color) : ?> <!-- START uk-text-center --><div class="uk-text-center"><h2 class="section__title"> <?php echo $first_color; ?><span> <?php echo $second_color; ?></span></h2></div><!-- END uk-text-center --> <?php endif; ?> <div uk-slider="autoplay:true;"><div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"><ul class="uk-slider-items uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@m uk-grid uk-grid-match"> <?php

                    // check if the repeater field has rows of data
                    if (have_rows('clients')) :

                        // loop through the rows of data
                        while (have_rows('clients')) : the_row();
                            $image = get_sub_field('image');
                    ?> <li><!-- START card --><div class="card_type-clients"> <?php echo $image['url']; ?> <img src=" <?php echo $image['url']; ?>" alt=" <?php echo $image['alt']; ?>" title=" <?php echo $image['title']; ?>"></div><!-- END card --></li> <?php endwhile;

                    else :

                    // no rows found

                    endif;

                    ?> </ul><a class="uk-position-center-left uk-position-small uk-hidden-hover xdx" href="#" uk-slidenav-previous uk-slider-item="previous"></a> <a class="uk-position-center-right uk-position-small uk-hidden-hover xdx" href="#" uk-slidenav-next uk-slider-item="next"></a></div><ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul></div></div><!-- END uk-container --></section><!-- END section -->