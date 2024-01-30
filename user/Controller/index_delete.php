<?php
session_start();
include '../../root/config.php';
include '../Service/TicketDelete.php';

$ticketDelete = new TicketDelete($conn);

$ticketDelete->checkAuthorization();
$ticketDelete->deleteTicket();

include '../Layout/view_ticket_layout.php';