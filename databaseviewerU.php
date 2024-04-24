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
    <h1 style="color:#3E51A5; margin-bottom:-10px;">
        <img src="https://pokedex196.carrd.co/assets/images/image02.gif?v=78053d82" style="height:60px; margin:0;">
        Hello, <?php 
        if (isset($_SESSION["username"])) {
        echo $_SESSION["username"];
        }
    ?></h1>
    <p>
    
    <a href="/Pokedex/addnew.php">Add new Pokemon</a>
    </p>
   <table style="margin:10px auto 10px auto auto; border:none;">
        <thead>
            <tr>
                <th>Pokemon</th>
                <th>Type</th>
                <th>Status</th>
                <th>Trainer</th>
                <th>Region</th>
                <th>Held Item</th>
            </tr>   
        </thead>
       <tbody>
           <?php
            $servername = "localhost";
            $username = "jmiltier";
            $password = "cpsc1051";
            $dbname = "Pokedex";
            $connection = new mysqli($servername, $username, $password, $dbname);

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

                $result = mysqli_query($connection, $query);
            
                while($row = mysqli_fetch_array($result)) {
                    echo "<tr>";
                    echo "<td>" . $row['p_name'] . "</td>";
                    echo "<td>" . $row['type_name'];
                    if ($row['type2']!='None') {
                        echo " / " . $row['type2'] . "</td>";
                    } else { echo "</td>"; }
                    echo "<td>" . $row['status_name'] . "</td>";
                    echo "<td>" . $row['trainer_name'] . "</td>";
                    echo "<td>" . $row['region_name'] . "</td>";
                    echo "<td>" . $row['item_name'] . "</td>";
                    $id = $row['p_id'];
                    echo "<td>
                            <form action=\"/Pokedex/delete.php\" method=\"GET\">
                                <button name=\"delete\" value=\"$id\" type=\"submit\">Delete</button>
                            </form>
                            <form action=\"/Pokedex/editPokemon.php\" method=\"GET\">
                                <button name=\"update\" value=\"$id\" type\"submit\">Update</button>
                        </td>";
                    echo "</tr>";
                }
            
            ?>
          </tr>
      </tbody>
   </table>
    <a href="login.php">Logout</a>
</div>
</div>
</body>
</html>
