<!DOCTYPE html>
<html lang="en" class="login">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Matricula</title>
    <link rel="stylesheet" href="resources/styles/css/main.css">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
</head>
<body>
    <div>
        <div>
            <form action="/login" method="post">

                <h1>Consulta les teves multes</h1>

                <label for="matricula">Matricula:</label>
                <input type="text" id="matricula" name="matricula"required>

                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass"required>
                <p><?php echo $error ?></p>
                <input type="submit" value="Validar" >

            </form>
        </div>
        <div>
            <a href="/registre"><p>Registra't per consultar les teves multes</p></a>
            <a href=""><p>Soc administrador</p></a>
        </div>
    </div>
</body>
</html>