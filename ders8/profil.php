<?php

echo "<h1 style='text-align:center;'>Kullanıcı Profil Sistemi</h1>";

$mesaj = "";

// Varsayılan bilgiler
$profil = [
    "ad" => "",
    "email" => "",
    "hakkimda" => "",
    "cinsiyet" => "",
    "sehir" => "",
    "foto" => ""
];


/* ===================================================
   FORM GÖNDERİLDİ
   =================================================== */

if (isset($_POST['kaydet'])) {

    // Verileri al
    $profil['ad'] = htmlspecialchars(trim($_POST['ad']));
    $profil['email'] = htmlspecialchars(trim($_POST['email']));
    $profil['hakkimda'] = htmlspecialchars(trim($_POST['hakkimda']));
    $profil['cinsiyet'] = $_POST['cinsiyet'];
    $profil['sehir'] = $_POST['sehir'];



    /* ===================================================
       FOTOĞRAF YÜKLEME
       =================================================== */

    if ($_FILES['foto']['name'] != "") {

        // uploads klasörü yoksa oluştur
        if (!file_exists("uploads")) {
            mkdir("uploads");
        }

        // Benzersiz isim
        $fotoAdi = time() . "_" . $_FILES['foto']['name'];

        $tmp = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmp, "uploads/" . $fotoAdi);

        $profil['foto'] = $fotoAdi;
    }



    /* ===================================================
       TXT DOSYASINA KAYDET
       =================================================== */

    $kayit = 
    "Ad: " . $profil['ad'] . "\n" .
    "Email: " . $profil['email'] . "\n" .
    "Cinsiyet: " . $profil['cinsiyet'] . "\n" .
    "Şehir: " . $profil['sehir'] . "\n" .
    "Hakkımda: " . $profil['hakkimda'] . "\n" .
    "Fotoğraf: " . $profil['foto'] . "\n" .
    "--------------------------\n";

    $dosya = fopen("profil.txt", "a");

    fwrite($dosya, $kayit);

    fclose($dosya);

    $mesaj = "Profil başarıyla oluşturuldu!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Kullanıcı Profili</title>

    <style>

        body{
            font-family: Arial;
            background:#f2f2f2;
            margin:20px;
        }

        .form-kutu{
            width:400px;
            background:white;
            padding:20px;
            border-radius:10px;
            margin:auto;
            box-shadow:0 0 10px lightgray;
        }

        input, textarea, select{
            width:100%;
            padding:10px;
            margin-top:5px;
            margin-bottom:15px;
        }

        button{
            background:#4CAF50;
            color:white;
            border:none;
            padding:10px 20px;
            cursor:pointer;
        }

        .mesaj{
            color:green;
            font-weight:bold;
        }

        /* ===================================================
           PROFİL KARTI
           =================================================== */

        .kart{
            width:350px;
            background:white;
            margin:30px auto;
            padding:20px;
            border-radius:15px;
            text-align:center;
            box-shadow:0 0 15px lightgray;
        }

        .kart img{
            width:120px;
            height:120px;
            border-radius:50%;
            object-fit:cover;
            margin-bottom:15px;
            border:4px solid #4CAF50;
        }

        .kart h2{
            margin:10px 0;
        }

        .kart p{
            color:#555;
        }

    </style>
</head>

<body>

<!-- ===================================================
     FORM ALANI
     =================================================== -->

<div class="form-kutu">

    <h2>Profil Oluştur</h2>

    <form method="post" enctype="multipart/form-data">

        <label>Ad Soyad</label>
        <input type="text" name="ad">

        <label>Email</label>
        <input type="email" name="email">

        <label>Cinsiyet</label>

        <select name="cinsiyet">
            <option>Erkek</option>
            <option>Kadın</option>
        </select>

        <label>Şehir</label>

        <select name="sehir">
            <option>Malatya</option>
            <option>Ankara</option>
            <option>İstanbul</option>
            <option>İzmir</option>
        </select>

        <label>Hakkımda</label>

        <textarea name="hakkimda"></textarea>

        <label>Profil Fotoğrafı</label>

        <input type="file" name="foto">

        <button name="kaydet">Profili Oluştur</button>

    </form>

    <br>

    <div class="mesaj">
        <?php echo $mesaj; ?>
    </div>

</div>



<!-- ===================================================
     PROFİL KARTI GÖSTER
     =================================================== -->

<?php

if ($profil['ad'] != "") {

    echo "
    
    <div class='kart'>
    ";

    // FOTOĞRAF
    if ($profil['foto'] != "") {

        echo "<img src='uploads/" . $profil['foto'] . "'>";
    }

    echo "

        <h2>" . $profil['ad'] . "</h2>

        <p><b>Email:</b> " . $profil['email'] . "</p>

        <p><b>Cinsiyet:</b> " . $profil['cinsiyet'] . "</p>

        <p><b>Şehir:</b> " . $profil['sehir'] . "</p>

        <p>" . $profil['hakkimda'] . "</p>

    </div>
    
    ";
}

?>

</body>
</html>