<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
/* function yaziyaz(){
    echo "Çalışır inş"; ÇALIŞTI FUNCTİON İLE BİR ÇOK İŞİ BİRDEN YAPABİLİYORUZ
}
yaziyaz(); */
/* ******************************************************************************************************** */

/* $isim = "Spec";
$Soyisim = "Tator";

function Yaz(){
    global $isim;
    global $Soyisim;    GLOBAL İLE FUNCTİON
    echo $isim . $Soyisim;
}
Yaz(); */
 /* ************************************************************************************************************************* */

/* $Yazdir = function(){
    echo "Spectator";     ANONİM İLE FUNCTİON
};
$Yazdir(); */
/* ************************************************************************************************************************************* */

/* function Islem(){
    $isim = "Spec";
    $Soyisim = "Tator";

    return($isim . $Soyisim);    RETURN DEĞER DÖNDÜRMEK İÇİN KULLANILIR
}
$Sonuc = Islem();
echo $Sonuc; */
/* *********************************************************************************************************************************************************** */

/* function Bilgiler(){

    $GelenParametreSayisi = func_num_args(); PARAMETRE SAYISINI BULMAK İÇİN KULLANILIR
    echo "Gelen parametre sayısı: " . $GelenParametreSayisi;    

}
Bilgiler("Ata","Spectator","Login",67,33,877,"Exploit"); */

/* ********************************************************************************************************************************************************* */

/* $Calistir = "Deneme";

function Deneme($Deger){
    echo $Deger;              DEĞİŞKEN KULLANARAK ÇALIŞTIRMA
}
$Calistir("Spectator");
 */

/* ********************************************************************************************************************************************* */
/* 
($İslemYap = function(){
    echo "Spectator";      OTOMATİK İŞLEM ÇALIŞTIRMA
})();
 */

/* **************************************************************************************************************************************************************** */

/* ($İslemYap = function($isim,$Soyisim){
    echo $isim . " " . $Soyisim;        OTOMATİK ÇALIŞAN FONKSİYONA PARAMETRE TANIMLAMA
})("Spec","Tator"); */

/* ********************************************************************************************************************************************************** */

/* function Bir(){
    $Sayi = 0;
    $Sayi = $Sayi+1;
    echo "Sayı Değeri :" . $Sayi;  FONKSİYON İÇERİSİNDE STATİK DEĞİŞKEN TANIMLAMA
}
Bir();
Bir();
Bir();
Bir(); */
/* **************************************************************************************************************************************** */
/* 
function Islem($Baslangic,$Bitis){
    while($Baslangic<=$Bitis){
        yield $Baslangic;
        $Baslangic++;
    }
    echo "Yazdımı?";
}

$Sonuc = Islem(1,50000);
foreach($Sonuc as $Deger){   YİELD YAPISININ KULLANIMI 
    echo $Deger . " ";
}

$BellekTuketimi = memory_get_usage();
echo "İşlem esnasında tüketilen bellek miktarı :" . $BellekTuketimi;

 */
/* *********************************************************************************************************************************************************** */

/* function Bir(){
    function iki(){
        function uc(){
            function dort(){
                echo "Burası dort adındaki fonksiyonun içerisidir";   ÇOK BOYUTLU FONKSİYON ÖRNEĞİ
            }
            echo "Burası uc adındaki fonksiyonun içerisidir";
        }
    }
}

Bir();
iki();
uc();
dort(); */

/* ****************************************************************************************************************************************************************** */

/* function Bir($İsim, $Soyisim){
    function iki($Meslek, $Yas){
        echo $Yas . $Meslek;
    }
    echo $İsim . " " . $Soyisim; ÇOK BOYUTLU FONKSİYONA PARAMETRE TANIMLAMA 
}
Bir("Spectator","By");
iki("Hack",67);
 */
/* *********************************************************************************************************************************************************************** */


/* function Bir($İsimBir="Spectator",$SoyisimBir="Hack",$YasBir=24){
    function iki($İsimİki="Spectator2",$Soyisimİki="Hack2",$Yasİki=25){
          echo $İsimİki . " " . $Soyisimİki . "Yaş: " . $Yasİki;
    }
    iki($İsimBir, $SoyisimBir, $YasBir);    ALT FONKSİYONDA PARAMETRE DEĞERİ ALMA
}
Bir(); */





































?>
</body>
</html>