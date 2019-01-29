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

