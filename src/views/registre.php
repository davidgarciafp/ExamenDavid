<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Registre</h1>
    </div>
    <div>
    <form action="/registre/create" method="post">
        
        <div>
            <label for="matricula">Matricula:</label>
            <input type="text" id="matricula" name="matricula" required>
        </div>
        <div>
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" required>
        </div>

        <div>
            <label for="propietario">Propietario:</label>
            <input type="text" id="propietario" name="propietario" required>
        </div>
        
        <input type="submit" value="Registrar" class="submit">
    </form>
    </div>
</body>
</html>