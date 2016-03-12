<?php
//    $mysqli = new mysqli("localhost", "root", "", "CasaBeltrami");
//    if ($mysqli->connect_errno) {
//        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
//    }
//    $mysqli2 = new mysqli("localhost", "root", "", "CasaBeltrami");
//    if ($mysqli->connect_errno) {
//        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
//    }
//    $mysqli3 = new mysqli("localhost", "root", "", "CasaBeltrami");
//    if ($mysqli->connect_errno) {
//        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
//    }
//

    $mysqli = new mysqli("mysql.hostinger.mx", "u597385701_root", "2011301308", "u597385701_cbgal");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
    }
    $mysqli2 = new mysqli("mysql.hostinger.mx", "u597385701_root", "2011301308", "u597385701_cbgal");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
    }
    $mysqli3 = new mysqli("mysql.hostinger.mx", "u597385701_root", "2011301308", "u597385701_cbgal");
    if ($mysqli->connect_errno) {
        echo "Failed to connect to MySQL: " . $mysqli->connect_error;   
    }

?>
