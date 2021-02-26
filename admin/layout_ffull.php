<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_ffullbgc=$_POST['ffullbgc'];
 $filename=$_FILES['uploadedfile']['name'];
$up_ffullbgimage=$_POST['ffullbgimage'];
 $delete_image=$_POST['delete_image'];
$up_ffullbgr=$_POST['ffullbgr'];
$up_ffullbga=$_POST['ffullbga'];
$up_ffullbgp=$_POST['ffullbgp'];
$up_ffullc=$_POST['ffullc'];
$up_ffullls=$_POST['ffullls'];
$up_ffulllh=$_POST['ffulllh'];
$up_ffullta=$_POST['ffullta'];
$up_ffulltd=$_POST['ffulltd'];
$up_ffullti=$_POST['ffullti'];
$up_ffulltt=$_POST['ffulltt'];
$up_ffullva=$_POST['ffullva'];
$up_ffullwhs=$_POST['ffullwhs'];
$up_ffullwos=$_POST['ffullwos'];
$up_ffullff=$_POST['ffullff'];
$up_ffullfsize=$_POST['ffullfsize'];
$up_ffullfstyle=$_POST['ffullfstyle'];
$up_ffullfv=$_POST['ffullfv'];
$up_ffullfw=$_POST['ffullfw'];
$up_ffullalc=$_POST['ffullalc'];
$up_ffullaltd=$_POST['ffullaltd'];
$up_ffullavc=$_POST['ffullavc'];
$up_ffullavtd=$_POST['ffullavtd'];
$up_ffullahc=$_POST['ffullahc'];
$up_ffullahtd=$_POST['ffullahtd'];
$up_ffullaac=$_POST['ffullaac'];
$up_ffullaatd=$_POST['ffullaatd'];
$up_ffulllsi=$_POST['ffulllsi'];
$up_ffulllsp=$_POST['ffulllsp'];
$up_ffulllst=$_POST['ffulllst'];
//parse border input into 3 variables
$up_ffullbordertop=preg_split('/[,? ]+/',$_POST['ffullbt']);
$up_ffullbtt=$up_ffullbordertop[0];
$up_ffullbts=$up_ffullbordertop[1];
$up_ffullbtc=$up_ffullbordertop[2];
//parse border input into 3 variables
$up_ffullborderright=preg_split('/[,? ]+/',$_POST['ffullbr']);
$up_ffullbrt=$up_ffullborderright[0];
$up_ffullbrs=$up_ffullborderright[1];
$up_ffullbrc=$up_ffullborderright[2];
//parse border input into 3 variables
$up_ffullborderbot=preg_split('/[,? ]+/',$_POST['ffullbb']);
$up_ffullbbt=$up_ffullborderbot[0];
$up_ffullbbs=$up_ffullborderbot[1];
$up_ffullbbc=$up_ffullborderbot[2];
//parse border input into 3 variables
$up_ffullborderleft=preg_split('/[,? ]+/',$_POST['ffullbl']);
$up_ffullblt=$up_ffullborderleft[0];
$up_ffullbls=$up_ffullborderleft[1];
$up_ffullblc=$up_ffullborderleft[2];
$up_ffullout=$_POST['ffullout'];
$up_ffullmarg=$_POST['ffullmarg'];
$up_ffullpad=$_POST['ffullpad'];
$up_ffullh=$_POST['ffullh'];
$up_ffullmaxh=$_POST['ffullmaxh'];
$up_ffullmaxw=$_POST['ffullmaxw'];
$up_ffullminh=$_POST['ffullminh'];
$up_ffullminw=$_POST['ffullminw'];
$up_ffullw=$_POST['ffullw'];
$up_ffullvis=$_POST['ffullvis'];
$up_ffulldisp=$_POST['ffulldisp'];
$up_ffullpos=$_POST['ffullpos'];
$up_ffullleft=$_POST['ffullleft'];
$up_ffulltop=$_POST['ffulltop'];
$up_ffullright=$_POST['ffullright'];
$up_ffullbot=$_POST['ffullbot'];
$up_ffullzind=$_POST['ffullzind'];
$up_ffullfloat=$_POST['ffullfloat'];
$up_ffullclr=$_POST['ffullclr'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE style_master SET FFullBackgroundColor = '$up_ffullbgc' ");
  mysql_query("UPDATE style_master SET FFullBackgroundImage = '$up_ffullbgimage' ");
  mysql_query("UPDATE style_master SET FFullBackgroundRepeat = '$up_ffullbgr' ");
  mysql_query("UPDATE style_master SET FFullBackgroundAttachment = '$up_ffullbga' ");
  mysql_query("UPDATE style_master SET FFullBackgroundPosition = '$up_ffullbgp' ");
  mysql_query("UPDATE style_master SET FFullColor = '$up_ffullc' ");
  mysql_query("UPDATE style_master SET FFullLetterSpacing = '$up_ffullls' ");
  mysql_query("UPDATE style_master SET FFullLineHeight = '$up_ffulllh' ");
  mysql_query("UPDATE style_master SET FFullTextAlign = '$up_ffullta' ");
  mysql_query("UPDATE style_master SET FFullTextDecoration = '$up_ffulltd' ");
  mysql_query("UPDATE style_master SET FFullTextIndent = '$up_ffullti' ");
  mysql_query("UPDATE style_master SET FFullTextTransform = '$up_ffulltt' ");
  mysql_query("UPDATE style_master SET FFullVerticalAlign = '$up_ffullva' ");
  mysql_query("UPDATE style_master SET FFullWhiteSpace = '$up_ffullwhs' ");
  mysql_query("UPDATE style_master SET FFullWordSpacing = '$up_ffullwos' ");
  mysql_query("UPDATE style_master SET FFullFontFamily = '$up_ffullff' ");
  mysql_query("UPDATE style_master SET FFullFontSize = '$up_ffullfsize' ");
  mysql_query("UPDATE style_master SET FFullFontStyle = '$up_ffullfstyle' ");
  mysql_query("UPDATE style_master SET FFullFontVariant = '$up_ffullfv' ");
  mysql_query("UPDATE style_master SET FFullFontWeight = '$up_ffullfw' ");
  mysql_query("UPDATE style_master SET FFullaLinkColor = '$up_ffullalc' ");
  mysql_query("UPDATE style_master SET FFullaLinkTextDecoration = '$up_ffullaltd' ");
  mysql_query("UPDATE style_master SET FFullaVisitedColor = '$up_ffullavc' ");
  mysql_query("UPDATE style_master SET FFullaVisitedDecoration = '$up_ffullavtd' ");
  mysql_query("UPDATE style_master SET FFullaHoverColor = '$up_ffullahc' ");
  mysql_query("UPDATE style_master SET FFullaHoverTextDecoration = '$up_ffullahtd' ");
  mysql_query("UPDATE style_master SET FFullaActiveColor = '$up_ffullaac' ");
  mysql_query("UPDATE style_master SET FFullaActiveTextDecoration = '$up_ffullaatd' ");
  mysql_query("UPDATE style_master SET FFullListStyleImage = '$up_ffulllsi' ");
  mysql_query("UPDATE style_master SET FFullListStylePosition = '$up_ffulllsp' ");
  mysql_query("UPDATE style_master SET FFullListStyleType = '$up_ffulllst' ");
  mysql_query("UPDATE style_master SET FFullBorderTopThickness = '$up_ffullbtt' ");
  mysql_query("UPDATE style_master SET FFullBorderTopStyle = '$up_ffullbts' ");
  mysql_query("UPDATE style_master SET FFullBorderTopColor = '$up_ffullbtc' ");
  mysql_query("UPDATE style_master SET FFullBorderRightThickness = '$up_ffullbrt' ");
  mysql_query("UPDATE style_master SET FFullBorderRightStyle = '$up_ffullbrs' ");
  mysql_query("UPDATE style_master SET FFullBorderRightColor = '$up_ffullbrc' ");
  mysql_query("UPDATE style_master SET FFullBorderBottomThickness = '$up_ffullbbt' ");
  mysql_query("UPDATE style_master SET FFullBorderBottomStyle = '$up_ffullbbs' ");
  mysql_query("UPDATE style_master SET FFullBorderBottomColor = '$up_ffullbbc' ");
  mysql_query("UPDATE style_master SET FFullBorderLeftThickness = '$up_ffullblt' ");
  mysql_query("UPDATE style_master SET FFullBorderLeftStyle = '$up_ffullbls' ");
  mysql_query("UPDATE style_master SET FFullBorderLeftColor = '$up_ffullblc' ");
  mysql_query("UPDATE style_master SET FFullOutline = '$up_ffullout' ");
  mysql_query("UPDATE style_master SET FFullMargin = '$up_ffullmarg' ");
  mysql_query("UPDATE style_master SET FFullPadding = '$up_ffullpad' ");
  mysql_query("UPDATE style_master SET FFullHeight = '$up_ffullh' ");
  mysql_query("UPDATE style_master SET FFullMaxHeight = '$up_ffullmaxh' ");
  mysql_query("UPDATE style_master SET FFullMaxWidth = '$up_ffullmaxw' ");
  mysql_query("UPDATE style_master SET FFullMinHeight = '$up_ffullminh' ");
  mysql_query("UPDATE style_master SET FFullMinWidth = '$up_ffullminw' ");
  mysql_query("UPDATE style_master SET FFullWidth = '$up_ffullw' ");
  mysql_query("UPDATE style_master SET FFullVisibility = '$up_ffullvis' ");
  mysql_query("UPDATE style_master SET FFullDisplay = '$up_ffulldisp' ");
  mysql_query("UPDATE style_master SET FFullPosition = '$up_ffullpos' ");
  mysql_query("UPDATE style_master SET FFullLeft = '$up_ffullleft' ");
  mysql_query("UPDATE style_master SET FFullTop = '$up_ffulltop' ");
  mysql_query("UPDATE style_master SET FFullRight = '$up_ffullright' ");
  mysql_query("UPDATE style_master SET FFullBottom = '$up_ffullbot' ");
  mysql_query("UPDATE style_master SET FFullZIndex = '$up_ffullzind' ");
  mysql_query("UPDATE style_master SET FFullFloat = '$up_ffullfloat' ");
  mysql_query("UPDATE style_master SET FFullClear = '$up_ffullclr' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$ffullbgc	=$row['FFullBackgroundColor'];
$ffullbgimage	=$row['FFullBackgroundImage'];
$ffullbgr	=$row['FFullBackgroundRepeat'];
$ffullbga	=$row['FFullBackgroundAttachment'];
$ffullbgp	=$row['FFullBackgroundPosition'];
$ffullc	=$row['FFullColor'];
$ffullls	=$row['FFullLetterSpacing'];
$ffulllh	=$row['FFullLineHeight'];
$ffullta	=$row['FFullTextAlign'];
$ffulltd	=$row['FFullTextDecoration'];
$ffullti	=$row['FFullTextIndent'];
$ffulltt	=$row['FFullTextTransform'];
$ffullva	=$row['FFullVerticalAlign'];
$ffullwhs	=$row['FFullWhiteSpace'];
$ffullwos	=$row['FFullWordSpacing'];
$ffullff	=$row['FFullFontFamily'];
$ffullfsize	=$row['FFullFontSize'];
$ffullfstyle	=$row['FFullFontStyle'];
$ffullfv	=$row['FFullFontVariant'];
$ffullfw	=$row['FFullFontWeight'];
$ffullalc	=$row['FFullaLinkColor'];
$ffullaltd	=$row['FFullaLinkTextDecoration'];
$ffullavc	=$row['FFullaVisitedColor'];
$ffullavtd	=$row['FFullaVisitedDecoration'];
$ffullahc	=$row['FFullaHoverColor'];
$ffullahtd	=$row['FFullaHoverTextDecoration'];
$ffullaac	=$row['FFullaActiveColor'];
$ffullaatd	=$row['FFullaActiveTextDecoration'];
$ffulllsi	=$row['FFullListStyleImage'];
$ffulllsp	=$row['FFullListStylePosition'];
$ffulllst	=$row['FFullListStyleType'];
$ffullbtt	=$row['FFullBorderTopThickness'];
$ffullbts	=$row['FFullBorderTopStyle'];
$ffullbtc	=$row['FFullBorderTopColor'];
$ffullbrt	=$row['FFullBorderRightThickness'];
$ffullbrs	=$row['FFullBorderRightStyle'];
$ffullbrc	=$row['FFullBorderRightColor'];
$ffullbbt	=$row['FFullBorderBottomThickness'];
$ffullbbs	=$row['FFullBorderBottomStyle'];
$ffullbbc	=$row['FFullBorderBottomColor'];
$ffullblt	=$row['FFullBorderLeftThickness'];
$ffullbls	=$row['FFullBorderLeftStyle'];
$ffullblc	=$row['FFullBorderLeftColor'];
$ffullout	=$row['FFullOutline'];
$ffullmarg	=$row['FFullMargin'];
$ffullpad	=$row['FFullPadding'];
$ffullh	=$row['FFullHeight'];
$ffullmaxh	=$row['FFullMaxHeight'];
$ffullmaxw	=$row['FFullMaxWidth'];
$ffullminh	=$row['FFullMinHeight'];
$ffullminw	=$row['FFullMinWidth'];
$ffullw	=$row['FFullWidth'];
$ffullvis	=$row['FFullVisibility'];
$ffulldisp	=$row['FFullDisplay'];
$ffullpos	=$row['FFullPosition'];
$ffullleft	=$row['FFullLeft'];
$ffulltop	=$row['FFullTop'];
$ffullright	=$row['FFullRight'];
$ffullbot	=$row['FFullBottom'];
$ffullzind	=$row['FFullZIndex'];
$ffullfloat	=$row['FFullFloat'];
$ffullclr	=$row['FFullClear'];

/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/ffullbgimage.".$filename_extension;

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
  if(file_exists('images/ffullbgimage.jpg'))
  {
   unlink('images/ffullbgimage.jpg');
  }
  if(file_exists('images/ffullbgimage.png'))
  {
   unlink('images/ffullbgimage.png');
  }
  if(file_exists('images/ffullbgimage.gif'))
  {
   unlink('images/ffullbgimage.gif');
  }
  if(file_exists('images/ffullbgimage.bmp'))
  {
   unlink('images/ffullbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }

?>


<form enctype="multipart/form-data" action="?page=layout_ffull" method="post" name="layout_ffull">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>FULL FOOTER LAYOUT</H3>
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
						<input maxlength="10" name="ffullbgc" size="10" type="text" value="<?=$ffullbgc;?>" /></td>
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
  if ($ffullbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="ffullbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

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
  if ($ffullbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="ffullbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
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
  if ($ffullbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="ffullbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($ffullbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="ffullbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
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
						<input maxlength="20" name="ffullc" type="text" value="<?=$ffullc;?>" /></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						letter-spacing:</td>
					<td>
						<input maxlength="20" name="ffullls" type="text" value="<?=$ffullls;?>"/></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						line-height:</td>
					<td>
						<input maxlength="20" name="ffulllh" type="text" value="<?=$ffulllh;?>" /></td>
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
  if ($ffullta == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="ffullta" size="1"><option value="left" <?=$select_selected[0];?> >left</option><option value="right" <?=$select_selected[1];?> >right</option><option value="center" <?=$select_selected[2];?> >center</option><option value="justify" <?=$select_selected[3];?> >justify</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
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
  if ($ffulltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffulltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-indent:</td>
					<td>
						<input maxlength="20" name="ffullti" type="text" value="<?=$ffullti;?>" /></td>
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
  if ($ffulltt == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffulltt" size="1"><option value="" <?=$select_selected[0];?> >none</option><option value="capitalize" <?=$select_selected[1];?> >capitalize</option><option value="uppercase" <?=$select_selected[2];?> >uppercase</option><option value="lowecase" <?=$select_selected[3];?> >lowercase</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						vertical-align:</td>
					<td>
						<input maxlength="20" name="ffullva" type="text" value="<?=$ffullva;?>" /></td>
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
  if ($ffullwhs == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullwhs" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="nowrap" <?=$select_selected[1];?> >nowrap</option><option value="pre" <?=$select_selected[2];?> >pre</option><option value="pre-line" <?=$select_selected[3];?> >pre-line</option><option value="pre-wrap" <?=$select_selected[4];?> >pre-wrap</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						word-spacing:</td>
					<td>
						<input maxlength="20" name="ffullwos" type="text" value="<?=$ffullwos;?>" /></td>
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
						<input maxlength="100" name="ffullff" size="50" type="text" value="<?=$ffullff;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-size:</td>
					<td>
						<input maxlength="30" name="ffullfsize" size="20" type="text" value="<?=$ffullfsize;?>" /></td>
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
  if ($ffullfstyle == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullfstyle" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="italic" <?=$select_selected[1];?> >italic</option><option value="oblique" <?=$select_selected[2];?> >oblique</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($ffullfv == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullfv" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="small-caps" <?=$select_selected[1];?> >small-caps</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($ffullfw == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullfw" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="bold" <?=$select_selected[1];?> >bold</option><option value="bolder" <?=$select_selected[2];?> >bolder</option><option value="lighter" <?=$select_selected[3];?> >lighter</option></select></td>
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
						<input maxlength="50" name="ffulllsi" size="20" type="text" value="<?=$ffulllsi;?>" /></td>
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
  if ($ffulllsp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffulllsp" size="1"><option value="inside" <?=$select_selected[0];?> >inside</option><option value="outside" <?=$select_selected[1];?> >outside (default)</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($ffulllst == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffulllst" size="1"><option value="decimal" <?=$select_selected[0];?> >decimal</option><option value="lower-alpha" <?=$select_selected[1];?> >lower-alpha</option><option value="lower-roman" <?=$select_selected[2];?> >lower-roman</option><option <?=$select_selected[3];?> value="none">none</option><option value="upper-alpha" <?=$select_selected[4];?> >upper-alpha</option><option value="upper-latin" <?=$select_selected[5];?> >upper-latin</option><option value="upper-roman" <?=$ffulllst_selected[6];?> >upper-roman</option></select></td>
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
						<input maxlength="30" name="ffullbt" size="20" type="text" value="<?=$ffullbtt;?> <?=$ffullbts;?> <?=$ffullbtc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-right:</td>
					<td>
						<input maxlength="30" name="ffullbr" size="20" type="text" value="<?=$ffullbrt;?> <?=$ffullbrs;?> <?=$ffullbrc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-bottom:</td>
					<td>
						<input maxlength="30" name="ffullbb" size="20" type="text" value="<?=$ffullbbt;?> <?=$ffullbbs;?> <?=$ffullbbc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-left:</td>
					<td>
						<input maxlength="30" name="ffullbl" size="20" type="text" value="<?=$ffullblt;?> <?=$ffullbls;?> <?=$ffullblc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						outline:</td>
					<td>
						<input maxlength="30" name="ffullout" size="20" type="text" value="<?=$ffullout;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						margin:</td>
					<td>
						<input maxlength="30" name="ffullmarg" size="20" type="text" value="<?=$ffullmarg;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						padding:</td>
					<td>
						<input maxlength="30" name="ffullpad" size="20" type="text" value="<?=$ffullpad;?>" /></td>
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
						<input maxlength="20" name="ffullh" size="20" type="text" value="<?=$ffullh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-height:</td>
					<td>
						<input maxlength="20" name="ffullmaxh" size="20" type="text" value="<?=$ffullmaxh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-width:</td>
					<td>
						<input maxlength="20" name="ffullmaxw" size="20" type="text" value="<?=$ffullmaxw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-height:</td>
					<td>
						<input maxlength="20" name="ffullminh" size="20" type="text" value="<?=$ffullminh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-width:</td>
					<td>
						<input maxlength="20" name="ffullminw" size="20" type="text" value="<?=$ffullminw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						width:</td>
					<td>
						<input maxlength="20" name="ffullw" size="20" type="text" value="<?=$ffullw;?>" /></td>
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
  if ($ffullvis == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullvis" size="1"><option value="visible" <?=$select_selected[0];?> >visible</option><option value="hidden" <?=$select_selected[1];?> >hidden</option><option value="collapse" <?=$select_selected[2];?> >collapse</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($ffulldisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffulldisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
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
  if ($ffullpos == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullpos" size="1"><option value="static" <?=$select_selected[0];?> >static</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="relative" <?=$select_selected[2];?> >relative</option><option value="absolute" <?=$select_selected[3];?> >absolute</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						left:</td>
					<td>
						<input maxlength="20" name="ffullleft" size="20" type="text" value="<?=$ffullleft;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						top:</td>
					<td>
						<input maxlength="20" name="ffulltop" size="20" type="text" value="<?=$ffulltop;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						right:</td>
					<td>
						<input maxlength="20" name="ffullright" size="20" type="text" value="<?=$ffullright;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						bottom:</td>
					<td>
						<input maxlength="20" name="ffullbot" size="20" type="text" value="<?=$ffullbot;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						z-index:</td>
					<td>
						<input maxlength="20" name="ffullzind" size="20" type="text" value="<?=$ffullzind;?>" /></td>
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
  if ($ffullfloat == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullfloat" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option></select></td>
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
  if ($ffullclr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullclr" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option><option value="both" <?=$select_selected[3];?> >both</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Links</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link color:</td>
					<td>
						<input maxlength="20" name="ffullalc" size="20" type="text" value="<?=$ffullalc;?>" /></td>
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
  if ($ffullaltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullaltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited color:</td>
					<td>
						<input maxlength="20" name="ffullavc" size="20" type="text" value="<?=$ffullavc;?>" /></td>
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
  if ($ffullavtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullavtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover color:</td>
					<td>
						<input maxlength="20" name="ffullahc" size="20" type="text" value="<?=$ffullahc;?>" /></td>
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
  if ($ffullahtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullahtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active color:</td>
					<td>
						<input maxlength="20" name="ffullaac" size="20" type="text" value="<?=$ffullaac;?>" /></td>
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
  if ($ffullaatd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ffullaatd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
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