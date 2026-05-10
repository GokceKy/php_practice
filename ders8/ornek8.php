<?php

echo "<h1>PHP Forms Full Ders</h1>";

/* ===================================================
   FORM GÖNDERİLDİ Mİ?
   isset() → butona basılmış mı kontrol eder
   =================================================== */

if (isset($_POST['gonder'])) {

    echo "<h2>Form Verileri</h2>";

    /* ===================================================
       trim()
       Başındaki ve sonundaki boşlukları siler
       =================================================== */

    $ad = trim($_POST['ad']);

    /* ===================================================
       htmlspecialchars()
       HTML kodlarını güvenli hale getirir
       XSS saldırısını engeller
       =================================================== */

    $ad = htmlspecialchars($ad);

    $email = htmlspecialchars(trim($_POST['email']));

    $mesaj = htmlspecialchars(trim($_POST['mesaj']));

    /* ===================================================
       empty()
       Alan boş mu kontrol eder
       =================================================== */

    if (empty($ad)) {
        echo "Ad alanı boş bırakılamaz!<br>";
    } else {
        echo "Ad Soyad: $ad <br>";
    }

    if (empty($email)) {
        echo "Email boş bırakılamaz!<br>";
    } else {
        echo "Email: $email <br>";
    }

    echo "Mesaj: $mesaj <br>";



    /* ===================================================
       RADIO BUTTON
       =================================================== */

    if (isset($_POST['cinsiyet'])) {
        echo "Cinsiyet: " . $_POST['cinsiyet'] . "<br>";
    }



    /* ===================================================
       CHECKBOX
       =================================================== */

    if (isset($_POST['hobiler'])) {

        echo "<b>Hobiler:</b><br>";

        foreach ($_POST['hobiler'] as $hobi) {
            echo "- $hobi <br>";
        }
    }



    /* ===================================================
       SELECT
       =================================================== */

    echo "Şehir: " . $_POST['sehir'] . "<br>";



    /* ===================================================
       NUMBER INPUT
       =================================================== */

    echo "Yaş: " . $_POST['yas'] . "<br>";



    /* ===================================================
       PASSWORD
       =================================================== */

    $sifre = $_POST['sifre'];

    // Şifre hashleme
    $hashli = password_hash($sifre, PASSWORD_DEFAULT);

    echo "Şifre (Hashli): $hashli <br>";



    /* ===================================================
       DATE INPUT
       =================================================== */

    echo "Doğum Tarihi: " . $_POST['tarih'] . "<br>";



    /* ===================================================
       COLOR INPUT
       =================================================== */

    echo "Seçilen Renk: " . $_POST['renk'] . "<br>";



    /* ===================================================
       FILE UPLOAD
       =================================================== */

    if ($_FILES['dosya']['name'] != "") {

        $dosyaAdi = $_FILES['dosya']['name'];
        $tmp = $_FILES['dosya']['tmp_name'];

        // uploads klasörü yoksa oluştur
        if (!file_exists("uploads")) {
            mkdir("uploads");
        }

        move_uploaded_file($tmp, "uploads/" . $dosyaAdi);

        echo "Dosya yüklendi: $dosyaAdi <br>";
    }



    /* ===================================================
       GET METHOD ÖRNEĞİ
       =================================================== */

    echo "<hr>";
    echo "<h2>GET Method Örneği</h2>";

    echo "GET ile gelen veri örneği:<br>";
    echo "sayfa.php?isim=Ali <br>";

}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Forms</title>
</head>
<body>

<h2>PHP Form Örneği</h2>

<!-- ===================================================
     FORM BAŞLANGICI
     method="post" → verileri gizli gönderir
     enctype → dosya yüklemek için gerekir
     =================================================== -->

<form method="post" enctype="multipart/form-data">

    <!-- TEXT INPUT -->
    <label>Ad Soyad:</label><br>
    <input type="text" name="ad"><br><br>



    <!-- EMAIL INPUT -->
    <label>Email:</label><br>
    <input type="email" name="email"><br><br>



    <!-- PASSWORD INPUT -->
    <label>Şifre:</label><br>
    <input type="password" name="sifre"><br><br>



    <!-- NUMBER INPUT -->
    <label>Yaş:</label><br>
    <input type="number" name="yas"><br><br>



    <!-- DATE INPUT -->
    <label>Doğum Tarihi:</label><br>
    <input type="date" name="tarih"><br><br>



    <!-- COLOR INPUT -->
    <label>Favori Renk:</label><br>
    <input type="color" name="renk"><br><br>



    <!-- TEXTAREA -->
    <label>Mesaj:</label><br>
    <textarea name="mesaj"></textarea><br><br>



    <!-- RADIO -->
    <label>Cinsiyet:</label><br>

    <input type="radio" name="cinsiyet" value="Erkek"> Erkek
    <input type="radio" name="cinsiyet" value="Kadın"> Kadın
    <br><br>



    <!-- CHECKBOX -->
    <label>Hobiler:</label><br>

    <input type="checkbox" name="hobiler[]" value="Spor"> Spor
    <input type="checkbox" name="hobiler[]" value="Müzik"> Müzik
    <input type="checkbox" name="hobiler[]" value="Yazılım"> Yazılım
    <br><br>



    <!-- SELECT -->
    <label>Şehir:</label><br>

    <select name="sehir">
        <option value="Malatya">Malatya</option>
        <option value="Ankara">Ankara</option>
        <option value="İstanbul">İstanbul</option>
    </select>

    <br><br>



    <!-- FILE -->
    <label>Dosya Yükle:</label><br>
    <input type="file" name="dosya"><br><br>



    <!-- SUBMIT -->
    <button name="gonder">Formu Gönder</button>

</form>

<hr>

<h2>GET Method Canlı Örnek</h2>

<a href="?isim=Ali">GET ile Veri Gönder</a>

<br><br>

<?php

/* ===================================================
   GET METHOD CANLI ÖRNEK
   =================================================== */

if (isset($_GET['isim'])) {

    echo "GET ile gelen isim: " . $_GET['isim'];
}

?>

</body>
</html>