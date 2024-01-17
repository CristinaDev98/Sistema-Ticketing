<?php
include('config.php'); // Assicurati di avere un file config.php con le credenziali del tuo database

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];


    // Connessione al database (modifica le credenziali in base al tuo ambiente)
    $conn = new mysqli('localhost', 'root', '', 'sistema_ticketing');

    if ($conn->connect_error) {
        die("Connessione al database fallita: " . $conn->connect_error);
    }

    // Preparazione della query SQL
    $queryInserimento = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

    // Esecuzione della query
    if ($conn->query($queryInserimento) === TRUE) {
        echo "Utente registrato con successo! <a href='login.php'>Effettua il login</a>";
    } else {
        echo "Errore durante la registrazione: " . $conn->error;
    }

    // Chiudi la connessione al database
    $conn->close();
}
