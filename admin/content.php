<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $up_allow_comments=$_POST['up_allow_comments'];
 $up_seo_title = $_POST['up_seo_title'];
 $up_seo_description = $_POST['up_seo_description'];
 $up_seo_keywords = $_POST['up_seo_keywords'];

 //These are for cleaning up content before writing page changes
	$mixed_php_content = new PhpStringParser();
	$mixed_javascript_content = new JavascriptStringParser();
?>

<div>

<?php

 if(isset($pagelink))
 {
  db_connect();

  //update page database

 if(isset($editor1))
 {
		//echo "<textarea rows='10' cols='40'>".$editor1."</textarea>";
		$patternsout[0] = '/&quot;/';
		$patternsout[1] = '/&gt;/';
		$patternsout[2] = '/&nbsp;/';
		$patternsout[3] = '/&#39;/';
		$patternsout[4] = '/&apos;/';
		$patternsout[5] = '/&lt;/';
		
		$replacementsout[0] = '[quot]';
		$replacementsout[1] = '[gt]';
		$replacementsout[2] = '[nbsp]';
		$replacementsout[3] = '[apos]';
		$replacementsout[4] = '[apos]';
		$replacementsout[5] = '[lt]';

		$editor1_mod = preg_replace($patternsout,$replacementsout,$editor1);
		//echo "<textarea rows='10' cols='40'>".$editor1."</textarea>";
		
		$patternsouttwo[0] = '/"/';
		$patternsouttwo[1] = '/>/';
		$patternsouttwo[2] = '/ /';
		$patternsouttwo[3] = '/\'/';
		$patternsouttwo[4] = '/</';

		$replacementsouttwo[0] = '&quot;';
		$replacementsouttwo[1] = '&gt;';
		$replacementsouttwo[2] = '&nbsp;';
		$replacementsouttwo[3] = '&apos;';
		$replacementsouttwo[4] = '&lt;';

		$editor1_mod = preg_replace($patternsouttwo,$replacementsouttwo,$editor1_mod);
		//echo "<textarea rows='10' cols='40'>".$editor1."</textarea>";
		
 //Update database
  mysql_query("UPDATE pages SET seo_title = '$up_seo_title' WHERE page_name = '$pagelink' ");

  mysql_query("UPDATE pages SET seo_description = '$up_seo_description' WHERE page_name = '$pagelink' ");

  mysql_query("UPDATE pages SET seo_keywords = '$up_seo_keywords' WHERE page_name = '$pagelink' ");

  mysql_query("UPDATE pages SET content = '$editor1_mod' WHERE page_name = '$pagelink' ");

  if($up_allow_comments == "checked")
  {
mysql_query("UPDATE pages SET allow_comments = '1' WHERE page_name = '$pagelink' ");
  }
  else
  {
mysql_query("UPDATE pages SET allow_comments = '0' WHERE page_name = '$pagelink' ");
  }

  //Update file
	$editor1 = $mixed_php_content->parse($editor1);
	$editor1 = $mixed_javascript_content->parse($editor1); 
	
//create new .php file for this page
 $directory="../";
 $myFile = $pagelink.".php";
 $fh = fopen($directory.$myFile, 'w') or die("can't open file");

 switch ($pagelink)
 {
	case "dyn_blog":
	/*
		$stringData = "<?php\n\n";
		$stringData .= " db_connect();\n\n";
		$stringData .= "//Get page data\n";
		$stringData .= " \$data = mysql_query(\"SELECT * FROM pages where page_name='dyn_\$page' \");\n\n";
		$stringData .= " \$row = mysql_fetch_array(\$data);\n\n";
		$stringData .= " \$content = \$row['content'];\n";
		$stringData .= "?>\n"; 
	*/
		$stringData = $editor1."\n\n"; 
		$stringData .= "<!-- WordPress Code -->\n\n";
		$stringData .= "<?php\n";
		$stringData .= "/* Short and sweet */\n";
		$stringData .= "define('WP_USE_THEMES',false);\n";
		$stringData .= "require('wp/wp-blog-header.php');\n";
		$stringData .= "/* The Loop (for generating the posts) */\n";	
		$stringData .= "if (have_posts()) :\n";
		$stringData .= "  while (have_posts()) :\n";
		$stringData .= "     the_post();\n";
		$stringData .= "?>\n\n";
		$stringData .= "<!-- Post Title -->\n";
		$stringData .= "<h2 id=\"post-<?php the_ID(); ?>\">\n";
		$stringData .= "<a href=\"<?php the_permalink() ?>\n\" rel=\"bookmark\" title=\"Permanent Link to <?php the_title(); ?>\">\n";
		$stringData .= "<?php the_title(); ?></a></h2>\n\n";
		$stringData .= "<!-- Post Date -->\n";
		$stringData .= "<small><?php the_time('F jS, Y') ?> <!-- by <?php the_author() ?> --></small>\n\n";
		$stringData .= "<!-- Post Content -->\n";
		$stringData .= "<?php the_content(); ?>\n\n";
		$stringData .= "<!-- Additional Data -->\n";
		$stringData .= "<p class=\"postmetadata\">\n";
		$stringData .= "Posted in <?php the_category(', ') ?>\n";
		$stringData .= "<strong>|</strong>\n";
		$stringData .= "<?php edit_post_link('Edit','','<strong>|</strong>'); ?>  \n";
		$stringData .= "<?php comments_popup_link('No Comments >>', '1 Comment >>', '% Comments >>'); ?></p>";
		$stringData .= "<?php\n";
		$stringData .= " endwhile; \n";
		$stringData .= "endif; \n";
		$stringData .= "?>";
		$stringData .= "<!-- End WordPress Code -->";
			
	break;
	case "dyn_ffloat":
		$stringData = "<div class=\"labels\">\n";
		$stringData .= "floating footer\n";
		$stringData .= "</div>\n\n";
/*
		$stringData .= "<?php\n\n";
		$stringData .= " db_connect();\n\n";
		$stringData .= "//Get page data\n";
		$stringData .= " \$data = mysql_query(\"SELECT * FROM pages where page_name='dyn_ffloat' \");\n\n";
		$stringData .= " \$row = mysql_fetch_array(\$data);\n\n";
		$stringData .= " \$content = \$row['content'];\n";
		$stringData .= "?>\n"; 
*/
		$stringData .= $editor1."\n\n"; 
	break;
	case "dyn_hfloat":
		$stringData = "<div class=\"labels\">\n";
		$stringData .= "floating header\n";
		$stringData .= "</div>\n\n";
/*
		$stringData .= "<?php\n\n";
		$stringData .= " db_connect();\n\n";
		$stringData .= "//Get page data\n";
		$stringData .= " \$data = mysql_query(\"SELECT * FROM pages where page_name='dyn_hfloat' \");\n\n";
		$stringData .= " \$row = mysql_fetch_array(\$data);\n\n";
		$stringData .= " \$content = \$row['content'];\n";
		$stringData .= "?>\n"; 
*/
		$stringData .= $editor1."\n\n";
		$stringData .= "<?php\n";
		$stringData .= "if(file_exists('dyn_dynmenu.php'))\n";
		$stringData .= "{\n";
		$stringData .= "include('dyn_dynmenu.php');\n";
		$stringData .= "}\n";
		$stringData .= "?>";
	break;
	case "dyn_links":
		$stringData = "<div class=\"labels\">\n";
		$stringData .= "links menu\n";
		$stringData .= "</div>\n\n";
		$stringData .= "<TABLE valign=\"top\" BORDER=\"0px\" WIDTH=\"100%\" CELLSPACING=\"0\" CELLPADDING=\"0\">\n";
		$stringData .= "<tr>\n";
		$stringData .= "<td style=\"text-align:center;\" >\n";
		$stringData .= "<?php\n\n";
		$stringData .= "db_connect();\n";
		$stringData .= "\$result = mysql_query(\"SELECT * FROM links \");\n\n";
		$stringData .= "\$num_results = mysql_num_rows(\$result);\n\n";
		$stringData .= "for(\$i=0; \$i<(\$num_results-1); \$i++)\n";
		$stringData .= "{\n";
		$stringData .= "// store the record of the \"links\" table into \$row\n";
		$stringData .= "\$row = mysql_fetch_array( \$result );\n";
		$stringData .= "echo \"<a href=\\\"\".\$row['Link'].\"\\\">\".\$row['Title'].\"</a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp\";\n";
		$stringData .= "}\n\n";
		$stringData .= "\$row = mysql_fetch_array( \$result );\n";
		$stringData .= "echo \"<a href=\\\"\".\$row['Link'].\"\\\">\".\$row['Title'].\"</a>\";\n";
		$stringData .= "?>\n";
		$stringData .= "</td>\n";
		$stringData .= "</tr>\n";
		$stringData .= "<tr>\n";
		$stringData .= "<td>\n";
/*
		$stringData .= "<?php\n\n";
		$stringData .= " db_connect();\n\n";
		$stringData .= "//Get page data\n";
		$stringData .= " \$data = mysql_query(\"SELECT * FROM pages where page_name='dyn_links' \");\n\n";
		$stringData .= " \$row = mysql_fetch_array(\$data);\n\n";
		$stringData .= " \$content = \$row['content'];\n";
		$stringData .= "?>\n"; 
*/
		$stringData .= $editor1."\n\n"; 
		$stringData .= "</td>\n";
		$stringData .= "</tr>\n";
		$stringData .= "<tr height='10px'>\n";
		$stringData .= "</tr>\n";
		$stringData .= "<tr>\n";
		$stringData .= "<td style='text-align:center;'>\n";
		$stringData .= "<a href='admin/index.php'><img border='0' src='admin/images/admin.png'></a>\n";
		$stringData .= "</td>\n";
		$stringData .= "</tr>\n";
		$stringData .= "</table>";
	break;
	case "dyn_navbar":
		$stringData = "<div class=\"labels\">\n";
		$stringData .= "left navbar\n";
		$stringData .= "</div>\n\n";
/*
		$stringData .= "<?php\n\n";
		$stringData .= " db_connect();\n\n";
		$stringData .= "//Get page data\n";
		$stringData .= " \$data = mysql_query(\"SELECT * FROM pages where page_name='dyn_navbar' \");\n\n";
		$stringData .= " \$row = mysql_fetch_array(\$data);\n\n";
		$stringData .= " \$content = \$row['content'];\n";
		$stringData .= "?>\n"; 
*/
		$stringData .= $editor1."\n\n";	
	break;
	case "dyn_navbar_right":
		$stringData = "<div class=\"labels\">\n";
		$stringData .= "right navbar\n";
		$stringData .= "</div>\n\n";
/*
		$stringData .= "<?php\n\n";
		$stringData .= " db_connect();\n\n";
		$stringData .= "//Get page data\n";
		$stringData .= " \$data = mysql_query(\"SELECT * FROM pages where page_name='dyn_navbar_right' \");\n\n";
		$stringData .= " \$row = mysql_fetch_array(\$data);\n\n";
		$stringData .= " \$content = \$row['content'];\n";
		$stringData .= "?>\n"; 
*/
		$stringData .= $editor1."\n\n";	
	break;	
	case "dyn_wordpress_nav":
		$stringData = "<!-- WordPress Code -->\n";
		$stringData .= "<?php\n";
		$stringData .= "/* Short and sweet */\n";
		$stringData .= "define('WP_USE_THEMES', false);\n";
		$stringData .= "require('wp/wp-blog-header.php');\n";
		$stringData .= "?>\n";
		$stringData .= "<div id=\"secondary\" class=\"widget-area\" role=\"complementary\">\n";
		$stringData .= "<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) :  ?>\n";
		$stringData .= "<aside id=\"archives\" class=\"widget\">";
		$stringData .= "<h3 class=\"widget-title\"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>\n";
		$stringData .= "<ul><?php wp_get_archives( array( 'type' => 'monthly' ) ); ?></ul>\n";
		$stringData .= "</aside>\n";
		$stringData .= "<aside id=\"meta\" class=\"widget\">\n";
		$stringData .= "<h3 class=\"widget-title\"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>\n";
		$stringData .= "<ul>\n";
		$stringData .= "<?php wp_register(); ?>\n";
		$stringData .= "<li><?php wp_loginout(); ?></li>\n";
		$stringData .= "<?php wp_meta(); ?>\n";
		$stringData .= "</ul>\n";
		$stringData .= "</aside>\n";
		$stringData .= "<?php endif; // end sidebar widget area ?>\n";
		$stringData .= "<!-- End WordPress Code -->\n";
/*
		$stringData .= "<?php\n\n";
		$stringData .= " db_connect();\n\n";
		$stringData .= "//Get page data\n";
		$stringData .= " \$data = mysql_query(\"SELECT * FROM pages where page_name='dyn_\$page' \");\n\n";
		$stringData .= " \$row = mysql_fetch_array(\$data);\n\n";
		$stringData .= " \$content = \$row['content'];\n";
		$stringData .= "?>\n"; 
*/
		$stringData .= $editor1."\n\n";			
		break;
	default:

		$stringData = "<?php\n\n";
		$stringData .= " db_connect();\n\n";
		$stringData .= "//Get page data\n";
		$stringData .= " \$data = mysql_query(\"SELECT * FROM pages where page_name='dyn_\$page' \");\n\n";
		$stringData .= " \$row = mysql_fetch_array(\$data);\n\n";
/*
		$stringData .= " \$content = \$row['content'];\n";
*/
		$stringData .= " \$_GET['page_id'] = \$row['page_id'];\n";
		$stringData .= " \$allow_comments = \$row['allow_comments'];\n";
		$stringData .= "?>\n"; 
		$stringData .= $editor1."\n\n"; 
		$stringData .= "<?php\n"; 
		$stringData .= " if(\$allow_comments == '1')\n";
		$stringData .= "  {\n";
		$stringData .= "?>\n\n";
		$stringData .= "<!-- WordPress Code -->\n\n";
		$stringData .= "<?php\n";
		$stringData .= "/* Short and sweet */\n";
		$stringData .= "define('WP_USE_THEMES',false);\n";
		$stringData .= "require('wp/wp-blog-header.php');\n";
		$stringData .= "?>\n\n";
		$stringData .= "<hr />\n";
		$stringData .= "<div id=\"primary\" class=\"site-content\">\n";
		$stringData .= "<div id=\"content\" role=\"main\">\n\n";
		$stringData .= "<?php while ( have_posts() ) : the_post(); ?>\n";
		$stringData .= "<?php //get_template_part( 'content', 'page' ); ?>\n";
		$stringData .= "<?php comments_template( '', true ); ?>\n";
		$stringData .= "<?php endwhile; // end of the loop. ?>\n\n";
		$stringData .= "</div><!-- #content -->\n";
		$stringData .= "</div><!-- #primary -->\n";
		$stringData .= "<!-- End WordPress Code -->\n\n";
		$stringData .= "<?php\n";
		$stringData .= "}\n";
		$stringData .= "?>";

 }
 
	fwrite($fh, $stringData);
	fclose($fh);  

  echo "$pagelink has been updated...";
 }
  
  //Get page information
  $data = mysql_query("SELECT * FROM pages where page_name='$pagelink' ");
  $row = mysql_fetch_array($data);
  $page_id = $row['page_id'];
  $title = $row['page_title'];
  $seo_title = $row['seo_title'];
  $seo_description = $row['seo_description'];
  $seo_keywords = $row['seo_keywords'];
  $content = $row['content'];
	//echo "<textarea rows='10' cols='40'>".$content."</textarea>";  
	$patternsin[0] = '/&quot;/';
	$patternsin[1] = '/&gt;/';
	$patternsin[2] = '/&nbsp;/';
	$patternsin[3] = '/&#39;/';
	$patternsin[4] = '/&apos;/';
	$patternsin[5] = '/&lt;/';

	$replacementsin[0] = '"';
	$replacementsin[1] = '>';
	$replacementsin[2] = ' ';
	$replacementsin[3] = '\'';
	$replacementsin[4] = '\'';
	$replacementsin[5] = '<';

	$content = preg_replace($patternsin,$replacementsin,$content);
	//echo "<textarea rows='10' cols='40'>".$content."</textarea>";
	$patternsintwo[0] = '/\[quot\]/';
	$patternsintwo[1] = '/\[gt\]/';
	$patternsintwo[2] = '/\[nbsp\]/';
	$patternsintwo[3] = '/\[apos\]/';
	$patternsintwo[4] = '/\[lt\]/';

	$replacementsintwo[0] = '&amp;quot;';
	$replacementsintwo[1] = '&amp;gt;';
	$replacementsintwo[2] = '&amp;nbsp;';
	$replacementsintwo[3] = '&amp;apos;';
	$replacementsintwo[4] = '&amp;lt;';

	$content = preg_replace($patternsintwo,$replacementsintwo,$content);
	//echo "<textarea rows='10' cols='40'>".$content."</textarea>";		
  if($row['allow_comments'] == '0')
  {
   $allow_comments = "";
  }
  else
  {
   $allow_comments = "checked='yes'";
  }

 

 //Get page title
 if($pagelink == "dyn_ffloat")
 {
  $content_title = "Floating Footer";
 }
 elseif($pagelink == "dyn_hfloat")
 {
  $content_title = "Floating Header";
 }
 elseif($pagelink == "dyn_links")
 {
  $content_title = "Links Menu";
 }
 elseif($pagelink == "dyn_navbar")
 {
  $content_title = "Navbar";
 }
 elseif($pagelink == "dyn_navbar_right")
 {
  $content_title = "Right Navbar";
 }
 else
 {
  $content_title = $title." Page";
 }
?>    

<form name="form1" method="post" action="index.php?page=content&pagelink=<?=$pagelink?>" >

<table border="0" width="100%">
 <tr>
  <td colspan="2" style="text-align:center; font-weight:bold; font-family: arial, sans-serif; font-size:18px;">
   <?php
    echo $content_title." Content";
   ?>
  </td>
 </tr>

<?php
 if($pagelink == "dyn_ffloat" || $pagelink == "dyn_hfloat" || $pagelink == "dyn_navbar" || $pagelink == "dyn_navbar_right" || $pagelink == "dyn_links")
 {
 }
 else
 {
?>

 <tr>
  <td width="50%" style="text-align:right; font-family:arial, sans-serif; font-size:12px;">
   <input type="checkbox" name="up_allow_comments" value="checked" <?=$allow_comments?> >
  </td>
  <td style="text-align:left; font-family:arial, sans-serif; font-size:12px;">
   Allow Comments
  </td>
 </tr>
 <tr height="5">
	</tr>
	<tr>
		<td style="width: 50%; text-align: right;">
			Page Title:</td>
		<td>
			<input maxlength="100" name="up_seo_title" size="40" type="text" value="<?=$seo_title;?>" /></td>
	</tr>
	<tr>
		<td style="width: 50%; text-align: right;">
			Description:</td>
		<td>
			<textarea cols="40" name="up_seo_description" rows="4" ><?=$seo_description;?></textarea></td>
	</tr>
	<tr>
		<td style="width: 50%; text-align: right;">
			Keywords:</td>
		<td>
 		 <textarea cols="40" name="up_seo_keywords" rows="4" ><?=$seo_keywords;?></textarea></td>
	</tr>

<?php
 }
?>

</table>

<p>
 <textarea class="ckeditor" id="editor1" name="editor1" ><?=$content?></textarea>
  <script type="text/javascript">
   CKEDITOR.replace( 'editor1',
   {
    enterMode : CKEDITOR.ENTER_DIV
   });
  </script>
 </p>
</form>

<?php
 }
 else
 {
  echo "Please select a page on the left to view the content!";
 }

?>

</div>

<?php

class PhpStringParser
{

    protected function eval_block($matches)
    {
	
		foreach($matches as $match){
			//echo "<textarea cols='40' rows='10'>".$match."</textarea>";
		}

		$patternstwo[0] = '/\<div\>/';
		$patternstwo[1] = '/\<\/div\>/';
		
		$replacementstwo[0] = '';
		$replacementstwo[1] = '';
		
		$matches[0] = preg_replace($patternstwo,$replacementstwo,$matches[0]);

		$patternsthree[0] = '/&quot;/';
		$patternsthree[1] = '/&gt;/';
		$patternsthree[2] = '/&nbsp;/';
		$patternsthree[3] = '/&#39;/';
		$patternsthree[4] = '/&apos;/';

		$replacementsthree[0] = '"';
		$replacementsthree[1] = '>';
		$replacementsthree[2] = ' ';
		$replacementsthree[3] = '\'';
		$replacementsthree[4] = '\'';
		
		$matches[0] = preg_replace($patternsthree,$replacementsthree,$matches[0]);
		
        return $matches[0];
    }

    public function parse($string)
    {
	
		$patterns[0] = '/\[\?php/';
		$patterns[1] = '/\?\]/';


		$replacements[0] = '<?php';
		$replacements[1] = '?>';

	
		$string = preg_replace($patterns,$replacements,$string);
		
		//echo "<textarea cols='40' rows='10'>".$string."</textarea>";
        //return preg_replace_callback('/(\<\?=|\<\?php=|\<\?php)(.*?)\?\>/', array(&$this, 'eval_block'), $string);
		
		return preg_replace_callback('/(\<\?=|\<\?php=|\<\?php)(.*?)\?\>/ims', array(&$this, 'eval_block'), $string);		
		
		//return $string;
    }
}

class JavascriptStringParser
{

    protected function eval_block($matches)
    {
	
		foreach($matches as $match){
			//echo "<textarea cols='40' rows='10'>".$match."</textarea>";
		}

		$patternstwo[0] = '/\<div\>/';
		$patternstwo[1] = '/\<\/div\>/';
		
		$replacementstwo[0] = '';
		$replacementstwo[1] = '';
		
		$matches[0] = preg_replace($patternstwo,$replacementstwo,$matches[0]);

		$patternsthree[0] = '/&quot;/';
		$patternsthree[1] = '/&gt;/';
		$patternsthree[2] = '/&nbsp;/';
		$patternsthree[3] = '/&#39;/';
		$patternsthree[4] = '/&apos;/';
		$patternsthree[5] = '/&lt;/';

		$replacementsthree[0] = '"';
		$replacementsthree[1] = '>';
		$replacementsthree[2] = ' ';
		$replacementsthree[3] = '\'';
		$replacementsthree[4] = '\'';
		$replacementsthree[5] = '<';
		
		$matches[0] = preg_replace($patternsthree,$replacementsthree,$matches[0]);
		
        return $matches[0];
    }

    public function parse($string)
    {
	
		$patterns[0] = '/\[script/';
		$patterns[1] = '/\[\/script\]/';


		$replacements[0] = '<script';
		$replacements[1] = '</script>';

	
		$string = preg_replace($patterns,$replacements,$string);
		
		//echo "<textarea cols='40' rows='10'>".$string."</textarea>";
        //return preg_replace_callback('/(\<\?=|\<\?php=|\<\?php)(.*?)\?\>/', array(&$this, 'eval_block'), $string);
		
		return preg_replace_callback('/<script(.*?)<\/script>/ims', array(&$this, 'eval_block'), $string);		
		
		//return $string;
    }
}

?>