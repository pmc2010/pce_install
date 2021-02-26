<?php
ob_start();
session_start();
?>
 


<?php /*create short variable names*/
$submitted=$_POST['submitted'];
$redirect2 = $_POST['redirect'];
$redirect = $_GET['redirect'];
//echo "redirect: ".$redirect."<br />";
//$redirect = urlencode('http://www.drudgereport.com');
//$redirect = urlencode('http://pastel.mysitehosted.com/~inst123/admin/index.php');
?>

<?php
if(isset($submitted))
{

 //echo "redirect: ".$redirect."<br />";
 //create database login info
 include_once("../functions.php");
 include("../config.php");

$tbl_name="pw_members"; // Table name

// Connect to server and select databse.
db_connect();

// Define $myusername and $mypassword 
$myusername=$_POST['myusername']; 
$mypassword=$_POST['mypassword'];

// To protect MySQL injection (more detail about MySQL injection)
$myusername = stripslashes($myusername);
$mypassword = stripslashes($mypassword);
$myusername = mysql_real_escape_string($myusername);
$mypassword = mysql_real_escape_string($mypassword);

$count = checkUserPass($myusername, $mypassword);
/*
$sql="SELECT * FROM $tbl_name WHERE username='$myusername' and password='$mypassword'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row
*/

if($count==0){

$_SESSION["myusername"] = $myusername;
//$_SESSION["mypassword"] = $mypassword; 

//echo "redirect: ".$redirect."<br />";
if(isset($redirect)){
	//echo "redirect found.";
	header("location: ".urldecode($redirect));
}
else{
	//echo "redirect not found.";
	header("location: ../admin/index.php");
}


}
else {
$login_failure = 1;
}

ob_end_flush();

}
?>

<html>
<head>
<title>Login Page</title>
</head>
<body>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<?php
	echo "<form name='form1' method='post' acion='main_login.php?redirect=".$redirect."'>";
?>
<!-- <form name="form1" method="post" action="main_login.php"> -->
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>Member Login </strong></td>
</tr>
<tr>
<td width="78">Username</td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername"></td>
</tr>
<tr>
<td>Password</td>
<td>:</td>
<td><input name="mypassword" type="password" id="mypassword"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="Login">
<input name="submitted" type="hidden" value="1" />
<!-- <input name="redirect" type="hidden" value="<?=$redirect;?>" /> -->
</td>
</tr>
</table>
</td>
</form>
</tr>

<?php
 if($login_failure)
 {
?>
  <tr>
   <td>Oops! Login failed. Please try again.
   </td>
  </tr>
<?php
 }
?>

</table>
</body>

</html>