<?php

echo "<h1>PHP Hazır Fonksiyonlar - Detaylı Anlatım</h1>";

/* ===================================================
   1) HTTP HEADER FONKSİYONLARI
   =================================================== */

echo "<h2>1) HTTP Header Fonksiyonları</h2>";
echo "Header fonksiyonları, tarayıcıya bilgi gönderir.<br>";

// NOT: header() kullanımı sayfanın en başında olmalıdır
// header("Location: https://www.google.com");

echo "Örnek: header('Location: ...') ile başka sayfaya yönlendirme yapılır.<br>";
// Tarayıcıya sayfanın UTF-8 olduğunu söyler (Türkçe karakter için önemli)
// header("Content-Type: text/html; charset=UTF-8");

// Tarayıcının sayfayı önbelleğe almamasını sağlar
// header("Cache-Control: no-cache, must-revalidate");
// header("Pragma: no-cache");
// header("Expires: 0");

// Sayfayı geçmiş tarihli göstererek cache'i devre dışı bırakır
// header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");

echo "Örneğin yönlendirme yapabiliriz.<br><br>";


 // header("Location: https://www.google.com");
 // exit(); // yönlendirmeden sonra kodun devam etmesini engeller


/* ===================================================
   2) ZAMAN (DATE / TIME) FONKSİYONLARI
   =================================================== */

echo "<h2>2) Zaman Fonksiyonları</h2>";

// Şu anki tarih ve saat
echo "Şu anki tarih: " . date("d-m-Y") . "<br>";
echo "Şu anki saat: " . date("H:i:s") . "<br>";

// Unix timestamp
$zaman = time();
echo "Unix zamanı: " . $zaman . "<br>";

// Belirli tarih oluşturma
$tarih = mktime(0, 0, 0, 12, 25, 2025);
echo "Özel tarih: " . date("d-m-Y", $tarih) . "<br>";



/* ===================================================
   3) SAYISAL (MATEMATİK) FONKSİYONLARI
   =================================================== */

echo "<h2>3) Matematik Fonksiyonları</h2>";

echo "Mutlak değer abs(-5): " . abs(-5) . "<br>";
echo "Yuvarlama round(4.6): " . round(4.6) . "<br>";
echo "Yukarı yuvarlama ceil(4.2): " . ceil(4.2) . "<br>";
echo "Aşağı yuvarlama floor(4.8): " . floor(4.8) . "<br>";

echo "2 üzeri 3 (pow): " . pow(2,3) . "<br>";
echo "Karekök sqrt(16): " . sqrt(16) . "<br>";

echo "Rastgele sayı (1-100): " . rand(1,100) . "<br>";



/* ===================================================
   4) TRİGONOMETRİ FONKSİYONLARI
   =================================================== */

echo "<h2>4) Trigonometri Fonksiyonları</h2>";

$aci = 30;

// dereceyi radyana çevir
$radyan = deg2rad($aci);

echo "sin(30): " . sin($radyan) . "<br>";
echo "cos(30): " . cos($radyan) . "<br>";
echo "tan(30): " . tan($radyan) . "<br>";



/* ===================================================
   5) METİN (STRING) FONKSİYONLARI
   =================================================== */

echo "<h2>5) Metin Fonksiyonları</h2>";

$metin = "Merhaba PHP Dünyası";

echo "Orijinal metin: $metin <br>";
echo "Büyük harf: " . strtoupper($metin) . "<br>";
echo "Küçük harf: " . strtolower($metin) . "<br>";

echo "Uzunluk strlen(): " . strlen($metin) . "<br>";

echo "Kelime sayısı str_word_count(): " . str_word_count($metin) . "<br>";

echo "Metin içinde arama (PHP var mı?): ";
var_dump(strpos($metin, "PHP"));

echo "<br>";

echo "Parçalama explode(): <br>";
$parcala = explode(" ", $metin);
foreach ($parcala as $kelime) {
    echo $kelime . "<br>";
}



/* ===================================================
   6) ŞİFRELEME (HASH / PASSWORD)
   =================================================== */

echo "<h2>6) Şifreleme Fonksiyonları</h2>";

$sifre = "123456";

// md5 ve sha1 (eski yöntemler)
echo "MD5: " . md5($sifre) . "<br>";
echo "SHA1: " . sha1($sifre) . "<br>";

// Güvenli yöntem
$hash = password_hash($sifre, PASSWORD_DEFAULT);
echo "Güvenli hash: " . $hash . "<br>";

// Şifre doğrulama
if (password_verify("123456", $hash)) {
    echo "Şifre doğru!<br>";
} else {
    echo "Şifre yanlış!<br>";
}



/* ===================================================
   7) örnek
   =================================================== */

echo "<h2>7) örnek</h2>";

$isim = "Ahmet";
$dogumYili = 2000;

// yaş hesaplama
$yas = date("Y") - $dogumYili;

echo "Merhaba $isim, yaşınız: $yas <br>";

// rastgele şifre üretme
$random = rand(1000,9999);
echo "Size özel şifre: " . md5($random) . "<br>";

?>