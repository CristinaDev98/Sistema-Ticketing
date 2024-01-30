<?php
session_start();
include '../../root/config.php';
include '../Service/Authentication.php';
include '../Service/Logout.php';

$authenticator = new Authentication($conn);

// if (isset($_GET['logout'])) {
//     $authenticator->logout();
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $authenticator->authenticateUser($username, $password);
}

include '../Layout/login_layout.php';