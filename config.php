<?php
$config = [
    'db_connection' => 'mysql',
    'db_host' => 'localhost',
    'db_port' => '3306',
    'db_database' => 'sistema_ticketing',
    'db_username' => 'root',
    'db_password' => '',
];

$conn = new mysqli($config['db_host'], $config['db_username'],$config['db_password'], $config['db_database']);

// Verifica la connessione
if ($conn->connect_error) {
    die("Connessione al database fallita: " . $conn->connect_error);
}