<?php
?>

<!-- WordPress Code -->

<?php
/* Short and sweet */
define('WP_USE_THEMES', false);
require('wp/wp-blog-header.php');
?>


		<div id="secondary" class="widget-area" role="complementary">
			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) :  ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>

		</div>
<!-- End WordPress Code -->

<?php
 db_connect();
  
 $data = mysql_query("SELECT * FROM pages where page_name='dyn_$page' ");
  
 $row = mysql_fetch_array($data);

 $content = $row['content'];


?>