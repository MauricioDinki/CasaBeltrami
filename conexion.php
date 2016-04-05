<?php
$host = "localhost";
$user = "root";
$clave = "";
$datbase = "CasaBeltrami";
$conectar=mysql_connect($host,$user,$clave);
mysql_select_db($datbase, $conectar);
?>