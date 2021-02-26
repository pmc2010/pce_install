<?php

 /*This function returns a string as the relative path to the home folder
   from the folder in which it is called. Here is the format: "../../" etc.
 */

 function get_home_url_PCE()
 {
  
  $home_url = "";
  
  $path = getcwd();
  $uri = $_SERVER['REQUEST_URI'];
  $parts = explode("?",$uri);
  $uri_trimmed = $parts['0'];
  /*echo "uri_trimmed: ".$uri_trimmed."<br />";*/
  $uri_trimmed = rtrim($uri_trimmed, "?");
  /*echo "uri_trimmed: ".$uri_trimmed."<br />";*/
  $uri_trimmed = rtrim($uri_trimmed, "index.php");
  /*echo "uri_trimmed: ".$uri_trimmed."<br />";*/
  $uri_trimmed = rtrim($uri_trimmed, "style.master.php");
  /*echo "uri_trimmed: ".$uri_trimmed."<br />";*/
  $uri_trimmed = rtrim($uri_trimmed, "style.admin.php");
  /*echo "uri_trimmed: ".$uri_trimmed."<br />";*/
  $uri_trimmed = rtrim($uri_trimmed, "style.admindynmenu.php");
  /*echo "uri_trimmed: ".$uri_trimmed."<br />";*/
  $uri_trimmed = rtrim($uri_trimmed, "install.php");
  /*echo "uri_trimmed: ".$uri_trimmed."<br />";*/
  $uri_trimmed = rtrim($uri_trimmed, "main_login.php");
  /*echo "uri_trimmed: ".$uri_trimmed."<br />";*/
  $uri_trimmed = rtrim($uri_trimmed, "/");
  /*echo "uri_trimmed: ".$uri_trimmed."<br />";*/
 
  
  /*echo "path = ".$path."<br />";
  echo "Request URI = ".$_SERVER['REQUEST_URI']."<br />";
  echo "uri_trimmed: ".$uri_trimmed."<br />";
  echo "DOCUMENT_ROOT = ".$_SERVER['HTTP_HOST'];
  echo phpinfo();*/
  
  if ($uri_trimmed == "")
  {
   $num_slashes = 0;
  }
  else
  {
   $count = 0;
   do
   {

    $pos = strpos($path,$uri_trimmed);
 
    if($pos === false)
    {
     // string $uri_trimmed NOT found in $path
     //delete first character of $uri_trimmed and try again
     $uri_trimmed = substr( $uri_trimmed, 1 );
 
     /*echo "uri_trimmed: ".$uri_trimmed."<br />";*/

     $finished = 0;
     $count++;
    }
    else
    {
     // string $uri_trimmed IS found in $path
     // determine the number of forward slashes in $uri_trimmed
     $num_slashes = substr_count($uri_trimmed, '/');
 
     /*echo "num_slashes: ".$num_slashes."<br />";*/
 
     $finished = 1;
    }
   } while ($finished == 0 && $count < 200);
  }

  for ($i=0; $i<($num_slashes+1); $i++)
  {
   $home_url .= "../";
  }

  /*echo "home_url: ".$home_url."<br />";
  echo $home_url."private/dblogin.php";*/
  return $home_url;
 }


 function db_connect()
 {
   $home_url = get_home_url_PCE();
   /*echo "home_url: ".$home_url."<br />";*/
   $db_login_url = $home_url."private/dblogin.php";
   /*echo "db_login_url = ".$db_login_url."<br />";*/
   include($db_login_url);
   mysql_connect($dbhostname, $dbusername, $dbpassword) or die(mysql_error());
   mysql_select_db($dbname) or die(mysql_error()); 
 }

/*This function checks an email field for spam*/
function spamcheck($field)
  {
  //filter_var() sanitizes the e-mail
  //address using FILTER_SANITIZE_EMAIL
  $field=filter_var($field, FILTER_SANITIZE_EMAIL);

  //filter_var() validates the e-mail
  //address using FILTER_VALIDATE_EMAIL
  if(filter_var($field, FILTER_VALIDATE_EMAIL))
    {
    return TRUE;
    }
  else
    {
    return FALSE;
    }
  }

/*This function adds a new username/password via md5 encryption*/
function addNewUser($username, $password){
   /*global $connection;*/
   $password = md5($password);
   $q = "INSERT INTO ".pw_members." VALUES ('$username', '$password')";
   return mysql_query($q);
}

/*This function updates a user password via md5 encryption*/
function updateUserPass($username, $password){
   /*global $connection;*/
   $password = md5($password);
   $q = "UPDATE pw_members SET password='$password' WHERE username='$username'";
   return mysql_query($q);
}

/*This function checks the validity of a username/password combination*/
function checkUserPass($username, $password){
   /*global $connection;*/
      
   $username = str_replace("'","''",$username);
   $password = md5($password);

   // Verify that user is in database
   $q = "SELECT password FROM ".pw_members." WHERE username = '$username'";
   $result = mysql_query($q);
   if(!$result || (mysql_numrows($result) < 1)){
     return 1; //Indicates username failure
   }     
  
   // Retrieve password from result
   $dbarray = mysql_fetch_array($result);
   
   // Validate that password is correct
   if($password == $dbarray['password']){
      return 0; //Success! Username and password confirmed
   }
   else{
      return 1; //Indicates password failure
   }
}

?>

<?php
function curPageURL() {
 $pageURL = 'http';
 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
 $pageURL .= "://";
 if ($_SERVER["SERVER_PORT"] != "80") {
  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
 } else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>