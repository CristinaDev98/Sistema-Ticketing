<?php
class TicketCreate
{

    private $conn;

     public function __construct(mysqli $conn)
     {
         $this->conn = $conn;
     }

    public function checkAuthorization()
    {
        if (!isset($_SESSION['user_id'])) {
            echo 'Non sei autorizzato a creare un ticket.';
            exit();
        }
    }

    public function createTicket()
    {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $userId = $_SESSION['user_id'];
            $message = $_POST['message'];

            $queryInserimentoTicket = "INSERT INTO ticket (user_id, message) VALUES ('$userId', '$message')";

            if ($this->conn->query($queryInserimentoTicket) === true) {
                echo '<script>
                    alert("Ticket creato con successo!");
                    window.location.href = "/user/dashboard.php";
                </script>';
                exit();
            } else {
                echo 'Errore durante la creazione del ticket: ' . $this->conn->error;
            }
        }
    }
    public function closeConnection()
    {
        $this->conn->close();
    }
}