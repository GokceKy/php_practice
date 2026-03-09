<?php
// ==========================================
// ÖDEV: Dinamik Öğrenci Kartı + Not Kontrolü
// ==========================================

// Öğrenciler array'i
$students = array(
    array("name" => "Ali", "age" => 20, "grade" => 95),
    array("name" => "Ayşe", "age" => 17, "grade" => 72),
    array("name" => "Mehmet", "age" => 15, "grade" => 58),
    array("name" => "Fatma", "age" => 18, "grade" => 88)
);
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Dinamik Öğrenci Kartı</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f2f2f2; padding: 20px; }
        .card { background-color: white; padding: 15px; border-radius: 8px; box-shadow: 0 3px 8px rgba(0,0,0,0.2); margin-bottom: 20px; width: 300px; }
        .card h3 { margin: 0; color: #2a9df4; }
        .status { font-weight: bold; }
    </style>
</head>
<body>

<h1>Öğrenci Kartları</h1>

<?php
// Döngü ile her öğrenci için kart oluştur
foreach ($students as $student) {

    // Yaş kontrolü
    if ($student['age'] >= 18) {
        $ageStatus = "Adult";
    } else {
        $ageStatus = "Not Adult";
    }

    // Harf notu belirleme
    $g = $student['grade'];
    if ($g >= 90) {
        $gradeLetter = "A";
    } elseif ($g >= 80) {
        $gradeLetter = "B";
    } elseif ($g >= 70) {
        $gradeLetter = "C";
    } elseif ($g >= 60) {
        $gradeLetter = "D";
    } else {
        $gradeLetter = "F";
    }

    // Passed / Failed durumu
    $passStatus = ($g >= 60) ? "Passed" : "Failed";

    // Kartı ekrana yazdır
    echo "<div class='card'>";
    echo "<h3>" . $student['name'] . "</h3>";
    echo "<p>Age: " . $student['age'] . " → <span class='status'>$ageStatus</span></p>";
    echo "<p>Grade: " . $g . " → $gradeLetter → <span class='status'>$passStatus</span></p>";
    echo "</div>";
}
?>

</body>
</html>