<?php
 //create short variable names
 $pagelink=$_GET['pagelink'];
 $pagename=$_GET['pagename'];
 $submitted=$_POST['submitted'];
 $up_seo_pagetitle=$_POST['seo_pagetitle'];
 $up_seo_description=$_POST['seo_description'];
 $up_seo_keywords=$_POST['seo_keywords'];
 $up_seo_googleanalytics=$_POST['seo_googleanalytics'];

?>

<?php
//update page database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE seo_$pagelink SET PageTitle = '$up_seo_pagetitle' ");

  mysql_query("UPDATE seo_$pagelink SET Description = '$up_seo_description' ");

  mysql_query("UPDATE seo_$pagelink SET Keywords = '$up_seo_keywords' ");

  mysql_query("UPDATE seo_$pagelink SET GoogleAnalytics = '$up_seo_googleanalytics' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM seo_$pagelink");
  
 $row = mysql_fetch_array($data);

$seo_pagetitle	=$row['PageTitle'];
$seo_description	=$row['Description'];
$seo_keywords	=$row['Keywords'];
$seo_googleanalytics	=$row['GoogleAnalytics'];

?>



<form action="?page=seo&pagelink=<?=$pagelink;?>&pagename=<?=$pagename;?>" method="post" name="seo">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
				<tr>
					<th colspan="2">
						<h3>
							SEO SETTINGS</h3>
					</th>
				</tr>
				<tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center; color:white;">
<?php
 if($pagename == 'Default')
 {
  echo "Default Settings";
 }
 else
 {
  echo $pagename." Page";
 }
?>
            </div>
					</td>
				</tr>
				<tr height="5">
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Page Title:</td>
					<td>
						<input maxlength="100" name="seo_pagetitle" size="40" type="text" value="<?=$seo_pagetitle;?>" /></td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Description:</td>
					<td>
						<textarea cols="40" name="seo_description" rows="4" ><?=$seo_description;?></textarea></td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Keywords:</td>
					<td>
						<textarea cols="40" name="seo_keywords" rows="4" ><?=$seo_keywords;?></textarea></td>
				</tr>
<?php
 if($pagename == 'Default')
 {
  echo "
  				<tr>
					<td style=\"width: 50%; text-align: right;\">
						Google Analytics ID:</td>
					<td>
						<input maxlength=\"30\" name=\"seo_googleanalytics\" size=\"20\" type=\"text\" value=\"$seo_googleanalytics\" /></td>
				</tr>
  ";
 }
?>

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

