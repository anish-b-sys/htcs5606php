<?php
include_once "dbconnection.php";

session_start();  //either you use session or set session, you must have session start
$username = $_SESSION["username"]; //use session

$sql = "select password from Users where username='$username'";
$result = $connection->query($sql);
if ($result->num_rows == 1) {
    while ($row = $result->fetch_assoc()) {
        $oldPwdInDb = $row["password"];
    }
}

if (isset($_POST["oldpwd"])) { //isset check variable exist or not
    if ($_POST["oldpwd"] == $oldPwdInDb) {
        $sql = "update Users set password = '";
        $sql .= $_POST["newpwd"];
        $sql .= "' where username = '$username'";
        $result = $connection->query($sql);
        echo "password changed";
    } else {
        echo "go back, input again";
    }

}
$connection->close();
?>
<p><a href="logout.php">Logout</a></p>

