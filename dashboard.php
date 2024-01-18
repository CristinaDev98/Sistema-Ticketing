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
            margin: 30px 40px 30px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            border-radius: 8px;
            text-align: center;
        }

        .card:hover {
            transform: scale(1.05);
        }

        .title-dash {
            text-align: center;
            margin-top: 2em;
            margin-bottom: 2em;
        }

        .title-nav {
            margin-top: -2px;
            margin-left: 1em;
            float: left;
        }
        .name-user{
            float: right;
            margin-top: 10px;
            margin-right: 2em;
            
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="container">
            <h1 class="title-nav">Sistema Ticketing</h1>
            <h4 class="name-user">
            <?php
        if (isset($_SESSION['username']) && isset($_SESSION['role']) && $_SESSION['role'] === 'utilizzatore') {
            echo '<span style="font-size: 1.2em;">Ciao, ' . $_SESSION['username'] . '</span>';
        } else {
            echo 'Non sei autorizzato a visualizzare questa pagina.';
        }
        ?>
            </h4>
        </div>
        
    </div>

    <div class="container">
        <h1 class="title-dash">Benvenuto nella tua dashboard</h1>
        
        <a href="create_ticket.php" style="text-decoration: none;">
            <div class="card">
                <h2>Crea Nuovo Ticket</h2>
            </div>
        </a>

        <div class="card">
            <h2>Visualizza Ticket</h2>

        </div>

        <div class="card">
            <h2>Chiudi Ticket</h2>

        </div>
    </div>
</body>

</html>
