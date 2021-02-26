<div class="labels">
links menu
</div>

<TABLE valign="top" BORDER="0px" WIDTH="100%" CELLSPACING="0" CELLPADDING="0">
<tr>
<td style="text-align:center;" >
<?php

db_connect();
$result = mysql_query("SELECT * FROM links ");

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
<tr>
<td>


</td>
</tr>
<tr height='10px'>
</tr>
<tr>
<td style='text-align:center;'>
<a href='admin/index.php'><img border='0' src='admin/images/admin.png'></a>
</td>
</tr>
</table>