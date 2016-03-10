<?php

include "config.php";
header("Content-Type: application/json; charset=UTF-8");
error_reporting(0);

$id = mysql_real_escape_string($_GET["id"]);
$st = mysql_real_escape_string($_GET["st"]);
$sc = mysql_real_escape_string($_GET["sc"]);


//query only by Party Room (ID)
if ($id!=null && empty($st) && empty($sc)) {
    echo 'By party room';
    echo $st;
    $result = $mysqli->query("SELECT id_party_room,sparty_room_name,short_description,long_description,creation_date,modification_date, "
            . "status FROM galery WHERE id_party_room = '" . $id . "'");
    while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        
        $response ['partyRoom'] = array(
            'id_party_room' => $row['id_party_room'],
            'room_name' => $row['sparty_room_name'],
            'short_description' => $row['short_description'],
            'long_description' => $row['long_description'],
            'status' => $row['status'],
            'creation_date' => $row['creation_date'],
            'modification_date' => $row['modification_date'],
            'images' => array(),
        );
    }

    $result2 = $mysqli2->query("SELECT content.route,content.title,content.decoration,content.id_event,content.short_description,content.long_description, events.nombre from 
        content left join content_party_room on content.id_content = content_party_room.id_content, events left join content on events.id_event = content.id_content where 
        content_party_room.id_party_room = '" . $id . "'");
    while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
        $sh_des_im = mysql_real_escape_string($row['short_description']);
        $path= mysql_real_escape_string('php/album/' . $row['route']);
        $partialImage = array(
            'path' =>  $path,
            'tittle' => $row ['tittle'],
            'short_description' => $sh_des_im,
            'long_description' => $row['long_description'],
            'decoration' => $row['decoration'],
            'event' => $row['name']
        );
        array_push($response['galery']['images'], $partialImage);
    }
    $json2 = json_encode($response['galery']);
    echo $json2;
}   //query only by id and status
//     elseif($id!=null && $st!=null && empty ($sc)) {
//     echo 'by id and status';
  
//     $result = $mysqli->query("SELECT id_galery,title_galery,short_description,long_description,creation_date,modification_date, "
//             . "status FROM galery WHERE id_galery = '" . $id . "' and status ='" . $st . "'");
//     while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//         $sh = mysql_real_escape_string();
//         $response ['galery'] = array(
//             'id_gallery' => $row['id_galery'],
//             'title' => $row['title_galery'],
//             'short_description' => $row['short_description'],
//             'long_description' => $row['long_description'],
//             'status' => $row['status'],
//             'creation_date' => $row['creation_date'],
//             'modification_date' => $row['modification_date'],
//             'images' => array(),
//         );
//     }

//     $result2 = $mysqli2->query("SELECT route,title,short_description,long_description from 
//         content left join content_galery on content.id_content = content_galery.id_content where 
//         content_galery.id_galery = '" . $id . "'");
//     while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
//         $sh_des_im = mysql_real_escape_string($row['short_description']);
//         $partialImage = array(
//             'path' => 'php/album/' . $row['route'],
//             'title' => $row ['title'],
//             'short_description' => $sh_des_im,
//             'long_description' => $row['long_description'],
//         );
//         array_push($response['galery']['images'], $partialImage);
//     }
//     $json2 = json_encode($response['galery']);
//     echo $json2;
    
    
// }   //query with id,status and section
//     elseif($id!=null && $st!=null && $sc!=null){
//     echo 'los 3';
//     $result = $mysqli->query("SELECT id_galery,title_galery,short_description,long_description,creation_date,modification_date, "
//             . "status FROM galery WHERE id_galery = '" . $id . "' and status ='" . $st . "' and section= '".$sc."'");
//     while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//         $sh = mysql_real_escape_string();
//         $response ['galery'] = array(
//             'id_gallery' => $row['id_galery'],
//             'title' => $row['title_galery'],
//             'short_description' => $row['short_description'],
//             'long_description' => $row['long_description'],
//             'status' => $row['status'],
//             'creation_date' => $row['creation_date'],
//             'modification_date' => $row['modification_date'],
//             'images' => array(),
//         );
//     }

//     $result2 = $mysqli2->query("SELECT route,title,short_description,long_description from 
//         content left join content_galery on content.id_content = content_galery.id_content where 
//         content_galery.id_galery = '" . $id . "'");
//     while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
//         $sh_des_im = mysql_real_escape_string($row['short_description']);
//         $partialImage = array(
//             'path' => 'php/album/' . $row['route'],
//             'title' => $row ['title'],
//             'short_description' => $sh_des_im,
//             'long_description' => $row['long_description'],
//         );
//         array_push($response['galery']['images'], $partialImage);
//     }
//     $json2 = json_encode($response['galery']);
//     echo $json2;
// }   //query with id and section
//     elseif ($id!=null && empty ($st) && $sc!=null) {
//     echo 'id y seccion';
//     $result = $mysqli->query("SELECT id_galery,title_galery,short_description,long_description,creation_date,modification_date, "
//             . "status FROM galery WHERE id_galery ='" . $id . "' and section= '".$sc."'");
//     while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//         $sh = mysql_real_escape_string();
//         $response ['galery'] = array(
//             'id_gallery' => $row['id_galery'],
//             'title' => $row['title_galery'],
//             'short_description' => $row['short_description'],
//             'long_description' => $row['long_description'],
//             'status' => $row['status'],
//             'creation_date' => $row['creation_date'],
//             'modification_date' => $row['modification_date'],
//             'images' => array(),
//         );
//     }

//     $result2 = $mysqli2->query("SELECT route,title,short_description,long_description from 
//         content left join content_galery on content.id_content = content_galery.id_content where 
//         content_galery.id_galery = '" . $id . "'");
//     while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
//         $sh_des_im = mysql_real_escape_string($row['short_description']);
//         $partialImage = array(
//             'path' => 'php/album/' . $row['route'],
//             'title' => $row ['title'],
//             'short_description' => $sh_des_im,
//             'long_description' => $row['long_description'],
//         );
//         array_push($response['galery']['images'], $partialImage);
//     }
//     $json2 = json_encode($response['galery']);
//     echo $json2;
// } //query with status and section
//     elseif (empty ($id) && $st!=null && $sc!=null) {
//     echo 'section and status';
//     $result = $mysqli->query("SELECT id_galery,title_galery,short_description,long_description,creation_date,modification_date, "
//             . "status FROM galery WHERE status ='" . $st . "' and section= '".$sc."'");
//     while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//         $id2=$row['id_galery'];
//         $response ['galery'] = array(
//             'id_gallery' => $row['id_galery'],
//             'title' => $row['title_galery'],
//             'short_description' => $row['short_description'],
//             'long_description' => $row['long_description'],
//             'status' => $row['status'],
//             'creation_date' => $row['creation_date'],
//             'modification_date' => $row['modification_date'],
//             'images' => array(),
//         );
//     }

//     $result2 = $mysqli2->query("SELECT route,title,short_description,long_description from 
//         content left join content_galery on content.id_content = content_galery.id_content where 
//         content_galery.id_galery = '" . $id2 . "'");
//     while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
//         $sh_des_im = mysql_real_escape_string($row['short_description']);
//         $partialImage = array(
//             'path' => 'php/album/' . $row['route'],
//             'title' => $row ['title'],
//             'short_description' => $sh_des_im,
//             'long_description' => $row['long_description'],
//         );
//         array_push($response['galery']['images'], $partialImage);
//     }
//     $json2 = json_encode($response['galery']);
//     echo $json2;
// }//query with section
//     elseif (empty ($id) && empty ($st) && $sc!=null) {
//     echo 'section';
//     $result = $mysqli->query("SELECT id_galery,title_galery,short_description,long_description,creation_date,modification_date, "
//             . "status FROM galery WHERE section= '".$sc."'");
//     while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//         $id2=$row['id_galery'];
//         $response ['galery'] = array(
//             'id_gallery' => $row['id_galery'],
//             'title' => $row['title_galery'],
//             'short_description' => $row['short_description'],
//             'long_description' => $row['long_description'],
//             'status' => $row['status'],
//             'creation_date' => $row['creation_date'],
//             'modification_date' => $row['modification_date'],
//             'images' => array(),
//         );
//     }

//     $result2 = $mysqli2->query("SELECT route,title,short_description,long_description from 
//         content left join content_galery on content.id_content = content_galery.id_content where 
//         content_galery.id_galery = '" . $id2 . "'");
//     while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
//         $sh_des_im = mysql_real_escape_string($row['short_description']);
//         $partialImage = array(
//             'path' => 'php/album/' . $row['route'],
//             'title' => $row ['title'],
//             'short_description' => $sh_des_im,
//             'long_description' => $row['long_description'],
//         );
//         array_push($response['galery']['images'], $partialImage);
//     }
//     $json2 = json_encode($response['galery']);
//     echo $json2;
// }
// //query with status
//     elseif (empty ($id) && $st!==null && empty ($sc)) {
    
//     $result = $mysqli->query("SELECT id_galery,title_galery,short_description,long_description,creation_date,modification_date, "
//             . "status FROM galery WHERE status= '".$st."'");
//     while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
//         $id2=$row['id_galery'];
//         $response ['galery'] = array(
//             'id_gallery' => $row['id_galery'],
//             'title' => $row['title_galery'],
//             'short_description' => $row['short_description'],
//             'long_description' => $row['long_description'],
//             'status' => $row['status'],
//             'creation_date' => $row['creation_date'],
//             'modification_date' => $row['modification_date'],
//             'images' => array(),
//         );
//     }

//     $result2 = $mysqli2->query("SELECT route,title,short_description,long_description from 
//         content left join content_galery on content.id_content = content_galery.id_content where 
//         content_galery.id_galery = '" . $id2 . "'");
//     while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
//         $sh_des_im = mysql_real_escape_string($row['short_description']);
//         $partialImage = array(
//             'path' => 'php/album/' . $row['route'],
//             'title' => $row ['title'],
//             'short_description' => $sh_des_im,
//             'long_description' => $row['long_description'],
//         );
//         array_push($response['galery']['images'], $partialImage);
//     }
//     $json2 = json_encode($response['galery']);
//     echo $json2;
// }
//     else {

//     echo  'no';
// }

    


//if () {
//    echo 'las 3';
//} else {
//    

?>
        
