<?php
    $servername = "localhost";
                 $username = "jmiltier";
                 $password = "cpsc1051";
                 $dbname = "Pokedex";
      
                 $connection = new mysqli($servername, $username, $password,     $dbname); 
     
                 if ($connection->connect_error) {
                     die("Connection failed.");
                 }

    $name = $_GET['usernameR'];
    $pass = $_GET['passwordR'];

    $sql = "INSERT INTO Users (username, password) VALUES ('$name', '$pass');";

    $insert_success = mysqli_query($connection, $sql);

    if ($insert_success) {
        header("Location:/Pokedex/RegistrationSuccessful.php");
    } else {
        header("Location:/Pokedex/login.php");
    }
?>
