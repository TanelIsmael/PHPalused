<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 24.01.2019
 * Time: 14:34
 */

require_once '../DB/db.php';
require_once '../DB/dbfnc.php';
// andmed html vormi poolt
$username = $_GET ['uname'];
$password = $_GET ['upass'];

$ikt = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);

$sql = 'SELECT * FROM user WHERE username="' . $username . '" AND password="' . md5($password) . '"';
$users = getData($sql, $ikt);


if ($users !== false) {
    session_start();
    $_SESSION['user'] = $users[0];
    header('Location: ../index.php');
}
