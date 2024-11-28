<?php
#the code below is to output a string in php
// the code below is to output a string in php
echo "my website <br>";
/*echo "<br>";
var_dump("my website");
 print /*the word print is to output*/
"my website";
$myName = "prince <br>";
echo "<br>";
$yearsOfExperience  = 4;
echo $yearsOfExperience;
var_dump($myName);
var_dump($yearsOfExperience);
$height = 6.1;
echo "<br>";
var_dump($height);
$isMale = true;
echo "<br>";
var_dump($isMale);
// array
$fullName = array("prince", "anyayen", "spencer");
echo "<br>";
var_dump($fullName);
echo "<br>";
echo $fullName[1];
echo "<br>";
echo "my first name is $fullName[0] and my surname is $fullName[1]";


// 28/10/2024
// null
$nothing = null;
echo "<br>";
var_dump($nothing);

// constant

define("pi", 3.142);
echo "<br>";
echo "pi";
echo "<br>";

// const gravityAcceleration = 10;
define("gravityAcceleration", 20);
echo "<br>";
var_dump(gravityAcceleration);


// 31/10/2024
// operators
// arithmetric operators
$x = 10;
$y = 5;
echo "<br>";
echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x % $y;
echo "<br>";
echo $x ** $y;
echo "<br>";

// increment and decrement operators
echo $x++;
echo "<br>";
echo $x;
echo "<br>";
echo $x--;
echo "<br>";
echo $x;
echo "<br>";
// 1/11/2024
// assignment operators

$a = 100;
$b = 50;

// addition assignments
echo "<br>";
$a += $b;
echo $a;
echo "<br>";
$a -= $b;
echo $a;
echo "<br>";

// logical operators
// example of logical operator are : AND(&&), OR(||), XOR, NOT(!)
// the and operators works when both are correct
if ($a == 100 && $b == 50) {
    echo "we are good to go.";
}
echo "<br>";
// the or operators works when one is correct 
if ($a == 100 || $b == 55) {
    echo "we are good to go.";
}
echo "<br>";
//    the xor operator works when one is true and one is false
if ($a == 100 xor $b == 55) {
    echo "we are good to go.";
}
echo "<br>";
//    The NOT works when variable A is not true
if (!($a == 101)) {
    echo "we are good to go.";
}


// 7/11/2024


// PHP Condition Statements
// There four notable conditional statements in PHP viz
// If statement
// If... else statement
// If ...elseif... statement 
// Switch statement

// IF STATEMENT
// The if statement is one of the most important statements in PHP 



// Example:
// ______________________
// variable declaration
if (7 > 3) {
    echo "Have a good day";
}

echo "<br>";
$my_name = "Jeph";

$present_time = date(format: "H:i");

echo "<br>";

echo "present time: $present_time <br>";

if ($present_time >= 00.00 && $present_time < 12.00) {
    echo "<h3> Good Morning, $my_name! </h3>";
} elseif ($present_time >= 12.00 && $present_time < 16.00) {
    echo "<h3> Good Afternoon, $my_name! </h3>";
} elseif ($present_time >= 16.00 && $present_time < 23.59) {
    echo "<h3> Good Night, $my_name! </h3>";
} else {
    echo "<h3> Hello, $my_name! </h3>";
}

// Switch Statement
// __________________

$today = date(format: "D");
echo "Today is: $today <br>";


switch ($today) {
    case "Mon":
        echo "Hello everyone, It's Monday. Have a great week!";
        break;
    case "Tue":
        echo " Hello everybody, It's Tuesday. Do have a splendid week!";
    case "Wed":
        echo " Hello everybody, It's Wednesday. Do have a wonderful week!";
    case "Thu":
        echo " Hello everybody, It's Thursday. Do have a miraculous week!";
    case "Fri":
        echo " Hello everybody, It's Friday. Do have a splendid week!";
    case "Sat":
        echo " Hello everybody, It's Saturday. Do have a fabulous week!";
    case "Sun":
        echo " Hello everybody, It's Sunday. Do have a glorious week!";
        break;
    default:
        echo "Sorry, this is not a day in the week!";
        break;
}

// Php Loops 

// 11/11/2024  While Loops

/*
    $numbers = 1;

    echo $numbers. "<br>";
    $numbers++;

    echo $numbers. "<br>";
    $numbers++;

    echo $numbers. "<br>"; 
    */

$numbers = 1;
while ($numbers <= 10) {
    echo $numbers . "<br>";
    $numbers++;
}


// DO WHILE LOOP 
$numbers = 11;
do {
    echo $numbers . "<br>";
    $numbers++;
} while ($numbers <= 10);


// FOR LOOP
for ($numbers = 1; $numbers <= 10; $numbers++) {
    echo $numbers . "<br>";
}

// FOREACH LOOP!
$cars = array("BMW", "Lexus", "Ferrari", "Toyota");
foreach ($cars as $car) {
    echo "i love $car <br>";
}


// Create an app that prints number 1-100, 
// Print fizz for multipules of 3 and buzz the multiple of 5
// Print fizzbuzz for multiple of 15

for ($numbers = 1; $numbers <= 20; $numbers++) {
    if ($numbers % 3 == 0) {
        echo "fizz <br>";
    } else {
        echo $numbers . "<br>";
    }
}

for ($numbers = 1; $numbers <= 30; $numbers++) {
    if ($numbers % 3 == 0) {
        echo "fizz <br>";
    } elseif ($numbers % 5 == 0) {
        echo "buzz <br>";
    } else {
        echo $numbers . "<br>";
    }
}

'<br>';

// Arrays 
// An array is a special variable that can hold many values under a single name, and you can access the values by referring to an index number or name.

$domesticAnimals = array('Dog', 'Horse', 'Goat', 'Cow');
$cities = ['Asaba', 'Warri', 'Ughelli', 'Sapele', 'Agbor'];

'<br>';

echo $domesticAnimals[3];

//TYPES OF ARRAYS
// INDEXED ARRAY
//ASSOCIATIVE ARRAYS
//MULTI-DIMENTIONAL ARRAYS

echo count($domesticAnimals) . '<br>';

//array_push
array_push($cities, 'Abraka', 'Effurun', 'Patani', 'Ozoro') . '<br>';

var_dump($cities);

$cities[2] = 'Ogwashi-uku';

echo '<br>';

//Associative array 
$phone = ['Brand' => 'Iphone', 'Model' => '14pro', 'Color' => 'White', 'ROM' => '256'];
echo '<br>';
echo '<br>';

var_dump($phone);
$phone['Model'] = '15pro';
echo '<br>';
echo '<br>';

var_dump($phone);

$phone['Brand'] =  'Samsung';
echo '<br>';
echo '<br>';
var_dump($phone);

//index 
//$fullname = 


// associative array
$fullname = array("firstname" => "evans", "middlename" => "nduoma");
$fullname["firstname"];

// multi-dimentional array
//$developer = [["evans"], ["male"]];

// FUNCTIONS !
// A functions is block of statements/codes that can be used repeatedly in a program.
echo '<br>';
echo '<br>';

function myMessage()
{
    echo "Hello Jeph";
};

myMessage("Hello Jeph");

echo '<br>';
echo '<br>';

function streetName($sname)
{
    echo "$sname Asaba <br>";
}

streetName("D.L.A");
streetName("Ezenei");

echo '<br>';
echo '<br>';

function HomeAddress ( $saddress, $sname ) {
    echo $saddress, $sname;
};

HomeAddress("5", "DLA"); 
echo '<br>';
HomeAddress("8", "Ezenei");
