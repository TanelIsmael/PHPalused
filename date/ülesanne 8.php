<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 29.01.2019
 * Time: 11:20
 */

echo 'Ülesanne 8';

echo '<br>';

//Kuva kuupäev ja kellaaeg formaadis 20.03.2013 12:31

echo date('d.m.Y G:i', time());


echo '<br>';


//Kuva tänane eestikeelne nädalapäev, N: kolmapäev

$date = date('d.m.Y G:i', time());
$days = ['esmaspäev', 'teisipäev', 'kolmapäev', 'neljapäev', 'reede', 'laupäev', 'pühapäev'];
$day = date('N', strtotime($date));
$date = 'Täna on' . " $days[$day].";
echo $date;


echo '<br>';


//Kuva eestikeelne kuupäev koos nädalapäevaga. Näiteks: 23.veebruar 2013 laupäev

$eesti_kuud = array(1 => 'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
echo 'Täna on ' . $paev . '. ' . $kuu . ' ' . $aasta . ', ' . $days[$day] . '.';


echo '<br>';


//Leia mitu päeva on jäänud järgmise jaanipäevani. Näiteks: 2014 aasta jaanipäevani on jäänud 236 päeva!

$jaanipaev = mktime(0, 0, 0, 6, 24, 2019);
$tana = time();
$jaanipaevani = $jaanipaev - $tana;
echo 'Jaanipäevani on jäänud ' . floor($jaanipaevani / 60 / 60 / 24) . ' päeva.';

echo '<br>';

// minu sünnipäev on 06.11.1980, leia kumb on meist vanem. Kuva mõlema sünnipäevad ning vahe aastates

$inimene = mktime(0, 0, 0, 11, 6, 1980);
$mina = mktime(0, 0, 0, 04, 22, 1993);

$synnipaev = date('Y', $inimene);
$synnipaev2 = date('Y', $mina);
$vahe = $synnipaev2 - $synnipaev;

echo 'Inimese sünnipäev on ' . date('d.m.Y', $inimene) . ' minu sünnipäev on ' . date('d.m.Y', $mina) . ' meie vanusevahe on ' . $vahe . ' aastat. See inimene on minust vanem.';

echo '<br>';

// leia, kas sul on järgmine aasta juubel?

$vanus = '25';
$juubel = $vanus + '1';
if ($juubel == 30) {
    echo "Jah on juubel";
} else if ($juubel == 26) {
    echo 'Ei ole juubel';
}

echo '<br>';

// Koosta kood, mis tervitab sind vastavalt ajale


$time = date("H");
if ($time < 13) {
    echo 'Tere hommikust';
} elseif ($time < 17) {
    echo 'Tere päevast';
} else {
    echo 'Tere õhtust';
}
