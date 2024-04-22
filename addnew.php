<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1000px, initial-scale=1.0">
    <title>Add new Pokemon</title>
    <link href="/Pokedex/stylesheet.css" rel="stylesheet" type="text/css" media="all">
</head>

<body>
    <!-- main -->
    <div class="main">
        <h1>Add a new record:</h1>
        <form action="/Pokedex/newpokemon.php" method="GET">
        <p style="text-align: right;">
            Pokemon: <input type="text" id="pokemonName"><br>
<<<<<<< HEAD
            Type (type NULL if no secondary type): <input type="text" id="type1"> <input type="text" id="type2"><br>
            Status (Normal/Legendary/Mythical):  <label for="status">Choose a status:</label>

            <select name="status" id="status">
              <option value="Normal">Normal</option>
              <option value="Legendary">Legendary</option>
              <option value="Mythical">Mythical</option>
            </select> <br>
            Trainer Name: <input type="text" id="pokemonTrainer"><br>
            Region: <label for="region">Choose a region:</label>
            <select name="region" id="region">
              <option value="Kanto">Kanto</option>
              <option value="Johto">Johto</option>
              <option value="Hoenn">Hoenn</option>
              <option value="Sinnon">Sinnoh</option>
              <option value="Unova">Unova</option>
              <option value="Kalos">Kalos</option>
              <option value="Alola">Alola</option>
              <option value="Galar">Galar</option>
              <option value="Paldea">Paldea</option>
=======
            Type 1: <select name="type1" id="type1">
              <option value="grass">Grass</option>
              <option value="fire">Fire</option>
              <option value="water">Water</option>
              <option value="electric">Electric</option>
              <option value="ice">Ice</option>
              <option value="posion">Posion</option>
              <option value="ground">Ground</option>
              <option value="flying">Flying</option>
              <option value="psychic">Psychic</option>
              <option value="bug">Bug</option>
              <option value="rock">Rock</option>
              <option value="ghost">Ghost</option>
              <option value="dragon">Dragon</option>
              <option value="dark">Dark</option>
              <option value="steel">Steel</option>
              <option value="fairy">Fairy</option>
                
            </select> <br>
            Type 2: <select name="type2" id="type2">
              <option value="notype2">NULL</option>
              <option value="grass">Grass</option>
              <option value="fire">Fire</option>
              <option value="water">Water</option>
              <option value="electric">Electric</option>
              <option value="ice">Ice</option>
              <option value="posion">Posion</option>
              <option value="ground">Ground</option>
              <option value="flying">Flying</option>
              <option value="psychic">Psychic</option>
              <option value="bug">Bug</option>
              <option value="rock">Rock</option>
              <option value="ghost">Ghost</option>
              <option value="dragon">Dragon</option>
              <option value="dark">Dark</option>
              <option value="steel">Steel</option>
              <option value="fairy">Fairy</option>
            </select> <br>
            
            Status: <select name="status" id="status">
              <option value="normal">Normal</option>
              <option value="legendary">Legendary</option>
              <option value="mythical">Mythical</option>
            </select> <br>
            
            Trainer Name: <input type="text" id="trainer_name"><br>
            
            Region: <select name="region" id="region">
              <option value="kanto">Kanto</option>
              <option value="johto">Johto</option>
              <option value="hoenn">Hoenn</option>
              <option value="sinnon">Sinnoh</option>
              <option value="unova">Unova</option>
              <option value="kalos">Kalos</option>
              <option value="alola">Alola</option>
              <option value="galar">Galar</option>
              <option value="paldea">Paldea</option>
>>>>>>> 7680df986ec95e95b24d90a1a984ebdc08b5dc5f
            </select><br>
            
            Held Item (type NULL if there is none): <input type="text" id="heldItem"><br>
            <input type="submit" value="Submit">
        </p>
        </form>
    </div>
</body>
