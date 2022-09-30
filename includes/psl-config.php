<?php

    // define("HOST", "localhost"); 			// The host you want to connect to. 
    // define("USER", "root"); 			// The database username. 
    // define("PASSWORD", ""); 	// The database password. 
    // define("DATABASE", "crm_elbossinmobiliaria");             // The database name.
    // $hostname = 'localhost';
    // $database = 'crm_elbossinmobiliaria';
    // $username = 'root';
    // $password = '';
    // $database = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8",$username,$password);


// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


    define("HOST", "db5006942057.hosting-data.io"); 			// The host you want to connect to. 
    define("USER", "dbu207866"); 			// The database username. 
    define("PASSWORD", "NFsUi2da@p#J6yL"); 	// The database password. 
    define("DATABASE", "dbs5731927");             // The database name.
    $hostname = 'db5006942057.hosting-data.io';
    $database = 'dbs5731927';
    $username = 'dbu207866';
    $password = 'NFsUi2da@p#J6yL';
    $database = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8",$username,$password);




    define("CAN_REGISTER", "any");
    define("DEFAULT_ROLE", "member");

    /**
     * If you are using an HTTPS connection, change this to TRUE
     */
    define("SECURE", TRUE);    // For development purposes only!!!!


    /////////////////////////////////// DATABASE CONNECT////////////////////////////////////
        // change paramettre de URL HOSTING
        // $hostingUrl = "http://localhost/crm/";
        $hostingUrl = "https://elbossinmobiliaria.es/";
        $hostingUrlimage="images";
        $ImageDefault="645dsfssd65f98sdf5sd6f5ssfsddsff.png";
        $SymbolEuro = "€";
        $SymbolSub = "m²";
        $emailhosting = "zs7@gcloud.ua.es";
?>