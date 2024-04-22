<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="stylesheetviewer.php"> 
    </head>
    <div class="display:flex; flex-flow:column;">
<body>
    
    <h2 style="color: white">Hello, ADMIN</h2>
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
</body>
</html>
