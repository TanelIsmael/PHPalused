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

function query($sql, $conn)
{
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        echo 'Problem with <b>' . $sql . '</b><br>';
        exit;
    }
    return $result;
}

function getData($sql, $conn)
{
    $data = array();
    $result = query($sql, $conn);
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = $row;
    }
    return $data;
}