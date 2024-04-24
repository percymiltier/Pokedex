<?php session_start(); ?>

<html>
    <head>        
     <meta charset="UTF-8">
     <meta name="viewport" content="width=1000px, initial-scale=1.0">
     <title>Database</title>
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
            </tr>   
        </thead>
       <tbody>
           <?php
            $servername = "localhost";
            $username = "jmiltier";
            $password = "cpsc1051";
            $dbname = "Pokedex";
            $connection = new mysqli($servername, $username, $password, $dbname);
            $sql = "SELECT * FROM Pokemon";
            $result = $connection->query($sql);

            if (!$result) {
                die("Invalid query: " . $connection->error);
            }

            $query= "
                    SELECT
                    Pokemon.p_id,
	                Pokemon.p_name,
	                Type.type_name,
	                t2.type_name AS type2,

	                Status.status_name,
	                Trainer.trainer_name,
	                Region.region_name,
	                Held_Item.item_name
	
                	FROM Pokemon
	
                	JOIN Type ON Type.type_id = Pokemon.type_id
                	JOIN Type t2 ON t2.type_id = Pokemon.type2_id
                	JOIN Status ON Status.status_id = Pokemon.status_id
                	JOIN Trainer ON Trainer.trainer_id = Pokemon.trainer_id
                	JOIN Region ON Region.region_id = Pokemon.region_id
                	JOIN Held_Item ON Held_Item.item_id = Pokemon.item_id;
                    ";

            if ($result->num_rows>0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['p_name'] . "</td>";
                    echo "<td>" . $row['type_name'] . " / ";
                    echo $row['type2'] . "</td>";
                    echo "<td>" . $row['status_name'] . "</td>";
                    echo "<td>" . $row['trainer_name'] . "</td>";
                    echo "<td>" . $row['region_name'] . "</td>";
                    echo "<td>" . $row['item_name'] . "</td>";
                    $id = $row['p_id'];
                    echo "<td>
                            <form action=\"/Pokedex/delete.php\" method=\"GET\">
                                <button name=\"delete\" value=\"$id\" type=\"submit\">Delete</button>
                            </form>
                        </td>";
                    echo "</tr>";
                }
            }
            ?>
          </tr>
      </tbody>
   </table>
</div>
</div>
</body>
</html>
