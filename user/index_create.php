<?php
session_start();
include '../root/config.php';
include '../user/TicketCreate.php';

$ticketCreate = new TicketCreate($conn);

$ticketCreate->checkAuthorization();
$ticketCreate->createTicket();
$ticketCreate->closeConnection();

include '../user/create_ticket_layout.php';