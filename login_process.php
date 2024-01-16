<?php
include('config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $queryGetPasswordHash = "SELECT password, role FROM users WHERE username = '$username'";
    $resultGetPasswordHash = $conn->query($queryGetPasswordHash);

    if (!$resultGetPasswordHash) {
        die("Errore nella query: " . $conn->error);
    }

    while ($row = $resultGetPasswordHash->fetch_assoc()) {
        echo "Password: " . $row['password'] . "<br>";
        echo "Role: " . $row['role'] . "<br>";
        $passInDatabase = $row['password'];
        $role = $row['role'];
    }

    // PassUtilizzatore

    if ($resultGetPasswordHash->num_rows > 0) {

        echo "password: $password";
        echo "hashInDatabase: $passInDatabase";

        if ($password === $passInDatabase) {
            echo "Login effettuato con successo!";

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

    $conn->close();
}
