<?php $pagedef = 'page103'; ?>

<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM pages order by Title");
  
 $num_results = mysql_num_rows($data);

?>

<div id="dynmenu">
<ul>
  <li><a href="?page=site_settings">Site Settings</a>
  </li>
</ul>
<ul>
  <li><a>Website Layout</a>
    <ul>
      <li><a href="?page=layout_body">Body</a>
      </li>
      <li><a href="?page=layout_full">Full Page</a>
      </li>
      <li><a>Header</a>
       <ul>
        <li><a href="?page=layout_hfull">Full Header</a></li>
        <li><a href="?page=layout_hfloat">Floating Header</a></li>
       </ul>
      </li>
      <li><a>Page</a>
       <ul>
        <li><a href="?page=layout_bfull">Full Body</a></li>
        <li><a href="?page=layout_bfloat">Floating Body</a>
         <ul>
          <li><a href="?page=layout_navbar">Left Navbar</a></li>
          <li><a href="?page=layout_page">Page Content</a></li>
          <li><a href="?page=layout_navbar_right">Right Navbar</a></li>
         </ul>
        </li>
       </ul>
      </li>
      <li><a>Footer</a>
       <ul>
        <li><a href="?page=layout_ffull">Full Footer</a></li>
        <li><a href="?page=layout_ffloat">Floating Footer</a></li>
        <li><a href="?page=layout_links">Links Menu</a></li>
       </ul>
      </li>
    </ul>
  </li>
</ul>

<!--
<ul>
  <li><a>SEO</a>
   <ul>
    <li><a href="index.php?page=seo&pagelink=default&pagename=Default">Default</a></li>
-->
<?php
/*
for($i=0; $i<5; $i++)
{
 $row = mysql_fetch_array($data);
}

for($i=5; $i<($num_results); $i++)
{
 $row = mysql_fetch_array($data);
 echo "<li><a href=\"index.php?page=seo&pagelink=".$row['Page']."&pagename=".$row['Title']."\">".$row['Title']."</a></li>";
}
*/
?>
<!--
   </ul>
  </li>
</ul>
-->
<ul>
  <li><a>Menus</a>
   <ul>
    <li><a>Horizontal</a>
     <ul>
      <li><a href="?page=menu_hor_simple">Simple</a></li>
      <li><a href="?page=menu_hor_drop-down">Drop-Down</a></li>
      <li><a href="?page=menu_hor_div">Drop-Down Div</a></li>
     </ul>
    </li>
    <li><a>Vertical</a>
     <ul>
      <li><a href="?page=menu_ver_simple">Simple</a></li>
      <li><a href="?page=menu_ver_pop-out">Pop-Out</a></li>
     </ul>
    </li>
   </ul>
  </li>
</ul>
<ul>
  <li><a href="?page=add-delete_page">Add/Delete Pages</a>
  </li>
</ul>
<ul>
  <li><a href="?page=manage_files-images">Manage Files/Images</a>
  </li>
</ul>
<ul>
  <li><a href="../ftools/" target="_blank">Forms</a>
  </li>
</ul>
<ul>
 <li><a href="../wp/wp-admin" target="_blank">Blog/Comments</a>
 </li>
</ul>
<ul>
 <li><a>Shopping Cart</a>
  <ul>
   <li><a href="http://www.ecwid.com">Ecwid</a></li>
  </ul>
 </li>
</ul>


<!--
<ul>
  <li><a>Shopping Cart</a>
   <ul>
    <li><a href="?page=sc_paypal_setup">PayPal Setup</a></li>
    <li><a href="?page=sc_cart_settings">Cart Settings</a></li>
    <li><a href="?page=sc_add_to_cart">Add to Cart</a></li>
    <li><a href="?page=sc_manage_cart">Manage Cart</a></li>
   </ul>
  </li>
</ul>
-->

</div>