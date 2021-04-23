<!DOCTYPE html>
<html lang='hu'>
<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <link rel='stylesheet' href='./stilus.css' />
    <title>Ismerkedés a PHP-vel</title>
</head>
<body>
    <div class='container'>
        <div class='row'>
            <div class='col-6'>
                <p>1. Feladat: Hogy hívják az egyes ügyfeleket? Jelenítsd meg a nevüket ABC-sorrendben!</p>
<?php

require_once './csatlakozas.php';

$sql = 'SELECT `nev` FROM `ugyfel` ORDER BY `nev`;';

$result = $conn -> query($sql);

$tabla = '<table class="table table-dark">';
$tabla .= '<tr class="bg-success"><th>Név</th></tr>';
if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
        /*
            Első sor (rekord)
            $row = ['azon' => 1, 'nev' => 'Buda Jenő', 'szulev' => 1982, 'irszam' => 1026, 'orsz' => 'H' ]
            és így tovább az adatbázis tábla minden sorára (rekordjára) megcsinálva ezt.
        */
        $tabla .= '<tr><td>' . $row['nev'] . '</td></tr>'; 
        // $tabla .= '<td>' . $row['irszam'] .' </td>'; 
        // $tabla .= '<td>' . $row['szulev'] .' </td></tr>'; 
        
    }
}

$tabla .= '</table>'; 
echo $tabla;
?>
            </div>
            <div class='col-6'>
            <p>2. Feladat: Listázd ki a magyarországi ügyfeleket életkoruk szerint! Kezdd a legfiatalabbal!</p>
<?php
$sql = 'SELECT `nev` FROM `ugyfel` WHERE `orsz` = "H";';

$result = $conn -> query($sql);

$tabla = '<table class="table table-dark">';
$tabla .= '<tr class="bg-success"><th>Név</th></tr>';
if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
        /*
            Első sor (rekord)
            $row = ['azon' => 1, 'nev' => 'Buda Jenő', 'szulev' => 1982, 'irszam' => 1026, 'orsz' => 'H' ]
            és így tovább az adatbázis tábla minden sorára (rekordjára) megcsinálva ezt.
        */
        $tabla .= '<tr><td>' . $row['nev'] . '</td></tr>'; 
        // $tabla .= '<td>' . $row['irszam'] .' </td>'; 
        // $tabla .= '<td>' . $row['szulev'] .' </td></tr>'; 
        
    }
}

$tabla .= '</table>'; 
echo $tabla;
?>
            </div>
        </div>
    </div>    
</body>
</html>

