<?php

$badword = $_POST ['badword'];
$text = $_POST ['text'];

var_dump($badword);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Badword exposed</title>
</head>
<body>
    
<div class="container">
    <h1 class="text-center">Risultato</h1>
    <div class="row">
        <div class="col-6">
            <h3>Paragrafo originale</h3>
            <p><?php echo($text) ?></p>
            <h3>Lunghezza paragrafo: <?php echo(strlen($text)) ?> caratteri</h3>
            <h5>Parola da censurare</h5>
            <p><?php echo($badword) ?></p>
        </div>
        <div class="col-6">
            <h3>Paragrafo censurato</h3>
            <p><?php echo($text) ?></p>
            <h3>Lunghezza paragrafo: <?php echo(strlen($text)) ?> caratteri</h3>
        </div>
    </div>
</div>
</body>
</html>