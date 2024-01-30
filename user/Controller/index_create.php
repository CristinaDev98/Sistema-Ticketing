<?php
session_start();
include '../../root/config.php';
include '../Service/TicketCreate.php';

$ticketCreate = new TicketCreate($conn);

$ticketCreate->checkAuthorization();
$ticketCreate->createTicket();
$ticketCreate->closeConnection();

include '../Layout/create_ticket_layout.php';