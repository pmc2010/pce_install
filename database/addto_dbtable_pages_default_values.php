<?php
// Make a MySQL Connection
db_connect();

// Insert a row of information into the table "pages"
mysql_query("INSERT INTO pages 
(
page_id,
page_name,
page_title

)
VALUES
(
'',
'dyn_navbar',
'!Navbar'

) ") 
or die(mysql_error());  

// Insert a row of information into the table "pages"
mysql_query("INSERT INTO pages 
(
page_id,
page_name,
page_title

)
VALUES
(
'',
'dyn_ffloat',
'!Footer'

) ") 
or die(mysql_error());  

// Insert a row of information into the table "pages"
mysql_query("INSERT INTO pages 
(
page_id,
page_name,
page_title

)
VALUES
(
'',
'dyn_hfloat',
'!Header'

) ") 
or die(mysql_error());  

// Insert a row of information into the table "pages"
mysql_query("INSERT INTO pages 
(
page_id,
page_name,
page_title

)
VALUES
(
'',
'dyn_links',
'!Links Menu'

) ") 
or die(mysql_error());  

// Insert a row of information into the table "pages"
mysql_query("INSERT INTO pages 
(
page_id,
page_name,
page_title

)
VALUES
(
'',
'dyn_navbar_right',
'!Right Navbar'

) ") 
or die(mysql_error());  

// Insert a row of information into the table "pages"
mysql_query("INSERT INTO pages 
(
page_id,
page_name,
page_title

)
VALUES
(
'',
'dyn_about',
'About'

) ") 
or die(mysql_error());  

// Insert a row of information into the table "pages"
mysql_query("INSERT INTO pages 
(
page_id,
page_name,
page_title

)
VALUES
(
'',
'dyn_contact',
'Contact'

) ") 
or die(mysql_error());  

// Insert a row of information into the table "pages"
mysql_query("INSERT INTO pages 
(
page_id,
page_name,
page_title

)
VALUES
(
'',
'dyn_faq',
'FAQ'

) ") 
or die(mysql_error());  

// Insert a row of information into the table "pages"
mysql_query("INSERT INTO pages 
(
page_id,
page_name,
page_title

)
VALUES
(
'',
'dyn_main',
'Home'

) ") 
or die(mysql_error());  

// Insert a row of information into the table "pages"
mysql_query("INSERT INTO pages 
(
page_id,
page_name,
page_title

)
VALUES
(
'',
'dyn_services',
'Services'

) ") 
or die(mysql_error());  

// Insert a row of information into the table "pages"
mysql_query("INSERT INTO pages 
(
page_id,
page_name,
page_title

)
VALUES
(
'',
'dyn_blog',
'Blog'

) ") 
or die(mysql_error());  

echo "Added default Page values!";

?>
