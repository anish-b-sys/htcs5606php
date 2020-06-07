
<?php
include_once "class/User.php";
$username = $_POST['username'];
$password = $_POST['pwd'];
$name = $_POST['name'];
//create an object from class User
$newUser = new User(0,$username, $password, $name );
//use the method save()
$newUser->save();