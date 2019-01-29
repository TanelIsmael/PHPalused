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