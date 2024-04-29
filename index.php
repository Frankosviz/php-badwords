<?php

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
    <title>PHP Badwords</title>
</head>

<body>

    <div class="container text-center">
        <h1 class="text-primary m-5">PHP Badwords</h1>
        <h3>Write the words in the right space</h3>
        <div class="mt-5 d-flex justify-content-around align-items-center">
            <div>
                <p>Here you can write the good words</p>
                <form class="form" action="printWords.php" method="get">
                    <input type="text" name="goodwords">
                    <button class="btn btn-primary" type="submit">Invia</button>
                </form>
            </div>
            <div>
                <p>Here you can write the bad words</p>
                <form class="form" action="printBadWords.php" method="post">
                    <input type="text" name="badwords">
                    <button class="btn btn-danger" type="submit">Sei sicuro di volerlo scrivere?</button>
                </form>
            </div>
        </div>

        <footer class="mt-5 text-primary border-top">
            Made by 'Frankosviz'
        </footer>

    </div>
</body>

</html>