<?php

db_connect();

// Create table
mysql_query("CREATE TABLE pages
(

ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),

page_id int(10),
page_name varchar(100),
page_title varchar(100),
seo_title varchar(50),
seo_description longtext,
seo_keywords longtext,
content text,
allow_comments tinyint(1)

) ");

if(tableExists("pages",$dbusername,$dbpassword,$dbname))
{
 echo "Created Pages Table!";
}
else
{
 echo "Failed to create Pages table!";
}

?>

