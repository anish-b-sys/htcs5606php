<?php
include_once "dbconnection.php";

session_start();  //either you use session or set session, you must have session start
$username = $_SESSION["username"]; //use session
$oldPwd = $_POST["oldpwd"];
$newPwd = $_POST["newpwd"];
if (changePassword($username, $oldPwd, $newPwd)){ //my function return true or false
    echo "Password changed";
}else{
    echo "Password not changed";
}
?>
<p><a href="logout.php">Logout</a></p>