<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 24.01.2019
 * Time: 14:17
 */

session_start();
require_once 'fnc.php';
if (isset($_SESSION['user'])) {
    echo 'Tere tulemast, ' . $_SESSION['user']['last_name'] . '!<br>';
} else {
    $loginFrom = htmlFromFile('login');
    echo $loginFrom;
}
