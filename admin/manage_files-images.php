
<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $filename=$_FILES['uploadedfile']['name'];
 $imagename=$_FILES['uploadedimage']['name'];

?>

<?php
 if(isset($submitted))
 {
  /***********Upload file if applicable***********/
  if(basename($filename) != "")
  {
   // Where the file is going to be placed 
   $target_path = "../files/".$filename;

   if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path))
   {
   }
   else
   {
      echo "There was an error uploading the file, please try again!";
   }
  }

  /***********Delete files if applicable***********/

$dir = "../files/";
$file_array = array();

// Open a known directory, and proceed to read its contents
if (is_dir($dir))
{
 $file_counter = 0;
 if ($dh = opendir($dir))
 {
  while (($file = readdir($dh)) !== false)
  {
   if ($file==".." || $file==".")
   {
   }
   else
   {
    $file_array[$file_counter] = $file;
   }
   $file_counter++;     
  }
  closedir($dh);
 }
}
else
{
 echo "Directory not found...";
}

sort($file_array);
foreach ($file_array as $index => $value)
{

 $temp_data = "delete_file_".$index;
 if ($_POST[$temp_data] == "checked")
 {
  if(file_exists($dir.$value))
  {
   echo "deleted file ".$value;
   echo "<br \/>";
   unlink($dir.$value);
  }
 }
}

  /***********Upload image if applicable***********/
  if(basename($imagename) != "")
  {
   // Where the file is going to be placed 
   $target_path = "../images/".$imagename;

   if(move_uploaded_file($_FILES['uploadedimage']['tmp_name'], $target_path))
   {
   }
   else
   {
      echo "There was an error uploading the image, please try again!";
   }
  }

  /***********Delete images if applicable***********/

$dir = "../images/";
$image_array = array();

// Open a known directory, and proceed to read its contents
if (is_dir($dir))
{
 $image_counter = 0;
 if ($dh = opendir($dir))
 {
  while (($file = readdir($dh)) !== false)
  {
   if ($file==".." || $file==".")
   {
   }
   else
   {
    $image_array[$image_counter] = $file;
   }
   $image_counter++;     
  }
  closedir($dh);
 }
}
else
{
 echo "Directory not found...";
}

sort($image_array);
foreach ($image_array as $index => $value)
{

 $temp_data = "delete_image_".$index;
 if ($_POST[$temp_data] == "checked")
 {
  if(file_exists($dir.$value))
  {
   echo "deleted image ".$value;
   echo "<br \/>";
   unlink($dir.$value);
  }
 }
}

}
?>

<form enctype="multipart/form-data" action="?page=manage_files-images" method="post" name="manage_files-images">
	<div style="font-family: arial,sans-serif;">

		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
		 <tbody>
		  <tr>
		 	 <th colspan="2">
				<h3>
				 MANAGE FILES/IMAGES</h3>
			 </th>
			</tr>

			<tr>
       <!-- Column 1 -->
       <td valign="top">
        <table border="0">
         <tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center; color:white;">
             Current Files
            </div>
					</td>
				</tr>
				<tr height="5">
				</tr>
				<tr>
					<td style="width:; text-align: center;">
					 <u>Delete?</u></td>
					<td style="width:; text-align: left; padding-left:35px;">
           <u>File Name</u>
          </td>
				</tr>
<?php
$dir = "../files/";
$file_array = array();

// Open a known directory, and proceed to read its contents
if (is_dir($dir))
{
 $file_counter = 0;
 if ($dh = opendir($dir))
 {
  while (($file = readdir($dh)) !== false)
  {
   if ($file==".." || $file==".")
   {
   }
   else
   {
    $file_array[$file_counter] = $file;
   }
   $file_counter++;     
  }
  closedir($dh);
 }
}
else
{
 echo "Directory not found...";
}

sort($file_array);
foreach ($file_array as $index => $value)
{
?>
		<tr>
		 <td style="width:; text-align: center;">
			<input type="checkbox" name="delete_file_<?=$index;?>" value="checked"></td>
		 <td style="width:; text-align: left; border:0px solid #000000; padding-left:35px;"><a href="../files/<?=$value	;?>"><?=$value;?></a></td>
    </tr>
<?php
}
?>
				<tr height="20">
				</tr>
				<tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center; color:white;">
             Add a File
            </div>
					</td>
				</tr>
				<tr height="5">
				</tr>
        <tr>
         <td style="width: 50%; text-align: center;">
          <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />max size 1Mb
         </td>
         <td>
          <input name="uploadedfile" type="file" />
         </td>
        </tr>
        </table>
       </td>

<!-- Column 2 -->
       <td valign="top">
        <table border="0">
         <tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center; color:white;">
             Current Images
            </div>
					</td>
				 </tr>
				 <tr height="5">
				 </tr>
			 	 <tr>
					<td style="width:; text-align: center;">
					 <u>Delete?</u></td>
					<td style="width:; text-align: left; padding-left:35px;">
           <u>Image Name</u>
          </td>
				</tr>
<?php

$dir = "../images/";
$image_array = array();

// Open a known directory, and proceed to read its contents
if (is_dir($dir))
{
 $image_counter = 0;
 if ($dh = opendir($dir))
 {
  while (($file = readdir($dh)) !== false)
  {
   if ($file==".." || $file==".")
   {
   }
   else
   {
    $image_array[$image_counter] = $file;
   }
   $image_counter++;     
  }
  closedir($dh);
 }
}
else
{
 echo "Directory not found...";
}

sort($image_array);
foreach ($image_array as $index => $value)
{
?>

		<tr>
		 <td style="width:; text-align: center;">
			<input type="checkbox" name="delete_image_<?=$index;?>" value="checked"></td>
		 <td style="width:; text-align: left; border:0px solid #000000; padding-left:35px;"><a href="../images/<?=$value;?>"><?=$value;?></a></td>
    </tr>

<?php
 }
?>

			<tr height="20">
				</tr>
				<tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center; color:white;">
             Add an Image
            </div>
					</td>
				</tr>
				<tr height="5">
				</tr>
        <tr>
         <td style="width: 50%; text-align: center;">
          <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />max size 1Mb
         </td>
         <td>
          <input name="uploadedimage" type="file" />
         </td>
        </tr>
        </table>
       </td>
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