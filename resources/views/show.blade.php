@extends('global')


<!DOCTYPE html>
<html>
    <head>
        
    </head>
    <body>
        <table border = 1>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Quantidade</td>
                <td>Preço</td>
                <td>Local</td>
                <td>Data</td>
                <td>Stock</td>
            </tr>
           
            @foreach ($itens as $item)
            <tr>
                
                <td>{{ $item->id}}</td>
                <td>{{ $item->nome }}</td>
                <td>{{ $item->quantidade }}</td>
                <td>{{ $item->preço }}</td>
                <td>{{ $item->local }}</td>
                <td>{{ $item->data }}</td>
                <td>{{ $item->em_stock }}</td>
                   
            </tr>
            @endforeach
            
        </table>
    </body>
</html>





