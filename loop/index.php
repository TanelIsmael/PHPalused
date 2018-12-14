<?php
header('Refresh: 0.0000000000000000000001');
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 14.12.2018
 * Time: 13:57
 */

echo '<h5>Ülesanne 1</h5>';
for ($arv = 1; $arv <= 10; $arv++) {
    /*if($arv % 2 == 0){
           $varv = 'green';
       } else {
           $varv = 'red';
    }*/
    $varv = ($arv % 2 == 0) ? 'green' : 'red';
    echo '<div style="color: ' . $varv . '">' . $arv . '</div>';
}


?>
<style>
    table, tr, td {
        width: 1900px;
        border: solid 1px black;
        border-collapse: collapse;
    }
</style>

<?php


echo '<h5>Ülesanne 2</h5>';
echo '<table>';
for ($reaNumber = 1; $reaNumber <= 6; $reaNumber++) {
    echo '<tr>';
    for ($veeruNumber = 1; $veeruNumber <= 6; $veeruNumber++) {
        $varv = '#';
        for ($kord = 1; $kord <= 6; $kord++) {
            $varv = $varv . dechex(rand(0, 15));
        }
        echo '<td style="background: ' . $varv . '">&nbsp;</td>';
    }
    echo '</tr>';
}
echo '</table>';

?>
<style>
    table, th, td, tr {
        width: 300px;
        height: 30px;
        border: solid 1px black;
        border-collapse: collapse;
    }

    th {
        background-color: red;
    }
</style>

<?php

echo '<h5>Ülesanne 3</h5>';
echo '<table>';
for ($arv2 = 0; $arv2 <= 10; $arv2++) {
    $txt = ($arv2 == 0) ? '&nbsp;' : $arv2;
    echo '<th>';
    echo $txt;
    echo '</th>';

}

for ($arv1 = 1; $arv1 <= 10; $arv1++) {
    echo '<tr>';
    echo '<th style="background-color: deeppink">';
    echo $arv1;
    echo '</th>';
    for ($arv2 = 1; $arv2 <= 10; $arv2++) {
        echo '<td>';
        echo $arv1 * $arv2;
        echo '</td>';
    }
    echo '</tr>';
}
echo '</table>';


?>
