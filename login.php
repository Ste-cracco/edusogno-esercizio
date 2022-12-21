<?php

include('db_connection.php');

session_start();

if (isset($_POST['email'])) {
    $email = $_POST['email'];
}

if (isset($_POST['password'])) {
    $password = $_POST['password'];
}

$user = "SELECT * FROM utenti WHERE email='$email' AND password='$password'";

$result = mysqli_query($conn, $user);

if (!$result) {
    echo "Errore nell'esecuzione della query: " . mysqli_error($conn);
}

$row = mysqli_fetch_assoc($result);

if (isset($row) && $password == $row['password']) {
    // Imposto le variabili di sessione
    $_SESSION['email'] = $email;
    header("Location: show.php");
} else {
    echo "Credenziali errate";
}