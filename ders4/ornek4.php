<?php

echo "<h1>PHP Sayı Dizileri - Detaylı Anlatım</h1>";

/* ===================================================
   1) TEK BOYUTLU SAYI DİZİSİ
   =================================================== */

echo "<h2>1) Tek Boyutlu Sayı Dizisi</h2>";
echo "Bu dizi sadece sayılar içerir.<br>";
echo "Indexler 0'dan başlar.<br><br>";

$numbers = array(1,2,3,4,5,6,7,8,9,10);

echo "İlk eleman: " . $numbers[0] . "<br>";
echo "Son eleman: " . $numbers[9] . "<br>";

echo "<h2>2) Foreach ile Diziyi Yazdırma</h2>";
foreach ($numbers as $num) {
    echo "Sayı: " . $num . "<br>";
}
echo "<h2>3) For ile Diziyi Yazdırma</h2>";

for ($i = 0; $i < count($numbers); $i++) {
    echo "Index $i : " . $numbers[$i] . "<br>";
}


/* ===================================================
   2) ÇOK BOYUTLU SAYI DİZİSİ
   =================================================== */

echo "<h2>2) Çok Boyutlu Sayı Dizisi</h2>";
echo "Dizi içinde dizi vardır (matris gibi).<br><br>";

$matrix = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

echo "İlk satır ilk eleman: " . $matrix[0][0] . "<br>";
echo " eleman: " . $matrix[1][0] . "<br>";
echo " eleman: " . $matrix[0][1] . "<br>";

echo "Son satır son eleman: " . $matrix[2][2] . "<br>";

foreach ($matrix as $row) {
    foreach ($row as $value) {
        echo $value . " ";
    }
    echo "<br>";
}

/* ===================================================
   4) Anahtar Değer SAYI DİZİSİ
   =================================================== */

echo "<h2>4) Associative Sayı Dizisi</h2>";
echo "Anahtar-değer yapısı kullanılır.<br><br>";

$scores = array(
    "Ali" => 90,
    "Ayşe" => 75,
    "Mehmet" => 60
);

echo "Ali'nin notu: " . $scores["Ali"] . "<br>";



/* ===================================================
   5) Anahtar DEğer + FOREACH
   =================================================== */

echo "<h2>5) Anahtar Değer Dizide Foreach</h2>";

foreach ($scores as $name => $score) {
    echo $name . " : " . $score . "<br>";
}

?>

<?php

echo "<h1>PHP Fonksiyonlar ve Dizi İşlemleri</h1>";

/* ===================================================
   1) FONKSİYON TANIMLAMA
   =================================================== */

echo "<h2>1) Fonksiyon Tanımlama</h2>";
echo "Fonksiyonlar tekrar kullanılabilir kod bloklarıdır.<br><br>";

// Basit fonksiyon
function selamVer() {
    echo "Merhaba PHP!<br>";
}

selamVer();

/* ===================================================
   2) PARAMETRELİ FONKSİYON
   =================================================== */

echo "<h2>2) Parametreli Fonksiyon</h2>";

function sayiyiYaz($sayi) {
    echo "Sayı: $sayi <br>";
}

sayiyiYaz(5);
sayiyiYaz(10);

/* ===================================================
   3) RETURN KULLANIMI
   =================================================== */

echo "<h2>3) Return ile Fonksiyon</h2>";

function topla($a, $b) {
    return $a + $b;
}

$sonuc = topla(5, 3);
echo "Toplam: " . $sonuc . "<br>";

/* ===================================================
   4) DİZİ TANIMLAMA
   =================================================== */

echo "<h2>4) Sayı Dizisi</h2>";

$numbers = array(1,2,3,4,5,6,7,8,9,10);

foreach ($numbers as $num) {
    echo $num . " ";
}

/* ===================================================
   5) DİZİYİ TOPLAYAN FONKSİYON
   =================================================== */
echo "<h2>5) Dizideki Sayıları Toplama</h2>";
$numbers = array(1,2,3,4,5,6,7,8,9,10);
function diziTopla($dizi) {
    $toplam = 0;

    foreach ($dizi as $num) {
        $toplam += $num;
    }

    return $toplam;
}

echo "Toplam: " . diziTopla($numbers) . "<br>";

/* ===================================================
   6) DİZİDEKİ EN BÜYÜK SAYI
   =================================================== */

echo "<h2>6) En Büyük Sayıyı Bulma</h2>";

function enBuyuk($dizi) {
    $max = $dizi[0];

    foreach ($dizi as $num) {
        if ($num > $max) {
            $max = $num;
        }
    }

    return $max;
}

echo "En büyük sayı: " . enBuyuk($numbers) . "<br>";

/* ===================================================
   7) HAZIR DİZİ FONKSİYONLARI
   =================================================== */

echo "<h2>7) Hazır Dizi Fonksiyonları</h2>";

echo "Eleman sayısı: " . count($numbers) . "<br>";
echo "En büyük: " . max($numbers) . "<br>";
echo "En küçük: " . min($numbers) . "<br>";
echo "Toplam: " . array_sum($numbers) . "<br>";


/* ===================================================
   8) DİZİ SIRALAMA
   =================================================== */

echo "<h2>8) Dizi Sıralama</h2>";

sort($numbers); // küçükten büyüğe

echo "Sıralı dizi: <br>";

foreach ($numbers as $num) {
    echo $num . " ";
}

/* ===================================================
   9) DİZİ TERS ÇEVİRME
   =================================================== */

echo "<h2>9) Diziyi Ters Çevirme</h2>";
echo "Eleman sayısı: " . count($numbers) . "<br>";
echo "En büyük: " . max($numbers) . "<br>";
echo "En küçük: " . min($numbers) . "<br>";
echo "Toplam: " . array_sum($numbers) . "<br>";
$reverse = array_reverse($numbers);

foreach ($reverse as $num) {
    echo $num . " ";
}

?>