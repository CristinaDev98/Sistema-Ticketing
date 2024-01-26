<?php
session_start();

if (!isset($_SESSION['utente'])) {
    header('Location: /auth/index_login.php');
    exit();
}