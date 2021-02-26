<?php
// Make a MySQL Connection
db_connect();

// Insert a row of information into the table "style_dynmenu"
mysql_query("INSERT INTO style_dynmenu 
(
Width,
BackgroundColor,
_Float,

ulListStyle,
ulMargin,
ulPadding,
ulWidth,
ulFloat,

ah2Font,
ah2Display,
ah2BorderWidth,
ah2BorderStyle,
ah2BorderColor,
ah2Margin,
ah2Padding,

h2Color,
h2BackgroundColor,
h2TextTransform,

aColor,
aBackgroundColor,
aTextDecoration,

ahoverColor,
ahoverBackground,

liPosition,

ululPosition,
ululZIndex,

ulululTop,
ulululLeft

)
VALUES
(
'100%',
'#eee',
'left',

'none',
'0px',
'0px',
'12em',
'left',

'bold 11px/16px arial, helvetica, sans-serif',
'block',
'1px',
'solid',
'#ccc #888 #555 #bbb',
'0px',
'2px 3px',

'#fff',
'#000',
'uppercase',

'#000',
'#efefef',
'none',

'#a00',
'#fff',

'relative',

'absolute',
'500',

'0px',
'100%'

) ") 
or die(mysql_error());  

echo "Added default values to style_dynmenu table!";

?>
