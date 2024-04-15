<?php
require_once('login.php');
$query = "select * from users";
$result = mysqli_query($con, $query);

?>

<!DOCTYPE html>
<html land="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Pokedex/stylesheet.css">
    <title> View Database (Guest)
</head>
<body class = "bg-dark">
    <div class="Container">
        <div class="row">
            <div class="col">
                <div class= "card mt-5">
                    <h2 class="display-6 text-center">Fetch Data From Database in PHP</h2>
                </div>
                <div class="card-body">
                    <table class= "table table-bordered text-center">
                        <tr class="bg-dark text-white">
                            <td> Pokemon </td>
                            <td> Type </td>
                            <td> Status </td>
                            <td> Trainer </td>
                            <td> Region </td>
                            <td> Held Item </td>
</div>
</div>
</div>
</div>
</body>
</html>
