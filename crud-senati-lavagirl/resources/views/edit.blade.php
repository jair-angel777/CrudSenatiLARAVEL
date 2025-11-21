<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:Actualisar:.</title>
</head>
<body>
    <h1>Actualisar Usuario</h1>
    <form action="/user/update" method="POST">
        @csrf   
        <label for="">Id:</label>
        <input type="text" name="id" value = "{{ $_GET['id'] }}" readonly><br>
        <label for="">Name:</label>
        <input type="text" name="name"><br>
        <label for="">Lastname:</label>
        <input type="text" name="lastname"><br>

        <input type="submit" value="enviar"><br>
        <a href="/user">REGRESAR</a>
         

    </form>
</body>
</html>