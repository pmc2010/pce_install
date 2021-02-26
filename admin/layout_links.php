<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_lbgc=$_POST['lbgc'];
 $filename=$_FILES['uploadedfile']['name'];
$up_lbgimage=$_POST['lbgimage'];
 $delete_image=$_POST['delete_image'];
$up_lbgr=$_POST['lbgr'];
$up_lbga=$_POST['lbga'];
$up_lbgp=$_POST['lbgp'];
$up_lc=$_POST['lc'];
$up_lls=$_POST['lls'];
$up_llh=$_POST['llh'];
$up_lta=$_POST['lta'];
$up_ltd=$_POST['ltd'];
$up_lti=$_POST['lti'];
$up_ltt=$_POST['ltt'];
$up_lva=$_POST['lva'];
$up_lwhs=$_POST['lwhs'];
$up_lwos=$_POST['lwos'];
$up_lff=$_POST['lff'];
$up_lfsize=$_POST['lfsize'];
$up_lfstyle=$_POST['lfstyle'];
$up_lfv=$_POST['lfv'];
$up_lfw=$_POST['lfw'];
$up_lalc=$_POST['lalc'];
$up_laltd=$_POST['laltd'];
$up_lavc=$_POST['lavc'];
$up_lavtd=$_POST['lavtd'];
$up_lahc=$_POST['lahc'];
$up_lahtd=$_POST['lahtd'];
$up_laac=$_POST['laac'];
$up_laatd=$_POST['laatd'];
$up_llsi=$_POST['llsi'];
$up_llsp=$_POST['llsp'];
$up_llst=$_POST['llst'];
//parse border input into 3 variables
$up_lbordertop=preg_split('/[,? ]+/',$_POST['lbt']);
$up_lbtt=$up_lbordertop[0];
$up_lbts=$up_lbordertop[1];
$up_lbtc=$up_lbordertop[2];
//parse border input into 3 variables
$up_lborderright=preg_split('/[,? ]+/',$_POST['lbr']);
$up_lbrt=$up_lborderright[0];
$up_lbrs=$up_lborderright[1];
$up_lbrc=$up_lborderright[2];
//parse border input into 3 variables
$up_lborderbot=preg_split('/[,? ]+/',$_POST['lbb']);
$up_lbbt=$up_lborderbot[0];
$up_lbbs=$up_lborderbot[1];
$up_lbbc=$up_lborderbot[2];
//parse border input into 3 variables
$up_lborderleft=preg_split('/[,? ]+/',$_POST['lbl']);
$up_lblt=$up_lborderleft[0];
$up_lbls=$up_lborderleft[1];
$up_lblc=$up_lborderleft[2];
$up_lout=$_POST['lout'];
$up_lmarg=$_POST['lmarg'];
$up_lpad=$_POST['lpad'];
$up_lh=$_POST['lh'];
$up_lmaxh=$_POST['lmaxh'];
$up_lmaxw=$_POST['lmaxw'];
$up_lminh=$_POST['lminh'];
$up_lminw=$_POST['lminw'];
$up_lw=$_POST['lw'];
$up_lvis=$_POST['lvis'];
$up_ldisp=$_POST['ldisp'];
$up_lpos=$_POST['lpos'];
$up_lleft=$_POST['lleft'];
$up_ltop=$_POST['ltop'];
$up_lright=$_POST['lright'];
$up_lbot=$_POST['lbot'];
$up_lzind=$_POST['lzind'];
$up_lfloat=$_POST['lfloat'];
$up_lclr=$_POST['lclr'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE style_master SET LinksBackgroundColor = '$up_lbgc' ");
  mysql_query("UPDATE style_master SET LinksBackgroundImage = '$up_lbgimage' ");
  mysql_query("UPDATE style_master SET LinksBackgroundRepeat = '$up_lbgr' ");
  mysql_query("UPDATE style_master SET LinksBackgroundAttachment = '$up_lbga' ");
  mysql_query("UPDATE style_master SET LinksBackgroundPosition = '$up_lbgp' ");
  mysql_query("UPDATE style_master SET LinksColor = '$up_lc' ");
  mysql_query("UPDATE style_master SET LinksLetterSpacing = '$up_lls' ");
  mysql_query("UPDATE style_master SET LinksLineHeight = '$up_llh' ");
  mysql_query("UPDATE style_master SET LinksTextAlign = '$up_lta' ");
  mysql_query("UPDATE style_master SET LinksTextDecoration = '$up_ltd' ");
  mysql_query("UPDATE style_master SET LinksTextIndent = '$up_lti' ");
  mysql_query("UPDATE style_master SET LinksTextTransform = '$up_ltt' ");
  mysql_query("UPDATE style_master SET LinksVerticalAlign = '$up_lva' ");
  mysql_query("UPDATE style_master SET LinksWhiteSpace = '$up_lwhs' ");
  mysql_query("UPDATE style_master SET LinksWordSpacing = '$up_lwos' ");
  mysql_query("UPDATE style_master SET LinksFontFamily = '$up_lff' ");
  mysql_query("UPDATE style_master SET LinksFontSize = '$up_lfsize' ");
  mysql_query("UPDATE style_master SET LinksFontStyle = '$up_lfstyle' ");
  mysql_query("UPDATE style_master SET LinksFontVariant = '$up_lfv' ");
  mysql_query("UPDATE style_master SET LinksFontWeight = '$up_lfw' ");
  mysql_query("UPDATE style_master SET LinksaLinkColor = '$up_lalc' ");
  mysql_query("UPDATE style_master SET LinksaLinkTextDecoration = '$up_laltd' ");
  mysql_query("UPDATE style_master SET LinksaVisitedColor = '$up_lavc' ");
  mysql_query("UPDATE style_master SET LinksaVisitedDecoration = '$up_lavtd' ");
  mysql_query("UPDATE style_master SET LinksaHoverColor = '$up_lahc' ");
  mysql_query("UPDATE style_master SET LinksaHoverTextDecoration = '$up_lahtd' ");
  mysql_query("UPDATE style_master SET LinksaActiveColor = '$up_laac' ");
  mysql_query("UPDATE style_master SET LinksaActiveTextDecoration = '$up_laatd' ");
  mysql_query("UPDATE style_master SET LinksListStyleImage = '$up_llsi' ");
  mysql_query("UPDATE style_master SET LinksListStylePosition = '$up_llsp' ");
  mysql_query("UPDATE style_master SET LinksListStyleType = '$up_llst' ");
  mysql_query("UPDATE style_master SET LinksBorderTopThickness = '$up_lbtt' ");
  mysql_query("UPDATE style_master SET LinksBorderTopStyle = '$up_lbts' ");
  mysql_query("UPDATE style_master SET LinksBorderTopColor = '$up_lbtc' ");
  mysql_query("UPDATE style_master SET LinksBorderRightThickness = '$up_lbrt' ");
  mysql_query("UPDATE style_master SET LinksBorderRightStyle = '$up_lbrs' ");
  mysql_query("UPDATE style_master SET LinksBorderRightColor = '$up_lbrc' ");
  mysql_query("UPDATE style_master SET LinksBorderBottomThickness = '$up_lbbt' ");
  mysql_query("UPDATE style_master SET LinksBorderBottomStyle = '$up_lbbs' ");
  mysql_query("UPDATE style_master SET LinksBorderBottomColor = '$up_lbbc' ");
  mysql_query("UPDATE style_master SET LinksBorderLeftThickness = '$up_lblt' ");
  mysql_query("UPDATE style_master SET LinksBorderLeftStyle = '$up_lbls' ");
  mysql_query("UPDATE style_master SET LinksBorderLeftColor = '$up_lblc' ");
  mysql_query("UPDATE style_master SET LinksOutline = '$up_lout' ");
  mysql_query("UPDATE style_master SET LinksMargin = '$up_lmarg' ");
  mysql_query("UPDATE style_master SET LinksPadding = '$up_lpad' ");
  mysql_query("UPDATE style_master SET LinksHeight = '$up_lh' ");
  mysql_query("UPDATE style_master SET LinksMaxHeight = '$up_lmaxh' ");
  mysql_query("UPDATE style_master SET LinksMaxWidth = '$up_lmaxw' ");
  mysql_query("UPDATE style_master SET LinksMinHeight = '$up_lminh' ");
  mysql_query("UPDATE style_master SET LinksMinWidth = '$up_lminw' ");
  mysql_query("UPDATE style_master SET LinksWidth = '$up_lw' ");
  mysql_query("UPDATE style_master SET LinksVisibility = '$up_lvis' ");
  mysql_query("UPDATE style_master SET LinksDisplay = '$up_ldisp' ");
  mysql_query("UPDATE style_master SET LinksPosition = '$up_lpos' ");
  mysql_query("UPDATE style_master SET LinksLeft = '$up_lleft' ");
  mysql_query("UPDATE style_master SET LinksTop = '$up_ltop' ");
  mysql_query("UPDATE style_master SET LinksRight = '$up_lright' ");
  mysql_query("UPDATE style_master SET LinksBottom = '$up_lbot' ");
  mysql_query("UPDATE style_master SET LinksZIndex = '$up_lzind' ");
  mysql_query("UPDATE style_master SET LinksFloat = '$up_lfloat' ");
  mysql_query("UPDATE style_master SET LinksClear = '$up_lclr' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$lbgc	=$row['LinksBackgroundColor'];
$lbgimage	=$row['LinksBackgroundImage'];
$lbgr	=$row['LinksBackgroundRepeat'];
$lbga	=$row['LinksBackgroundAttachment'];
$lbgp	=$row['LinksBackgroundPosition'];
$lc	=$row['LinksColor'];
$lls	=$row['LinksLetterSpacing'];
$llh	=$row['LinksLineHeight'];
$lta	=$row['LinksTextAlign'];
$ltd	=$row['LinksTextDecoration'];
$lti	=$row['LinksTextIndent'];
$ltt	=$row['LinksTextTransform'];
$lva	=$row['LinksVerticalAlign'];
$lwhs	=$row['LinksWhiteSpace'];
$lwos	=$row['LinksWordSpacing'];
$lff	=$row['LinksFontFamily'];
$lfsize	=$row['LinksFontSize'];
$lfstyle	=$row['LinksFontStyle'];
$lfv	=$row['LinksFontVariant'];
$lfw	=$row['LinksFontWeight'];
$lalc	=$row['LinksaLinkColor'];
$laltd	=$row['LinksaLinkTextDecoration'];
$lavc	=$row['LinksaVisitedColor'];
$lavtd	=$row['LinksaVisitedDecoration'];
$lahc	=$row['LinksaHoverColor'];
$lahtd	=$row['LinksaHoverTextDecoration'];
$laac	=$row['LinksaActiveColor'];
$laatd	=$row['LinksaActiveTextDecoration'];
$llsi	=$row['LinksListStyleImage'];
$llsp	=$row['LinksListStylePosition'];
$llst	=$row['LinksListStyleType'];
$lbtt	=$row['LinksBorderTopThickness'];
$lbts	=$row['LinksBorderTopStyle'];
$lbtc	=$row['LinksBorderTopColor'];
$lbrt	=$row['LinksBorderRightThickness'];
$lbrs	=$row['LinksBorderRightStyle'];
$lbrc	=$row['LinksBorderRightColor'];
$lbbt	=$row['LinksBorderBottomThickness'];
$lbbs	=$row['LinksBorderBottomStyle'];
$lbbc	=$row['LinksBorderBottomColor'];
$lblt	=$row['LinksBorderLeftThickness'];
$lbls	=$row['LinksBorderLeftStyle'];
$lblc	=$row['LinksBorderLeftColor'];
$lout	=$row['LinksOutline'];
$lmarg	=$row['LinksMargin'];
$lpad	=$row['LinksPadding'];
$lh	=$row['LinksHeight'];
$lmaxh	=$row['LinksMaxHeight'];
$lmaxw	=$row['LinksMaxWidth'];
$lminh	=$row['LinksMinHeight'];
$lminw	=$row['LinksMinWidth'];
$lw	=$row['LinksWidth'];
$lvis	=$row['LinksVisibility'];
$ldisp	=$row['LinksDisplay'];
$lpos	=$row['LinksPosition'];
$lleft	=$row['LinksLeft'];
$ltop	=$row['LinksTop'];
$lright	=$row['LinksRight'];
$lbot	=$row['LinksBottom'];
$lzind	=$row['LinksZIndex'];
$lfloat	=$row['LinksFloat'];
$lclr	=$row['LinksClear'];

/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/lbgimage.".$filename_extension;

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
  if(file_exists('images/lbgimage.jpg'))
  {
   unlink('images/lbgimage.jpg');
  }
  if(file_exists('images/lbgimage.png'))
  {
   unlink('images/lbgimage.png');
  }
  if(file_exists('images/lbgimage.gif'))
  {
   unlink('images/lbgimage.gif');
  }
  if(file_exists('images/lbgimage.bmp'))
  {
   unlink('images/lbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }

?>


<form enctype="multipart/form-data" action="?page=layout_links" method="post" name="layout_links">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>LINKS LAYOUT</H3>
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
						<input maxlength="10" name="lbgc" size="10" type="text" value="<?=$lbgc;?>" /></td>
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
  if ($lbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="lbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

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
  if ($lbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="lbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
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
  if ($lbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="lbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($lbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="lbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
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
						<input maxlength="20" name="lc" type="text" value="<?=$lc;?>" /></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						letter-spacing:</td>
					<td>
						<input maxlength="20" name="lls" type="text" value="<?=$lls;?>"/></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						line-height:</td>
					<td>
						<input maxlength="20" name="llh" type="text" value="<?=$llh;?>" /></td>
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
  if ($lta == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="lta" size="1"><option value="left" <?=$select_selected[0];?> >left</option><option value="right" <?=$select_selected[1];?> >right</option><option value="center" <?=$select_selected[2];?> >center</option><option value="justify" <?=$select_selected[3];?> >justify</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
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
  if ($ltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-indent:</td>
					<td>
						<input maxlength="20" name="lti" type="text" value="<?=$lti;?>" /></td>
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
  if ($ltt == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ltt" size="1"><option value="" <?=$select_selected[0];?> >none</option><option value="capitalize" <?=$select_selected[1];?> >capitalize</option><option value="uppercase" <?=$select_selected[2];?> >uppercase</option><option value="lowecase" <?=$select_selected[3];?> >lowercase</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						vertical-align:</td>
					<td>
						<input maxlength="20" name="lva" type="text" value="<?=$lva;?>" /></td>
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
  if ($lwhs == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="lwhs" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="nowrap" <?=$select_selected[1];?> >nowrap</option><option value="pre" <?=$select_selected[2];?> >pre</option><option value="pre-line" <?=$select_selected[3];?> >pre-line</option><option value="pre-wrap" <?=$select_selected[4];?> >pre-wrap</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						word-spacing:</td>
					<td>
						<input maxlength="20" name="lwos" type="text" value="<?=$lwos;?>" /></td>
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
						<input maxlength="100" name="lff" size="50" type="text" value="<?=$lff;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-size:</td>
					<td>
						<input maxlength="30" name="lfsize" size="20" type="text" value="<?=$lfsize;?>" /></td>
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
  if ($lfstyle == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="lfstyle" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="italic" <?=$select_selected[1];?> >italic</option><option value="oblique" <?=$select_selected[2];?> >oblique</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($lfv == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="lfv" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="small-caps" <?=$select_selected[1];?> >small-caps</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($lfw == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="lfw" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="bold" <?=$select_selected[1];?> >bold</option><option value="bolder" <?=$select_selected[2];?> >bolder</option><option value="lighter" <?=$select_selected[3];?> >lighter</option></select></td>
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
						<input maxlength="50" name="llsi" size="20" type="text" value="<?=$llsi;?>" /></td>
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
  if ($llsp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="llsp" size="1"><option value="inside" <?=$select_selected[0];?> >inside</option><option value="outside" <?=$select_selected[1];?> >outside (default)</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($llst == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="llst" size="1"><option value="decimal" <?=$select_selected[0];?> >decimal</option><option value="lower-alpha" <?=$select_selected[1];?> >lower-alpha</option><option value="lower-roman" <?=$select_selected[2];?> >lower-roman</option><option <?=$select_selected[3];?> value="none">none</option><option value="upper-alpha" <?=$select_selected[4];?> >upper-alpha</option><option value="upper-latin" <?=$select_selected[5];?> >upper-latin</option><option value="upper-roman" <?=$llst_selected[6];?> >upper-roman</option></select></td>
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
						<input maxlength="30" name="lbt" size="20" type="text" value="<?=$lbtt;?> <?=$lbts;?> <?=$lbtc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-right:</td>
					<td>
						<input maxlength="30" name="lbr" size="20" type="text" value="<?=$lbrt;?> <?=$lbrs;?> <?=$lbrc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-bottom:</td>
					<td>
						<input maxlength="30" name="lbb" size="20" type="text" value="<?=$lbbt;?> <?=$lbbs;?> <?=$lbbc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-left:</td>
					<td>
						<input maxlength="30" name="lbl" size="20" type="text" value="<?=$lblt;?> <?=$lbls;?> <?=$lblc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						outline:</td>
					<td>
						<input maxlength="30" name="lout" size="20" type="text" value="<?=$lout;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						margin:</td>
					<td>
						<input maxlength="30" name="lmarg" size="20" type="text" value="<?=$lmarg;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						padding:</td>
					<td>
						<input maxlength="30" name="lpad" size="20" type="text" value="<?=$lpad;?>" /></td>
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
						<input maxlength="20" name="lh" size="20" type="text" value="<?=$lh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-height:</td>
					<td>
						<input maxlength="20" name="lmaxh" size="20" type="text" value="<?=$lmaxh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-width:</td>
					<td>
						<input maxlength="20" name="lmaxw" size="20" type="text" value="<?=$lmaxw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-height:</td>
					<td>
						<input maxlength="20" name="lminh" size="20" type="text" value="<?=$lminh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-width:</td>
					<td>
						<input maxlength="20" name="lminw" size="20" type="text" value="<?=$lminw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						width:</td>
					<td>
						<input maxlength="20" name="lw" size="20" type="text" value="<?=$lw;?>" /></td>
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
  if ($lvis == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="lvis" size="1"><option value="visible" <?=$select_selected[0];?> >visible</option><option value="hidden" <?=$select_selected[1];?> >hidden</option><option value="collapse" <?=$select_selected[2];?> >collapse</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($ldisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ldisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
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
  if ($lpos == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="lpos" size="1"><option value="static" <?=$select_selected[0];?> >static</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="relative" <?=$select_selected[2];?> >relative</option><option value="absolute" <?=$select_selected[3];?> >absolute</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						left:</td>
					<td>
						<input maxlength="20" name="lleft" size="20" type="text" value="<?=$lleft;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						top:</td>
					<td>
						<input maxlength="20" name="ltop" size="20" type="text" value="<?=$ltop;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						right:</td>
					<td>
						<input maxlength="20" name="lright" size="20" type="text" value="<?=$lright;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						bottom:</td>
					<td>
						<input maxlength="20" name="lbot" size="20" type="text" value="<?=$lbot;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						z-index:</td>
					<td>
						<input maxlength="20" name="lzind" size="20" type="text" value="<?=$lzind;?>" /></td>
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
  if ($lfloat == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="lfloat" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option></select></td>
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
  if ($lclr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="lclr" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option><option value="both" <?=$select_selected[3];?> >both</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Links</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link color:</td>
					<td>
						<input maxlength="20" name="lalc" size="20" type="text" value="<?=$lalc;?>" /></td>
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
  if ($laltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="laltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited color:</td>
					<td>
						<input maxlength="20" name="lavc" size="20" type="text" value="<?=$lavc;?>" /></td>
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
  if ($lavtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="lavtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover color:</td>
					<td>
						<input maxlength="20" name="lahc" size="20" type="text" value="<?=$lahc;?>" /></td>
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
  if ($lahtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="lahtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active color:</td>
					<td>
						<input maxlength="20" name="laac" size="20" type="text" value="<?=$laac;?>" /></td>
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
  if ($laatd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="laatd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
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