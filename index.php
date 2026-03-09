<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sayfa Başlığı</title>
</head>
<body>

    <h1>Merhaba Dünya</h1>
    <p>Bu benim ilk HTML sayfam.</p>
<?php
    // yorum satırı
    /* uzun yorum satırı
    */
    echo "hello <b>world</b> deneme .echoEcho  <br> <br>";
   
    $age =25;
    $age2 =25;
    echo $age , "\n";
    #yorum satırı


    function toplam(){
         $age =25;
    $age2 =25;
        $age3= $age + $age2;
        echo " $age3 ";
    }
    
      function toplam2($a,$b){        
        return  $a + $b;
    }
    echo "1. sayı girin ";
    $sayi1 =trim(fgets(STDIN));
    echo "2. sayı girin ";
    $sayi2 =trim(fgets(STDIN));
    $sonuc = toplam2($sayi1,$sayi2);
    echo "Toplam : $sonuc \n";
    toplam();

          function çıkar($a,$b){        
        return  $a - $b;
    }
    echo "1. sayı girin ";
    $sayi1 =trim(fgets(STDIN));
    echo "2. sayı girin ";
    $sayi2 =trim(fgets(STDIN));
    $sonuc = çıkar($sayi1,$sayi2);
    echo "çıkar : $sonuc \n";
   

?>
</body>
</html>
