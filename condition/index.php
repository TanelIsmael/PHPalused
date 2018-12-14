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


// tingimuslaused

/*

 * switch (kontroll){

 *      case vastus:

 *          tegevused, mis antud case puhul toimivad

 *          break;

 *      default:

 *          tegevused, mis toimuvad siis kui kõik muu

 *          ei sobi

 *          break

 * }

 * */

?>

    <style>

        div {
            width: 100px;
            height: 100px;
            border-radius: 50px;
            border: solid 1px black;
        }
    </style>

<?php
echo '<h5>Ülesanne 3</h5>';
$aktiivne = 'kollane';
switch ($aktiivne) {
    case 'punane':
        echo '<div style="background: red"></div>';
        echo '<div></div>';
        echo '<div></div>';
        break;
    case 'kollane':
        echo '<div></div>';
        echo '<div style="background: orange"></div>';
        echo '<div></div>';
        break;
    case 'roheline':
        echo '<div></div>';
        echo '<div></div>';
        echo '<div style="background: green"></div>';
        break;
    default:
        echo '<div style="background: black"></div>';
        echo '<div style="background: black"></div>';
        echo '<div style="background: black"></div>';
        break;
}

?>