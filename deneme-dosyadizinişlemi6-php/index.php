<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

$Dosya = "ornek.txt";
$İzinler = fileperms($Dosya);  /* CHMOD İZİN DEĞERLERİNİ GÖSTERİR VE CHMOD İZİNLERİ LİNUX DA ÇOK KULLANILIR :) */

echo "Erişim izni Değeri : " . $İzinler;












?>
</body>
</html>