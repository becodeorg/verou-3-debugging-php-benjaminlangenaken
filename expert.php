<?php

// In strict mode, only a variable of the requested type (like: int of the type declaration) will be accepted,
// or a TypeError will be thrown.
declare(strict_types=1);


// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong
echo "Exercises:";

function new_exercise($x)
{
$block = "<br/><hr/><br/><br/>Exercise ${x} starts here:<br/>";
echo $block;
};

// Call function
new_exercise(1);


// === Exercise 2 ===
// Below we create a week array with all days of the week.
// We then try to print the first day which is monday, execute the code and see what happens.
new_exercise(2);

$week = ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"];
// Replace [1] with [0]
$monday = $week[0];

echo $monday;
echo "<br>";


// === Exercise 3 ===
// This should echo ` "Debugged !" `, fix it so that that is the literal text echo'ed
new_exercise(3);
// Replace “ ” with " " 
$str = "Debugged ! Also very fun";
echo substr($str, 0, 10);
echo "<br>";


// === Exercise 4 ===
// Sometimes debugging code is just like looking up code and syntax...
// The print_r($week) should give:  Array ( [0] => mon [1] => tues [2] => wednes [3] => thurs [4] => fri [5] => satur [6] => sun )
// Look up whats going wrong with this code, and then fix it
// Bonus: can you fix it with changing just one character? (hard)
new_exercise(4);

foreach($week as &$day)
{
    $day = substr($day, 0, 3);
}

print_r($week);
echo "<br>";


// === Exercise 5 ===
// The result should be: "Copyright © <current year> - BeCode"
new_exercise(5);

// function copyright(int $year)
// {
//     return "&copy; $year BeCode";
// }
// //print the copyright
// copyright(date('Y'));

function copyright($year)
{
    echo "&copy; ${year} BeCode";
}
//print the copyright
copyright(date('Y'));
echo "<br>";


// === Exercise 6 ===
// The array should be printing every letter of the alphabet (a-z)
// Fix the code so the for loop pushes each letter of the alphabet in the array
new_exercise(6);

// $arr = [];
// for ($i = 0; $letter; $i++) {
//     array_push($arr, $letter);
// }

// print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array

// Add range for variable $arr
$arr = range("a", "z");

for ($i = 0; $letter; $i++) {
    array_push($arr, $letter);
}

print_r($arr); // Array ([0] => a, [1] => b, [2] => c, ...) a-z alphabetical array
echo "<br>";
