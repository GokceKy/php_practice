<?php
echo "<h1>PHP Decision Making Tutorial</h1>";

/* ==================================================
   1) IF STATEMENT
   ================================================== */

echo "<h2>1) if Statement</h2>";

$age = 18;

if ($age >= 18) {
    echo "You are an adult.<br>";
}

echo "<hr>";

/* ==================================================
   2) IF...ELSE STATEMENT
   ================================================== */

echo "<h2>2) if...else Statement</h2>";

$grade = 50;

if ($grade >= 60) {
    echo "You passed the exam.<br>";
} else {
    echo "You failed the exam.<br>";
}

echo "<hr>";

/* ==================================================
   3) IF...ELSEIF...ELSE STATEMENT
   ================================================== */

echo "<h2>3) if...elseif...else Statement</h2>";

$score = 85;

if ($score >= 90) {
    echo "Grade: A<br>";
} elseif ($score >= 80) {
    echo "Grade: B<br>";
} elseif ($score >= 70) {
    echo "Grade: C<br>";
} elseif ($score >= 60) {
    echo "Grade: D<br>";
} else {
    echo "Grade: F<br>";
}

echo "<hr>";

/* ==================================================
   4) NESTED IF EXAMPLE
   ================================================== */

echo "<h2>4) İçiçe if Example</h2>";

$age = 20;
$hasID = true;

if ($age >= 18) {
    if ($hasID) {
        echo "Sigara alabilirsin<br>";
    } else {
        echo "Kimlik olmadan alamazsın<br>";
    }
} else {
    echo "Yaşınız uygun değil <br>";
}

echo "<hr>";

/* ==================================================
   5) SHORT HAND IF (Ternary Operator)
   ================================================== */

echo "<h2>5) Kısa yazılım </h2>";

$temperature = 30;

echo ($temperature > 25) ? "It's hot today.<br>" : "It's not that hot.<br>";

?>