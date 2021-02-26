<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_nrbgc=$_POST['nrbgc'];
 $filename=$_FILES['uploadedfile']['name'];
$up_nrbgimage=$_POST['nrbgimage'];
 $delete_image=$_POST['delete_image'];
$up_nrbgr=$_POST['nrbgr'];
$up_nrbga=$_POST['nrbga'];
$up_nrbgp=$_POST['nrbgp'];
$up_nrc=$_POST['nrc'];
$up_nrls=$_POST['nrls'];
$up_nrlh=$_POST['nrlh'];
$up_nrta=$_POST['nrta'];
$up_nrtd=$_POST['nrtd'];
$up_nrti=$_POST['nrti'];
$up_nrtt=$_POST['nrtt'];
$up_nrva=$_POST['nrva'];
$up_nrwhs=$_POST['nrwhs'];
$up_nrwos=$_POST['nrwos'];
$up_nrff=$_POST['nrff'];
$up_nrfsize=$_POST['nrfsize'];
$up_nrfstyle=$_POST['nrfstyle'];
$up_nrfv=$_POST['nrfv'];
$up_nrfw=$_POST['nrfw'];
$up_nralc=$_POST['nralc'];
$up_nraltd=$_POST['nraltd'];
$up_nravc=$_POST['nravc'];
$up_nravtd=$_POST['nravtd'];
$up_nrahc=$_POST['nrahc'];
$up_nrahtd=$_POST['nrahtd'];
$up_nraac=$_POST['nraac'];
$up_nraatd=$_POST['nraatd'];
$up_nrlsi=$_POST['nrlsi'];
$up_nrlsp=$_POST['nrlsp'];
$up_nrlst=$_POST['nrlst'];
//parse border input into 3 variables
$up_nrbordertop=preg_split('/[,? ]+/',$_POST['nrbt']);
$up_nrbtt=$up_nrbordertop[0];
$up_nrbts=$up_nrbordertop[1];
$up_nrbtc=$up_nrbordertop[2];
//parse border input into 3 variables
$up_nrborderright=preg_split('/[,? ]+/',$_POST['nrbr']);
$up_nrbrt=$up_nrborderright[0];
$up_nrbrs=$up_nrborderright[1];
$up_nrbrc=$up_nrborderright[2];
//parse border input into 3 variables
$up_nrborderbot=preg_split('/[,? ]+/',$_POST['nrbb']);
$up_nrbbt=$up_nrborderbot[0];
$up_nrbbs=$up_nrborderbot[1];
$up_nrbbc=$up_nrborderbot[2];
//parse border input into 3 variables
$up_nrborderleft=preg_split('/[,? ]+/',$_POST['nrbl']);
$up_nrblt=$up_nrborderleft[0];
$up_nrbls=$up_nrborderleft[1];
$up_nrblc=$up_nrborderleft[2];
$up_nrout=$_POST['nrout'];
$up_nrmarg=$_POST['nrmarg'];
$up_nrpad=$_POST['nrpad'];
$up_nrh=$_POST['nrh'];
$up_nrmaxh=$_POST['nrmaxh'];
$up_nrmaxw=$_POST['nrmaxw'];
$up_nrminh=$_POST['nrminh'];
$up_nrminw=$_POST['nrminw'];
$up_nrw=$_POST['nrw'];
$up_nrvis=$_POST['nrvis'];
$up_nrdisp=$_POST['nrdisp'];
$up_nrpos=$_POST['nrpos'];
$up_nrleft=$_POST['nrleft'];
$up_nrtop=$_POST['nrtop'];
$up_nrright=$_POST['nrright'];
$up_nrbot=$_POST['nrbot'];
$up_nrzind=$_POST['nrzind'];
$up_nrfloat=$_POST['nrfloat'];
$up_nrclr=$_POST['nrclr'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE style_master SET NavbarRightBackgroundColor = '$up_nrbgc' ");
  mysql_query("UPDATE style_master SET NavbarRightBackgroundImage = '$up_nrbgimage' ");
  mysql_query("UPDATE style_master SET NavbarRightBackgroundRepeat = '$up_nrbgr' ");
  mysql_query("UPDATE style_master SET NavbarRightBackgroundAttachment = '$up_nrbga' ");
  mysql_query("UPDATE style_master SET NavbarRightBackgroundPosition = '$up_nrbgp' ");
  mysql_query("UPDATE style_master SET NavbarRightColor = '$up_nrc' ");
  mysql_query("UPDATE style_master SET NavbarRightLetterSpacing = '$up_nrls' ");
  mysql_query("UPDATE style_master SET NavbarRightLineHeight = '$up_nrlh' ");
  mysql_query("UPDATE style_master SET NavbarRightTextAlign = '$up_nrta' ");
  mysql_query("UPDATE style_master SET NavbarRightTextDecoration = '$up_nrtd' ");
  mysql_query("UPDATE style_master SET NavbarRightTextIndent = '$up_nrti' ");
  mysql_query("UPDATE style_master SET NavbarRightTextTransform = '$up_nrtt' ");
  mysql_query("UPDATE style_master SET NavbarRightVerticalAlign = '$up_nrva' ");
  mysql_query("UPDATE style_master SET NavbarRightWhiteSpace = '$up_nrwhs' ");
  mysql_query("UPDATE style_master SET NavbarRightWordSpacing = '$up_nrwos' ");
  mysql_query("UPDATE style_master SET NavbarRightFontFamily = '$up_nrff' ");
  mysql_query("UPDATE style_master SET NavbarRightFontSize = '$up_nrfsize' ");
  mysql_query("UPDATE style_master SET NavbarRightFontStyle = '$up_nrfstyle' ");
  mysql_query("UPDATE style_master SET NavbarRightFontVariant = '$up_nrfv' ");
  mysql_query("UPDATE style_master SET NavbarRightFontWeight = '$up_nrfw' ");
  mysql_query("UPDATE style_master SET NavbarRightaLinkColor = '$up_nralc' ");
  mysql_query("UPDATE style_master SET NavbarRightaLinkTextDecoration = '$up_nraltd' ");
  mysql_query("UPDATE style_master SET NavbarRightaVisitedColor = '$up_nravc' ");
  mysql_query("UPDATE style_master SET NavbarRightaVisitedDecoration = '$up_nravtd' ");
  mysql_query("UPDATE style_master SET NavbarRightaHoverColor = '$up_nrahc' ");
  mysql_query("UPDATE style_master SET NavbarRightaHoverTextDecoration = '$up_nrahtd' ");
  mysql_query("UPDATE style_master SET NavbarRightaActiveColor = '$up_nraac' ");
  mysql_query("UPDATE style_master SET NavbarRightaActiveTextDecoration = '$up_nraatd' ");
  mysql_query("UPDATE style_master SET NavbarRightListStyleImage = '$up_nrlsi' ");
  mysql_query("UPDATE style_master SET NavbarRightListStylePosition = '$up_nrlsp' ");
  mysql_query("UPDATE style_master SET NavbarRightListStyleType = '$up_nrlst' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderTopThickness = '$up_nrbtt' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderTopStyle = '$up_nrbts' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderTopColor = '$up_nrbtc' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderRightThickness = '$up_nrbrt' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderRightStyle = '$up_nrbrs' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderRightColor = '$up_nrbrc' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderBottomThickness = '$up_nrbbt' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderBottomStyle = '$up_nrbbs' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderBottomColor = '$up_nrbbc' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderLeftThickness = '$up_nrblt' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderLeftStyle = '$up_nrbls' ");
  mysql_query("UPDATE style_master SET NavbarRightBorderLeftColor = '$up_nrblc' ");
  mysql_query("UPDATE style_master SET NavbarRightOutline = '$up_nrout' ");
  mysql_query("UPDATE style_master SET NavbarRightMargin = '$up_nrmarg' ");
  mysql_query("UPDATE style_master SET NavbarRightPadding = '$up_nrpad' ");
  mysql_query("UPDATE style_master SET NavbarRightHeight = '$up_nrh' ");
  mysql_query("UPDATE style_master SET NavbarRightMaxHeight = '$up_nrmaxh' ");
  mysql_query("UPDATE style_master SET NavbarRightMaxWidth = '$up_nrmaxw' ");
  mysql_query("UPDATE style_master SET NavbarRightMinHeight = '$up_nrminh' ");
  mysql_query("UPDATE style_master SET NavbarRightMinWidth = '$up_nrminw' ");
  mysql_query("UPDATE style_master SET NavbarRightWidth = '$up_nrw' ");
  mysql_query("UPDATE style_master SET NavbarRightVisibility = '$up_nrvis' ");
  mysql_query("UPDATE style_master SET NavbarRightDisplay = '$up_nrdisp' ");
  mysql_query("UPDATE style_master SET NavbarRightPosition = '$up_nrpos' ");
  mysql_query("UPDATE style_master SET NavbarRightLeft = '$up_nrleft' ");
  mysql_query("UPDATE style_master SET NavbarRightTop = '$up_nrtop' ");
  mysql_query("UPDATE style_master SET NavbarRightRight = '$up_nrright' ");
  mysql_query("UPDATE style_master SET NavbarRightBottom = '$up_nrbot' ");
  mysql_query("UPDATE style_master SET NavbarRightZIndex = '$up_nrzind' ");
  mysql_query("UPDATE style_master SET NavbarRightFloat = '$up_nrfloat' ");
  mysql_query("UPDATE style_master SET NavbarRightClear = '$up_nrclr' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$nrbgc	=$row['NavbarRightBackgroundColor'];
$nrbgimage	=$row['NavbarRightBackgroundImage'];
$nrbgr	=$row['NavbarRightBackgroundRepeat'];
$nrbga	=$row['NavbarRightBackgroundAttachment'];
$nrbgp	=$row['NavbarRightBackgroundPosition'];
$nrc	=$row['NavbarRightColor'];
$nrls	=$row['NavbarRightLetterSpacing'];
$nrlh	=$row['NavbarRightLineHeight'];
$nrta	=$row['NavbarRightTextAlign'];
$nrtd	=$row['NavbarRightTextDecoration'];
$nrti	=$row['NavbarRightTextIndent'];
$nrtt	=$row['NavbarRightTextTransform'];
$nrva	=$row['NavbarRightVerticalAlign'];
$nrwhs	=$row['NavbarRightWhiteSpace'];
$nrwos	=$row['NavbarRightWordSpacing'];
$nrff	=$row['NavbarRightFontFamily'];
$nrfsize	=$row['NavbarRightFontSize'];
$nrfstyle	=$row['NavbarRightFontStyle'];
$nrfv	=$row['NavbarRightFontVariant'];
$nrfw	=$row['NavbarRightFontWeight'];
$nralc	=$row['NavbarRightaLinkColor'];
$nraltd	=$row['NavbarRightaLinkTextDecoration'];
$nravc	=$row['NavbarRightaVisitedColor'];
$nravtd	=$row['NavbarRightaVisitedDecoration'];
$nrahc	=$row['NavbarRightaHoverColor'];
$nrahtd	=$row['NavbarRightaHoverTextDecoration'];
$nraac	=$row['NavbarRightaActiveColor'];
$nraatd	=$row['NavbarRightaActiveTextDecoration'];
$nrlsi	=$row['NavbarRightListStyleImage'];
$nrlsp	=$row['NavbarRightListStylePosition'];
$nrlst	=$row['NavbarRightListStyleType'];
$nrbtt	=$row['NavbarRightBorderTopThickness'];
$nrbts	=$row['NavbarRightBorderTopStyle'];
$nrbtc	=$row['NavbarRightBorderTopColor'];
$nrbrt	=$row['NavbarRightBorderRightThickness'];
$nrbrs	=$row['NavbarRightBorderRightStyle'];
$nrbrc	=$row['NavbarRightBorderRightColor'];
$nrbbt	=$row['NavbarRightBorderBottomThickness'];
$nrbbs	=$row['NavbarRightBorderBottomStyle'];
$nrbbc	=$row['NavbarRightBorderBottomColor'];
$nrblt	=$row['NavbarRightBorderLeftThickness'];
$nrbls	=$row['NavbarRightBorderLeftStyle'];
$nrblc	=$row['NavbarRightBorderLeftColor'];
$nrout	=$row['NavbarRightOutline'];
$nrmarg	=$row['NavbarRightMargin'];
$nrpad	=$row['NavbarRightPadding'];
$nrh	=$row['NavbarRightHeight'];
$nrmaxh	=$row['NavbarRightMaxHeight'];
$nrmaxw	=$row['NavbarRightMaxWidth'];
$nrminh	=$row['NavbarRightMinHeight'];
$nrminw	=$row['NavbarRightMinWidth'];
$nrw	=$row['NavbarRightWidth'];
$nrvis	=$row['NavbarRightVisibility'];
$nrdisp	=$row['NavbarRightDisplay'];
$nrpos	=$row['NavbarRightPosition'];
$nrleft	=$row['NavbarRightLeft'];
$nrtop	=$row['NavbarRightTop'];
$nrright	=$row['NavbarRightRight'];
$nrbot	=$row['NavbarRightBottom'];
$nrzind	=$row['NavbarRightZIndex'];
$nrfloat	=$row['NavbarRightFloat'];
$nrclr	=$row['NavbarRightClear'];

/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/nrbgimage.".$filename_extension;

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
  if(file_exists('images/nrbgimage.jpg'))
  {
   unlink('images/nrbgimage.jpg');
  }
  if(file_exists('images/nrbgimage.png'))
  {
   unlink('images/nrbgimage.png');
  }
  if(file_exists('images/nrbgimage.gif'))
  {
   unlink('images/nrbgimage.gif');
  }
  if(file_exists('images/nrbgimage.bmp'))
  {
   unlink('images/nrbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }

?>


<form enctype="multipart/form-data" action="?page=layout_navbar_right" method="post" name="layout_navbar_right">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>RIGHT NAVBAR LAYOUT</H3>
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
						<input maxlength="10" name="nrbgc" size="10" type="text" value="<?=$nrbgc;?>" /></td>
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
  if ($nrbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="nrbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

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
  if ($nrbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="nrbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
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
  if ($nrbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="nrbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($nrbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="nrbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
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
						<input maxlength="20" name="nrc" type="text" value="<?=$nrc;?>" /></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						letter-spacing:</td>
					<td>
						<input maxlength="20" name="nrls" type="text" value="<?=$nrls;?>"/></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						line-height:</td>
					<td>
						<input maxlength="20" name="nrlh" type="text" value="<?=$nrlh;?>" /></td>
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
  if ($nrta == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="nrta" size="1"><option value="left" <?=$select_selected[0];?> >left</option><option value="right" <?=$select_selected[1];?> >right</option><option value="center" <?=$select_selected[2];?> >center</option><option value="justify" <?=$select_selected[3];?> >justify</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
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
  if ($nrtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-indent:</td>
					<td>
						<input maxlength="20" name="nrti" type="text" value="<?=$nrti;?>" /></td>
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
  if ($nrtt == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrtt" size="1"><option value="" <?=$select_selected[0];?> >none</option><option value="capitalize" <?=$select_selected[1];?> >capitalize</option><option value="uppercase" <?=$select_selected[2];?> >uppercase</option><option value="lowecase" <?=$select_selected[3];?> >lowercase</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						vertical-align:</td>
					<td>
						<input maxlength="20" name="nrva" type="text" value="<?=$nrva;?>" /></td>
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
  if ($nrwhs == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrwhs" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="nowrap" <?=$select_selected[1];?> >nowrap</option><option value="pre" <?=$select_selected[2];?> >pre</option><option value="pre-line" <?=$select_selected[3];?> >pre-line</option><option value="pre-wrap" <?=$select_selected[4];?> >pre-wrap</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						word-spacing:</td>
					<td>
						<input maxlength="20" name="nrwos" type="text" value="<?=$nrwos;?>" /></td>
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
						<input maxlength="100" name="nrff" size="50" type="text" value="<?=$nrff;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-size:</td>
					<td>
						<input maxlength="30" name="nrfsize" size="20" type="text" value="<?=$nrfsize;?>" /></td>
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
  if ($nrfstyle == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrfstyle" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="italic" <?=$select_selected[1];?> >italic</option><option value="oblique" <?=$select_selected[2];?> >oblique</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($nrfv == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrfv" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="small-caps" <?=$select_selected[1];?> >small-caps</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($nrfw == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrfw" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="bold" <?=$select_selected[1];?> >bold</option><option value="bolder" <?=$select_selected[2];?> >bolder</option><option value="lighter" <?=$select_selected[3];?> >lighter</option></select></td>
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
						<input maxlength="50" name="nrlsi" size="20" type="text" value="<?=$nrlsi;?>" /></td>
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
  if ($nrlsp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrlsp" size="1"><option value="inside" <?=$select_selected[0];?> >inside</option><option value="outside" <?=$select_selected[1];?> >outside (default)</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($nrlst == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrlst" size="1"><option value="decimal" <?=$select_selected[0];?> >decimal</option><option value="lower-alpha" <?=$select_selected[1];?> >lower-alpha</option><option value="lower-roman" <?=$select_selected[2];?> >lower-roman</option><option <?=$select_selected[3];?> value="none">none</option><option value="upper-alpha" <?=$select_selected[4];?> >upper-alpha</option><option value="upper-latin" <?=$select_selected[5];?> >upper-latin</option><option value="upper-roman" <?=$nrlst_selected[6];?> >upper-roman</option></select></td>
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
						<input maxlength="30" name="nrbt" size="20" type="text" value="<?=$nrbtt;?> <?=$nrbts;?> <?=$nrbtc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-right:</td>
					<td>
						<input maxlength="30" name="nrbr" size="20" type="text" value="<?=$nrbrt;?> <?=$nrbrs;?> <?=$nrbrc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-bottom:</td>
					<td>
						<input maxlength="30" name="nrbb" size="20" type="text" value="<?=$nrbbt;?> <?=$nrbbs;?> <?=$nrbbc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-left:</td>
					<td>
						<input maxlength="30" name="nrbl" size="20" type="text" value="<?=$nrblt;?> <?=$nrbls;?> <?=$nrblc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						outline:</td>
					<td>
						<input maxlength="30" name="nrout" size="20" type="text" value="<?=$nrout;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						margin:</td>
					<td>
						<input maxlength="30" name="nrmarg" size="20" type="text" value="<?=$nrmarg;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						padding:</td>
					<td>
						<input maxlength="30" name="nrpad" size="20" type="text" value="<?=$nrpad;?>" /></td>
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
						<input maxlength="20" name="nrh" size="20" type="text" value="<?=$nrh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-height:</td>
					<td>
						<input maxlength="20" name="nrmaxh" size="20" type="text" value="<?=$nrmaxh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-width:</td>
					<td>
						<input maxlength="20" name="nrmaxw" size="20" type="text" value="<?=$nrmaxw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-height:</td>
					<td>
						<input maxlength="20" name="nrminh" size="20" type="text" value="<?=$nrminh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-width:</td>
					<td>
						<input maxlength="20" name="nrminw" size="20" type="text" value="<?=$nrminw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						width:</td>
					<td>
						<input maxlength="20" name="nrw" size="20" type="text" value="<?=$nrw;?>" /></td>
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
  if ($nrvis == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrvis" size="1"><option value="visible" <?=$select_selected[0];?> >visible</option><option value="hidden" <?=$select_selected[1];?> >hidden</option><option value="collapse" <?=$select_selected[2];?> >collapse</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($nrdisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrdisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
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
  if ($nrpos == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrpos" size="1"><option value="static" <?=$select_selected[0];?> >static</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="relative" <?=$select_selected[2];?> >relative</option><option value="absolute" <?=$select_selected[3];?> >absolute</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						left:</td>
					<td>
						<input maxlength="20" name="nrleft" size="20" type="text" value="<?=$nrleft;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						top:</td>
					<td>
						<input maxlength="20" name="nrtop" size="20" type="text" value="<?=$nrtop;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						right:</td>
					<td>
						<input maxlength="20" name="nrright" size="20" type="text" value="<?=$nrright;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						bottom:</td>
					<td>
						<input maxlength="20" name="nrbot" size="20" type="text" value="<?=$nrbot;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						z-index:</td>
					<td>
						<input maxlength="20" name="nrzind" size="20" type="text" value="<?=$nrzind;?>" /></td>
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
  if ($nrfloat == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrfloat" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option></select></td>
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
  if ($nrclr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrclr" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option><option value="both" <?=$select_selected[3];?> >both</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Links</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link color:</td>
					<td>
						<input maxlength="20" name="nralc" size="20" type="text" value="<?=$nralc;?>" /></td>
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
  if ($nraltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nraltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited color:</td>
					<td>
						<input maxlength="20" name="nravc" size="20" type="text" value="<?=$nravc;?>" /></td>
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
  if ($nravtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nravtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover color:</td>
					<td>
						<input maxlength="20" name="nrahc" size="20" type="text" value="<?=$nrahc;?>" /></td>
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
  if ($nrahtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nrahtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active color:</td>
					<td>
						<input maxlength="20" name="nraac" size="20" type="text" value="<?=$nraac;?>" /></td>
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
  if ($nraatd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nraatd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
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