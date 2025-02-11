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

                <h1>Validació al portal Udemy</h1>

                <label for="email">User:</label>
                <input type="text" id="email" name="email"required>

                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass"required>
                <p><?php echo $error ?></p>
                <input type="submit" value="Validar" >

            </form>
        </div>
    </div>
</body>
</html>