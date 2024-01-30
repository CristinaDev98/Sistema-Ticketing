<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Ticketing - Registrati</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="../../style.css">

</head>

<body>
    <div class="card">
        <h1>Registrati</h1>
        <form action="/auth/Controller/index_register.php" method="post">
            <input type="text" id="username" name="username" placeholder="Nome Utente" required>
            <br>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <input type="password" id="confirm_password" name="confirm_password" placeholder="Conferma Password" required>
            <input type="submit" id="btnRegister" value="Registrati">
            <button type="button"><a id="btnLogin" href="/auth/Controller/index_login.php">Login</a></button>
        </form>
    </div>
</body>

</html>
