<?php
session_start();

// Se l'utente non è autenticato, reindirizzalo a login.php
if (!isset($_SESSION['utente'])) {
    header('Location: login.php');
    exit();
}
?>

<!-- 
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Ticketing</title>
</head>
<body>
    prova 
</body>
</html> -->