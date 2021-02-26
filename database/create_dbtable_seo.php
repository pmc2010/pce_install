<?php

// Make a MySQL Connection
db_connect();

// Create table
mysql_query("CREATE TABLE $seo_table
(

ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),

PageTitle varchar(50),
Description longtext,
Keywords longtext,
GoogleAnalytics varchar(30)

) ");

// Add an empty row

mysql_query("INSERT INTO $seo_table 
(
PageTitle,
Description,
Keywords,
GoogleAnalytics
)
VALUES
(
'',
'',
'',
''
) "); 


if(tableExists("seo_default",$dbusername,$dbpassword,$dbname))
{
 echo "Created SEO Table!";
}
else
{
 echo "Failed to create SEO table!";
}

?>

