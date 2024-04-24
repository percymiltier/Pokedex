<?php session_start(); ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1000px, initial-scale=1.0">
    <title>Add new Pokemon</title>
    <link href="/Pokedex/stylesheet.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
    <!-- main -->
    <div class="main">
        <h1 style="text-align:center; color:#3E51A5;">Add a new record:</h1>
        <?php 
            if (isset($_SESSION['error'])) {
                echo "<div class=\"alert\">";
                echo $_SESSION['error'];
                echo"</div>";
                unset($_SESSION['error']);
            }
        ?>
        <form action="/Pokedex/newpokemon.php" method="GET">
        <p style="text-align: right;">
            Pokemon: <input type="text" name="pokemonName"><br>
            <label for="status">Choose a status:</label>
            <select name="status" id="status">
              <option value="Normal">Normal</option>
              <option value="Legendary">Legendary</option>
              <option value="Mythical">Mythical</option>
            </select><br>

            <label for="region">Choose a region:</label>
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

            <label for="type1">Type 1:</label>
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

            <label for="type2">Type 2: </label>
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
