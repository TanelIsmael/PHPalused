<?php
/**
 * Created by PhpStorm.
 * User: tanel.ismael
 * Date: 17.12.2018
 * Time: 14:23
 */


echo '<h5>Näide 1</h5>';
$num = -321;
$newnum = abs($num);
echo $newnum;

echo '<h5>Näide 2</h5>';
function bighello()
{
    echo '<h1>HELLO!</h1>';
}

bighello();

echo '<h5>Näide 3</h5>';
function printBR($txt)
{
    echo($txt . '<br>');
}

printBR('This is a line');
printBR('This is a new line');
printBR('This is the third line');

echo '<h5>Näide 4</h5>';
function addNums($firstnum, $secondnum)
{
    $result = $firstnum + $secondnum;
    return $result;
}

echo addNums(5, 12);

echo '<h5>Näide 5</h5>';
function sayHello()
{
    echo 'hello<br>';
}

$function_holder = 'sayHello';
$function_holder();


echo '<h5>Näide 6</h5>';


?>