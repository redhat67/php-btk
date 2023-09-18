<?php

declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

/* $Deger = "Spectator";

$Sonuc = gettype($Deger);  GETTYPE() VERİ TÜRÜ İLE STRİNG GİBİ İFADELERİ METİNSEL ÇIKTI OLARAK YAZDIRABİLİYORUZ.

echo $Deger .  "<br />";
echo "Veri Türü: " . $Sonuc;
 */
/* ****************************************************************************************************************************** */

/* $Deger = "8";
$DegerİcerigiTuru = gettype($Deger);

echo "İçeriğin ilk hali : " . $Deger;
echo "İçeriğin ilk halinin veri türü:" . $DegerİcerigiTuru;   SETTYPE() KULLANIMI 

settype($Deger,"null");

$DegerİcerigiSonTuru = gettype($Deger);

echo "İçeriğin ilk hali : " . $Deger;
echo "İçeriğin ilk halinin veri türü:" . $DegerİcerigiSonTuru;
 */
/* *********************************************************************************************************************************** */


/* $Deger = "Spectator98";
$DegerVerıTuru = gettype($Deger);

echo "İçerik :" . $Deger;
echo "Veri Türü :" . $DegerVerıTuru;   VERİ TÜRÜ İÇİN DEĞER İŞLEMİ

echo "içerik: " . intval($Deger);
$DegerVerıTuruSon = gettype($Deger);
echo "Veri Türü : " . $DegerVerıTuruSon; */

/* ************************************************************************************************************************************************ */

/* KOD SATIRI 3 E BAK */
/*  function Deneme(array $Deger):string{
    $İslem = implode($Deger);
    return $İslem;

 }                VERİ TÜRÜ DAYATMA İŞLEMİ

 $Ornek = array("Ata","Spectator","Hacker");
 $Sonuc = Deneme($Ornek);

 echo $Sonuc; */

/* ************************************************************************************************************************************** */

/* $Deger = "Spectator";
                             VAR_DUMP HERHANGİ BİR DEĞİŞKENE AİT TÜM BİLGİLERE ULAŞMAK İÇİN KULLANILIR
var_dump($Deger);  */

/* *********************************************************************************************************************************** */

/* $Bilgiler = array("isim" => "Spectator","Soyisim" => "Hack","Yas" => 35);

echo "<pre>";
print_r($Bilgiler);
echo "<pre>";

$Sonuc = serialize($Bilgiler);    SERİALİZE SAKLANILABİLİR VERİ TÜRÜNE DÖNÜŞTÜRME İŞLEMİDİR.

echo $Sonuc; */
/* ********************************************************************************************************************************************************** */







?>
</body>
</html>;