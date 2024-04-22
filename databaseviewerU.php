<?php
    session_start();
?>

<html>
    <head>        
     <meta charset="UTF-8">
     <meta name="viewport" content="width=1000px, initial-scale=1.0">
     <title>Login</title>
     <link href="/Pokedex/stylesheet.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <div class="display:flex; flex-flow:column;">
<body>
<div class="mainTable">
    <h2 style="color: white">Hello, <?php 
        if (isset($_SESSION["username"])) {
        echo $_SESSION["username"];
        }
    ?></h2>
    <p>
    
    <a href="/Pokedex/addnew.php">Add new Pokemon</a>
    </p>
   <table style="margin:10px auto 10px auto auto;">
    <tr>
        <td>Pokemon</td>
        <td>Type</td>
        <td>Status</td>
        <td>Trainer</td>
        <td>Region</td>
        <td>Held Item</td>
        <td></td>
      </tr>

      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <input type='button' style='width:100%; height:100%;' value='Update' onclick='deleteRow(\"{$rec['memberID']}\")'/>
            <input type='button' style='width:100%; height:100%;' value='Delete' onclick='deleteRow(\"{$rec['memberID']}\")'/>
        </td>
        
      </tr>
      
   </table>
</div>
</div>
</body>
</html>
