<?php
include '../root/config.php';
include '../auth/UserRegistration.php';

$userRegistration = new UserRegistration($conn);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $userRegistration->registerUser($username, $password);
}

include '../auth/register_layout.php';