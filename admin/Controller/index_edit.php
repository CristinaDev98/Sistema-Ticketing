<?php
session_start();
include '../../root/config.php';
include '../Service/TicketEdit.php';

$editTicket = new TicketEdit($conn);

$editTicket->checkAuthorization();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update_ticket'])) {
    $ticketIdToUpdate = $_POST['update_ticket'];
    $newMessage = $_POST['new_message'];

    $editTicket->updateTicket($ticketIdToUpdate, $newMessage);
}

if (isset($_GET['ticket_id'])) {
    $ticketIdToEdit = $_GET['ticket_id'];
    $ticket = $editTicket->getTicketDetails($ticketIdToEdit);
}

include '../Layout/edit_ticket_layout.php';