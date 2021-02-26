<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_fullbgc=$_POST['fullbgc'];
 $filename=$_FILES['uploadedfile']['name'];
$up_fullbgimage=$_POST['fullbgimage'];
 $delete_image=$_POST['delete_image'];
$up_fullbgr=$_POST['fullbgr'];
$up_fullbga=$_POST['fullbga'];
$up_fullbgp=$_POST['fullbgp'];
$up_fullc=$_POST['fullc'];
$up_fullls=$_POST['fullls'];
$up_fulllh=$_POST['fulllh'];
$up_fullta=$_POST['fullta'];
$up_fulltd=$_POST['fulltd'];
$up_fullti=$_POST['fullti'];
$up_fulltt=$_POST['fulltt'];
$up_fullva=$_POST['fullva'];
$up_fullwhs=$_POST['fullwhs'];
$up_fullwos=$_POST['fullwos'];
$up_fullff=$_POST['fullff'];
$up_fullfsize=$_POST['fullfsize'];
$up_fullfstyle=$_POST['fullfstyle'];
$up_fullfv=$_POST['fullfv'];
$up_fullfw=$_POST['fullfw'];
$up_fullalc=$_POST['fullalc'];
$up_fullaltd=$_POST['fullaltd'];
$up_fullavc=$_POST['fullavc'];
$up_fullavtd=$_POST['fullavtd'];
$up_fullahc=$_POST['fullahc'];
$up_fullahtd=$_POST['fullahtd'];
$up_fullaac=$_POST['fullaac'];
$up_fullaatd=$_POST['fullaatd'];
$up_fulllsi=$_POST['fulllsi'];
$up_fulllsp=$_POST['fulllsp'];
$up_fulllst=$_POST['fulllst'];
//parse border input into 3 variables
$up_fullbordertop=preg_split('/[,? ]+/',$_POST['fullbt']);
$up_fullbtt=$up_fullbordertop[0];
$up_fullbts=$up_fullbordertop[1];
$up_fullbtc=$up_fullbordertop[2];
//parse border input into 3 variables
$up_fullborderright=preg_split('/[,? ]+/',$_POST['fullbr']);
$up_fullbrt=$up_fullborderright[0];
$up_fullbrs=$up_fullborderright[1];
$up_fullbrc=$up_fullborderright[2];
//parse border input into 3 variables
$up_fullborderbot=preg_split('/[,? ]+/',$_POST['fullbb']);
$up_fullbbt=$up_fullborderbot[0];
$up_fullbbs=$up_fullborderbot[1];
$up_fullbbc=$up_fullborderbot[2];
//parse border input into 3 variables
$up_fullborderleft=preg_split('/[,? ]+/',$_POST['fullbl']);
$up_fullblt=$up_fullborderleft[0];
$up_fullbls=$up_fullborderleft[1];
$up_fullblc=$up_fullborderleft[2];
$up_fullout=$_POST['fullout'];
$up_fullmarg=$_POST['fullmarg'];
$up_fullpad=$_POST['fullpad'];
$up_fullh=$_POST['fullh'];
$up_fullmaxh=$_POST['fullmaxh'];
$up_fullmaxw=$_POST['fullmaxw'];
$up_fullminh=$_POST['fullminh'];
$up_fullminw=$_POST['fullminw'];
$up_fullw=$_POST['fullw'];
$up_fullvis=$_POST['fullvis'];
$up_fulldisp=$_POST['fulldisp'];
$up_fullpos=$_POST['fullpos'];
$up_fullleft=$_POST['fullleft'];
$up_fulltop=$_POST['fulltop'];
$up_fullright=$_POST['fullright'];
$up_fullbot=$_POST['fullbot'];
$up_fullzind=$_POST['fullzind'];
$up_fullfloat=$_POST['fullfloat'];
$up_fullclr=$_POST['fullclr'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE style_master SET FullBackgroundColor = '$up_fullbgc' ");
  mysql_query("UPDATE style_master SET FullBackgroundImage = '$up_fullbgimage' ");
  mysql_query("UPDATE style_master SET FullBackgroundRepeat = '$up_fullbgr' ");
  mysql_query("UPDATE style_master SET FullBackgroundAttachment = '$up_fullbga' ");
  mysql_query("UPDATE style_master SET FullBackgroundPosition = '$up_fullbgp' ");
  mysql_query("UPDATE style_master SET FullColor = '$up_fullc' ");
  mysql_query("UPDATE style_master SET FullLetterSpacing = '$up_fullls' ");
  mysql_query("UPDATE style_master SET FullLineHeight = '$up_fulllh' ");
  mysql_query("UPDATE style_master SET FullTextAlign = '$up_fullta' ");
  mysql_query("UPDATE style_master SET FullTextDecoration = '$up_fulltd' ");
  mysql_query("UPDATE style_master SET FullTextIndent = '$up_fullti' ");
  mysql_query("UPDATE style_master SET FullTextTransform = '$up_fulltt' ");
  mysql_query("UPDATE style_master SET FullVerticalAlign = '$up_fullva' ");
  mysql_query("UPDATE style_master SET FullWhiteSpace = '$up_fullwhs' ");
  mysql_query("UPDATE style_master SET FullWordSpacing = '$up_fullwos' ");
  mysql_query("UPDATE style_master SET FullFontFamily = '$up_fullff' ");
  mysql_query("UPDATE style_master SET FullFontSize = '$up_fullfsize' ");
  mysql_query("UPDATE style_master SET FullFontStyle = '$up_fullfstyle' ");
  mysql_query("UPDATE style_master SET FullFontVariant = '$up_fullfv' ");
  mysql_query("UPDATE style_master SET FullFontWeight = '$up_fullfw' ");
  mysql_query("UPDATE style_master SET FullaLinkColor = '$up_fullalc' ");
  mysql_query("UPDATE style_master SET FullaLinkTextDecoration = '$up_fullaltd' ");
  mysql_query("UPDATE style_master SET FullaVisitedColor = '$up_fullavc' ");
  mysql_query("UPDATE style_master SET FullaVisitedDecoration = '$up_fullavtd' ");
  mysql_query("UPDATE style_master SET FullaHoverColor = '$up_fullahc' ");
  mysql_query("UPDATE style_master SET FullaHoverTextDecoration = '$up_fullahtd' ");
  mysql_query("UPDATE style_master SET FullaActiveColor = '$up_fullaac' ");
  mysql_query("UPDATE style_master SET FullaActiveTextDecoration = '$up_fullaatd' ");
  mysql_query("UPDATE style_master SET FullListStyleImage = '$up_fulllsi' ");
  mysql_query("UPDATE style_master SET FullListStylePosition = '$up_fulllsp' ");
  mysql_query("UPDATE style_master SET FullListStyleType = '$up_fulllst' ");
  mysql_query("UPDATE style_master SET FullBorderTopThickness = '$up_fullbtt' ");
  mysql_query("UPDATE style_master SET FullBorderTopStyle = '$up_fullbts' ");
  mysql_query("UPDATE style_master SET FullBorderTopColor = '$up_fullbtc' ");
  mysql_query("UPDATE style_master SET FullBorderRightThickness = '$up_fullbrt' ");
  mysql_query("UPDATE style_master SET FullBorderRightStyle = '$up_fullbrs' ");
  mysql_query("UPDATE style_master SET FullBorderRightColor = '$up_fullbrc' ");
  mysql_query("UPDATE style_master SET FullBorderBottomThickness = '$up_fullbbt' ");
  mysql_query("UPDATE style_master SET FullBorderBottomStyle = '$up_fullbbs' ");
  mysql_query("UPDATE style_master SET FullBorderBottomColor = '$up_fullbbc' ");
  mysql_query("UPDATE style_master SET FullBorderLeftThickness = '$up_fullblt' ");
  mysql_query("UPDATE style_master SET FullBorderLeftStyle = '$up_fullbls' ");
  mysql_query("UPDATE style_master SET FullBorderLeftColor = '$up_fullblc' ");
  mysql_query("UPDATE style_master SET FullOutline = '$up_fullout' ");
  mysql_query("UPDATE style_master SET FullMargin = '$up_fullmarg' ");
  mysql_query("UPDATE style_master SET FullPadding = '$up_fullpad' ");
  mysql_query("UPDATE style_master SET FullHeight = '$up_fullh' ");
  mysql_query("UPDATE style_master SET FullMaxHeight = '$up_fullmaxh' ");
  mysql_query("UPDATE style_master SET FullMaxWidth = '$up_fullmaxw' ");
  mysql_query("UPDATE style_master SET FullMinHeight = '$up_fullminh' ");
  mysql_query("UPDATE style_master SET FullMinWidth = '$up_fullminw' ");
  mysql_query("UPDATE style_master SET FullWidth = '$up_fullw' ");
  mysql_query("UPDATE style_master SET FullVisibility = '$up_fullvis' ");
  mysql_query("UPDATE style_master SET FullDisplay = '$up_fulldisp' ");
  mysql_query("UPDATE style_master SET FullPosition = '$up_fullpos' ");
  mysql_query("UPDATE style_master SET FullLeft = '$up_fullleft' ");
  mysql_query("UPDATE style_master SET FullTop = '$up_fulltop' ");
  mysql_query("UPDATE style_master SET FullRight = '$up_fullright' ");
  mysql_query("UPDATE style_master SET FullBottom = '$up_fullbot' ");
  mysql_query("UPDATE style_master SET FullZIndex = '$up_fullzind' ");
  mysql_query("UPDATE style_master SET FullFloat = '$up_fullfloat' ");
  mysql_query("UPDATE style_master SET FullClear = '$up_fullclr' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$fullbgc	=$row['FullBackgroundColor'];
$fullbgimage	=$row['FullBackgroundImage'];
$fullbgr	=$row['FullBackgroundRepeat'];
$fullbga	=$row['FullBackgroundAttachment'];
$fullbgp	=$row['FullBackgroundPosition'];
$fullc	=$row['FullColor'];
$fullls	=$row['FullLetterSpacing'];
$fulllh	=$row['FullLineHeight'];
$fullta	=$row['FullTextAlign'];
$fulltd	=$row['FullTextDecoration'];
$fullti	=$row['FullTextIndent'];
$fulltt	=$row['FullTextTransform'];
$fullva	=$row['FullVerticalAlign'];
$fullwhs	=$row['FullWhiteSpace'];
$fullwos	=$row['FullWordSpacing'];
$fullff	=$row['FullFontFamily'];
$fullfsize	=$row['FullFontSize'];
$fullfstyle	=$row['FullFontStyle'];
$fullfv	=$row['FullFontVariant'];
$fullfw	=$row['FullFontWeight'];
$fullalc	=$row['FullaLinkColor'];
$fullaltd	=$row['FullaLinkTextDecoration'];
$fullavc	=$row['FullaVisitedColor'];
$fullavtd	=$row['FullaVisitedDecoration'];
$fullahc	=$row['FullaHoverColor'];
$fullahtd	=$row['FullaHoverTextDecoration'];
$fullaac	=$row['FullaActiveColor'];
$fullaatd	=$row['FullaActiveTextDecoration'];
$fulllsi	=$row['FullListStyleImage'];
$fulllsp	=$row['FullListStylePosition'];
$fulllst	=$row['FullListStyleType'];
$fullbtt	=$row['FullBorderTopThickness'];
$fullbts	=$row['FullBorderTopStyle'];
$fullbtc	=$row['FullBorderTopColor'];
$fullbrt	=$row['FullBorderRightThickness'];
$fullbrs	=$row['FullBorderRightStyle'];
$fullbrc	=$row['FullBorderRightColor'];
$fullbbt	=$row['FullBorderBottomThickness'];
$fullbbs	=$row['FullBorderBottomStyle'];
$fullbbc	=$row['FullBorderBottomColor'];
$fullblt	=$row['FullBorderLeftThickness'];
$fullbls	=$row['FullBorderLeftStyle'];
$fullblc	=$row['FullBorderLeftColor'];
$fullout	=$row['FullOutline'];
$fullmarg	=$row['FullMargin'];
$fullpad	=$row['FullPadding'];
$fullh	=$row['FullHeight'];
$fullmaxh	=$row['FullMaxHeight'];
$fullmaxw	=$row['FullMaxWidth'];
$fullminh	=$row['FullMinHeight'];
$fullminw	=$row['FullMinWidth'];
$fullw	=$row['FullWidth'];
$fullvis	=$row['FullVisibility'];
$fulldisp	=$row['FullDisplay'];
$fullpos	=$row['FullPosition'];
$fullleft	=$row['FullLeft'];
$fulltop	=$row['FullTop'];
$fullright	=$row['FullRight'];
$fullbot	=$row['FullBottom'];
$fullzind	=$row['FullZIndex'];
$fullfloat	=$row['FullFloat'];
$fullclr	=$row['FullClear'];

/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/fullbgimage.".$filename_extension;

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
  if(file_exists('images/fullbgimage.jpg'))
  {
   unlink('images/fullbgimage.jpg');
  }
  if(file_exists('images/fullbgimage.png'))
  {
   unlink('images/fullbgimage.png');
  }
  if(file_exists('images/fullbgimage.gif'))
  {
   unlink('images/fullbgimage.gif');
  }
  if(file_exists('images/fullbgimage.bmp'))
  {
   unlink('images/fullbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }

?>


<form enctype="multipart/form-data" action="?page=layout_full" method="post" name="layout_full">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>FULL PAGE LAYOUT</H3>
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
						<input maxlength="10" name="fullbgc" size="10" type="text" value="<?=$fullbgc;?>" /></td>
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
  if ($fullbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="fullbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

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
  if ($fullbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="fullbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
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
  if ($fullbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="fullbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($fullbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="fullbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
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
						<input maxlength="20" name="fullc" type="text" value="<?=$fullc;?>" /></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						letter-spacing:</td>
					<td>
						<input maxlength="20" name="fullls" type="text" value="<?=$fullls;?>"/></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						line-height:</td>
					<td>
						<input maxlength="20" name="fulllh" type="text" value="<?=$fulllh;?>" /></td>
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
  if ($fullta == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="fullta" size="1"><option value="left" <?=$select_selected[0];?> >left</option><option value="right" <?=$select_selected[1];?> >right</option><option value="center" <?=$select_selected[2];?> >center</option><option value="justify" <?=$select_selected[3];?> >justify</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
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
  if ($fulltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fulltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-indent:</td>
					<td>
						<input maxlength="20" name="fullti" type="text" value="<?=$fullti;?>" /></td>
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
  if ($fulltt == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fulltt" size="1"><option value="" <?=$select_selected[0];?> >none</option><option value="capitalize" <?=$select_selected[1];?> >capitalize</option><option value="uppercase" <?=$select_selected[2];?> >uppercase</option><option value="lowecase" <?=$select_selected[3];?> >lowercase</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						vertical-align:</td>
					<td>
						<input maxlength="20" name="fullva" type="text" value="<?=$fullva;?>" /></td>
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
  if ($fullwhs == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullwhs" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="nowrap" <?=$select_selected[1];?> >nowrap</option><option value="pre" <?=$select_selected[2];?> >pre</option><option value="pre-line" <?=$select_selected[3];?> >pre-line</option><option value="pre-wrap" <?=$select_selected[4];?> >pre-wrap</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						word-spacing:</td>
					<td>
						<input maxlength="20" name="fullwos" type="text" value="<?=$fullwos;?>" /></td>
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
						<input maxlength="100" name="fullff" size="50" type="text" value="<?=$fullff;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-size:</td>
					<td>
						<input maxlength="30" name="fullfsize" size="20" type="text" value="<?=$fullfsize;?>" /></td>
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
  if ($fullfstyle == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullfstyle" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="italic" <?=$select_selected[1];?> >italic</option><option value="oblique" <?=$select_selected[2];?> >oblique</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($fullfv == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullfv" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="small-caps" <?=$select_selected[1];?> >small-caps</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($fullfw == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullfw" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="bold" <?=$select_selected[1];?> >bold</option><option value="bolder" <?=$select_selected[2];?> >bolder</option><option value="lighter" <?=$select_selected[3];?> >lighter</option></select></td>
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
						<input maxlength="50" name="fulllsi" size="20" type="text" value="<?=$fulllsi;?>" /></td>
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
  if ($fulllsp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fulllsp" size="1"><option value="inside" <?=$select_selected[0];?> >inside</option><option value="outside" <?=$select_selected[1];?> >outside (default)</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($fulllst == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fulllst" size="1"><option value="decimal" <?=$select_selected[0];?> >decimal</option><option value="lower-alpha" <?=$select_selected[1];?> >lower-alpha</option><option value="lower-roman" <?=$select_selected[2];?> >lower-roman</option><option <?=$select_selected[3];?> value="none">none</option><option value="upper-alpha" <?=$select_selected[4];?> >upper-alpha</option><option value="upper-latin" <?=$select_selected[5];?> >upper-latin</option><option value="upper-roman" <?=$fulllst_selected[6];?> >upper-roman</option></select></td>
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
						<input maxlength="30" name="fullbt" size="20" type="text" value="<?=$fullbtt;?> <?=$fullbts;?> <?=$fullbtc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-right:</td>
					<td>
						<input maxlength="30" name="fullbr" size="20" type="text" value="<?=$fullbrt;?> <?=$fullbrs;?> <?=$fullbrc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-bottom:</td>
					<td>
						<input maxlength="30" name="fullbb" size="20" type="text" value="<?=$fullbbt;?> <?=$fullbbs;?> <?=$fullbbc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-left:</td>
					<td>
						<input maxlength="30" name="fullbl" size="20" type="text" value="<?=$fullblt;?> <?=$fullbls;?> <?=$fullblc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						outline:</td>
					<td>
						<input maxlength="30" name="fullout" size="20" type="text" value="<?=$fullout;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						margin:</td>
					<td>
						<input maxlength="30" name="fullmarg" size="20" type="text" value="<?=$fullmarg;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						padding:</td>
					<td>
						<input maxlength="30" name="fullpad" size="20" type="text" value="<?=$fullpad;?>" /></td>
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
						<input maxlength="20" name="fullh" size="20" type="text" value="<?=$fullh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-height:</td>
					<td>
						<input maxlength="20" name="fullmaxh" size="20" type="text" value="<?=$fullmaxh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-width:</td>
					<td>
						<input maxlength="20" name="fullmaxw" size="20" type="text" value="<?=$fullmaxw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-height:</td>
					<td>
						<input maxlength="20" name="fullminh" size="20" type="text" value="<?=$fullminh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-width:</td>
					<td>
						<input maxlength="20" name="fullminw" size="20" type="text" value="<?=$fullminw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						width:</td>
					<td>
						<input maxlength="20" name="fullw" size="20" type="text" value="<?=$fullw;?>" /></td>
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
  if ($fullvis == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullvis" size="1"><option value="visible" <?=$select_selected[0];?> >visible</option><option value="hidden" <?=$select_selected[1];?> >hidden</option><option value="collapse" <?=$select_selected[2];?> >collapse</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($fulldisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fulldisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
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
  if ($fullpos == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullpos" size="1"><option value="static" <?=$select_selected[0];?> >static</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="relative" <?=$select_selected[2];?> >relative</option><option value="absolute" <?=$select_selected[3];?> >absolute</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						left:</td>
					<td>
						<input maxlength="20" name="fullleft" size="20" type="text" value="<?=$fullleft;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						top:</td>
					<td>
						<input maxlength="20" name="fulltop" size="20" type="text" value="<?=$fulltop;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						right:</td>
					<td>
						<input maxlength="20" name="fullright" size="20" type="text" value="<?=$fullright;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						bottom:</td>
					<td>
						<input maxlength="20" name="fullbot" size="20" type="text" value="<?=$fullbot;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						z-index:</td>
					<td>
						<input maxlength="20" name="fullzind" size="20" type="text" value="<?=$fullzind;?>" /></td>
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
  if ($fullfloat == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullfloat" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option></select></td>
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
  if ($fullclr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullclr" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option><option value="both" <?=$select_selected[3];?> >both</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Links</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link color:</td>
					<td>
						<input maxlength="20" name="fullalc" size="20" type="text" value="<?=$fullalc;?>" /></td>
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
  if ($fullaltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullaltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited color:</td>
					<td>
						<input maxlength="20" name="fullavc" size="20" type="text" value="<?=$fullavc;?>" /></td>
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
  if ($fullavtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullavtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover color:</td>
					<td>
						<input maxlength="20" name="fullahc" size="20" type="text" value="<?=$fullahc;?>" /></td>
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
  if ($fullahtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullahtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active color:</td>
					<td>
						<input maxlength="20" name="fullaac" size="20" type="text" value="<?=$fullaac;?>" /></td>
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
  if ($fullaatd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="fullaatd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
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