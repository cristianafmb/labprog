@extends('global')


<!DOCTYPE html>
<html>
    <head>
    <form action="/update" method="post">
    {{ csrf_field() }}
   
               
<br><br>
Options to Do the Changes
    <table  border = 3>
               
        <tr>
        <td>
            '1': Change Name 
                </td>
                <td>
            '2': Change Quantity
                </td>
                <td>
            '3': Change Price
                </td>
                <td>
            '4': Change Local 
                </td>
                <td>
            '5': Change Data 
                </td>
                <td>
            '6': Change Stock 
                </td>
        </tr>
        
        </table>
        <br><br>
        <table>
        <td>ID To Change
                <div class="container">
                        <input type="text" class="input" name="idop">
                   
                </div>

               </td>
               <td>
               Option:
               <div class="container">
                        <input type="text" class="input" name="option">
                
                   
                </div>
                </td>
                <td>Change Option To 
                <div class="container">
                        <input type="text" class="input" name="changeto">
                        <input type = 'submit' style="background-color: orange; color:white" value = "update"></button> 
                   
                </div>

               </td>
                </table>
        
                </form>
    </head>
    <body>
       
    </body>
</html>