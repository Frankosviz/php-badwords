<?php 
    $goodwords = $_GET('goodwords');
    $badwords = $_POST('badwords');
    var_dump($goodwords);
    var_dump($badwords);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/14dd55bd5d.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../bootstrap.css">
    <title>PHP Esempi</title>
</head>

<body>
<div class="container text-center">
        <h1 class="text-primary m-5">PHP Badwords</h1>
        
        <div class="mt-5 d-flex justify-content-around align-items-center">
            <div>
                <p>Good words</p>
                <form class="form" action="printWords.php" method="GET">
                    <input type="text" name="goodwords">
                    <button class="btn btn-primary" type="submit">Invia</button>
                </form>
            </div>
            <div>
                <p>Bad words</p>
                <form class="form" action="printWords.php" method="POST">
                    <input type="text" name="badwords">
                    <button class="btn btn-primary" type="submit">Invia</button>
                </form>
            </div>
        </div>

        <footer class="mt-5 text-primary border-top">
            Made by 'Frankosviz'
        </footer>
</body>
