<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 29.01.2019
 * Time: 10:33
 */


echo time(); //aeg

echo '<br>';

date_default_timezone_set('Europe/Tallinn');
echo date('d.m.Y G:i', time());
//d – kuupäev 01-31
//m – kuu numbrina 01-12
//Y – neljakohaline aastaarv n: 2013
//G – 24-tunnine tunniformaat 0-23
//i –  minutid 0-59

echo '<br>';

//kuude massiiv
$eesti_kuud = array(1 => 'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
//kuupäevad massiividesse
$paev = date('d');
$kuu = $eesti_kuud[date('n')];
$aasta = date('Y');
//kuupäeva väljastamine
echo $paev . '.' . $kuu . ' ' . $aasta;    //22.veebruar2013

echo '<br>';

mktime(tunnid, minutid, sekundid, kuu, päev, aasta, suveaeg);
$sp = mktime(0, 0, 0, 04, 22, 1993);
echo date('d.m.Y', $sp);

echo '<br>';

echo date('d.m.Y G:i', time() + 60);            //1min pärast
echo '<br>';
echo date('d.m.Y G:i', time() + 60 * 60);        //1h pärast
echo '<br>';
echo date('d.m.Y G:i', time() + 60 * 60 * 24);    //24h pärast

echo '<br>';

$sp = mktime(0, 0, 0, 01, 29, 2019 - 25);
echo date('d.m.Y', $sp);

echo '<br>';

echo strtotime("now");
echo '<br>';
echo strtotime("tomorrow");
echo '<br>';
echo strtotime("yesterday");
echo '<br>';
echo strtotime("10 September 2000");
echo '<br>';
echo strtotime("+1 day");
echo '<br>';
echo strtotime("+1 week");
echo '<br>';
echo strtotime("+2 week 3 days 4 hours 5 seconds");
echo '<br>';
echo strtotime("next Thursday");
echo '<br>';
echo strtotime("last Monday");
echo '<br>';
echo strtotime("5pm + 6 Hours");
echo '<br>';
echo strtotime("now + 4 fortnights");
echo '<br>';
echo strtotime("last Monday");
echo '<br>';
echo strtotime("4pm yesterday");
echo '<br>';
echo strtotime("6am 10 days ago");

echo '<br>';


if (checkdate(12, 32, 2013)) {
    echo('Kuupäev korras!');
} else {
    echo('Kuupäev on valesti sisestatud');
}

echo '<br>';

if (checkdate(12, 29, 2013)) {
    echo('Kuupäev korras!');
} else {
    echo('Kuupäev on valesti sisestatud');
}

echo '<br><hr>';

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




