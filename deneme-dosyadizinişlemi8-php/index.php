<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   
<?php


$Dizin = "./";
$Listele = scandir($Dizin);   /* SCANDİR() TÜM ALT DİZİNLERİ GÖSTERİR */

echo "<pre>";
print_r($Listele);    
echo "</pre>";

?>





</body>
</html>