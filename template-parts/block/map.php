<?php 
// ACF Fields
$map = get_field( 'map' );
$section_id = get_field( 'section_id' );
$full_width = get_field( 'full_width' );

?> <!-- START Map --><!-- START section --><section id="<?php echo $section_id;?>" class="iframe <?php if($full_width): ?> full-width <?php else: ?> <?php endif; ?>"> <?php echo $map ;?> </section><!-- END section -->