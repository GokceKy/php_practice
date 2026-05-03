<?php

echo "<h1>PHP File Handling Dersi</h1>";

/* ===================================================
   1) DOSYA OLUŞTURMA VE YAZMA (fopen + fwrite)
   =================================================== */

echo "<h2>1) Dosya Oluşturma ve Yazma</h2>";

// "w" → dosya yoksa oluşturur, varsa içini siler
$dosya = fopen("ornek.txt", "w");

fwrite($dosya, "Merhaba PHP\n");
fwrite($dosya, "Dosya işlemleri öğreniyorum\n");

fclose($dosya);

echo "Dosya oluşturuldu ve yazıldı.<br>";



/* ===================================================
   2) DOSYA OKUMA (fread)
   =================================================== */

echo "<h2>2) Dosya Okuma</h2>";

// "r" → sadece okuma
$dosya = fopen("ornek.txt", "r");

// dosyanın tamamını oku
$icerik = fread($dosya, filesize("ornek.txt"));

echo nl2br($icerik);

fclose($dosya);



/* ===================================================
   3) SATIR SATIR OKUMA (fgets)
   =================================================== */

echo "<h2>3) Satır Satır Okuma</h2>";

$dosya = fopen("ornek.txt", "r");

while (!feof($dosya)) {
    echo fgets($dosya) . "<br>";
}

fclose($dosya);



/* ===================================================
   4) DOSYAYA EKLEME (append - a)
   =================================================== */

echo "<h2>4) Dosyaya Ekleme</h2>";

// "a" → var olan dosyanın sonuna ekler
$dosya = fopen("ornek.txt", "a");

fwrite($dosya, "Yeni satır eklendi\n");

fclose($dosya);

echo "Dosyaya yeni veri eklendi.<br>";



/* ===================================================
   5) DOSYA VAR MI KONTROLÜ (file_exists)
   =================================================== */

echo "<h2>5) Dosya Var mı?</h2>";

if (file_exists("ornek.txt")) {
    echo "Dosya mevcut.<br>";
} else {
    echo "Dosya yok.<br>";
}



/* ===================================================
   6) DOSYA SİLME (unlink)
   =================================================== */

echo "<h2>6) Dosya Silme</h2>";

// Güvenlik için hemen silmeyelim
// unlink("ornek.txt");
// echo "Dosya silindi.<br>";

echo "Silme işlemi yorum satırında bırakıldı.<br>";



/* ===================================================
   7) DOSYA BOYUTU (filesize)
   =================================================== */

echo "<h2>7) Dosya Boyutu</h2>";

echo "Dosya boyutu: " . filesize("ornek.txt") . " byte<br>";



/* ===================================================
   8) KULLANICI GİRDİSİNİ DOSYAYA YAZMA
   =================================================== */

echo "<h2>8) Formdan Veri Al ve Dosyaya Yaz</h2>";

if (isset($_POST['kaydet'])) {

    $metin = $_POST['metin'];

    $dosya = fopen("veriler.txt", "a");
    fwrite($dosya, $metin . "\n");
    fclose($dosya);

    echo "Veri dosyaya kaydedildi.<br>";
}
?>

<form method="post">
    <input type="text" name="metin" placeholder="Bir şey yaz">
    <button name="kaydet">Kaydet</button>
</form>

<?php



/* ===================================================
   9) DOSYAYI TAMAMEN OKU VE GÖSTER
   =================================================== */

echo "<h2>9) Kaydedilen Verileri Göster</h2>";

if (file_exists("veriler.txt")) {

    $dosya = fopen("veriler.txt", "r");

    while (!feof($dosya)) {
        echo fgets($dosya) . "<br>";
    }

    fclose($dosya);
}



/* ===================================================
   10) BONUS: file_get_contents 
   =================================================== */

echo "<h2>10) file_get_contents()</h2>";

if (file_exists("ornek.txt")) {
    echo nl2br(file_get_contents("ornek.txt"));
}

?>