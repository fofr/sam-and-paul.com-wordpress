<!DOCTYPE html>
<!--[if lte IE 8 ]><html lang="en" id="sam-and-paul-com" class="lte-ie8"><![endif]-->
<!--[if (gt IE 8)|!(IE)]><!--><html lang="en" id="sam-and-paul-com"><!--<![endif]-->
<head>
  <meta charset="<?php bloginfo('charset') ?>" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php wp_title('-', true, 'right'); echo esc_html(bloginfo('name')); ?></title>
  <meta name="description" content="Holiday, theatre and cinema blog. Including guides and stories from Madeira, Molyvos on Lesvos in Greece, Barcelona and Cadaques in Spain and Phuket and Chiang Mai in Thailand." />
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <link rel="stylesheet" href="/css/master.css?2">
  <script src="http://use.typekit.com/fdb0guo.js"></script>
  <script>try{Typekit.load();}catch(e){}</script>
  <?php wp_head(); ?>
  <link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url') ?>" title="<?php echo esc_html(bloginfo('name')); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />
</head>

<body <?php body_class('wordpress'); ?>>
  <header class="masthead wrapper">
    <?php if (is_home() && get_query_var('paged') < 2) { ?>
      <h1 class="blog-title">
        <small>The Adventures of</small>
        Samantha &amp; Paul
      </h1>
      <div class="top-bar top-bar-home"></div>
    <?php } else { ?>
      <a class="masthead-title swing" href="/" rel="home" title="The Adventures of Samantha and Paul">
        Samantha <span class="masthead-title-amp">&amp;</span> Paul
      </a>
      <div class="top-bar"></div>
    <?php } ?>
  </header>
  <div class="content wrapper hfeed">
