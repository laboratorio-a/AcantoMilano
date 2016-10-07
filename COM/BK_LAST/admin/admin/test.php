<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<?php include("connessione_sql.php"); ?>
<head>
<meta charset="utf-8" />
<title>Webarch - Responsive Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta content="" name="description" />
<meta content="" name="author" />

<!-- BEGIN PLUGIN CSS -->
<link href="assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/bootstrap-tag/bootstrap-tagsinput.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/dropzone/css/dropzone.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/bootstrap-datepicker/css/datepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css" rel="stylesheet" type="text/css" />
<link href="assets/plugins/ios-switch/ios7-switch.css" rel="stylesheet" type="text/css" media="screen" charset="utf-8">
<link href="assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen"/>
<link href="assets/plugins/jquery-slider/css/jquery.sidr.light.css" rel="stylesheet" type="text/css" media="screen"/>
<!-- END PLUGIN CSS -->

<!-- BEGIN CORE CSS FRAMEWORK -->
<link href="assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/boostrapv3/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/animate.min.css" rel="stylesheet" type="text/css"/>
<!-- END CORE CSS FRAMEWORK -->

<!-- BEGIN CSS TEMPLATE -->
<link href="assets/css/style.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css"/>
<link href="assets/css/custom-icon-set.css" rel="stylesheet" type="text/css"/>
<!-- END CSS TEMPLATE -->

<link href="assets/plugins/boostrap-slider/css/slider.css" rel="stylesheet" type="text/css"/>
</head>
<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="">
<!-- BEGIN HEADER -->
<?php include("part/header_top.php"); ?>
  <!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
  <!-- BEGIN SIDEBAR -->
  <div class="page-sidebar" id="main-menu"> 
  <!-- BEGIN MINI-PROFILE -->
   <div class="user-info-wrapper">	
	<div class="profile-wrapper">
		<img src="assets/img/profiles/avatar.jpg" data-src="assets/img/profiles/avatar.jpg" data-src-retina="assets/img/profiles/avatar2x.jpg" width="69" height="69" />
	</div>
    <div class="user-info">
      <div class="greeting">Welcome</div>
      <div class="username">John <span class="semi-bold">Smith</span></div>
      <div class="status">Status<a href="#"><div class="status-icon green"></div>Online</a></div>
    </div>
   </div>
  <!-- END MINI-PROFILE -->
  
  <!-- BEGIN MINI-WIGETS -->

   <!-- END MINI-WIGETS -->
   
   <!-- BEGIN SIDEBAR MENU -->	
	<p class="menu-title">BROWSE <span class="pull-right"><a href="javascript:;"><i class="icon-refresh"></i></a></span></p>
    <ul>	
      <li class="start active "> <a href="index.html"> <i class="icon-custom-home"></i> <span class="title">Dashboard</span> <span class="selected"></span> <span class="badge badge-important pull-right">5</span></a> </li>
	  <li class=""> <a href="email.html"> <i class="icon-envelope"></i> <span class="title">Email</span>  <span class=" badge badge-disable pull-right ">203</span></a> </li>      
      <li class=""> <a href="javascript:;"> <i class="icon-custom-ui"></i> <span class="title">UI Elements</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
		  <li > <a href="typography.html"> Typography </a> </li>
		  <li > <a href="messages_notifications.html"> Messages & Notifications </a> </li>
		   <li > <a href="icons.html">Icons</a> </li>
		   <li > <a href="buttons.html">Buttons</a> </li>		 
          <li > <a href="tabs_accordian.html"> Tabs & Accordions </a> </li>
          <li > <a href="sliders.html">Sliders</a> </li>
          <li > <a href="group_list.html">Group list </a> </li>
        </ul>
      </li>
	  <li class=""> <a href="javascript:;"> <i class="icon-custom-form"></i> <span class="title">Forms</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="form_elements.html">Form Elements </a> </li>
          <li > <a href="form_validations.html">Form Validations</a> </li>
        </ul>
      </li>
      <li class=""> <a href="javascript:;"> <i class="icon-custom-portlets"></i> <span class="title">Grids</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="grids_simple.html">Simple Grids</a> </li>
          <li > <a href="grids_draggable.html">Draggable Grids </a> </li>
        </ul>
      </li>
      <li class=""> <a href="javascript:;"> <i class="icon-custom-thumb"></i> <span class="title">Tables</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="tables.html"> Basic Tables </a> </li>
          <li > <a href="datatables.html"> Data Tables </a> </li>
        </ul>
      </li>
      <li class=""> <a href="javascript:;"> <i class="icon-custom-map"></i> <span class="title">Maps</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="google_map.html"> Google Maps </a> </li>
          <li > <a href="vector_map.html"> Vector Maps </a> </li>
        </ul>
      </li>
      <li class=""> <a href="charts.html"> <i class="icon-custom-chart"></i> <span class="title">Charts</span> </a> </li>    
      <li class=""> <a href="javascript:;"> <i class="icon-custom-extra"></i> <span class="title">Extra</span> <span class="arrow "></span> </a>
        <ul class="sub-menu">
          <li > <a href="user-profile.html"> User Profile </a> </li>
          <li > <a href="gallery.html"> Gallery</a> </li>
		  <li class=""><a href="calender.html"> Calendar</a> </li>
          <li > <a href="search_results.html"> Search Results </a> </li>
          <li > <a href="invoice.html"> Invoice </a> </li>
          <li > <a href="404.html"> 404 Page </a> </li>
          <li > <a href="500.html"> 500 Page </a> </li>
          <li > <a href="blank_template.html"> Blank Page </a> </li>
          <li > <a href="login.html"> Login </a> </li>
          <li > <a href="lockscreen.html"> Lockscreen </a> </li>
        </ul>
      </li>
	  <li class="hidden-lg hidden-md hidden-xs" id="more-widgets" style="display:" > <a href="javascript:;"> <i class="icon-ellipsis-horizontal"></i></a> 
		  <ul class="sub-menu">
		  	<div class="side-bar-widgets">
			<p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
			<ul class="folders" id="folders">
				  <li><a href="#"><div class="status-icon green"></div> My quick tasks </a> </li>
				  <li><a href="#"><div class="status-icon red"></div> To do list </a> </li>
				  <li><a href="#"><div class="status-icon blue"></div> Projects </a> </li>
				  <li id="folder-input" class="folder-input" style="display:none"><input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name"></li>
			</ul>
			<p class="menu-title">PROJECTS </p>
				<div class="status-widget">
					<div class="status-widget-wrapper">
						<div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
						<p>Redesign home page</p>
					</div>
				</div>
				<div class="status-widget">
					<div class="status-widget-wrapper">
						<div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
						<p>Statistical report</p>
					</div>
				</div>
			</div>
		</ul>
	  </li>    
    </ul>
	<div class="side-bar-widgets">
	<p class="menu-title">FOLDER <span class="pull-right"><a href="#" class="create-folder"><i class="icon-plus"></i></a></span></p>
	<ul class="folders" id="folders">
		  <li><a href="#"><div class="status-icon green"></div> My quick tasks </a> </li>
		  <li><a href="#"><div class="status-icon red"></div> To do list </a> </li>
		  <li><a href="#"><div class="status-icon blue"></div> Projects </a> </li>
		  <li id="folder-input" class="folder-input" style="display:none"><input type="text" placeholder="Name of folder" class="no-boarder folder-name" name="" id="folder-name"></li>
	</ul>
	<p class="menu-title">PROJECTS </p>
		<div class="status-widget">
			<div class="status-widget-wrapper">
				<div class="title">Freelancer<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
				<p>Redesign home page</p>
			</div>
		</div>
		<div class="status-widget">
			<div class="status-widget-wrapper">
				<div class="title">envato<a href="#" class="remove-widget"><i class="icon-custom-cross"></i></a></div>
				<p>Statistical report</p>
			</div>
		</div>
	</div>	
	<a href="#" class="scrollup">Scroll</a>
	<div class="clearfix"></div>
    <!-- END SIDEBAR MENU --> 
  </div>
  <div class="footer-widget">		
	<div class="progress transparent progress-small no-radius no-margin">
		<div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>		
	</div>
	<div class="pull-right">
		<div class="details-status">
		<span class="animate-number" data-value="86" data-animation-duration="560">86</span>%
	</div>	
	<a href="lockscreen.html"><i class="icon-off"></i></a></div>
  </div>
  <!-- END SIDEBAR --> 
  <!-- BEGIN PAGE CONTAINER-->
  <div class="page-content"> 
    <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
    <div id="portlet-config" class="modal hide">
      <div class="modal-header">
        <button data-dismiss="modal" class="close" type="button"></button>
        <h3>Widget Settings</h3>
      </div>
      <div class="modal-body"> Widget settings form goes here </div>
    </div>
    <div class="clearfix"></div>
    
    
    <div class="content"> 
    
     <ul class="breadcrumb">
      <li>
        <p>Sezione</p>
      </li>
      <i class="icon-angle-right"></i>
      <li><a class="active"><?php if(empty($_GET["name"])){ echo "home";}elseif($_GET["name"] == "galleryV"){ echo "gallery video";  }elseif($_GET["name"] == "ncategoria"){ echo "nuova categoria";  }else{  echo $_GET["name"]; } ?>  </a> </li>
      <li> <?php if( empty($_GET["ob5"])){ }elseif($_GET["ob5"] == "ok"){ ?><p class="text-success"><i class="icon-angle-right"></i> Aggiornamento completato</p> <?php }else{?> <p class="text-error"> <i class="icon-angle-right"></i>Aggiornamento non riuscito</p> <?php } ?> </li>
    </ul>
    
    <?php 
	     
		
		if(empty($_GET["name"])){
		  
		  include("part/home.php");	
			
	     }elseif( $_GET["name"] == "home"){
			 
			include("part/home.php");	 
		
		 }elseif( $_GET["name"] == "galleryV"){
			 
			include("part/galleryVideo.php");	 
		
		 }elseif( $_GET["name"] == "categorie"){
			 
			include("part/categorie.php");	 
		
		 }elseif( $_GET["name"] == "ncategoria"){
			 
			include("part/ncategoria.php");	 
		
		 }else{
			 
			 
		 }
	  
	
	
	
	?>
    
    </div>
    
    
 </div>
</div>
<!-- BEGIN CHAT -->

<!-- END CHAT -->
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<!-- END FOOTER -->
<!-- BEGIN CORE JS FRAMEWORK-->
<script src="assets/plugins/jquery-1.8.3.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/breakpoints.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>

<!-- END CORE JS FRAMEWORK -->
<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-slider/jquery.sidr.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-numberAnimate/jquery.animateNumbers.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-block-ui/jqueryblockui.js" type="text/javascript"></script> 
<script src="assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-inputmask/jquery.inputmask.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-autonumeric/autoNumeric.js" type="text/javascript"></script>
<script src="assets/plugins/ios-switch/ios7-switch.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-select2/select2.min.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/wysihtml5-0.3.0.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-wysihtml5/bootstrap-wysihtml5.js" type="text/javascript"></script>
<script src="assets/plugins/bootstrap-tag/bootstrap-tagsinput.min.js" type="text/javascript"></script>
<script src="assets/plugins/dropzone/dropzone.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="assets/js/form_elements.js" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="assets/js/core.js" type="text/javascript"></script>
<script src="assets/js/demo.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<!-- END JAVASCRIPTS -->
</body>
</html>