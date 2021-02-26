<?php
// Make a MySQL Connection
db_connect();

// Insert a row of information into the table "links"
mysql_query("INSERT INTO links 
(
Title,
Link

)
VALUES
(
'Home',
'?page=main'

) ") 
or die(mysql_error());  

mysql_query("INSERT INTO links 
(
Title,
Link

)
VALUES
(
'About',
'?page=about'

) ") 
or die(mysql_error());

mysql_query("INSERT INTO links 
(
Title,
Link

)
VALUES
(
'Blog',
'?page=blog'

) ") 
or die(mysql_error());  
  

mysql_query("INSERT INTO links 
(
Title,
Link

)
VALUES
(
'Contact',
'?page=contact'

) ") 
or die(mysql_error());  

mysql_query("INSERT INTO links 
(
Title,
Link

)
VALUES
(
'FAQ',
'?page=faq'

) ") 
or die(mysql_error());  

mysql_query("INSERT INTO links 
(
Title,
Link

)
VALUES
(
'Services',
'?page=services'

) ") 
or die(mysql_error());  

echo "Links Default Values Inserted!";

?>
