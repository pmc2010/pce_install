<?php $pagedef = 'page110'; ?>

<TABLE valign="top" BORDER="0px" WIDTH="100%" CELLSPACING="0" CELLPADDING="0">
 <tr>
  <td align="center" >

   <?php
    
    // Make a MySQL Connection
    mysql_connect("localhost", $dbusername, $dbpassword) or die(mysql_error());
    mysql_select_db($dbname) or die(mysql_error());
 
    // Retrieve all the data from the "links" table
    $result = mysql_query("SELECT * FROM links")
    or die(mysql_error());  

    $num_results = mysql_num_rows($result);
 
    for($i=0; $i<($num_results-1); $i++)
    {
     // store the record of the "links" table into $row
     $row = mysql_fetch_array( $result );
     echo "<a href=\"".$row['Link']."\">".$row['Title']."</a>&nbsp&nbsp&nbsp|&nbsp&nbsp&nbsp";
    }

    $row = mysql_fetch_array( $result );
    echo "<a href=\"".$row['Link']."\">".$row['Title']."</a>";
    
    ?>
  </td>
 </tr>
</TABLE>

