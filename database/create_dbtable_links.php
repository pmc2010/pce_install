<?php $pagedef = 'page110'; ?>

<?php

db_connect();

// Create table
mysql_query("CREATE TABLE links
(

ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),

Title varchar(30),
Link varchar(50)

) ");

if(tableExists("links",$dbusername,$dbpassword,$dbname))
{
 echo "Created Links Table!";
}
else
{
 echo "Failed to create Links table!";
}

?>

