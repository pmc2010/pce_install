<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_fflbgc=$_POST['fflbgc'];
 $filename=$_FILES['uploadedfile']['name'];
$up_fflbgimage=$_POST['fflbgimage'];
 $delete_image=$_POST['delete_image'];
$up_fflbgr=$_POST['fflbgr'];
$up_fflbga=$_POST['fflbga'];
$up_fflbgp=$_POST['fflbgp'];
$up_fflc=$_POST['fflc'];
$up_fflls=$_POST['fflls'];
$up_ffllh=$_POST['ffllh'];
$up_fflta=$_POST['fflta'];
$up_ffltd=$_POST['ffltd'];
$up_fflti=$_POST['fflti'];
$up_ffltt=$_POST['ffltt'];
$up_fflva=$_POST['fflva'];
$up_fflwhs=$_POST['fflwhs'];
$up_fflwos=$_POST['fflwos'];
$up_fflff=$_POST['fflff'];
$up_fflfsize=$_POST['fflfsize'];
$up_fflfstyle=$_POST['fflfstyle'];
$up_fflfv=$_POST['fflfv'];
$up_fflfw=$_POST['fflfw'];
$up_fflalc=$_POST['fflalc'];
$up_fflaltd=$_POST['fflaltd'];
$up_fflavc=$_POST['fflavc'];
$up_fflavtd=$_POST['fflavtd'];
$up_fflahc=$_POST['fflahc'];
$up_fflahtd=$_POST['fflahtd'];
$up_fflaac=$_POST['fflaac'];
$up_fflaatd=$_POST['fflaatd'];
$up_ffllsi=$_POST['ffllsi'];
$up_ffllsp=$_POST['ffllsp'];
$up_ffllst=$_POST['ffllst'];
//parse border input into 3 variables
$up_fflbordertop=preg_split('/[,? ]+/',$_POST['fflbt']);
$up_fflbtt=$up_fflbordertop[0];
$up_fflbts=$up_fflbordertop[1];
$up_fflbtc=$up_fflbordertop[2];
//parse border input into 3 variables
$up_fflborderright=preg_split('/[,? ]+/',$_POST['fflbr']);
$up_fflbrt=$up_fflborderright[0];
$up_fflbrs=$up_fflborderright[1];
$up_fflbrc=$up_fflborderright[2];
//parse border input into 3 variables
$up_fflborderbot=preg_split('/[,? ]+/',$_POST['fflbb']);
$up_fflbbt=$up_fflborderbot[0];
$up_fflbbs=$up_fflborderbot[1];
$up_fflbbc=$up_fflborderbot[2];
//parse border input into 3 variables
$up_fflborderleft=preg_split('/[,? ]+/',$_POST['fflbl']);
$up_fflblt=$up_fflborderleft[0];
$up_fflbls=$up_fflborderleft[1];
$up_fflblc=$up_fflborderleft[2];
$up_fflout=$_POST['fflout'];
$up_fflmarg=$_POST['fflmarg'];
$up_fflpad=$_POST['fflpad'];
$up_fflh=$_POST['fflh'];
$up_fflmaxh=$_POST['fflmaxh'];
$up_fflmaxw=$_POST['fflmaxw'];
$up_fflminh=$_POST['fflminh'];
$up_fflminw=$_POST['fflminw'];
$up_fflw=$_POST['fflw'];
$up_fflvis=$_POST['fflvis'];
$up_ffldisp=$_POST['ffldisp'];
$up_fflpos=$_POST['fflpos'];
$up_fflleft=$_POST['fflleft'];
$up_ffltop=$_POST['ffltop'];
$up_fflright=$_POST['fflright'];
$up_fflbot=$_POST['fflbot'];
$up_fflzind=$_POST['fflzind'];
$up_fflfloat=$_POST['fflfloat'];
$up_fflclr=$_POST['fflclr'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE style_master SET FFloatBackgroundColor = '$up_fflbgc' ");
  mysql_query("UPDATE style_master SET FFloatBackgroundImage = '$up_fflbgimage' ");
  mysql_query("UPDATE style_master SET FFloatBackgroundRepeat = '$up_fflbgr' ");
  mysql_query("UPDATE style_master SET FFloatBackgroundAttachment = '$up_fflbga' ");
  mysql_query("UPDATE style_master SET FFloatBackgroundPosition = '$up_fflbgp' ");
  mysql_query("UPDATE style_master SET FFloatColor = '$up_fflc' ");
  mysql_query("UPDATE style_master SET FFloatLetterSpacing = '$up_fflls' ");
  mysql_query("UPDATE style_master SET FFloatLineHeight = '$up_ffllh' ");
  mysql_query("UPDATE style_master SET FFloatTextAlign = '$up_fflta' ");
  mysql_query("UPDATE style_master SET FFloatTextDecoration = '$up_ffltd' ");
  mysql_query("UPDATE style_master SET FFloatTextIndent = '$up_fflti' ");
  mysql_query("UPDATE style_master SET FFloatTextTransform = '$up_ffltt' ");
  mysql_query("UPDATE style_master SET FFloatVerticalAlign = '$up_fflva' ");
  mysql_query("UPDATE style_master SET FFloatWhiteSpace = '$up_fflwhs' ");
  mysql_query("UPDATE style_master SET FFloatWordSpacing = '$up_fflwos' ");
  mysql_query("UPDATE style_master SET FFloatFontFamily = '$up_fflff' ");
  mysql_query("UPDATE style_master SET FFloatFontSize = '$up_fflfsize' ");
  mysql_query("UPDATE style_master SET FFloatFontStyle = '$up_fflfstyle' ");
  mysql_query("UPDATE style_master SET FFloatFontVariant = '$up_fflfv' ");
  mysql_query("UPDATE style_master SET FFloatFontWeight = '$up_fflfw' ");
  mysql_query("UPDATE style_master SET FFloataLinkColor = '$up_fflalc' ");
  mysql_query("UPDATE style_master SET FFloataLinkTextDecoration = '$up_fflaltd' ");
  mysql_query("UPDATE style_master SET FFloataVisitedColor = '$up_fflavc' ");
  mysql_query("UPDATE style_master SET FFloataVisitedDecoration = '$up_fflavtd' ");
  mysql_query("UPDATE style_master SET FFloataHoverColor = '$up_fflahc' ");
  mysql_query("UPDATE style_master SET FFloataHoverTextDecoration = '$up_fflahtd' ");
  mysql_query("UPDATE style_master SET FFloataActiveColor = '$up_fflaac' ");
  mysql_query("UPDATE style_master SET FFloataActiveTextDecoration = '$up_fflaatd' ");
  mysql_query("UPDATE style_master SET FFloatListStyleImage = '$up_ffllsi' ");
  mysql_query("UPDATE style_master SET FFloatListStylePosition = '$up_ffllsp' ");
  mysql_query("UPDATE style_master SET FFloatListStyleType = '$up_ffllst' ");
  mysql_query("UPDATE style_master SET FFloatBorderTopThickness = '$up_fflbtt' ");
  mysql_query("UPDATE style_master SET FFloatBorderTopStyle = '$up_fflbts' ");
  mysql_query("UPDATE style_master SET FFloatBorderTopColor = '$up_fflbtc' ");
  mysql_query("UPDATE style_master SET FFloatBorderRightThickness = '$up_fflbrt' ");
  mysql_query("UPDATE style_master SET FFloatBorderRightStyle = '$up_fflbrs' ");
  mysql_query("UPDATE style_master SET FFloatBorderRightColor = '$up_fflbrc' ");
  mysql_query("UPDATE style_master SET FFloatBorderBottomThickness = '$up_fflbbt' ");
  mysql_query("UPDATE style_master SET FFloatBorderBottomStyle = '$up_fflbbs' ");
  mysql_query("UPDATE style_master SET FFloatBorderBottomColor = '$up_fflbbc' ");
  mysql_query("UPDATE style_master SET FFloatBorderLeftThickness = '$up_fflblt' ");
  mysql_query("UPDATE style_master SET FFloatBorderLeftStyle = '$up_fflbls' ");
  mysql_query("UPDATE style_master SET FFloatBorderLeftColor = '$up_fflblc' ");
  mysql_query("UPDATE style_master SET FFloatOutline = '$up_fflout' ");
  mysql_query("UPDATE style_master SET FFloatMargin = '$up_fflmarg' ");
  mysql_query("UPDATE style_master SET FFloatPadding = '$up_fflpad' ");
  mysql_query("UPDATE style_master SET FFloatHeight = '$up_fflh' ");
  mysql_query("UPDATE style_master SET FFloatMaxHeight = '$up_fflmaxh' ");
  mysql_query("UPDATE style_master SET FFloatMaxWidth = '$up_fflmaxw' ");
  mysql_query("UPDATE style_master SET FFloatMinHeight = '$up_fflminh' ");
  mysql_query("UPDATE style_master SET FFloatMinWidth = '$up_fflminw' ");
  mysql_query("UPDATE style_master SET FFloatWidth = '$up_fflw' ");
  mysql_query("UPDATE style_master SET FFloatVisibility = '$up_fflvis' ");
  mysql_query("UPDATE style_master SET FFloatDisplay = '$up_ffldisp' ");
  mysql_query("UPDATE style_master SET FFloatPosition = '$up_fflpos' ");
  mysql_query("UPDATE style_master SET FFloatLeft = '$up_fflleft' ");
  mysql_query("UPDATE style_master SET FFloatTop = '$up_ffltop' ");
  mysql_query("UPDATE style_master SET FFloatRight = '$up_fflright' ");
  mysql_query("UPDATE style_master SET FFloatBottom = '$up_fflbot' ");
  mysql_query("UPDATE style_master SET FFloatZIndex = '$up_fflzind' ");
  mysql_query("UPDATE style_master SET FFloatFloat = '$up_fflfloat' ");
  mysql_query("UPDATE style_master SET FFloatClear = '$up_fflclr' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$fflbgc	=$row['FFloatBackgroundColor'];
$fflbgimage	=$row['FFloatBackgroundImage'];
$fflbgr	=$row['FFloatBackgroundRepeat'];
$fflbga	=$row['FFloatBackgroundAttachment'];
$fflbgp	=$row['FFloatBackgroundPosition'];
$fflc	=$row['FFloatColor'];
$fflls	=$row['FFloatLetterSpacing'];
$ffllh	=$row['FFloatLineHeight'];
$fflta	=$row['FFloatTextAlign'];
$ffltd	=$row['FFloatTextDecoration'];
$fflti	=$row['FFloatTextIndent'];
$ffltt	=$row['FFloatTextTransform'];
$fflva	=$row['FFloatVerticalAlign'];
$fflwhs	=$row['FFloatWhiteSpace'];
$fflwos	=$row['FFloatWordSpacing'];
$fflff	=$row['FFloatFontFamily'];
$fflfsize	=$row['FFloatFontSize'];
$fflfstyle	=$row['FFloatFontStyle'];
$fflfv	=$row['FFloatFontVariant'];
$fflfw	=$row['FFloatFontWeight'];
$fflalc	=$row['FFloataLinkColor'];
$fflaltd	=$row['FFloataLinkTextDecoration'];
$fflavc	=$row['FFloataVisitedColor'];
$fflavtd	=$row['FFloataVisitedDecoration'];
$fflahc	=$row['FFloataHoverColor'];
$fflahtd	=$row['FFloataHoverTextDecoration'];
$fflaac	=$row['FFloataActiveColor'];
$fflaatd	=$row['FFloataActiveTextDecoration'];
$ffllsi	=$row['FFloatListStyleImage'];
$ffllsp	=$row['FFloatListStylePosition'];
$ffllst	=$row['FFloatListStyleType'];
$fflbtt	=$row['FFloatBorderTopThickness'];
$fflbts	=$row['FFloatBorderTopStyle'];
$fflbtc	=$row['FFloatBorderTopColor'];
$fflbrt	=$row['FFloatBorderRightThickness'];
$fflbrs	=$row['FFloatBorderRightStyle'];
$fflbrc	=$row['FFloatBorderRightColor'];
$fflbbt	=$row['FFloatBorderBottomThickness'];
$fflbbs	=$row['FFloatBorderBottomStyle'];
$fflbbc	=$row['FFloatBorderBottomColor'];
$fflblt	=$row['FFloatBorderLeftThickness'];
$fflbls	=$row['FFloatBorderLeftStyle'];
$fflblc	=$row['FFloatBorderLeftColor'];
$fflout	=$row['FFloatOutline'];
$fflmarg	=$row['FFloatMargin'];
$fflpad	=$row['FFloatPadding'];
$fflh	=$row['FFloatHeight'];
$fflmaxh	=$row['FFloatMaxHeight'];
$fflmaxw	=$row['FFloatMaxWidth'];
$fflminh	=$row['FFloatMinHeight'];
$fflminw	=$row['FFloatMinWidth'];
$fflw	=$row['FFloatWidth'];
$fflvis	=$row['FFloatVisibility'];
$ffldisp	=$row['FFloatDisplay'];
$fflpos	=$row['FFloatPosition'];
$fflleft	=$row['FFloatLeft'];
$ffltop	=$row['FFloatTop'];
$fflright	=$row['FFloatRight'];
$fflbot	=$row['FFloatBottom'];
$fflzind	=$row['FFloatZIndex'];
$fflfloat	=$row['FFloatFloat'];
$fflclr	=$row['FFloatClear'];


/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/fflbgimage.".$filename_extension;

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
  if(file_exists('images/fflbgimage.jpg'))
  {
   unlink('images/fflbgimage.jpg');
  }
  if(file_exists('images/fflbgimage.png'))
  {
   unlink('images/fflbgimage.png');
  }
  if(file_exists('images/fflbgimage.gif'))
  {
   unlink('images/fflbgimage.gif');
  }
  if(file_exists('images/fflbgimage.bmp'))
  {
   unlink('images/fflbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }

?>


<form enctype="multipart/form-data" action="?page=layout_ffloat" method="post" name="layout_ffloat">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>FLOATING FOOTER LAYOUT</H3>
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
						<input maxlength="10" name="fflbgc" size="10" type="text" value="<?=$fflbgc;?>" /></td>
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
  if ($fflbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="fflbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

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
  if ($fflbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="fflbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
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
  if ($fflbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="fflbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($fflbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="fflbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
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
						<input maxlength="20" name="fflc" type="text" value="<?=$fflc;?>" /></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						letter-spacing:</td>
					<td>
						<input maxlength="20" name="fflls" type="text" value="<?=$fflls;?>"/></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						line-height:</td>
					<td>
						<input maxlength="20" name="ffllh" type="text" value="<?=$ffllh;?>" /></td>
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
  if ($fflta == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="fflta" size="1"><option value="left" <?=$select_selected[0];?> >left</option><option value="right" <?=$select_selected[1];?> >right</option><option value="center" <?=$select_selected[2];?> >center</option><option value="justify" <?=$select_selected[3];?> >justify</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
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
  if ($ffltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-indent:</td>
					<td>
						<input maxlength="20" name="fflti" type="text" value="<?=$fflti;?>" /></td>
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
  if ($ffltt == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffltt" size="1"><option value="" <?=$select_selected[0];?> >none</option><option value="capitalize" <?=$select_selected[1];?> >capitalize</option><option value="uppercase" <?=$select_selected[2];?> >uppercase</option><option value="lowecase" <?=$select_selected[3];?> >lowercase</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						vertical-align:</td>
					<td>
						<input maxlength="20" name="fflva" type="text" value="<?=$fflva;?>" /></td>
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
  if ($fflwhs == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflwhs" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="nowrap" <?=$select_selected[1];?> >nowrap</option><option value="pre" <?=$select_selected[2];?> >pre</option><option value="pre-line" <?=$select_selected[3];?> >pre-line</option><option value="pre-wrap" <?=$select_selected[4];?> >pre-wrap</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						word-spacing:</td>
					<td>
						<input maxlength="20" name="fflwos" type="text" value="<?=$fflwos;?>" /></td>
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
						<input maxlength="100" name="fflff" size="50" type="text" value="<?=$fflff;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-size:</td>
					<td>
						<input maxlength="30" name="fflfsize" size="20" type="text" value="<?=$fflfsize;?>" /></td>
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
  if ($fflfstyle == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflfstyle" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="italic" <?=$select_selected[1];?> >italic</option><option value="oblique" <?=$select_selected[2];?> >oblique</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($fflfv == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflfv" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="small-caps" <?=$select_selected[1];?> >small-caps</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($fflfw == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflfw" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="bold" <?=$select_selected[1];?> >bold</option><option value="bolder" <?=$select_selected[2];?> >bolder</option><option value="lighter" <?=$select_selected[3];?> >lighter</option></select></td>
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
						<input maxlength="50" name="ffllsi" size="20" type="text" value="<?=$ffllsi;?>" /></td>
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
  if ($ffllsp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffllsp" size="1"><option value="inside" <?=$select_selected[0];?> >inside</option><option value="outside" <?=$select_selected[1];?> >outside (default)</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($ffllst == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffllst" size="1"><option value="decimal" <?=$select_selected[0];?> >decimal</option><option value="lower-alpha" <?=$select_selected[1];?> >lower-alpha</option><option value="lower-roman" <?=$select_selected[2];?> >lower-roman</option><option <?=$select_selected[3];?> value="none">none</option><option value="upper-alpha" <?=$select_selected[4];?> >upper-alpha</option><option value="upper-latin" <?=$select_selected[5];?> >upper-latin</option><option value="upper-roman" <?=$ffllst_selected[6];?> >upper-roman</option></select></td>
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
						<input maxlength="30" name="fflbt" size="20" type="text" value="<?=$fflbtt;?> <?=$fflbts;?> <?=$fflbtc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-right:</td>
					<td>
						<input maxlength="30" name="fflbr" size="20" type="text" value="<?=$fflbrt;?> <?=$fflbrs;?> <?=$fflbrc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-bottom:</td>
					<td>
						<input maxlength="30" name="fflbb" size="20" type="text" value="<?=$fflbbt;?> <?=$fflbbs;?> <?=$fflbbc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-left:</td>
					<td>
						<input maxlength="30" name="fflbl" size="20" type="text" value="<?=$fflblt;?> <?=$fflbls;?> <?=$fflblc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						outline:</td>
					<td>
						<input maxlength="30" name="fflout" size="20" type="text" value="<?=$fflout;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						margin:</td>
					<td>
						<input maxlength="30" name="fflmarg" size="20" type="text" value="<?=$fflmarg;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						padding:</td>
					<td>
						<input maxlength="30" name="fflpad" size="20" type="text" value="<?=$fflpad;?>" /></td>
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
						<input maxlength="20" name="fflh" size="20" type="text" value="<?=$fflh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-height:</td>
					<td>
						<input maxlength="20" name="fflmaxh" size="20" type="text" value="<?=$fflmaxh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-width:</td>
					<td>
						<input maxlength="20" name="fflmaxw" size="20" type="text" value="<?=$fflmaxw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-height:</td>
					<td>
						<input maxlength="20" name="fflminh" size="20" type="text" value="<?=$fflminh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-width:</td>
					<td>
						<input maxlength="20" name="fflminw" size="20" type="text" value="<?=$fflminw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						width:</td>
					<td>
						<input maxlength="20" name="fflw" size="20" type="text" value="<?=$fflw;?>" /></td>
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
  if ($fflvis == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflvis" size="1"><option value="visible" <?=$select_selected[0];?> >visible</option><option value="hidden" <?=$select_selected[1];?> >hidden</option><option value="collapse" <?=$select_selected[2];?> >collapse</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($ffldisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffldisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
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
  if ($fflpos == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflpos" size="1"><option value="static" <?=$select_selected[0];?> >static</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="relative" <?=$select_selected[2];?> >relative</option><option value="absolute" <?=$select_selected[3];?> >absolute</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						left:</td>
					<td>
						<input maxlength="20" name="fflleft" size="20" type="text" value="<?=$fflleft;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						top:</td>
					<td>
						<input maxlength="20" name="ffltop" size="20" type="text" value="<?=$ffltop;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						right:</td>
					<td>
						<input maxlength="20" name="fflright" size="20" type="text" value="<?=$fflright;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						bottom:</td>
					<td>
						<input maxlength="20" name="fflbot" size="20" type="text" value="<?=$fflbot;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						z-index:</td>
					<td>
						<input maxlength="20" name="fflzind" size="20" type="text" value="<?=$fflzind;?>" /></td>
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
  if ($fflfloat == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflfloat" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option></select></td>
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
  if ($fflclr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflclr" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option><option value="both" <?=$select_selected[3];?> >both</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Links</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link color:</td>
					<td>
						<input maxlength="20" name="fflalc" size="20" type="text" value="<?=$fflalc;?>" /></td>
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
  if ($fflaltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflaltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited color:</td>
					<td>
						<input maxlength="20" name="fflavc" size="20" type="text" value="<?=$fflavc;?>" /></td>
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
  if ($fflavtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflavtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover color:</td>
					<td>
						<input maxlength="20" name="fflahc" size="20" type="text" value="<?=$fflahc;?>" /></td>
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
  if ($fflahtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflahtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active color:</td>
					<td>
						<input maxlength="20" name="fflaac" size="20" type="text" value="<?=$fflaac;?>" /></td>
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
  if ($fflaatd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fflaatd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
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