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
$summa = $string + $string;
echo gettype($summa) . '<br>';
echo 'Summa = ' . $summa . '';


?>