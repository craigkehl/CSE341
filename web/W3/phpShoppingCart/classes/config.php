<?php
ob_start(); //Turns on output buffering 
session_start();

date_default_timezone_set("America/Denver");

try {
    $con = new PDO("mysql:dbname=cse341;host=localhost:3307", "root", "");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>