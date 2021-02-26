<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];

 $up_bmartop=$_POST['bmartop'];
 $up_bmarrt=$_POST['bmarrt'];
 $up_bmarbot=$_POST['bmarbot'];
 $up_bmarlt=$_POST['bmarlt'];
 $up_bcolor=$_POST['bcolor'];
 $up_bbgc=$_POST['bbgc'];
 $filename=$_FILES['uploadedfile']['name'];
 $up_bbgimage=$_POST['bbgimage'];
 $delete_image=$_POST['delete_image'];
 $up_bbgr=$_POST['bbgr'];
 $up_bbga=$_POST['bbga'];
 $up_bbgp=$_POST['bbgp'];
 $up_bh=$_POST['bh'];
 $up_bdisp=$_POST['bdisp'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE style_master SET BodyMarginTop = '$up_bmartop' ");
  mysql_query("UPDATE style_master SET BodyMarginRight = '$up_bmarrt' ");
  mysql_query("UPDATE style_master SET BodyMarginBottom = '$up_bmarbot' ");
  mysql_query("UPDATE style_master SET BodyMarginLeft = '$up_bmarlt' ");
  mysql_query("UPDATE style_master SET BodyColor = '$up_bcolor' ");
  mysql_query("UPDATE style_master SET BodyBackgroundColor = '$up_bbgc' ");
  mysql_query("UPDATE style_master SET BodyBackgroundImage = '$up_bbgimage' ");
  mysql_query("UPDATE style_master SET BodyBackgroundRepeat = '$up_bbgr' ");
  mysql_query("UPDATE style_master SET BodyBackgroundAttachment = '$up_bbga' ");
  mysql_query("UPDATE style_master SET BodyBackgroundPosition = '$up_bbgp' ");
  mysql_query("UPDATE style_master SET BodyHeight = '$up_bh' ");
  mysql_query("UPDATE style_master SET BodyDisplay = '$up_bdisp' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$bmartop	= $row['BodyMarginTop'];
$bmarrt = $row['BodyMarginRight'];
$bmarbot =$row['BodyMarginBottom'];
$bmarlt	=$row['BodyMarginLeft'];
$bcolor	=$row['BodyColor'];
$bbgc	=$row['BodyBackgroundColor'];
$bbgimage = $row['BodyBackgroundImage'];
$bbgr	=$row['BodyBackgroundRepeat'];
$bbga	=$row['BodyBackgroundAttachment'];
$bbgp	=$row['BodyBackgroundPosition'];
$bh	=$row['BodyHeight'];
$bdisp	=$row['BodyDisplay'];

/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/bbgimage.".$filename_extension;

 if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
    echo "The file ".  basename($filename). 
    " has been uploaded";
 } else{
    echo "There was an error uploading the file, please try again!";
 }
}

/***********Delete background images if applicable***********/

 if($delete_image=="checked")
 {
  if(file_exists('images/bbgimage.jpg'))
  {
   unlink('images/bbgimage.jpg');
  }
  if(file_exists('images/bbgimage.png'))
  {
   unlink('images/bbgimage.png');
  }
  if(file_exists('images/bbgimage.gif'))
  {
   unlink('images/bbgimage.gif');
  }
  if(file_exists('images/bbgimage.bmp'))
  {
   unlink('images/bbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }


?>

<form enctype="multipart/form-data" action="?page=layout_body" method="post" name="layout_body">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>BODY LAYOUT</H3>
 </th>
</tr>
				<tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center;">
							<span style="color: rgb(255, 240, 245);"><span style="font-size: 18px;"><strong>Margins</strong></span></span></div>
					</td>
				</tr>

				<tr height="5">
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Top:</td>
					<td>
						<input maxlength="10" name="bmartop" size="10" type="text" value="<?=$bmartop;?>" /></td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Right:</td>
					<td>
						<input maxlength="10" name="bmarrt" size="10" type="text" value="<?=$bmarrt;?>" /></td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Bottom:</td>
					<td>
						<input maxlength="10" name="bmarbot" size="10" type="text" value="<?=$bmarbot;?>" /></td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Left:</td>
					<td>
						<input maxlength="10" name="bmarlt" size="10" type="text" value="<?=$bmarlt;?>" /></td>
				</tr>
				<tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center;">
							<span style="color: rgb(255, 240, 245);"><span style="font-size: 18px;"><strong>Background</strong></span></span></div>
					</td>
				</tr>

				<tr>
					<td style="width: 50%; text-align: right;">
						Color:</td>
					<td>
						<input maxlength="10" name="bbgc" size="10" type="text" value="<?=$bbgc;?>" /></td>
				</tr>

        <tr>
         <td style="width: 50%; text-align: right;">
          <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />Upload background image (max size 1Mb):
         </td>
         <td>
          <input name="uploadedfile" type="file" />
         </td>
        </tr>
<tr>
 <td style="width: 50%; text-align: right;">
  Image extension:
 </td>
 <td>

<?php
 $select_options = array("jpg","png","gif","bmp");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

 </td>
</tr>

<tr>
 <td style="width: 50%; text-align: right;">
  Delete background image:
 </td>
 <td>
  <input type="checkbox" name="delete_image" value="checked">
 </td>
</tr>

				<tr>
					<td style="text-align: right;">
						Repeat:</td>
					<td>
<?php
 $select_options = array("no-repeat","repeat","repeat-x","repeat-y");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						Attachment:</td>
					<td>
<?php
 $select_options = array("scroll","fixed","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center;">
							<span style="color: rgb(255, 240, 245);"><span style="font-size: 18px;"><strong>Other</strong></span></span></div>
					</td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Text Color:</td>
					<td>
						<input maxlength="10" name="bcolor" size="10" type="text" value="<?=$bcolor;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						Position:</td>
					<td>
<?php
 $select_options = array("","top left","top right","bottom left","bottom right");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Body Height:</td>
					<td>
						<input maxlength="10" name="bh" size="10" type="text" value="<?=$bh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						Display:</td>
					<td>
<?php
 $select_options = array("","none","block","inline","inline-block","inline-table","list-item","table","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bdisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bdisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
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