<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 29.01.2019
 * Time: 11:20
 */

$tekst = 'Life Is About Ignoring The Drama.';

//muudab texti kas upper või lower case
echo strtolower($tekst);
echo '<br>';
echo strtoupper($tekst);
echo '<br>';
$tekst = 'Life Is About Ignoring The Drama.';
echo ucfirst(strtolower($tekst));