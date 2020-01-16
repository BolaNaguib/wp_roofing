<?php get_header(); ?>

<!-- END section -->
<!-- Wordpress Loop -->
<?php if (have_posts()) : ?>
  <?php /* Start the Loop */ ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>








<!-- END header  -->
<?php get_footer(); ?>