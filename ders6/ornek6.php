<?php

echo "<h1>PHP SUPERGLOBALS TAM ANLATIM</h1>";

/* ===================================================
   $GLOBALS
   Tanım: Tüm global değişkenlere her yerden erişmeyi sağlar.
   =================================================== */

echo "<h2>1) \$GLOBALS</h2>";

$a = 10;
$b = 20;

function topla() {
    // global değişkenlere erişiyoruz
    $GLOBALS['sonuc'] = $GLOBALS['a'] + $GLOBALS['b'];
}

topla();

echo "a + b = " . $sonuc . "<br>";



/* ===================================================
   $_SERVER
   Tanım: Sunucu ve kullanıcı bilgilerini içerir.
   =================================================== */

echo "<h2>2) \$_SERVER</h2>";

echo "Sunucu Adı: " . $_SERVER['SERVER_NAME'] . "<br>";
echo "Tarayıcı: " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo "Dosya Yolu: " . $_SERVER['PHP_SELF'] . "<br>";
echo "IP Adresi: " . $_SERVER['REMOTE_ADDR'] . "<br>";



/* ===================================================
   $_GET
   Tanım: URL üzerinden gönderilen verileri alır.
   =================================================== */

echo "<h2>3) \$_GET</h2>";

echo "URL'den gelen isim: ";
if (isset($_GET['isim'])) {
    echo $_GET['isim'];
} else {
    echo "Veri yok";
}
echo "<br>";

// Örnek URL:
// sayfa.php?isim=Ali&yas=20

/* ===================================================
   $_POST
   Tanım: Formdan gönderilen verileri alır.
   =================================================== */

echo "<h2>4) \$_POST</h2>";

if (isset($_POST['gonder'])) {
    $isim = $_POST['isim'];
    echo "POST ile gelen isim: " . $isim . "<br>";
}
?>

<form method="post">
    <input type="text" name="isim" placeholder="İsminizi yazın">
    <button name="gonder">Gönder (POST)</button>
</form>

<?php



/* ===================================================
   $_REQUEST
   Tanım: GET + POST + COOKIE verilerini birlikte alır.
   =================================================== */

echo "<h2>5) \$_REQUEST</h2>";

if (isset($_REQUEST['isim'])) {
    echo "REQUEST ile gelen isim: " . $_REQUEST['isim'] . "<br>";
} else {
    echo "REQUEST veri yok<br>";
}

echo "<h2>6) \$_SESSION</h2>";

session_start();

// session'a veri atama
$_SESSION['kullanici'] = "Ahmet";

echo "Session kullanıcı: " . $_SESSION['kullanici'] . "<br>";



/* ===================================================
   $_COOKIE
   Tanım: Tarayıcıda veri saklamak için kullanılır.
   =================================================== */

echo "<h2>7) \$_COOKIE</h2>";

// cookie oluştur (1 saatlik)
setcookie("kullanici", "Mehmet", time() + 3600);

// cookie okuma
if (isset($_COOKIE['kullanici'])) {
    echo "Cookie kullanıcı: " . $_COOKIE['kullanici'] . "<br>";
} else {
    echo "Cookie henüz oluşmadı (sayfayı yenile)<br>";
}



/* ===================================================
   $_FILES
   Tanım: Dosya yükleme işlemlerinde kullanılır.
   =================================================== */

echo "<h2>8) \$_FILES</h2>";

if (isset($_POST['upload'])) {
    $dosyaAdi = $_FILES['dosya']['name'];
    $gecici = $_FILES['dosya']['tmp_name'];

    move_uploaded_file($gecici, $dosyaAdi);

    echo "Yüklenen dosya: " . $dosyaAdi . "<br>";
}
?>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="dosya">
    <button name="upload">Dosya Yükle</button>
</form>

<?php



/* ===================================================
   $_ENV
   Tanım: Sunucu ortam değişkenlerini içerir.
   =================================================== */

echo "<h2>9) \$_ENV</h2>";

echo "Sunucu PATH bilgisi: " . getenv("PATH") . "<br>";



/* ===================================================
   EKSTRA ÖRNEKLER (PEKİŞTİRME)
   =================================================== */

echo "<h2>EKSTRA ÖRNEKLER</h2>";

// GET + POST farkı
echo "GET daha çok URL'de görünür.<br>";
echo "POST daha güvenlidir.<br>";

// SESSION örneği
$_SESSION['yas'] = 25;
echo "Session yaş: " . $_SESSION['yas'] . "<br>";

// COOKIE tekrar örneği
setcookie("tema", "dark", time() + 3600);
if (isset($_COOKIE['tema'])) {
    echo "Tema: " . $_COOKIE['tema'] . "<br>";
}

// GLOBALS tekrar örneği
$x = 5;
$y = 7;

function carp() {
    $GLOBALS['sonuc2'] = $GLOBALS['x'] * $GLOBALS['y'];
}

carp();

echo "Çarpım: " . $sonuc2 . "<br>";

?>