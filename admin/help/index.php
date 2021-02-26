<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php
	session_start();

?>
<html>
<head>
	<!-- More about compatibility modes at http://stackoverflow.com/questions/6771258/whats-the-difference-if-meta-http-equiv-x-ua-compatible-content-ie-edge -->
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	
	<!-- The title will be used for logging -->
	<title>PCE Help</title>
	
	<!-- bootstrap2 includes -->
	<!-- <link href="../../resources/bootstrap2/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<link href="../../resources/bootstrap2/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css" /> -->
	
	<!-- bootstrap3 includes -->
	<LINK REL="StyleSheet" HREF="../../resources/bootstrap3/dist/css/bootstrap.min.css" TYPE="text/css" MEDIA="screen,print">
	<LINK REL="StyleSheet" HREF="../../resources/bootstrap3/dist/css/bootstrap-theme.min.css" TYPE="text/css" MEDIA="screen,print">

	<!-- fontawesome4 includes -->
	<LINK REL="StyleSheet" HREF="../../resources/fontawesome4/css/font-awesome.min.css" TYPE="text/css" MEDIA="screen,print">

	<!-- DataTables includes -->
	<LINK REL="StyleSheet" HREF="../../resources/datatables/media/css/jquery.dataTables.css" TYPE="text/css" MEDIA="screen,print">
	<LINK REL="StyleSheet" HREF="../../resources/datatables/media/css/jquery.dataTables_themeroller.css" TYPE="text/css" MEDIA="screen,print">
	<LINK REL="StyleSheet" HREF="../../resources/datatables/extras/AutoFill/media/css/AutoFill.css" TYPE="text/css" MEDIA="screen,print">
	<LINK REL="StyleSheet" HREF="../../resources/datatables/extras/ColReorder/media/css/ColReorder.css" TYPE="text/css" MEDIA="screen,print">
	<LINK REL="StyleSheet" HREF="../../resources/datatables/extras/ColVis/media/css/ColVis.css" TYPE="text/css" MEDIA="screen,print">
	<LINK REL="StyleSheet" HREF="../../resources/datatables/extras/ColVis/media/css/ColVis.css" TYPE="text/css" MEDIA="screen,print">
	<LINK REL="StyleSheet" HREF="../../resources/datatables/extras/Scroller/media/css/dataTables.scroller.css" TYPE="text/css" MEDIA="screen,print">
	<LINK REL="StyleSheet" HREF="../../resources/datatables/extras/TableTools/media/css/TableTools.css" TYPE="text/css" MEDIA="screen,print">
	<LINK REL="StyleSheet" HREF="../../resources/datatables/extras/TableTools/media/css/TableTools_JUI.css" TYPE="text/css" MEDIA="screen,print">

	<!-- bootstrap-datepicker includes -->
	<LINK REL="StyleSheet" HREF="../../resources/bootstrap-datepicker/css/datepicker.css" TYPE="text/css" MEDIA="screen,print">

	<!-- chosen include -->
	<LINK REL="StyleSheet" HREF="../../resources/chosen/chosen.min.css" TYPE="text/css" MEDIA="screen,print">

	<!-- jQuery include -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

	<script type="text/javascript" src="scripts.js"></script>
	<link href="styles.css" rel="stylesheet" type="text/css" />
	
</head>
<body>
<div class="page-container">

<!-- menu -->
<!--
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
       <div class="container">
            <a class="brand"><img src="images/logo.png" alt="" /><div class="brand-text">PCE Help</div></a>
				<INPUT type="text" style="margin-top:5px;" class="input-medium placeholder input-append" name="searchInput" />
				<BUTTON style="margin-bottom:9px; padding:7px;" class="btn btn-primary" type="submit" onclick="search_start();"><I class="icon-search" ></I></BUTTON>
			   	<ul class="nav pull-right">
					<li><a href="index.php"><i class="icon-home"></i>&nbsp;Home</a></li>
					
					
				</ul>
        </div>
    </div>
</div>
-->
<nav class="navbar navbar-default" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.php">PCE Help</a>
  </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    <ul class="nav navbar-nav">
      <li class=""><a href="../index.php">Admin Panel</a></li>
      <li><a href="../../index.php">Website</a></li>
	  <!--
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
          <li class="divider"></li>
          <li><a href="#">One more separated link</a></li>
        </ul>
      </li>
	  -->
    </ul>
    <form class="navbar-form navbar-left" role="search">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Search">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
	<!--
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Link</a></li>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="#">Action</a></li>
          <li><a href="#">Another action</a></li>
          <li><a href="#">Something else here</a></li>
          <li class="divider"></li>
          <li><a href="#">Separated link</a></li>
        </ul>
      </li>
    </ul>
	-->
  </div><!-- /.navbar-collapse -->
</nav>
				
<!-- end menu -->
	<div id="wrapper">

<div class="labels">body</div>

<!-- Full Page Start -->
 <div id="full">
  <div class="labels">full page</div>
  <!-- Header Start -->
  <div id="header_full">
   <div class="labels">full header</div>
   
    <!-- Floating Header Start -->
    <div id="header_float">
     
 <div class="labels">
  floating header
 </div>
   </div>
    <div class="spacer">
    </div>
    <!-- Floating Header end -->
  </div>
  <div class="spacer">
  </div>
  <!-- Header End -->


  <!-- Body Start -->
  <div id="body_full">
   <div class="labels">full body</div>
   <!-- Floating Body Start -->
   <div id="body_float">
    <div class="labels">floating body</div>
    <div id="navbar">


 <div class="labels">
  left navbar
 </div>
	
<!-- <ul class="level1 nav nav-list" style="display:block;"> -->
<ul class="level1 nav nav-list nav-stacked" style="display:block;">
	<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">Admin Panel Menu</a>
		<div class="description">Description:
		</div>
		<div class="content">
		</div>
		<ul class="level2">
			<li>
				<a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">Site Settings</a>
				<div class="description">description topic 1
				</div>
				<div class="content">content topic 1
				</div>
				<ul class="level3">
					<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">subtopic 1</a>
						<div class="description">Description:
						</div>
						<div class="content">
						</div>
					</li>
					<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">subtopic 2</a>
						<div class="description">Description:
						</div>
						<div class="content">
						</div>
					</li>
				</ul>
			</li>
			<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">Website Layout</a>
				<div class="description">Description:
				</div>
				<div class="content">
				</div>
				<ul class="level3">
					<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">subtopic 1</a>
						<div class="description">Description:
						</div>
						<div class="content">
						</div>
					</li>
				</ul>
			</li>
			<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">Menus</a>
				<div class="description">Description:
				</div>
				<div class="content">
				</div>
				<ul class="level3">
				</ul>
			</li>
			<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">Add/Delete Pages</a>
				<div class="description">Description:
				</div>
				<div class="content">
				</div>
				<ul class="level3">
				</ul>
			</li>	
			<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">Manage Files/Images</a>
				<div class="description">Description:
				</div>
				<div class="content">
				</div>
				<ul class="level3">
				</ul>
			</li>
			<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">Forms</a>
				<div class="description">Description:
				</div>
				<div class="content">
				</div>
				<ul class="level3">
				</ul>
			</li>
			<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">Blog/Comments</a>
				<div class="description">Description:
				</div>
				<div class="content">
				</div>
				<ul class="level3">
				</ul>
			</li>
			<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">Shopping Cart</a>
				<div class="description">Description:
				</div>
				<div class="content">
				</div>
				<ul class="level3">
				</ul>
			</li>			
		</ul>
	</li>

	<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">Modifying Page Content</a>
		<div class="description">Description:
		</div>
		<div class="content">
		</div>
		<ul class="level2">
		</ul>
	</li>	
	<li><a href="javascript:;" onclick="javascript:display(this); toggle_display(this);">Plugins</a>
		<div class="description">Description: many plugins are included with your installation.
		</div>
		<div class="content">
		</div>
		<ul class="level2">
		</ul>
	</li>	
</ul>

	
    </div>
    <div id="page" style="display:block;">
     <div class="labels">page content</div>	 
	 Welcome to the PCE Simple Site. Our goal is to make it as easy as possible for you to create your own website while still allowing the utmost flexibility.  If you have no programming experience whatsoever, you can create a basic site with no coding required.  Advanced users can incorporate php, javascript, jQuery, custom css, and 3rd party plugins into their site with ease.<br /><br />
	 
	 The easiest way to learn how the Simple Site CMS works is to go through each menu option.  We recommend having your admin panel open in one browser window side-by-side with this help site in a separate window.  That way, you can read through the instructions while viewing and experimenting with the site.
	
    </div>
    <div id="navbar_right">
     
 <div class="labels">
  right navbar
 </div>

  </div>
    <div class="spacer">
    </div>
   </div>
   <!-- Floating Body End -->
   <div class="spacer">
   </div>
  </div> 
  <!-- Body End -->

  <!-- Footer Start -->
  <div id="footer_full">
   <div class="labels">full footer</div>
    <!-- Floating Footer Start -->
    <div id="footer_float">
     
 <div class="labels">
  floating footer
 </div>

    </div>
    <div id="linksmenu">
     
 <div class="labels">
  links menu
 </div>

<TABLE valign="top" BORDER="0px" WIDTH="100%" CELLSPACING="0" CELLPADDING="0">
 <tr>
  <td align="center" >
  </td>
 </tr>
 <tr>
  <td>
  </td>
 </tr>
</TABLE>
    </div>
    <div class="spacer">
    </div>
    <!-- Floating Footer end -->
   <div class="spacer">
   </div>
  </div>
  <!-- Footer End -->

 </div>
<!-- Full Page End -->


	</div>
    <footer class="footer">
        <div class="container">
            <p style="text-align:center;">Provided by <a href="http://petercurtisenterprises.com/">Peter Curtis Enterprises</a></p>
        </div>
	</footer>
 
 </div>
 
<!-- bootstrap2 includes -->
<!-- <script type="text/javascript" src="../../resources/bootstrap2/bootstrap/js/bootstrap.min.js"></script> -->

<!-- bootstrap3 includes -->
<script type="text/javascript" src="../../resources/bootstrap3/dist/js/bootstrap.min.js"></script>

<!-- datables includes -->
<script type="text/javascript" src="../../resources/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="../../resources/datatables/extras/AutoFill/media/js/AutoFill.min.js"></script>
<script type="text/javascript" src="../../resources/datatables/extras/ColReorder/media/js/ColReorder.min.js"></script>
<script type="text/javascript" src="../../resources/datatables/extras/ColVis/media/js/ColVis.min.js"></script>
<script type="text/javascript" src="../../resources/datatables/extras/FixedColumns/media/js/FixedColumns.min.js"></script>
<script type="text/javascript" src="../../resources/datatables/extras/FixedHeader/js/FixedHeader.min.js"></script>
<script type="text/javascript" src="../../resources/datatables/extras/KeyTable/js/KeyTable.min.js"></script>
<script type="text/javascript" src="../../resources/datatables/extras/Scroller/media/js/dataTables.scroller.min.js"></script>
<script type="text/javascript" src="../../resources/datatables/extras/TableTools/media/js/TableTools.min.js"></script>
<script type="text/javascript" src="../../resources/datatables/extras/TableTools/media/js/ZeroClipboard.js"></script>

<!-- bootstrap datepicker include -->
<script type="text/javascript" src="../../resources/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

<!-- placeholder include -->
<script type="text/javascript" src="../../resources/placeholder/jquery.placeholder.min.js"></script>

<!-- chosen include -->
<script type="text/javascript" src="../../resources/chosen/chosen.jquery.min.js"></script>

<!-- jQuery Validate include -->
<script type="text/javascript" src="../../resources/jQueryValidate/jquery-validate.min.js"></script> 
	

</body>
</html>