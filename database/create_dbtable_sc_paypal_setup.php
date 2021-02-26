<?php

// Make a MySQL Connection
db_connect();

// Create table
mysql_query("CREATE TABLE sc_paypal_setup
(

ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),

APIUsername varchar(100),
APIPassword varchar(100),
APISignature varchar(100)

) ");

// Add an empty row

mysql_query("INSERT INTO sc_paypal_setup 
(
APIUsername,
APIPassword,
APISignature
)
VALUES
(
'',
'',
''
) "); 


if(tableExists("sc_paypal_setup",$dbusername,$dbpassword,$dbname))
{
 echo "Created PayPal Setup Table!";
}
else
{
 echo "Failed to create PayPal Setup table!";
}

?>

