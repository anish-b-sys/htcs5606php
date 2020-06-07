<?php
/**
 * Author: Lei Song
 * Date: 26 May 2020
 * Version: 1.0
 * Purpose: for login
 */

if (isset($_POST["username"])){
    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once "dbconnection.php";
//I will use my login function here
    if (login($username,$password)){ // if true (login success)
        session_start();
        $_SESSION["username"] = $username;

    }else{ //login fail
        echo "Wrong username or password";
    }
}
?>




