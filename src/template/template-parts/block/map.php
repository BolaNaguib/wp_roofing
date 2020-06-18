<?php
// ACF Fields
$map = get_field('map');
$section_id = get_field('section_id');
$full_width = get_field('full_width');
$map_image = get_field('map_image');
$map_url = get_field('map_url');
?>
<!-- START Map -->
<?php if ($map_image) : ?>
    <!-- START section -->
    <section id="<?php echo $section_id; ?>" class='iframe <?php if ($full_width) : ?> full-width <?php else : ?> <?php endif; ?>'>
        <a href="<?php echo $$map_url; ?>">
            <!-- START mapContainer -->
            <div class='mapContainer' style="background-image: url('<?php echo $map_image['url'] ?>');     min-height: 450px;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;">

            </div>
            <!-- END mapContainer -->
        </a>
    </section>
    <!-- END section -->
<?php else : ?>
    <!-- START section -->
    <section id="<?php echo $section_id; ?>" class='iframe <?php if ($full_width) : ?> full-width <?php else : ?> <?php endif; ?>'>
        <?php echo $map; ?>

    </section>
    <!-- END section -->
<?php endif; ?>