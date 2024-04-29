<?php 
    $badtitle = 'You writed a bad word, after three times you will be banned';
    $badwords = $_POST['badwords'];
    // Con strlen andiamo a recuperare la lunghezza della stringa
    // $badwords = strlen($badwords);
    //  var_dump($badwords);
    // for ($badwords = 0; $badwords < 100; $badwords++) {
    //     $bannedWord = '*';
    //     if ($badwords <= 100) {

    //     }
    // };
    
    str_replace('badwords', '******', $badwords);
    $badWordsSostitution = str_replace($badwords, '******', $badwords);

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
        
        <div class="mt-5 d-flex justify-content-center align-items-center">
            <div>

                <!-- Utilizziamo il strtoupper per far si che le parole diventino maiuscole -->
                <p><?php echo strtoupper($badtitle) ?></p>

                <h2 class="text-danger">
                    <?php  echo $badWordsSostitution

                    // Con echo substr andiamo a tagliare la parola partendo dal terzo carattere fino alla fine della lunghezza della parola, in questo caso partiamo dal quarto carattere 
                        // echo substr($badwords, 3);
                    ?>
                </h2>
            </div>
        </div>

        <footer class="mt-5 text-primary border-top">
            Made by 'Frankosviz'
        </footer>
</body>

</html>