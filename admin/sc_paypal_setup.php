<?php
 //create short variable names
 $submitted=$_POST['submitted'];
 $up_api_username=$_POST['api_username'];
 $up_api_password=$_POST['api_password'];
 $up_api_signature=$_POST['api_signature'];

?>

<?php
//update page database
 if(isset($submitted))
 {
 mysql_connect("localhost", $dbusername, $dbpassword) or die(mysql_error());
 mysql_select_db($dbname) or die(mysql_error()); 

  mysql_query("UPDATE sc_paypal_setup SET APIUsername = '$up_api_username' ");

  mysql_query("UPDATE sc_paypal_setup SET APIPassword = '$up_api_password' ");

  mysql_query("UPDATE sc_paypal_setup SET APISignature = '$up_api_signature' ");

  }

?>


<?php

 mysql_connect("localhost", $dbusername, $dbpassword) or die(mysql_error());
 mysql_select_db($dbname) or die(mysql_error()); 
  
 $data = mysql_query("SELECT * FROM sc_paypal_setup");
  
 $row = mysql_fetch_array($data);

$api_username	=$row['APIUsername'];
$api_password	=$row['APIPassword'];
$api_signature	=$row['APISignature'];

?>



<form action="?page=sc_paypal_setup" method="post" name="sc_paypal_setup">
	<div style="font-family: arial,sans-serif;">
		<table border="0" cellpadding="1" cellspacing="1" style="width: 100%;">
			<tbody>
				<tr>
					<th colspan="2">
						<h3>
							PAYPAL SETUP</h3>
					</th>
				</tr>
				<tr>
					<td colspan="2" style="background-color: black;">
						<div style="text-align: center; color:white;">
             API Credentials
            </div>
					</td>
				</tr>
				<tr height="5">
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						API Username:</td>
					<td>
						<input maxlength="100" name="api_username" size="40" type="text" value="<?=$api_username;?>" /></td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						API Password:</td>
					<td>
						<input maxlength="100" name="api_password" size="40" type="text" value="<?=$api_password;?>" /></td>
				</tr>
				<tr>
					<td style="width: 50%; text-align: right;">
						Signature:</td>
					<td>
						<input maxlength="100" name="api_signature" size="80" type="text" value="<?=$api_signature;?>" /></td>
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

