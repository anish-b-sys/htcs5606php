<?php

$grating = "hello"; // $ is the syntax for variable in php
$who = "lei";

echo $grating;
echo $who;

echo "<h1>" . $grating . " " . $who . "</h1>"; //dot means merge strings in php

$x = 4;
$y = 5;
echo "x = ".$x;
echo "y = ".$y;
echo "z = x + y = ".($x + $y);

$grating = "Hello world";
//length of string
echo "<br>".strlen($grating)." string length<br>";
//word count -- count number of words in that string
echo str_word_count($grating)." string word count<br>";
// string reverse
echo strrev($grating)." string reverse<br>";
// string position
echo strpos($grating, "Hello")." word position<br>";
//string replace
echo str_replace($grating, "Hello", "byebye")."
 word replace<br>";
//to uppercase
echo strtoupper($grating)." To Upper case<br>";
//to lower
echo strtolower($grating)." To lower case<br>";
