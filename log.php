<?php
    $servername = "localhost";
                $username = "jmiltier";
                $password = "cpsc1051";
                $dbname = "Pokedex";

                $connection = new mysqli($servername, $username, $password, $dbname);

                if ($connection->connect_error) {
                    die("Connection failed.");
                }
                
                $name = $_GET['usernameL'];
                $pass = $_GET['passwordL'];

                $sql = "SELECT * FROM Users WHERE username='$name' AND password='$pass';";
                $result = $connection->query($sql);
                $row = mysqli_num_rows($result);

                if ($row!=1) {
                    $_SESSION['error'] = 'Incorrect username or password.';
                    header("Location:/Pokedex/login.php");
                } else {
                    $_SESSION['username'] = $name;
                    header("Location:/Pokedex/databaseviewerU.php");
                }

?>
