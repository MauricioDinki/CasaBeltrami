<?php
    include "config.php";
    error_reporting(E_ALL);
    session_start();
    if (!isset($_SESSION['user_name'])) {
        header("Location: index.php");
    }       
    $mail = $_SESSION['user_name'];
    $query3 = "SELECT nombre FROM Users WHERE user='$mail'";
    $res3 = mysqli_query($mysqli3, $query3);
    $mysqli3->close(); //cerramos la conexió
    $num_row3 = mysqli_num_rows($res3);
    $row3 = mysqli_fetch_array($res3);
    $myuser=$row3['nombre'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Servicios Disponibles</title>
	<meta name="description" content="Bootstrap Metro Dashboard">
	<meta name="author" content="Dennis Ji">
	<meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="css_template/bootstrap.min.css" rel="stylesheet">
	<link href="css_template/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="css_template/admin.css" rel="stylesheet">
	<link id="base-style-responsive" href="css_template/style-responsive.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<link id="ie-style" href="css_template/ie.css" rel="stylesheet">
	<![endif]-->
	
	<!--[if IE 9]>
		<link id="ie9style" href="css_template/ie9.css" rel="stylesheet">
	<![endif]-->
		
	<!-- start: Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico">
	<!-- end: Favicon -->
	
		
		
		
</head>

<body>
		<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="index.html"><span>Casa Beltrami</span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
				
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> 
                                                                <?php echo $myuser ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Account Settings</span>
								</li>
								<li><a href="#"><i class="halflings-icon user"></i> Profile</a></li>
								<li><a href="login.html"><i class="halflings-icon off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- start: Header -->
	
		<div class="container-fluid-full">
		<div class="row-fluid">
				
			<!-- start: Main Menu -->
			<div id="sidebar-left" class="span2">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
                                            <li ><a href="salon.php"><i class="icon-calendar"></i><span class="hidden-tablet">&nbsp;Salones</span></a></li>
                                            <li ><a href="events.php"><i class="icon-globe"></i><span class="hidden-tablet"> Eventos</span></a></li>
				            <li class="active"><a href="services.php"><i class="icon-tags"></i><span class="hidden-tablet"> Servicios</span></a></li>
                                            <li><a href="images.php"><i class="icon-upload-alt"></i><span class="hidden-tablet">&nbsp; Imagenes</span></a></li>
                                            <li><a href="Home.php"><i class="icon-picture"></i><span class="hidden-tablet">&nbsp; Galería</span></a></li>
					</ul>
				</div>
			</div>
			<!-- end: Main Menu -->
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>
			
			<!-- start: Content -->
			<div id="content" class="span10">
			
						
			<ul class="breadcrumb">
				<li>
					<i class="icon-home"></i>
					<a href="index.php">Home</a> 
					<i class="icon-angle-right"></i>
				</li>
				<li><i class="icon-tags"></i><a href="salon.php">&nbsp;Servicios Disponibles</a></li>
			</ul>

			<div class="row-fluid">
				
		
            <p>
                <a href="create_services.php" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Añadir Nuevo Servicio</a><br/>
            </p>
            <table id="ghatable" class="display table table-bordered table-stripe" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="text-align: center">ID</th>
                        <th style="text-align: center">Nombre del Evento</th>
                        <th style="text-align: center">Descripción</th>
                        <th style="text-align: center">Estatus</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $res = $mysqli->query("SELECT * FROM services");
                        $mysqli->close();
                        while ($row = $res->fetch_assoc()):
                    ?>
                        <tr>
                            <td style="text-align: center"><?php echo $row['id_service'] ?></td>
                            <td style="text-align: center"><?php echo $row['name_service'] ?></td>
                            <td style="text-align: center"><?php echo $row['service_description'] ?></td>
                            
                            
                            <td style="text-align: center">
                                <?php 
                                        if ($row['status']=='1'){
                                            echo 'Acitvo';
                                        }elseif($row['status']=='0') {
                                            echo 'Inactivo';
                                        }    
                                ?>
                            </td>
                           
                            
                            <td >
                            <center>
                                <a class="btn btn-lg btn-success" href="update_service.php?u=<?php echo $row['id_service'] ?>"><span class="glyphicon glyphicon-pencil" ></span> Editar</a>
                            </center>
                            </td> 
                            <td>
                            <center>
                                <a class="btn btn-lg btn-danger" data-toggle="modal" data-target="#basicModal" ><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Borrar</a>
                                
                            </center>
                            </td>
                        </tr>
                        <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title" id="myModalLabel">Atención</h4>
                                    </div>
                                    <div class="modal-body">
                                        <h3>¿Estas seguro de eliminar la galeria?</h3>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default " data-dismiss="modal">Cerrrar</button>
                                        <a href="Delete.php?d=<?php echo $row['id_party_room'] ?>"><button type="button" class="btn btn-primary">Aceptar</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            endwhile;
                        ?>
                </tbody>
            </table>	
			
       

                        </div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">×</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	
	<footer>

		<p>
			<span style="text-align:left;float:left">&copy; 2016 <a >Blick</a></span>
			
		</p>

	</footer>
	
	<!-- start: JavaScript-->

		<script src="js_template/jquery-1.9.1.min.js"></script>
	<script src="js_template/jquery-migrate-1.0.0.min.js"></script>
	
		<script src="js_template/jquery-ui-1.10.0.custom.min.js"></script>
	
		<script src="js_template/jquery.ui.touch-punch.js"></script>
	
		<script src="js_template/modernizr.js"></script>
	
		<script src="js_template/bootstrap.min.js"></script>
	
		<script src="js_template/jquery.cookie.js"></script>
	
		<script src='js_template/fullcalendar.min.js'></script>
	
		<script src='js_template/jquery.dataTables.min.js'></script>

		<script src="js_template/excanvas.js"></script>
	<script src="js_template/jquery.flot.js"></script>
	<script src="js_template/jquery.flot.pie.js"></script>
	<script src="js_template/jquery.flot.stack.js"></script>
	<script src="js_template/jquery.flot.resize.min.js"></script>
	
		<script src="js_template/jquery.chosen.min.js"></script>
	
		<script src="js_template/jquery.uniform.min.js"></script>
		
		<script src="js_template/jquery.cleditor.min.js"></script>
	
		<script src="js_template/jquery.noty.js"></script>
	
		<script src="js_template/jquery.elfinder.min.js"></script>
	
		<script src="js_template/jquery.raty.min.js"></script>
	
		<script src="js_template/jquery.iphone.toggle.js"></script>
	
		<script src="js_template/jquery.uploadify-3.1.min.js"></script>
	
		<script src="js_template/jquery.gritter.min.js"></script>
	
		<script src="js_template/jquery.imagesloaded.js"></script>
	
		<script src="js_template/jquery.masonry.min.js"></script>
	
		<script src="js_template/jquery.knob.modified.js"></script>
	
		<script src="js_template/jquery.sparkline.min.js"></script>
	
		<script src="js_template/counter.js"></script>
	
		<script src="js_template/retina.js"></script>

		<script src="js_template/custom.js"></script>
	<!-- end: JavaScript-->
	
</body>
</html>
