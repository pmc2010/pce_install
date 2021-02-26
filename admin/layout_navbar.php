<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_nbgc=$_POST['nbgc'];
 $filename=$_FILES['uploadedfile']['name'];
$up_nbgimage=$_POST['nbgimage'];
 $delete_image=$_POST['delete_image'];
$up_nbgr=$_POST['nbgr'];
$up_nbga=$_POST['nbga'];
$up_nbgp=$_POST['nbgp'];
$up_nc=$_POST['nc'];
$up_nls=$_POST['nls'];
$up_nlh=$_POST['nlh'];
$up_nta=$_POST['nta'];
$up_ntd=$_POST['ntd'];
$up_nti=$_POST['nti'];
$up_ntt=$_POST['ntt'];
$up_nva=$_POST['nva'];
$up_nwhs=$_POST['nwhs'];
$up_nwos=$_POST['nwos'];
$up_nff=$_POST['nff'];
$up_nfsize=$_POST['nfsize'];
$up_nfstyle=$_POST['nfstyle'];
$up_nfv=$_POST['nfv'];
$up_nfw=$_POST['nfw'];
$up_nalc=$_POST['nalc'];
$up_naltd=$_POST['naltd'];
$up_navc=$_POST['navc'];
$up_navtd=$_POST['navtd'];
$up_nahc=$_POST['nahc'];
$up_nahtd=$_POST['nahtd'];
$up_naac=$_POST['naac'];
$up_naatd=$_POST['naatd'];
$up_nlsi=$_POST['nlsi'];
$up_nlsp=$_POST['nlsp'];
$up_nlst=$_POST['nlst'];
//parse border input into 3 variables
$up_nbordertop=preg_split('/[,? ]+/',$_POST['nbt']);
$up_nbtt=$up_nbordertop[0];
$up_nbts=$up_nbordertop[1];
$up_nbtc=$up_nbordertop[2];
//parse border input into 3 variables
$up_nborderright=preg_split('/[,? ]+/',$_POST['nbr']);
$up_nbrt=$up_nborderright[0];
$up_nbrs=$up_nborderright[1];
$up_nbrc=$up_nborderright[2];
//parse border input into 3 variables
$up_nborderbot=preg_split('/[,? ]+/',$_POST['nbb']);
$up_nbbt=$up_nborderbot[0];
$up_nbbs=$up_nborderbot[1];
$up_nbbc=$up_nborderbot[2];
//parse border input into 3 variables
$up_nborderleft=preg_split('/[,? ]+/',$_POST['nbl']);
$up_nblt=$up_nborderleft[0];
$up_nbls=$up_nborderleft[1];
$up_nblc=$up_nborderleft[2];
$up_nout=$_POST['nout'];
$up_nmarg=$_POST['nmarg'];
$up_npad=$_POST['npad'];
$up_nh=$_POST['nh'];
$up_nmaxh=$_POST['nmaxh'];
$up_nmaxw=$_POST['nmaxw'];
$up_nminh=$_POST['nminh'];
$up_nminw=$_POST['nminw'];
$up_nw=$_POST['nw'];
$up_nvis=$_POST['nvis'];
$up_ndisp=$_POST['ndisp'];
$up_npos=$_POST['npos'];
$up_nleft=$_POST['nleft'];
$up_ntop=$_POST['ntop'];
$up_nright=$_POST['nright'];
$up_nbot=$_POST['nbot'];
$up_nzind=$_POST['nzind'];
$up_nfloat=$_POST['nfloat'];
$up_nclr=$_POST['nclr'];

?>

<?php
//update style_master database
 if(isset($submitted))
 {
 db_connect();

  mysql_query("UPDATE style_master SET NavbarBackgroundColor = '$up_nbgc' ");
  mysql_query("UPDATE style_master SET NavbarBackgroundImage = '$up_nbgimage' ");
  mysql_query("UPDATE style_master SET NavbarBackgroundRepeat = '$up_nbgr' ");
  mysql_query("UPDATE style_master SET NavbarBackgroundAttachment = '$up_nbga' ");
  mysql_query("UPDATE style_master SET NavbarBackgroundPosition = '$up_nbgp' ");
  mysql_query("UPDATE style_master SET NavbarColor = '$up_nc' ");
  mysql_query("UPDATE style_master SET NavbarLetterSpacing = '$up_nls' ");
  mysql_query("UPDATE style_master SET NavbarLineHeight = '$up_nlh' ");
  mysql_query("UPDATE style_master SET NavbarTextAlign = '$up_nta' ");
  mysql_query("UPDATE style_master SET NavbarTextDecoration = '$up_ntd' ");
  mysql_query("UPDATE style_master SET NavbarTextIndent = '$up_nti' ");
  mysql_query("UPDATE style_master SET NavbarTextTransform = '$up_ntt' ");
  mysql_query("UPDATE style_master SET NavbarVerticalAlign = '$up_nva' ");
  mysql_query("UPDATE style_master SET NavbarWhiteSpace = '$up_nwhs' ");
  mysql_query("UPDATE style_master SET NavbarWordSpacing = '$up_nwos' ");
  mysql_query("UPDATE style_master SET NavbarFontFamily = '$up_nff' ");
  mysql_query("UPDATE style_master SET NavbarFontSize = '$up_nfsize' ");
  mysql_query("UPDATE style_master SET NavbarFontStyle = '$up_nfstyle' ");
  mysql_query("UPDATE style_master SET NavbarFontVariant = '$up_nfv' ");
  mysql_query("UPDATE style_master SET NavbarFontWeight = '$up_nfw' ");
  mysql_query("UPDATE style_master SET NavbaraLinkColor = '$up_nalc' ");
  mysql_query("UPDATE style_master SET NavbaraLinkTextDecoration = '$up_naltd' ");
  mysql_query("UPDATE style_master SET NavbaraVisitedColor = '$up_navc' ");
  mysql_query("UPDATE style_master SET NavbaraVisitedDecoration = '$up_navtd' ");
  mysql_query("UPDATE style_master SET NavbaraHoverColor = '$up_nahc' ");
  mysql_query("UPDATE style_master SET NavbaraHoverTextDecoration = '$up_nahtd' ");
  mysql_query("UPDATE style_master SET NavbaraActiveColor = '$up_naac' ");
  mysql_query("UPDATE style_master SET NavbaraActiveTextDecoration = '$up_naatd' ");
  mysql_query("UPDATE style_master SET NavbarListStyleImage = '$up_nlsi' ");
  mysql_query("UPDATE style_master SET NavbarListStylePosition = '$up_nlsp' ");
  mysql_query("UPDATE style_master SET NavbarListStyleType = '$up_nlst' ");
  mysql_query("UPDATE style_master SET NavbarBorderTopThickness = '$up_nbtt' ");
  mysql_query("UPDATE style_master SET NavbarBorderTopStyle = '$up_nbts' ");
  mysql_query("UPDATE style_master SET NavbarBorderTopColor = '$up_nbtc' ");
  mysql_query("UPDATE style_master SET NavbarBorderRightThickness = '$up_nbrt' ");
  mysql_query("UPDATE style_master SET NavbarBorderRightStyle = '$up_nbrs' ");
  mysql_query("UPDATE style_master SET NavbarBorderRightColor = '$up_nbrc' ");
  mysql_query("UPDATE style_master SET NavbarBorderBottomThickness = '$up_nbbt' ");
  mysql_query("UPDATE style_master SET NavbarBorderBottomStyle = '$up_nbbs' ");
  mysql_query("UPDATE style_master SET NavbarBorderBottomColor = '$up_nbbc' ");
  mysql_query("UPDATE style_master SET NavbarBorderLeftThickness = '$up_nblt' ");
  mysql_query("UPDATE style_master SET NavbarBorderLeftStyle = '$up_nbls' ");
  mysql_query("UPDATE style_master SET NavbarBorderLeftColor = '$up_nblc' ");
  mysql_query("UPDATE style_master SET NavbarOutline = '$up_nout' ");
  mysql_query("UPDATE style_master SET NavbarMargin = '$up_nmarg' ");
  mysql_query("UPDATE style_master SET NavbarPadding = '$up_npad' ");
  mysql_query("UPDATE style_master SET NavbarHeight = '$up_nh' ");
  mysql_query("UPDATE style_master SET NavbarMaxHeight = '$up_nmaxh' ");
  mysql_query("UPDATE style_master SET NavbarMaxWidth = '$up_nmaxw' ");
  mysql_query("UPDATE style_master SET NavbarMinHeight = '$up_nminh' ");
  mysql_query("UPDATE style_master SET NavbarMinWidth = '$up_nminw' ");
  mysql_query("UPDATE style_master SET NavbarWidth = '$up_nw' ");
  mysql_query("UPDATE style_master SET NavbarVisibility = '$up_nvis' ");
  mysql_query("UPDATE style_master SET NavbarDisplay = '$up_ndisp' ");
  mysql_query("UPDATE style_master SET NavbarPosition = '$up_npos' ");
  mysql_query("UPDATE style_master SET NavbarLeft = '$up_nleft' ");
  mysql_query("UPDATE style_master SET NavbarTop = '$up_ntop' ");
  mysql_query("UPDATE style_master SET NavbarRight = '$up_nright' ");
  mysql_query("UPDATE style_master SET NavbarBottom = '$up_nbot' ");
  mysql_query("UPDATE style_master SET NavbarZIndex = '$up_nzind' ");
  mysql_query("UPDATE style_master SET NavbarFloat = '$up_nfloat' ");
  mysql_query("UPDATE style_master SET NavbarClear = '$up_nclr' ");

  }

?>


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_master");
  
 $row = mysql_fetch_array($data);

$nbgc	=$row['NavbarBackgroundColor'];
$nbgimage	=$row['NavbarBackgroundImage'];
$nbgr	=$row['NavbarBackgroundRepeat'];
$nbga	=$row['NavbarBackgroundAttachment'];
$nbgp	=$row['NavbarBackgroundPosition'];
$nc	=$row['NavbarColor'];
$nls	=$row['NavbarLetterSpacing'];
$nlh	=$row['NavbarLineHeight'];
$nta	=$row['NavbarTextAlign'];
$ntd	=$row['NavbarTextDecoration'];
$nti	=$row['NavbarTextIndent'];
$ntt	=$row['NavbarTextTransform'];
$nva	=$row['NavbarVerticalAlign'];
$nwhs	=$row['NavbarWhiteSpace'];
$nwos	=$row['NavbarWordSpacing'];
$nff	=$row['NavbarFontFamily'];
$nfsize	=$row['NavbarFontSize'];
$nfstyle	=$row['NavbarFontStyle'];
$nfv	=$row['NavbarFontVariant'];
$nfw	=$row['NavbarFontWeight'];
$nalc	=$row['NavbaraLinkColor'];
$naltd	=$row['NavbaraLinkTextDecoration'];
$navc	=$row['NavbaraVisitedColor'];
$navtd	=$row['NavbaraVisitedDecoration'];
$nahc	=$row['NavbaraHoverColor'];
$nahtd	=$row['NavbaraHoverTextDecoration'];
$naac	=$row['NavbaraActiveColor'];
$naatd	=$row['NavbaraActiveTextDecoration'];
$nlsi	=$row['NavbarListStyleImage'];
$nlsp	=$row['NavbarListStylePosition'];
$nlst	=$row['NavbarListStyleType'];
$nbtt	=$row['NavbarBorderTopThickness'];
$nbts	=$row['NavbarBorderTopStyle'];
$nbtc	=$row['NavbarBorderTopColor'];
$nbrt	=$row['NavbarBorderRightThickness'];
$nbrs	=$row['NavbarBorderRightStyle'];
$nbrc	=$row['NavbarBorderRightColor'];
$nbbt	=$row['NavbarBorderBottomThickness'];
$nbbs	=$row['NavbarBorderBottomStyle'];
$nbbc	=$row['NavbarBorderBottomColor'];
$nblt	=$row['NavbarBorderLeftThickness'];
$nbls	=$row['NavbarBorderLeftStyle'];
$nblc	=$row['NavbarBorderLeftColor'];
$nout	=$row['NavbarOutline'];
$nmarg	=$row['NavbarMargin'];
$npad	=$row['NavbarPadding'];
$nh	=$row['NavbarHeight'];
$nmaxh	=$row['NavbarMaxHeight'];
$nmaxw	=$row['NavbarMaxWidth'];
$nminh	=$row['NavbarMinHeight'];
$nminw	=$row['NavbarMinWidth'];
$nw	=$row['NavbarWidth'];
$nvis	=$row['NavbarVisibility'];
$ndisp	=$row['NavbarDisplay'];
$npos	=$row['NavbarPosition'];
$nleft	=$row['NavbarLeft'];
$ntop	=$row['NavbarTop'];
$nright	=$row['NavbarRight'];
$nbot	=$row['NavbarBottom'];
$nzind	=$row['NavbarZIndex'];
$nfloat	=$row['NavbarFloat'];
$nclr	=$row['NavbarClear'];

/***********Upload file if applicable***********/

if(basename($filename) != "")
{
 //Extract extension from file name
 $parse_filename = preg_split('/\./',basename($filename));

 $filename_extension = $parse_filename[1];

 // Where the file is going to be placed 
 $target_path = "images/nbgimage.".$filename_extension;

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
  if(file_exists('images/nbgimage.jpg'))
  {
   unlink('images/nbgimage.jpg');
  }
  if(file_exists('images/nbgimage.png'))
  {
   unlink('images/nbgimage.png');
  }
  if(file_exists('images/nbgimage.gif'))
  {
   unlink('images/nbgimage.gif');
  }
  if(file_exists('images/nbgimage.bmp'))
  {
   unlink('images/nbgimage.bmp');
  }
  echo "Your background image has been deleted.";
 }

?>


<form enctype="multipart/form-data" action="?page=layout_navbar" method="post" name="layout_navbar">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
<tr>
 <th colspan="2"> <H3>NAVBAR LAYOUT</H3>
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
						<input maxlength="10" name="nbgc" size="10" type="text" value="<?=$nbgc;?>" /></td>
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
  if ($nbgimage == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="nbgimage" size="1"><option value="jpg" <?=$select_selected[0];?> >jpg</option><option value="png" <?=$select_selected[1];?> >png</option><option value="gif" <?=$select_selected[2];?> >gif</option><option value="bmp" <?=$select_selected[3];?> >bmp</option></select>

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
  if ($nbgr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="nbgr" size="1"><option value="no-repeat" <?=$select_selected[0];?> >no-repeat</option><option value="repeat" <?=$select_selected[1];?> >repeat</option><option value="repeat-x" <?=$select_selected[2];?> >repeat-x</option><option value="repeat-y" <?=$select_selected[3];?> >repeat-y</option></select></td>
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
  if ($nbga == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="nbga" size="1"><option value="scroll" <?=$select_selected[0];?> >scroll (default)</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($nbgp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="nbgp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="top left" <?=$select_selected[1];?> >top left</option><option value="top right" <?=$select_selected[2];?> >top right</option><option value="bottom left" <?=$select_selected[3];?> >bottom left</option><option value="bottom right" <?=$select_selected[4];?> >bottom right</option></select></td>
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
						<input maxlength="20" name="nc" type="text" value="<?=$nc;?>" /></td>
				</tr>

				<tr>
					<td style="text-align: right;">
						letter-spacing:</td>
					<td>
						<input maxlength="20" name="nls" type="text" value="<?=$nls;?>"/></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						line-height:</td>
					<td>
						<input maxlength="20" name="nlh" type="text" value="<?=$nlh;?>" /></td>
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
  if ($nta == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>

						<select name="nta" size="1"><option value="left" <?=$select_selected[0];?> >left</option><option value="right" <?=$select_selected[1];?> >right</option><option value="center" <?=$select_selected[2];?> >center</option><option value="justify" <?=$select_selected[3];?> >justify</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
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
  if ($ntd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ntd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						text-indent:</td>
					<td>
						<input maxlength="20" name="nti" type="text" value="<?=$nti;?>" /></td>
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
  if ($ntt == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ntt" size="1"><option value="" <?=$select_selected[0];?> >none</option><option value="capitalize" <?=$select_selected[1];?> >capitalize</option><option value="uppercase" <?=$select_selected[2];?> >uppercase</option><option value="lowecase" <?=$select_selected[3];?> >lowercase</option><option value="inherit" <?=$select_selected[4];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						vertical-align:</td>
					<td>
						<input maxlength="20" name="nva" type="text" value="<?=$nva;?>" /></td>
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
  if ($nwhs == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nwhs" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="nowrap" <?=$select_selected[1];?> >nowrap</option><option value="pre" <?=$select_selected[2];?> >pre</option><option value="pre-line" <?=$select_selected[3];?> >pre-line</option><option value="pre-wrap" <?=$select_selected[4];?> >pre-wrap</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						word-spacing:</td>
					<td>
						<input maxlength="20" name="nwos" type="text" value="<?=$nwos;?>" /></td>
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
						<input maxlength="100" name="nff" size="50" type="text" value="<?=$nff;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						font-size:</td>
					<td>
						<input maxlength="30" name="nfsize" size="20" type="text" value="<?=$nfsize;?>" /></td>
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
  if ($nfstyle == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nfstyle" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="italic" <?=$select_selected[1];?> >italic</option><option value="oblique" <?=$select_selected[2];?> >oblique</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($nfv == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nfv" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="small-caps" <?=$select_selected[1];?> >small-caps</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($nfw == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nfw" size="1"><option value="normal" <?=$select_selected[0];?> >normal</option><option value="bold" <?=$select_selected[1];?> >bold</option><option value="bolder" <?=$select_selected[2];?> >bolder</option><option value="lighter" <?=$select_selected[3];?> >lighter</option></select></td>
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
						<input maxlength="50" name="nlsi" size="20" type="text" value="<?=$nlsi;?>" /></td>
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
  if ($nlsp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nlsp" size="1"><option value="inside" <?=$select_selected[0];?> >inside</option><option value="outside" <?=$select_selected[1];?> >outside (default)</option><option value="inherit" <?=$select_selected[2];?> >inherit</option></select></td>
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
  if ($nlst == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nlst" size="1"><option value="decimal" <?=$select_selected[0];?> >decimal</option><option value="lower-alpha" <?=$select_selected[1];?> >lower-alpha</option><option value="lower-roman" <?=$select_selected[2];?> >lower-roman</option><option <?=$select_selected[3];?> value="none">none</option><option value="upper-alpha" <?=$select_selected[4];?> >upper-alpha</option><option value="upper-latin" <?=$select_selected[5];?> >upper-latin</option><option value="upper-roman" <?=$nlst_selected[6];?> >upper-roman</option></select></td>
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
						<input maxlength="30" name="nbt" size="20" type="text" value="<?=$nbtt;?> <?=$nbts;?> <?=$nbtc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-right:</td>
					<td>
						<input maxlength="30" name="nbr" size="20" type="text" value="<?=$nbrt;?> <?=$nbrs;?> <?=$nbrc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-bottom:</td>
					<td>
						<input maxlength="30" name="nbb" size="20" type="text" value="<?=$nbbt;?> <?=$nbbs;?> <?=$nbbc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						border-left:</td>
					<td>
						<input maxlength="30" name="nbl" size="20" type="text" value="<?=$nblt;?> <?=$nbls;?> <?=$nblc;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						outline:</td>
					<td>
						<input maxlength="30" name="nout" size="20" type="text" value="<?=$nout;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						margin:</td>
					<td>
						<input maxlength="30" name="nmarg" size="20" type="text" value="<?=$nmarg;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						padding:</td>
					<td>
						<input maxlength="30" name="npad" size="20" type="text" value="<?=$npad;?>" /></td>
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
						<input maxlength="20" name="nh" size="20" type="text" value="<?=$nh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-height:</td>
					<td>
						<input maxlength="20" name="nmaxh" size="20" type="text" value="<?=$nmaxh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						max-width:</td>
					<td>
						<input maxlength="20" name="nmaxw" size="20" type="text" value="<?=$nmaxw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-height:</td>
					<td>
						<input maxlength="20" name="nminh" size="20" type="text" value="<?=$nminh;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						min-width:</td>
					<td>
						<input maxlength="20" name="nminw" size="20" type="text" value="<?=$nminw;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						width:</td>
					<td>
						<input maxlength="20" name="nw" size="20" type="text" value="<?=$nw;?>" /></td>
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
  if ($nvis == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nvis" size="1"><option value="visible" <?=$select_selected[0];?> >visible</option><option value="hidden" <?=$select_selected[1];?> >hidden</option><option value="collapse" <?=$select_selected[2];?> >collapse</option><option value="inherit" <?=$select_selected[3];?> >inherit</option></select></td>
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
  if ($ndisp == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="ndisp" size="1"><option value="" <?=$select_selected[0];?> ></option><option value="none" <?=$select_selected[1];?> >none</option><option value="block" <?=$select_selected[2];?> >block</option><option value="inline" <?=$select_selected[3];?> >inline</option><option value="inline-block" <?=$select_selected[4];?> >inline-block</option><option value="inline-table" <?=$select_selected[5];?> >inline-table</option><option value="list-item" <?=$select_selected[6];?> >list-item</option><option value="table" <?=$select_selected[7];?> >table</option><option value="inherit" <?=$select_selected[8];?> >inherit</option></select></td>
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
  if ($npos == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="npos" size="1"><option value="static" <?=$select_selected[0];?> >static</option><option value="fixed" <?=$select_selected[1];?> >fixed</option><option value="relative" <?=$select_selected[2];?> >relative</option><option value="absolute" <?=$select_selected[3];?> >absolute</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						left:</td>
					<td>
						<input maxlength="20" name="nleft" size="20" type="text" value="<?=$nleft;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						top:</td>
					<td>
						<input maxlength="20" name="ntop" size="20" type="text" value="<?=$ntop;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						right:</td>
					<td>
						<input maxlength="20" name="nright" size="20" type="text" value="<?=$nright;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						bottom:</td>
					<td>
						<input maxlength="20" name="nbot" size="20" type="text" value="<?=$nbot;?>" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						z-index:</td>
					<td>
						<input maxlength="20" name="nzind" size="20" type="text" value="<?=$nzind;?>" /></td>
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
  if ($nfloat == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nfloat" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option></select></td>
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
  if ($nclr == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nclr" size="1"><option selected="selected" value="" <?=$select_selected[0];?> ></option><option value="left" <?=$select_selected[1];?> >left</option><option value="right" <?=$select_selected[2];?> >right</option><option value="both" <?=$select_selected[3];?> >both</option></select></td>
				</tr>
				<tr>
					<td colspan="2" style="text-align: center;">
						<span style="font-size: 16px;"><strong>Links</strong></span></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						link color:</td>
					<td>
						<input maxlength="20" name="nalc" size="20" type="text" value="<?=$nalc;?>" /></td>
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
  if ($naltd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="naltd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						visited color:</td>
					<td>
						<input maxlength="20" name="navc" size="20" type="text" value="<?=$navc;?>" /></td>
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
  if ($navtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="navtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						hover color:</td>
					<td>
						<input maxlength="20" name="nahc" size="20" type="text" value="<?=$nahc;?>" /></td>
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
  if ($nahtd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="nahtd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						active color:</td>
					<td>
						<input maxlength="20" name="naac" size="20" type="text" value="<?=$naac;?>" /></td>
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
  if ($naatd == $select_options[$i])
  {
   $select_selected[$i] = "selected";
  }
  else
  {
   $select_selected[$i] = "";
  }
 }
?>
						<select name="naatd" size="1"><option value="none" <?=$select_selected[0];?> >none</option><option value="underline" <?=$select_selected[1];?> >underline</option><option value="overline" <?=$select_selected[2];?> >overline</option><option value="line-through" <?=$select_selected[3];?> >line-through</option><option value="blink" <?=$select_selected[4];?> >blink</option><option value="inherit" <?=$select_selected[5];?> >inherit</option></select></td>
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