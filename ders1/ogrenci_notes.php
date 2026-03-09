<?php

echo "<h1>PHP Variables, Data Types, Type Juggling, Operators Example</h1>";

/* yorum satırı  */

$studentName = "Gokce";
$midterm = "80";     // string olarak
$final = 90;         // integer
$bonus = 5.5;        // float
$isPassed = false;   // boolean

echo "<h2>1) Variables</h2>";
echo "Student: $studentName <br>";
echo "Midterm: $midterm <br>";
echo "Final: $final <br>";
echo "Bonus: $bonus <br>";
echo "<hr>";

/* ======================================================
   2) DATA TYPES
   ====================================================== */

echo "<h2>2) Data Types</h2>";
echo "midterm type: " . gettype($midterm) . "<br>";
echo "final type: " . gettype($final) . "<br>";
echo "bonus type: " . gettype($bonus) . "<br>";
echo "<hr>";

/* ======================================================
   3) TYPE JUGGLING
   ====================================================== */

echo "<h2>3) Type Juggling</h2>";

// midterm string ama matematik işleminde otomatik int'e dönüşür
$average = ($midterm + $final) / 2;

echo "Average: $average <br>";
echo "Average type: " . gettype($average) . "<br>";
echo "<hr>";

/* ======================================================
   4) OPERATORS
   ====================================================== */

echo "<h2>4) Operators</h2>";

$totalScore = $average + $bonus;  // arithmetic operator
echo "Total with bonus: $totalScore <br>";

// Comparison operator
if ($totalScore >= 60) {
    $isPassed = true;
}

echo "Passed? ";
var_dump($isPassed);
echo "<hr>";

/* ======================================================
   5) TYPE CASTING
   ====================================================== */

echo "<h2>5) Type Casting</h2>";

$stringNumber = "100.75";
$convertedInt = (int)$stringNumber;
$convertedFloat = (float)$stringNumber;

echo "Original type: " . gettype($stringNumber) . "<br>";
echo "Converted to int: $convertedInt <br>";
echo "Converted to float: $convertedFloat <br>";

?>