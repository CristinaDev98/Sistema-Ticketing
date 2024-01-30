<?php
class TicketEdit
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

    public function updateTicket($ticketId, $newMessage)
    {
        $this->checkAuthorization();

        $queryUpdateTicket = "UPDATE ticket SET message = '$newMessage' WHERE id = '$ticketId'";

        if ($this->conn->query($queryUpdateTicket) === true) {
            echo '<script>alert("Ticket aggiornato con successo!"); window.location.href = "../Controller/index_view.php";</script>';
        } else {
            echo '<script>alert("Errore durante l\'aggiornamento del ticket: ' . $this->conn->error . '");</script>';
        }
    }

    public function getTicketDetails($ticketId)
    {
        $this->checkAuthorization();

        $queryTicket = "SELECT * FROM ticket WHERE id = '$ticketId'";
        $resultTicket = $this->conn->query($queryTicket);

        if (!$resultTicket) {
            die('Errore nella query: ' . $this->conn->error);
        }

        $ticket = $resultTicket->fetch_assoc();

        return $ticket;
    }
}