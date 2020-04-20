<?php

class JosefVarak
{
    
}

?>
<?php //funkce round

echo round (5) . '<br>'; //5
echo round(5.1) . '<br>'; //5
echo round(5.4) . '<br>'; //5
echo round(5.5) . '<br>'; //6
echo round(5.8) . '<br>'; //6
echo round(5483.47621, 2) . '<br>'; //  5483,48
echo round(5483.47621, -2) . '<br>'; // 5500
echo round("4,8") . "<br />"; //4, jeliko� kompil�tor to usekne pouze na ��slici 4
echo round("4.8") . "<br />"; //5, kompil�tor je schopen p�ev�st datov� typ
echo round(4, 8) . "<br />";   //4
echo round(4.8) . "<br />";   //5
echo round(4.5, 0, PHP_ROUND_HALF_DOWN) . "<br />";   //4
echo round(4.5, 0, PHP_ROUND_HALF_UP) . "<br />";   //5
?>
<?php //funkce ceil
echo ceil(5).'<br>'; //5
echo ceil(5.1).'<br>'; //6
echo ceil(5.4).'<br>'; //6
echo ceil(5.5).'<br>'; //6
echo ceil(5.8).'<br>'; //6
echo ceil (5483.47621).'<br>'; //  5484
echo ceil("4,8"). "<br />"; //4, jeliko� kompil�tor to usekne pouze na ��slici 4
echo ceil("4.8"). "<br />"; //5, kompil�tor je schopen p�ev�st datov� typ
echo ceil(4,8). "<br />";   //je to pova�ov�no jako druh� parametr
?>
<?php //funkce floor
echo floor(5).'<br>'; //5
echo floor(5.1).'<br>'; //5
echo floor(5.4).'<br>'; //5
echo floor(5.5).'<br>'; //5
echo floor(5.8).'<br>'; //5
echo floor (5483.47621).'<br>'; //  5483
echo floor("4,8"). "<br />"; // 4, jeliko� kompil�tor to usekne pouze na ��slici 4
echo floor("4.8"). "<br />"; // 4, kompil�tor je schopen p�ev�st datov� typ
echo floor(4,8). "<br />";   // je to pova�ov�no jako druh� parametr
?>
<?php //funkce sqrt
$array = [25, -10, 5.5, -9.4, NULL, "ITnetwork"];

foreach ($array as $value) {
    $abs = sqrt($value);    // vrac� absolutn� hodnotu
    echo ("vstupn� hodnota = ");
    var_dump($value);
    echo ("v�stupn� hodnota = ");
    var_dump($abs);
    echo ("<br />");
}
?>
<?php //funkce pow

for ($i = 0; $i <= 10; $i++) {
    $x = rand(3, 15); // vygeneruje n�hodn� cel� ��slo od 3 do 15
    $y = rand(10, 20);
    $output = pow($x, $y); // Umocn�n� x na y
    echo "$x^$y = $output <br />";
}
?>
<?php //funkce sin
for ($i = 0; $i <= 5; $i++) {
    $deg = rand(10, 300); // vygeneruje n�hodn� cel� ��slo od 10 do 300 (�hel)
    $rad = deg2rad($deg); // p�evede �hel do radi�nov� hodnoty, kter� je jako parametr.
    $output = sin($rad); // funkce co vypo��t� sinus
    echo "sin($deg �) = $output <br />";
}
?>
<?php //funkce cos

for ($i = 0; $i <= 5; $i++) {
    $deg = rand(10, 300); // vygeneruje n�hodn� cel� ��slo od 10 do 300 (�hel)
    $rad = deg2rad($deg); // p�evede �hel do radi�nov� hodnoty, kter� je jako parametr.
    $output = cos($rad); // funkce co vypo��t�v� cosinus
    echo "cos($deg �) = $output <br />";
}
?>
<?php //funkce tan

echo tan(M_PI_4); // 1

?>
<?php //funkce acos
$cosValues = array();
for ($i = 0; $i <= 180; $i = $i + 15) {
    $cosValues[] = cos(deg2rad($i));
    echo "cos(" . $i . "�) = " . end($cosValues) . "<br />";
}
echo "==============================================<br />";
foreach ($cosValues as $cosValue) {
    echo "cos $cosValue = " . rad2deg(acos($cosValue)) . "�<br>";
}
?>
<?php //funkce atan
$tanValues = array();
for ($i = 0; $i <= 180; $i = $i + 15) {
    $tanValues[] = tan(deg2rad($i));
    echo "tan(" . $i . "�) = " . end($tanValues) . "<br />";
}
echo "==============================================<br />";
foreach ($tanValues as $tanValue) {
    echo "tan $tanValue = " . rad2deg(atan($tanValue)) . "�<br>";
}
?>
<?php // funkce fmod
echo  "11/7 = " .floor(11/7). " a zbytek ".fmod(11,7). "<br />";
echo "2.5/2 = " .floor(2.5/2). " a zbytek ".fmod(2.5,2). "<br />";
echo "13/16 = " .floor(13/16). " a zbytek ".fmod(13,16). "<br />";
echo "7/4 = " .floor(7/4). " a zbytek ".fmod(7,4). "<br />";
echo "11/0.3 = " .floor(11/0.3). " a zbytek ".fmod(11,0.3). "<br />";
?>
<?php //funkce max

$array = array(
    array(50, 2, 91),
    array(-5, 8, 0),
    array("dddd", "ccc", "a", "bb"),
    array(TRUE, FALSE, NULL),
    array(array(5, 8, 4), array(2, 1, 3)),
    array(array("itnetwork", "text", "PHP"), array(2, 1, 3), 8)
);

foreach ($array as $value) {
    $max = max($value); //vrac� maxim�ln� hodnotu
    echo "vstupn� hodnota = ";
    var_dump($value);
    echo "v�stupn� hodnota = ";
    var_dump($max);
    echo "<br />";
}
?>
<?php //funkce min

$array = array(
    array(50, 2, 91),
    array(-5, 8, 0),
    array("dddd", "ccc", "a", "bb"),
    array(TRUE, FALSE, NULL),
    array(array(5, 8, 4), array(2, 1, 3)),
    array(array("itnetwork", "text", "PHP"), array(2, 1, 3), 8)
);

foreach ($array as $value) {
    $min = min($value); //vrac� minim�ln� hodnotu
    echo "vstupn� hodnota = ";
    var_dump($value);
    echo "v�stupn� hodnota = ";
    var_dump($min);
    echo "<br />";
}
?>
<?php // funkce abs

$array = array(10, -10, 5.5, -9.4, NULL, "itnetwork");

foreach ($array as $value) {
    $abs = abs($value); // vrac� absolutn� hodnotu
    echo "vstupn� hodnota = ";
    var_dump($value);
    echo "v�stupn� hodnota = ";
    var_dump($abs);
    echo "<br />";
}
?>
<?php // funkce Aritmetick� oper�tory
// v�sledkem bude ��slo 30, jeliko� n�soben� m� vy��� prioritu ne� s��t�n�
$vysledek = 5+5*5;

echo $vysledek; // vyp�e 30

// v�sledkem bude ��slo 15, proto�e hodnota prom�nn� $vysledek (30) je vyd�lena 2
$vysledek = $vysledek/2;

echo $vysledek; // vyp�e 15

// v�sledkem bude ��slo 10, proto�e od hodnoty prom�nn� $vysledek (15) je ode�teno 5
$vysledek = $vysledek-5;

echo $vysledek; // vyp�e 10

// v�sledkem bude ��slo 1, proto�e 10/3 je 3 a zbytek 1
$vysledek = 10%3;

echo $vysledek; // vyp�e 1
?>
<?php //funkce number_format
$cislo = 250000.2557;
// Nezad�me ��dn� voliteln� parametr.
echo number_format($cislo)."<br>";
// M��eme zadat jen po�adovan� po�et desetinn�ch m�st.
echo number_format($cislo, 2)."<br>";
// V�echny parametry jsou zadan�.
echo number_format($cislo, 3, ",", ".") . "<br>";
// ��slo m��eme zadat tak� jako textov� �et�zec.
echo number_format("250000.2557", 1, ",", ".") . "<br>";
?>
<?php
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
?>