<?php
class TicketUser {
     private $conn;

     public function __construct(mysqli $conn)
     {
         $this->conn = $conn;
     }

    public function checkAuthorization()
    {
        if (!isset($_SESSION['user_id'])) {
            echo 'Non sei autorizzato a visualizzare questa pagina.';
            exit();
        }
    }

    public function getTickets()
    {
        $this->checkAuthorization();

        $userId = $_SESSION['user_id'];

        $queryTicketUtente = "SELECT * FROM ticket WHERE user_id = '$userId'";
        $resultTicket = $this->conn->query($queryTicketUtente);

        if (!$resultTicket) {
            die('Errore nella query: ' . $this->conn->error);
        }

        return $resultTicket;
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}