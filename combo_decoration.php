<?php
include('config.php');
$salida="";
$idservice=$_POST["elegido"];
// construimos el combo de ciudades deacuerdo al pais seleccionado
    $sql6 = "SELECT * FROM decorations WHERE id_party=$idservice";
    $result6 = $mysqli6->query($sql6);
    if ($result6->num_rows > 0) { 
    $combobit6 = "";
        while ($row6 = $result6->fetch_array(MYSQLI_ASSOC)) {
                            $combobit6 .=" <option value='" . $row6['id_decoration'] . "'>" . $row6['name_decoration'] . "</option>"; //concatenamos el los options para luego ser insertado en el HTML
                           }
                        } else {
                                echo "No hubo resultados";
                                }
                        $mysqli6->close(); //cerramos la conexión
                        echo $combobit6;

                        
?>
