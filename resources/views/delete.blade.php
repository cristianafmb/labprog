@extends('global')


<!DOCTYPE html>
<html>
    <head>
    <form action="/delete" method="post">
    {{ csrf_field() }}
    <table border = 3>
            <tr>
                <td>ID
                <div class="container">
                        <input type="text" class="input" name="id">
                    </form>
                </div>
                <td> <input type = 'submit' style="background-color: #bf360c; color:white" value = "remover"></button> </td>
            </tr>
        </table>
         
    </head>
    <body>
       
    </body>
</html>