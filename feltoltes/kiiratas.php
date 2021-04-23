<!DOCTYPE html>
<html lang='hu'>
<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Kiírató oldal</title>
</head>
<body>
    <div class='container'>
    <h3>Jelenkezettek listája</h3>
<?php

require_once './csatlakozas.php';

$sql = 'SELECT * FROM `tanulo`';

$result = $conn -> query($sql);

$tabla = '<table class="table table-dark">';
$tabla .= '<tr class="bg-success"><td>Vezetéknév</td><td>Keresztnév</td><td>Születési év</td></tr>';

if ($result -> num_rows > 0) {
    while ($row = $result -> fetch_assoc()) {
        $tabla .= '<tr><td>' . $row['vezeteknev'] . '</td>';
        $tabla .= '<td>' . $row['keresztnev'] . '</td>';
        $tabla .= '<td>' . $row['szuletesiev'] . '</td></tr>';
    }
}

$tabla .= '</table>';

echo $tabla;

?>
    </div>

</body>
</html>