<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_pbgc=$_POST['pbgc'];
 $filename=$_FILES['uploadedfile']['name'];
$up_pbgimage=$_POST['pbgimage'];
 $delete_image=$_POST['delete_image'];
$up_pbgr=$_POST['pbgr'];
$up_pbga=$_POST['pbga'];
$up_pbgp=$_POST['pbgp'];
$up_pc=$_POST['pc'];
$up_pls=$_POST['pls'];
$up_plh=$_POST['plh'];
$up_pta=$_POST['pta'];
$up_ptd=$_POST['ptd'];
$up_pti=$_POST['pti'];
$up_ptt=$_POST['ptt'];
$up_pva=$_POST['pva'];
$up_pwhs=$_POST['pwhs'];
$up_pwos=$_POST['pwos'];
$up_pff=$_POST['pff'];
$up_pfsize=$_POST['pfsize'];
$up_pfstyle=$_POST['pfstyle'];
$up_pfv=$_POST['pfv'];
$up_pfw=$_POST['pfw'];
$up_palc=$_POST['palc'];
$up_paltd=$_POST['paltd'];
$up_pavc=$_POST['pavc'];
$up_pavtd=$_POST['pavtd'];
$up_pahc=$_POST['pahc'];
$up_pahtd=$_POST['pahtd'];
$up_paac=$_POST['paac'];
$up_paatd=$_POST['paatd'];
$up_plsi=$_POST['plsi'];
$up_plsp=$_POST['plsp'];
$up_plst=$_POST['plst'];
//parse border input into 3 variables
$up_pbordertop=preg_split('/[,? ]+/',$_POST['pbt']);
$up_pbtt=$up_pbordertop[0];
$up_pbts=$up_pbordertop[1];
$up_pbtc=$up_pbordertop[2];
//parse border input into 3 variables
$up_pborderright=preg_split('/[,? ]+/',$_POST['pbr']);
$up_pbrt=$up_pborderright[0];
$up_pbrs=$up_pborderright[1];
$up_pbrc=$up_pborderright[2];
//parse border input into 3 variables
$up_pborderbot=preg_split('/[,? ]+/',$_POST['pbb']);
$up_pbbt=$up_pborderbot[0];
$up_pbbs=$up_pborderbot[1];
$up_pbbc=$up_pborderbot[2];
//parse border input into 3 variables
$up_pborderleft=preg_split('/[,? ]+/',$_POST['pbl']);
$up_pblt=$up_pborderleft[0];
$up_pbls=$up_pborderleft[1];
$up_pblc=$up_pborderleft[2];
$up_pout=$_POST['pout'];
$up_pmarg=$_POST['pmarg'];
$up_ppad=$_POST['ppad'];
$up_ph=$_POST['ph'];
$up_pmaxh=$_POST['pmaxh'];
$up_pmaxw=$_POST['pmaxw'];
$up_pminh=$_POST['pminh'];
$up_pminw=$_POST['pminw'];
$up_pw=$_POST['pw'];
$up_pvis=$_POST['pvis'];
$up_pdisp=$_POST['pdisp'];
$up_ppos=$_POST['ppos'];
$up_pleft=$_POST['pleft'];
$up_ptop=$_POST['ptop'];
$up_pright=$_POST['pright'];
$up_pbot=$_POST['pbot'];
$up_pzind=$_POST['pzind'];
$up_pfloat=$_POST['pfloat'];
$up_pclr=$_POST['pclr'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE style_master SET PageBackgroundColor = '$up_pbgc' ");
  mysql_query("UPDATE style_master SET PageBackgroundImage = '$up_pbgimage' ");
  mysql_query("UPDATE style_master SET PageBackgroundRepeat = '$up_pbgr' ");
  mysql_query("UPDATE style_master SET PageBackgroundAttachment = '$up_pbga' ");
  mysql_query("UPDATE style_master SET PageBackgroundPosition = '$up_pbgp' ");
  mysql_query("UPDATE style_master SET PageColor = '$up_pc' ");
  mysql_query("UPDATE style_master SET PageLetterSpacing = '$up_pls' ");
  mysql_query("UPDATE style_master SET PageLineHeight = '$up_plh' ");
  mysql_query("UPDATE style_master SET PageTextAlign = '$up_pta' ");
  mysql_query("UPDATE style_master SET PageTextDecoration = '$up_ptd' ");
  mysql_query("UPDATE style_master SET PageTextIndent = '$up_pti' ");
  mysql_query("UPDATE style_master SET PageTextTransform = '$up_ptt' ");
  mysql_query("UPDATE style_master SET PageVerticalAlign = '$up_pva' ");
  mysql_query("UPDATE style_master SET PageWhiteSpace = '$up_pwhs' ");
  mysql_query("UPDATE style_master SET PageWordSpacing = '$up_pwos' ");
  mysql_query("UPDATE style_master SET PageFontFamily = '$up_pff' ");
  mysql_query("UPDATE style_master SET PageFontSize = '$up_pfsize' ");
  mysql_query("UPDATE style_master SET PageFontStyle = '$up_pfstyle' ");
  mysql_query("UPDATE style_master SET PageFontVariant = '$up_pfv' ");
  mysql_query("UPDATE style_master SET PageFontWeight = '$up_pfw' ");
  mysql_query("UPDATE style_master SET PageaLinkColor = '$up_palc' ");
  mysql_query("UPDATE style_master SET PageaLinkTextDecoration = '$up_paltd' ");
  mysql_query("UPDATE style_master SET PageaVisitedColor = '$up_pavc' ");
  mysql_query("UPDATE style_master SET PageaVisitedDecoration = '$up_pavtd' ");
  mysql_query("UPDATE style_master SET PageaHoverColor = '$up_pahc' ");
  mysql_query("UPDATE style_master SET PageaHoverTextDecoration = '$up_pahtd' ");
  mysql_query("UPDATE style_master SET PageaActiveColor = '$up_paac' ");
  mysql_query("UPDATE style_master SET PageaActiveTextDecoration = '$up_paatd' ");
  mysql_query("UPDATE style_master SET PageListStyleImage = '$up_plsi' ");
  mysql_query("UPDATE style_master SET PageListStylePosition = '$up_plsp' ");
  mysql_query("UPDATE style_master SET PageListStyleType = '$up_plst' ");
  mysql_query("UPDATE style_master SET PageBorderTopThickness = '$up_pbtt' ");
  mysql_query("UPDATE style_master SET PageBorderTopStyle = '$up_pbts' ");
  mysql_query("UPDATE style_master SET PageBorderTopColor = '$up_pbtc' ");
  mysql_query("UPDATE style_master SET PageBorderRightThickness = '$up_pbrt' ");
  mysql_query("UPDATE style_master SET PageBorderRightStyle = '$up_pbrs' ");
  mysql_query("UPDATE style_master SET PageBorderRightColor = '$up_pbrc' ");
  mysql_query("UPDATE style_master SET PageBorderBottomThickness = '$up_pbbt' ");
  mysql_query("UPDATE style_master SET PageBorderBottomStyle = '$up_pbbs' ");
  mysql_query("UPDATE style_master SET PageBorderBottomColor = '$up_pbbc' ");
  mysql_query("UPDATE style_master SET PageBorderLeftThickness = '$up_pblt' ");
  mysql_query("UPDATE style_master SET PageBorderLeftStyle = '$up_pbls' ");
  mysql_query("UPDATE style_master SET PageBorderLeftColor = '$up_pblc' ");
  mysql_query("UPDATE style_master SET PageOutline = '$up_pout' ");
  mysql_query("UPDATE style_master SET PageMargin = '$up_pmarg' ");
  mysql_query("UPDATE style_master SET PagePadding = '$up_ppad' ");
  mysql_query("UPDATE style_master SET PageHeight = '$up_ph' ");
  mysql_query("UPDATE style_master SET PageMaxHeight = '$up_pmaxh' ");
  mysql_query("UPDATE style_master SET PageMaxWidth = '$up_pmaxw' ");
  mysql_query("UPDATE style_master SET PageMinHeight = '$up_pminh' ");
  mysql_query("UPDATE style_master SET PageMinWidth = '$up_pminw' ");
  mysql_query("UPDATE style_master SET PageWidth = '$up_pw' ");
  mysql_query("UPDATE style_master SET PageVisibility = '$up_pvis' ");
  mysql_query("UPDATE style_master SET PageDisplay = '$up_pdisp' ");
  mysql_query("UPDATE style_master SET PagePosition = '$up_ppos' ");
  mysql_query("UPDATE style_master SET PageLeft = '$up_pleft' ");
  mysql_query("UPDATE style_master SET PageTop = '$up_ptop' ");
  mysql_query("UPDATE style_master SET PageRight = '$up_pright' ");
  mysql_query("UPDATE style_master SET PageBottom = '$up_pbot' ");
  mysql_query("UPDATE style_master SET PageZIndex = '$up_pzind' ");
  mysql_query("UPDATE style_master SET PageFloat = '$up_pfloat' ");
  mysql_query("UPDATE style_master SET PageClear = '$up_pclr' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$pbgc	=$row['PageBackgroundColor'];
$pbgimage	=$row['PageBackgroundImage'];
$pbgr	=$row['PageBackgroundRepeat'];
$pbga	=$row['PageBackgroundAttachment'];
$pbgp	=$row['PageBackgroundPosition'];
$pc	=$row['PageColor'];
$pls	=$row['PageLetterSpacing'];
$plh	=$row['PageLineHeight'];
$pta	=$row['PageTextAlign'];
$ptd	=$row['PageTextDecoration'];
$pti	=$row['PageTextIndent'];
$ptt	=$row['PageTextTransform'];
$pva	=$row['PageVerticalAlign'];
$pwhs	=$row['PageWhiteSpace'];
$pwos	=$row['PageWordSpacing'];
$pff	=$row['PageFontFamily'];
$pfsize	=$row['PageFontSize'];
$pfstyle	=$row['PageFontStyle'];
$pfv	=$row['PageFontVariant'];
$pfw	=$row['PageFontWeight'];
$palc	=$row['PageaLinkColor'];
$paltd	=$row['PageaLinkTextDecoration'];
$pavc	=$row['PageaVisitedColor'];
$pavtd	=$row['PageaVisitedDecoration'];
$pahc	=$row['PageaHoverColor'];
$pahtd	=$row['PageaHoverTextDecoration'];
$paac	=$row['PageaActiveColor'];
$paatd	=$row['PageaActiveTextDecoration'];
$plsi	=$row['PageListStyleImage'];
$plsp	=$row['PageListStylePosition'];
$plst	=$row['PageListStyleType'];
$pbtt	=$row['PageBorderTopThickness'];
$pbts	=$row['PageBorderTopStyle'];
$pbtc	=$row['PageBorderTopColor'];
$pbrt	=$row['PageBorderRightThickness'];
$pbrs	=$row['PageBorderRightStyle'];
$pbrc	=$row['PageBorderRightColor'];
$pbbt	=$row['PageBorderBottomThickness'];
$pbbs	=$row['PageBorderBottomStyle'];
$pbbc	=$row['PageBorderBottomColor'];
$pblt	=$row['PageBorderLeftThickness'];
$pbls	=$row['PageBorderLeftStyle'];
$pblc	=$row['PageBorderLeftColor'];
$pout	=$row['PageOutline'];
$pmarg	=$row['PageMargin'];
$ppad	=$row['PagePadding'];
$ph	=$row['PageHeight'];
$pmaxh	=$row['PageMaxHeight'];
$pmaxw	=$row['PageMaxWidth'];
$pminh	=$row['PageMinHeight'];
$pminw	=$row['PageMinWidth'];
$pw	=$row['PageWidth'];
$pvis	=$row['PageVisibility'];
$pdisp	=$row['PageDisplay'];
$ppos	=$row['PagePosition'];
$pleft	=$row['PageLeft'];
$ptop	=$row['PageTop'];
$pright	=$row['PageRight'];
$pbot	=$row['PageBottom'];
$pzind	=$row['PageZIndex'];
$pfloat	=$row['PageFloat'];
$pclr	=$row['PageClear'];

/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/pbgimage.".$filename_extension;

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
  if(file_exists('images/pbgimage.jpg'))
  {
   unlink('images/pbgimage.jpg');
  }
  if(file_exists('images/pbgimage.png'))
  {
   unlink('images/pbgimage.png');
  }
  if(file_exists('images/pbgimage.gif'))
  {
   unlink('images/pbgimage.gif');
  }
  if(file_exists('images/pbgimage.bmp'))
  {
   unlink('images/pbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }

?>


<form enctype="multipart/form-data" action="?page=layout_page" method="post" name="layout_page">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>PAGE LAYOUT</H3>
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
						<input maxlength="10" name="pbgc" size="10" type="text" value="<?=$pbgc;?>" /></td>
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
  if ($pbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="pbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

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
  if ($pbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="pbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
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
  if ($pbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="pbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($pbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="pbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
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
						<input maxlength="20" name="pc" type="text" value="<?=$pc;?>" /></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						letter-spacing:</td>
					<td>
						<input maxlength="20" name="pls" type="text" value="<?=$pls;?>"/></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						line-height:</td>
					<td>
						<input maxlength="20" name="plh" type="text" value="<?=$plh;?>" /></td>
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
  if ($pta == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="pta" size="1"><option value="left" <?=$select_selected[0];?> >left</option><option value="right" <?=$select_selected[1];?> >right</option><option value="center" <?=$select_selected[2];?> >center</option><option value="justify" <?=$select_selected[3];?> >justify</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
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
  if ($ptd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ptd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-indent:</td>
					<td>
						<input maxlength="20" name="pti" type="text" value="<?=$pti;?>" /></td>
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
  if ($ptt == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ptt" size="1"><option value="" <?=$select_selected[0];?> >none</option><option value="capitalize" <?=$select_selected[1];?> >capitalize</option><option value="uppercase" <?=$select_selected[2];?> >uppercase</option><option value="lowecase" <?=$select_selected[3];?> >lowercase</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						vertical-align:</td>
					<td>
						<input maxlength="20" name="pva" type="text" value="<?=$pva;?>" /></td>
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
  if ($pwhs == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="pwhs" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="nowrap" <?=$select_selected[1];?> >nowrap</option><option value="pre" <?=$select_selected[2];?> >pre</option><option value="pre-line" <?=$select_selected[3];?> >pre-line</option><option value="pre-wrap" <?=$select_selected[4];?> >pre-wrap</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						word-spacing:</td>
					<td>
						<input maxlength="20" name="pwos" type="text" value="<?=$pwos;?>" /></td>
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
						<input maxlength="100" name="pff" size="50" type="text" value="<?=$pff;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-size:</td>
					<td>
						<input maxlength="30" name="pfsize" size="20" type="text" value="<?=$pfsize;?>" /></td>
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
  if ($pfstyle == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="pfstyle" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="italic" <?=$select_selected[1];?> >italic</option><option value="oblique" <?=$select_selected[2];?> >oblique</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($pfv == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="pfv" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="small-caps" <?=$select_selected[1];?> >small-caps</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($pfw == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="pfw" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="bold" <?=$select_selected[1];?> >bold</option><option value="bolder" <?=$select_selected[2];?> >bolder</option><option value="lighter" <?=$select_selected[3];?> >lighter</option></select></td>
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
						<input maxlength="50" name="plsi" size="20" type="text" value="<?=$plsi;?>" /></td>
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
  if ($plsp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="plsp" size="1"><option value="inside" <?=$select_selected[0];?> >inside</option><option value="outside" <?=$select_selected[1];?> >outside (default)</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($plst == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="plst" size="1"><option value="decimal" <?=$select_selected[0];?> >decimal</option><option value="lower-alpha" <?=$select_selected[1];?> >lower-alpha</option><option value="lower-roman" <?=$select_selected[2];?> >lower-roman</option><option <?=$select_selected[3];?> value="none">none</option><option value="upper-alpha" <?=$select_selected[4];?> >upper-alpha</option><option value="upper-latin" <?=$select_selected[5];?> >upper-latin</option><option value="upper-roman" <?=$plst_selected[6];?> >upper-roman</option></select></td>
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
						<input maxlength="30" name="pbt" size="20" type="text" value="<?=$pbtt;?> <?=$pbts;?> <?=$pbtc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-right:</td>
					<td>
						<input maxlength="30" name="pbr" size="20" type="text" value="<?=$pbrt;?> <?=$pbrs;?> <?=$pbrc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-bottom:</td>
					<td>
						<input maxlength="30" name="pbb" size="20" type="text" value="<?=$pbbt;?> <?=$pbbs;?> <?=$pbbc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-left:</td>
					<td>
						<input maxlength="30" name="pbl" size="20" type="text" value="<?=$pblt;?> <?=$pbls;?> <?=$pblc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						outline:</td>
					<td>
						<input maxlength="30" name="pout" size="20" type="text" value="<?=$pout;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						margin:</td>
					<td>
						<input maxlength="30" name="pmarg" size="20" type="text" value="<?=$pmarg;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						padding:</td>
					<td>
						<input maxlength="30" name="ppad" size="20" type="text" value="<?=$ppad;?>" /></td>
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
						<input maxlength="20" name="ph" size="20" type="text" value="<?=$ph;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-height:</td>
					<td>
						<input maxlength="20" name="pmaxh" size="20" type="text" value="<?=$pmaxh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-width:</td>
					<td>
						<input maxlength="20" name="pmaxw" size="20" type="text" value="<?=$pmaxw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-height:</td>
					<td>
						<input maxlength="20" name="pminh" size="20" type="text" value="<?=$pminh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-width:</td>
					<td>
						<input maxlength="20" name="pminw" size="20" type="text" value="<?=$pminw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						width:</td>
					<td>
						<input maxlength="20" name="pw" size="20" type="text" value="<?=$pw;?>" /></td>
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
  if ($pvis == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="pvis" size="1"><option value="visible" <?=$select_selected[0];?> >visible</option><option value="hidden" <?=$select_selected[1];?> >hidden</option><option value="collapse" <?=$select_selected[2];?> >collapse</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($pdisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="pdisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
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
  if ($ppos == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ppos" size="1"><option value="static" <?=$select_selected[0];?> >static</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="relative" <?=$select_selected[2];?> >relative</option><option value="absolute" <?=$select_selected[3];?> >absolute</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						left:</td>
					<td>
						<input maxlength="20" name="pleft" size="20" type="text" value="<?=$pleft;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						top:</td>
					<td>
						<input maxlength="20" name="ptop" size="20" type="text" value="<?=$ptop;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						right:</td>
					<td>
						<input maxlength="20" name="pright" size="20" type="text" value="<?=$pright;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						bottom:</td>
					<td>
						<input maxlength="20" name="pbot" size="20" type="text" value="<?=$pbot;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						z-index:</td>
					<td>
						<input maxlength="20" name="pzind" size="20" type="text" value="<?=$pzind;?>" /></td>
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
  if ($pfloat == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="pfloat" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option></select></td>
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
  if ($pclr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="pclr" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option><option value="both" <?=$select_selected[3];?> >both</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Links</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link color:</td>
					<td>
						<input maxlength="20" name="palc" size="20" type="text" value="<?=$palc;?>" /></td>
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
  if ($paltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="paltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited color:</td>
					<td>
						<input maxlength="20" name="pavc" size="20" type="text" value="<?=$pavc;?>" /></td>
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
  if ($pavtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="pavtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover color:</td>
					<td>
						<input maxlength="20" name="pahc" size="20" type="text" value="<?=$pahc;?>" /></td>
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
  if ($pahtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="pahtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active color:</td>
					<td>
						<input maxlength="20" name="paac" size="20" type="text" value="<?=$paac;?>" /></td>
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
  if ($paatd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="paatd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
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