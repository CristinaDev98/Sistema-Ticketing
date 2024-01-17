<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Ticketing</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .navbar {
            background-color: #5ac66c;
            color: white;
            height: 5em;
            width: 100%;
        }

        .container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            color: #5ac66c;
            padding: 10px;
            margin: 30px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px, rgba(10, 37, 64, 0.35) 0px -2px 6px 0px inset;
            border-radius: 8px;
            text-align: center;
        }
        .title-dash{
            text-align: center;
            margin-top: 1em;
            margin-bottom: 1em;
        }

    </style>

</head>

<body>
    <div class="navbar">
        <div class="container">
            <h1 class="title-nav">Sistema Ticketing</h1>
        </div>
    </div>

    <div class="container">
        <h1 class="title-dash">Benvenuto nella tua dashboard</h1>
        <div class="card">
            <h2>Crea Nuovo Ticket</h2>
            
        </div>

        <div class="card">
            <h2>Visualizza Ticket</h2>
            
        </div>

        <div class="card">
            <h2>Chiudi Ticket</h2>

        </div>
    </div>
</body>

</html>
