<?php
session_start();
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli('localhost', 'root', '', 'sistema_ticketing');

    if ($conn->connect_error) {
        die("Connessione al database fallita: " . $conn->connect_error);
    }

    
    $queryVerificaCredenziali = "SELECT id, username, password, role FROM users WHERE username = '$username'";
    $result = $conn->query($queryVerificaCredenziali);

    if (!$result) {
        die("Errore nella query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $dbPassword = $row['password'];
        $role = $row['role'];


        if ($password === $dbPassword) {
            // Credenziali corrette, autentica l'utente
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            

            if ($role === 'utilizzatore') {
                header('Location: dashboard.php'); 
            } elseif ($role === 'amministratore') {
                header('Location: dashboard_admin.php'); 
            } else {
                echo "Errore: Ruolo non valido.";
            }
        } else {
            echo "Credenziali non valide. Riprova.";
        }
    } else {
        echo "Utente non trovato. Riprova.";
    }

    // Chiudi la connessione al database
    $conn->close();
}
