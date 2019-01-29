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


