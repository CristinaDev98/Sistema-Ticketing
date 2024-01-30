<?php
class TicketDelete
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
                echo '<script>
                    alert("Ticket chiuso con successo!");
                    window.location.href = "../Layout/dashboard_admin.php";
                </script>';
            } else {
                echo '<script>
                    alert("Errore durante l\'eliminazione del ticket: ' . $this->conn->error . '");
                </script>';
            }
        }
    }
}
