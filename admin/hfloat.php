<?php $pagedef = 'page101'; ?>

<div style="float:left;">
 <a href="help/index.php" target="_new">Help</a>
</div>
<div style="float:right;">
 <a href="index.php">Home</a>&nbsp&nbsp<a href="../password_protect/logout.php">Logout</a><br />
</div>

<?php
if(file_exists('dynmenu.php'))
{
 include("dynmenu.php");
}

?>