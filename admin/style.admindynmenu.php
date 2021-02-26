<?php header("Content-type: text/css"); ?>

/******************************/

<?php
 //create database login info
 include_once("../functions.php");
 include("../config.php");
?>

<?php

 db_connect();
  
 $data = mysql_query("SELECT * FROM style_admindynmenu");
  
 $row = mysql_fetch_array($data);

$width	= $row['Width'];
$backgroundcolor = $row['BackgroundColor'];
$float = $row['_Float'];

$ulliststyle = $row['ulListStyle'];
$ulmargin = $row['ulMargin'];
$ulpadding = $row['ulPadding'];
$ulwidth = $row['ulWidth'];
$ulfloat = $row['ulFloat'];

$ah2font = $row['ah2Font'];
$ah2display = $row['ah2Display'];
$ah2borderwidth = $row['ah2BorderWidth'];
$ah2borderstyle = $row['ah2BorderStyle'];
$ah2bordercolor = $row['ah2BorderColor'];
$ah2margin = $row['ah2Margin'];
$ah2Padding = $row['ah2Padding'];

$h2color = $row['h2Color'];
$h2backgroundcolor = $row['h2BackgroundColor'];
$h2texttransform = $row['h2TextTransform'];

$acolor = $row['aColor'];
$abackgroundcolor = $row['aBackgroundColor'];
$atextdecoration = $row['aTextDecoration'];

$ahovercolor = $row['ahoverColor'];
$ahoverbackground = $row['ahoverBackground'];

$liposition = $row['liPosition'];

$ululposition = $row['ululPosition'];
$ululzindex = $row['ululZIndex'];

$ululultop = $row['ulululTop'];
$ulululleft = $row['ulululLeft'];

?>

/***********************/

#dynmenu {
width: <?=$width;?>;
background: <?=$backgroundcolor;?>;
float: <?=$float;?>;
}
#dynmenu ul {
list-style: <?=$ulliststyle;?>;
margin: <?=$ulmargin;?>;
padding: <?=$ulpadding;?>;
width: <?=$ulwidth;?>;
float: <?=$ulfloat;?>;
}

#dynmenu a, #dynmenu h2 {
font: <?=$ah2font;?>;
display: <?=$ah2display;?>;
border-width: <?=$ah2borderwidth;?>;
border-style: <?=$ah2borderstyle;?>;
border-color: <?=$ah2bordercolor;?>;
margin: <?=$ah2margin;?>;
padding: <?=$ah2Padding;?>;
}

#dynmenu h2 {
color: <?=$h2color;?>;
background: <?=$h2backgroundcolor;?>;
text-transform: <?=$h2texttransform;?>;
}

#dynmenu a {
color: <?=$acolor;?>;
background: <?=$abackgroundcolor;?> url('images/dynmenu_a.jpg');
text-decoration: <?=$atextdecoration;?>;
}

#dynmenu a:hover {
color: <?=$ahovercolor;?>;
background: <?=$ahoverbackground;?> url('images/dynmenu_a_hover.jpg');
}

#dynmenu li {position: <?=$liposition;?>;}

#dynmenu ul ul {
position: <?=$ululposition;?>;
z-index: <?=$ululzindex;?>;
}

#dynmenu ul ul ul {
top: <?=$ululultop;?>;
left: <?=$ulululleft;?>;
}

div#dynmenu ul ul,
div#dynmenu ul li:hover ul ul,
div#dynmenu ul ul li:hover ul ul
{display: none;}

div#dynmenu ul li:hover ul,
div#dynmenu ul ul li:hover ul,
div#dynmenu ul ul ul li:hover ul
{display: block;}

</style>

<!--[if IE]>
<style type="text/css" media="screen">
body {
behavior: url(csshover3-source.htc);
font-size: 100%;
}

#dynmenu ul li {float: left; width: 100%;}
#dynmenu ul li a {height: 1%;} 

#dynmenu a, #dynmenu h2 {
font: bold 0.7em/1.4em arial, helvetica, sans-serif;
}
</style>
<![endif]-->
