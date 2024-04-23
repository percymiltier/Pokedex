<?php session_start(); ?>

<html>
    <head>        
     <meta charset="UTF-8">
     <meta name="viewport" content="width=1000px, initial-scale=1.0">
     <title>Login</title>
     <link href="/Pokedex/stylesheet.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <div class="display:flex; flex-flow:column;">
<body>
<div class="mainTable">
    <h2 style="color: white">Hello, <?php 
        if (isset($_SESSION["username"])) {
        echo $_SESSION["username"];
        }
    ?></h2>
    <p>
    
    <a href="/Pokedex/addnew.php">Add new Pokemon</a>
    </p>
   <table style="margin:10px auto 10px auto auto;">
        <thead>
            <tr>
                <td>Pokemon</td>
                <td>Type</td>
                <td>Status</td>
                <td>Trainer</td>
                <td>Region</td>
                <td>Held Item</td>
                <td></td>
            </tr>   
        </thead>
       <tbody>
           <?php
            $sql = "SELECT * FROM Pokemon";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }

            $query= "
                    SELECT p_id, p_name, status_name, type_name, item_name, trainer_name, region_name
                    FROM Pokemon AS p
                    INNER JOIN Status AS s ON s.status_id = p.status_id
                    INNER JOIN Type AS t ON t.type_id = p.type_id
                    INNER JOIN Item AS i ON i.item_id = p.item_id
                    INNER JOIN Trainer AS t ON t.trainer_id = p.trainer_id
                    INNER JOIN Region AS r ON r.region_id = r.region_id";

            <a class='btn btn-primary btn-sm' href='update'>Update</a>
            <a href='delete'>Delete</a>
        </td>
          </tr>";
            ?>
      </tbody>
      
   </table>
</div>
</div>
</body>
</html>
