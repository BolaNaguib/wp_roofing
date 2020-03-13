<?php
// ACF Fields 
$cert = get_field('cert', 'option');
?> <!-- START  --><footer id="areas" class="section_type-footer" style="padding-top: 75px;"><div class="uk-container"><div class="uk-text-center"><img src="<?php echo $cert['url']; ?>" alt="<?php echo $cert['alt']; ?>" title="<?php echo $cert['title']; ?>"></div><div class="uk-margin-large"><h3 class="footer_block_title" style="color:#fff;">Cities We Serve in <a href="https://roofmasters.us/broward-county/">Broward County</a> and <a href="https://roofmasters.us/palm-beach-county/">Palm Beach County</a></h3><hr> <?php

            $posts = get_field('cities_we_serve', 'option');

            if ($posts) : ?> <div class="uk-child-width-1-6@m uk-child-width-1-2 uk-grid uk-grid-small" uk-grid=""> <?php foreach ($posts as $p) : // variable must NOT be called $post (IMPORTANT) 
                    ?> <li class="uk-margin-remove uk-first-column"><a class="footer__link footer__link_type_city uk-button-text" href="<?php echo get_permalink($p->ID); ?>"> <?php echo get_the_title($p->ID); ?> </a></li> <?php endforeach; ?> </div> <?php endif; ?> </div><br><br></div><!-- START uk-container --><div class="uk-container"><hr><!-- START uk-text-center --><div class="uk-text-center"><small>© 2020 Master Builders LLC. | Developed by <a style="color:#fff;">xvxlabs.com</a></small></div><!-- END uk-text-center --></div><!-- END uk-container --></footer><!-- END  --><!-- UIkit JS --><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit.min.js"></script><script defer="defer" src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.3/js/uikit-icons.min.js"></script> <?php wp_footer() ?>