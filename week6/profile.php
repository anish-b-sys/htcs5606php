<?php
include_once "dbconnection.php";

session_start();
$username = $_SESSION["username"];

showProfile($username); //call the function name

?>
<p><a href="logout.php">Logout</a></p>
