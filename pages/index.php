<?php
session_start();

if (!isset($_SESSION['utente'])) {
    header('Location: /auth/login.php');
    exit();
}