<?php
class UserRegistration
{
    private $conn;

    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
    }

    public function registerUser($username, $password, $role = 'utilizzatore')
    {
        $queryInserimento = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";

        if ($this->conn->query($queryInserimento) === true) {
            echo '<script>
                    alert("Utente registrato con successo! Effettua il login");
                    window.location.href = "index_login.php";
                 </script>';
        } else {
            echo 'Errore durante la registrazione: ' . $this->conn->error;
        }

        $this->conn->close();
    }
}