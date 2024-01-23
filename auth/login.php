<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Ticketing</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <div class="card">
        <h1>Login</h1>
        <form action="login_process.php" method="post">
            <input type="text" id="username" name="username" placeholder="Nome Utente" required>
            <br>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="submit" id="loginButton" value="Login">
            <button type="button"><a id="registerButton" href="register.php">Registrati</a></button>
        </form>
    </div>
</body>

</html>
