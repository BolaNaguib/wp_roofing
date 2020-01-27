<?php /* Template Name: Normal Template */ ?>
<!-- START header -->
<?php get_header(); ?>

<section class="section section_type-normal" style="background-image: url('https://www.garagedoorasapservice.com/wp-content/uploads/2019/06/gasapbg.jpg');
background-size:cover;" >
    <!-- START uk-container -->
    <div class='uk-container'>
    <h1><?php the_title() ?></h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia saepe ab temporibus. Ea consequuntur id reprehenderit laudantium veritatis rerum architecto hic ducimus voluptatibus! Cumque error tempora, accusantium ea obcaecati natus.</p>
    </div>
    <!-- END uk-container -->

</section>
<!-- START section -->
<div class='section'>
<!-- START uk-container -->
<div class='uk-container'>

<!-- END section -->
<!-- Wordpress Loop -->
<?php if (have_posts()) : ?>
  <?php /* Start the Loop */ ?>
  <?php while (have_posts()) : the_post(); ?>
    <?php the_content(); ?>
  <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>


</div>
<!-- END uk-container -->
</div>
<!-- END section -->




<!-- END header  -->
<?php get_footer(); ?>