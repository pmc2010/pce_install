<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_bflbgc=$_POST['bflbgc'];
 $filename=$_FILES['uploadedfile']['name'];
$up_bflbgimage=$_POST['bflbgimage'];
 $delete_image=$_POST['delete_image'];
$up_bflbgr=$_POST['bflbgr'];
$up_bflbga=$_POST['bflbga'];
$up_bflbgp=$_POST['bflbgp'];
$up_bflc=$_POST['bflc'];
$up_bflls=$_POST['bflls'];
$up_bfllh=$_POST['bfllh'];
$up_bflta=$_POST['bflta'];
$up_bfltd=$_POST['bfltd'];
$up_bflti=$_POST['bflti'];
$up_bfltt=$_POST['bfltt'];
$up_bflva=$_POST['bflva'];
$up_bflwhs=$_POST['bflwhs'];
$up_bflwos=$_POST['bflwos'];
$up_bflff=$_POST['bflff'];
$up_bflfsize=$_POST['bflfsize'];
$up_bflfstyle=$_POST['bflfstyle'];
$up_bflfv=$_POST['bflfv'];
$up_bflfw=$_POST['bflfw'];
$up_bflalc=$_POST['bflalc'];
$up_bflaltd=$_POST['bflaltd'];
$up_bflavc=$_POST['bflavc'];
$up_bflavtd=$_POST['bflavtd'];
$up_bflahc=$_POST['bflahc'];
$up_bflahtd=$_POST['bflahtd'];
$up_bflaac=$_POST['bflaac'];
$up_bflaatd=$_POST['bflaatd'];
$up_bfllsi=$_POST['bfllsi'];
$up_bfllsp=$_POST['bfllsp'];
$up_bfllst=$_POST['bfllst'];
//parse border input into 3 variables
$up_bflbordertop=preg_split('/[,? ]+/',$_POST['bflbt']);
$up_bflbtt=$up_bflbordertop[0];
$up_bflbts=$up_bflbordertop[1];
$up_bflbtc=$up_bflbordertop[2];
//parse border input into 3 variables
$up_bflborderright=preg_split('/[,? ]+/',$_POST['bflbr']);
$up_bflbrt=$up_bflborderright[0];
$up_bflbrs=$up_bflborderright[1];
$up_bflbrc=$up_bflborderright[2];
//parse border input into 3 variables
$up_bflborderbot=preg_split('/[,? ]+/',$_POST['bflbb']);
$up_bflbbt=$up_bflborderbot[0];
$up_bflbbs=$up_bflborderbot[1];
$up_bflbbc=$up_bflborderbot[2];
//parse border input into 3 variables
$up_bflborderleft=preg_split('/[,? ]+/',$_POST['bflbl']);
$up_bflblt=$up_bflborderleft[0];
$up_bflbls=$up_bflborderleft[1];
$up_bflblc=$up_bflborderleft[2];
$up_bflout=$_POST['bflout'];
$up_bflmarg=$_POST['bflmarg'];
$up_bflpad=$_POST['bflpad'];
$up_bflh=$_POST['bflh'];
$up_bflmaxh=$_POST['bflmaxh'];
$up_bflmaxw=$_POST['bflmaxw'];
$up_bflminh=$_POST['bflminh'];
$up_bflminw=$_POST['bflminw'];
$up_bflw=$_POST['bflw'];
$up_bflvis=$_POST['bflvis'];
$up_bfldisp=$_POST['bfldisp'];
$up_bflpos=$_POST['bflpos'];
$up_bflleft=$_POST['bflleft'];
$up_bfltop=$_POST['bfltop'];
$up_bflright=$_POST['bflright'];
$up_bflbot=$_POST['bflbot'];
$up_bflzind=$_POST['bflzind'];
$up_bflfloat=$_POST['bflfloat'];
$up_bflclr=$_POST['bflclr'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();
  
  mysql_query("UPDATE style_master SET BFloatBackgroundColor = '$up_bflbgc' ");
  mysql_query("UPDATE style_master SET BFloatBackgroundImage = '$up_bflbgimage' ");
  mysql_query("UPDATE style_master SET BFloatBackgroundRepeat = '$up_bflbgr' ");
  mysql_query("UPDATE style_master SET BFloatBackgroundAttachment = '$up_bflbga' ");
  mysql_query("UPDATE style_master SET BFloatBackgroundPosition = '$up_bflbgp' ");
  mysql_query("UPDATE style_master SET BFloatColor = '$up_bflc' ");
  mysql_query("UPDATE style_master SET BFloatLetterSpacing = '$up_bflls' ");
  mysql_query("UPDATE style_master SET BFloatLineHeight = '$up_bfllh' ");
  mysql_query("UPDATE style_master SET BFloatTextAlign = '$up_bflta' ");
  mysql_query("UPDATE style_master SET BFloatTextDecoration = '$up_bfltd' ");
  mysql_query("UPDATE style_master SET BFloatTextIndent = '$up_bflti' ");
  mysql_query("UPDATE style_master SET BFloatTextTransform = '$up_bfltt' ");
  mysql_query("UPDATE style_master SET BFloatVerticalAlign = '$up_bflva' ");
  mysql_query("UPDATE style_master SET BFloatWhiteSpace = '$up_bflwhs' ");
  mysql_query("UPDATE style_master SET BFloatWordSpacing = '$up_bflwos' ");
  mysql_query("UPDATE style_master SET BFloatFontFamily = '$up_bflff' ");
  mysql_query("UPDATE style_master SET BFloatFontSize = '$up_bflfsize' ");
  mysql_query("UPDATE style_master SET BFloatFontStyle = '$up_bflfstyle' ");
  mysql_query("UPDATE style_master SET BFloatFontVariant = '$up_bflfv' ");
  mysql_query("UPDATE style_master SET BFloatFontWeight = '$up_bflfw' ");
  mysql_query("UPDATE style_master SET BFloataLinkColor = '$up_bflalc' ");
  mysql_query("UPDATE style_master SET BFloataLinkTextDecoration = '$up_bflaltd' ");
  mysql_query("UPDATE style_master SET BFloataVisitedColor = '$up_bflavc' ");
  mysql_query("UPDATE style_master SET BFloataVisitedDecoration = '$up_bflavtd' ");
  mysql_query("UPDATE style_master SET BFloataHoverColor = '$up_bflahc' ");
  mysql_query("UPDATE style_master SET BFloataHoverTextDecoration = '$up_bflahtd' ");
  mysql_query("UPDATE style_master SET BFloataActiveColor = '$up_bflaac' ");
  mysql_query("UPDATE style_master SET BFloataActiveTextDecoration = '$up_bflaatd' ");
  mysql_query("UPDATE style_master SET BFloatListStyleImage = '$up_bfllsi' ");
  mysql_query("UPDATE style_master SET BFloatListStylePosition = '$up_bfllsp' ");
  mysql_query("UPDATE style_master SET BFloatListStyleType = '$up_bfllst' ");
  mysql_query("UPDATE style_master SET BFloatBorderTopThickness = '$up_bflbtt' ");
  mysql_query("UPDATE style_master SET BFloatBorderTopStyle = '$up_bflbts' ");
  mysql_query("UPDATE style_master SET BFloatBorderTopColor = '$up_bflbtc' ");
  mysql_query("UPDATE style_master SET BFloatBorderRightThickness = '$up_bflbrt' ");
  mysql_query("UPDATE style_master SET BFloatBorderRightStyle = '$up_bflbrs' ");
  mysql_query("UPDATE style_master SET BFloatBorderRightColor = '$up_bflbrc' ");
  mysql_query("UPDATE style_master SET BFloatBorderBottomThickness = '$up_bflbbt' ");
  mysql_query("UPDATE style_master SET BFloatBorderBottomStyle = '$up_bflbbs' ");
  mysql_query("UPDATE style_master SET BFloatBorderBottomColor = '$up_bflbbc' ");
  mysql_query("UPDATE style_master SET BFloatBorderLeftThickness = '$up_bflblt' ");
  mysql_query("UPDATE style_master SET BFloatBorderLeftStyle = '$up_bflbls' ");
  mysql_query("UPDATE style_master SET BFloatBorderLeftColor = '$up_bflblc' ");
  mysql_query("UPDATE style_master SET BFloatOutline = '$up_bflout' ");
  mysql_query("UPDATE style_master SET BFloatMargin = '$up_bflmarg' ");
  mysql_query("UPDATE style_master SET BFloatPadding = '$up_bflpad' ");
  mysql_query("UPDATE style_master SET BFloatHeight = '$up_bflh' ");
  mysql_query("UPDATE style_master SET BFloatMaxHeight = '$up_bflmaxh' ");
  mysql_query("UPDATE style_master SET BFloatMaxWidth = '$up_bflmaxw' ");
  mysql_query("UPDATE style_master SET BFloatMinHeight = '$up_bflminh' ");
  mysql_query("UPDATE style_master SET BFloatMinWidth = '$up_bflminw' ");
  mysql_query("UPDATE style_master SET BFloatWidth = '$up_bflw' ");
  mysql_query("UPDATE style_master SET BFloatVisibility = '$up_bflvis' ");
  mysql_query("UPDATE style_master SET BFloatDisplay = '$up_bfldisp' ");
  mysql_query("UPDATE style_master SET BFloatPosition = '$up_bflpos' ");
  mysql_query("UPDATE style_master SET BFloatLeft = '$up_bflleft' ");
  mysql_query("UPDATE style_master SET BFloatTop = '$up_bfltop' ");
  mysql_query("UPDATE style_master SET BFloatRight = '$up_bflright' ");
  mysql_query("UPDATE style_master SET BFloatBottom = '$up_bflbot' ");
  mysql_query("UPDATE style_master SET BFloatZIndex = '$up_bflzind' ");
  mysql_query("UPDATE style_master SET BFloatFloat = '$up_bflfloat' ");
  mysql_query("UPDATE style_master SET BFloatClear = '$up_bflclr' ");
 }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$bflbgc	=$row['BFloatBackgroundColor'];
$bflbgimage	=$row['BFloatBackgroundImage'];
$bflbgr	=$row['BFloatBackgroundRepeat'];
$bflbga	=$row['BFloatBackgroundAttachment'];
$bflbgp	=$row['BFloatBackgroundPosition'];
$bflc	=$row['BFloatColor'];
$bflls	=$row['BFloatLetterSpacing'];
$bfllh	=$row['BFloatLineHeight'];
$bflta	=$row['BFloatTextAlign'];
$bfltd	=$row['BFloatTextDecoration'];
$bflti	=$row['BFloatTextIndent'];
$bfltt	=$row['BFloatTextTransform'];
$bflva	=$row['BFloatVerticalAlign'];
$bflwhs	=$row['BFloatWhiteSpace'];
$bflwos	=$row['BFloatWordSpacing'];
$bflff	=$row['BFloatFontFamily'];
$bflfsize	=$row['BFloatFontSize'];
$bflfstyle	=$row['BFloatFontStyle'];
$bflfv	=$row['BFloatFontVariant'];
$bflfw	=$row['BFloatFontWeight'];
$bflalc	=$row['BFloataLinkColor'];
$bflaltd	=$row['BFloataLinkTextDecoration'];
$bflavc	=$row['BFloataVisitedColor'];
$bflavtd	=$row['BFloataVisitedDecoration'];
$bflahc	=$row['BFloataHoverColor'];
$bflahtd	=$row['BFloataHoverTextDecoration'];
$bflaac	=$row['BFloataActiveColor'];
$bflaatd	=$row['BFloataActiveTextDecoration'];
$bfllsi	=$row['BFloatListStyleImage'];
$bfllsp	=$row['BFloatListStylePosition'];
$bfllst	=$row['BFloatListStyleType'];
$bflbtt	=$row['BFloatBorderTopThickness'];
$bflbts	=$row['BFloatBorderTopStyle'];
$bflbtc	=$row['BFloatBorderTopColor'];
$bflbrt	=$row['BFloatBorderRightThickness'];
$bflbrs	=$row['BFloatBorderRightStyle'];
$bflbrc	=$row['BFloatBorderRightColor'];
$bflbbt	=$row['BFloatBorderBottomThickness'];
$bflbbs	=$row['BFloatBorderBottomStyle'];
$bflbbc	=$row['BFloatBorderBottomColor'];
$bflblt	=$row['BFloatBorderLeftThickness'];
$bflbls	=$row['BFloatBorderLeftStyle'];
$bflblc	=$row['BFloatBorderLeftColor'];
$bflout	=$row['BFloatOutline'];
$bflmarg	=$row['BFloatMargin'];
$bflpad	=$row['BFloatPadding'];
$bflh	=$row['BFloatHeight'];
$bflmaxh	=$row['BFloatMaxHeight'];
$bflmaxw	=$row['BFloatMaxWidth'];
$bflminh	=$row['BFloatMinHeight'];
$bflminw	=$row['BFloatMinWidth'];
$bflw	=$row['BFloatWidth'];
$bflvis	=$row['BFloatVisibility'];
$bfldisp	=$row['BFloatDisplay'];
$bflpos	=$row['BFloatPosition'];
$bflleft	=$row['BFloatLeft'];
$bfltop	=$row['BFloatTop'];
$bflright	=$row['BFloatRight'];
$bflbot	=$row['BFloatBottom'];
$bflzind	=$row['BFloatZIndex'];
$bflfloat	=$row['BFloatFloat'];
$bflclr	=$row['BFloatClear'];

?>

<?php
/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/bflbgimage.".$filename_extension;

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
  if(file_exists('images/bflbgimage.jpg'))
  {
   unlink('images/bflbgimage.jpg');
  }
  if(file_exists('images/bflbgimage.png'))
  {
   unlink('images/bflbgimage.png');
  }
  if(file_exists('images/bflbgimage.gif'))
  {
   unlink('images/bflbgimage.gif');
  }
  if(file_exists('images/bflbgimage.bmp'))
  {
   unlink('images/bflbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }

?>


<form enctype="multipart/form-data" action="?page=layout_bfloat" method="post" name="layout_bfloat">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>FLOATING BODY LAYOUT</H3>
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
						<input maxlength="10" name="bflbgc" size="10" type="text" value="<?=$bflbgc;?>" /></td>
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
  if ($bflbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bflbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

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
  if ($bflbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bflbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
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
  if ($bflbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bflbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($bflbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bflbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
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
						<input maxlength="20" name="bflc" type="text" value="<?=$bflc;?>" /></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						letter-spacing:</td>
					<td>
						<input maxlength="20" name="bflls" type="text" value="<?=$bflls;?>"/></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						line-height:</td>
					<td>
						<input maxlength="20" name="bfllh" type="text" value="<?=$bfllh;?>" /></td>
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
  if ($bflta == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="bflta" size="1"><option value="left" <?=$select_selected[0];?> >left</option><option value="right" <?=$select_selected[1];?> >right</option><option value="center" <?=$select_selected[2];?> >center</option><option value="justify" <?=$select_selected[3];?> >justify</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
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
  if ($bfltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-indent:</td>
					<td>
						<input maxlength="20" name="bflti" type="text" value="<?=$bflti;?>" /></td>
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
  if ($bfltt == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfltt" size="1"><option value="" <?=$select_selected[0];?> >none</option><option value="capitalize" <?=$select_selected[1];?> >capitalize</option><option value="uppercase" <?=$select_selected[2];?> >uppercase</option><option value="lowecase" <?=$select_selected[3];?> >lowercase</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						vertical-align:</td>
					<td>
						<input maxlength="20" name="bflva" type="text" value="<?=$bflva;?>" /></td>
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
  if ($bflwhs == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflwhs" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="nowrap" <?=$select_selected[1];?> >nowrap</option><option value="pre" <?=$select_selected[2];?> >pre</option><option value="pre-line" <?=$select_selected[3];?> >pre-line</option><option value="pre-wrap" <?=$select_selected[4];?> >pre-wrap</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						word-spacing:</td>
					<td>
						<input maxlength="20" name="bflwos" type="text" value="<?=$bflwos;?>" /></td>
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
						<input maxlength="100" name="bflff" size="50" type="text" value="<?=$bflff;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-size:</td>
					<td>
						<input maxlength="30" name="bflfsize" size="20" type="text" value="<?=$bflfsize;?>" /></td>
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
  if ($bflfstyle == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflfstyle" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="italic" <?=$select_selected[1];?> >italic</option><option value="oblique" <?=$select_selected[2];?> >oblique</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($bflfv == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflfv" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="small-caps" <?=$select_selected[1];?> >small-caps</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($bflfw == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflfw" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="bold" <?=$select_selected[1];?> >bold</option><option value="bolder" <?=$select_selected[2];?> >bolder</option><option value="lighter" <?=$select_selected[3];?> >lighter</option></select></td>
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
						<input maxlength="50" name="bfllsi" size="20" type="text" value="<?=$bfllsi;?>" /></td>
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
  if ($bfllsp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfllsp" size="1"><option value="inside" <?=$select_selected[0];?> >inside</option><option value="outside" <?=$select_selected[1];?> >outside (default)</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($bfllst == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfllst" size="1"><option value="decimal" <?=$select_selected[0];?> >decimal</option><option value="lower-alpha" <?=$select_selected[1];?> >lower-alpha</option><option value="lower-roman" <?=$select_selected[2];?> >lower-roman</option><option <?=$select_selected[3];?> value="none">none</option><option value="upper-alpha" <?=$select_selected[4];?> >upper-alpha</option><option value="upper-latin" <?=$select_selected[5];?> >upper-latin</option><option value="upper-roman" <?=$bfllst_selected[6];?> >upper-roman</option></select></td>
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
						<input maxlength="30" name="bflbt" size="20" type="text" value="<?=$bflbtt;?> <?=$bflbts;?> <?=$bflbtc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-right:</td>
					<td>
						<input maxlength="30" name="bflbr" size="20" type="text" value="<?=$bflbrt;?> <?=$bflbrs;?> <?=$bflbrc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-bottom:</td>
					<td>
						<input maxlength="30" name="bflbb" size="20" type="text" value="<?=$bflbbt;?> <?=$bflbbs;?> <?=$bflbbc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-left:</td>
					<td>
						<input maxlength="30" name="bflbl" size="20" type="text" value="<?=$bflblt;?> <?=$bflbls;?> <?=$bflblc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						outline:</td>
					<td>
						<input maxlength="30" name="bflout" size="20" type="text" value="<?=$bflout;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						margin:</td>
					<td>
						<input maxlength="30" name="bflmarg" size="20" type="text" value="<?=$bflmarg;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						padding:</td>
					<td>
						<input maxlength="30" name="bflpad" size="20" type="text" value="<?=$bflpad;?>" /></td>
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
						<input maxlength="20" name="bflh" size="20" type="text" value="<?=$bflh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-height:</td>
					<td>
						<input maxlength="20" name="bflmaxh" size="20" type="text" value="<?=$bflmaxh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-width:</td>
					<td>
						<input maxlength="20" name="bflmaxw" size="20" type="text" value="<?=$bflmaxw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-height:</td>
					<td>
						<input maxlength="20" name="bflminh" size="20" type="text" value="<?=$bflminh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-width:</td>
					<td>
						<input maxlength="20" name="bflminw" size="20" type="text" value="<?=$bflminw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						width:</td>
					<td>
						<input maxlength="20" name="bflw" size="20" type="text" value="<?=$bflw;?>" /></td>
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
  if ($bflvis == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflvis" size="1"><option value="visible" <?=$select_selected[0];?> >visible</option><option value="hidden" <?=$select_selected[1];?> >hidden</option><option value="collapse" <?=$select_selected[2];?> >collapse</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($bfldisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bfldisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
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
  if ($bflpos == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflpos" size="1"><option value="static" <?=$select_selected[0];?> >static</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="relative" <?=$select_selected[2];?> >relative</option><option value="absolute" <?=$select_selected[3];?> >absolute</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						left:</td>
					<td>
						<input maxlength="20" name="bflleft" size="20" type="text" value="<?=$bflleft;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						top:</td>
					<td>
						<input maxlength="20" name="bfltop" size="20" type="text" value="<?=$bfltop;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						right:</td>
					<td>
						<input maxlength="20" name="bflright" size="20" type="text" value="<?=$bflright;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						bottom:</td>
					<td>
						<input maxlength="20" name="bflbot" size="20" type="text" value="<?=$bflbot;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						z-index:</td>
					<td>
						<input maxlength="20" name="bflzind" size="20" type="text" value="<?=$bflzind;?>" /></td>
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
  if ($bflfloat == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflfloat" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option></select></td>
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
  if ($bflclr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflclr" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option><option value="both" <?=$select_selected[3];?> >both</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Links</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link color:</td>
					<td>
						<input maxlength="20" name="bflalc" size="20" type="text" value="<?=$bflalc;?>" /></td>
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
  if ($bflaltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflaltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited color:</td>
					<td>
						<input maxlength="20" name="bflavc" size="20" type="text" value="<?=$bflavc;?>" /></td>
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
  if ($bflavtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflavtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover color:</td>
					<td>
						<input maxlength="20" name="bflahc" size="20" type="text" value="<?=$bflahc;?>" /></td>
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
  if ($bflahtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflahtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active color:</td>
					<td>
						<input maxlength="20" name="bflaac" size="20" type="text" value="<?=$bflaac;?>" /></td>
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
  if ($bflaatd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="bflaatd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
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