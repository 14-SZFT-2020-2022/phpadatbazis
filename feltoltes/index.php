<!DOCTYPE html>
<html lang='hu'>
<head>
    <meta charset='UTF-8' />
    <meta name='viewport' content='width=device-width, initial-scale=1.0' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Feltöltés</title>
</head>
<body>
    <div class='container'>
    <h3>Jelentkezési lap</h3>
    <form action='./feltolt.php' method='post' autocomplete='off'>
        <div class='form-group'>
            <label for='veznev'>Vezetéknév: </label>
            <input type='text' class='form-control' name='veznev' id='veznev' placeholder='Vezetéknév' />
        </div>
        <div class='form-group'>
            <label for='kernev'>Keresztnév: </label>
            <input type='text' class='form-control' name='kernev' id='kernev' placeholder='Keresztnév' />
        </div>
        <div class='form-group'>
            <label for='szulev'>Születési év: </label>
            <input type='number' class='form-control' name='szulev' id='szulev' min='1973' max='2021' placeholder='2021' />
        </div>
        <button type='submit' class='btn btn-primary'>Feltölt</button>
    </form>
    <h3>Eredmény táblázat</h3>
    <form action='./kiiratas.php' method='get'>
        <button type='submit' class='btn btn-secondary'>Kiírás</button>
    </form>
    </div>
</body>
</html>