<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = 'utilizzatore';

    $conn = new mysqli('localhost', 'root', '', 'sistema_ticketing');

    if ($conn->connect_error) {
        die('Connessione al database fallita: ' . $conn->connect_error);
    }

    $queryInserimento = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

    if ($conn->query($queryInserimento) === true) {
        echo "Utente registrato con successo! <a href='login.php'>Effettua il login</a>";
    } else {
        echo 'Errore durante la registrazione: ' . $conn->error;
    }

    $conn->close();
}
