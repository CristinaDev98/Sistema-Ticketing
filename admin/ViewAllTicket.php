<?php
class ViewAllTicket
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

    public function deleteTicket()
    {
        $this->checkAuthorization();

        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete_ticket'])) {
            $ticketIdToDelete = $_POST['delete_ticket'];

            $queryDeleteTicket = "DELETE FROM ticket WHERE id = '$ticketIdToDelete'";
            if ($this->conn->query($queryDeleteTicket) === true) {
                echo '<script>alert("Ticket chiuso con successo!"); window.location.href = "dashboard_admin.php";</script>';
            } else {
                echo '<script>alert("Errore durante l\'eliminazione del ticket: ' . $this->conn->error . '");</script>';
            }
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