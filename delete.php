<?php
    $servername = "localhost";
    $username = "jmiltier";
    $password = "cpsc1051";
    $dbname = "Pokedex";
    $connection = new mysqli($servername, $username, $password, $dbname);

    $record = $_GET["delete"];
    
    $sql = "DELETE FROM Pokemon WHERE p_id = '$record';";    

    $connection->query($sql);

    header("Location:/Pokedex/databaseviewerU.php");
?>
