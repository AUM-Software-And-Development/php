<?php

// Vars

$_variable = "Hello world";
$integer = 4;
$float = 4.2;
$boolean = true;
$true = true;
$false = false;
$sum = $integer + 4;
$add = 5;
$sum = $sum + $add;
$string2 = "More";
$extrastring = 'It\"s';

# constant:
define('GREETING', 'Hello all');

$fullstring = "$_variable $extrastring";

echo GREETING, "<br>";

/*---------------------------------------------------------------------------------*/

// Arrays
$people = array("Kevin", "Jeremy", "Sara");
$numbers = [1, 3, 4, 6, 8];

echo $people[1], "<br>";
echo $numbers[4] . "<br>";

$numbers[] = [17];

print 'Added a number to numbers <br>';

print_r($numbers, "<br>");

var_dump($numbers); echo '<br>';

echo count($numbers), '<br>';


# Associative arrays:

$morePeople = array('Brad' => 25, 'Josh' => 36, 'Conseulo');

echo $morePeople['Brad'], '<br>';

$morePeople['Josh'] = 100;

echo $morePeople['Josh'], '<br>';

$data = array(
    array('Test' => 90),
    array('Bill', 'Manager', 1000),
    array(4845427),
);

var_dump($data); echo '<br>';

echo $data[1][1], '<br>';
echo $data[0]['Test'], '<br>';

// Loops

for ($i = 1; $i < 17; $i++)
{
    echo "+ 1 = $i <br>";
}

$i = 0;

while ($i < 11)
{
    echo $i . ', ';
    $i++;
}

print '<br>';

$i = 0;
do
{
    echo $i , ', ';
    $i++;
} while ( $i < 11 );

$iterator = array('Tot', 'Bot', 'Lot');

print '<br>';

foreach($iterator as $iteration)
{
    echo $iteration , '<br>';
}

print '<br>';

foreach($morePeople as $people => $link)
{
    echo $link . '<br>';
}

function EchoFunction($number)
{
    echo '1';
    echo '2 <br>';
    echo "<h1>h$number</h1>";
    echo '4';
    echo '5';
    echo '6';
    echo '7';
    echo '8';
}

EchoFunction(2);

function EchoFunctionDefault($number = "blabber")
{
    echo '1';
    echo '2 <br>';
    echo "<h1>h$number</h1>";
    echo '4';
    echo '5';
    echo '6';
    echo '7';
    echo '8';
}

EchoFunctionDefault();

function ReturnSum($x = 0, $y = 0)
{
    echo ' ';
    return $x + $y;
}

print '<br>';

echo 'This sum' , ReturnSum(2, 2) . '<br>';
echo 'This sum' , ReturnSum(4, 12);

$check = '4';
$other = false;

if ($check == 4)
{
    print '<br>';
    echo '$check was found to contain the character value representing 4';
    $other = true;
}
if ($check == 4 AND $other)
{
    print '<br>';
    echo '$other was set';
}
else
{
    print '<br>';
    echo '$other was not set';
}
if ($check == 4 XOR $other)
{
    print '<br>';
    echo '($check xor $other) returned true';
}
else
{
    print '<br>';
    echo '($check xor $other) returned false';
}



?>