<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'tagdij';

$conn = new mysqli($servername, $username, $password, $dbname, 3307);

if ($conn -> connect_error) { // $conn.connect_error
    die('Nem sikerült a csatlakozás! ' . $conn -> connect_error);
} else {
    // echo 'Sikerült a csatlakozás!';
}

$conn -> set_charset('utf8');



