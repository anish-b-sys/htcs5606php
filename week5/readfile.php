<?php

$file = fopen("helloworld.txt", 'r'); //fopen all programming language, r means readonly, w write, a append
while (!feof($file)){
    echo fgets($file)."<br>";
}

fclose($file);
