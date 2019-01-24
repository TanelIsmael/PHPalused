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
echo '<pre>';
print_r($iktConn);
