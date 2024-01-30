<?php
session_start();
include '../../root/config.php';
include '../Service/TicketUser.php';

$ticketUser = new TicketUser($conn);

$resultTicket = $ticketUser->getTickets();
$ticketUser->closeConnection();

include '../Layout/view_ticket_layout.php';