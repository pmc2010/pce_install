<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $add_page_name=$_POST['add_page_name'];
 $add_page_title=$_POST['add_page_title'];

?>

<?php
 //delete checked pages
 if(isset($submitted))
 {
 db_connect();

 $data = mysql_query("SELECT * FROM pages order by page_title");
  
 $num_results = mysql_num_rows($data);

 for($i=0; $i<5; $i++)
 {
  $row = mysql_fetch_array($data);
 }

 for($i=5; $i<($num_results); $i++)
 {
  $row = mysql_fetch_array($data);
  $temp_data = "delete_".$row['page_name'];
  
  if($_POST[$temp_data] == "checked")
  {
   
   $directory = "../";
   $myFile = $directory.$row['page_name'].".php";
   unlink($myFile);

   /* Remove WordPress page */
   /* Short and sweet */
   $temp_page = $page;
   define('WP_USE_THEMES', false);
   require('../wp/wp-blog-header.php');
   wp_delete_post($row['page_id']);
   $page = $temp_page;
   /* End Remove WordPress page */

   db_connect();
   mysql_query("DELETE FROM pages WHERE page_name='$row[page_name]' ") or die(mysql_error());
   
  }
 }
  
  }

?>

<?php

 if(($add_page_name != '') && ($add_page_title != ''))
 {
 //create new .php file for this page
 $directory="../";
 $myFile = "dyn_".$add_page_name.".php";
 $fh = fopen($directory.$myFile, 'w') or die("can't open file");

 $stringData = "<?php\n\n";
 fwrite($fh, $stringData);

 $stringData = " db_connect();\n\n";
 fwrite($fh, $stringData);

 $stringData = "//Get page data\n";
 fwrite($fh, $stringData);

 $stringData = " \$data = mysql_query(\"SELECT * FROM pages where page_name='dyn_\$page' \");\n\n";
 fwrite($fh, $stringData);

 $stringData = " \$row = mysql_fetch_array(\$data);\n\n";
 fwrite($fh, $stringData);

 $stringData = " \$content = \$row['content'];\n";
 fwrite($fh, $stringData);

 $stringData = " \$_GET['page_id'] = \$row['page_id'];\n";
 fwrite($fh, $stringData);

 $stringData = " \$allow_comments = \$row['allow_comments'];\n";
 fwrite($fh, $stringData);
/*
 $stringData = " echo \$mixed_content->parse(\$content);\n\n"; 
 fwrite($fh, $stringData);
 */
 /*
 $stringData = " echo \$content;\n\n";
 fwrite($fh, $stringData);
 */

 $stringData = " if(\$allow_comments == '1')\n";
 fwrite($fh, $stringData);

 $stringData = "  {\n";
 fwrite($fh, $stringData);

 $stringData = "?>\n\n";
 fwrite($fh, $stringData);

 $stringData = "<!-- WordPress Code -->\n\n";
 fwrite($fh, $stringData);

 $stringData = "<?php\n";
 fwrite($fh, $stringData);

 $stringData = "/* Short and sweet */\n";
 fwrite($fh, $stringData);

 $stringData = "define('WP_USE_THEMES',false);\n";
 fwrite($fh, $stringData);

 $stringData = "require('wp/wp-blog-header.php');\n";
 fwrite($fh, $stringData);

 $stringData = "?>\n\n";
 fwrite($fh, $stringData);

 $stringData = "<hr />\n";
 fwrite($fh, $stringData);

 $stringData = "<div id=\"primary\" class=\"site-content\">\n";
 fwrite($fh, $stringData);

 $stringData = "<div id=\"content\" role=\"main\">\n\n";
 fwrite($fh, $stringData);

 $stringData = "<?php while ( have_posts() ) : the_post(); ?>\n";
 fwrite($fh, $stringData);

 $stringData = "<?php //get_template_part( 'content', 'page' ); ?>\n";
 fwrite($fh, $stringData);

 $stringData = "<?php comments_template( '', true ); ?>\n";
 fwrite($fh, $stringData);

 $stringData = "<?php endwhile; // end of the loop. ?>\n\n";
 fwrite($fh, $stringData);

 $stringData = "</div><!-- #content -->\n";
 fwrite($fh, $stringData);

 $stringData = "</div><!-- #primary -->\n";
 fwrite($fh, $stringData);

 $stringData = "<!-- End WordPress Code -->\n\n";
 fwrite($fh, $stringData);

 $stringData = "<?php\n";
 fwrite($fh, $stringData);

 $stringData = "}\n";
 fwrite($fh, $stringData);

 $stringData = "?>";
 fwrite($fh, $stringData);

 fclose($fh);

 //add new WordPress page
 /* Short and sweet */
 define('WP_USE_THEMES', false);
 require('../wp/wp-blog-header.php');
 global $user_ID;

 $temp_page = $page; //PCE edit b/c WordPress uses the same page variable

 unset($page);
 $page = array();
 $page['post_type']    = 'page';
 $page['post_content'] = '';
 $page['post_parent']  = 0;
 $page['post_author']  = $user_ID;
 $page['post_status']  = 'publish';
 $page['post_title']   = $add_page_title;
 $page = apply_filters('yourplugin_add_new_page', $page, 'teams');
 $pageid = wp_insert_post ($page);
 if ($pageid == 0) { echo "add WordPress page failed..."; /* Add Page Failed */ }
 unset($page);
 $page = $temp_page;

 //add new page info to pages table
 db_connect();
 //add page info to pages table
 
  mysql_query("INSERT INTO pages
  (
   page_id,
   page_name,
   page_title,
   seo_title,
   seo_description,
   seo_keywords,
   content,
   allow_comments
  )
  VALUES
  (
   '$pageid',
   'dyn_$add_page_name',
   '$add_page_title',
   '',
   '',
   '',
   '',
   'false'
  ) ")
  or die(mysql_error());
 

 }
 
?>

<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM pages order by page_title");
  
 $num_results = mysql_num_rows($data);

?>

<form action="?page=add-delete_page" method="post" name="add-delete_page">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
				<tr>
					<th colspan="4">
						<h3>
							ADD/DELETE PAGES</h3>
					</th>
				</tr>
				<tr>
					<td colspan="4" style="background-color: black;">
						<div style="text-align: center; color:white;">
             Current Pages
            </div>
					</td>
				</tr>
				<tr height="5">
				</tr>
				<tr>
          <td style="width:200px;">
           &nbsp;
          </td>
					<td style="width: 30px; text-align: right;">
					 <u>Delete?</u></td>
					<td style="width: 200px; text-align: left; padding-left:35px;">
           <u>Page Name</u>
          </td>
					<td style="text-align: left;">
           <u>Page Title</u>
          </td>
				</tr>
<?php

for($i=0; $i<5; $i++)
{
 $row = mysql_fetch_array($data);
}

for($i=5; $i<($num_results); $i++)
{
 $row = mysql_fetch_array($data);
 $pagename = substr($row['page_name'],4);
?>
				<tr>
          <td style="width:200px;">
           &nbsp;
          </td>
					<td style="width: 30px; text-align: center;">
						<input type="checkbox" name="delete_<?=$row['page_name'];?>" value="checked"></td>
					<td style="width: 200px; text-align: left; border:0px solid #000000; padding-left:35px;">
					 <?=$pagename;?>
          </td>
					<td style="text-align: left; border:0px solid #000000;">
           <?=$row['page_title'];?>
          </td>
				</tr>
<?php
 /*
 echo "<li><a href=\"/admin/index.php?page=seo&pagelink=".$row['page_name']."&pagename=".$row['page_title']."\">".$row['page_title']."</a></li>";
 */
}

?>
				</tr>
				<tr height="20">
				</tr>
				<tr>
					<td colspan="4" style="background-color: black;">
						<div style="text-align: center; color:white;">
             Add a Page
            </div>
					</td>
				</tr>
				<tr height="5">
				</tr>
				<tr>
          <td style="width:200px;">
           &nbsp;
          </td>
					<td style="width: 30px; text-align: right;">
					<td style="width: 200px; text-align: left; padding-left:35px;">
           <u>Page Name</u>
          </td>
					<td style="text-align: left;">
           <u>Page Title</u>
          </td>
				</tr>
				<tr>
          <td style="width:200px;">
           &nbsp;
          </td>
					<td style="width: 30px; text-align: right;">
					<td style="width: 200px; text-align: left; padding-left:35px;">
           <input maxlength="100" name="add_page_name" size="20" type="text" />
          </td>
					<td style="text-align: left;">
           <input maxlength="100" name="add_page_title" size="20" type="text" />
          </td>
				</tr>


				<tr>
					<td colspan="4">
						<p style="text-align: center;">
							<input name="submit1" type="submit" value="Update!" /> <input name="submitted" type="hidden" value="1" /></p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</form>

