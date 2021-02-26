<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_bfullbgc=$_POST['bfullbgc'];
 $filename=$_FILES['uploadedfile']['name'];
$up_bfullbgimage=$_POST['bfullbgimage'];
 $delete_image=$_POST['delete_image'];
$up_bfullbgr=$_POST['bfullbgr'];
$up_bfullbga=$_POST['bfullbga'];
$up_bfullbgp=$_POST['bfullbgp'];
$up_bfullc=$_POST['bfullc'];
$up_bfullls=$_POST['bfullls'];
$up_bfulllh=$_POST['bfulllh'];
$up_bfullta=$_POST['bfullta'];
$up_bfulltd=$_POST['bfulltd'];
$up_bfullti=$_POST['bfullti'];
$up_bfulltt=$_POST['bfulltt'];
$up_bfullva=$_POST['bfullva'];
$up_bfullwhs=$_POST['bfullwhs'];
$up_bfullwos=$_POST['bfullwos'];
$up_bfullff=$_POST['bfullff'];
$up_bfullfsize=$_POST['bfullfsize'];
$up_bfullfstyle=$_POST['bfullfstyle'];
$up_bfullfv=$_POST['bfullfv'];
$up_bfullfw=$_POST['bfullfw'];
$up_bfullalc=$_POST['bfullalc'];
$up_bfullaltd=$_POST['bfullaltd'];
$up_bfullavc=$_POST['bfullavc'];
$up_bfullavtd=$_POST['bfullavtd'];
$up_bfullahc=$_POST['bfullahc'];
$up_bfullahtd=$_POST['bfullahtd'];
$up_bfullaac=$_POST['bfullaac'];
$up_bfullaatd=$_POST['bfullaatd'];
$up_bfulllsi=$_POST['bfulllsi'];
$up_bfulllsp=$_POST['bfulllsp'];
$up_bfulllst=$_POST['bfulllst'];
//parse border input into 3 variables
$up_bfullbordertop=preg_split('/[,? ]+/',$_POST['bfullbt']);
$up_bfullbtt=$up_bfullbordertop[0];
$up_bfullbts=$up_bfullbordertop[1];
$up_bfullbtc=$up_bfullbordertop[2];
//parse border input into 3 variables
$up_bfullborderright=preg_split('/[,? ]+/',$_POST['bfullbr']);
$up_bfullbrt=$up_bfullborderright[0];
$up_bfullbrs=$up_bfullborderright[1];
$up_bfullbrc=$up_bfullborderright[2];
//parse border input into 3 variables
$up_bfullborderbot=preg_split('/[,? ]+/',$_POST['bfullbb']);
$up_bfullbbt=$up_bfullborderbot[0];
$up_bfullbbs=$up_bfullborderbot[1];
$up_bfullbbc=$up_bfullborderbot[2];
//parse border input into 3 variables
$up_bfullborderleft=preg_split('/[,? ]+/',$_POST['bfullbl']);
$up_bfullblt=$up_bfullborderleft[0];
$up_bfullbls=$up_bfullborderleft[1];
$up_bfullblc=$up_bfullborderleft[2];
$up_bfullout=$_POST['bfullout'];
$up_bfullmarg=$_POST['bfullmarg'];
$up_bfullpad=$_POST['bfullpad'];
$up_bfullh=$_POST['bfullh'];
$up_bfullmaxh=$_POST['bfullmaxh'];
$up_bfullmaxw=$_POST['bfullmaxw'];
$up_bfullminh=$_POST['bfullminh'];
$up_bfullminw=$_POST['bfullminw'];
$up_bfullw=$_POST['bfullw'];
$up_bfullvis=$_POST['bfullvis'];
$up_bfulldisp=$_POST['bfulldisp'];
$up_bfullpos=$_POST['bfullpos'];
$up_bfullleft=$_POST['bfullleft'];
$up_bfulltop=$_POST['bfulltop'];
$up_bfullright=$_POST['bfullright'];
$up_bfullbot=$_POST['bfullbot'];
$up_bfullzind=$_POST['bfullzind'];
$up_bfullfloat=$_POST['bfullfloat'];
$up_bfullclr=$_POST['bfullclr'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE style_master SET BFullBackgroundColor = '$up_bfullbgc' ");
  mysql_query("UPDATE style_master SET BFullBackgroundImage = '$up_bfullbgimage' ");
  mysql_query("UPDATE style_master SET BFullBackgroundRepeat = '$up_bfullbgr' ");
  mysql_query("UPDATE style_master SET BFullBackgroundAttachment = '$up_bfullbga' ");
  mysql_query("UPDATE style_master SET BFullBackgroundPosition = '$up_bfullbgp' ");
  mysql_query("UPDATE style_master SET BFullColor = '$up_bfullc' ");
  mysql_query("UPDATE style_master SET BFullLetterSpacing = '$up_bfullls' ");
  mysql_query("UPDATE style_master SET BFullLineHeight = '$up_bfulllh' ");
  mysql_query("UPDATE style_master SET BFullTextAlign = '$up_bfullta' ");
  mysql_query("UPDATE style_master SET BFullTextDecoration = '$up_bfulltd' ");
  mysql_query("UPDATE style_master SET BFullTextIndent = '$up_bfullti' ");
  mysql_query("UPDATE style_master SET BFullTextTransform = '$up_bfulltt' ");
  mysql_query("UPDATE style_master SET BFullVerticalAlign = '$up_bfullva' ");
  mysql_query("UPDATE style_master SET BFullWhiteSpace = '$up_bfullwhs' ");
  mysql_query("UPDATE style_master SET BFullWordSpacing = '$up_bfullwos' ");
  mysql_query("UPDATE style_master SET BFullFontFamily = '$up_bfullff' ");
  mysql_query("UPDATE style_master SET BFullFontSize = '$up_bfullfsize' ");
  mysql_query("UPDATE style_master SET BFullFontStyle = '$up_bfullfstyle' ");
  mysql_query("UPDATE style_master SET BFullFontVariant = '$up_bfullfv' ");
  mysql_query("UPDATE style_master SET BFullFontWeight = '$up_bfullfw' ");
  mysql_query("UPDATE style_master SET BFullaLinkColor = '$up_bfullalc' ");
  mysql_query("UPDATE style_master SET BFullaLinkTextDecoration = '$up_bfullaltd' ");
  mysql_query("UPDATE style_master SET BFullaVisitedColor = '$up_bfullavc' ");
  mysql_query("UPDATE style_master SET BFullaVisitedDecoration = '$up_bfullavtd' ");
  mysql_query("UPDATE style_master SET BFullaHoverColor = '$up_bfullahc' ");
  mysql_query("UPDATE style_master SET BFullaHoverTextDecoration = '$up_bfullahtd' ");
  mysql_query("UPDATE style_master SET BFullaActiveColor = '$up_bfullaac' ");
  mysql_query("UPDATE style_master SET BFullaActiveTextDecoration = '$up_bfullaatd' ");
  mysql_query("UPDATE style_master SET BFullListStyleImage = '$up_bfulllsi' ");
  mysql_query("UPDATE style_master SET BFullListStylePosition = '$up_bfulllsp' ");
  mysql_query("UPDATE style_master SET BFullListStyleType = '$up_bfulllst' ");
  mysql_query("UPDATE style_master SET BFullBorderTopThickness = '$up_bfullbtt' ");
  mysql_query("UPDATE style_master SET BFullBorderTopStyle = '$up_bfullbts' ");
  mysql_query("UPDATE style_master SET BFullBorderTopColor = '$up_bfullbtc' ");
  mysql_query("UPDATE style_master SET BFullBorderRightThickness = '$up_bfullbrt' ");
  mysql_query("UPDATE style_master SET BFullBorderRightStyle = '$up_bfullbrs' ");
  mysql_query("UPDATE style_master SET BFullBorderRightColor = '$up_bfullbrc' ");
  mysql_query("UPDATE style_master SET BFullBorderBottomThickness = '$up_bfullbbt' ");
  mysql_query("UPDATE style_master SET BFullBorderBottomStyle = '$up_bfullbbs' ");
  mysql_query("UPDATE style_master SET BFullBorderBottomColor = '$up_bfullbbc' ");
  mysql_query("UPDATE style_master SET BFullBorderLeftThickness = '$up_bfullblt' ");
  mysql_query("UPDATE style_master SET BFullBorderLeftStyle = '$up_bfullbls' ");
  mysql_query("UPDATE style_master SET BFullBorderLeftColor = '$up_bfullblc' ");
  mysql_query("UPDATE style_master SET BFullOutline = '$up_bfullout' ");
  mysql_query("UPDATE style_master SET BFullMargin = '$up_bfullmarg' ");
  mysql_query("UPDATE style_master SET BFullPadding = '$up_bfullpad' ");
  mysql_query("UPDATE style_master SET BFullHeight = '$up_bfullh' ");
  mysql_query("UPDATE style_master SET BFullMaxHeight = '$up_bfullmaxh' ");
  mysql_query("UPDATE style_master SET BFullMaxWidth = '$up_bfullmaxw' ");
  mysql_query("UPDATE style_master SET BFullMinHeight = '$up_bfullminh' ");
  mysql_query("UPDATE style_master SET BFullMinWidth = '$up_bfullminw' ");
  mysql_query("UPDATE style_master SET BFullWidth = '$up_bfullw' ");
  mysql_query("UPDATE style_master SET BFullVisibility = '$up_bfullvis' ");
  mysql_query("UPDATE style_master SET BFullDisplay = '$up_bfulldisp' ");
  mysql_query("UPDATE style_master SET BFullPosition = '$up_bfullpos' ");
  mysql_query("UPDATE style_master SET BFullLeft = '$up_bfullleft' ");
  mysql_query("UPDATE style_master SET BFullTop = '$up_bfulltop' ");
  mysql_query("UPDATE style_master SET BFullRight = '$up_bfullright' ");
  mysql_query("UPDATE style_master SET BFullBottom = '$up_bfullbot' ");
  mysql_query("UPDATE style_master SET BFullZIndex = '$up_bfullzind' ");
  mysql_query("UPDATE style_master SET BFullFloat = '$up_bfullfloat' ");
  mysql_query("UPDATE style_master SET BFullClear = '$up_bfullclr' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$bfullbgc	=$row['BFullBackgroundColor'];
$bfullbgimage	=$row['BFullBackgroundImage'];
$bfullbgr	=$row['BFullBackgroundRepeat'];
$bfullbga	=$row['BFullBackgroundAttachment'];
$bfullbgp	=$row['BFullBackgroundPosition'];
$bfullc	=$row['BFullColor'];
$bfullls	=$row['BFullLetterSpacing'];
$bfulllh	=$row['BFullLineHeight'];
$bfullta	=$row['BFullTextAlign'];
$bfulltd	=$row['BFullTextDecoration'];
$bfullti	=$row['BFullTextIndent'];
$bfulltt	=$row['BFullTextTransform'];
$bfullva	=$row['BFullVerticalAlign'];
$bfullwhs	=$row['BFullWhiteSpace'];
$bfullwos	=$row['BFullWordSpacing'];
$bfullff	=$row['BFullFontFamily'];
$bfullfsize	=$row['BFullFontSize'];
$bfullfstyle	=$row['BFullFontStyle'];
$bfullfv	=$row['BFullFontVariant'];
$bfullfw	=$row['BFullFontWeight'];
$bfullalc	=$row['BFullaLinkColor'];
$bfullaltd	=$row['BFullaLinkTextDecoration'];
$bfullavc	=$row['BFullaVisitedColor'];
$bfullavtd	=$row['BFullaVisitedDecoration'];
$bfullahc	=$row['BFullaHoverColor'];
$bfullahtd	=$row['BFullaHoverTextDecoration'];
$bfullaac	=$row['BFullaActiveColor'];
$bfullaatd	=$row['BFullaActiveTextDecoration'];
$bfulllsi	=$row['BFullListStyleImage'];
$bfulllsp	=$row['BFullListStylePosition'];
$bfulllst	=$row['BFullListStyleType'];
$bfullbtt	=$row['BFullBorderTopThickness'];
$bfullbts	=$row['BFullBorderTopStyle'];
$bfullbtc	=$row['BFullBorderTopColor'];
$bfullbrt	=$row['BFullBorderRightThickness'];
$bfullbrs	=$row['BFullBorderRightStyle'];
$bfullbrc	=$row['BFullBorderRightColor'];
$bfullbbt	=$row['BFullBorderBottomThickness'];
$bfullbbs	=$row['BFullBorderBottomStyle'];
$bfullbbc	=$row['BFullBorderBottomColor'];
$bfullblt	=$row['BFullBorderLeftThickness'];
$bfullbls	=$row['BFullBorderLeftStyle'];
$bfullblc	=$row['BFullBorderLeftColor'];
$bfullout	=$row['BFullOutline'];
$bfullmarg	=$row['BFullMargin'];
$bfullpad	=$row['BFullPadding'];
$bfullh	=$row['BFullHeight'];
$bfullmaxh	=$row['BFullMaxHeight'];
$bfullmaxw	=$row['BFullMaxWidth'];
$bfullminh	=$row['BFullMinHeight'];
$bfullminw	=$row['BFullMinWidth'];
$bfullw	=$row['BFullWidth'];
$bfullvis	=$row['BFullVisibility'];
$bfulldisp	=$row['BFullDisplay'];
$bfullpos	=$row['BFullPosition'];
$bfullleft	=$row['BFullLeft'];
$bfulltop	=$row['BFullTop'];
$bfullright	=$row['BFullRight'];
$bfullbot	=$row['BFullBottom'];
$bfullzind	=$row['BFullZIndex'];
$bfullfloat	=$row['BFullFloat'];
$bfullclr	=$row['BFullClear'];

/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/bfullbgimage.".$filename_extension;

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
  if(file_exists('images/bfullbgimage.jpg'))
  {
   unlink('images/bfullbgimage.jpg');
  }
  if(file_exists('images/bfullbgimage.png'))
  {
   unlink('images/bfullbgimage.png');
  }
  if(file_exists('images/bfullbgimage.gif'))
  {
   unlink('images/bfullbgimage.gif');
  }
  if(file_exists('images/bfullbgimage.bmp'))
  {
   unlink('images/bfullbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }

?>


<form enctype="multipart/form-data" action="?page=layout_bfull" method="post" name="layout_bfull">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>FULL BODY LAYOUT</H3>
 </th>
</tr>
				<tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center;">
							<span style="color: rgb(255, 240, 245);"><span style="font-size: 18px;"><strong>Styling</strong></span></span></div>
					</td>
				</tr>

				<tr height="5">
				</tr>
				<tr>
					<td colspan="2">
						<div style="text-align: center;">
							<span style="font-size: 16px;"><strong>Background</strong></span></div>
					</td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Color:</td>
					<td>
						<input maxlength="10" name="bfullbgc" size="10" type="text" value="<?=$bfullbgc;?>" /></td>
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
  if ($bfullbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bfullbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

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
  if ($bfullbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bfullbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
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
  if ($bfullbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bfullbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($bfullbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bfullbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<div>
							&nbsp;</div>
						<div>
							<span style="font-size: 16px;"><strong>Text</strong></span></div>
					</td>
				</tr>

				<tr>
					<td style="text-align: right;">
						color:</td>
					<td>
						<input maxlength="20" name="bfullc" type="text" value="<?=$bfullc;?>" /></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						letter-spacing:</td>
					<td>
						<input maxlength="20" name="bfullls" type="text" value="<?=$bfullls;?>"/></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						line-height:</td>
					<td>
						<input maxlength="20" name="bfulllh" type="text" value="<?=$bfulllh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-align:</td>
					<td>
<?php
 $select_options = array("left","right","center","justify","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullta == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bfullta" size="1"><option value="left" <?=$select_selected[0];?> >left</option><option value="right" <?=$select_selected[1];?> >right</option><option value="center" <?=$select_selected[2];?> >center</option><option value="justify" <?=$select_selected[3];?> >justify</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						text-decoration:</td>
					<td>
<?php
 $select_options = array("none","underline","overline","line-through","blink","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfulltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfulltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-indent:</td>
					<td>
						<input maxlength="20" name="bfullti" type="text" value="<?=$bfullti;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-transform:</td>
					<td>
<?php
 $select_options = array("none","capitalize","uppercase","lowercase","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfulltt == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfulltt" size="1"><option value="" <?=$select_selected[0];?> >none</option><option value="capitalize" <?=$select_selected[1];?> >capitalize</option><option value="uppercase" <?=$select_selected[2];?> >uppercase</option><option value="lowecase" <?=$select_selected[3];?> >lowercase</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						vertical-align:</td>
					<td>
						<input maxlength="20" name="bfullva" type="text" value="<?=$bfullva;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						white-spacing:</td>
					<td>
<?php
 $select_options = array("normal","nowrap","pre","pre-line","pre-wrap","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullwhs == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullwhs" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="nowrap" <?=$select_selected[1];?> >nowrap</option><option value="pre" <?=$select_selected[2];?> >pre</option><option value="pre-line" <?=$select_selected[3];?> >pre-line</option><option value="pre-wrap" <?=$select_selected[4];?> >pre-wrap</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						word-spacing:</td>
					<td>
						<input maxlength="20" name="bfullwos" type="text" value="<?=$bfullwos;?>" /></td>
				</tr>
				<tr>
					<td colspan="2">
						<div>
							&nbsp;</div>
						<div style="text-align: center;">
							<span style="font-size: 16px;"><strong>Fonts</strong></span></div>
					</td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-family:</td>
					<td>
						<input maxlength="100" name="bfullff" size="50" type="text" value="<?=$bfullff;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-size:</td>
					<td>
						<input maxlength="30" name="bfullfsize" size="20" type="text" value="<?=$bfullfsize;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-style:</td>
					<td>
<?php
 $select_options = array("normal","italic","oblique","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullfstyle == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullfstyle" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="italic" <?=$select_selected[1];?> >italic</option><option value="oblique" <?=$select_selected[2];?> >oblique</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-variant:</td>
					<td>
<?php
 $select_options = array("normal","small-caps","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullfv == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullfv" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="small-caps" <?=$select_selected[1];?> >small-caps</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-weight:</td>
					<td>
<?php
 $select_options = array("normal","bold","bolder","lighter");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullfw == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullfw" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="bold" <?=$select_selected[1];?> >bold</option><option value="bolder" <?=$select_selected[2];?> >bolder</option><option value="lighter" <?=$select_selected[3];?> >lighter</option></select></td>
				</tr>
				<tr>
					<td colspan="2">
						<div>
							&nbsp;</div>
						<div style="text-align: center;">
							<span style="font-size: 16px;"><strong>Lists</strong></span></div>
					</td>
				</tr>
				<tr>
					<td style="text-align: right;">
						list-style-image:url</td>
					<td>
						<input maxlength="50" name="bfulllsi" size="20" type="text" value="<?=$bfulllsi;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						list-style-position:</td>
					<td>
<?php
 $select_options = array("inside","outside","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfulllsp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfulllsp" size="1"><option value="inside" <?=$select_selected[0];?> >inside</option><option value="outside" <?=$select_selected[1];?> >outside (default)</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						list-style-type:</td>
					<td>
<?php
 $select_options = array("decimal","lower-alpha","lower-roman","none","upper-alpha","upper-latin","upper-roman");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfulllst == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfulllst" size="1"><option value="decimal" <?=$select_selected[0];?> >decimal</option><option value="lower-alpha" <?=$select_selected[1];?> >lower-alpha</option><option value="lower-roman" <?=$select_selected[2];?> >lower-roman</option><option <?=$select_selected[3];?> value="none">none</option><option value="upper-alpha" <?=$select_selected[4];?> >upper-alpha</option><option value="upper-latin" <?=$select_selected[5];?> >upper-latin</option><option value="upper-roman" <?=$bfulllst_selected[6];?> >upper-roman</option></select></td>
				</tr>
				<tr height="5">
				</tr>
				<tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center;">
							<span style="font-size: 18px;"><span style="color: rgb(255, 240, 245);"><strong>Box Model</strong></span></span></div>
					</td>
				</tr>
				<tr height="5">
				</tr>
				<tr>
					<td style="text-align: right;">
						border-top:</td>
					<td>
						<input maxlength="30" name="bfullbt" size="20" type="text" value="<?=$bfullbtt;?> <?=$bfullbts;?> <?=$bfullbtc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-right:</td>
					<td>
						<input maxlength="30" name="bfullbr" size="20" type="text" value="<?=$bfullbrt;?> <?=$bfullbrs;?> <?=$bfullbrc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-bottom:</td>
					<td>
						<input maxlength="30" name="bfullbb" size="20" type="text" value="<?=$bfullbbt;?> <?=$bfullbbs;?> <?=$bfullbbc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-left:</td>
					<td>
						<input maxlength="30" name="bfullbl" size="20" type="text" value="<?=$bfullblt;?> <?=$bfullbls;?> <?=$bfullblc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						outline:</td>
					<td>
						<input maxlength="30" name="bfullout" size="20" type="text" value="<?=$bfullout;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						margin:</td>
					<td>
						<input maxlength="30" name="bfullmarg" size="20" type="text" value="<?=$bfullmarg;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						padding:</td>
					<td>
						<input maxlength="30" name="bfullpad" size="20" type="text" value="<?=$bfullpad;?>" /></td>
				</tr>
				<tr height="5">
				</tr>
				<tr>
					<td colspan="2" style="text-align: center; background-color: black;">
						<span style="font-size: 18px;"><strong><span style="color: rgb(255, 240, 245);">Advanced</span></strong></span></td>
				</tr>
				<tr height="5">
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Dimensions</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						height:</td>
					<td>
						<input maxlength="20" name="bfullh" size="20" type="text" value="<?=$bfullh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-height:</td>
					<td>
						<input maxlength="20" name="bfullmaxh" size="20" type="text" value="<?=$bfullmaxh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-width:</td>
					<td>
						<input maxlength="20" name="bfullmaxw" size="20" type="text" value="<?=$bfullmaxw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-height:</td>
					<td>
						<input maxlength="20" name="bfullminh" size="20" type="text" value="<?=$bfullminh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-width:</td>
					<td>
						<input maxlength="20" name="bfullminw" size="20" type="text" value="<?=$bfullminw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						width:</td>
					<td>
						<input maxlength="20" name="bfullw" size="20" type="text" value="<?=$bfullw;?>" /></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Display</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visibility:</td>
					<td>
<?php
 $select_options = array("visible","hidden","collapse","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullvis == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullvis" size="1"><option value="visible" <?=$select_selected[0];?> >visible</option><option value="hidden" <?=$select_selected[1];?> >hidden</option><option value="collapse" <?=$select_selected[2];?> >collapse</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						display:</td>
					<td>
<?php
 $select_options = array("","none","block","inline","inline-block","inline-table","list-item","table","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfulldisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfulldisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Positioning</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						position:</td>
					<td>
<?php
 $select_options = array("static","fixed","relative","absolute");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullpos == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullpos" size="1"><option value="static" <?=$select_selected[0];?> >static</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="relative" <?=$select_selected[2];?> >relative</option><option value="absolute" <?=$select_selected[3];?> >absolute</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						left:</td>
					<td>
						<input maxlength="20" name="bfullleft" size="20" type="text" value="<?=$bfullleft;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						top:</td>
					<td>
						<input maxlength="20" name="bfulltop" size="20" type="text" value="<?=$bfulltop;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						right:</td>
					<td>
						<input maxlength="20" name="bfullright" size="20" type="text" value="<?=$bfullright;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						bottom:</td>
					<td>
						<input maxlength="20" name="bfullbot" size="20" type="text" value="<?=$bfullbot;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						z-index:</td>
					<td>
						<input maxlength="20" name="bfullzind" size="20" type="text" value="<?=$bfullzind;?>" /></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Floating</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						float:</td>
					<td>
<?php
 $select_options = array("","left","right");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullfloat == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullfloat" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						clear:</td>
					<td>
<?php
 $select_options = array("","left","right","both");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullclr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullclr" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option><option value="both" <?=$select_selected[3];?> >both</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Links</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link color:</td>
					<td>
						<input maxlength="20" name="bfullalc" size="20" type="text" value="<?=$bfullalc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link text-decoration:</td>
					<td>
<?php
 $select_options = array("none","underline","overline","line-through","blink","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullaltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullaltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited color:</td>
					<td>
						<input maxlength="20" name="bfullavc" size="20" type="text" value="<?=$bfullavc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited text-decoration:</td>
					<td>
<?php
 $select_options = array("none","underline","overline","line-through","blink","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullavtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullavtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover color:</td>
					<td>
						<input maxlength="20" name="bfullahc" size="20" type="text" value="<?=$bfullahc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover text-decoration:</td>
					<td>
<?php
 $select_options = array("none","underline","overline","line-through","blink","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullahtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullahtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active color:</td>
					<td>
						<input maxlength="20" name="bfullaac" size="20" type="text" value="<?=$bfullaac;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active text-decoration:</td>
					<td>
<?php
 $select_options = array("none","underline","overline","line-through","blink","inherit");

 $num_options = sizeof($select_options);

 $select_selected = array_fill(0,$num_options,"");

 for ($i=0; $i<=($num_options-1); $i++)
 {
  if ($bfullaatd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfullaatd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
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