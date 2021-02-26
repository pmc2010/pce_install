<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
 <head>
 </head>
 <body>

<?php
 //create database login info
 include_once("functions.php");
 include("config.php");

function tableExists($tablename,$dbusername,$dbpassword,$dbname) {


    // Get a list of tables contained within the database.

/*$con = mysql_connect("localhost",$dbusername,$dbpassword);
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }*/
db_connect();

/*
    $result = mysql_list_tables($dbname);
    
    if (!$result) {
        print "DB Error, could not list tables\n";
        print 'MySQL Error: ' . mysql_error();
        exit;
    }
    
    while ($row = mysql_fetch_row($result)) {
        print "Table: $row[0]\n";
    }

    mysql_free_result($result);
*/

    $result = mysql_list_tables($dbname);

    $rcount = mysql_num_rows($result);
 
    // Check each in list for a match.
    for ($i=0;$i<$rcount;$i++) {
        if (mysql_tablename($result, $i)==$tablename) return true;
    }
    return false;

}
?>

<div style="font-size:0.7em; font-family:arial; text-align:center;">

<?php
 echo("Database ".$dbname." created successfully");
 echo("<br />");
 include("create_dbtable_links.php");
 echo("<br />");
 include("create_dbtable_pages.php");
 echo("<br />");
 include("create_dbtable_pw_members.php");
 echo("<br />");

 //create multiple seo tables
/*
 $seo_table = 'seo_default';
 include("create_dbtable_seo.php");
 echo("<br />");
 $seo_table = 'seo_dyn_about';
 include("create_dbtable_seo.php");
 echo("<br />");
 $seo_table = 'seo_dyn_contact';
 include("create_dbtable_seo.php");
 echo("<br />");
 $seo_table = 'seo_dyn_faq';
 include("create_dbtable_seo.php");
 echo("<br />");
 $seo_table = 'seo_dyn_main';
 include("create_dbtable_seo.php");
 echo("<br />");
 $seo_table = 'seo_dyn_services';
 include("create_dbtable_seo.php");
 echo("<br />");
 $seo_table = 'seo_dyn_blog';
 include("create_dbtable_seo.php");
 echo("<br />");
*/
 
 include("create_dbtable_site_settings.php");
 echo("<br />");
 include("create_dbtable_style_admin.php");
 echo("<br />");
 include("create_dbtable_style_admindynmenu.php");
 echo("<br />");
 include("create_dbtable_style_dynmenu.php");
 echo("<br />");
 include("create_dbtable_style_master.php");
 echo("<br />");
 include("create_dbtable_sc_paypal_setup.php");
 echo("<br />");
 include("addto_dbtable_links_default_values.php");
 echo("<br />");
 include("addto_dbtable_pages_default_values.php");
 echo("<br />");
 include("addto_dbtable_style_admin_default_values.php");
 echo("<br />");
 include("addto_dbtable_style_admindynmenu.php");
 echo("<br />");
 include("addto_dbtable_style_dynmenu_default_values.php");
 echo("<br />");
 include("addto_dbtable_style_master_default_values.php");
 echo("<br />");

?>

</div>
<br />
<table width="100%">
 <tr>
  <td width="33%">&nbsp;</td>
  <td align="center">
<div style="font-size:1em; font-family:arial; border-style:solid; border-width:2px; padding:5px;">
Congratulations! You have successfully installed the PCE administration panel.  You will now be taken to the WordPress installation page...

<script language="javascript" type="text/javascript">
<!--
window.setTimeout('window.location="wp/wp-admin/setup-config.php?step1"; ',5000);
// -->
</script>

<!--
Click <a href="admin/index.php">here</a> to log in to your admin panel with the username/password you just created or click <a href="index.php">here</a> to go to your website's home page.
-->
</div>
  </td>
  <td width="33%">&nbsp;</td>
 </tr>
</table>
 </body>
</html>