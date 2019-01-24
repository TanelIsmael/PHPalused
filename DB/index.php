<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 24.01.2019
 * Time: 12:17
 */


require_once 'db.php';
require_once 'dbfnc.php';

$iktConn = connect_db(DBHOST, DBUSER, DBPASS, DBNAME);

// insert
$sql = 'UPDATE user SET last_name="ebatavaline" WHERE user_id=1';
$res = query($sql, $iktConn);


//select
$sql = 'SELECT * FROM user';
$users = getData($sql, $iktConn);

echo '<pre>';
print_r($users);
echo '<pre>';

echo 'Tere ' . $users[0] ['first_name'] . ' ' . $users[0]['last_name'] . '<br>';
