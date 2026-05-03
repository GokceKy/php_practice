<?php

$sonuc = "";

if (isset($_POST['hesapla'])) {

    // POST ile verileri al
    $vize = $_POST['vize'];
    $final = $_POST['final'];

    // Ortalama hesapla
    $ortalama = ($vize * 0.4) + ($final * 0.6);

    // Durum belirle
    if ($ortalama >= 50) {
        $durum = "Geçti";
    } else {
        $durum = "Kaldı";
    }

    $sonuc = "Ortalama: $ortalama - $durum";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Not Hesaplama</title>
</head>
<body>

<h2>Not Hesaplama Sistemi</h2>

<form method="post">
    Vize: <input type="number" name="vize"><br><br>
    Final: <input type="number" name="final"><br><br>
    <button name="hesapla">Hesapla</button>
</form>

<?php
// REQUEST ile de gösterelim
if (isset($_REQUEST['vize'])) {
    echo "<p>Girilen Vize: " . $_REQUEST['vize'] . "</p>";
}

echo "<p>$sonuc</p>";
?>

</body>
</html>