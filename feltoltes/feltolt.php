<!DOCTYPE html>
<html lang='hu'>
<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' />
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <title>Feltöltő oldal</title>
</head>
<body>
<?php

require_once './csatlakozas.php';

$veznev = $_POST['veznev'];
$kernev = $_POST['kernev'];
$szulev = $_POST['szulev'];

$sql = 'INSERT INTO `tanulo` (`vezeteknev`, `keresztnev`, `szuletesiev`) ';
$sql .= 'VALUES("' . $veznev . '", "'. $kernev . '", "'. $szulev . '")';

$result = $conn -> query($sql); 

if ($result === TRUE) {
    // echo 'Sikeres feltöltés!';
    echo '<script>window.location.href = "./index.php";</script>';
} else {
    die('Nem sikerült a feltöltés!' . $conn -> error);
}

?>
</body>
</html>