<?php

    $paragrafo = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid asperiores eos doloribus nisi optio reiciendis cum iste illo suscipit animi? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquid asperiores eos doloribus nisi optio reiciendis cum iste illo suscipit animi?";
    
    /* var_dump($_GET); */
    $parola = $_GET["word"];

    $paragrafo_censurato = str_replace($parola, "***", $paragrafo);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>

<h3>Paragrafo: <?php echo $paragrafo; ?></h3>

<h3>Lunghezza: <?php echo strlen($paragrafo); ?></h3>

<h3>Paragrafo censurato: <?php echo $paragrafo_censurato; ?></h3>

<h3>Lunghezza censurata: <?php echo strlen($paragrafo_censurato); ?></>

</body>
</html>