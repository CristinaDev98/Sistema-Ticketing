<?php
class Authentication
{
    private $conn;

    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        $_SESSION['logout_message'] = 'Logout effettuato con successo.';
        header('Location: ./index_login.php');
        exit();
    }

    public function authenticateUser($username, $password)
    {
        session_start();
        
        $queryVerificaCredenziali = "SELECT id, username, password, role FROM users WHERE username = '$username'";
        $result = $this->conn->query($queryVerificaCredenziali);

        if (!$result) {
            die('Errore nella query: ' . $this->conn->error);
        }

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $dbPasswordHash = $row['password'];
            $role = $row['role'];

            if (password_verify($password, $dbPasswordHash)) {
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

        $this->conn->close();
    }
}