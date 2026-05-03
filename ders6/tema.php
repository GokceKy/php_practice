<?php

// Tema seçimi (GET ile)
if (isset($_GET['tema'])) {
    $tema = $_GET['tema'];

    // Cookie ile kaydet
    setcookie("tema", $tema, time() + 3600);
}

// Cookie'den tema al
$tema = isset($_COOKIE['tema']) ? $_COOKIE['tema'] : "light";

// Arka plan belirle
if ($tema == "dark") {
    $bg = "black";
    $color = "white";
} else {
    $bg = "white";
    $color = "black";
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Tema Seçimi</title>
</head>

<body style="background: <?php echo $bg; ?>; color: <?php echo $color; ?>;">

<h2>Tema Seç</h2>

<a href="?tema=light">Açık Tema</a> |
<a href="?tema=dark">Koyu Tema</a>

<?php
echo "<p>Seçili tema: $tema</p>";

// SERVER örneği
echo "<p>Tarayıcı: " . $_SERVER['HTTP_USER_AGENT'] . "</p>";
?>

</body>
</html>