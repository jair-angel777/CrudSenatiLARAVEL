<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table" border=5>
        <tr>
            <td>ID CURSO</td>
            <td>Materia</td>
            <td>Profesores</td>
        </tr>
        @foreach ($cursos as $curso )
         <tr>
            <td>{{ $curso->id_curso }}</td>
            <td>{{ $curso->materia }}</td>
            <td>{{ $curso->profesores }}</td>
         </tr>
        @endforeach
    </table>

</html>