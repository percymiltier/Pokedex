<!DOCTYPE html>
<html>
    <head>        
     <meta charset="UTF-8">
     <meta name="viewport" content="width=1000px, initial-scale=1.0">
     <title>Login</title>
     <link href="/Pokedex/stylesheet.css" rel="stylesheet" type="text/css" media="all">
    </head>
    <div class="display:flex; flex-flow:column;">
<body>
<<<<<<< HEAD
<div class="mainTable">    
    <h2>Hello, ADMIN</h2>
=======
    
    <h2 style="color: white">Hello, ADMIN</h2>
>>>>>>> 6169a17f700cdd86ae07faf5b64b0475361a6bd5
    <input type='button' style='width:52%; height:100%;' value='Add New Pokemon' onclick='deleteRow(\"{$rec['memberID']}\")'/>

   <table>
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
</body>
</html>
