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
echo round("4,8") . "<br />"; //4, jelikož kompilátor to usekne pouze na èíslici 4
echo round("4.8") . "<br />"; //5, kompilátor je schopen pøevést datový typ
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
echo ceil("4,8"). "<br />"; //4, jelikož kompilátor to usekne pouze na èíslici 4
echo ceil("4.8"). "<br />"; //5, kompilátor je schopen pøevést datový typ
echo ceil(4,8). "<br />";   //je to považováno jako druhý parametr
?>
<?php //funkce floor
echo floor(5).'<br>'; //5
echo floor(5.1).'<br>'; //5
echo floor(5.4).'<br>'; //5
echo floor(5.5).'<br>'; //5
echo floor(5.8).'<br>'; //5
echo floor (5483.47621).'<br>'; //  5483
echo floor("4,8"). "<br />"; // 4, jelikož kompilátor to usekne pouze na èíslici 4
echo floor("4.8"). "<br />"; // 4, kompilátor je schopen pøevést datový typ
echo floor(4,8). "<br />";   // je to považováno jako druhý parametr
?>
<?php //funkce sqrt
$array = [25, -10, 5.5, -9.4, NULL, "ITnetwork"];

foreach ($array as $value) {
    $abs = sqrt($value);    // vrací absolutní hodnotu
    echo ("vstupní hodnota = ");
    var_dump($value);
    echo ("výstupní hodnota = ");
    var_dump($abs);
    echo ("<br />");
}
?>
<?php //funkce pow

for ($i = 0; $i <= 10; $i++) {
    $x = rand(3, 15); // vygeneruje náhodné celé èíslo od 3 do 15
    $y = rand(10, 20);
    $output = pow($x, $y); // Umocnìní x na y
    echo "$x^$y = $output <br />";
}
?>
<?php //funkce sin
for ($i = 0; $i <= 5; $i++) {
    $deg = rand(10, 300); // vygeneruje náhodné celé èíslo od 10 do 300 (úhel)
    $rad = deg2rad($deg); // pøevede úhel do radiánové hodnoty, která je jako parametr.
    $output = sin($rad); // funkce co vypoèítá sinus
    echo "sin($deg °) = $output <br />";
}
?>
<?php //funkce cos

for ($i = 0; $i <= 5; $i++) {
    $deg = rand(10, 300); // vygeneruje náhodné celé èíslo od 10 do 300 (úhel)
    $rad = deg2rad($deg); // pøevede úhel do radiánové hodnoty, která je jako parametr.
    $output = cos($rad); // funkce co vypoèítává cosinus
    echo "cos($deg °) = $output <br />";
}
?>
<?php //funkce tan

echo tan(M_PI_4); // 1

?>
<?php //funkce acos
$cosValues = array();
for ($i = 0; $i <= 180; $i = $i + 15) {
    $cosValues[] = cos(deg2rad($i));
    echo "cos(" . $i . "°) = " . end($cosValues) . "<br />";
}
echo "==============================================<br />";
foreach ($cosValues as $cosValue) {
    echo "cos $cosValue = " . rad2deg(acos($cosValue)) . "°<br>";
}
?>
<?php //funkce atan
$tanValues = array();
for ($i = 0; $i <= 180; $i = $i + 15) {
    $tanValues[] = tan(deg2rad($i));
    echo "tan(" . $i . "°) = " . end($tanValues) . "<br />";
}
echo "==============================================<br />";
foreach ($tanValues as $tanValue) {
    echo "tan $tanValue = " . rad2deg(atan($tanValue)) . "°<br>";
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
    $max = max($value); //vrací maximální hodnotu
    echo "vstupní hodnota = ";
    var_dump($value);
    echo "výstupní hodnota = ";
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
    $min = min($value); //vrací minimální hodnotu
    echo "vstupní hodnota = ";
    var_dump($value);
    echo "výstupní hodnota = ";
    var_dump($min);
    echo "<br />";
}
?>
<?php // funkce abs

$array = array(10, -10, 5.5, -9.4, NULL, "itnetwork");

foreach ($array as $value) {
    $abs = abs($value); // vrací absolutní hodnotu
    echo "vstupní hodnota = ";
    var_dump($value);
    echo "výstupní hodnota = ";
    var_dump($abs);
    echo "<br />";
}
?>
<?php // funkce Aritmetické operátory
// výsledkem bude èíslo 30, jelikož násobení má vyšší prioritu než sèítání
$vysledek = 5+5*5;

echo $vysledek; // vypíše 30

// výsledkem bude èíslo 15, protože hodnota promìnné $vysledek (30) je vydìlena 2
$vysledek = $vysledek/2;

echo $vysledek; // vypíše 15

// výsledkem bude èíslo 10, protože od hodnoty promìnné $vysledek (15) je odeèteno 5
$vysledek = $vysledek-5;

echo $vysledek; // vypíše 10

// výsledkem bude èíslo 1, protože 10/3 je 3 a zbytek 1
$vysledek = 10%3;

echo $vysledek; // vypíše 1
?>
<?php //funkce number_format
$cislo = 250000.2557;
// Nezadáme žádný volitelný parametr.
echo number_format($cislo)."<br>";
// Mùžeme zadat jen požadovaný poèet desetinných míst.
echo number_format($cislo, 2)."<br>";
// Všechny parametry jsou zadané.
echo number_format($cislo, 3, ",", ".") . "<br>";
// Èíslo mùžeme zadat také jako textový øetìzec.
echo number_format("250000.2557", 1, ",", ".") . "<br>";
?>
<?php
$a = array(1, 2, array("a", "b", "c"));
var_dump($a);
?>