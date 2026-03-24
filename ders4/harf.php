<?php

/* ===================================================
   HARFLER (0-1 MATRİS)
   =================================================== */

$letters = array(

    "A" => array(
        array(0,1,0),
        array(1,0,1),
        array(1,1,1),
        array(1,0,1),
        array(1,0,1)
    ),

    "B" => array(
        array(1,1,0),
        array(1,0,1),
        array(1,1,0),
        array(1,0,1),
        array(1,1,0)
    )

);


/* ===================================================
   FONKSİYON: HARFİ GÖSTER
   =================================================== */

function harfGoster($harf, $letters) {

    if (!isset($letters[$harf])) {
        echo "Harf bulunamadı";
        return;
    }

    foreach ($letters[$harf] as $row) {

        echo "<div class='row'>";

        foreach ($row as $cell) {

            if ($cell == 1) {
                echo "<div class='box active'></div>";
            } else {
                echo "<div class='box'></div>";
            }

        }

        echo "</div>";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>0-1 Harf Gösterimi</title>

    <style>
        body {
            font-family: Arial;
        }

        .row {
            display: flex;
        }

        .box {
            width: 20px;
            height: 20px;
            border: 1px solid #ccc;
        }

        .active {
            background-color: black;
        }
    </style>
</head>
<body>

<h2>Harf Gösterimi (0-1 Matrisi)</h2>

<?php
// Örnek kullanım
harfGoster("A", $letters);
harfGoster("B", $letters);
?>

</body>
</html>