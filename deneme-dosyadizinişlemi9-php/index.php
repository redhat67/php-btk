<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


$Dosya = "Dosya.txt";
$DosyaAc = fopen($Dosya, "r"); /* DOSYANIN İÇİNİ OKUMAK İÇİN KULLANIN METHOD*/

$Oku = fgets($DosyaAc);

echo $Oku;







?>







</body>
</html>