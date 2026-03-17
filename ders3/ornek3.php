<?php

echo "<h1>PHP Control Structures Tutorial</h1>";

/* =====================================
   1) IF / ELSEIF / ELSE
===================================== */

echo "<h2>1) IF - ELSEIF - ELSE</h2>";

$age = 16;

if ($age >= 18) {
    echo "You are an adult<br>";
}
elseif ($age >= 13) {
    echo "You are a teenager<br>";
}
else {
    echo "You are a child<br>";
}


/* =====================================
   2) SWITCH CASE
===================================== */

echo "<h2>2) Switch Case</h2>";

$day = "Monday";

switch ($day) {

    case "Monday":
        echo "Start of the week<br>";
        break;

    case "Friday":
        echo "Almost weekend<br>";
        break;

    case "Saturday":
    case "Sunday":
        echo "Weekend<br>";
        break;

    default:
        echo "Normal working day<br>";
}


/* =====================================
   3) FOR LOOP
===================================== */

echo "<h2>3) For Loop</h2>";

for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}

echo "<h2>For Loop ile Sayı Dizisi</h2>";

// Boş dizi oluşturma
$numbers = array();
// For döngüsü ile diziye sayılar ekleme
for ($i = 1; $i <= 10; $i++) {
      $numbers[] = $i;  
}
for ($i = 0; $i < count($numbers); $i++) {
    echo "Number: " . $numbers[$i] . "<br>";
}
echo "<h2>Çift Sayılar</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
echo "<h2>Tek Sayılar</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
}

echo "<h2>1'den 10'a kadar sayıların toplamı</h2>";
$toplam = 0;

for ($i = 1; $i <= 10; $i++) {
    $toplam += $i;
    $toplam = $toplam + $i;
}

echo "Toplam: " . $toplam . "<br>";


echo "<h2>Döngüde sayı 5'te dursun</h2>";
for ($i = 1; $i <= 10; $i++) {

    if ($i == 5) {
        break;
    }

    echo $i . "<br>";
}


echo "<h2>Dizi Yazdırma</h2>";

$numbers = array(1,2,3,4,5,6,7,8,9,10);

foreach ($numbers as $num) {
    echo $num . "<br>";
}


echo "<h2>Tersten Yazma</h2>";

for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
}
echo "<h2>Dizi Yazdırma</h2>";

$numbers = array(1,2,3,4,5,6,7,8,9,10);

foreach ($numbers as $num) {
    echo $num . "<br>";
}

echo "<h2>Tersten Yazma</h2>";

for ($i = 10; $i >= 1; $i--) {
    echo $i . "<br>";
}

/* ===== BENZER ÖRNEKLER ===== */

echo "<h2>3'ün Katları</h2>";

for ($i = 1; $i <= 10; $i++) {
    if ($i % 3 == 0) {
        echo $i . "<br>";
    }
}


echo "<h2>Sayıların Kareleri</h2>";

for ($i = 1; $i <= 10; $i++) {
    echo $i . " karesi: " . ($i * $i) . "<br>";
}


echo "<h2>5'i Atla (continue örneği)</h2>";

for ($i = 1; $i <= 10; $i++) {

    if ($i == 5) {
        continue;
    }

    echo $i . "<br>";
}

/* =====================================
   4) WHILE LOOP
===================================== */

echo "<h2>4) While Loop</h2>";

$x = 1;

while ($x <= 5) {
    echo "While number: $x <br>";
    $x++;
}


/* =====================================
   5) DO WHILE LOOP
===================================== */

echo "<h2>5) Do While Loop</h2>";

$y = 1;

do {
    echo "Do While number: $y <br>";
    $y++;
} while ($y <= 5);


/* =====================================
   6) FOREACH LOOP
===================================== */

echo "<h2>6) Foreach Loop</h2>";

$students = array("Ali", "Ayşe", "Mehmet", "Fatma");

foreach ($students as $student) {
    echo "Student: $student <br>";
}

?>