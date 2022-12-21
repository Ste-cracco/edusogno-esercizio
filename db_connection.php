<?php

$host = 'localhost:8889';
$user = 'root';
$password = 'root';
$dbname = 'utenti';

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}