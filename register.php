<?php

include('db_connection.php');

if (isset($_POST['name'])) {
    $name = $_POST['name'];
}

if (isset($_POST['lastname'])) {
    $lastname = $_POST['lastname'];
}

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

// Controlli

if (strlen($name) < 2) {
    echo "Il nome deve avere almeno 2 caratteri.";
    exit;
} else if (ctype_alpha(strtolower($name)) == false) {
    echo "Il nome deve contnere solo lettere.";
    exit;
}

if (strlen($lastname) < 2) {
    echo "Il cognome deve avere almeno 2 caratteri.";
    exit;
} else if (ctype_alpha(strtolower($lastname)) == false) {
    echo "Il cognnome deve contnere solo lettere.";
    exit;
}

if (strlen($password) < 5) {
    echo "La password deve avere almeno 5 caratteri.";
    exit;
}
// FINE CONTROLLI

$nuovo_utente = "INSERT INTO utenti (nome, cognome, email, password)
                 VALUES ('$name', '$lastname', '$email', '$password')";

if (mysqli_query($conn, $nuovo_utente)) {
    echo "Registrazione completata con successo.";
} else {
    echo "Errore durante la registrazione";
}
