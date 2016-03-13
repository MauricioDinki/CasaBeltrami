<?php
    include "config.php";
    include "header.php";
    session_start();
    if (!isset($_SESSION['user_name'])) {
        header("Location: index.php");
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
            <h4>salones Disponibles</h4>
           
                      <div>
             <select name="party" id="party" >
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
             <hr>
              <h4>Tipo De evento</h4>
            <div>
             <select name="event" id="event" >
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
                <label for="estatus">Decoracion</label>
                <select class="form-control" id="decoration" name="decoration">
                    <option value="1">Propia</option>
                    <option value="0">terceros</option>
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