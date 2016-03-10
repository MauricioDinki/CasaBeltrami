<?php
    include "config.php";
    include "header.php";
        error_reporting(E_ALL);
    session_start();
    if (!isset($_SESSION['user_name'])) {
        header("Location: login.php");
    }
?>
<script src="js/jquery.js"></script>
<script src="js/upload.js"></script>
<script src="js/bootbox.js"></script>
<script src="js/bootbox.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="js/bootbox.min.js"></script>
<p><br/></p>
<div class="panel panel-default">
    <div class="panel-body">
        <form  id="subida">
            <div class="form-group">
                <label for="name_galery">Titulo</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="name_galery">Imagen</label>
                <input type="file" id="foto" name="foto"/> 
            </div>
            <br>
            <h4>Galerias Disponibles</h4>
            <div>
                <select name="party[]" id="party" >
                    <?php
                        
                        $condition='true';
                        $sql = "SELECT id_party_room,party_room_name from party_room WHERE status='".$condition."'";
                        $result = $mysqli2->query($sql);
                        if ($result->num_rows > 0) { 
                            $combobit = "";
                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            $combobit .=" <option value='" . $row['id_party_room'] . "'>" . $row['party_room_name'] . "</option>"; //concatenamos el los options para luego ser insertado en el HTML
                           }
                        } else {
                                echo "No hubo resultados";
                                }
                        $mysqli2->close(); //cerramos la conexión
                        echo $combobit;
                    ?>
                </select>
            </div>
                  <h4>Tipo De evento</h4>
            <div>
                <select name="event[]" id="event" >
                    <?php
                        
                        $condition='true';
                        $sql = "SELECT id_event,nombre from events ";
                        $result = $mysqli->query($sql);
                        if ($result->num_rows > 0) { 
                            $combobit2 = "";
                            while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
                            $combobit2 .=" <option value='" . $row['id_event'] . "'>" . $row['nombre'] . "</option>"; //concatenamos el los options para luego ser insertado en el HTML
                           }
                        } else {
                                echo "No hubo resultados";
                                }
                        $mysqli->close(); //cerramos la conexión
                        echo $combobit2;
                    ?>
                </select>
            </div>
            <div class="form-group">
                <label for="short_description">Descripcion Corta</label>
                <input type="text" id="desc_short" class="form-control" name="desc_short" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="short_description">Descripcion larga</label>
                <input type="text" id="desc_long" class="form-control" name="desc_long" placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label for="estatus">Estatus</label>
                <select class="form-control" id="status" name="status">
                    <option value="true">Activa</option>
                    <option value="false">Inactivo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="decoracion">Decoracion</label>
                <select class="form-control" id="decoracion" name="decoracion">
                    <option value="true">Propia</option>
                    <option value="false">Terceros</option>
                </select>
            </div>
            <div class="form-group">
                <input type="hidden" type="text" class="form-control" name="creation_date" id="creation_date" value="<?php echo date("Y/m/d") ?>">
            </div>
            <button type="submit"  class="btn btn-default">Guardar</button>
        </form>
    </div>
</div>
<?php
include "footer.php";
?>