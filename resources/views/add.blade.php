@extends('global')

<!DOCTYPE html>
<html>
    <head>
    <form action="/add" method="post">
    {{ csrf_field() }}
    <table border = 1>
            <tr>
                <td>ID
                <div class="container">
                        <input type="text" class="input" name="id">
                    </form>
                </div>
                </td>
                <td>Name
                    <div class="container">
                        <input type="text" class="input" name="nome">
                    </form>
                    </div>
                </td>
                <td>Quantity
                    <div class="container">
                        <input type="text"class="input"  name="quantidade">
                    </form>
                    </div>
                </td>
                <td>Price
                    <div class="container">
                        <input type="text"class="input"  name="preço">
                    </form>
                    </div>
                </td>
                <td>Local- zone,number,floor
                    <div class="container">
                        <input type="text"class="input"  name="local">
                    </form>
                    </div>
                </td>
                <td>Data aaaa-mm-dd
                    <div class="container">
                        <input type="text"class="input"  name="data">
                    </form>
                    </div>
                </td>
                
                <td> <input type = 'submit' style="background-color:green; color:white" value = "add"></button> </td>
            </tr>
        </table>
         
    </head>
    <body>
       
    </body>
</html>