<?php
session_start();
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (!isset($_SESSION['user_id'])) {
        echo 'Non sei autorizzato a creare un ticket.';
        exit();
    }

    $userId = $_SESSION['user_id'];
    $message = $_POST['message'];

    $conn = new mysqli('localhost', 'root', '', 'sistema_ticketing');

    if ($conn->connect_error) {
        die('Connessione al database fallita: ' . $conn->connect_error);
    }

    $queryInserimentoTicket = "INSERT INTO ticket (user_id, message) VALUES ('$userId', '$message')";

    if ($conn->query($queryInserimentoTicket) === true) {
        echo '<script>
            alert("Ticket creato con successo!");
            window.location.href = "dashboard.php";
        </script>';
        exit();
    } else {
        echo 'Errore durante la creazione del ticket: ' . $conn->error;
    }

    $conn->close();
}
