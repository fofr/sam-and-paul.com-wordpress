<?php while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class('article') ?> role="main">
  <header>
    <h1 class="main-content-title single-title entry-title">
      <?php the_title() ?>
    </h1>
  </header>

  <?php $pageArgs = array(
    'before'   => '<nav class="pages pages-top">' . 'Pages:',
    'after'  => '</nav>',
    'next_or_number'   => 'number',
    'pagelink'   => '<span>%</span>');
  ?>

  <?php $nextPageArgs = array(
    'before'   => '<nav class="nextPage clearfix">',
    'after'  => '</nav>',
    'next_or_number'   => 'next',
    'nextpagelink'   => '<span class="next">Next page &rarr;</span>',
    'previouspagelink' => '<span class="previous">&larr; Previous page</span>');
  ?>

  <?php wp_link_pages($pageArgs) ?>

  <div class="meta">
    <time datetime="<?php the_time('Y-m-d\TH:i:sP') ?>" class="entry-date published strong">
      <span class="day"><?php the_time('d') ?></span>
      <span class="month"><?php the_time('M') ?></span>
      <a href="/<?php the_time('Y') ?>/" class="year" title="<?php the_time('Y') ?> archive"><?php the_time('Y') ?></a>
    </time>
    <?php
      $nepo = get_next_post();
      if($nepo) {
        $nepoid = $nepo->ID;
        $next_post_url = get_permalink($nepoid);
        $next_post_title = $nepo->post_title;
      }

      $prpo = get_previous_post();
      if($prpo) {
        $prpoid = $prpo->ID;
        $prev_post_url = get_permalink($prpoid);
        $prev_post_title = $prpo->post_title;
      }
    ?>

    <nav class="postsPush">
      <?php if ($nepo != null) { ?>
        <p>
          Next post &rarr;<br/>
          <a class="strong" href="<?php echo $next_post_url; ?>"><?php echo $next_post_title; ?></a>
        </p>
      <?php } ?>
      <?php if ($prpo != null) { ?>
        <p>
          &larr; Previous post<br/>
          <a class="strong" href="<?php echo $prev_post_url; ?>"><?php echo $prev_post_title; ?></a>
        </p>
      <?php } ?>
    </nav>
  </div>
  <div class="single-entry-content entry-content">
    <?php the_content(); ?>
    <?php wp_link_pages($nextPageArgs) ?>
  </div>

  <?php $pageArgs['before'] = '<nav class="pages pages-bottom">' ?>
  <?php wp_link_pages($pageArgs) ?>
</article>
<?php endwhile; ?>
<?php comments_template() ?>
