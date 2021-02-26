<?php

db_connect();

// Create table
mysql_query("CREATE TABLE style_admindynmenu
(

ID int NOT NULL AUTO_INCREMENT, 
PRIMARY KEY(ID),

Width varchar(15),
BackgroundColor varchar(15),
_Float varchar(15),

ulListStyle varchar(15),
ulMargin varchar(15),
ulPadding varchar(15),
ulWidth varchar(15),
ulFloat varchar(15),

ah2Font varchar(50),
ah2Display varchar(15),
ah2BorderWidth varchar(15),
ah2BorderStyle varchar(15),
ah2BorderColor varchar(50),
ah2Margin varchar(15),
ah2Padding varchar(15),

h2Color varchar(15),
h2BackgroundColor varchar(15),
h2TextTransform varchar(15),

aColor varchar(15),
aBackgroundColor varchar(15),
aTextDecoration varchar(15),

ahoverColor varchar(15),
ahoverBackground varchar(15),

liPosition varchar(15),

ululPosition varchar(15),
ululZIndex varchar(15),

ulululTop varchar(15),
ulululLeft varchar(15)

) ");

if(tableExists("style_admindynmenu",$dbusername,$dbpassword,$dbname))
{
 echo "Created Admin Dynmenu Style Table!";
}
else
{
 echo "Failed to create Admin Dynmenu Style table!";
}

?>