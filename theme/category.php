<?php get_header(); ?>
<section class="clearfix listing listing--category">
  <h2 class="main-content-title">
    <?php single_cat_title() ?>
  </h2>
  <?php get_template_part('listing'); ?>
</section>
<?php get_footer(); ?>
