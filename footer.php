<?php
// ACF Fields 
$cert = get_field('cert', 'option');
?> <!-- START  --><footer id="areas" class="section_type-footer" style="padding-top: 75px;"><div class="uk-container"><div class="uk-margin-large"><h3 class="footer_block_title" style="color:#fff;">We Service <a href="https://roofmasters.us/palm-beach-county/">Palm Beach County</a> and <a href="https://roofmasters.us/broward-county/">Broward County</a>, Florida</h3><hr> <?php

            $posts = get_field('cities_we_serve', 'option');

            if ($posts) : ?> <div class="uk-child-width-1-6@m uk-child-width-1-2 uk-grid uk-grid-small" uk-grid=""> <?php foreach ($posts as $p) : // variable must NOT be called $post (IMPORTANT) 
                    ?> <li class="uk-margin-remove uk-first-column"><a class="footer__link footer__link_type_city uk-button-text" href="<?php echo get_permalink($p->ID); ?>"> <?php echo get_the_title($p->ID); ?> </a></li> <?php endforeach; ?> </div> <?php endif; ?> </div><hr><div class="uk-text-center"><img loading="lazy" src="<?php echo $cert['url']; ?>" alt="<?php echo $cert['alt']; ?>" title="<?php echo $cert['title']; ?>"></div></div><!-- START uk-container --><div class="uk-container"><!-- START uk-text-center --><div class="uk-text-center"><small>Roof Masters is a subsidiary of Build Masters, LC | (CCC 1327296)</small><br><small>© 2020 Build Masters, LC | Developed by <a href="https://xvxlabs.com" target="_blank" style="color:#fff;">xvxlabs.com</a></small></div><!-- END uk-text-center --></div><!-- END uk-container --></footer><!-- END  --><style>/* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }</style> <?php wp_footer() ?>