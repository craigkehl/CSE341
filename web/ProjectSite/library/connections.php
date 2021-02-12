<?php
    /*
    * Proxy connection to the database
    */ 
    function getDb() {
        try {
            $dbUrl = getenv('DATABASE_URL');
    
            $dbOpts = parse_url($dbUrl);
    
            $dbHost = $dbOpts["host"];
            $dbPort = $dbOpts["port"];
            $dbUser = $dbOpts["user"];
            $dbPassword = $dbOpts["pass"];
            $dbName = ltrim($dbOpts["path"],'/');
    
            $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
    
            // this line makes PDO give us an exception when there are problems
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
        }    
        catch (PDOException $ex) {
            echo 'Error!: ' . $ex->getMessage();
            die();
        }
        return $db;    
    }

    $db = getDb();
    var_dump($db);

?>