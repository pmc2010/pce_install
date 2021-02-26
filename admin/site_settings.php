<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_ss_customheader=$_POST['ss_customheader'];
 $up_ss_email=$_POST['ss_email'];
 $display_labels=$_POST['display_labels'];
 $up_seo_title = $_POST['up_seo_title'];
 $up_seo_description = $_POST['up_seo_description'];
 $up_seo_keywords = $_POST['up_seo_keywords'];
 $up_seo_googleanalytics = $_POST['up_seo_googleanalytics'];

?>

<?php


//update style_master database
 if(isset($submitted))
 {
 
 db_connect();

  //mysql_query("UPDATE site_settings SET CustomHeader = '$up_ss_customheader' ");

  mysql_query("UPDATE site_settings SET Email = '$up_ss_email' ");

  if($display_labels == "checked")
  {
   mysql_query("UPDATE style_master SET Labels = '' ");
  }
  else
  {
   mysql_query("UPDATE style_master SET Labels = 'none' ");
  }

  mysql_query("UPDATE site_settings SET seo_title = '$up_seo_title' ");
  mysql_query("UPDATE site_settings SET seo_description = '$up_seo_description' ");
  mysql_query("UPDATE site_settings SET seo_keywords = '$up_seo_keywords' ");
  mysql_query("UPDATE site_settings SET seo_googleanalytics = '$up_seo_googleanalytics' ");

  //Update custom header file
 $directory="../";
 $myFile = "custom_header.php";
 $fh = fopen($directory.$myFile, 'w') or die("can't open file"); 
 
 
 $pattern[0] = '/\n/';
 $replace[0] = '';
 $up_ss_customheader = preg_replace($pattern,$replace,$up_ss_customheader); 
 $stringData = $up_ss_customheader; 
 fwrite($fh, $stringData);
 
 }
?>

<?php
	//Retrieve custom header file
	$directory="../";
	$myFile = "custom_header.php";
	$fh = fopen($directory.$myFile, 'r') or die("can't open file");
	$custom_header = '';

	while(! feof($fh)){
	  $custom_header .= fgets($fh). "\n";
	}

	fclose($myFile);
?>

<?php

//get info
 db_connect();
  
 $data = mysql_query("SELECT * FROM site_settings");
  
 $row = mysql_fetch_array($data);
	
 $ss_email	=$row['Email'];
 $seo_title	=$row['seo_title'];
 $seo_description	=$row['seo_description'];
 $seo_keywords	=$row['seo_keywords'];
 $seo_googleanalytics	=$row['seo_googleanalytics'];

 $data = mysql_query("SELECT * FROM style_master");
 $row = mysql_fetch_array($data);

 if($row['Labels'] == 'none')
 {
  $display_labels = "";
 }
 else
 {
  $display_labels = "checked='yes'";
 }


?>



<form action="?page=site_settings" method="post" name="site_settings">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
				<tr>
					<th colspan="2">
						<h3>
							SITE SETTINGS</h3>
					</th>
				</tr>
				<tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center;">
							&nbsp;</div>
					</td>
				</tr>
				<tr height="5">
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Custom Header:</td>
					<td>
						<!-- <textarea cols="40" name="ss_customheader" rows="10" ><?=$ss_customheader;?></textarea> -->
						<textarea cols="40" name="ss_customheader" rows="10" ><?=$custom_header;?></textarea>
					</td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Email:</td>
					<td>
						<input maxlength="100" name="ss_email" size="40" type="text" value="<?=$ss_email;?>" /></td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						<input type="checkbox" name="display_labels" value="checked" <?=$display_labels;?> ></td>
					<td>
						Display Labels</td>
				</tr>
				<tr>
				<td colspan="2" style="text-align:center;"><a href="?page=change_pw">Change Password</a>
				</td>
				</tr>
				<tr height="5">
				</tr>
				<tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center; color:white;">SEO Defaults
            </div>
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
  				<tr>
					<td style="width: 50%; text-align: right;">
						Google Analytics ID:</td>
					<td>
						<input maxlength="30" name="up_seo_googleanalytics" size="20" type="text" value="<?=$seo_googleanalytics;?>" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<p style="text-align: center;">
							<input name="submit1" type="submit" value="Update!" /> <input name="submitted" type="hidden" value="1" /></p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</form>

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