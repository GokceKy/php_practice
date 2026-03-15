<?php
echo "<h1>PHP Tutorial - Data Types ve Operators</h1>";

/* ==================================================
   1) COMPOUND DATA TYPES
   ================================================== */

echo "<h2>1) Compound Data Types</h2>";

// Array
$students = array("Ali", "Ayşe", "Mehmet");

echo "Array içeriği:<br>";
print_r($students);
echo "<br><br>";

// Object
class Student {
    public $name;
    public $age;

    function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }
}

$student1 = new Student("Ahmet", 21);

echo "Object örneği:<br>";
echo $student1->name . " - " . $student1->age;

echo "<hr>";

/* ==================================================
   2) ÖZEL DATA TİPLERİ
   ================================================== */

echo "<h2>2) Özel Data Tipleri</h2>";

$emptyVar = null;

function testFunction(){
    echo "Bu bir fonksiyon örneğidir";
}

echo "NULL değişken tipi: ";
var_dump($emptyVar);

echo "<br><br>";

$funcVar = "testFunction";

echo "Callable örneği:<br>";
$funcVar(); // fonksiyon çağrılır

echo "<hr>";

/* ==================================================
   3) PHP FUNCTIONS TO CHECK DATA TYPES
   ================================================== */

echo "<h2>3) PHP Functions to Check Data Types</h2>";

$var1 = "Hello";
$var2 = 50;
$var3 = 10.5;
$var4 = array(1,2,3);

$students = array("Ali", "Ayşe", "Mehmet");
echo "Array içeriği:<br>";
print_r($students);
echo "is_string(var1): ";
var_dump(is_string($var1));
echo "is_int(var2): ";
var_dump(is_int($var2));

echo "is_float(var3): ";
var_dump(is_float($var3));
echo "is_array(var4): ";
var_dump(is_array($var4));

echo "<hr>";

/* ==================================================
   4bcznxbcxzxvcnvc
   ================================================== */

echo "<h2> 4) Array Operators</h2>";

$array1 = array("a" => "Apple", "b" => "Banana");
$array2 = array("c" => "Cherry", "d" => "Date");

echo "Array1:<br>";
print_r($array1);

echo "<br>Array2:<br>";
print_r($array2);

echo "<br><br>Union Operator (+):<br>";

// iki diziyi toplayarak ekranda gösterir
$result = $array1 + $array2;
print_r($result);



echo "<br><br>Equality (==): ";
var_dump($array1 == $array2);

echo "<br>Identity (===): ";
var_dump($array1 === $array2);

echo "<hr>";

/* ==================================================
   5) INCREMENT / DECREMENT OPERATORS
   ================================================== */

echo "<h2>5) Increment / Decrement Operators</h2>";

$x = 5;

echo "Initial value: $x <br>";

$x++;
echo "Post Increment (x++): $x <br>";

++$x;
echo "Pre Increment (++x): $x <br>";

$x--;
echo "Post Decrement (x--): $x <br>";

--$x;
echo "Pre Decrement (--x): $x <br>";

echo "<hr>";

/* ==================================================
   6) STRING OPERATORS
   ================================================== */

echo "<h2>6) String Operators</h2>";

$str1 = "Hello";
$str2 = "World";

echo "Concatenation (.):<br>";

$result = $str1 . " " . $str2;
echo $result;

echo "<br><br>";

echo "Concatenation Assignment (.=):<br>";

$str1 .= " PHP";
echo $str1;

echo "<hr>";

?>