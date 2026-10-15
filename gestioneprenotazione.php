<?php

$nome = $_POST["nome"] ?? "";

$camerieri = ["rocco", "Sasha", "Gianni", "Lindo", "Emma"];

$prezzo_primo = 5;
$prezzo_secondo = 6;
$prezzo_antipasto = 7;
$parcheggio_non_custodito = 3;
$parcheggio_custodito = 5;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo $nome ?></h1>
</body>
</html>