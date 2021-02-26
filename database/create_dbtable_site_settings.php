<?php $pagedef = 'page110'; ?>

<?php

// Make a MySQL Connection
db_connect();

// Create table
mysql_query("CREATE TABLE site_settings
(

ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),

CustomHeader longtext,
Email varchar(100),
seo_title varchar(50),
seo_description longtext,
seo_keywords longtext,
seo_googleanalytics varchar(30)

) ");

// Add an empty row

mysql_query("INSERT INTO site_settings 
(
CustomHeader,
Email,
seo_title,
seo_description,
seo_keywords,
seo_googleanalytics

)
VALUES
(
'',
'',
'',
'',
'',
''
) "); 

if(tableExists("site_settings",$dbusername,$dbpassword,$dbname))
{
 echo "Created Site Settings Table!";
}
else
{
 echo "Failed to create Site Settings table!";
}

?>