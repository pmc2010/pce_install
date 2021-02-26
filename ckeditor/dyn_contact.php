<?php $pagedef = 'page107'; ?>


<?php

 mysql_connect("localhost", $dbusername, $dbpassword) or die(mysql_error());
 mysql_select_db($dbname) or die(mysql_error()); 
  
 $data = mysql_query("SELECT * FROM pages where Page='dyn_$page' ");
  
 $row = mysql_fetch_array($data);

 $content = $row['Content'];

 echo $content;
 
?>