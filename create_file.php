<?php
    include "config.php";
    error_reporting(E_ALL);
    session_start();
    if (!isset($_SESSION['user_name'])) {
        header("Location: index.php");
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
	<title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
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
	<script src="js/jquery.js"></script>
        <script src="js/upload.js"></script>
        <script src="js/bootbox.js"></script>
        <script src="js/bootbox.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        <script src="js/bootbox.min.js"></script>
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
				<a class="brand" href="index.html"><span>JANUX</span></a>
								
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
						
                                            	
                                            <li><a href="form.php"><i class="icon-edit"></i><span class="hidden-tablet">Salones</span></a></li>
                                            <li><a href="images.php"><i class="icon-list-alt"></i><span class="hidden-tablet"> Imagenes</span></a></li>
						<li><a href="gallery.html"><i class="icon-picture"></i><span class="hidden-tablet"> Galería</span></a></li>
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
    
?>

<p><br/></p>
<div class="panel panel-default">
    <div class="panel-body">
        <form  id="subida" class="form-horizontal">
            
             <div class="control-group">
		<label class="control-label" for="focusedInput">Titulo De la Imagen </label>
		    <div class="controls">
		        <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused…"
                               id="title" id="nm">
		    </div>
	    </div>
            
            <div class="control-group">
                <label class="control-label">Seleccionar Archivo</label>
                <div class="controls">
                    <input type="file" id="foto" name="foto">
                </div>
            </div>
            <div class="control-group">
		<label class="control-label" for="selectError">Asignar salón</label>
		<div class="controls">
                    <select  data-rel="chosen" name="id_party" id="party">
                        <?php
                $condition='true';
                $sql1 = "SELECT id_party_room,party_room_name from party_room WHERE status='".$condition."'";
                $result1 = $mysqli->query($sql1);
                 if ($result1->num_rows > 0) { 
                            $combobit1 = "";
                            while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) {
                            $combobit1 .=" <option value='" . $row1['id_party_room'] . "'>" . $row1['party_room_name'] . "</option>"; //concatenamos el los options para luego ser insertado en el HTML
                           }
                        } else {
                                echo "No hubo resultados";
                                }
                        $mysqli->close(); //cerramos la conexión
                        echo $combobit1;
                    ?>
                </select>
		</div>
            </div>
            <div class="control-group">
		<label class="control-label" for="selectError">Tipo de evento</label>
		<div class="controls">
                    <select  data-rel="chosen" name="event" id="event">
                 <?php
                        
                    
                        $sql = "SELECT id_event,nombre from events ";
                        $result = $mysqli2->query($sql);
                        if ($result->num_rows > 0) { 
                            $combobit2 = "";
                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            $combobit2 .=" <option value='" . $row['id_event'] . "'>" . $row['nombre'] . "</option>"; //concatenamos el los options para luego ser insertado en el HTML
                           }
                        } else {
                                echo "No hubo resultados";
                                }
                        $mysqli2->close(); //cerramos la conexión
                        echo $combobit2;
                    ?>
                </select>
		</div>
            </div>
            
            <div class="control-group">
		<label class="control-label" for="focusedInput">Descripcion Corta </label>
		    <div class="controls">
		        <input class="input-xlarge focused" id="focusedInput" type="text" value="This is focused…"
                               id="desc_short" id="nm">
		    </div>
	    </div>
            <div class="control-group">
		<label class="control-label" for="focusedInput">Descripcion Larga </label>
		    <div class="controls">
                        <textarea class="input-xlarge focused" id="focusedInput" type="text" value="This is focused…"
                                  id="desc_long" id="nm"> </textarea>
		    </div>
	    </div>
            <div class="control-group">
		<label class="control-label" for="selectError">Estatus</label>
		<div class="controls">
                    <select id="selectError" data-rel="chosen" name="status">
                        <option value=true>Activa</option>
                        <option value="false">Inactivo</option>
                    </select>
		</div>
            </div>
            <div class="control-group">
		<label class="control-label" for="selectError">Estatus</label>
		<div class="controls">
                    <select  data-rel="chosen" name="status">
                        <option value="1">Propia</option>
                    <option value="0">terceros</option>
                    </select>
		</div>
            </div>
            
            <div class="form-group">
                <input type="hidden" type="text" class="form-control" name="creation_date" id="creation_date" value="<?php echo date("Y/m/d") ?>">
            </div>
            <button type="submit"  class="btn btn-default">Guardar</button>
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
			<span style="text-align:left;float:left">&copy; 2013 <a href="http://themifycloud.com/downloads/janux-free-responsive-admin-dashboard-template/" alt="Bootstrap_Metro_Dashboard">JANUX Responsive Dashboard</a></span>
			
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
