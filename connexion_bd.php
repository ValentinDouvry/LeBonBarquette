<?php

$user = "root";
$password = "";

try{
    $db = new PDO("mysql:host=localhost;dbname=lebonbarquette", $user, $password);
    // set the PDO error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
    echo "Connection failed: " . $e->getMessage();
}


?>