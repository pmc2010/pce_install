<?php

db_connect();

// Create table
mysql_query("CREATE TABLE pw_members
(

ID int(4) NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),

username varchar(65) NOT NULL,
password varchar(65) NOT NULL

) ");

$mypassword = md5($mypassword);

mysql_query("INSERT INTO pw_members
(
username,
password
)
VALUES
(
'$myusername',
'$mypassword'
) ")
or die(mysql_error());

if(tableExists("pw_members",$dbusername,$dbpassword,$dbname))
{
 echo "Created pw_members Table!";
}
else
{
 echo "Failed to create pw_members table!";
}

?>

