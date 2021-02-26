<?php
 //Make sure visitor is logged in
 require_once('session_check.php');
?>

<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $username=$_SESSION["myusername"];
 $pw_current=$_POST['pw_current'];
 $pw_new=$_POST['pw_new'];
 $pw_new_confirm=$_POST['pw_new_confirm'];

?>

<?php

//update pw_members database
 if(isset($submitted))
 {
  if($pw_new != $pw_new_confirm)
  {
   echo "Oops! Be sure to enter your new password twice, exactly the same way. Please click <a href=\"?page=change_pw\">here</a> if you wish to try again.";
  }
  else
  {
   db_connect();

   $count = checkUserPass($username, $pw_current);
   if($count==0)
   {
    updateUserPass($username, $pw_new);
    echo "You have successfully changed your password!";
   }
   else
   {
    echo "Uh-oh. It appears that either the username or password was invalid.  Please click <a href=\"?page=change_pw\">here</a> if you wish to try again.";
   }
  }
}
else
{
?>

<div>
	<form action="?page=change_pw" id="change_pw" method="post" name="change_pw" >
		<table border="0" cellpadding="1" cellspacing="1" style="font-family:arial;">
			<caption>
				<b>Change Password</b><br /></caption>
			<tbody>
<!--
				<tr>
					<td style="text-align: right; width:50%;">
						Username:</td>
					<td>
						<input maxlength="100" name="username" size="50" type="text" /></td>
				</tr>
-->
				<tr>
					<td style="text-align: right;">
						Current Password:</td>
					<td>
						<input maxlength="100" name="pw_current" size="50" type="password" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						New Password:</td>
					<td>
						<input maxlength="100" name="pw_new" size="50" type="password" /></td>
				</tr>
				<tr>
					<td style="text-align: right;">
						Confirm New Password:</td>
					<td>
						<input maxlength="100" name="pw_new_confirm" size="50" type="password" /></td>
				</tr>

				<tr>
					<td colspan="2" style="text-align: center;">
						<input name="submit" type="submit" value="Submit" /><input name="submitted" type="hidden" value="1" /></td>
				</tr>
			</tbody>
		</table>
	</form>
</div>

<?php
 }
 ?>