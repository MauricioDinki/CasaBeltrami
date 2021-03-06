<?php
    include "config.php";
    error_reporting(E_ALL);
    session_start();
    if (!isset($_SESSION['user_name'])) {
        header("Location: admin.php");
    }       
    $mail = $_SESSION['user_name'];
    $query2 = "SELECT nombre FROM Users WHERE user='$mail'";
    $res = mysqli_query($mysqli, $query2);
    $mysqli->close(); //cerramos la conexió
    $num_row = mysqli_num_rows($res);
    $row = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Editar Datos de Imagen</title>
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
                                                                <?php echo $row['nombre']; ?>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li class="dropdown-menu-title">
 									<span>Opciones</span>
								</li>
								
								<li><a href="logout.php?logout"><i class="halflings-icon off"></i> Cerrar Sesión</a></li>
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
						
                                            <li >
                                                <a class="dropmenu" href="#"><i class="icon-calendar"></i><span >Salones</span></a>
                                                <ul>
                                                    <li><a class="submenu" href="salon.php"><i class="icon-glass"></i><span class="hidden-tablet">Salones</span></a></li>
                                                    <li><a class="submenu" href="decorations.php"><i class="icon-gift"></i><span class="hidden-tablet">Decoraciones</span></a></li>
                                                </ul>	
                                            </li>
                                            <li>
                                                <a class="dropmenu" href="#"><i class="icon-tags"></i><span >Servicios</span></a>
                                                    <ul>    
                                                        <li><a class="submenu" href="services.php"><i class="icon-tags"></i><span class="hidden-tablet">Servicios</span></a></li>
                                                        <li><a class="submenu" href="sub_services.php"><i class="icon-tags"></i><span class="hidden-tablet">Sub-servicios</span></a></li>
                                                    </ul>	
                                            </li> 
                                             <li ><a href="events.php"><i class="icon-globe"></i><span class="hidden-tablet"> Evento</span></a></li>
                                             <li class="active"><a href="images.php"><i class="icon-upload-alt"></i><span class="hidden-tablet">Subir Imagenes</span></a></li>
                                            <li><a href="Home.php"><i class="icon-picture"></i><span class="hidden-tablet"> Galería Por Salónes</span></a></li>
                                            <li><a href="gallery_by_event.php"><i class="icon-picture"></i><span class="hidden-tablet"> Galería Por Eventos</span></a></li>
                                            <li><a href="gallery_by_service.php"><i class="icon-picture"></i><span class="hidden-tablet"> Galería Por Servicios</span></a></li>
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
                            <?php
    include "config.php";
    
    

    if (isset($_GET['u'])):
        $id = $_GET['u'];
        if (isset($_POST['bts'])):
        $stmt = $mysqli->prepare("UPDATE content SET tittle=?,short_description=?, long_description=?, status=?,modification_date=? WHERE id_content=?");
        $stmt->bind_param('ssssss', $title, $short_d, $long_d, $status_photo, $m_date_photo, $id_content);
        $title = $_POST['title'];
        $short_d = $_POST['sd'];
        $long_d = $_POST['ld'];
        $status_photo = $_POST['status'];
        $m_date_photo = $_POST['md'];
        $id_content = $_POST['id_content'];
        if ($stmt->execute()):
            echo "<script>location.href='images.php'</script>";
        else:
            echo "<script>alert('" . $stmt->error . "')</script>";
        endif;
    endif;
        $res = $mysqli->query("SELECT * FROM content WHERE id_content=" . $_GET['u']);
        $row = $res->fetch_assoc();
        $mysqli->close();
    endif;
?>

    <p><br/></p>
    
    <div class="panel panel-default">
        <div class="panel-body">
            <form  role="form" method="post" class="form-horizontal">
                <input type="hidden" value="<?php echo $row['id_content'] ?>" name="id_content"/>
                <div class="control-group col-sm-5 mar-top40">
                    <label class="control-label" for="focusedInput">Titulo De la Imagen: </label>
		    <div class="controls">
		        <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $row['tittle'] ?>"
                               id="title" name="title">
		    </div>
                </div>
                  <div class="control-group col-sm-5 mar-top41">
                    <label class="control-label" for="focusedInput">Descripción Corta: </label>
		    <div class="controls">
		        <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo $row['short_description']?>"
                               id="sd" name="sd">
		    </div>
                </div>
                  <div class="control-group col-sm-5 mar-top41">
                    <label class="control-label" for="focusedInput">Descripcion Larga:</label>
		    <div class="controls">
                        <textarea class="input-xlarge focused" rows="5" id="focusedInput" type="text" 
                                  id="ld" name="ld"><?php echo $row['long_description']?></textarea>
		    </div>
                </div>
                     <div class="control-group col-sm-5 mar-top41">
		<label class="control-label" for="selectError">Estatus:</label>
		<div class="controls">
                     <?php if ($row['status'] == 'true') { ?>
                            <select id="status" data-rel="chosen" name="status">
                                <option value="true"><?php echo 'activo' ?></option>
                                <option value="false">Inactivo</option>
                            </select>
                        <?php } else {?>
                        <select id="status" data-rel="chosen" name="status">
                            <option value="false"><?php echo 'inactivo' ?></option>
                            <option value="true">activo</option>
                        </select>
                         <?php } ?>
		</div>
            </div>
                <div class="control-group col-sm-5">
                    <label class="control-label" for="focusedInput">Fecha de Creación: </label>
		    <div class="controls">
		        <input class="input-xlarge focused" id="focusedInput" type="text" value="<?php echo date("Y/m/d") ?>"
                               id="title" name="ld" disabled="">
		    </div>
                </div>
                
                
                <div class="form-group">
                    <input type="hidden" class="form-control" name="md" id="tl" value="">
                </div>
                <center>
                    <a href="images.php" class="btn btn-primary btn-md center-block"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Regresar</a>
                <button type="submit" name="bts" class="btn btn-success center-block">Guardar</button>
                </center>
            </form>
        </div>
    </div>
			

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
	<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-content">
			<ul class="list-inline item-details">
				<li><a href="http://themifycloud.com">Admin templates</a></li>
				<li><a href="http://themescloud.org">Bootstrap themes</a></li>
			</ul>
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
