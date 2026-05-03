<?php
echo "<h2>PHP Soru Çözümleri</h2><hr>";

/* S1 */
echo "<b>S1:</b> PHP kodları <?php ... ?> etiketleri arasına yazılır.<br><br>";

/* S2 */
echo "<b>S2:</b> Tek satır yorumlar // ile başlar.<br><br>";

/* S3 */
echo "<b>S3:</b> '=' atama, '==' karşılaştırma operatörüdür.<br><br>";

/* S4 */
echo "<b>S4:</b><br>";
$myName='MubEmi';
$myVar="$myName";
echo $myVar; // çıktı
echo "<br><br>";

/* S5 */
echo "<b>S5:</b><br>";
$myName='An & Ad';
echo $myName; // çıktı
echo "<br><br>";

/* S6 */
echo "<b>S6:</b><br>";
$Var="İNUZEM";
echo '$Var'; // çıktı (tek tırnak)
echo "<br><br>";

/* S7 */
echo "<b>S7:</b><br>";
$myName='Ali&Can';
echo $myName; // çıktı
echo "<br><br>";

/* S8 */
echo "<b>S8:</b><br>";
$stringNumber=1;
$number=3;
echo $stringNumber.$number; // çıktı
echo "<br><br>";

/* S9 */
echo "<b>S9:</b><br>";
if (8=='8') {
    echo "Denk";
} else {
    echo "Farklı";
}
echo "<br><br>";

/* S10 */
echo "<b>S10:</b><br>";
$age = 17;
if ($age >= 18) {
    echo "Yetişkin";
} elseif ($age >= 13) {
    echo "Genç";
} else {
    echo "Çocuk";
}
echo "<br><br>";

/* S11 */
echo "<b>S11:</b><br>";
$numbers = array(10,20,30);
echo $numbers[1]; 
echo "<br><br>";

/* S12 */
echo "<b>S12:</b><br>";
echo "Session, verileri sayfalar arasında saklamak için kullanılır.<br><br>";

/* S13 */
echo "<b>S13:</b><br>";
echo "header(\"Location: ...\") sayfa yönlendirme yapar.<br><br>";

/* S14 */
echo "<b>S14:</b><br>";
$password = "1234";
$hash = password_hash($password, PASSWORD_DEFAULT);
echo "Şifre hashlendi: " . $hash;
echo "<br><br>";

/* S15 */
echo "<b>S15:</b><br>";
$a = 10;
$b = "10";
$c = 10.5;
$d = true;
echo "String olan değişken: $b";
echo "<br><br>";

/* S16 */
echo "<b>S16:</b><br>";
$a = "5";
$b = 2;
echo $a + $b; // çıktı
echo "<br><br>";

/* S17 */
echo "<b>S17:</b><br>";
echo "WWW = World Wide Web<br><br>";

/* S18 */
echo "<b>S18:</b><br>";
echo "Web sitesi, internet üzerinde erişilebilen sayfalar bütünüdür.<br><br>";

/* S19 */
echo "<b>S19:</b><br>";
echo "PHP, sunucu taraflı (server-side) bir programlama dilidir.<br><br>";

/* S20 */
echo "<b>S20:</b><br>";
$numbers = array(1,2,3,4);
echo array_sum($numbers); // çıktı
echo "<br><br>";

?>