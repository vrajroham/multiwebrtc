<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>MYVIZO : Connect</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="description" content="Avenxo Admin Theme">
    <meta name="author" content="myvizo">

    <link type='text/css' href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600' rel='stylesheet'>

    <link type="text/css" href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet">        <!-- Font Awesome -->
    <link type="text/css" href="assets/fonts/themify-icons/themify-icons.css" rel="stylesheet">              <!-- Themify Icons -->
    <link type="text/css" href="assets/css/styles.css" rel="stylesheet">                                     <!-- Core CSS with all styles -->

    <link type="text/css" href="assets/plugins/codeprettifier/prettify.css" rel="stylesheet">                <!-- Code Prettifier -->
    <link type="text/css" href="assets/plugins/iCheck/skins/minimal/blue.css" rel="stylesheet">              <!-- iCheck -->
    <style type="text/css">
    	video{
    		width: 60%;
    		border-radius: 15px;
    	}
    </style>
    <!--[if lt IE 10]>
        <script type="text/javascript" src="assets/js/media.match.min.js"></script>
        <script type="text/javascript" src="assets/js/respond.min.js"></script>
        <script type="text/javascript" src="assets/js/placeholder.min.js"></script>
    <![endif]-->
    <!-- The following CSS are included as plugins and can be removed if unused-->
    
<link type="text/css" href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet"> 						<!-- FullCalendar -->
<link type="text/css" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"> 			<!-- jVectorMap -->
<link type="text/css" href="assets/plugins/switchery/switchery.css" rel="stylesheet">   							<!-- Switchery -->

<!-- MultiRTC Files-->
<script src="https://cdn.webrtc-experiment.com:443/rmc3.min.js"></script>
<script src="https://cdn.webrtc-experiment.com:443/socket.io.js"></script>

    </head>

    <body class="animated-content">
        
        <header id="topnav" class="navbar navbar-default navbar-fixed-top" role="banner">

	<div class="logo-area">
		<span id="trigger-sidebar" class="toolbar-trigger toolbar-icon-bg">
			<a data-toggle="tooltips" data-placement="right" title="Toggle Sidebar">
				<span class="icon-bg">
					<i class="ti ti-menu"></i>
				</span>
			</a>
		</span>
		
		<a class="navbar-brand" href="index.html">Avenxo</a>

		<div class="toolbar-icon-bg hidden-xs" id="toolbar-search">
            <div class="input-group">
            	<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-search"></i></button></span>
				<input type="text" class="form-control" placeholder="Search...">
				<span class="input-group-btn"><button class="btn" type="button"><i class="ti ti-close"></i></button></span>
			</div>
        </div>

	</div><!-- logo-area -->

	<ul class="nav navbar-nav toolbar pull-right">

		<li class="toolbar-icon-bg visible-xs-block" id="trigger-toolbar-search">
			<a href="#"><span class="icon-bg"><i class="ti ti-search"></i></span></a>
		</li>
        

        <li class="toolbar-icon-bg hidden-xs" id="trigger-fullscreen">
            <a href="#" class="toggle-fullscreen"><span class="icon-bg"><i class="ti ti-fullscreen"></i></span></i></a>
        </li>

		
{{-- 		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="hasnotifications dropdown-toggle" data-toggle='dropdown'><span class="icon-bg"><i class="ti ti-bell"></i></span><span class="badge badge-deeporange">2</span></a>
			<div class="dropdown-menu notifications arrow">
				<div class="topnav-dropdown-header">
					<span>Notifications</span>
				</div>
				<div class="scroll-pane">
					<ul class="media-list scroll-content">
						<li class="media notification-success">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
						<li class="media notification-info">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Update 1.0.3 successfully pushed</h4>
									<span class="notification-time">24 mins ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-teal">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Update 1.0.2 successfully pushed</h4>
									<span class="notification-time">16 hours ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-indigo">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-check"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Update 1.0.1 successfully pushed</h4>
									<span class="notification-time">2 days ago</span>
								</div>
							</a>
						</li>
						<li class="media notification-danger">
							<a href="#">
								<div class="media-left">
									<span class="notification-icon"><i class="ti ti-arrow-up"></i></span>
								</div>
								<div class="media-body">
									<h4 class="notification-heading">Initial Release 1.0</h4>
									<span class="notification-time">4 days ago</span>
								</div>
							</a>
						</li>
					</ul>
				</div>
				<div class="topnav-dropdown-footer">
					<a href="#">See all notifications</a>
				</div>
			</div>
		</li>

 --}}		<li class="dropdown toolbar-icon-bg">
			<a href="#" class="dropdown-toggle username" data-toggle="dropdown">
				<img class="img-circle" src="assets/img/vraj.jpg" alt="" />
			</a>
			<ul class="dropdown-menu userinfo arrow">
				<li><a href="#/"><i class="ti ti-money"></i><span>Withdrawals</span></a></li>
				<li class="divider"></li>
				<li><a href="#/"><i class="ti ti-shift-right"></i><span>Sign Out</span></a></li>
			</ul>
		</li>

	</ul>

</header>

        <div id="wrapper">
            <div id="layout-static">
                <div class="static-sidebar-wrapper sidebar-default">
                    <div class="static-sidebar">
                        <div class="sidebar">
	<div class="widget">
        <div class="widget-body">
            <div class="userinfo">
                <div class="avatar">
                    <img src="assets/img/vraj.jpg" class="img-responsive img-circle"> 
                </div>
                <div class="info">
                    <span class="username">Vaibhavraj</span>
                    <span class="useremail">vaibhavraj.roham@myvizo.com</span>
                </div>
            </div>
        </div>
    </div>
	<div class="widget stay-on-collapse" id="widget-sidebar">
        <nav role="navigation" class="widget-body">
	<ul class="acc-menu">
		<li class="nav-separator"><span>Explore</span></li>
		<li><a href="index.html"><i class="ti ti-home"></i><span>Dashboard</span><span class="badge badge-teal">2</span></a></li>
		<li><a href="angular/app/"><i class="ti ti-shield"></i><span>AngularJS</span></span></a></li>
		<li><a href="javascript:;"><i class="ti ti-layout"></i><span>Layout</span></a>
			<ul class="acc-menu">
				<li><a href="layout-grids.html">Grid Scaffolding</a></li>
				<li><a href="layout-static-leftbar.html">Static Sidebar</a></li>
				<li><a href="layout-sidebar-scroll.html">Scroll Sidebar</a></li>
				<li><a href="layout-horizontal.html">Horizontal Nav</a></li>
				<li><a href="layout-boxed.html">Boxed</a></li>	
			</ul>
		</li>
	</ul>
</nav>
    </div>
    
</div>
                    </div>
                </div>
                <div class="static-content-wrapper">
                    <div class="static-content">
                        <div class="page-content">
                            <ol class="breadcrumb">
                                
<li class=""><a href="index.html">Home</a></li>
<li class="active"><a href="index.html">Dashboard</a></li>

                            </ol>
                            <div class="container-fluid">
                                

<div data-widget-group="group1">
<div class="row">
	<div class="col-md-12">
		<button class="btn btn-primary" id="open-or-join-room">
			Open or Join Room
		</button>
	</div>
</div>
<hr>
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-info" data-widget='{"id" : "wiget9", "draggable": "false"}'>
				<div class="panel-heading">
					<h2>My Stream</h2>
					<div class="panel-ctrls button-icon-bg" 
						data-actions-container="" 
						data-action-collapse='{"target": ".panel-body"}'
						data-action-colorpicker=''
						data-action-refresh-demo='{"type": "circular"}'
						>
					</div>
				</div>
				<div class="panel-editbox" data-widget-controls=""></div>
				<div class="panel-body">
					<div id="local-stream"></div>
				</div>
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-info" data-widget='{"id" : "wiget10", "draggable": "false"}'>
				<div class="panel-heading">
					<h2>Remote Stream </h2>
					<div class="panel-ctrls button-icon-bg" 
						data-actions-container="" 
						data-action-collapse='{"target": ".panel-body"}'
						data-action-colorpicker=''
						data-action-refresh-demo='{"type": "circular"}'
						>
					</div>
				</div>
				<div class="panel-editbox" data-widget-controls=""></div>
				<div class="panel-body">
					
						<div id="remote-stream"></div>	
					
				</div>
			</div>
		</div>
	</div>
</div>

                            </div> <!-- .container-fluid -->
                        </div> <!-- #page-content -->
                    </div>
                    <footer role="contentinfo">
    <div class="clearfix">
        <ul class="list-unstyled list-inline pull-left">
            <li><h6 style="margin: 0;">&copy; 2015 Avenxo</h6></li>
        </ul>
        <button class="pull-right btn btn-link btn-xs hidden-print" id="back-to-top"><i class="ti ti-arrow-up"></i></button>
    </div>
</footer>

                </div>
            </div>
        </div>

    
   {{--  <!-- Switcher -->
    <div class="demo-options">
        <div class="demo-options-icon"><i class="ti ti-paint-bucket"></i></div>
        <div class="demo-heading">Demo Settings</div>

        <div class="demo-body">
            <div class="tabular">
                <div class="tabular-row">
                    <div class="tabular-cell">Fixed Header</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" checked data-size="mini" data-on-color="success" data-off-color="default" name="demo-fixedheader" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Boxed Layout</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-boxedlayout" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
                <div class="tabular-row">
                    <div class="tabular-cell">Collapse Leftbar</div>
                    <div class="tabular-cell demo-switches"><input class="bootstrap-switch" type="checkbox" data-size="mini" data-on-color="success" data-off-color="default" name="demo-collapseleftbar" data-on-text="&nbsp;" data-off-text="&nbsp;"></div>
                </div>
            </div>
        </div>

        <div class="demo-body">
            <div class="option-title">Topnav</div>
            <ul id="demo-header-color" class="demo-color-list">
                <li><span class="demo-cyan"></span></li>
                <li><span class="demo-light-blue"></span></li>
                <li><span class="demo-blue"></span></li>
                <li><span class="demo-indigo"></span></li>
                <li><span class="demo-deep-purple"></span></li> 
                <li><span class="demo-purple"></span></li> 
                <li><span class="demo-pink"></span></li> 
                <li><span class="demo-red"></span></li>
                <li><span class="demo-teal"></span></li>
                <li><span class="demo-green"></span></li>
                <li><span class="demo-light-green"></span></li>
                <li><span class="demo-lime"></span></li>
                <li><span class="demo-yellow"></span></li>
                <li><span class="demo-amber"></span></li>
                <li><span class="demo-orange"></span></li>               
                <li><span class="demo-deep-orange"></span></li>
                <li><span class="demo-midnightblue"></span></li>
                <li><span class="demo-bluegray"></span></li>
                <li><span class="demo-bluegraylight"></span></li>
                <li><span class="demo-black"></span></li> 
                <li><span class="demo-gray"></span></li> 
                <li><span class="demo-graylight"></span></li> 
                <li><span class="demo-default"></span></li>
                <li><span class="demo-brown"></span></li>
            </ul>
        </div>

        <div class="demo-body">
            <div class="option-title">Sidebar</div>
            <ul id="demo-sidebar-color" class="demo-color-list">
                <li><span class="demo-cyan"></span></li>
                <li><span class="demo-light-blue"></span></li>
                <li><span class="demo-blue"></span></li>
                <li><span class="demo-indigo"></span></li>
                <li><span class="demo-deep-purple"></span></li> 
                <li><span class="demo-purple"></span></li> 
                <li><span class="demo-pink"></span></li> 
                <li><span class="demo-red"></span></li>
                <li><span class="demo-teal"></span></li>
                <li><span class="demo-green"></span></li>
                <li><span class="demo-light-green"></span></li>
                <li><span class="demo-lime"></span></li>
                <li><span class="demo-yellow"></span></li>
                <li><span class="demo-amber"></span></li>
                <li><span class="demo-orange"></span></li>               
                <li><span class="demo-deep-orange"></span></li>
                <li><span class="demo-midnightblue"></span></li>
                <li><span class="demo-bluegray"></span></li>
                <li><span class="demo-bluegraylight"></span></li>
                <li><span class="demo-black"></span></li> 
                <li><span class="demo-gray"></span></li> 
                <li><span class="demo-graylight"></span></li> 
                <li><span class="demo-default"></span></li>
                <li><span class="demo-brown"></span></li>
            </ul>
        </div>



    </div>
<!-- /Switcher --> --}}
    <!-- Load site level scripts -->

<!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script> -->

<script type="text/javascript" src="assets/js/jquery-1.10.2.min.js"></script> 							<!-- Load jQuery -->
<script type="text/javascript" src="assets/js/jqueryui-1.10.3.min.js"></script> 							<!-- Load jQueryUI -->
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 								<!-- Load Bootstrap -->
<script type="text/javascript" src="assets/js/enquire.min.js"></script> 									<!-- Load Enquire -->

<script type="text/javascript" src="assets/plugins/velocityjs/velocity.min.js"></script>					<!-- Load Velocity for Animated Content -->
<script type="text/javascript" src="assets/plugins/velocityjs/velocity.ui.min.js"></script>

<script type="text/javascript" src="assets/plugins/wijets/wijets.js"></script>     						<!-- Wijet -->

<script type="text/javascript" src="assets/plugins/codeprettifier/prettify.js"></script> 				<!-- Code Prettifier  -->
<script type="text/javascript" src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script> 		<!-- Swith/Toggle Button -->

<script type="text/javascript" src="assets/plugins/bootstrap-tabdrop/js/bootstrap-tabdrop.js"></script>  <!-- Bootstrap Tabdrop -->

<script type="text/javascript" src="assets/plugins/iCheck/icheck.min.js"></script>     					<!-- iCheck -->

<script type="text/javascript" src="assets/plugins/nanoScroller/js/jquery.nanoscroller.min.js"></script> <!-- nano scroller -->

<script type="text/javascript" src="assets/js/application.js"></script>
<script type="text/javascript" src="assets/demo/demo.js"></script>
<script type="text/javascript" src="assets/demo/demo-switcher.js"></script>

<!-- End loading site level scripts -->
    
    <!-- Load page level scripts-->
    
<!-- Charts -->
<script type="text/javascript" src="assets/plugins/charts-flot/jquery.flot.min.js"></script>             	<!-- Flot Main File -->
<script type="text/javascript" src="assets/plugins/charts-flot/jquery.flot.pie.min.js"></script>             <!-- Flot Pie Chart Plugin -->
<script type="text/javascript" src="assets/plugins/charts-flot/jquery.flot.stack.min.js"></script>       	<!-- Flot Stacked Charts Plugin -->
<script type="text/javascript" src="assets/plugins/charts-flot/jquery.flot.orderBars.min.js"></script>   	<!-- Flot Ordered Bars Plugin-->
<script type="text/javascript" src="assets/plugins/charts-flot/jquery.flot.resize.min.js"></script>          <!-- Flot Responsive -->
<script type="text/javascript" src="assets/plugins/charts-flot/jquery.flot.tooltip.min.js"></script> 		<!-- Flot Tooltips -->
<script type="text/javascript" src="assets/plugins/charts-flot/jquery.flot.spline.js"></script> 				<!-- Flot Curved Lines -->

<script type="text/javascript" src="assets/plugins/sparklines/jquery.sparklines.min.js"></script> 			 <!-- Sparkline -->

<script type="text/javascript" src="assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>       <!-- jVectorMap -->
<script type="text/javascript" src="assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>   <!-- jVectorMap -->

<script type="text/javascript" src="assets/plugins/switchery/switchery.js"></script>     					<!-- Switchery -->
<script type="text/javascript" src="assets/plugins/easypiechart/jquery.easypiechart.js"></script>
<script type="text/javascript" src="assets/plugins/fullcalendar/moment.min.js"></script> 		 			<!-- Moment.js Dependency -->
<script type="text/javascript" src="assets/plugins/fullcalendar/fullcalendar.min.js"></script>   			<!-- Calendar Plugin -->



    <!-- End loading page level scripts-->

    <!-- MultiRTC scripts-->
    <script type="text/javascript">
    	var connection=new RTCMultiConnection();
    	connection.session={
    		audio : true,
    		video : true
    	};
    	connection.sdpConstraints.mandatory={
    		OfferToReceiveVideo : true,
    		OfferToReceiveAudio : true,
    	};
    	connection.socketURL = 'https://rtcmulticonnection.herokuapp.com:443/';
    	document.getElementById('open-or-join-room').onclick=function(){
    		this.disabled=true;
    		connection.openOrJoin('myroom');
    	};
    	var lc=document.getElementById('local-stream');
    	var rc=document.getElementById('remote-stream');
    	connection.onstream=function (event) {

    		var video=event.mediaElement;
    		if(event.type === "local")
    			lc.appendChild(video);

    		if (event.type === "remote")
    			rc.appendChild(video);
    	}
    </script>
    <!-- End MultiRTC scripts-->

    </body>
</html>
