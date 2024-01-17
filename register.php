<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Ticketing - Registrati</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="card">
        <h1>Registrati</h1>
        <form action="register_process.php" method="post">
            <input type="text" id="username" name="username" placeholder="Nome Utente" required>
            <br>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <br>
            <input type="text" id="role" name="role" placeholder="Ruolo" required>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
