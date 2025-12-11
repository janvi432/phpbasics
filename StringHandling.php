<?php
// Common String Functions

$str = "Full Stack Development with PHP" ;
echo "<h3> Common String Functions</h3>";
echo "Original String: $str<br>";
echo "Length: " . strlen($str) . "<br>";
echo "Word Count: " . str_word_count($str) . "<br>";
echo "Reversed: " . strrev($str) . "<br>";
echo "Position of 'PHP': " . strpos($str, "PHP") . "<br>";
echo "Replace PHP → JavaScript: " . str_replace("PHP", "JavaScript", $str) . "<br><br>";

// Explode & Implode
echo "<h3>Explode & Implode</h3>";
$fruitString = "apple,banana,grape,orange";

// explode into array
$fruits = explode(",", $fruitString);

echo "Fruits (each on new line):<br>";
foreach ($fruits as $fruit) {
    echo $fruit . "<br>";
}

// implode back
echo "<br>Imploded with ' | ':<br>";
echo implode(" | ", $fruits) . "<br><br>";

//String Security
echo "<h3>String Security</h3>";
$userInput = "<script>alert('hack');</script> Welcome";
$safeOutput = htmlspecialchars($userInput);
echo "Original Input: $userInput<br>";
echo "Safe Output: $safeOutput<br><br>";

// trim example
$txt = "  Hello World  ";

echo "Before Trim: '$txt'<br>";
echo "After Trim: '" . trim($txt) . "'<br>";
?>
