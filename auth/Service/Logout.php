<?php

class Logout
{
    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        $_SESSION['logout_message'] = 'Logout effettuato con successo.';
        header('Location: ./index_login.php');
        exit();
    }
}
