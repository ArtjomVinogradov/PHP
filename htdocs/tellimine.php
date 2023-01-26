<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Harjutus 3</title>
</head>
<body>

    <h1>Tellimine</h1>

<?php
 //lisab vormist saadud andmed muutujasse
 $a = $_GET['t1'];
 $b = $_GET['t2'];
 
 $trappindala = (($a + $b) / 2) *2 ;
 $rombi = $a * 4 ;

 echo 'Tarpetsi pindala '.$trappindala.' cm2<br>';
 echo 'Rombi ümbermõõt '.$rombi.' cm<br>';
?>


</body>
</html>
