<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

  <?php
    global $wpdb;
  ?>

  <?php
    $comment_id = $_GET['comment_id'];
    if (in_array('administrator',  wp_get_current_user()->roles) && !empty($comment_id)) {
      $query = "UPDATE wp_comments SET comment_approved = 1 WHERE comment_ID = %d";
      $sql = $wpdb->prepare($query, [$comment_id]);
      $wpdb->query($sql);
      echo "Comment has been approved!";
    }
    else if (!in_array('administrator',  wp_get_current_user()->roles)){
      echo "You are not allowed to approve comments!";
    }


  ?>

  <h1>Custom Comment Approval</h1>
  <?php
    $query = "SELECT * from wp_comments WHERE comment_approved = 0";
    $results = $wpdb->get_results($query);
  ?>

  <ul>
  <?php foreach ($results as $comment): ?>
    <li>Comment: <?php echo $comment->comment_content ?> - <a href="/csrf-example?comment_id=<?php echo $comment->comment_ID ?>">Approve</a></li>
  <?php endforeach ?>
  </ul>

<?php endwhile; ?>
