<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Administraci&oacute;n</title>
	<meta name="description" content="Perfectum Dashboard Bootstrap Admin Template.">
	<meta name="author" content="Łukasz Holeczek">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	
	<!-- bootstrap -->
	<link href="<?php echo base_url(); ?>static/assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- page css files -->
	<link href="<?php echo base_url(); ?>static/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>static/assets/css/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>static/assets/css/fullcalendar.css" rel="stylesheet">	
	<link href="<?php echo base_url(); ?>static/assets/css/jquery.gritter.css" rel="stylesheet">	
	
	<!-- main style -->
	<link href="<?php echo base_url(); ?>static/assets/css/style.min.css" rel="stylesheet">

	<!--[if lt IE 9 ]>
		<link href="<?php echo base_url(); ?>static/assets/css/style-ie.css" rel="stylesheet">
	<![endif]-->
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
		
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="<?php echo base_url(); ?>static/assets/js/respond.min.js"></script>
		
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="http://localhost:8888/bootstrap/perfectum2/img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
	
	<!-- start: Header -->
	<div class="navbar">
		<div class="container">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".sidebar-nav.nav-collapse">
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="index.html"> <img alt="Perfectum Dashboard" src="<?php echo base_url(); ?>static/assets/img/logo20.png" /> <span>Perfectum</span></a>
							
			<!-- start: Header Menu -->
			<div class="header-nav">
				<ul class="nav navbar-nav pull-right">
					
					
					<li>
						<a class="btn" href="index.html#">
							<i class="fa fa-wrench"></i>
						</a>
					</li>
					<!-- start: User Dropdown -->
					<li class="dropdown hidden-xs">
						<a class="btn dropdown-toggle" data-toggle="dropdown" href="index.html#">
							<i class="fa fa-user"></i>
							<span class="caret"></span>
						</a>
						<ul class="dropdown-menu">
							<li><a href="index.html#"><i class="fa fa-user"></i> <?php echo $nombre_usuario;  ?></a></li>
							<li><a href="<?php echo base_url(); ?>index.php/auth/logout"><i class="fa fa-off"></i> Salir</a></li>
						</ul>
					</li>
					<!-- end: User Dropdown -->
				</ul>
			</div>
			<!-- end: Header Menu -->
			
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container">
		<div class="row">
					<!-- start: Main Menu -->
			<div class="col-sm-2 main-menu-span">
				<div class="sidebar-nav nav-collapse collapse navbar-collapse">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="index.html"><i class="fa fa-home icon"></i><span class="hidden-sm"> Usuarios</span></a></li>
						<li><a href="ui.html"><i class="fa fa-eye"></i><span class="hidden-sm"> Nuevo Usuario</span></a></li>
						<li><a href="forms.html"><i class="fa fa-edit"></i><span class="hidden-sm"> Modificar Permisos</span></a></li>
						
						<li><a href="login.html"><i class="fa fa-lock"></i><span class="hidden-sm"> Salir</span></a></li>
					</ul>
				</div><!--/.well -->
			</div><!--/col-->
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block col-sm-10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<div id="content" class="col-sm-10">
			<!-- start: Content -->
			
			<div>
				<hr>
				<ul class="breadcrumb">
					<li><a href="index.html#">Home</a></li>
					<li><a href="index.html#">Dashboard</a></li>
				</ul>
				<hr>
			</div>
			
			<div class="row circleStats">
				
				<div class="col-md-2 col-sm-4 col-xs-6">
                	<div class="circleStatsItem red">
						<i class="fa  fa-thumbs-up"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<input type="text" value="58" class="orangeCircle" />
                	</div>
					<div class="box-small-title">User satisfaction</div>
				</div><!--/col-->
				
				<div class="col-md-2 col-sm-4 col-xs-6">
                	<div class="circleStatsItem blue">
                    	<i class="fa  fa-bullhorn"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<input type="text" value="8" class="blueCircle" />
                	</div>
					<div class="box-small-title">Popularity</div>
				</div><!--/col-->
				
				<div class="col-md-2 col-sm-4 col-xs-6">
					<div class="circleStatsItem yellow">
                    	<i class="fa  fa-user"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<input type="text" value="12" class="yellowCircle" />
                	</div>
					<div class="box-small-title">New users</div>
				</div><!--/col-->
				
				<div class="col-md-2 col-sm-4 col-xs-6">
					<div class="circleStatsItem pink">
                    	<i class="fa  fa-globe"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<input type="text" value="23" class="pinkCircle" />
                	</div>
					<div class="box-small-title">Visits</div>
				</div><!--/col-->
				
				<div class="col-md-2 col-sm-4 col-xs-6">
                	<div class="circleStatsItem green">
                    	<i class="fa  fa-bar-chart-o"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<input type="text" value="34" class="greenCircle" />
                	</div>
					<div class="box-small-title">Income</div>
				</div><!--/col-->
				
				<div class="col-md-2 col-sm-4 col-xs-6">
					<div class="circleStatsItem lightorange">
                    	<i class="fa  fa-shopping-cart"></i>
						<span class="plus">+</span>
						<span class="percent">%</span>
                    	<input type="text" value="42" class="lightOrangeCircle" />
                	</div>
					<div class="box-small-title">Sales</div>
				</div><!--/col-->

			</div><!--/row-->
			
			<hr>
			
			<div class="row">
				
				<div class="col-md-8 col-sm-12">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-signal"></i><span class="break"></span>Site Statistics</h2>
							<div class="box-icon">
								<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<div id="stats-chart"  class="center" style="height:300px" ></div>
						</div>
					</div>
				</div>	
				
				<div class="col-md-4 col-sm-12">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-list"></i><span class="break"></span>Weekly Stat</h2>
							<div class="box-icon">
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<div class="sparkLineStats">

		                        <ul class="unstyled">
		                            <li>
										<span class="sparkLineStats1 "></span> 
										Visits: 
										<span class="number">356</span>
									</li>
		                            <li>
		                                <span class="sparkLineStats2"></span>
		                                Unique Visitors: 
		                                <span class="number">252</span>
		                            </li>
		                            <li><span class="sparkLineStats3"></span> 
		                                Pageviews: 
		                                <span class="number">781</span>
		                            </li>
		                            <li><span class="sparkLineStats4"></span>
		                                Pages / Visit: 
		                                <span class="number">2,19</span>
		                            </li>
		                            <li><span class="sparkLineStats5"></span>
		                                Avg. Visit Duration: 
		                                <span class="number">00:02:58</span>
		                            </li>
		                            <li><span class="sparkLineStats6"></span>
		                                Bounce Rate: <span class="number">59,83%</span>
		                            </li>
		                            <li><span class="sparkLineStats7"></span>
		                                % New Visits: 
		                                <span class="number">70,79%</span>
		                            </li>
		                            <li><span class="sparkLineStats8"></span>
		                                % Returning Visitor: 
		                                <span class="number">29,21%</span>
		                            </li>

		                        </ul>

		                    </div><!-- End .sparkStats -->
						</div>
					</div>
						
				</div><!--/col-->
					
			</div><!--/row-->
			
			<hr>
			
			<div class="row">
				
				<div class="col-sm-2 col-xs-6">
					<a class="quick-button">
						<i class="fa  fa-group"></i>
						<p>Users</p>
						<span class="notification">1.367</span>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-xs-6">
					<a class="quick-button">
						<i class="fa  fa-comments-o"></i>
						<p>Comments</p>
						<span class="notification green">167</span>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-xs-6">
					<a class="quick-button">
						<i class="fa  fa-shopping-cart"></i>
						<p>Orders</p>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-xs-6">
					<a class="quick-button">
						<i class="fa  fa-barcode"></i>
						<p>Products</p>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-xs-6">
					<a class="quick-button">
						<i class="fa  fa-envelope"></i>
						<p>Messages</p>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-xs-6">
					<a class="quick-button">
						<i class="fa  fa-calendar"></i>
						<p>Calendar</p>
						<span class="notification red">68</span>
					</a>
				</div><!--/col-->
				
			</div><!--/row-->
			
			<hr>
			
			<div class="row">
				
				<div class="col-md-4 col-sm-6">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-fire"></i><span class="break"></span>Server Load</h2>
							<div class="box-icon">
								<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							 <div id="serverload" style="height:235px;"></div>
						</div>
					</div>
				</div><!--/col-->
				
				<div class="col-md-4 col-sm-6">
					<div class="box span4" onTablet="span6" onDesktop="span4">
						<div class="box-header">
							<h2><i class="fa fa-tasks"></i><span class="break"></span>Tasks in Progress</h2>
							<div class="box-icon">
								<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<div class="progressBarValue">
								<span>iOS App Development</span> <span class="progressCustomValueVal">20</span>
								<div class="progressSlim progressCustomValue progressRed"></div>
							</div>
							<div class="progressBarValue">
								<span>Android App Development</span> <span class="progressCustomValueVal">40</span>
								<div class="progressSlim progressCustomValue progressOrange"></div>
							</div>
							<div class="progressBarValue">
								<span>A/B Tests</span> <span class="progressCustomValueVal">60</span>
								<div class="progressSlim progressCustomValue progressYellow"></div>
							</div>
							<div class="progressBarValue">
								<span>Server Load Tests</span> <span class="progressCustomValueVal">80</span>
								<div class="progressSlim progressCustomValue progressGreen"></div>
							</div>
							<div class="progressBarValue">
								<span>Django Backend Development</span> <span class="progressCustomValueVal">100</span>
								<div class="progressSlim progressCustomValue progressBlue"></div>
							</div>
						</div>
					</div>
				</div><!--/col-->
				
				<div class="col-md-4 col-sm-6">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-check"></i><span class="break"></span>To Do List</h2>
							<div class="box-icon">
								<a href="index.html#" class="btn-setting"><i class="fa fa-wrench"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<div class="todo">
								<ul class="todo-list">
									<li>
										Windows Phone 8 App <span class="label label-important">today</span>
															<span class="todo-actions">
																<a href="index.html#"><i class="fa fa-check"></i></a>
																<a href="index.html#" class="todo-remove"><i class="fa fa-times"></i></a>
															</span>
									</li>
									<li>New frontend layout <span class="label label-important">today</span>
														<span class="todo-actions">
															<a href="index.html#"><i class="fa fa-check"></i></a>
															<a href="index.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>Hire developers <span class="label label-warning">tommorow</span>
														<span class="todo-actions">
															<a href="index.html#"><i class="fa fa-check"></i></a>
															<a href="index.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>Windows Phone 8 App <span class="label label-warning">tommorow</span>
														<span class="todo-actions">
															<a href="index.html#"><i class="fa fa-check"></i></a>
															<a href="index.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>New frontend layout <span class="label label-success">this week</span>
														<span class="todo-actions">
															<a href="index.html#"><i class="fa fa-check"></i></a>
															<a href="index.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>Hire developers <span class="label label-success">this week</span>
														<span class="todo-actions">
															<a href="index.html#"><i class="fa fa-check"></i></a>
															<a href="index.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>New frontend layout <span class="label label-info">this month</span>
														<span class="todo-actions">
															<a href="index.html#"><i class="fa fa-check"></i></a>
															<a href="index.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
									<li>Hire developers <span class="label label-info">this month</span>
														<span class="todo-actions">
															<a href="index.html#"><i class="fa fa-check"></i></a>
															<a href="index.html#" class="todo-remove"><i class="fa fa-times"></i></a>
														</span>
									</li>
								</ul>
							</div>	
						</div>
					</div>	
				</div><!--/col-->	
			
			</div><!--/row-->
			
			<hr>
			
			<div class="row">
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1">
						<i class="fa  fa-group"></i>
						<p>Users</p>
						<span class="notification">7</span>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1">
						<i class="fa  fa-comments-o"></i>
						<p>Comments</p>
						<span class="notification green">4</span>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1">
						<i class="fa  fa-shopping-cart"></i>
						<p>Orders</p>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1">
						<i class="fa  fa-barcode"></i>
						<p>Products</p>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1">
						<i class="fa  fa-envelope"></i>
						<p>Messages</p>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1">
						<i class="fa  fa-calendar"></i>
						<p>Calendar</p>
						<span class="notification red">8</span>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1 noMargin">
						<i class="fa  fa-bars"></i>
						<p>Projects</p>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1">
						<i class="fa  fa-thumbs-up"></i>
						<p>Likes</p>
						<span class="notification green">+ 11</span>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1">
						<i class="fa  fa-heart-o"></i>
						<p>Favorites</p>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1">
						<i class="fa  fa-bullhorn"></i>
						<p>Notifications</p>
						<span class="notification yellow">7</span>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1">
						<i class="fa  fa-cogs"></i>
						<p>Settings</p>
					</a>
				</div><!--/col-->
				
				<div class="col-sm-2 col-md-1 col-xs-3">
					<a class="quick-button-small span1">
						<i class="fa  fa-dashboard"></i>
						<p>Dashboard</p>
					</a>
				</div><!--/col-->
				
			</div><!--/row-->	
			
			<hr>
			
			<div class="row">
				
				<div class="col-md-8 col-sm-12">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-calendar"></i><span class="break"></span>Calendar</h2>
						</div>
						<div class="box-content">
							<div id="main_calendar" class="hidden-xs"></div>
							<div id="main_calendar_phone" class="hidden-sm hidden-md hidden-lg"></div>
							<div class="clearfix"></div>
						</div>
					</div>	
				</div><!--/col-->
				
				<div class="col-md-4 col-sm-12">
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-list"></i><span class="break"></span>Support tickets</h2>
							<div class="box-icon">
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<ul class="tickets">
								<li class="ticket">
									<a href="index.html#">
										<span class="header">
											<span class="title">Server unavaible</span>
											<span class="number">[ #199278 ]</span>
										</span>	
										<span class="content">
											<span class="avatar"><img src="<?php echo base_url(); ?>static/assets/img/avatar6.jpg" alt="Avatar"></span>
											<span class="name">Ashley Tan</span>
											<span class="priority blue">[ Low priority ]</span>
											<span class="status">Status: <span class="green">[ Complete ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>	                                                        
									</a>
								</li>
							  	<li class="ticket">
									<a href="index.html#">
										<span class="header">
											<span class="title">Mobile App Problem</span>
											<span class="number">[ #199277 ]</span>
										</span>	
										<span class="content">
											<span class="avatar"><img src="<?php echo base_url(); ?>static/assets/img/avatar7.jpg" alt="Avatar"></span>
											<span class="name">Ann Kovalsky</span>
											<span class="priority yellow">[ Normal priority ]</span>
											<span class="status">Status: <span class="yellow">[ Pending ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>	                                                        
									</a>
								</li>
								<li class="ticket">
									<a href="index.html#">
										<span class="header">
											<span class="title">PayPal issue</span>
											<span class="number">[ #199276 ]</span>
										</span>	
										<span class="content">
											<span class="avatar"><img src="<?php echo base_url(); ?>static/assets/img/avatar8.jpg" alt="Avatar"></span>
											<span class="name">Chris Dan</span>
											<span class="priority red">[ High priority ]</span>
											<span class="status">Status: <span class="blue">[ In progress ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>	                                                        
									</a>
								</li>
								<li class="ticket">
									<a href="index.html#">
										<span class="header">
											<span class="title">IE7 problem</span>
											<span class="number">[ #199275 ]</span>
										</span>	
										<span class="content">
											<span class="avatar"><img src="<?php echo base_url(); ?>static/assets/img/avatar9.jpg" alt="Avatar"></span>
											<span class="name">John Grand</span>
											<span class="priority blue">[ Low priority ]</span>
											<span class="status">Status: <span class="red">[ Rejected ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>	                                                        
									</a>
								</li>
								<li class="ticket">
									<a href="index.html#">
										<span class="header">
											<span class="title">Server unavaible</span>
											<span class="number">[ #199274 ]</span>
										</span>	
										<span class="content">
											<span class="avatar"><img src="<?php echo base_url(); ?>static/assets/img/avatar2.jpg" alt="Avatar"></span>
											<span class="name">Agnes Young</span>
											<span class="priority blue">[ Low priority ]</span>
											<span class="status">Status: <span class="green">[ Complete ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>	                                                        
									</a>
								</li>
							  	<li class="ticket">
									<a href="index.html#">
										<span class="header">
											<span class="title">Mobile App Problem</span>
											<span class="number">[ #199273 ]</span>
										</span>	
										<span class="content">
											<span class="avatar"><img src="<?php echo base_url(); ?>static/assets/img/avatar3.jpg" alt="Avatar"></span>
											<span class="name">Melanie Brown</span>
											<span class="priority yellow">[ Normal priority ]</span>
											<span class="status">Status: <span class="yellow">[ Pending ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>	                                                        
									</a>
								</li>
								<li class="ticket">
									<a href="index.html#">
										<span class="header">
											<span class="title">PayPal issue</span>
											<span class="number">[ #199272 ]</span>
										</span>	
										<span class="content">
											<span class="avatar"><img src="<?php echo base_url(); ?>static/assets/img/avatar4.jpg" alt="Avatar"></span>
											<span class="name">Patricia Doyle</span>
											<span class="priority red">[ High priority ]</span>
											<span class="status">Status: <span class="blue">[ In progress ]</span></span>
											<span class="date">Jul 25, 2012 11:09</span>
										</span>	                                                        
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div><!--/col-->
			
			</div><!--/row-->
				
			<hr>

			<div class="row">
				
				<div class="col-md-4 col-sm-6">	
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-list"></i><span class="break"></span>Weekly Stat</h2>
							<div class="box-icon">
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<ul class="dashboard-list">
								<li>
									<a href="index.html#">
										<i class="fa  fa-arrow-up green"></i>                               
										<span class="green">92</span>
										New Comments                                    
									</a>
								</li>
							  <li>
								<a href="index.html#">
								  <i class="fa  fa-arrow-down red"></i>
								  <span class="red">15</span>
								  New Registrations
								</a>
							  </li>
							  <li>
								<a href="index.html#">
								  <i class="fa  fa-minus blue"></i>
								  <span class="blue">36</span>
								  New Articles                                    
								</a>
							  </li>
							  <li>
								<a href="index.html#">
								  <i class="fa  fa-comment yellow"></i>
								  <span class="yellow">45</span>
								  User reviews                                    
								</a>
							  </li>
							  <li>
								<a href="index.html#">
								  <i class="fa  fa-arrow-up green"></i>                               
								  <span class="green">112</span>
								  New Comments                                    
								</a>
							  </li>
							  <li>
								<a href="index.html#">
								  <i class="fa  fa-arrow-down red"></i>
								  <span class="red">31</span>
								  New Registrations
								</a>
							  </li>
							  <li>
								<a href="index.html#">
								  <i class="fa  fa-minus blue"></i>
								  <span class="blue">93</span>
								  New Articles                                    
								</a>
							  </li>
							  <li>
								<a href="index.html#">
								  <i class="fa  fa-comment yellow"></i>
								  <span class="yellow">254</span>
								  User reviews                                    
								</a>
							  </li>
							</ul>
						</div>
					</div>
				</div><!--/col-->
				
				<div class="col-md-4 col-sm-6">	
					<div class="box span4" onTablet="span6" onDesktop="span4">
						<div class="box-header">
							<h2><i class="fa fa-user"></i><span class="break"></span>Last Users</h2>
							<div class="box-icon">
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<ul class="dashboard-list">
								<li>
									<a href="index.html#">
										<img class="avatar" alt="Lucas" src="<?php echo base_url(); ?>static/assets/img/avatar.jpg">
									</a>
									<strong>Name:</strong> <a href="index.html#">Łukasz Holeczek</a><br>
									<strong>Since:</strong> Jul 25, 2012 11:09<br>
									<strong>Status:</strong> <span class="label label-success">Approved</span>                                  
								</li>
								<li>
									<a href="index.html#">
										<img class="avatar" alt="Bill" src="<?php echo base_url(); ?>static/assets/img/avatar9.jpg">
									</a>
									<strong>Name:</strong> <a href="index.html#">Bill Cole</a><br>
									<strong>Since:</strong> Jul 25, 2012 11:09<br>
									<strong>Status:</strong> <span class="label label-warning">Pending</span>                                 
								</li>
								<li>
									<a href="index.html#">
										<img class="avatar" alt="Jane" src="<?php echo base_url(); ?>static/assets/img/avatar5.jpg">
									</a>
									<strong>Name:</strong> <a href="index.html#">Jane Sanchez</a><br>
									<strong>Since:</strong> Jul 25, 2012 11:09<br>
									<strong>Status:</strong> <span class="label label-important">Banned</span>                                  
								</li>
								<li>
									<a href="index.html#">
										<img class="avatar" alt="Kate" src="<?php echo base_url(); ?>static/assets/img/avatar6.jpg">
									</a>
									<strong>Name:</strong> <a href="index.html#">Kate Presley</a><br>
									<strong>Since:</strong> Jul 25, 2012 11:09<br>
									<strong>Status:</strong> <span class="label label-info">Updates</span>                                  
								</li>
							</ul>
						</div>
					</div>
				</div><!--/col-->
				
				<div class="col-md-4 col-sm-12">	
					<div class="box">
						<div class="box-header">
							<h2><i class="fa fa-comment"></i><span class="break"></span>Chats</h2>
							<div class="box-icon">
								<a href="index.html#" class="btn-minimize"><i class="fa fa-chevron-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="fa fa-times"></i></a>
							</div>
						</div>
						<div class="box-content">
							<ul class="chat">
								<li class="left">
									<img class="avatar" alt="Lucas" src="<?php echo base_url(); ?>static/assets/img/avatar.jpg">
									<span class="message"><span class="arrow"></span>
										<span class="from">Łukasz Holeczek</span>
										<span class="time">Jul 25, 2012 11:09</span>
										<span class="text">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</span>
									</span>	                                  
								</li>
								<li class="right">
									<img class="avatar" alt="Lucas" src="<?php echo base_url(); ?>static/assets/img/avatar.jpg">
									<span class="message"><span class="arrow"></span>
										<span class="from">Łukasz Holeczek</span>
										<span class="time">Jul 25, 2012 11:08</span>
										<span class="text">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</span>
									</span>                                  
								</li>
								<li class="left">
									<img class="avatar" alt="Lucas" src="<?php echo base_url(); ?>static/assets/img/avatar.jpg">
									<span class="message"><span class="arrow"></span>
										<span class="from">Łukasz Holeczek</span>
										<span class="time">Jul 25, 2012 11:07</span>
										<span class="text">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</span>
									</span>	                                  
								</li>
								<li class="right">
									<img class="avatar" alt="Lucas" src="<?php echo base_url(); ?>static/assets/img/avatar.jpg">
									<span class="message"><span class="arrow"></span>
										<span class="from">Łukasz Holeczek</span>
										<span class="time">Jul 25, 2012 11:06</span>
										<span class="text">
											Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
										</span>
									</span>	                                  
								</li>
							</ul>
							<div class="chat-form">
								<textarea></textarea>
								<button class="btn btn-info">Send message</button>
							</div>	
						</div>
					</div>
				</div><!--/col-->
						
			</div><!--/row-->
			
      
					<!-- end: Content -->
			</div><!--/#content.span10-->
				</div><!--/fluid-row-->
				
			<div class="modal fade" id="myModal">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							<p>Here settings can be configured...</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div><!-- /.modal-content -->
				</div><!-- /.modal-dialog -->
			</div><!-- /.modal -->
		
		<div class="clearfix"></div>
		
		<footer>
			<p>
				<span style="text-align:left;float:left">&copy; 2013 creativeLabs. <a href="http://bootstrapmaster.com">Admin Templates</a> by BootstrapMaster</span>
				<span class="hidden-phone" style="text-align:right;float:right">Powered by: <a href="http://bootstrapmaster.com/demo/perfectum/" alt="Bootstrap Admin Templates">Perfectum Dashboard</a></span>
			</p>
		</footer>
				
	</div><!--/.fluid-container-->

	<!-- start: JavaScript-->
	<!--[if !IE]>-->

			<script src="<?php echo base_url(); ?>static/assets/js/jquery-2.0.3.min.js"></script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script src="<?php echo base_url(); ?>static/assets/js/jquery-1.10.2.min.js"></script>
	
	<![endif]-->

	<!--[if !IE]>-->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='<?php echo base_url(); ?>static/assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
		</script>

	<!--<![endif]-->

	<!--[if IE]>
	
		<script type="text/javascript">
	 	window.jQuery || document.write("<script src='<?php echo base_url(); ?>static/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
		</script>
		
	<![endif]-->
	<script src="<?php echo base_url(); ?>static/assets/js/jquery-migrate-1.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>static/assets/js/bootstrap.min.js"></script>
	
	
	<!-- page scripts -->
	<script src="<?php echo base_url(); ?>static/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
	<script src="<?php echo base_url(); ?>static/assets/js/jquery.knob.modified.min.js"></script>
	<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="<?php echo base_url(); ?>static/assets/js/excanvas.min.js"></script><![endif]-->
	<script src="<?php echo base_url(); ?>static/assets/js/jquery.flot.min.js"></script>
	<script src="<?php echo base_url(); ?>static/assets/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo base_url(); ?>static/assets/js/jquery.flot.stack.min.js"></script>
	<script src="<?php echo base_url(); ?>static/assets/js/jquery.flot.resize.min.js"></script>
	<script src="<?php echo base_url(); ?>static/assets/js/jquery.flot.time.min.js"></script>
	<script src="<?php echo base_url(); ?>static/assets/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo base_url(); ?>static/assets/js/fullcalendar.min.js"></script>
	<script src="<?php echo base_url(); ?>static/assets/js/jquery.gritter.min.js"></script>
	
	<!-- theme scripts -->
	<script src="<?php echo base_url(); ?>static/assets/js/default.min.js"></script>
	<script src="<?php echo base_url(); ?>static/assets/js/core.min.js"></script>
	
	<!-- inline scripts related to this page -->
	<script src="<?php echo base_url(); ?>static/assets/js/pages/index.js"></script>
	
		<!-- end: JavaScript-->
	
</body>
</html>
