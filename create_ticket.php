<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema Ticketing</title>

    <link rel="stylesheet" type="text/css" href="style_ticket.css">

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            align-items: center;
            justify-content: center;
            height: 100vh;
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

        .title-nav {
            margin-top: -2px;
            margin-left: 1em;
        }
        .home-link {
            float: right;
            margin-top: -2.5em;
            margin-right: 2em;
            cursor: pointer;
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="container">
            <h1 class="title-nav">Sistema Ticketing</h1>
            <h3 class="home-link" onclick="location.href='dashboard.php'">Home</h3>
        </div>
    </div>

    <div class="container">
    <form class="form" action="ticket_process.php" method="POST">

        <div class="flex">
            <h1 style="text-align: center;">Crea un ticket</h1>
        </div>
        <label>
            <textarea required="" rows="3" class="input01" name="message" id="message"></textarea>
            <span>Messaggio</span>
        </label>

        <button class="fancy" type="submit" href="dashboard.php">
            <span class="top-key"></span>
            <span class="text">Apri Ticket</span>
            <span class="bottom-key-1"></span>
            <span class="bottom-key-2"></span>
        </button>
    </form>
    </div>
</body>

</html>
