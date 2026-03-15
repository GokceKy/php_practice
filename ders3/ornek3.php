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
//Çift sayılar $i%2==0
// Tek Sayılar
//$toplam =0;
//1 den 10 a kadar sayıların toplamı
// döngüde sayı 5 de dursun 
// Diziyi yazdırma
// tersten yazma
for ($i = 0; $i < count($numbers); $i++) {
    echo "Number: " . $numbers[$i] . "<br>";

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