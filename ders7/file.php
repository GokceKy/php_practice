<?php

echo "<h1>Dosya Oluşturma + Görsel Yükleme Sistemi</h1>";

$dosyaAdi = "notlar.txt";

/* ===================================================
   1) DOSYA OLUŞTUR
   =================================================== */
if (isset($_POST['olustur'])) {

    $dosya = fopen($dosyaAdi, "w");
    fwrite($dosya, "Yeni dosya oluşturuldu\n");
    fclose($dosya);

    echo "Dosya oluşturuldu!<br>";
}


/* ===================================================
   2) DOSYAYA YAZI EKLE
   =================================================== */
if (isset($_POST['yaz'])) {

    $metin = $_POST['metin'];

    $dosya = fopen($dosyaAdi, "a");
    fwrite($dosya, $metin . "\n");
    fclose($dosya);

    echo "Yazı eklendi!<br>";
}


/* ===================================================
   3) DOSYAYI GÖSTER
   =================================================== */
if (isset($_POST['goster'])) {

    if (file_exists($dosyaAdi)) {
        echo "<b>Dosya İçeriği:</b><br>";
        echo nl2br(file_get_contents($dosyaAdi));
    } else {
        echo "Dosya bulunamadı!<br>";
    }
}


/* ===================================================
   4) GÖRSEL YÜKLE
   =================================================== */
if (isset($_POST['upload'])) {

    $dosya = $_FILES['resim'];

    $dosyaAdiResim = $dosya['name'];
    $gecici = $dosya['tmp_name'];

    // uploads klasörü yoksa oluştur
    if (!file_exists("uploads")) {
        mkdir("uploads");
    }

    move_uploaded_file($gecici, "uploads/" . $dosyaAdiResim);

    echo "Görsel yüklendi!<br>";

    // ekranda göster
    echo "<img src='uploads/$dosyaAdiResim' width='200'><br>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Dosya ve Görsel Sistemi</title>
</head>
<body>

<h2>Dosya İşlemleri</h2>

<!-- DOSYA OLUŞTUR -->
<form method="post">
    <button name="olustur">Dosya Oluştur</button>
</form>

<br>

<!-- DOSYAYA YAZ -->
<form method="post">
    <input type="text" name="metin" placeholder="Metin yaz">
    <button name="yaz">Dosyaya Yaz</button>
</form>

<br>

<!-- DOSYAYI GÖSTER -->
<form method="post">
    <button name="goster">Dosyayı Göster</button>
</form>

<hr>

<h2>Görsel Yükleme</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="resim">
    <button name="upload">Görsel Yükle</button>
</form>

</body>
</html>