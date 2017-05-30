<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <?php
    $type = stripslashes($_GET['type']);

    global $wpdb;
    $query = "SELECT * from wp_posts WHERE post_type = '{$type}' AND post_author = " . get_current_user_id();
    echo "Generated Query: <pre>{$query}</pre>";
    $result = $wpdb->get_results($query);

    echo "<h1>Here's a list of your entries!</h1>";
    echo '<table class="table">';
    echo "<thead><tr><th>ID</th><th>Owner ID</th></th><th>Title</th><th>Status</th></tr></thead>";
    if (!empty($result)) {
      foreach ($result as $item) {
        echo "<tr>";
        echo "<td>{$item->ID}</td><td>{$item->post_author}</td><td>{$item->post_title}</td><td>{$item->post_status}</td>";
        echo "</tr>";
      }
    }
    echo "</table>";
  ?>

<?php endwhile; ?>
