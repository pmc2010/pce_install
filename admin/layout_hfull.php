<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_hfullbgc=$_POST['hfullbgc'];
 $filename=$_FILES['uploadedfile']['name'];
$up_hfullbgimage=$_POST['hfullbgimage'];
 $delete_image=$_POST['delete_image'];
$up_hfullbgr=$_POST['hfullbgr'];
$up_hfullbga=$_POST['hfullbga'];
$up_hfullbgp=$_POST['hfullbgp'];
$up_hfullc=$_POST['hfullc'];
$up_hfullls=$_POST['hfullls'];
$up_hfulllh=$_POST['hfulllh'];
$up_hfullta=$_POST['hfullta'];
$up_hfulltd=$_POST['hfulltd'];
$up_hfullti=$_POST['hfullti'];
$up_hfulltt=$_POST['hfulltt'];
$up_hfullva=$_POST['hfullva'];
$up_hfullwhs=$_POST['hfullwhs'];
$up_hfullwos=$_POST['hfullwos'];
$up_hfullff=$_POST['hfullff'];
$up_hfullfsize=$_POST['hfullfsize'];
$up_hfullfstyle=$_POST['hfullfstyle'];
$up_hfullfv=$_POST['hfullfv'];
$up_hfullfw=$_POST['hfullfw'];
$up_hfullalc=$_POST['hfullalc'];
$up_hfullaltd=$_POST['hfullaltd'];
$up_hfullavc=$_POST['hfullavc'];
$up_hfullavtd=$_POST['hfullavtd'];
$up_hfullahc=$_POST['hfullahc'];
$up_hfullahtd=$_POST['hfullahtd'];
$up_hfullaac=$_POST['hfullaac'];
$up_hfullaatd=$_POST['hfullaatd'];
$up_hfulllsi=$_POST['hfulllsi'];
$up_hfulllsp=$_POST['hfulllsp'];
$up_hfulllst=$_POST['hfulllst'];
//parse border input into 3 variables
$up_hfullbordertop=preg_split('/[,? ]+/',$_POST['hfullbt']);
$up_hfullbtt=$up_hfullbordertop[0];
$up_hfullbts=$up_hfullbordertop[1];
$up_hfullbtc=$up_hfullbordertop[2];
//parse border input into 3 variables
$up_hfullborderright=preg_split('/[,? ]+/',$_POST['hfullbr']);
$up_hfullbrt=$up_hfullborderright[0];
$up_hfullbrs=$up_hfullborderright[1];
$up_hfullbrc=$up_hfullborderright[2];
//parse border input into 3 variables
$up_hfullborderbot=preg_split('/[,? ]+/',$_POST['hfullbb']);
$up_hfullbbt=$up_hfullborderbot[0];
$up_hfullbbs=$up_hfullborderbot[1];
$up_hfullbbc=$up_hfullborderbot[2];
//parse border input into 3 variables
$up_hfullborderleft=preg_split('/[,? ]+/',$_POST['hfullbl']);
$up_hfullblt=$up_hfullborderleft[0];
$up_hfullbls=$up_hfullborderleft[1];
$up_hfullblc=$up_hfullborderleft[2];
$up_hfullout=$_POST['hfullout'];
$up_hfullmarg=$_POST['hfullmarg'];
$up_hfullpad=$_POST['hfullpad'];
$up_hfullh=$_POST['hfullh'];
$up_hfullmaxh=$_POST['hfullmaxh'];
$up_hfullmaxw=$_POST['hfullmaxw'];
$up_hfullminh=$_POST['hfullminh'];
$up_hfullminw=$_POST['hfullminw'];
$up_hfullw=$_POST['hfullw'];
$up_hfullvis=$_POST['hfullvis'];
$up_hfulldisp=$_POST['hfulldisp'];
$up_hfullpos=$_POST['hfullpos'];
$up_hfullleft=$_POST['hfullleft'];
$up_hfulltop=$_POST['hfulltop'];
$up_hfullright=$_POST['hfullright'];
$up_hfullbot=$_POST['hfullbot'];
$up_hfullzind=$_POST['hfullzind'];
$up_hfullfloat=$_POST['hfullfloat'];
$up_hfullclr=$_POST['hfullclr'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE style_master SET HFullBackgroundColor = '$up_hfullbgc' ");
  mysql_query("UPDATE style_master SET HFullBackgroundImage = '$up_hfullbgimage' ");
  mysql_query("UPDATE style_master SET HFullBackgroundRepeat = '$up_hfullbgr' ");
  mysql_query("UPDATE style_master SET HFullBackgroundAttachment = '$up_hfullbga' ");
  mysql_query("UPDATE style_master SET HFullBackgroundPosition = '$up_hfullbgp' ");
  mysql_query("UPDATE style_master SET HFullColor = '$up_hfullc' ");
  mysql_query("UPDATE style_master SET HFullLetterSpacing = '$up_hfullls' ");
  mysql_query("UPDATE style_master SET HFullLineHeight = '$up_hfulllh' ");
  mysql_query("UPDATE style_master SET HFullTextAlign = '$up_hfullta' ");
  mysql_query("UPDATE style_master SET HFullTextDecoration = '$up_hfulltd' ");
  mysql_query("UPDATE style_master SET HFullTextIndent = '$up_hfullti' ");
  mysql_query("UPDATE style_master SET HFullTextTransform = '$up_hfulltt' ");
  mysql_query("UPDATE style_master SET HFullVerticalAlign = '$up_hfullva' ");
  mysql_query("UPDATE style_master SET HFullWhiteSpace = '$up_hfullwhs' ");
  mysql_query("UPDATE style_master SET HFullWordSpacing = '$up_hfullwos' ");
  mysql_query("UPDATE style_master SET HFullFontFamily = '$up_hfullff' ");
  mysql_query("UPDATE style_master SET HFullFontSize = '$up_hfullfsize' ");
  mysql_query("UPDATE style_master SET HFullFontStyle = '$up_hfullfstyle' ");
  mysql_query("UPDATE style_master SET HFullFontVariant = '$up_hfullfv' ");
  mysql_query("UPDATE style_master SET HFullFontWeight = '$up_hfullfw' ");
  mysql_query("UPDATE style_master SET HFullaLinkColor = '$up_hfullalc' ");
  mysql_query("UPDATE style_master SET HFullaLinkTextDecoration = '$up_hfullaltd' ");
  mysql_query("UPDATE style_master SET HFullaVisitedColor = '$up_hfullavc' ");
  mysql_query("UPDATE style_master SET HFullaVisitedDecoration = '$up_hfullavtd' ");
  mysql_query("UPDATE style_master SET HFullaHoverColor = '$up_hfullahc' ");
  mysql_query("UPDATE style_master SET HFullaHoverTextDecoration = '$up_hfullahtd' ");
  mysql_query("UPDATE style_master SET HFullaActiveColor = '$up_hfullaac' ");
  mysql_query("UPDATE style_master SET HFullaActiveTextDecoration = '$up_hfullaatd' ");
  mysql_query("UPDATE style_master SET HFullListStyleImage = '$up_hfulllsi' ");
  mysql_query("UPDATE style_master SET HFullListStylePosition = '$up_hfulllsp' ");
  mysql_query("UPDATE style_master SET HFullListStyleType = '$up_hfulllst' ");
  mysql_query("UPDATE style_master SET HFullBorderTopThickness = '$up_hfullbtt' ");
  mysql_query("UPDATE style_master SET HFullBorderTopStyle = '$up_hfullbts' ");
  mysql_query("UPDATE style_master SET HFullBorderTopColor = '$up_hfullbtc' ");
  mysql_query("UPDATE style_master SET HFullBorderRightThickness = '$up_hfullbrt' ");
  mysql_query("UPDATE style_master SET HFullBorderRightStyle = '$up_hfullbrs' ");
  mysql_query("UPDATE style_master SET HFullBorderRightColor = '$up_hfullbrc' ");
  mysql_query("UPDATE style_master SET HFullBorderBottomThickness = '$up_hfullbbt' ");
  mysql_query("UPDATE style_master SET HFullBorderBottomStyle = '$up_hfullbbs' ");
  mysql_query("UPDATE style_master SET HFullBorderBottomColor = '$up_hfullbbc' ");
  mysql_query("UPDATE style_master SET HFullBorderLeftThickness = '$up_hfullblt' ");
  mysql_query("UPDATE style_master SET HFullBorderLeftStyle = '$up_hfullbls' ");
  mysql_query("UPDATE style_master SET HFullBorderLeftColor = '$up_hfullblc' ");
  mysql_query("UPDATE style_master SET HFullOutline = '$up_hfullout' ");
  mysql_query("UPDATE style_master SET HFullMargin = '$up_hfullmarg' ");
  mysql_query("UPDATE style_master SET HFullPadding = '$up_hfullpad' ");
  mysql_query("UPDATE style_master SET HFullHeight = '$up_hfullh' ");
  mysql_query("UPDATE style_master SET HFullMaxHeight = '$up_hfullmaxh' ");
  mysql_query("UPDATE style_master SET HFullMaxWidth = '$up_hfullmaxw' ");
  mysql_query("UPDATE style_master SET HFullMinHeight = '$up_hfullminh' ");
  mysql_query("UPDATE style_master SET HFullMinWidth = '$up_hfullminw' ");
  mysql_query("UPDATE style_master SET HFullWidth = '$up_hfullw' ");
  mysql_query("UPDATE style_master SET HFullVisibility = '$up_hfullvis' ");
  mysql_query("UPDATE style_master SET HFullDisplay = '$up_hfulldisp' ");
  mysql_query("UPDATE style_master SET HFullPosition = '$up_hfullpos' ");
  mysql_query("UPDATE style_master SET HFullLeft = '$up_hfullleft' ");
  mysql_query("UPDATE style_master SET HFullTop = '$up_hfulltop' ");
  mysql_query("UPDATE style_master SET HFullRight = '$up_hfullright' ");
  mysql_query("UPDATE style_master SET HFullBottom = '$up_hfullbot' ");
  mysql_query("UPDATE style_master SET HFullZIndex = '$up_hfullzind' ");
  mysql_query("UPDATE style_master SET HFullFloat = '$up_hfullfloat' ");
  mysql_query("UPDATE style_master SET HFullClear = '$up_hfullclr' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$hfullbgc	=$row['HFullBackgroundColor'];
$hfullbgimage	=$row['HFullBackgroundImage'];
$hfullbgr	=$row['HFullBackgroundRepeat'];
$hfullbga	=$row['HFullBackgroundAttachment'];
$hfullbgp	=$row['HFullBackgroundPosition'];
$hfullc	=$row['HFullColor'];
$hfullls	=$row['HFullLetterSpacing'];
$hfulllh	=$row['HFullLineHeight'];
$hfullta	=$row['HFullTextAlign'];
$hfulltd	=$row['HFullTextDecoration'];
$hfullti	=$row['HFullTextIndent'];
$hfulltt	=$row['HFullTextTransform'];
$hfullva	=$row['HFullVerticalAlign'];
$hfullwhs	=$row['HFullWhiteSpace'];
$hfullwos	=$row['HFullWordSpacing'];
$hfullff	=$row['HFullFontFamily'];
$hfullfsize	=$row['HFullFontSize'];
$hfullfstyle	=$row['HFullFontStyle'];
$hfullfv	=$row['HFullFontVariant'];
$hfullfw	=$row['HFullFontWeight'];
$hfullalc	=$row['HFullaLinkColor'];
$hfullaltd	=$row['HFullaLinkTextDecoration'];
$hfullavc	=$row['HFullaVisitedColor'];
$hfullavtd	=$row['HFullaVisitedDecoration'];
$hfullahc	=$row['HFullaHoverColor'];
$hfullahtd	=$row['HFullaHoverTextDecoration'];
$hfullaac	=$row['HFullaActiveColor'];
$hfullaatd	=$row['HFullaActiveTextDecoration'];
$hfulllsi	=$row['HFullListStyleImage'];
$hfulllsp	=$row['HFullListStylePosition'];
$hfulllst	=$row['HFullListStyleType'];
$hfullbtt	=$row['HFullBorderTopThickness'];
$hfullbts	=$row['HFullBorderTopStyle'];
$hfullbtc	=$row['HFullBorderTopColor'];
$hfullbrt	=$row['HFullBorderRightThickness'];
$hfullbrs	=$row['HFullBorderRightStyle'];
$hfullbrc	=$row['HFullBorderRightColor'];
$hfullbbt	=$row['HFullBorderBottomThickness'];
$hfullbbs	=$row['HFullBorderBottomStyle'];
$hfullbbc	=$row['HFullBorderBottomColor'];
$hfullblt	=$row['HFullBorderLeftThickness'];
$hfullbls	=$row['HFullBorderLeftStyle'];
$hfullblc	=$row['HFullBorderLeftColor'];
$hfullout	=$row['HFullOutline'];
$hfullmarg	=$row['HFullMargin'];
$hfullpad	=$row['HFullPadding'];
$hfullh	=$row['HFullHeight'];
$hfullmaxh	=$row['HFullMaxHeight'];
$hfullmaxw	=$row['HFullMaxWidth'];
$hfullminh	=$row['HFullMinHeight'];
$hfullminw	=$row['HFullMinWidth'];
$hfullw	=$row['HFullWidth'];
$hfullvis	=$row['HFullVisibility'];
$hfulldisp	=$row['HFullDisplay'];
$hfullpos	=$row['HFullPosition'];
$hfullleft	=$row['HFullLeft'];
$hfulltop	=$row['HFullTop'];
$hfullright	=$row['HFullRight'];
$hfullbot	=$row['HFullBottom'];
$hfullzind	=$row['HFullZIndex'];
$hfullfloat	=$row['HFullFloat'];
$hfullclr	=$row['HFullClear'];

/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/hfullbgimage.".$filename_extension;

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
  if(file_exists('images/hfullbgimage.jpg'))
  {
   unlink('images/hfullbgimage.jpg');
  }
  if(file_exists('images/hfullbgimage.png'))
  {
   unlink('images/hfullbgimage.png');
  }
  if(file_exists('images/hfullbgimage.gif'))
  {
   unlink('images/hfullbgimage.gif');
  }
  if(file_exists('images/hfullbgimage.bmp'))
  {
   unlink('images/hfullbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }
?>


<form enctype="multipart/form-data" action="?page=layout_hfull" method="post" name="layout_hfull">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>FULL HEADER LAYOUT</H3>
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
						<input maxlength="10" name="hfullbgc" size="10" type="text" value="<?=$hfullbgc;?>" /></td>
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
  if ($hfullbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="hfullbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

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
  if ($hfullbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="hfullbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
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
  if ($hfullbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="hfullbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($hfullbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="hfullbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
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
						<input maxlength="20" name="hfullc" type="text" value="<?=$hfullc;?>" /></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						letter-spacing:</td>
					<td>
						<input maxlength="20" name="hfullls" type="text" value="<?=$hfullls;?>"/></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						line-height:</td>
					<td>
						<input maxlength="20" name="hfulllh" type="text" value="<?=$hfulllh;?>" /></td>
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
  if ($hfullta == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="hfullta" size="1"><option value="left" <?=$select_selected[0];?> >left</option><option value="right" <?=$select_selected[1];?> >right</option><option value="center" <?=$select_selected[2];?> >center</option><option value="justify" <?=$select_selected[3];?> >justify</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
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
  if ($hfulltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfulltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-indent:</td>
					<td>
						<input maxlength="20" name="hfullti" type="text" value="<?=$hfullti;?>" /></td>
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
  if ($hfulltt == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfulltt" size="1"><option value="" <?=$select_selected[0];?> >none</option><option value="capitalize" <?=$select_selected[1];?> >capitalize</option><option value="uppercase" <?=$select_selected[2];?> >uppercase</option><option value="lowecase" <?=$select_selected[3];?> >lowercase</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						vertical-align:</td>
					<td>
						<input maxlength="20" name="hfullva" type="text" value="<?=$hfullva;?>" /></td>
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
  if ($hfullwhs == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullwhs" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="nowrap" <?=$select_selected[1];?> >nowrap</option><option value="pre" <?=$select_selected[2];?> >pre</option><option value="pre-line" <?=$select_selected[3];?> >pre-line</option><option value="pre-wrap" <?=$select_selected[4];?> >pre-wrap</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						word-spacing:</td>
					<td>
						<input maxlength="20" name="hfullwos" type="text" value="<?=$hfullwos;?>" /></td>
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
						<input maxlength="100" name="hfullff" size="50" type="text" value="<?=$hfullff;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-size:</td>
					<td>
						<input maxlength="30" name="hfullfsize" size="20" type="text" value="<?=$hfullfsize;?>" /></td>
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
  if ($hfullfstyle == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullfstyle" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="italic" <?=$select_selected[1];?> >italic</option><option value="oblique" <?=$select_selected[2];?> >oblique</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($hfullfv == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullfv" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="small-caps" <?=$select_selected[1];?> >small-caps</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($hfullfw == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullfw" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="bold" <?=$select_selected[1];?> >bold</option><option value="bolder" <?=$select_selected[2];?> >bolder</option><option value="lighter" <?=$select_selected[3];?> >lighter</option></select></td>
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
						<input maxlength="50" name="hfulllsi" size="20" type="text" value="<?=$hfulllsi;?>" /></td>
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
  if ($hfulllsp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfulllsp" size="1"><option value="inside" <?=$select_selected[0];?> >inside</option><option value="outside" <?=$select_selected[1];?> >outside (default)</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($hfulllst == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfulllst" size="1"><option value="decimal" <?=$select_selected[0];?> >decimal</option><option value="lower-alpha" <?=$select_selected[1];?> >lower-alpha</option><option value="lower-roman" <?=$select_selected[2];?> >lower-roman</option><option <?=$select_selected[3];?> value="none">none</option><option value="upper-alpha" <?=$select_selected[4];?> >upper-alpha</option><option value="upper-latin" <?=$select_selected[5];?> >upper-latin</option><option value="upper-roman" <?=$hfulllst_selected[6];?> >upper-roman</option></select></td>
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
						<input maxlength="30" name="hfullbt" size="20" type="text" value="<?=$hfullbtt;?> <?=$hfullbts;?> <?=$hfullbtc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-right:</td>
					<td>
						<input maxlength="30" name="hfullbr" size="20" type="text" value="<?=$hfullbrt;?> <?=$hfullbrs;?> <?=$hfullbrc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-bottom:</td>
					<td>
						<input maxlength="30" name="hfullbb" size="20" type="text" value="<?=$hfullbbt;?> <?=$hfullbbs;?> <?=$hfullbbc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-left:</td>
					<td>
						<input maxlength="30" name="hfullbl" size="20" type="text" value="<?=$hfullblt;?> <?=$hfullbls;?> <?=$hfullblc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						outline:</td>
					<td>
						<input maxlength="30" name="hfullout" size="20" type="text" value="<?=$hfullout;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						margin:</td>
					<td>
						<input maxlength="30" name="hfullmarg" size="20" type="text" value="<?=$hfullmarg;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						padding:</td>
					<td>
						<input maxlength="30" name="hfullpad" size="20" type="text" value="<?=$hfullpad;?>" /></td>
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
						<input maxlength="20" name="hfullh" size="20" type="text" value="<?=$hfullh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-height:</td>
					<td>
						<input maxlength="20" name="hfullmaxh" size="20" type="text" value="<?=$hfullmaxh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-width:</td>
					<td>
						<input maxlength="20" name="hfullmaxw" size="20" type="text" value="<?=$hfullmaxw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-height:</td>
					<td>
						<input maxlength="20" name="hfullminh" size="20" type="text" value="<?=$hfullminh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-width:</td>
					<td>
						<input maxlength="20" name="hfullminw" size="20" type="text" value="<?=$hfullminw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						width:</td>
					<td>
						<input maxlength="20" name="hfullw" size="20" type="text" value="<?=$hfullw;?>" /></td>
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
  if ($hfullvis == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullvis" size="1"><option value="visible" <?=$select_selected[0];?> >visible</option><option value="hidden" <?=$select_selected[1];?> >hidden</option><option value="collapse" <?=$select_selected[2];?> >collapse</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($hfulldisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfulldisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
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
  if ($hfullpos == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullpos" size="1"><option value="static" <?=$select_selected[0];?> >static</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="relative" <?=$select_selected[2];?> >relative</option><option value="absolute" <?=$select_selected[3];?> >absolute</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						left:</td>
					<td>
						<input maxlength="20" name="hfullleft" size="20" type="text" value="<?=$hfullleft;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						top:</td>
					<td>
						<input maxlength="20" name="hfulltop" size="20" type="text" value="<?=$hfulltop;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						right:</td>
					<td>
						<input maxlength="20" name="hfullright" size="20" type="text" value="<?=$hfullright;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						bottom:</td>
					<td>
						<input maxlength="20" name="hfullbot" size="20" type="text" value="<?=$hfullbot;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						z-index:</td>
					<td>
						<input maxlength="20" name="hfullzind" size="20" type="text" value="<?=$hfullzind;?>" /></td>
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
  if ($hfullfloat == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullfloat" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option></select></td>
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
  if ($hfullclr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullclr" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option><option value="both" <?=$select_selected[3];?> >both</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Links</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link color:</td>
					<td>
						<input maxlength="20" name="hfullalc" size="20" type="text" value="<?=$hfullalc;?>" /></td>
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
  if ($hfullaltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullaltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited color:</td>
					<td>
						<input maxlength="20" name="hfullavc" size="20" type="text" value="<?=$hfullavc;?>" /></td>
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
  if ($hfullavtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullavtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover color:</td>
					<td>
						<input maxlength="20" name="hfullahc" size="20" type="text" value="<?=$hfullahc;?>" /></td>
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
  if ($hfullahtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullahtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active color:</td>
					<td>
						<input maxlength="20" name="hfullaac" size="20" type="text" value="<?=$hfullaac;?>" /></td>
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
  if ($hfullaatd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="hfullaatd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
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