<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1000px, initial-scale=1.0">
    <title>Edit Pokemon</title>
    <link href="/Pokedex/stylesheet.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
    <!-- main -->
    <div class="main">
        <h1 style="text-align:center; color:#3E51A5;">Update an existing record:</h1>
        <?php
            header("Location:/Pokedex/editpokemon.php"); 
            if (isset($_SESSION['error'])) {
                echo "<div class=\"alert\">";
                echo $_SESSION['error'];
                echo"</div>";
                unset($_SESSION['error']);
            }
        ?>

        <?php 
            $servername = "localhost";
            $username = "jmiltier";
            $password = "cpsc1051";
            $dbname = "Pokedex";
            $connection = new mysqli($servername, $username, $password, $dbname);

            $id = $_GET['id'];
            $query = "SELECT
	Pokemon.p_id,
	Pokemon.p_name,
	Type.type_name,
	t2.type_name AS type2_name,
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
	JOIN Held_Item ON Held_Item.item_id = Pokemon.item_id

    WHERE Pokemon.p_id=" . $id . ";";
    
        $result = mysqli_query($connection, $query);
        $row = mysqli_fetch_array($result);

        $name = $row['p_name'];
        $type1 = $row['type_name'];
        $ype2 = $row['type2_name'];
        $status = $row['status_name'];
        $trainer = $row['trainer_name'];
        $region = $row['region_name'];
        $item = $row['item_name'];

        ?>
        <form action="/Pokedex/update.php" method="GET">
        <p style="text-align: right;">
<<<<<<< HEAD
            Pokemon: (Current: <?php echo $name; ?>) <input type="text" name="pokemonName"><br>
            <label for="status">Choose a status:</label>
=======
            Pokemon: <input type="text" name="pokemonName"><br>
             <label for="status">Choose a status (CURRENT: <php? $region= $_GET['status'<?];:</label>
>>>>>>> c57115a2e7fa6ceb70c4e7ddb41898def3da956b
            <select name="status" id="status">
              <option value="Normal">Normal</option>
              <option value="Legendary">Legendary</option>
              <option value="Mythical">Mythical</option>
            </select><br>

            <label for="region">Choose a region (CURRENT: <php? $region= $_GET['region'<?];:</label>
            <select name="region" id="region">
              <option value="Kanto">Kanto</option>
              <option value="Johto">Johto</option>
              <option value="Hoenn">Hoenn</option>
              <option value="Sinnoh">Sinnoh</option>
              <option value="Unova">Unova</option>
              <option value="Kalos">Kalos</option>
              <option value="Alola">Alola</option>
              <option value="Galar">Galar</option>
              <option value="Paldea">Paldea</option>
              <option value="Hisui">Hisui</option>
            </select><br>

            <label for="type1">Type 1 CURRENT: <php? $type_1 = $_GET['type1'<?]:</label>
            <select name="type1" id="type1">
              <option value="Normal">Normal</option>
              <option value="Grass">Grass</option>
              <option value="Fire">Fire</option>
              <option value="Water">Water</option>
              <option value="Electric">Electric</option>
              <option value="Ice">Ice</option>
              <option value="Posion">Posion</option>
              <option value="Ground">Ground</option>
              <option value="Flying">Flying</option>
              <option value="Psychic">Psychic</option>
              <option value="Bug">Bug</option>
              <option value="Rock">Rock</option>
              <option value="Ghost">Ghost</option>
              <option value="Dragon">Dragon</option>
              <option value="Dark">Dark</option>
              <option value="Steel">Steel</option>
              <option value="Fairy">Fairy</option> 
            </select> <br>

            <label for="type2">Type 2 CURRENT: <php? $type_2 = $_GET['type2'<?]:</label>
            <select name="type2" id="type2">
              <option value="None">None</option>
              <option value="Grass">Grass</option>
              <option value="Fire">Fire</option>
              <option value="Water">Water</option>
              <option value="Electric">Electric</option>
              <option value="Ice">Ice</option>
              <option value="Posion">Posion</option>
              <option value="Ground">Ground</option>
              <option value="Flying">Flying</option>
              <option value="Psychic">Psychic</option>
              <option value="Bug">Bug</option>
              <option value="Rock">Rock</option>
              <option value="Ghost">Ghost</option>
              <option value="Dragon">Dragon</option>
              <option value="Dark">Dark</option>
              <option value="Steel">Steel</option>
              <option value="Fairy">Fairy</option>
            </select> <br>
            
            Trainer Name: <input type="text" name="pokemonTrainer"><br>
            
            Held Item (type "None" if there is none): <input type="text" name="heldItem"><br>
            <input type="submit" value="Submit">
        </p>
        </form>
    </div>
</body>
