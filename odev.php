<?php
// ==========================================
// PHP Öğretici - Decision Making, Type Juggling, Array
// ==========================================

echo "==============================<br>";
echo "1) Yaş Kontrol (if...elseif...else)<br>";
echo "==============================<br>";

$age = 15;
if ($age >= 18) {
    echo "You are an adult.<br>";
} elseif ($age >= 13) {
    echo "You are a teenager.<br>";
} else {
    echo "You are a child.<br>";
}

echo "<br>";

echo "==============================<br>";
echo "2) Sınav Sonucu (if...elseif...else)<br>";
echo "==============================<br>";

$grade = 72;
if ($grade >= 90) {
    echo "Grade: A<br>";
} elseif ($grade >= 80) {
    echo "Grade: B<br>";
} elseif ($grade >= 70) {
    echo "Grade: C<br>";
} elseif ($grade >= 60) {
    echo "Grade: D<br>";
} else {
    echo "Grade: F<br>";
}

echo "<br>";

echo "==============================<br>";
echo "3) Type Juggling<br>";
echo "==============================<br>";

$a = "10";
$b = 5;

echo "a + b = " . ($a + $b) . "<br>";
echo "a == b ? "; var_dump($a == $b); echo "<br>";
echo "a > b ? "; var_dump($a > $b); echo "<br>";

echo "<br>";

echo "==============================<br>";
echo "4) Öğrenci Listesinde Arama (Array + if)<br>";
echo "==============================<br>";

$students = array("Ali", "Ayşe", "Mehmet", "Fatma");
$searchName = "Mehmet";

echo "Searching for: $searchName<br>";

if (in_array($searchName, $students)) {
    echo "$searchName is in the student list.<br>";
} else {
    echo "$searchName is NOT in the student list.<br>";
}
?>