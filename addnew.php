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
        <p style="text-align: right;">
            Pokemon: <input type="text" id="pokemonName"><br>
            Type (type NULL if no secondary type): <input type="text" id="type1"> <input type="text" id="type2"><br>
            Status (Normal/Legendary/Mythical): <input type="text" id="pokemonStatus"><br>
            Trainer Name: <input type="text" id="pokemonTrainer"><br>
            Region: <input type="text" id="regionName"><br>
            Held Item (type NULL if there is none): <input type="text" id="heldItem"><br>
        </p>
        <p>
            <button class="yesbutton" ahref="" style="width: 50%;">Submit</button>
        </p>
    </div>
</body>
