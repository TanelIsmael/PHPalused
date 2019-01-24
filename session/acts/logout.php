<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 24.01.2019
 * Time: 15:31
 */

session_start();
session_destroy();
header('Location: ../index.php');