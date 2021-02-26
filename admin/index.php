<?php
ob_start();
session_start();
?>

<?php
 //create database login info
 include_once("../functions.php");
 include("../config.php");
 $home_url = get_home_url_PCE();
?>


<?php

/*$_SESSION["test"] = "Hello";*/
//echo "Session Username: ".$_SESSION['myusername'];
if(!isset( $_SESSION["myusername"] ))  
{
    header("location: ../password_protect/main_login.php?redirect=".urlencode(curPageURL()));
}
?>

<?php
 //create short variable names
 $page=$_GET['page'];
 $pagelink=$_GET['pagelink'];
 $editor1=$_POST['editor1'];
?>

<?php ob_flush();?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Admin Panel</title>
<META NAME="Description" CONTENT="<?=$metadesc;?>" />
<META NAME="Keywords" CONTENT="<?=$metakey;?>" />
<LINK REL="StyleSheet" HREF="style.admin.php" TYPE="text/css" MEDIA="screen,print">
<LINK REL="StyleSheet" HREF="style.admindynmenu.php" TYPE="text/css" MEDIA="screen,print">
<LINK REL="StyleSheet" HREF="style.admincustom.php" TYPE="text/css" MEDIA="screen,print">
<SCRIPT TYPE="text/javascript" SRC="script.jquery.js"></SCRIPT>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>

<!-- jQuery File Upload Plugin -->

<!-- Bootstrap CSS Toolkit styles -->
<!--
<link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap.min.css">
-->
<!-- Generic page styles -->
<!--
<link rel="stylesheet" href="../jquery_file_upload/jQuery-File-Upload-master/css/style.css">
-->
<!-- Bootstrap styles for responsive website layout, supporting different screen sizes -->
<!--
<link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-responsive.min.css">
-->
<!-- Bootstrap CSS fixes for IE6 -->
<!--[if lt IE 7]><link rel="stylesheet" href="http://blueimp.github.com/cdn/css/bootstrap-ie6.min.css"><![endif]-->
<!-- Bootstrap Image Gallery styles -->
<!--
<link rel="stylesheet" href="http://blueimp.github.com/Bootstrap-Image-Gallery/css/bootstrap-image-gallery.min.css">
-->
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<!--
<link rel="stylesheet" href="../jquery_file_upload/jQuery-File-Upload-master/css/jquery.fileupload-ui.css">
-->
<!-- CSS adjustments for browsers with JavaScript disabled -->
<!--
<noscript><link rel="stylesheet" href="../jquery_file_upload/jQuery-File-Upload-master/css/jquery.fileupload-ui-noscript.css"></noscript>
-->
<!-- Shim to make HTML5 elements usable in older Internet Explorer versions -->
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

<!-- End jQuery File Upload Plugin -->


</head>
<body>
<!-- body -->

<!-- Full Page Start -->
 <div id="full">
  <!-- full page -->
  <!-- Header Start -->
  <div id="header_full">
   <!-- full header -->
    <!-- Floating Header Start -->
    <div id="header_float">
     <?php include("hfloat.php"); ?>
    </div>
    <div class="spacer">
    </div>
    <!-- Floating Header end -->
  </div>
  <div class="spacer">
  </div>
  <!-- Header End -->

  <!-- Body Start -->
  <div id="body_full">
   <!-- full body -->
   <!-- Floating Body Start -->
   <div id="body_float">
    <div id="navbar">
     <?php include("navbar.php"); ?>
    </div>
    <div id="page">
     <?php
      if(file_exists($page.".php"))
      {
       include($page.".php");
      }
      else
      {
       include("main.php");
      }
     ?>
    </div>
    <div id="navbar_right">
     <?php include("navbar_right.php"); ?>
    </div>
    <div class="spacer">
    </div>
   </div>
   <!-- Floating Body End -->
   <div class="spacer">
   </div>
  </div> 
  <!-- Body End -->

  <!-- Footer Start -->
  <div id="footer_full">
   <!-- full footer -->
    <!-- Floating Footer Start -->
    <div id="footer_float">
     <?php include("ffloat.php"); ?>
    </div>
    <div id="linksmenu">
     <?php
      
      include("links.php");
      
     ?>
    </div>
    <div class="spacer">
    </div>
    <!-- Floating Footer end -->
   <div class="spacer">
   </div>
  </div>
  <!-- Footer End -->

 </div>
<!-- Full Page End -->
</body>
</html>

