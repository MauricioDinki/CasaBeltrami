<?php
    include "config.php";
    include "header.php";
    session_start();
    if (!isset($_SESSION['user_name'])) {
    header("Location: index.php");
    }
if (isset($_POST['bts'])):
    if ($_POST['party_room_name'] != null && $_POST['short_description'] != null && $_POST['status'] != null ) {
        $stmt = $mysqli->prepare("INSERT INTO party_room(party_room_name,short_description,long_description,status,creation_date) VALUES (?,?,?,?,?)");
        $stmt->bind_param('sssss', $party_room_name, $short_desc, $long_desc, $status, $creation_date);
        $party_room_name = $_POST['party_room_name'];
        $short_desc = $_POST['short_description'];
        $long_desc = $_POST['long_description'];
        $status = $_POST['status'];
        $creation_date = $_POST['creation_date'];
        
        if ($stmt->execute()):
            $mysqli->close();
            header('Location: Galery.php');
?>
           <!-- <p></p>
            <div class="alert alert-success alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <strong>Galeria Ingresada correctamente,Felicadades!</strong><a href="Galery.php">Principal</a>.
            </div>-->
<?php
    else:
?>
    <p></p>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
        <strong>Error!</strong> <?php echo $stmt->error; ?>
    </div>
<?php
    endif;
    } else {
?>
    <p></p>
        <div class="alert alert-warning alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
            <strong>Error!</strong>Llena los campos
        </div>
<?php
    }
    endif;
?>
    <br>
    <a href="Galery.php" class="btn btn-success btn-md"><span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> Regresar</a>
    <p><br/></p>
    <div class="panel panel-default">
    <div class="panel-body">
        <form role="form" method="post">
            <div class="form-group">
                <label for="name_galery">Nombre del Salón</label>
                <input type="text" class="form-control" name="party_room_name" id="nm" placeholder="Enter Party Room Name">
            </div>
            <div class="form-group">
                <label for="short_description">Descripción Corta</label>
                <input type="text" class="form-control" name="short_description" id="nm" placeholder="Enter Name">
            </div>  
            <div class="form-group">
                <label for="long_description">Descripcion Larga</label>
                <textarea class="form-control" name="long_description" id="ar" rows="3"></textarea>
            </div>  
            <div class="form-group">
                <label for="estatus">Estatus</label>
                <select class="form-control" id="gd" name="status">
                    <option value=true>Activa</option>
                    <option value="false">Inactivo</option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" type="text" class="form-control" name="creation_date" id="" value="<?php echo date("Y/m/d") ?>">
            </div>  
<!--            <div class="form-group">
                <label for="section">Seccion a la que pertenece</label>
                <input type="text" class="form-control" name="section" id="">
            </div>-->

            <button type="submit" name="bts" class="btn btn-default">Guardar</button>
        </form>
    </div>
</div>
<?php
include "footer.php";
?>