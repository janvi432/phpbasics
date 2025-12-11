<?php
// User-Defined Function
function greetUser($name) {
    return "Hello, $name! Welcome to PHP.";
}
echo greetUser("Janvi") . "<br><br>";

// Function with multiple arguments

function calculateArea($length, $width) {
    return $length * $width;
}

echo "Area: " . calculateArea(5, 10) . "<br><br>";

//  Variable Scope
$globalVar = "I am global";

function testScope1() {
    echo "testScope1: ";
    if (isset($globalVar)) {
        echo $globalVar;
    } else {
        echo "Not accessible inside function";
    }
}

function testScope2() {
    global $globalVar;
    echo "testScope2: $globalVar";
}

testScope1();
echo "<br>";
testScope2();
?>


