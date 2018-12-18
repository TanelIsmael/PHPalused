<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 18.12.2018
 * Time: 14:42
 */

/*$kasutajad = array(
    'Pets',
    'Guits',
    'Ants'
);*/

$kasutajad = array();

$kasutajad[] = 'alice';
$kasutajad[] = 'bob';

array_push($kasutajad, 'lucy');

echo '<pre>';
var_dump($kasutajad);
echo '</pre>';

echo '<pre>';
print_r($kasutajad);
echo '</pre>';

//for ($i = 0; $i < count($kasutajad); $i++){
// echo $i. ' - '.$kasutajad[$i].'<br>'; }

foreach ($kasutajad as $kasutaja) {
    echo $kasutaja . '<br>';
}

echo '<br>';
array_shift($kasutajad); //lükkab esimese välja
array_pop($kasutajad); //lükkab viimase välja

foreach ($kasutajad as $kasutaja) {
    echo $kasutaja . '<br>';
}


?>

<?php

$kasutajad = array(
    array(
        'Pets',
        'Guits',
        'Ants'
    ),
    array(
        'Pets',
        'Guits',
        'Ants'
    )

);

/*echo '<br>';
echo '<pre>';
print_r($kasutajad);
echo '</pre>';*/

echo '<br>';
foreach ($kasutajad as $kasutaja) {
    foreach ($kasutaja as $element) {
        echo $element . '<br>';
    }
    echo '<hr>';
}


?>
