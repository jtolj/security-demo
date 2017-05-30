<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>
  <form>
    <input type="text" name="username" id="username" placeholder="Username" />
    <input type="password" name="password" id="password" placeholder="Password" />
    <input type="submit" value="Login" />
  </form>



  <pre>
  <?php
  echo htmlspecialchars(
  "<script type=\"text/javascript\">
  // Some Analytics code
  var _tagManager = [];
  _tagManager.push({'variable_name' : '" . $_GET['campaign_id'] . "'});
  </script>");
  ?>
  </pre>

  <script type="text/javascript">
  // Some Analytics code
  var _tagManager = [];
  var campaignId = '<?php echo $_GET['campaign_id']; ?>';
  _tagManager.push({'variable_name' : campaignId});
  </script>

<?php endwhile; ?>
