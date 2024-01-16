<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
<div class="card">
        <h1>Login</h1>

        <form action="login_process.php" method="post">
            <input type="text" id="utente" name="utente" placeholder="Nome Utente" required>
            <br>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <br>
            <input type="submit" value="Login">
        </form>
    </div>
</body>
</html>
