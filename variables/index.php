<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 13.12.2018
 * Time: 13:07
 */

// $ muutuja nimi = väärtus
$taisarv = 3;
$reaalarv = 3.3;
$string = "kolm";
$toevaartus = true;
$toevaartus = false;

echo 'taisarv ' . $taisarv . ' väärtus<br>';
echo 'reaalarv ' . $reaalarv . ' väärtus<br>';
echo 'string ' . $string . ' väärtus<br>';
echo 'toevaartus true ' . $toevaartus . ' väärtus<br>';
echo 'toevaartus false ' . $toevaartus . ' väärtus';
echo '<hr>';
echo gettype($string) . '<br>';
echo gettype($toevaartus);
$summa = $string . $string;
echo gettype($summa) . '<br>';
echo 'Summa = ' . $summa . '';

$arv1 = 42;
$arv2 = 11;

echo '<h4>Matemaatilised operaatorid</h4>';
echo $arv1 . ' + ' . $arv2 . ' = ' . ($arv1 + $arv2) . '<br>';
echo $arv1 . ' - ' . $arv2 . ' = ' . ($arv1 - $arv2) . '<br>';
echo $arv1 . ' * ' . $arv2 . ' = ' . ($arv1 * $arv2) . '<br>';
echo $arv1 . ' / ' . $arv2 . ' = ' . ($arv1 / $arv2) . '<br>';
echo $arv1 . ' % ' . $arv2 . ' = ' . ($arv1 % $arv2) . '<br>';

echo '<h4>Võrdlus operaatorid</h4>';
echo $arv1 . ' == ' . $arv2 . ' see on ' . ($arv1 == $arv2) . '<br>';
echo $arv1 . ' != ' . $arv2 . ' see on ' . ($arv1 != $arv2) . '<br>';
echo $arv1 . ' < ' . $arv2 . ' see on ' . ($arv1 < $arv2) . '<br>';
echo $arv1 . ' > ' . $arv2 . ' see on ' . ($arv1 > $arv2) . '<br>';
echo $arv1 . ' <= ' . $arv2 . ' see on ' . ($arv1 <= $arv2) . '<br>';
echo $arv1 . ' >= ' . $arv2 . ' see on ' . ($arv1 >= $arv2) . '<br>';



?>