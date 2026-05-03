<?php
session_start();

$message = "";

// Form gönderildiyse
if (isset($_POST['gonder'])) {
    $isim = $_POST['isim'];

    // Session'a kaydet
    $_SESSION['isim'] = $isim;

    // Cookie'ye kaydet (1 saat)
    setcookie("isim", $isim, time() + 3600);

    $message = "Hoşgeldin $isim!";
}

// Cookie varsa otomatik doldur
$cookieIsim = isset($_COOKIE['isim']) ? $_COOKIE['isim'] : "";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Ziyaretçi Sistemi</title>
</head>
<body>

<h2>Ziyaretçi Karşılama</h2>

<form method="post">
    <input type="text" name="isim" placeholder="İsminizi yazın" value="<?php echo $cookieIsim; ?>">
    <button name="gonder">Gönder</button>
</form>

<?php
// Session varsa göster
if (isset($_SESSION['isim'])) {
    echo "<p>Session: Hoşgeldin " . $_SESSION['isim'] . "</p>";
}

// Cookie varsa göster
if (isset($_COOKIE['isim'])) {
    echo "<p>Cookie: Seni hatırlıyoruz " . $_COOKIE['isim'] . "</p>";
}

// Server bilgisi
echo "<p>IP Adresin: " . $_SERVER['REMOTE_ADDR'] . "</p>";

echo "<p>$message</p>";
?>

</body>
</html>