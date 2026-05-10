<?php

echo "<h1>Şikayet Formu Sistemi</h1>";

$mesaj = "";

/* ===================================================
   FORM GÖNDERİLDİ Mİ?
   =================================================== */

if (isset($_POST['gonder'])) {

    /* ===================================================
       VERİLERİ AL
       =================================================== */

    $ad = htmlspecialchars(trim($_POST['ad']));
    $email = htmlspecialchars(trim($_POST['email']));
    $kategori = $_POST['kategori'];
    $oncelik = $_POST['oncelik'];
    $sikayet = htmlspecialchars(trim($_POST['sikayet']));



    /* ===================================================
       BOŞ ALAN KONTROLÜ
       =================================================== */

    if (
        empty($ad) ||
        empty($email) ||
        empty($sikayet)
    ) {

        $mesaj = "Lütfen tüm alanları doldurun!";

    } else {

        /* ===================================================
           DOSYA YÜKLEME
           =================================================== */

        $dosyaAdi = "";

        if ($_FILES['foto']['name'] != "") {

            $dosyaAdi = time() . "_" . $_FILES['foto']['name'];

            $tmp = $_FILES['foto']['tmp_name'];

            // uploads klasörü yoksa oluştur
            if (!file_exists("uploads")) {
                mkdir("uploads");
            }

            move_uploaded_file($tmp, "uploads/" . $dosyaAdi);
        }



        /* ===================================================
           CHECKBOX VERİLERİ
           =================================================== */

        $etiketler = "";

        if (isset($_POST['etiket'])) {

            foreach ($_POST['etiket'] as $e) {
                $etiketler .= $e . ", ";
            }
        }



        /* ===================================================
           TXT DOSYASINA KAYDET
           =================================================== */

        $kayit = "Tarih: " . date("d.m.Y H:i:s") . "\n";
        $kayit .= "Ad: " . $ad . "\n";
        $kayit .= "Email: " . $email . "\n";
        $kayit .= "Kategori: " . $kategori . "\n";
        $kayit .= "Öncelik: " . $oncelik . "\n";
        $kayit .= "Etiketler: " . $etiketler . "\n";
        $kayit .= "Şikayet: " . $sikayet . "\n";
        $kayit .= "Fotoğraf: " . $dosyaAdi . "\n";
        $kayit .= "-----------------------------\n";

        $dosya = fopen("sikayetler.txt", "a");

        fwrite($dosya, $kayit);

        fclose($dosya);

        $mesaj = "Şikayet başarıyla kaydedildi!";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Şikayet Formu</title>
</head>
<body>

<h2>Şikayet Bildirim Formu</h2>

<form method="post" enctype="multipart/form-data">

    <!-- AD -->
    <label>Ad Soyad:</label><br>
    <input type="text" name="ad"><br><br>



    <!-- EMAIL -->
    <label>Email:</label><br>
    <input type="email" name="email"><br><br>



    <!-- SELECT -->
    <label>Kategori:</label><br>

    <select name="kategori">
        <option>Teknik Sorun</option>
        <option>Ödeme Sorunu</option>
        <option>Kargo Problemi</option>
        <option>Diğer</option>
    </select>

    <br><br>



    <!-- RADIO -->
    <label>Öncelik:</label><br>

    <input type="radio" name="oncelik" value="Düşük"> Düşük
    <input type="radio" name="oncelik" value="Orta"> Orta
    <input type="radio" name="oncelik" value="Yüksek"> Yüksek

    <br><br>



    <!-- CHECKBOX -->
    <label>Etiketler:</label><br>

    <input type="checkbox" name="etiket[]" value="Acil"> Acil
    <input type="checkbox" name="etiket[]" value="Hatalı Ürün"> Hatalı Ürün
    <input type="checkbox" name="etiket[]" value="Gecikme"> Gecikme

    <br><br>



    <!-- TEXTAREA -->
    <label>Şikayetiniz:</label><br>

    <textarea name="sikayet" rows="5" cols="40"></textarea>

    <br><br>



    <!-- FILE -->
    <label>Fotoğraf Yükle:</label><br>

    <input type="file" name="foto">

    <br><br>



    <!-- SUBMIT -->
    <button name="gonder">Şikayeti Gönder</button>

</form>

<hr>

<h3>Sonuç</h3>

<?php
echo $mesaj;
?>

<hr>

<h3>Kayıtlı Şikayetler</h3>

<?php

if (file_exists("sikayetler.txt")) {

    echo nl2br(file_get_contents("sikayetler.txt"));
}

?>

</body>
</html>