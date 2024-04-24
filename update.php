<?php session_start(); ?>

<?php
     $servername = "localhost";
                  $username = "jmiltier";
                  $password = "cpsc1051";
                  $dbname = "Pokedex";
 
                  $connection = new mysqli($servername, $username, $password, $dbname);
 
                  if ($connection->connect_error) {
                      die("Connection failed.");
                  }

    $id = $_GET['id'];

    $p_name = $_GET['pokemonName'];
    $type1 = $_GET['type1'];
    $type2 = $_GET['type2'];
    $status = $_GET['status'];
    $trainer = $_GET['pokemonTrainer'];
    $region = $_GET['region'];
    $item = $_GET['heldItem'];

    $sql = "INSERT INTO Pokemon (
        p_name, 
        type_id, 
        type2_id, 
        status_id, 
        item_id, 
        trainer_id, 
        region_id
    ) VALUES (
        '$p_name', 
        (SELECT type_id FROM Type WHERE type_name='$type1'), 
        (SELECT type_id FROM Type WHERE type_name='$type2'),
        (SELECT status_id FROM Status WHERE status_name='$status'),
        (SELECT item_id FROM Held_Item WHERE item_name='$item'),
        (SELECT trainer_id FROM Trainer WHERE trainer_name='$trainer'),
        (SELECT region_id FROM Region WHERE region_name='$region')
    );";

    $insertYAY_p = mysqli_query($connection, $sql_p);

    if ($insertYAY_t && $insertYAY_i && $insertYAY_p) {
        header("Location:/Pokedex/databaseviewerU.php");
    } else {
        $_SESSION['error'] = "<p>Failed to edit pokemon. Try again.</p>";  
    }

?>
