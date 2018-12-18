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
        'Ants',
        'female'
    ),
    array(
        'Pets',
        'Guits',
        'Ants',
        'male'
    )

);

/*echo '<br>';
echo '<pre>';
print_r($kasutajad);
echo '</pre>';*/

echo '<br>';
foreach ($kasutajad as $kasutaja) {
    for ($i = 0; $i < count($kasutaja); $i++) {
        if ($kasutaja[3] == female) {
            echo '<div style="color: deeppink">';
        } else {
            echo '<div style="color: lightskyblue">';
        }
        echo $kasutaja[$i] . '</div>';
    }

    /*foreach ($kasutaja as $element) {
        echo '<div>'.$element.'</div>'; ilma värvita, ülemise puhul female on pink ja male on blue
    }
    echo '<hr>';*/
}


?>
