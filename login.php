<?php
    session_start();
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1000px, initial-scale=1.0">
    <title>Login</title>
    <link href="/Pokedex/stylesheet.css" rel="stylesheet" type="text/css" media="all">

</head>

<body>
    <!-- main -->
    <div class="main">
        <div style="display:flex; flex-flow:column;">
            <!-- button to use as a guest -->
            <a href="/Pokedex/viewdatabaseG.php" style="text-align:center;">View as Guest</a>

            <h1 style="color:#3E51A5; text-align:center;">OR</h1>
    
            <div style="display:flex; flex-flow:row;">
                <div style="display:flex; flex-flow:column; justify-content: center;">
                    <!-- User login -->
                        <?php
                            if (isset($_SESSION['error'])) {
                            echo "<div class=\"alert\">";
                            echo $_SESSION['error'];
                            unset($_SESSION['error']);
                            echo "</div>";
                            }
                        ?>

                    <form action="/Pokedex/log.php" method="GET">
                        <p>Login:</p>
                        <p >
                            Username: 
                            <input type="text" name="usernameL"><br>
                            Password:
                            <input type="password" name="passwordL"><br><br>
                        <input type="submit" value="Login">
                        </p>
                    </form>
                </div>
                <div style="height: 200px; border:1px solid #3E51A5; margin:15px"></div>
                <div style="display:flex; flex-flow:column; justify-content: center;">
                    <!-- Register -->
                    <form action="/Pokedex/register.php" method="get">
                        <p>Register:</p>
                        <p>
                            Username: 
                            <input type="text" name="usernameR"><br>
                            Password:
                            <input type="password" name="passwordR"><br><br>
                            <input type="submit" value="Register">
                        </p>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>
