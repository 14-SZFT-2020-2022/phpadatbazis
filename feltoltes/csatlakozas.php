<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tanulok';

$conn = new mysqli($servername, $username, $password, $dbname, 3307);

if ($conn -> connect_error) {
    die('Nem sikerült a csatlakozás! ' . $conn -> connect_error);
} else {
    // echo 'Sikerült csatlakozni!';
}

$conn -> set_charset('utf8');



