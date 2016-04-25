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
    //query_party_room
    $sql1 = "SELECT id_party_room,party_room_name from party_room ";
        $result1 = $mysqli2->query($sql1);
        if ($result1->num_rows > 0) { 
        $combo_party_room = "";
            while ($row1 = $result1->fetch_array(MYSQLI_ASSOC)) {
                    $combo_party_room .=" <option value='" . $row1['id_party_room'] . "'>" . $row1['party_room_name'] . "</option>"; //concatenamos el los options para luego ser insertado en el HTML
                }
            } else {
                    //echo "No hubo resultados";
                    }
            $mysqli2->close(); 
    //close query party_room
    //query_services        
        $sql = "SELECT id_service,name_service from services ";
        $result2 = $mysqli3->query($sql);
        if ($result2->num_rows > 0) { 
        $combo_services = "";
            while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
                    $combo_services .=" <option value='" . $row['id_service'] . "'>" . $row['name_service'] . "</option>"; //concatenamos el los options para luego ser insertado en el HTML
                }
            } else {
                    //echo "No hubo resultados";
                    }
            $mysqli3->close(); //cerramos la conexión
    
    
    
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Añadir Nueva Imagen</title>
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
        <!--combo-->
        
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>
        <!--cierramos-->
        <!--<link href="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" media="screen" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/css/bootstrap-select.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script src="http://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.9.3/js/bootstrap-select.min.js"></script>-->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/upload.js"></script>
        <script src="js/bootbox.js"></script>
        <script src="js/bootbox.min.js"></script>
        <script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
	  // Parametros para el combo
	   $("#salon").change(function () {
	      $("#salon option:selected").each(function () {
	        elegido=$(this).val();
	        $.post("combo_decoration.php", { elegido: elegido }, function(data){
	        $("#decoration").html(data);
	      });     
	     });
	   });    
	});
        </script>	
        <script type="text/javascript" charset="utf-8">
	  $(document).ready(function() {
	  // Parametros para el combo
	   $("#service").change(function () {
	      $("#service option:selected").each(function () {
	        elegido=$(this).val();
	        $.post("combo_sub_services.php", { elegido: elegido }, function(data){
	        $("#sub_service").html(data);
	      });     
	     });
	   });    
	});
        </script>	
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
                            <a class="brand" href="index.html"><span><h2>Casa Beltrami</h2></span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">


						
						
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="halflings-icon white user"></i> 
                                                                <?php echo $row['nombre'] ?>
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
                                            <li class="active"><a href="images.php"><i class="icon-upload-alt"></i><span class="hidden-tablet">&nbsp;Subir Imagenes</span></a></li>
                                            <li>
                                                        <a class="dropmenu" href="Home.php"><i class="icon-picture"></i><span >Galeria por salones</span></a>
							<ul>
                                                            <li><a class="submenu" href="Lincantos_gallery.php"><i class="icon-glass"></i><span class="hidden-tablet"> L’incanto</span></a></li>
                                                            <li><a class="submenu" href="Farfalas_gallery.php"><i class="icon-gift"></i><span class="hidden-tablet">Farfala</span></a></li>
                                                            <li><a class="submenu" href="Bambinos_gallery.php"><i class="icon-gift"></i><span class="hidden-tablet">Bambino</span></a></li>
								
							</ul>	
                                            </li>
                                            <li>
                                                <a class="dropmenu" href="gallery_by_service.php"><i class="icon-picture"></i><span >Galería por Servicios</span></a>
							<ul>
                                                            <li><a class="submenu" href="rent_furniture_services_gallery.php"><i class="icon-tags"></i><span class="hidden-tablet">Renta de mobiliario</span></a></li>
                                                            <li><a class="submenu" href="tables_sweets_cheeses_gallery.php"><i class="icon-tags"></i><span class="hidden-tablet">Mesas de dulces y quesos</span></a></li>
                                                            <li><a class="submenu" href="floral_design_gallery.php"><i class="icon-tags"></i><span class="hidden-tablet">Diseño floral</span></a></li>
								
							</ul>	
                                            </li>
                                            <li><a href="gallery_by_event.php"><i class="icon-picture"></i><span class="hidden-tablet"> Galería Por Eventos</span></a></li>
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
                                <li><a href="images.php">Añadir Nueva Imagen</a></li>
			</ul>
                       <?php
    include "config.php";
    
?>
<h1 style="text-align: center">LLENA LOS SIGUIENTES CAMPOS</h1>
<p><br/></p>	

<div class="panel panel-default">
    
    <div class="panel-body">
        
        <form  id="subida" class="form-horizontal">
            
             <div class="control-group col-sm-5 mar-top40">
		<label class="control-label" for="focusedInput">Titulo De la Imagen: </label>
		    <div class="controls">
                        <input class="input-xlarge focused" type="text" id="title" name="title" >
		    </div>
	    </div>
            
            <div class="control-group col-sm-5 mar-top41">
                <label class="control-label">Seleccionar Archivo:</label>
                <div class="controls">
                    <input type="file" id="foto" name="foto">
                </div>
            </div>
            <div class="control-group col-sm-5 mar-top41">
                <label class="control-label" for="salon">Salón</label>
                <div class="controls">
                    <select data-rel="chosen"  name="salon" id="salon" required>
                        <option value="0">Seleccione...</option>
                        <?php  echo $combo_party_room;?>
                    </select>
                </div>
            </div>  
            <div class="control-group col-sm-5 mar-top41">
                <label class="control-label" for="ciudad">Decoración</label>
                    <div class="controls">
                        <select   name="decoration" id="decoration" required>
                        </select>
                    </div>
            </div> 
            <div class=" col-sm-5 mar-top41">
                <label class="control-label" for="pais">Servicio</label>
                    <div class="controls">
                        <select  id="sub_service" name="sub_service[]"  class="selectpicker" multiple>
                            <optgroup label="Renta de mobiliario">
                                <option value="1">Mesas</option>
                                <option value="2">Sillas</option>
                                <option value="3">Mantelería</option>
                            </optgroup>
                            <optgroup label="Mesas de dulces y quesos">
                                <option value="4">Mesa de postres</option>
                                <option value="5">Mesa de quesos</option>
                                <option value="6">Carrito de dulces</option>
                                <option value="7">Carrito de hospital</option>
                            </optgroup>
                             <optgroup label="Diseño floral">
                                <option value="8">Decoración floral</option>
                                <option value="9">Centros de mesa</option>
                                <option value="10">Arreglos florales</option>
                                <option value="11">Ramos de novia</option>
                            </optgroup>
                        </select>
                    </div>
            </div>  
<!--            <div class="control-group col-sm-5 mar-top41">
                <label class="control-label" for="pais">Servicio</label>
                    <div class="controls">
                        <select data-rel="chosen"  name="service" id="service" required>
                            <option value="0">Seleccione...</option>
                                <?php  echo $combo_services;?>
                        </select>
                    </div>
            </div>  
            <div class="control-group col-sm-5 mar-top41">
                <label class="control-label" for="ciudad">Sub Servicio(s):</label>
                    <div class="controls">
                        <select   name="sub_service" id="sub_service" required>
                        </select>
                    </div>
            </div> -->
            <div class="control-group col-sm-5 mar-top41">
		<label class="control-label" for="selectError">Tipo de evento:</label>
		<div class="controls">
                    <select  data-rel="chosen" name="event" id="event">
                 <?php
                        
                    
                        $sql4 = "SELECT id_event,name_event from events ";
                        $result4 = $mysqli4->query($sql4);
                        if ($result4->num_rows > 0) { 
                            $combo_events;
                            while ($row4 = $result4->fetch_array(MYSQLI_ASSOC)) {
                            $combo_events .=" <option value='" . $row4['id_event'] . "'>" . $row4['name_event'] . "</option>"; //concatenamos el los options para luego ser insertado en el HTML
                           }
                        } else {
                                echo "No hubo resultados";
                                }
                        $mysqli4->close(); //cerramos la conexión
                        echo $combo_events;
                    ?>
                </select>
		</div>
            </div>
            
            <div class="control-group col-sm-5 mar-top41">
		<label class="control-label" for="focusedInput">Descripción:</label>
		    <div class="controls">
                        <textarea class="input-xlarge focused" type="text" name="desc"
                                  id="desc"> </textarea>
		    </div>
	    </div>
            
            
            <div class="control-group col-sm-5 mar-top41">
		<label class="control-label" for="selectError">Estatus:</label>
		<div class="controls">
                    <select id="status" data-rel="chosen" name="status">
                        <option value=true>Activa</option>
                        <option value="false">Inactivo</option>
                    </select>
		</div>
            </div>
            
            <div class="form-group">
                <input type="hidden" type="text" class="form-control" name="creation_date" id="creation_date" value="<?php echo date("Y/m/d") ?>">
            </div>
            <center>
                <a href="images.php" class="btn btn-primary btn-md mar-right"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Regresar</a>
            <button type="submit"  class="btn btn-success ">Guardar</button>
            </center>
                
            
            
        </form>
    </div>
</div>

                        </div><!--/.fluid-container-->
	
			<!-- end: Content -->
		</div><!--/#content.span10-->
		</div><!--/fluid-row-->
		
	
	
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
                <script>
                    $(document).ready(function(e) {
                    $('.selectpicker').selectpicker();
                    });
                </script>
	<!-- end: JavaScript-->
	
</body>
</html>
