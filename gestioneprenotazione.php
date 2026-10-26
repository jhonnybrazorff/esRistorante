<?php

$nome = $_POST["nome"] ?? "";
$cognome = $_POST["cognome"] ?? "";
$table = $_POST["table"] ?? "";
$primo = $_POST["primo"] ?? null;
$secondo = $_POST["secondo"] ?? null;
$antipasto = $_POST["antipasto"] ?? null;
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

global $prezzo_antipasto, $prezzo_primo, $prezzo_secondo, $primo,$secondo,$antipasto;

if($primo == "primo" && $secondo == "secodo" && $antipasto == "antipasto"){
    return ($prezzo_antipasto + $prezzo_primo + $prezzo_secondo) * 0.85;
}
elseif($primo == "primo" && $secondo == "secondo"){
    return ($prezzo_primo + $prezzo_secondo) * 0.90;
}elseif($primo == "primo" && $antipasto == "antipasto"){
    return $prezzo_primo + $prezzo_antipasto;

}elseif($primo == "primo"){
    return $prezzo_primo;
}elseif($secondo == "secondo" && $antipasto == "antipasto"){
    return $prezzo_secondo + $prezzo_antipasto;

}elseif($secondo == "secondo"){
    return $prezzo_secondo;
}else{
    return -1;
}

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
global $time;

if(calcolo_prezzo_menu() == -1){
    echo "Non puoi non selezionare pasti o soltanto antipasto";
    
    echo "orario: " . $time;

    echo " <a href='http://localhost/esRistorante/esRistorante/prenotazione.html'>torna indietro</a><button></button>";
}
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
   
    <table border = "1">
  <tr>
    <th>generalità</th>
    <th>cameriere</th>
    <th>Parcheggio</th>
    <th>Ordine</th>
    <th>ora ordine</th>
    <th>tavolo</th>
    <th>note</th>
    <th>prezzo finale</th>
  </tr>

  <tr>
    <td><?php echo $nome ?></td>
    <td><?php echo $cameriere ?></td>
    <td><?php echo $sceltaParcheggio ?></td>
    <td><?php echo $primo ?></td>
    <td><?php echo $time ?></td>
    <td><?php echo $table ?></td>
    <td><?php echo $notePlusValore ?></td>
    <td><?php echo calcolo_prezzo_finale() ?></td>
</tr>

<tr>
    <td><?php echo $cognome ?></td>
    <td><?php echo "//" ?></td>
    <td><?php echo prezzo_parcheggio() . "$" ?></td>
    <td><?php echo $secondo ?></td>
    <td><?php echo "//" ?></td>
    <td><?php echo "//" ?></td>
    <td><?php echo "//" ?></td>
    <td><?php echo "//" ?></td>
  </tr>
</table>
</body>
</html>