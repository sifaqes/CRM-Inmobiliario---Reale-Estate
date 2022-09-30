<?php
//  Configuracion de base de datos
    define("HOST", "localhost"); 
    define("USER", "root"); 			
    define("PASSWORD", ""); 	
    define("DATABASE", "crm_elbossinmobiliaria");             
    $hostname = 'localhost';
    $database = 'crm_elbossinmobiliaria';
    $username = 'root';
    $password = '';
    $database = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8",$username,$password);


// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


 




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
        $emailhosting = "Your@mail.com";
?>