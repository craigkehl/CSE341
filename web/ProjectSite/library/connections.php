<?php
/*
* Proxy connection to the database
*/ 
function db_Connect() {       
    $dbUrl = getenv('DATABASE_URL');

    $dbOpts = parse_url($dbUrl);

    $dbHost = $dbOpts["host"];
    $dbPort = $dbOpts["port"];
    $dbUser = $dbOpts["user"];
    $dbPassword = $dbOpts["pass"];
    $dbName = ltrim($dbOpts["path"],'/');
    
    try {
        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

        // this line makes PDO give us an exception when there are problems
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db; 
    }    
    catch(PDOException $ex) {
        echo 'Error!: ' . $ex->getMessage();
        exit();
    }    
}


