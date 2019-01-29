<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 29.01.2019
 * Time: 11:35
 */

//Kasutaja lisab vormi nime, seda näiteks suured ja väikesed tähed läbisegi.
//Sina kood tervitab teda kenasti nimepidi, kus nimi algab suure algustähega.
//Näiteks: sisend–>mARiO; väljund–>Tere, Mario!

$nimi = 'mARIO';
echo 'Tere, ' . ucfirst(strtolower($nimi)) . '!';

echo '<br>';

//Kuna on teada, et PHP käsitleb teksti kui massiivi, siis peaks saama seda tsükli abil nö. tükeldada.
//Ülesandeks on etteantud teksti iga tähe järgi lisada punkt.
//Näiteks: sisend–>stalker; väljund–>S.T.A.L.K.E.R.

$stalker = 'stalker';
$stalker_array = (str_split($stalker));
echo strtoupper(implode('.', $stalker_array));

echo '<br>';
?>

    <!--Koosta tekstiväli, mis kuvab kasutaja sisestatud sõnumeid. Kasutaja ropud sõnad asendatakse tärnidega.
    Näiteks: sisend–>Sa oled täielik noob; väljund–>Sa oled täielik *** -->
    <html>

    <form method="get">
        <input name="message" type="text">
        <button type="submit">Saada</button>
    </form>

    </html>

<?php

$message = $_GET['message'];
$ropp = array('idioot', 'munapea', 'persevest');
$tarn = '****';
echo str_replace($ropp, $tarn, $message) . '<br>';


//Kasutajalt saadud eesnime ja perenime põhjal luuakse talle email lõpuga @hkhk.edu.ee.

//Kusjuures täpitähed asendatakse ä->a, ö->o, ü->y, õ->o ja kogu email on väikeste tähtedega

//Näiteks: sisend–>Ülle ja Doos; väljund–>ylle.doos@hkhk.edu.ee

$eesnimi = 'Ülle';

$perenimi = 'Doos';

echo str_replace(array('ä', 'ö', 'ü', 'õ'), array('a', 'o', 'u', 'o'), mb_strtolower($eesnimi . '.' . $perenimi . '@hkhk.edu.ee'));


?>