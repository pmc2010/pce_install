<!DOCTYPE html>

<?php

    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(E_ALL);
    include_once("functions.php");
    $home_url = get_home_url_PCE();
    print($home_url);

?>
<?php
	//Recommended security patch by 6Scan
	if ( isset( $_GET['pagename']) ){ $filtered_var = htmlspecialchars( $_GET['pagename'] , ENT_QUOTES); $_GET['pagename'] = $filtered_var;}
	if ( isset( $_POST['pagename']) ){ $filtered_var = htmlspecialchars( $_POST['pagename'] , ENT_QUOTES); $_POST['pagename'] = $filtered_var;}
	if ( isset( $_REQUEST['pagename']) ){ $filtered_var = htmlspecialchars( $_REQUEST['pagename'] , ENT_QUOTES); $_REQUEST['pagename'] = $filtered_var;}	
?>
<?php
 //This checks to see if website database has been created.
 if(file_exists($home_url."private/dblogin.php"))
 {
?>

<?php
 //create database login info
 include("config.php");
?>

<?php
 //create short variable names
 $page=$_GET['page'];
 $p=$_GET['p']; //WordPress Post
 $cat=$_GET['cat']; //WordPress Category
 $author=$_GET['author']; //WordPress Author
 $m=$_GET['m']; //WordPress Archive
 $s=$_GET['s']; //search terms for searching the blog posts
 $tag=$_GET['tag']; //WordPress tags
 $attachment_id=$_GET['attachment_id']; //WordPress attachments (e.g. image, audio, video)
 $page_id=$_GET['page_id']; //WordPress page
 
 if(!empty($page_id))
 {
  db_connect();
  $data = mysql_query("SELECT * FROM pages WHERE page_id='$page_id' ");
  $row = mysql_fetch_array($data);
  $page = substr($row['page_name'],4);

 }
?>

<?php
//Pull Site Settings variables
 db_connect();
  
 $data = mysql_query("SELECT * FROM site_settings");
  
 $row = mysql_fetch_array($data);

 $ss_customheader = $row['CustomHeader'];
 $ss_email = $row['Email'];
 $seo_title = $row['seo_title'];
 $seo_description = $row['seo_description'];
 $seo_keywords = $row['seo_keywords'];
 $seo_googleanalytics = $row['seo_googleanalytics'];

//Pull page-specific values if they exist
if(!$page)
{
 $data = mysql_query("SELECT * FROM pages WHERE page_name = 'dyn_main' ");
 $row = mysql_fetch_array($data);

 $temp_seo_title = $row['seo_title'];
 $temp_seo_description = $row['seo_description'];
 $temp_seo_keywords = $row['seo_keywords'];
}
else
{
 $data = mysql_query("SELECT * FROM pages WHERE page_name = 'dyn_$page' ");
 $row = mysql_fetch_array($data);

 $temp_seo_title = $row['seo_title'];
 $temp_seo_description = $row['seo_description'];
 $temp_seo_keywords = $row['seo_keywords'];
}
 
if($temp_seo_title != '')
{
 $seo_title = $temp_seo_title;
}
if($temp_seo_description != '')
{
 $seo_description = $temp_seo_description;
}
if($temp_seo_keywords != '')
{
 $seo_keywords = $temp_seo_keywords;
}

?>

<?php
	//this code allows mixed php/javascript/html to be retrieved from the database and executed
	/*
	$other_vars = array();
	$mixed_content = new PhpStringParser(array('get_vars'=>$_GET, 'post_vars'=>$_POST, 'other_vars'=>$other_vars));
	*/
	/*
	$mixed_php_content = new PhpStringParser();
	$mixed_javascript_content = new JavascriptStringParser();
	*/
?>

<html>
<head>
	<!-- More about compatibility modes at http://stackoverflow.com/questions/6771258/whats-the-difference-if-meta-http-equiv-x-ua-compatible-content-ie-edge -->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
    <?=$seo_title;?>
    </title>
    <META NAME="Description" CONTENT="<?=$seo_description;?>" />
    <META NAME="Keywords" CONTENT="<?=$seo_keywords;?>" />

    <!-- bootstrap3 includes -->
    <LINK REL="StyleSheet" HREF="resources/bootstrap3/dist/css/bootstrap.min.css" TYPE="text/css" MEDIA="screen,print">
    <LINK REL="StyleSheet" HREF="resources/bootstrap3/dist/css/bootstrap-theme.min.css" TYPE="text/css" MEDIA="screen,print">

    <!-- fontawesome4 includes -->
    <LINK REL="StyleSheet" HREF="resources/fontawesome4/css/font-awesome.min.css" TYPE="text/css" MEDIA="screen,print">

    <!-- DataTables includes -->
    <LINK REL="StyleSheet" HREF="resources/datatables/media/css/jquery.dataTables.css" TYPE="text/css" MEDIA="screen,print">
    <LINK REL="StyleSheet" HREF="resources/datatables/media/css/jquery.dataTables_themeroller.css" TYPE="text/css" MEDIA="screen,print">
    <LINK REL="StyleSheet" HREF="resources/datatables/extras/AutoFill/media/css/AutoFill.css" TYPE="text/css" MEDIA="screen,print">
    <LINK REL="StyleSheet" HREF="resources/datatables/extras/ColReorder/media/css/ColReorder.css" TYPE="text/css" MEDIA="screen,print">
    <LINK REL="StyleSheet" HREF="resources/datatables/extras/ColVis/media/css/ColVis.css" TYPE="text/css" MEDIA="screen,print">
    <LINK REL="StyleSheet" HREF="resources/datatables/extras/ColVis/media/css/ColVis.css" TYPE="text/css" MEDIA="screen,print">
    <LINK REL="StyleSheet" HREF="resources/datatables/extras/Scroller/media/css/dataTables.scroller.css" TYPE="text/css" MEDIA="screen,print">
    <LINK REL="StyleSheet" HREF="resources/datatables/extras/TableTools/media/css/TableTools.css" TYPE="text/css" MEDIA="screen,print">
    <LINK REL="StyleSheet" HREF="resources/datatables/extras/TableTools/media/css/TableTools_JUI.css" TYPE="text/css" MEDIA="screen,print">

    <!-- bootstrap-datepicker includes -->
    <LINK REL="StyleSheet" HREF="resources/bootstrap-datepicker/css/datepicker.css" TYPE="text/css" MEDIA="screen,print">

    <!-- chosen include -->
    <LINK REL="StyleSheet" HREF="resources/chosen/chosen.min.css" TYPE="text/css" MEDIA="screen,print">

    <!-- PCE Includes -->
    <LINK REL="StyleSheet" HREF="style.master.php" TYPE="text/css" MEDIA="screen,print">
    <LINK REL="StyleSheet" HREF="style.custom.php" TYPE="text/css" MEDIA="screen,print">
    <!-- <LINK REL="StyleSheet" HREF="style.wordpress.css" TYPE="text/css" MEDIA="screen,print"> -->

    <!-- jQuery include -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <script type="text/javascript" src="script.master.js"></script>
    <script type="text/javascript" src="script.custom.js"></script>


    <?php include_once("custom_header.php") ?>
    <?php include_once("analyticstracking.php") ?>

</head>
<body onload="startAnim()">
 <div class="labels">body</div>

<!-- Full Page Start -->
 <div id="full">
  <div class="labels">full page</div>
  <!-- Header Start -->
  <div id="header_full">
   <div class="labels">full header</div>
    <!-- Floating Header Start -->
    <div id="header_float">
     <?php include("dyn_hfloat.php"); ?>
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
   <div class="labels">full body</div>
   <!-- Floating Body Start -->
   <div id="body_float">
    <div class="labels">floating body</div>

<!-- Blog navbar/page -->
    <?php
     if(!empty($p) || !empty($cat) || !empty($author) || !empty($s) || !empty($m) || !empty($tag) || !empty($attachment_id) || $page=="blog")
     {
    ?>
     <div id="navbar" style="display:inline;">
      <?php
       $temp_page=$page; //PCE Edit b/c Wordpress has a $page variable also and it overwrites mine
       include("dyn_wordpress_nav.php");
       $page=$temp_page;
      ?>
     </div>
     <div id="page" style="width:550px; padding-left:10px; border-left: 1px #474242 solid;">
      <div class="labels">page content</div>
      <?php
       if($page=="blog")
       {
        include("dyn_blog.php");
       }
       else
       {
        $temp_page=$page; //PCE Edit b/c Wordpress has a $page variable also and it overwrites mine
        include("wordpress.php");
        $page=$temp_page;
       }
      ?>
     </div>
    <?php
     }
     else
     {
    ?>
<!-- End blog navbar/page -->

 <div id="navbar">
  <?php
   include("dyn_navbar.php");
  ?>
 </div>
 <div id="page">
  <div class="labels">page content</div>
  <?php
  if(!$page)
  {
   $temp_page=$page; //PCE Edit b/c Wordpress has a $page variable also and it overwrites mine
   $page="main";
   include("dyn_".$page.".php");
   $page=$temp_page;
  }
  else
  {
   $temp_page=$page; //PCE Edit b/c Wordpress has a $page variable also and it overwrites mine
   include("dyn_".$page.".php");
   $page=$temp_page;
  }
  ?>
 </div>
<?php
 }
?>
    <div id="navbar_right">
     <?php include("dyn_navbar_right.php"); ?>
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
   <div class="labels">full footer</div>
    <!-- Floating Footer Start -->
    <div id="footer_float">
     <?php include("dyn_ffloat.php"); ?>
    </div>
    <div id="linksmenu">
     <?php
      include("dyn_links.php");
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

<!-- bootstrap3 includes -->
<script type="text/javascript" src="resources/bootstrap3/dist/js/bootstrap.min.js"></script>

<!-- datables includes -->
<script type="text/javascript" src="resources/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="resources/datatables/extras/AutoFill/media/js/AutoFill.min.js"></script>
<script type="text/javascript" src="resources/datatables/extras/ColReorder/media/js/ColReorder.min.js"></script>
<script type="text/javascript" src="resources/datatables/extras/ColVis/media/js/ColVis.min.js"></script>
<script type="text/javascript" src="resources/datatables/extras/FixedColumns/media/js/FixedColumns.min.js"></script>
<script type="text/javascript" src="resources/datatables/extras/FixedHeader/js/FixedHeader.min.js"></script>
<script type="text/javascript" src="resources/datatables/extras/KeyTable/js/KeyTable.min.js"></script>
<script type="text/javascript" src="resources/datatables/extras/Scroller/media/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="resources/datatables/extras/TableTools/media/js/TableTools.min.js"></script>
<script type="text/javascript" src="resources/datatables/extras/TableTools/media/js/ZeroClipboard.js"></script>

<!-- bootstrap datepicker include -->
<script type="text/javascript" src="resources/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- placeholder include -->
<script type="text/javascript" src="resources/placeholder/jquery.placeholder.min.js"></script>

<!-- chosen include -->
<script type="text/javascript" src="resources/chosen/chosen.jquery.min.js"></script>

<!-- jQuery Validate include -->
<script type="text/javascript" src="resources/jQueryValidate/jquery-validate.min.js"></script>

</body>
</html>

<?php
 }
 else
 {
     echo "inside install block";

    //From here to the bottom of the page is the installation script
    //create short variable names
    $submitted=$_POST['submitted'];
    $dbhostname=$_POST['dbhostname'];
    $dbname=$_POST['dbname'];
    $dbusername=$_POST['dbusername'];
    $dbpassword=$_POST['dbpassword'];
    $myusername=$_POST['myusername'];
    $mypassword=$_POST['mypassword'];
    $myemail=$_POST['myemail'];
    $underscore = "_";


    if(isset($submitted))
    {
        //This section creates a file to hold the database login info.
        // creates the variables for data, directory, and file name
        $your_data = "<?php
        //create database login info
        \$dbhostname = '$dbhostname';
        \$dbusername = '$dbusername';
        \$dbpassword = '$dbpassword';
        \$dbname = '$dbusername$underscore$dbname';
        ?>
        ";
        $directory = $home_url."private/"; 
        $filename = "dblogin.php";
        
        //Creates the "private" directory if it doesn't already exist.
        if(!is_dir($directory))
        {
        mkdir($directory, 0777);
        }
        
        //Create "dblogin" file.
        // Open the file and erase the contents if any
        $fp = fopen($directory.$filename, "wb");
        
        // Write the data to the file
        fwrite($fp, $your_data);
        
        // Close the file
        fclose($fp);
        
        //Copy login info to WordPress folder
        $your_data = "<?php
        //create database login info
        \$dbhostname = '$dbhostname';
        \$dbusername = '$dbusername';
        \$dbpassword = '$dbpassword';
        \$dbname = '$dbusername$underscore$dbname';
        \$myusername= '$myusername';
        \$mypassword= '$mypassword';
        \$myemail= '$myemail';
        ?>
        ";
        $directory = "wp/"; 
        $filename = "dblogin.php";
        
        //Creates the "wp" directory if it doesn't already exist.
        if(!is_dir($directory))
        {
        mkdir($directory, 0777);
        }
        
        //Create "dblogin" file.
        // Open the file and erase the contents if any
        $fp = fopen($directory.$filename, "wb");
        
        // Write the data to the file
        fwrite($fp, $your_data);
        
        // Close the file
        fclose($fp);
        
        //Create "config" file.
        // creates the variables for data, directory, and file name
        /*echo "include path: ".$home_url."private/dblogin.php";*/
        
        $your_data = "<?php
        //include dblogin info
        \$home_url = get_home_url_PCE();
        \$dblogin_url = \$home_url.'private/dblogin.php';
        include(\$dblogin_url);
        ?>
        ";
        $filename = "config.php";
        
        // Open the file and erase the contents if any
        $fp = fopen($filename, "wb");
        
        // Write the data to the file
        fwrite($fp, $your_data);
        
        // Close the file
        fclose($fp);
        
        //Test database connection
        $con = @mysql_connect($dbhostname, $dbusername, $dbpassword);
        if (!$con)
        {
        if(file_exists($home_url."private/dblogin.php"))
        {
        unlink($home_url."private/dblogin.php");
        }
        echo "The database login information you supplied is incorrect.  Please contact your website administrator to obtain the correct values. Click <a href=\"index.php\">here</a> to try again.";
        }
        else
        {
        $sql = 'CREATE DATABASE '.$dbusername.'_'.$dbname;
        if (mysql_query($sql, $con))
        {
            include("database/install.php");
        }
        else
        {
            echo 'Error creating database: ' . mysql_error() . "\n";
        }
        }
    
    }
    else
    { 
     ?>
    
    <html>
    <head>
    <title>Installation</title>
    </head>
    <body>
    
    <form enctype="multipart/form-data" action="index.php" method="post" name="install">
    
    <table align="center" border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
        <thead>
            <tr>
                <th colspan="2" scope="col">
                    <div>
                        Welcome to PCE!</div>
                    <div>
                        To begin your installation, please fill out the following form</div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="text-align: right;" width="50%">
                    Database Host:</td>
                <td>
                    <input maxlength="30" name="dbhostname" size="30" type="text" value="localhost" />&nbsp;("localhost" unless your webhost has a unique setup)</td>
            </tr>
            <tr>
                <td style="text-align: right;" width="50%">
                    Database Name:</td>
                <td>
                    <input maxlength="30" name="dbname" size="30" type="text" />&nbsp;(Alphanumeric characters (no spaces))</td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    Database Username:</td>
                <td>
                    <input maxlength="30" name="dbusername" size="30" type="text" />&nbsp;(Provided by your website administrator)</td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    Database Password:</td>
                <td>
                    <input maxlength="30" name="dbpassword" size="30" type="password" />&nbsp;(Provided by your website administrator)</td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    Administrator Username:</td>
                <td>
                    <input maxlength="30" name="myusername" size="30" type="text" />&nbsp;(Anything except spaces)</td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    Administrator Password:</td>
                <td>
                    <input maxlength="30" name="mypassword" size="30" type="password" />&nbsp;(Anything except spaces)</td>
            </tr>
            <tr>
                <td style="text-align: right;">
                    Email Address:</td>
                <td>
                    <input maxlength="100" name="myemail" size="30" type="text" /></td>
            </tr>
    
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input name="install" type="submit" value="Install!" /><input name="submitted" type="hidden" value="1" /></td>
            </tr>
        </tbody>
    </table>
    </form>
    </body>
    </html>
    
    <?php
     }
    }
    ?>