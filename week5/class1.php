<link rel="stylesheet" href="css/style.css">
<?php

echo "hello world"; //echo means print

echo "<h1>Hello world</h1>"; //echo print html elements out

echo "<p>Hello world</p>";

echo "<p style='color: red'>Hello world</p>";

$i = 0; //set counter
while ($i < 100){ //set condition
    echo "<p>Hello</p>"; //do something if condition is true
    $i = $i + 1; // update counter
}
