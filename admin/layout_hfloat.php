<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_hflbgc=$_POST['hflbgc'];
 $filename=$_FILES['uploadedfile']['name'];
$up_hflbgimage=$_POST['hflbgimage'];
 $delete_image=$_POST['delete_image'];
$up_hflbgr=$_POST['hflbgr'];
$up_hflbga=$_POST['hflbga'];
$up_hflbgp=$_POST['hflbgp'];
$up_hflc=$_POST['hflc'];
$up_hflls=$_POST['hflls'];
$up_hfllh=$_POST['hfllh'];
$up_hflta=$_POST['hflta'];
$up_hfltd=$_POST['hfltd'];
$up_hflti=$_POST['hflti'];
$up_hfltt=$_POST['hfltt'];
$up_hflva=$_POST['hflva'];
$up_hflwhs=$_POST['hflwhs'];
$up_hflwos=$_POST['hflwos'];
$up_hflff=$_POST['hflff'];
$up_hflfsize=$_POST['hflfsize'];
$up_hflfstyle=$_POST['hflfstyle'];
$up_hflfv=$_POST['hflfv'];
$up_hflfw=$_POST['hflfw'];
$up_hflalc=$_POST['hflalc'];
$up_hflaltd=$_POST['hflaltd'];
$up_hflavc=$_POST['hflavc'];
$up_hflavtd=$_POST['hflavtd'];
$up_hflahc=$_POST['hflahc'];
$up_hflahtd=$_POST['hflahtd'];
$up_hflaac=$_POST['hflaac'];
$up_hflaatd=$_POST['hflaatd'];
$up_hfllsi=$_POST['hfllsi'];
$up_hfllsp=$_POST['hfllsp'];
$up_hfllst=$_POST['hfllst'];
//parse border input into 3 variables
$up_hflbordertop=preg_split('/[,? ]+/',$_POST['hflbt']);
$up_hflbtt=$up_hflbordertop[0];
$up_hflbts=$up_hflbordertop[1];
$up_hflbtc=$up_hflbordertop[2];
//parse border input into 3 variables
$up_hflborderright=preg_split('/[,? ]+/',$_POST['hflbr']);
$up_hflbrt=$up_hflborderright[0];
$up_hflbrs=$up_hflborderright[1];
$up_hflbrc=$up_hflborderright[2];
//parse border input into 3 variables
$up_hflborderbot=preg_split('/[,? ]+/',$_POST['hflbb']);
$up_hflbbt=$up_hflborderbot[0];
$up_hflbbs=$up_hflborderbot[1];
$up_hflbbc=$up_hflborderbot[2];
//parse border input into 3 variables
$up_hflborderleft=preg_split('/[,? ]+/',$_POST['hflbl']);
$up_hflblt=$up_hflborderleft[0];
$up_hflbls=$up_hflborderleft[1];
$up_hflblc=$up_hflborderleft[2];
$up_hflout=$_POST['hflout'];
$up_hflmarg=$_POST['hflmarg'];
$up_hflpad=$_POST['hflpad'];
$up_hflh=$_POST['hflh'];
$up_hflmaxh=$_POST['hflmaxh'];
$up_hflmaxw=$_POST['hflmaxw'];
$up_hflminh=$_POST['hflminh'];
$up_hflminw=$_POST['hflminw'];
$up_hflw=$_POST['hflw'];
$up_hflvis=$_POST['hflvis'];
$up_hfldisp=$_POST['hfldisp'];
$up_hflpos=$_POST['hflpos'];
$up_hflleft=$_POST['hflleft'];
$up_hfltop=$_POST['hfltop'];
$up_hflright=$_POST['hflright'];
$up_hflbot=$_POST['hflbot'];
$up_hflzind=$_POST['hflzind'];
$up_hflfloat=$_POST['hflfloat'];
$up_hflclr=$_POST['hflclr'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE style_master SET HFloatBackgroundColor = '$up_hflbgc' ");
  mysql_query("UPDATE style_master SET HFloatBackgroundImage = '$up_hflbgimage' ");
  mysql_query("UPDATE style_master SET HFloatBackgroundRepeat = '$up_hflbgr' ");
  mysql_query("UPDATE style_master SET HFloatBackgroundAttachment = '$up_hflbga' ");
  mysql_query("UPDATE style_master SET HFloatBackgroundPosition = '$up_hflbgp' ");
  mysql_query("UPDATE style_master SET HFloatColor = '$up_hflc' ");
  mysql_query("UPDATE style_master SET HFloatLetterSpacing = '$up_hflls' ");
  mysql_query("UPDATE style_master SET HFloatLineHeight = '$up_hfllh' ");
  mysql_query("UPDATE style_master SET HFloatTextAlign = '$up_hflta' ");
  mysql_query("UPDATE style_master SET HFloatTextDecoration = '$up_hfltd' ");
  mysql_query("UPDATE style_master SET HFloatTextIndent = '$up_hflti' ");
  mysql_query("UPDATE style_master SET HFloatTextTransform = '$up_hfltt' ");
  mysql_query("UPDATE style_master SET HFloatVerticalAlign = '$up_hflva' ");
  mysql_query("UPDATE style_master SET HFloatWhiteSpace = '$up_hflwhs' ");
  mysql_query("UPDATE style_master SET HFloatWordSpacing = '$up_hflwos' ");
  mysql_query("UPDATE style_master SET HFloatFontFamily = '$up_hflff' ");
  mysql_query("UPDATE style_master SET HFloatFontSize = '$up_hflfsize' ");
  mysql_query("UPDATE style_master SET HFloatFontStyle = '$up_hflfstyle' ");
  mysql_query("UPDATE style_master SET HFloatFontVariant = '$up_hflfv' ");
  mysql_query("UPDATE style_master SET HFloatFontWeight = '$up_hflfw' ");
  mysql_query("UPDATE style_master SET HFloataLinkColor = '$up_hflalc' ");
  mysql_query("UPDATE style_master SET HFloataLinkTextDecoration = '$up_hflaltd' ");
  mysql_query("UPDATE style_master SET HFloataVisitedColor = '$up_hflavc' ");
  mysql_query("UPDATE style_master SET HFloataVisitedDecoration = '$up_hflavtd' ");
  mysql_query("UPDATE style_master SET HFloataHoverColor = '$up_hflahc' ");
  mysql_query("UPDATE style_master SET HFloataHoverTextDecoration = '$up_hflahtd' ");
  mysql_query("UPDATE style_master SET HFloataActiveColor = '$up_hflaac' ");
  mysql_query("UPDATE style_master SET HFloataActiveTextDecoration = '$up_hflaatd' ");
  mysql_query("UPDATE style_master SET HFloatListStyleImage = '$up_hfllsi' ");
  mysql_query("UPDATE style_master SET HFloatListStylePosition = '$up_hfllsp' ");
  mysql_query("UPDATE style_master SET HFloatListStyleType = '$up_hfllst' ");
  mysql_query("UPDATE style_master SET HFloatBorderTopThickness = '$up_hflbtt' ");
  mysql_query("UPDATE style_master SET HFloatBorderTopStyle = '$up_hflbts' ");
  mysql_query("UPDATE style_master SET HFloatBorderTopColor = '$up_hflbtc' ");
  mysql_query("UPDATE style_master SET HFloatBorderRightThickness = '$up_hflbrt' ");
  mysql_query("UPDATE style_master SET HFloatBorderRightStyle = '$up_hflbrs' ");
  mysql_query("UPDATE style_master SET HFloatBorderRightColor = '$up_hflbrc' ");
  mysql_query("UPDATE style_master SET HFloatBorderBottomThickness = '$up_hflbbt' ");
  mysql_query("UPDATE style_master SET HFloatBorderBottomStyle = '$up_hflbbs' ");
  mysql_query("UPDATE style_master SET HFloatBorderBottomColor = '$up_hflbbc' ");
  mysql_query("UPDATE style_master SET HFloatBorderLeftThickness = '$up_hflblt' ");
  mysql_query("UPDATE style_master SET HFloatBorderLeftStyle = '$up_hflbls' ");
  mysql_query("UPDATE style_master SET HFloatBorderLeftColor = '$up_hflblc' ");
  mysql_query("UPDATE style_master SET HFloatOutline = '$up_hflout' ");
  mysql_query("UPDATE style_master SET HFloatMargin = '$up_hflmarg' ");
  mysql_query("UPDATE style_master SET HFloatPadding = '$up_hflpad' ");
  mysql_query("UPDATE style_master SET HFloatHeight = '$up_hflh' ");
  mysql_query("UPDATE style_master SET HFloatMaxHeight = '$up_hflmaxh' ");
  mysql_query("UPDATE style_master SET HFloatMaxWidth = '$up_hflmaxw' ");
  mysql_query("UPDATE style_master SET HFloatMinHeight = '$up_hflminh' ");
  mysql_query("UPDATE style_master SET HFloatMinWidth = '$up_hflminw' ");
  mysql_query("UPDATE style_master SET HFloatWidth = '$up_hflw' ");
  mysql_query("UPDATE style_master SET HFloatVisibility = '$up_hflvis' ");
  mysql_query("UPDATE style_master SET HFloatDisplay = '$up_hfldisp' ");
  mysql_query("UPDATE style_master SET HFloatPosition = '$up_hflpos' ");
  mysql_query("UPDATE style_master SET HFloatLeft = '$up_hflleft' ");
  mysql_query("UPDATE style_master SET HFloatTop = '$up_hfltop' ");
  mysql_query("UPDATE style_master SET HFloatRight = '$up_hflright' ");
  mysql_query("UPDATE style_master SET HFloatBottom = '$up_hflbot' ");
  mysql_query("UPDATE style_master SET HFloatZIndex = '$up_hflzind' ");
  mysql_query("UPDATE style_master SET HFloatFloat = '$up_hflfloat' ");
  mysql_query("UPDATE style_master SET HFloatClear = '$up_hflclr' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$hflbgc	=$row['HFloatBackgroundColor'];
$hflbgimage	=$row['HFloatBackgroundImage'];
$hflbgr	=$row['HFloatBackgroundRepeat'];
$hflbga	=$row['HFloatBackgroundAttachment'];
$hflbgp	=$row['HFloatBackgroundPosition'];
$hflc	=$row['HFloatColor'];
$hflls	=$row['HFloatLetterSpacing'];
$hfllh	=$row['HFloatLineHeight'];
$hflta	=$row['HFloatTextAlign'];
$hfltd	=$row['HFloatTextDecoration'];
$hflti	=$row['HFloatTextIndent'];
$hfltt	=$row['HFloatTextTransform'];
$hflva	=$row['HFloatVerticalAlign'];
$hflwhs	=$row['HFloatWhiteSpace'];
$hflwos	=$row['HFloatWordSpacing'];
$hflff	=$row['HFloatFontFamily'];
$hflfsize	=$row['HFloatFontSize'];
$hflfstyle	=$row['HFloatFontStyle'];
$hflfv	=$row['HFloatFontVariant'];
$hflfw	=$row['HFloatFontWeight'];
$hflalc	=$row['HFloataLinkColor'];
$hflaltd	=$row['HFloataLinkTextDecoration'];
$hflavc	=$row['HFloataVisitedColor'];
$hflavtd	=$row['HFloataVisitedDecoration'];
$hflahc	=$row['HFloataHoverColor'];
$hflahtd	=$row['HFloataHoverTextDecoration'];
$hflaac	=$row['HFloataActiveColor'];
$hflaatd	=$row['HFloataActiveTextDecoration'];
$hfllsi	=$row['HFloatListStyleImage'];
$hfllsp	=$row['HFloatListStylePosition'];
$hfllst	=$row['HFloatListStyleType'];
$hflbtt	=$row['HFloatBorderTopThickness'];
$hflbts	=$row['HFloatBorderTopStyle'];
$hflbtc	=$row['HFloatBorderTopColor'];
$hflbrt	=$row['HFloatBorderRightThickness'];
$hflbrs	=$row['HFloatBorderRightStyle'];
$hflbrc	=$row['HFloatBorderRightColor'];
$hflbbt	=$row['HFloatBorderBottomThickness'];
$hflbbs	=$row['HFloatBorderBottomStyle'];
$hflbbc	=$row['HFloatBorderBottomColor'];
$hflblt	=$row['HFloatBorderLeftThickness'];
$hflbls	=$row['HFloatBorderLeftStyle'];
$hflblc	=$row['HFloatBorderLeftColor'];
$hflout	=$row['HFloatOutline'];
$hflmarg	=$row['HFloatMargin'];
$hflpad	=$row['HFloatPadding'];
$hflh	=$row['HFloatHeight'];
$hflmaxh	=$row['HFloatMaxHeight'];
$hflmaxw	=$row['HFloatMaxWidth'];
$hflminh	=$row['HFloatMinHeight'];
$hflminw	=$row['HFloatMinWidth'];
$hflw	=$row['HFloatWidth'];
$hflvis	=$row['HFloatVisibility'];
$hfldisp	=$row['HFloatDisplay'];
$hflpos	=$row['HFloatPosition'];
$hflleft	=$row['HFloatLeft'];
$hfltop	=$row['HFloatTop'];
$hflright	=$row['HFloatRight'];
$hflbot	=$row['HFloatBottom'];
$hflzind	=$row['HFloatZIndex'];
$hflfloat	=$row['HFloatFloat'];
$hflclr	=$row['HFloatClear'];

/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/hflbgimage.".$filename_extension;

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
  if(file_exists('images/hflbgimage.jpg'))
  {
   unlink('images/hflbgimage.jpg');
  }
  if(file_exists('images/hflbgimage.png'))
  {
   unlink('images/hflbgimage.png');
  }
  if(file_exists('images/hflbgimage.gif'))
  {
   unlink('images/hflbgimage.gif');
  }
  if(file_exists('images/hflbgimage.bmp'))
  {
   unlink('images/hflbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }

?>


<form enctype="multipart/form-data" action="?page=layout_hfloat" method="post" name="layout_hfloat">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>FLOATING HEADER LAYOUT</H3>
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
						<input maxlength="10" name="hflbgc" size="10" type="text" value="<?=$hflbgc;?>" /></td>
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
  if ($hflbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="hflbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

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
  if ($hflbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="hflbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
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
  if ($hflbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="hflbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($hflbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="hflbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
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
						<input maxlength="20" name="hflc" type="text" value="<?=$hflc;?>" /></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						letter-spacing:</td>
					<td>
						<input maxlength="20" name="hflls" type="text" value="<?=$hflls;?>"/></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						line-height:</td>
					<td>
						<input maxlength="20" name="hfllh" type="text" value="<?=$hfllh;?>" /></td>
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
  if ($hflta == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="hflta" size="1"><option value="left" <?=$select_selected[0];?> >left</option><option value="right" <?=$select_selected[1];?> >right</option><option value="center" <?=$select_selected[2];?> >center</option><option value="justify" <?=$select_selected[3];?> >justify</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
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
  if ($hfltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-indent:</td>
					<td>
						<input maxlength="20" name="hflti" type="text" value="<?=$hflti;?>" /></td>
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
  if ($hfltt == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfltt" size="1"><option value="" <?=$select_selected[0];?> >none</option><option value="capitalize" <?=$select_selected[1];?> >capitalize</option><option value="uppercase" <?=$select_selected[2];?> >uppercase</option><option value="lowecase" <?=$select_selected[3];?> >lowercase</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						vertical-align:</td>
					<td>
						<input maxlength="20" name="hflva" type="text" value="<?=$hflva;?>" /></td>
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
  if ($hflwhs == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflwhs" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="nowrap" <?=$select_selected[1];?> >nowrap</option><option value="pre" <?=$select_selected[2];?> >pre</option><option value="pre-line" <?=$select_selected[3];?> >pre-line</option><option value="pre-wrap" <?=$select_selected[4];?> >pre-wrap</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						word-spacing:</td>
					<td>
						<input maxlength="20" name="hflwos" type="text" value="<?=$hflwos;?>" /></td>
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
						<input maxlength="100" name="hflff" size="50" type="text" value="<?=$hflff;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-size:</td>
					<td>
						<input maxlength="30" name="hflfsize" size="20" type="text" value="<?=$hflfsize;?>" /></td>
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
  if ($hflfstyle == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflfstyle" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="italic" <?=$select_selected[1];?> >italic</option><option value="oblique" <?=$select_selected[2];?> >oblique</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($hflfv == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflfv" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="small-caps" <?=$select_selected[1];?> >small-caps</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($hflfw == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflfw" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="bold" <?=$select_selected[1];?> >bold</option><option value="bolder" <?=$select_selected[2];?> >bolder</option><option value="lighter" <?=$select_selected[3];?> >lighter</option></select></td>
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
						<input maxlength="50" name="hfllsi" size="20" type="text" value="<?=$hfllsi;?>" /></td>
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
  if ($hfllsp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfllsp" size="1"><option value="inside" <?=$select_selected[0];?> >inside</option><option value="outside" <?=$select_selected[1];?> >outside (default)</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($hfllst == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfllst" size="1"><option value="decimal" <?=$select_selected[0];?> >decimal</option><option value="lower-alpha" <?=$select_selected[1];?> >lower-alpha</option><option value="lower-roman" <?=$select_selected[2];?> >lower-roman</option><option <?=$select_selected[3];?> value="none">none</option><option value="upper-alpha" <?=$select_selected[4];?> >upper-alpha</option><option value="upper-latin" <?=$select_selected[5];?> >upper-latin</option><option value="upper-roman" <?=$hfllst_selected[6];?> >upper-roman</option></select></td>
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
						<input maxlength="30" name="hflbt" size="20" type="text" value="<?=$hflbtt;?> <?=$hflbts;?> <?=$hflbtc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-right:</td>
					<td>
						<input maxlength="30" name="hflbr" size="20" type="text" value="<?=$hflbrt;?> <?=$hflbrs;?> <?=$hflbrc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-bottom:</td>
					<td>
						<input maxlength="30" name="hflbb" size="20" type="text" value="<?=$hflbbt;?> <?=$hflbbs;?> <?=$hflbbc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-left:</td>
					<td>
						<input maxlength="30" name="hflbl" size="20" type="text" value="<?=$hflblt;?> <?=$hflbls;?> <?=$hflblc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						outline:</td>
					<td>
						<input maxlength="30" name="hflout" size="20" type="text" value="<?=$hflout;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						margin:</td>
					<td>
						<input maxlength="30" name="hflmarg" size="20" type="text" value="<?=$hflmarg;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						padding:</td>
					<td>
						<input maxlength="30" name="hflpad" size="20" type="text" value="<?=$hflpad;?>" /></td>
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
						<input maxlength="20" name="hflh" size="20" type="text" value="<?=$hflh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-height:</td>
					<td>
						<input maxlength="20" name="hflmaxh" size="20" type="text" value="<?=$hflmaxh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-width:</td>
					<td>
						<input maxlength="20" name="hflmaxw" size="20" type="text" value="<?=$hflmaxw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-height:</td>
					<td>
						<input maxlength="20" name="hflminh" size="20" type="text" value="<?=$hflminh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-width:</td>
					<td>
						<input maxlength="20" name="hflminw" size="20" type="text" value="<?=$hflminw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						width:</td>
					<td>
						<input maxlength="20" name="hflw" size="20" type="text" value="<?=$hflw;?>" /></td>
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
  if ($hflvis == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflvis" size="1"><option value="visible" <?=$select_selected[0];?> >visible</option><option value="hidden" <?=$select_selected[1];?> >hidden</option><option value="collapse" <?=$select_selected[2];?> >collapse</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($hfldisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfldisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
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
  if ($hflpos == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflpos" size="1"><option value="static" <?=$select_selected[0];?> >static</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="relative" <?=$select_selected[2];?> >relative</option><option value="absolute" <?=$select_selected[3];?> >absolute</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						left:</td>
					<td>
						<input maxlength="20" name="hflleft" size="20" type="text" value="<?=$hflleft;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						top:</td>
					<td>
						<input maxlength="20" name="hfltop" size="20" type="text" value="<?=$hfltop;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						right:</td>
					<td>
						<input maxlength="20" name="hflright" size="20" type="text" value="<?=$hflright;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						bottom:</td>
					<td>
						<input maxlength="20" name="hflbot" size="20" type="text" value="<?=$hflbot;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						z-index:</td>
					<td>
						<input maxlength="20" name="hflzind" size="20" type="text" value="<?=$hflzind;?>" /></td>
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
  if ($hflfloat == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflfloat" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option></select></td>
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
  if ($hflclr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflclr" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option><option value="both" <?=$select_selected[3];?> >both</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Links</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link color:</td>
					<td>
						<input maxlength="20" name="hflalc" size="20" type="text" value="<?=$hflalc;?>" /></td>
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
  if ($hflaltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflaltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited color:</td>
					<td>
						<input maxlength="20" name="hflavc" size="20" type="text" value="<?=$hflavc;?>" /></td>
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
  if ($hflavtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflavtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover color:</td>
					<td>
						<input maxlength="20" name="hflahc" size="20" type="text" value="<?=$hflahc;?>" /></td>
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
  if ($hflahtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflahtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active color:</td>
					<td>
						<input maxlength="20" name="hflaac" size="20" type="text" value="<?=$hflaac;?>" /></td>
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
  if ($hflaatd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hflaatd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
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