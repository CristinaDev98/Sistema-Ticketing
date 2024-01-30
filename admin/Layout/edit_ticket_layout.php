<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifica Ticket</title>

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

        .edit-button {
            background-color: #007bff;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-button:hover {
            background-color: #0056b3;
        }

        .textarea-container {
            text-align: left;
            margin-top: 20px;
        }

        .textarea-container textarea {
            width: 100%;
            height: 100px;
            margin-top: 1em;
        }

        .update-button {
            background-color: #28a745;
            color: white;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            margin-top: 2em;
            cursor: pointer;
        }

        .update-button:hover {
            background-color: #218838;
        }

        .title-edit {
            text-align: center;
        }

        .home-link {
            float: right;
            margin-top: 10px;
            margin-right: 2em;
            cursor: pointer;
            text-decoration: underline;
        }

        .title-nav {
            margin-top: -2px;
            margin-left: 1em;
            float: left;
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
        <h1 class="title-edit">Modifica Ticket</h1>
        <div class="card-ticket">
            <h2 class="n-ticket">Ticket #<?php echo $ticket['id']; ?> - Utente: <?php echo $ticket['user_id']; ?></h2>
            <p>Data creazione: <?php echo $ticket['created_at']; ?></p>
            <form method="post">
                <div class="textarea-container">
                    <textarea required rows="3" id="new_message" name="new_message"><?php echo $ticket['message']; ?></textarea>
                </div>
                <input type="hidden" name="update_ticket" value="<?php echo $ticket['id']; ?>">
                <button type="submit" class="update-button">Invia Modifica</button>
            </form>
        </div>
    </div>
</body>

</html>