<?php

include "config.php";
header("Content-Type: application/json; charset=UTF-8");
error_reporting(0);

$id = mysql_real_escape_string($_GET["id"]);
$event = mysql_real_escape_string($_GET["event"]);
$decoration = mysql_real_escape_string($_GET["decoration"]);


//query only by Party Room (ID)
if ($id!=null && empty($event) && empty($decoration)) {
    echo 'By party room';
    $result = $mysqli->query("SELECT id_party_room,sparty_room_name,short_description,long_description,creation_date,modification_date, "
            . "status FROM party_room WHERE id_party_room = '" . $id . "'");
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

    $result2 = $mysqli2->query("SELECT c.tittle,c.route,c.short_description,c.long_description,e.nombre,cpr.decoration FROM content_party_room AS cpr LEFT JOIN content AS c ON c.id_content = cpr.id_party_room LEFT JOIN events AS e ON e.id_event = cpr.id_party_room WHERE cpr.id_party_room ='" . $id . "'");
    while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
        $sh_des_im = mysql_real_escape_string($row['short_description']);
        $partialImage = array(
            'path' =>  $path,
            'tittle' => $row ['tittle'],
            'short_description' => $sh_des_im,
            'long_description' => $row['long_description'],
            'decoration' => $row['decoration'],
            'event' => $row['nombre']
        );
        array_push($response['partyRoom']['images'], $partialImage);
    }
    var_dump ( $response['partyRoom']);
    $json2 = json_encode($response['partyRoom']);
    echo $json2;
}   
//Query by Party Room and Event
    elseif($id!=null && $event!=null && empty ($decoration)) {
    echo 'By party room and event';
    $result = $mysqli->query("SELECT id_party_room,sparty_room_name,short_description,long_description,creation_date,modification_date, "
            . "status FROM party_room WHERE id_party_room = '" . $id . "'");
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

    $result2 = $mysqli2->query("SELECT c.tittle,c.route,c.short_description,c.long_description,e.nombre,cpr.decoration FROM content_party_room AS cpr LEFT JOIN content AS c ON c.id_content = cpr.id_party_room LEFT JOIN events AS e ON e.id_event = cpr.id_party_room WHERE cpr.id_party_room ='" . $id . "' AND cpr.id_event = '" . $event . "'");
    while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
        $sh_des_im = mysql_real_escape_string($row['short_description']);
        $partialImage = array(
            'path' =>  $path,
            'tittle' => $row ['tittle'],
            'short_description' => $sh_des_im,
            'long_description' => $row['long_description'],
            'decoration' => $row['decoration'],
            'event' => $row['nombre']
        );
        array_push($response['partyRoom']['images'], $partialImage);
    }
    var_dump ( $response['partyRoom']);
    $json2 = json_encode($response['partyRoom']);
    echo $json2;
}   
//Query by Party Room, Event and Decoration
    elseif($id!=null && $event!=null && $decoration!=null){
    echo 'By party room event and decoration';
        $result = $mysqli->query("SELECT id_party_room,sparty_room_name,short_description,long_description,creation_date,modification_date, "
                . "status FROM party_room WHERE id_party_room = '" . $id . "'");
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

        $result2 = $mysqli2->query("SELECT c.tittle,c.route,c.short_description,c.long_description,e.nombre,cpr.decoration FROM content_party_room AS cpr LEFT JOIN content AS c ON c.id_content = cpr.id_party_room LEFT JOIN events AS e ON e.id_event = cpr.id_party_room WHERE cpr.id_party_room ='" . $id . "' AND cpr.id_event = '" . $event . "' AND cpr.decoration = '" . $decoration . "'");
        while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
            $sh_des_im = mysql_real_escape_string($row['short_description']);
            $partialImage = array(
                'path' =>  $path,
                'tittle' => $row ['tittle'],
                'short_description' => $sh_des_im,
                'long_description' => $row['long_description'],
                'decoration' => $row['decoration'],
                'event' => $row['nombre']
            );
            array_push($response['partyRoom']['images'], $partialImage);
        }
        var_dump ( $response['partyRoom']);
        $json2 = json_encode($response['partyRoom']);
        echo $json2;
}   //query with id and section
    elseif ($id!=null && empty ($st) && $sc!=null) {
    echo 'By party room and decoration';
        echo $st;
        $result = $mysqli->query("SELECT id_party_room,sparty_room_name,short_description,long_description,creation_date,modification_date, "
                . "status FROM party_room WHERE id_party_room = '" . $id . "'");
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

        $result2 = $mysqli2->query("SELECT c.tittle,c.route,c.short_description,c.long_description,e.nombre,cpr.decoration FROM content_party_room AS cpr LEFT JOIN content AS c ON c.id_content = cpr.id_party_room LEFT JOIN events AS e ON e.id_event = cpr.id_party_room WHERE cpr.id_party_room ='" . $id . "' AND cpr.decoration = '" . $decoration . "'");
        while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
            $sh_des_im = mysql_real_escape_string($row['short_description']);
            $partialImage = array(
                'path' =>  $path,
                'tittle' => $row ['tittle'],
                'short_description' => $sh_des_im,
                'long_description' => $row['long_description'],
                'decoration' => $row['decoration'],
                'event' => $row['nombre']
            );
            array_push($response['partyRoom']['images'], $partialImage);
        }
        var_dump ( $response['partyRoom']);
        $json2 = json_encode($response['partyRoom']);
        echo $json2;
} //query with status and section
    elseif (empty ($id) && empty ($decoration) && $event!=null) {
    echo 'By event';
        $result = $mysqli->query("SELECT pr.id_party_room,pr.party_room_name,pr.short_description,pr.long_description,pr.creation_date,pr.modification_date, "
                . "status FROM content_party_room AS pr LEFT JOIN party_room WHERE cpr.id_event = '" . $event . "'");
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

        $result2 = $mysqli2->query("SELECT c.tittle,c.route,c.short_description,c.long_description,e.nombre,cpr.decoration FROM content_party_room AS cpr LEFT JOIN content AS c ON c.id_content = cpr.id_party_room LEFT JOIN events AS e ON e.id_event = cpr.id_party_room WHERE cpr.id_event ='" . $event . "'");
        while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
            $sh_des_im = mysql_real_escape_string($row['short_description']);
            $partialImage = array(
                'path' =>  $path,
                'tittle' => $row ['tittle'],
                'short_description' => $sh_des_im,
                'long_description' => $row['long_description'],
                'decoration' => $row['decoration'],
                'event' => $row['nombre']
            );
            array_push($response['partyRoom']['images'], $partialImage);
        }
        var_dump ( $response['partyRoom']);
        $json2 = json_encode($response['partyRoom']);
        echo $json2;
}//query with section
    elseif (empty ($id) && empty ($event) && $decoration!=null) {
    echo 'By decoration';
    $result = $mysqli->query("SELECT pr.id_party_room,pr.party_room_name,pr.short_description,pr.long_description,pr.creation_date,pr.modification_date, "
            . "status FROM content_party_room AS pr LEFT JOIN party_room WHERE cpr.decoration = '" . $decoration . "'");
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

        $result2 = $mysqli2->query("SELECT c.tittle,c.route,c.short_description,c.long_description,e.nombre,cpr.decoration FROM content_party_room AS cpr LEFT JOIN content AS c ON c.id_content = cpr.id_party_room LEFT JOIN events AS e ON e.id_event = cpr.id_party_room WHERE cpr.decoration ='" . $decoration . "'");
        while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
            $sh_des_im = mysql_real_escape_string($row['short_description']);
            $partialImage = array(
                'path' =>  $path,
                'tittle' => $row ['tittle'],
                'short_description' => $sh_des_im,
                'long_description' => $row['long_description'],
                'decoration' => $row['decoration'],
                'event' => $row['nombre']
            );
            array_push($response['partyRoom']['images'], $partialImage);
        }
        var_dump ( $response['partyRoom']);
        $json2 = json_encode($response['partyRoom']);
        echo $json2;
}
//query with status
    elseif (empty ($id) && $decoration!==null && $event!==null) {
    
   echo 'By event and decoration';
   $result = $mysqli->query("SELECT pr.id_party_room,pr.party_room_name,pr.short_description,pr.long_description,pr.creation_date,pr.modification_date, "
           . "status FROM content_party_room AS pr LEFT JOIN party_room WHERE cpr.id_event = '" . $event . "' AND cpr.decoration = '" . $decoration . "'");
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

       $result2 = $mysqli2->query("SELECT c.tittle,c.route,c.short_description,c.long_description,e.nombre,cpr.decoration FROM content_party_room AS cpr LEFT JOIN content AS c ON c.id_content = cpr.id_party_room LEFT JOIN events AS e ON e.id_event = cpr.id_party_room WHERE cpr.id_event ='" . $event . "' AND cpr.decoration = '" . $decoration . "'");
       while ($row = $result2->fetch_array(MYSQLI_ASSOC)) {
           $sh_des_im = mysql_real_escape_string($row['short_description']);
           $partialImage = array(
               'path' =>  $path,
               'tittle' => $row ['tittle'],
               'short_description' => $sh_des_im,
               'long_description' => $row['long_description'],
               'decoration' => $row['decoration'],
               'event' => $row['nombre']
           );
           array_push($response['partyRoom']['images'], $partialImage);
       }
       var_dump ( $response['partyRoom']);
       $json2 = json_encode($response['partyRoom']);
       echo $json2;
}
    else {

    echo  'no';
}

    


//if () {
//    echo 'las 3';
//} else {
//    

?>
        
