<?php
$config = [
    'db_connection' => 'your_db_connection',
    'db_host' => 'your_db_host',
    'db_port' => 'your_db_port',
    'db_database' => 'your_db_database',
    'db_username' => 'your_db_username',
    'db_password' => 'your_db_password',
];

$conn = new mysqli($config['db_host'], $config['db_username'],$config['db_password'], $config['db_database']);