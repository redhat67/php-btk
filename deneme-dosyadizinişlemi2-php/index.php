<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




<?php

$Dosya = "Dosyalar/Dökümanlar/Belge.txt";
$Bul = pathinfo($Dosya);

echo "pathinfo Değeri : <br />"; /* DİZİN VE DOSYA ADINI NULARAK DETAYLI OLARAK KONUMUNU GÖSTERME*/
echo "<pre>";
print_r($Bul);
echo "<pre>";

?>
</body>
</html>