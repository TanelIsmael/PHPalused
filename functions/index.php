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
function test()
{
    $testvariable = 'this is a test variable';
}

echo 'test variable: ' . $testvariable . '<br>';

echo '<h5>Näide 7</h5>';
$life = 42;
function meaningOfLife()
{
    echo 'The meaning of life is ' . $life . '<br>';
}

meaningOfLife();

echo '<h5>Näide 7 variant b</h5>';
$life = 42;
function meaningLife()
{
    global $life;
    echo 'The meaning of life is ' . $life . '<br>';
}

meaningLife();

echo '<h5>Näide 8</h5>';
$num_of_calls = 0;
function andAnotherThing($txt)
{
    global $num_of_calls;
    $num_of_calls++;
    echo '<h1>' . $num_of_calls . '. ' . $txt . '</h1>';
}

andAnotherThing('Widgets');
echo 'We build a fine range of widgets';
andAnotherThing('Doodads');
echo 'Finest in the world';
andAnotherThing('Makaronid');
echo 'söön makarone';


echo '<h5>Näide 9</h5>';










?>