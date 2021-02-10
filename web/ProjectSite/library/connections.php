<?php
    /*
    * Proxy connection to the database
    */ 

    try {
        $dbUrl = getenv('DATABASE_URL');

        $dbOpts = parse_url($dbUrl);

        $dbHost = $dbOpts["host"];
        $dbPort = $dbOpts["port"];
        $dbUser = $dbOpts["user"];
        $dbPassword = $dbOpts["pass"];
        $dbName = ltrim($dbOpts["path"],'/');

        $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);


        // this line makes PDO give us an exception when there are problems,
        // and can be very helpful in debugging! (But you would likely want
        // to disable it for production environments.)
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        echo '<h4>Player Roster</h4><ol>';
 
        foreach ($db->query('SELECT first_name, last_name FROM public.persons') as $row)
        {
          echo "<li> Person:". $row['first_name'] . " " . $row['last_name'] . "</li>";
        }
        
        echo '</ol>';
    }

    catch (PDOException $ex) {
        echo 'Error!: ' . $ex->getMessage();
        die();
    };

?>
<h1>I hope this works</h1>