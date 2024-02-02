<?php
session_start();

if (!isset($_SESSION['utente'])) {
    header('Location: /auth/Controller/index_login.php');
    exit();
}