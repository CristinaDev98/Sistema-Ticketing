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

        .n-ticket {
            color: #5ac66c;
        }

        .card-ticket {
            background-color: #fff;
            padding: 10px;
            margin: 30px 40px 30px;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            border-radius: 8px;
            text-align: center;
            position: relative;
        }

        .delete-button {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #ff6961;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-button:hover {
            background-color: #cc0000;
        }

        .card:hover,
        .card-ticket:hover {
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

        .name-user {
            float: right;
            margin-top: 10px;
            margin-right: 2em;

        }

        .home-link {
            float: right;
            margin-top: 10px;
            margin-right: 2em;
            cursor: pointer;
            text-decoration: underline;
        }

        .edit-button {
            text-decoration: none;
            float: right;
            margin-top: -1em;
        }
    </style>
</head>

<body>
    <div class="navbar">
        <div class="container">
            <h1 class="title-nav">Sistema Ticketing</h1>
            <h3 class="home-link" onclick="location.href='../Layout/dashboard_admin.php'">Home</h3>
        </div>
    </div>

    <div class="container">
        <h1 class="title-dash">Tutti i ticket</h1>
        <?php
        if ($resultAllTickets->num_rows > 0) {
            foreach ($resultAllTickets as $ticket) {
                echo '<div class="card-ticket">';
                echo '<button class="delete-button" type="submit" form="deleteForm_' . $ticket['id'] . '">&times;</button>';
                echo '<h2 class="n-ticket">Ticket #' . $ticket['id'] . ' - ' . $ticket['username'] . '</h2>';
                echo '<p>' . $ticket['message'] . '</p>';
                echo '<p>Data creazione: ' . $ticket['created_at'] . '</p>';
                echo '<a class="edit-button" href="index_edit.php?ticket_id=' . $ticket['id'] . '">Modifica Ticket</a>';
                echo '<form method="post"  action="../Controller/index_delete.php" id="deleteForm_' . $ticket['id'] . '">';
                echo '<input type="hidden" name="delete_ticket" value="' . $ticket['id'] . '">';
                echo '</form>';
                echo '</div>';
            }
        } else {
            echo '<p style="text-align: center; font-size: Large;">Nessun ticket da visualizzare.</p>';
        }
        ?>
    </div>
</body>

</html>
