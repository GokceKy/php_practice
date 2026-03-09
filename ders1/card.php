<?php
// ==============================
// PHP VARIABLES (Öğrenci Bilgileri)
// ==============================

$ad = "isim soyisim";
$numara = "33435354";
$bolum = "bilgisayar prog";
$universite = "İnönü University";
$dogumTarihi = "00.00.2026";
$kartGecerlilik = "2026";
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Öğrenci Kartı</title>
    <style>
        body {
            background-color: #f2f2f2;
            font-family: Arial, sans-serif;
        }

        .card {
            width: 350px;
            height: 220px;
            background: linear-gradient(135deg, #1e3c72, #2a5298);
            color: white;
            border-radius: 15px;
            padding: 20px;
            margin: 100px auto;
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            position: relative;
        }

        .university {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
        }

        .photo {
            width: 80px;
            height: 100px;
            background-color: white;
            border-radius: 8px;
            position: absolute;
            right: 20px;
            top: 60px;
        }

        .info {
            margin-top: 40px;
        }

        .info p {
            margin: 5px 0;
        }

        .footer {
            position: absolute;
            bottom: 15px;
            left: 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>

<div class="card">
    <div class="university">
        <?php echo $universite; ?><br>
        STUDENT ID CARD
    </div>

    <div class="photo"></div>

    <div class="info">
        <p><strong>Name:</strong> <?php echo $ad; ?></p>
        <p><strong>Student No:</strong> <?php echo $numara; ?></p>
        <p><strong>Department:</strong> <?php echo $bolum; ?></p>
        <p><strong>Birth Date:</strong> <?php echo $dogumTarihi; ?></p>
    </div>

    <div class="footer">
        Valid Until: <?php echo $kartGecerlilik; ?>
    </div>
</div>

</body>
</html>