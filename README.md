# Sistema di Ticketing

Questo repository contiene il codice sorgente per un sistema di ticketing implementato in PHP. Segui le istruzioni di seguito per avviare il server, creare il database e eseguire gli script SQL.

## Avvio del Server
Per avviare il server, esegui il seguente comando:

```bash
php -S localhost:8000
```

## Creazione del Database
Puoi creare il database in due modi: tramite un'applicazione di gestione del database o tramite il terminale.

## Utilizzando un'applicazione di gestione del database:
Apre un'applicazione di gestione del database (es. PhpMyAdmin, Navicat).
Crea un nuovo database chiamato sistema_ticketing.

## Tramite il Terminale
Esegui i seguenti comandi:
```bash
mysql -h localhost -u root -p
```
```bash
CREATE DATABASE sistema_ticketing;
```
```bash
USE sistema_ticketing;
```

## Esecuzione dello Script SQL:
Esegui lo script SQL seguente (uno alla volta) per creare la tabella degli utenti e inserire un utente amministratore.
```bash
CREATE TABLE IF NOT EXISTS users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('utilizzatore', 'amministratore') NOT NULL
);
```
```bash
INSERT INTO users (username, password, role) VALUES
('amministratore', 'PassAmministratore', 'amministratore');
```

Assicurarsi di eseguire gli script SQL nella directory appropriata del progetto.
