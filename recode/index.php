<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 29.01.2019
 * Time: 11:48
 */

?>

<!doctype html>

<html>

<head>
    <title>Koodi taaskasutamine</title>
    <style>
        body {
            background-color: deepskyblue;
            font-family: Arial, "Times New Roman", KacstBook;
        }
    </style>
</head>

<body>

<menu>
    <a href="index.php">Avaleht</a>
    <a href="index.php?leht=portfoolio">Portfoolio</a>
    <a href="index.php?leht=kaart">Kaart</a>
    <a href="index.php?leht=kontakt">Kontakt</a>
</menu>

<?php


if (!empty($_GET['leht'])) {
    $leht = htmlspecialchars($_GET['leht']);
    $lubatud = array('portfoolio', 'kaart', 'kontakt');
    $kontroll = in_array($leht, $lubatud);
    if ($kontroll == true) {
        include($leht . '.php');
    } else {
        echo 'Valitud lehte ei ole olemas!';
    }
} else {

    ?>

    <h1>Avaleht</h1>

    <p>See on avalehekülg.</p>

    <?php

}

?>


</body>

</html>

