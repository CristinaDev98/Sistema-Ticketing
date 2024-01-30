<?php
session_start();
include '../../root/config.php';
include '../Service/TicketManager.php';

$ticketManager = new TicketManager($conn);

$ticketManager->checkAuthorization();
$resultAllTickets = $ticketManager->getAllTickets();
$ticketManager->closeConnection();

include '../Layout/view_all_ticket_layout.php';