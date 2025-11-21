<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table" border=3>
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>LASTNAME</td>
            <td>Otros</td>
        </tr>
        @foreach ($users as $user )
         <tr>
            <td>{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->lastname }}</td>
            <td><a href="/user/edit?id={{ $user->id }}">EDITAR</a>/ 
            <a href="/user/delete?id={{ $user->id }}">ELIMINAR</a></td>
         </tr>
        @endforeach
    </table>

</html>