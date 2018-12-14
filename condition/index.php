<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 14.12.2018
 * Time: 12:32
 */

echo '<h5>Ülesanne 1</h5>';
$arv = rand(0, 100);
if ($arv % 2 == 0) {
    echo '<div style="color: green">' . $arv . '</div>';
} else {
    echo '<div style="color: red">' . $arv . '</div>';
}

echo '<h5>Ülesanne 2</h5>';
$arv = rand(0, 100);
if ($arv >= 0 and $arv < 25) {
    echo '<div style="color: red">' . $arv . '</div>';
} else if ($arv >= 0 and $arv < 50) {
    echo '<div style="color: green">' . $arv . '</div>';
} else if ($arv >= 0 and $arv < 75) {
    echo '<div style="color: deeppink">' . $arv . '</div>';
} else if ($arv >= 0 and $arv < 100) {
    echo '<div style="color: skyblue">' . $arv . '</div>';
} else {
    echo '<div style="color: black">' . $arv . '</div>';
}

?>