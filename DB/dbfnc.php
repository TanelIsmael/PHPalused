<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 24.01.2019
 * Time: 12:59
 */

function connect_db($hostName, $dbUser, $dbPass, $dbName)
{
    $conn = mysqli_connect($hostName, $dbUser, $dbPass, $dbName);

    if (!$conn) {
        echo 'Unable to connect to MySQL<br>';
        echo mysqli_connect_error() . '<br>';
        exit;
    }

    return $conn;
}