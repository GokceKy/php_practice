<?php

echo "<h1>Şikayet Sistemi</h1>";

$mesaj = "";

/* ===================================================
   FORM GÖNDERİLDİYSE
   =================================================== */
if (isset($_POST['gonder'])) {

    $sikayet = trim($_POST['sikayet']);

    // Yüklenen dosyalar
    $dosyalar = $_FILES['resimler'];

    // Kaç dosya seçilmiş?
    $dosyaSayisi = count($dosyalar['name']);

    if ($dosyaSayisi < 2 || $dosyalar['name'][0] == "") {

        $mesaj = "En az 2 fotoğraf yüklemelisiniz!";

    } else {

        // uploads klasörü yoksa oluştur
        if (!file_exists("uploads")) {
            mkdir("uploads");
        }

        $kayitMetni = "Şikayet: " . $sikayet . "\n";
        $kayitMetni .= "Fotoğraflar:\n";

        /* fotoğrafları kaydet  */
        for ($i = 0; $i < $dosyaSayisi; $i++) {

            $ad = $dosyalar['name'][$i];
            $tmp = $dosyalar['tmp_name'][$i];

            // benzersiz isim (çakışma olmasın)
            $yeniAd = time() . "_" . $ad;

            move_uploaded_file($tmp, "uploads/" . $yeniAd);

            $kayitMetni .= $yeniAd . "\n";
        }

        $kayitMetni .= "----------------------\n";

        /* =========================
           TXT DOSYAYA KAYDET
           ========================= */
        $dosya = fopen("sikayetler.txt", "a");
        fwrite($dosya, $kayitMetni);
        fclose($dosya);

        $mesaj = "Şikayet başarıyla kaydedildi!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Şikayet Sistemi</title>
</head>
<body>

<h2>Şikayet Formu</h2>

<form method="post" enctype="multipart/form-data">
    
    <textarea name="sikayet" placeholder="Şikayetinizi yazın" required></textarea><br><br>
    
    <input type="file" name="resimler[]" multiple required><br><br>
    
    <button name="gonder">Gönder</button>

</form>

<p><?php echo $mesaj; ?></p>

<hr>

<h3>Kayıtlı Şikayetler</h3>

<?php
// kayıtları göster
if (file_exists("sikayetler.txt")) {
    echo nl2br(file_get_contents("sikayetler.txt"));
}
?>

</body>
</html>