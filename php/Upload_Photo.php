<?php
    include "../config.php";
    error_reporting(E_ALL);
    //query para insertar imagen obtenemos valores por get los cuales los recibimos de query por post
    $title = $_GET['title'];
    $sd = $_GET['desc_short'];
    $ld = $_GET['desc_long'];
    $st = $_GET['status'];
    $cd = $_GET['creation_date'];
    $decoration = $_GET['decoration'];
    $event = $_GET['event'];
    $id_party = $_GET['party'];
    $foto = trim($_FILES['foto']['name']);
    
    $ingresar = mysqli_query($mysqli, "INSERT INTO content (title,route, short_description,long_description,id_event,decoration,status,creation_date)"
                             . "VALUES('$title','$foto','$sd','$ld','$event','$decoration','$st','$cd')");
    move_uploaded_file($_FILES['foto']['tmp_name'], 'album/' . $foto);
    $id_img = mysqli_insert_id($mysqli); //obtenemos el id del ultimo insert realizado
    $mysqli->close(); //cerramos la conexió del primer query
    
    //query para relacionar imagen con galeria(s) 
    
   
            $relacion = mysqli_query($mysqli2, "INSERT INTO content_party_room (id_content,id_party_room)"
                             . "VALUES('$id_img','$id_party')");
          
            $mysqli2->close(); 
       
       
?>