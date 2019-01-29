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

echo '<br>';

$tekst = 'Experience is the teacher of fools';
echo strlen($tekst);            //34
echo '<br>';
echo str_word_count($tekst);    //6


$tekst = ' 	A woman should soften but not weaken a man   ';
echo "<pre>$tekst</pre>";
echo "<pre>" . trim($tekst) . "</pre>";
echo "<pre>" . ltrim($tekst) . "</pre>";
echo "<pre>" . rtrim($tekst) . "</pre>";
$tekst = 'A woman should soften but not weaken a man';
echo trim($tekst, "A, a, k..n, w");    //oman should soften but not weake
echo '<br>';
$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst);    //Experience is the teacher of fools
echo '<br>';
$tekst = '<b>Experience</b> <a href="#">is</a> the teacher <br>of fools';
echo strip_tags($tekst, '<b>, <br>');    //<b>Experience</b> is the teacher <br>of fools