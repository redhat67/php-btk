<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


/* if(5 > 10){
    echo "Sonuç Doğru";  YANLIŞ SONUCU VERECEKTİR.
}else{
echo "Sonuç Yanlış";
}

 */

 /* **************************************************************************************************************** */


/* if(5 > 10){
    echo "Geçerli oldu";
}elseif(20 > 10){                 YENİ ŞART OLUŞTURMA
    echo"Çalıştı";
}else{
    echo "Geçersiz oldu";
} */

/* ************************************************************************************************************************************** */

/* $Deger = 30;

switch($Deger){
    case $Deger > 20;      SWİTCH VE BREAK KULLANIMI
    echo "Geçerli oldu";
    break;
} */
/* ************************************************************************************************************************************************** */

/* $Deger = 8;

switch($Deger):
case $Deger > 8;   SÜSLÜ PARANTEZ OLMADAN KONTROL YAPISI 
echo "Geçerli oldu";
break;
default:
echo "geçersiz oldu";
endswitch; */

/* ************************************************************************************************************************************************ */

/* $Deger = "Spectator";

$Sonuc = ($Deger=="Spectator") ? "Doğru" : "Yanlış";   ŞIK BULMA OPERATÖRÜ (ÜÇLÜ) 

echo $Sonuc; */

/* ************************************************************************************************************************************************************* */

/* try{
    $Deger = 100;
    $Deger1 = 2;
    if($Deger1 ==0){
        throw new Exception("Yatalı işlem var");
    }
    echo "İşlemin sonucu: " . $Deger / $Deger1;   İSTİSNA KULLANIMI
}catch(Exception $Sonuc){
    echo $Sonuc ->getMessage();
}finally{
    echo "Her daim çalışan kod";
}
 */
/* *************************************************************************************************************************************** */


/* error_reporting(E_ALL ^ E_WARNING);

echo $Deger;                      RAPORLAMA İŞLEMİ

echo "Spectator";
 */
/* ******************************************************************************************************************************************** */









































































?>



























</body>
</html>