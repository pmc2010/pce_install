

<!-- WordPress Code -->

<?php
/* Short and sweet */
define('WP_USE_THEMES',false);
require('wp/wp-blog-header.php');
/* The Loop (for generating the posts) */
if (have_posts()) :
  while (have_posts()) :
     the_post();
?>

<!-- Post Title -->
<h2 id="post-<?php the_ID(); ?>">
<a href="<?php the_permalink() ?>
" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
<?php the_title(); ?></a></h2>

<!-- Post Date -->
<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>

<!-- Post Content -->
<?php the_content(); ?>

<!-- Additional Data -->
<p class="postmetadata">
Posted in <?php the_category(', ') ?>
<strong>|</strong>
<?php edit_post_link('Edit','','<strong>|</strong>'); ?>  
<?php comments_popup_link('No Comments >>', '1 Comment >>', '% Comments >>'); ?></p><?php
 endwhile; 
endif; 
?><!-- End WordPress Code -->