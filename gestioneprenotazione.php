<?php

$nome = $_POST["nome"] ?? "";
$cognome = $_POST["cognome"] ?? "";
$table = $_POST["table"] ?? "";
$time = $_POST["time"] ?? "";
$notePlusValore = $_POST["notePlusValore"] ?? "";
// $nome = $_POST["nome"] ?? "";
$sceltaParcheggio = $_POST["sceltaParcheggio"] ?? null;

$camerieri = ["rocco", "Sasha", "Gianni", "Lindo", "Emma"];

$prezzo_primo = 5;
$prezzo_secondo = 6;
$prezzo_antipasto = 7;
$parcheggio_non_custodito = 3;
$parcheggio_custodito = 5;
$cameriere = $camerieri[rand(0,4)];



function calcolo_prezzo_menu(){



}

function prezzo_parcheggio(){

global $sceltaParcheggio,$parcheggio_custodito,$parcheggio_non_custodito;

if($sceltaParcheggio === "ParcheggioCustodito"){
    return $parcheggio_custodito;
}elseif($sceltaParcheggio === "ParcheggioNonCustodito"){
    return $parcheggio_non_custodito;
}else{
    return 0;
}

}


function calcolo_prezzo_finale(){

return calcolo_prezzo_menu() + prezzo_parcheggio();


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
  <tr>
    <th>cameriere</th>
    <th>Parcheggio</th>
    <th>Ordine</th>
  </tr>
  <tr>
    <td><?php echo $cameriere ?></td>
    <td><?php echo $sceltaParcheggio ?></td>
    <td><?php echo $primo ?></td>
</tr>
<tr>
    <td><?php echo "//" ?></td>
    <td><?php echo prezzo_parcheggio() . "$" ?></td>
    <td><?php echo $secondo ?></td>
  </tr>
</table>
</body>
</html>