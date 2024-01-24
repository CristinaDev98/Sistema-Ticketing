<?php
session_start();
include '../root/config.php';

// Logout
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    $_SESSION['logout_message'] = 'Logout effettuato con successo.';
    header('Location: ./login.php');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $conn = new mysqli('localhost', 'root', '', 'sistema_ticketing');

    // if ($conn->connect_error) {
    //     die('Connessione al database fallita: ' . $conn->connect_error);
    // }

    $queryVerificaCredenziali = "SELECT id, username, password, role FROM users WHERE username = '$username'";
    $result = $conn->query($queryVerificaCredenziali);

    if (!$result) {
        die('Errore nella query: ' . $conn->error);
    }

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $dbPassword = $row['password'];
        $role = $row['role'];

        if ($password === $dbPassword) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['username'] = $row['username'];
            $_SESSION['role'] = $role;

            if ($role === 'utilizzatore') {
                header('Location: ../user/dashboard.php');
            } elseif ($role === 'amministratore') {
                header('Location: ../admin/dashboard_admin.php');
            } else {
                echo 'Errore: Ruolo non valido.';
            }
        } else {
            echo 'Credenziali non valide. Riprova.';
        }
    } else {
        echo 'Utente non trovato. Riprova.';
    }

    $conn->close();
}
