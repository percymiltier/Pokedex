<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheet.css"> 
    </head>
    <div class="display:flex; flex-flow:column;">
<body>
<div class="mainTable" style="width:auto;">
    
    <h2 style="color:white">Hello, GUEST</h2>
   <table>
    <tr>
        <td>Pokemon</td>
        <td>Type 1</td>
        <td>Type 2</td>
        <td>Status</td>
        <td>Trainer</td>
        <td>Region</td>
        <td>Held Item</td>
      </tr>

    <?php
        $servername = "localhost";
        $username = "jmiltier";
        $password = "cpsc1051";
        $dbname = "Pokedex";

        $connection = new mysqli($servername, $username, $password, $dbname);

        if ($connection->connect_error) {
            die("Connection failed.");
        }

        $sql = "SELECT
            Pokemon.p_name,
            Type.type_name,
            Type.type_name,
    ?>
      
   </table>
    <a href="/Pokedex/login.php">Back to login</a>
</div>
</body>
</html>
