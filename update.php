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

    $p_name = $_GET['pokemonName'];
    $type1 = $_GET['type1'];
    $type2 = $_GET['type2'];
    $status = $_GET['status'];
    $trainer = $_GET['pokemonTrainer'];
    $region = $_GET['region'];
    $item = $_GET['heldItem'];

if ($p_name=="") {
    $_SESSION['error'] = "<p>Please enter a Pokemon.</p>";
    header("Location:/Pokedex/addnew.php");
    exit();
} else if ($trainer=="") {
    $_SESSION['error'] = "<p>Please enter a trainer.</p>";
    header("Location:/Pokedex/addnew.php");
    exit();
}

    $sql_check_t = "SELECT trainer_id FROM Trainer WHERE trainer_name='$trainer'";
    $sql_check_i = "SELECT item_id FROM Held_Item WHERE item_name='$item'";

    $result_check_t = mysqli_query($connection, $sql_check_t);
    $result_check_i = mysqli_query($connection, $sql_check_i);

    $sql_t = "INSERT INTO Trainer (trainer_name) VALUES ('$trainer');";
    $sql_i = "INSERT INTO Held_Item (item_name) VALUES ('$item');";
    $sql_p = "INSERT INTO Pokemon (
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

    $row_t = mysqli_num_rows($result_check_t);
    $row_i = mysqli_num_rows($result_check_i);

    if ($row_t!=0) {
        $insertYAY_t = true;
    } else {
        $insertYAY_t = mysqli_query($connection, $sql_t);
    }

    if ($row_i!=0) {
        $insertYAY_i = true;
    } else {
        $insertYAY_i = mysqli_query($connection, $sql_i);
    }    

    $insertYAY_p = mysqli_query($connection, $sql_p);

    if ($insertYAY_t && $insertYAY_i && $insertYAY_p) {
        header("Location:/Pokedex/databaseviewerU.php");
    } else {
        $_SESSION['error'] = "<p>Failed to add new pokemon. Try again.</p>";  
    }

?>
