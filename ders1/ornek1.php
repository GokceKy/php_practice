<?php
echo "<h1>PHP : Veri Tipleri, Değişkenler, Tür Dönüşümü  ve Operatörler </h1>";

/* anlamkbfdhvdfh */

echo "<h2>1) PHP Değişkenler</h2>";
$name = "Ali";     // String
$age = 17;           // Integer
$height = 1.70;      // Float
$isStudent = true;   // Boolean


echo "Name: $name <br>";
echo "Age: $age <br>";
echo "Height: $height <br>";
echo "Is Student: $isStudent <br>"; // true -> 1 olarak yazdırılır

echo "<hr>";

/* =======================================================
   2) Veri Tipleri
   ======================================================= */

echo "<h2>2) PHP Veri Tipleri </h2>";

$stringVar = "Hello PHP";
$intVar = 100;
$floatVar = 10.5;
$boolVar = false;
$arrayVar = array("AI", "ML", "DL");
$nullVar = null;

echo "String type: " . gettype($stringVar) . "<br>";
echo "Integer type: " . gettype($intVar) . "<br>";
echo "Float type: " . gettype($floatVar) . "<br>";
echo "Boolean type: " . gettype($boolVar) . "<br>";
echo "Array type: " . gettype($arrayVar) . "<br>";
echo "Null type: " . gettype($nullVar) . "<br>";

echo "<hr>";

/* =======================================================
   3) Otomatik Tür Dönüşümü
   ======================================================= */

echo "<h2>3) Otomatik Tür Dönüşümü </h2>";

$a = "10";   // string
$b = 5;      // integer



$result = $a + $b;  // PHP string'i otomatik integer'a çevirir

echo "a (string): $a <br>";
echo "b (integer): $b <br>";
 echo "a + b sonucu: $result <br>";
echo "Sonuç tipi: " . gettype($result) . "<br>";

echo "<br><b>Karşılaştırma :</b><br>";

$x = "5";
$y = 5;

if ($x == $y) {
    echo "x == y TRUE (değerler eşit)<br>";
}

if ($x === $y) {
    echo "x === y TRUE (hem değer hem tip eşit)<br>";
} else {
    echo "x === y FALSE (tipler farklı)<br>";
}

echo "<hr>";

/* =======================================================
   4) Operatörler
   ======================================================= */

echo "<h2>4) Operatörler</h2>";
$sayi;
$num1 = 11;
$num2 = 2;
$toplam = $num1 + $num2;
$sub = $num1 - $num2 ;
echo "$toplam";
echo "$sub";

/* Aritmetik Operatörler  YORUM SATIRI  */
echo "<h3>Aritmetik Operatörler</h3>";
echo "Toplama: " . ($num1 + $num2) . "<br>";
echo "Çıkarma: " . ($num1 - $num2) . "<br>";
echo "Çarpma: " . ($num1 * $num2) . "<br>";
echo "Bölme: " . ($num1 / $num2) . "<br>";
echo "Mod: " . ($num1 % $num2) . "<br>";

/* Atama Operatörleri */
echo "<h3>Atama Operatörleri</h3>";
$value = 10;
$value += 5;  // value = value + 5
echo "value += 5 → $value <br>";

//.=
$value .= 2;
echo "value += 2 → $value <br>";


//-
//*

/* Karşılaştırma Operatörleri */
echo "<h3>Karşılaştırma Operatörleri</h3>";
echo "20 == '20' : ";
var_dump(20 == "20");  // true

echo "20 === '20' : ";
var_dump(20 === "20"); // false

// <
$sayi=1;
$sayi2=4;
echo "$sayi > $sayi2";
var_dump($sayi > $sayi2);

//>
//>=    <=


/* Mantık Operatörleri */
echo "<h3>Mantık Operatörleri</h3>";
$condition1 = true;
$condition2 = false;

echo "true AND false: ";
var_dump($condition1 && $condition2);

echo "true OR false: ";
var_dump($condition1 || $condition2);

echo "<hr>";

/* =======================================================
   5) Manuel Tür Dönüşümü
   ======================================================= */

echo "<h2>5) Manuel Tür Dönüşümü</h2>";

$stringNumber = "50";
$converted = (int)$stringNumber;

echo "String: $stringNumber<br>";
echo "Converted to int: $converted<br>";
echo "New type: " . gettype($converted) . "<br>";
 
//boolean
//double or float
//string

?>