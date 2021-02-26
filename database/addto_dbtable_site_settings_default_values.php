<?php
// Make a MySQL Connection
db_connect();

// Insert a row of information into the table "site_settings"
mysql_query("INSERT INTO site_settings 
(
CustomHeader,
Email

)
VALUES
(
'',
'$myemail'

) ") 
or die(mysql_error());  

echo "Site Settings Default Values Inserted!";

?>
