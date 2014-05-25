<section class="listing">
  <?php while ( have_posts() ) : the_post() ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('listing-item') ?>>
      <header class="listing-header">
        <h2 class="listing-title entry-title">
          <a href="<?php the_permalink() ?>" class="inherit" rel="bookmark">
            <?php
              $img = get_post_meta($post->ID, "listing-image", true);

              if($img != null) {
                echo '<div class="img-container" title="'.get_the_title($post->ID).'" style="background-image: url('.$img.')"><img src="'.$img.'" alt="'.get_the_title($post->ID).'" /></div>';
              }
            ?>
            <?php the_title() ?>
          </a>
        </h2>
      </header>
      <div class="entry-summary">
        <?php the_excerpt() ?>
      </div>
    </article>
  <?php endwhile; ?>
  <nav class="post-pages">
    <span class="previous"><?php next_posts_link('&larr; Previous') ?></span>
    <span class="next"><?php previous_posts_link('Next &rarr;') ?></span>
  </nav>
</section>
