<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>
        h1{
            color: red;
        }
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
        }
        table {
            width: 80%;
        }
    </style>
    <title>Document</title>
</head>
<body>

<h1>Lista de productos</h1>
<table class="table table-striped table-hover">
    <tr>
        <th>id</th>
        <th>Nombre</th>

    </tr>

    @foreach($data as $key => $value)
    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->name}}</td>

    </tr>
    @endforeach
</table>
</body>
</html>
@stop