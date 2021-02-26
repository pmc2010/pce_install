<?php

 db_connect();

//Get page data
 $data = mysql_query("SELECT * FROM pages where page_name='dyn_$page' ");

 $row = mysql_fetch_array($data);

 $_GET['page_id'] = $row['page_id'];
 $allow_comments = $row['allow_comments'];
?>


<?php
 if($allow_comments == '1')
  {
?>

<!-- WordPress Code -->

<?php
/* Short and sweet */
define('WP_USE_THEMES',false);
require('wp/wp-blog-header.php');
?>

<hr />
<div id="primary" class="site-content">
<div id="content" role="main">

<?php while ( have_posts() ) : the_post(); ?>
<?php //get_template_part( 'content', 'page' ); ?>
<?php comments_template( '', true ); ?>
<?php endwhile; // end of the loop. ?>

</div><!-- #content -->
</div><!-- #primary -->
<!-- End WordPress Code -->

<?php
}
?>