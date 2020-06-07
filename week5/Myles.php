<?php
//set default timezone
date_default_timezone_set('Pacific/Auckland');
//take the time from system
//date function to tak ethe time from system or onliune
$t = date("y-m-d"); //https://www.php.net/manual/en/function.date.php
//in line 6, it was data
$t1 = date("H.i.s");
echo $t. " ".$t1;

$hour = intval(date("H"));
$minutes = intval(date("i"));
echo "<p>h: ".$hour."</p>";
echo "<p>m: ".$minutes."</p>";

if($hour>=12 && $minutes <=55) {  //&&means and || means or
    //work before 1pm
    echo "have a good morning";
}elseif ($hour<20) {
    //work before 2100
    echo "have a good day";

}else {
    //work after 2100 to 1020
    echo "have a good night";
}
