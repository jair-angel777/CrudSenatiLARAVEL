<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:CREAR:.</title>
</head>
<body>
    <h1>Crear Usuario</h1>
    <form action="/user/store" method="POST">
        @csrf   
        <label for="">Id:</label>
        <input type="text" name="id"><br>
        <label for="">Name:</label>
        <input type="text" name="name"><br>
        <label for="">Lastname:</label>
        <input type="text" name="lastname"><br>

        <input type="submit" value="enviar"><br>
        <a href="/user">REGRESAR</a>
         

    </form>
</body>
</html>