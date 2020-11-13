<?php
    $server = 'localhost';
    $username = 'root';
    $password = 'codio';
    $database = 'db';
    $conn = "";

    try{
        $conn = new PDO("mysql:host=$server;dbname=$database", $username, $password);
        $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo 'DB connection successful!';
    }
    catch(PDOException $e){
        echo 'DB connection failed '.$e->getMessage();
    }


?>