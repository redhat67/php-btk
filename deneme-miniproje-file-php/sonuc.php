<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $GelenDosya = $_FILES["Dosya"];
    
    echo "<pre>";
    print_r($GelenDosya); /* diziler için print_r kodunu kullanıyoruz.*/
    echo "</pre>"; /* gelen değerlerin daha okunaklı olması için yazılan html kodudur*/

    ?>
</body>
</html>