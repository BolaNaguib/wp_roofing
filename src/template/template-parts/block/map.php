<?php 
// ACF Fields
$map = get_field( 'map' );
$section_id = get_field( 'section_id' );
?>
<!-- START Map -->
<!-- START section -->
<section id="<?php echo $section_id;?>" class='iframe'>
    <?php echo $map ;?>

</section>
<!-- END section -->