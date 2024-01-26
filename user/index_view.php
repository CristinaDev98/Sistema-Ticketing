<?php
session_start();
include '../root/config.php';
include '../user/TicketUser.php';

$ticketUser = new TicketUser($conn);

$ticketUser->deleteTicket();
$resultTicket = $ticketUser->getTickets();
$ticketUser->closeConnection();

include '../user/view_ticket_layout.php';