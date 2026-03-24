<?php
session_start();

// Başlangıç matrisi 5x5
if (!isset($_SESSION['matrix'])) {
    $_SESSION['matrix'] = array(
        array(1,0,0,0,0),
        array(0,1,0,0,0),
        array(0,0,1,0,0),
        array(0,0,0,1,0),
        array(0,0,0,0,1)
    );
}

// Fonksiyon: matrisi ekrana yazdır
function matrisGoster($matris) {
    echo "<div style='line-height:0;'>";
    
    for ($i = 0; $i < count($matris); $i++) {          // Satırlar
        for ($j = 0; $j < count($matris[$i]); $j++) { // Sütunlar
            if ($matris[$i][$j] == 1) {
                echo "<span style='display:inline-block;width:20px;height:20px;background:black;margin:1px;'></span>";
            } else {
                echo "<span style='display:inline-block;width:20px;height:20px;background:#eee;margin:1px;'></span>";
            }
        }
        echo "<br>";
    }
    
    echo "</div>";
}

// Form gönderildiyse kaydır
if (isset($_POST['kaydir'])) {
    $matris = $_SESSION['matrix'];

    for ($i = 0; $i < count($matris); $i++) {
        $first = array_shift($matris[$i]); // ilk elemanı çıkar
        array_push($matris[$i], $first);   // sona ekle
    }

    $_SESSION['matrix'] = $matris;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP LED Matrix</title>
</head>
<body>

<h1>LED Matrix Kaydırma </h1>

<?php
matrisGoster($_SESSION['matrix']);
?>

<form method="post">
    <button type="submit" name="kaydir">Kaydır</button>
</form>

</body>
</html>