<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 29.01.2019
 * Time: 10:25
 */

// kera

$keraRaadius = $_GET['keraRaadius'];

$keraRuumala = 4 / 3 * pi() * pow($keraRaadius, 3);

// koonus

$koonuseRaadius = $_GET['koonuseRaadius'];

$koonuseKorgus = $_GET['koonuseKorgus'];

$koonuseRuumala = 1 / 3 * pi() * pow($koonuseRaadius, 2) * $koonuseKorgus;

// silinder

$silindriRaadius = $_GET['silindriRaadius'];

$silindriKorgus = $_GET['silindriKorgus'];

$silindriRuumala = pi() * pow($silindriRaadius, 2) * $silindriKorgus;

// väljastamine

echo '<h1>Arvutustulemused</h1>';

echo 'Kera ruumala = ' . $keraRuumala . 'cm<sup>3</sup></up><br>';

echo 'Koonuse ruumala = ' . $koonuseRuumala . 'cm<sup>3</sup><br>';

echo 'Silindri ruumala = ' . $silindriRuumala . 'cm<sup>3</sup><br>';