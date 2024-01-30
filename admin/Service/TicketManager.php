<?php
class TicketManager
{
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

    public function getAllTickets()
    {
        $this->checkAuthorization();

        $queryAllTickets = 'SELECT ticket.*, users.username FROM ticket INNER JOIN users ON ticket.user_id = users.id';
        $resultAllTickets = $this->conn->query($queryAllTickets);

        if (!$resultAllTickets) {
            die('Errore nella query: ' . $this->conn->error);
        }

        return $resultAllTickets;
    }

    public function closeConnection()
    {
        $this->conn->close();
    }
}