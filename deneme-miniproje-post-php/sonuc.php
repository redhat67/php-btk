<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
/*     post superglobal: post daha güvenlidir.
 */    $isim = $_POST["ad"];
    $soyisim = $_POST["soyad"];

    echo $isim . "" . $isim;
    ?>
</body>
</html>