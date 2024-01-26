<?php
session_start();
include '../root/config.php';
include '../admin/ViewAllTicket.php';

$viewAllTicket = new ViewAllTicket($conn);

$viewAllTicket->checkAuthorization();
$viewAllTicket->deleteTicket();
$resultAllTickets = $viewAllTicket->getAllTickets();
$viewAllTicket->closeConnection();

include '../admin/view_all_ticket_layout.php';