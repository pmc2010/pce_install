<?php $pagedef = 'page100'; ?>


<div>
 <span style="text-decoration:underline;">Pages</span><br />


<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM pages order by page_title");
  
 $num_results = mysql_num_rows($data);


for($i=0; $i<($num_results-1); $i++)
{
 $row = mysql_fetch_array($data);
 echo "<a href=\"index.php?page=content&pagelink=".$row['page_name']."\">".$row['page_title']."</a><br />";
}

 $row = mysql_fetch_array($data);

echo "<a href=\"index.php?page=content&pagelink=".$row['page_name']."\">".$row['page_title']."</a>";

?>

</div>