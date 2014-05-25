<?php get_header() ?>
<?php
  $page = get_query_var('paged');
  if ($page > 1) {
?>
  <h2 class="main-content-title">
    Page <?php echo $page; ?>
  </h2>
  <nav class="post-pages">
    <span class="previous"><?php next_posts_link('&larr; Previous') ?></span>
    <span class="next"><?php previous_posts_link('Next &rarr;') ?></span>
  </nav>
<?php } ?>

<?php get_template_part('listing'); ?>
<?php get_footer() ?>
