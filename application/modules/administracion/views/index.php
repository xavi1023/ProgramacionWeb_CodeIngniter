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
					<li><a href="index.html#">Administracion</a></li>
					<li><a href="index.html#">Listado de Usuarios</a></li>
				</ul>
				<hr>
			</div>
			
			<div class="box-content">
							<table class="table table-striped table-bordered bootstrap-datatable datatable">
							  <thead>
								  <tr>
									  <th>ID</th>
									  <th>Usuario</th>
									  <th>Correo</th>
									  <th>Status</th>
									  <th>Ultima Conexion</th>
									  <th>Acciones</th>
								  </tr>
							  </thead>   
							  <tbody>
							  <?php 
							  foreach ($tabla_usuarios as $lista) {
							  	?>
							  	<tr>
									<td><?php echo $lista['id']; ?></td>
									<td><?php echo $lista['username']; ?></td>
									<td><?php echo $lista['email']; ?></td>
									<td>
										<span class="label label-default"><?php echo $lista['activated']; ?></span>
									</td>
									<td><?php echo $lista['last_login']; ?></td>
									<td>
										<a class="btn btn-success" href="table.html#">
											<i class="fa fa-search-plus "></i>                                            
										</a>
										<a class="btn btn-info" href="table.html#">
											<i class="fa fa-edit "></i>                                            
										</a>
										<a class="btn btn-danger" href="table.html#">
											<i class="fa fa-trash-o "></i> 

										</a>
									</td>
								</tr>
							<?php } ?>

							  </tbody>
						  </table>            
						</div>
			
      
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
